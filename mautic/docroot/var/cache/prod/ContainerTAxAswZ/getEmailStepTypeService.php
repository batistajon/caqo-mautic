<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Mautic\InstallBundle\Configurator\Form\EmailStepType' shared service.

return $this->services['Mautic\\InstallBundle\\Configurator\\Form\\EmailStepType'] = new \Mautic\InstallBundle\Configurator\Form\EmailStepType(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.email.transport_type'] ?? $this->load('getMautic_Email_TransportTypeService.php')));