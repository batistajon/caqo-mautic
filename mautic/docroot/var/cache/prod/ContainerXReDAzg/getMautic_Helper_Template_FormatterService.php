<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.helper.template.formatter' shared service.

return $this->services['mautic.helper.template.formatter'] = new \Mautic\CoreBundle\Templating\Helper\FormatterHelper(($this->services['mautic.helper.template.date'] ?? $this->load('getMautic_Helper_Template_DateService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
