<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.auth_provider.oauth2twolegged' shared service.

return $this->services['mautic.integrations.auth_provider.oauth2twolegged'] = new \Mautic\IntegrationsBundle\Auth\Provider\Oauth2TwoLegged\HttpFactory();