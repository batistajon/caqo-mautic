FROM php:8.0-apache-bullseye

# Debian 11 - bullseye
RUN apt update \
    && apt upgrade -y \
    && apt install python3 python3-venv python3-pip ssh bash git jq ca-certificates curl gnupg libzip-dev unzip zip libc-client-dev libkrb5-dev \
    autoconf \
    build-essential \
    apt-utils \
    zlib1g-dev \
    libzip-dev \
    unzip \
    zip \
    libmagick++-dev \
    libmagickwand-dev \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    unixodbc \
    unixodbc-dev \
    freetds-dev \
    freetds-bin \
    tdsodbc -y

RUN docker-php-ext-install gd intl pdo_mysql mysqli zip soap exif bcmath \
    && docker-php-ext-configure gd \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure soap \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap \
    && docker-php-ext-enable gd \
    && docker-php-ext-enable intl \
    && docker-php-ext-enable pdo_mysql \
    && docker-php-ext-enable mysqli \
    && docker-php-ext-enable soap \
    && docker-php-ext-enable zip \
    && docker-php-ext-enable exif \
    && pecl install imagick \
    && docker-php-ext-enable imagick

# install node
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get update && apt-get install -y nodejs \
    && node --version && npm --version

# Install Composer
ENV COMPOSER_VERSION 2.6.5
RUN \
    curl -sSL https://github.com/composer/composer/releases/download/$COMPOSER_VERSION/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

RUN cd /var/www/html && COMPOSER_PROCESS_TIMEOUT=2000 composer create-project mautic/recommended-project:^5 mautic --no-interaction

WORKDIR /var/www/html/mautic

RUN a2enmod rewrite