<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.property_access' shared service.

return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('9r2ImMPW4r', 0, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
