<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.coreconfig_monitored_email' shared service.

return $this->services['mautic.form.type.coreconfig_monitored_email'] = new \Mautic\EmailBundle\Form\Type\ConfigMonitoredEmailType(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
