<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.twig.extension.date' shared service.

return $this->services['templating.twig.extension.date'] = new \Mautic\CoreBundle\Templating\Twig\Extension\DateExtension(($this->services['mautic.helper.template.date'] ?? $this->load('getMautic_Helper_Template_DateService.php')));