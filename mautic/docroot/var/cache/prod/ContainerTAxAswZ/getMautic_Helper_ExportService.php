<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.helper.export' shared service.

return $this->services['mautic.helper.export'] = new \Mautic\CoreBundle\Helper\ExportHelper(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), ($this->services['mautic.helper.file_path_resolver'] ?? $this->getMautic_Helper_FilePathResolverService()));