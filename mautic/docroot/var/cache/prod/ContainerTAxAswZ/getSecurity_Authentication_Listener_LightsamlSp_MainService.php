<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.lightsaml_sp.main' shared service.

$a = ($this->services['mautic.security.authentication_handler'] ?? $this->load('getMautic_Security_AuthenticationHandlerService.php'));

$this->privates['security.authentication.listener.lightsaml_sp.main'] = $instance = new \LightSaml\SpBundle\Security\Firewall\LightSamlSpListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? $this->load('getSecurity_Authentication_SessionStrategyService.php')), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'main', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($a, ['login_path' => $this->getEnv('MAUTIC_SAML_LOGIN_PATH'), 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false], 'main'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($a, ['login_path' => $this->getEnv('MAUTIC_SAML_LOGIN_PATH'), 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), ['check_path' => $this->getEnv('MAUTIC_SAML_LOGIN_CHECK_PATH'), 'use_forward' => false, 'require_previous_session' => false], ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

$instance->setProfile(($this->services['ligthsaml.profile.acs'] ?? $this->load('getLigthsaml_Profile_AcsService.php')));
$instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')));

return $instance;
