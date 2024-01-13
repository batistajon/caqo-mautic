<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.helper.notification' shared service.

return $this->services['mautic.campaign.helper.notification'] = new \Mautic\CampaignBundle\Executioner\Helper\NotificationHelper(($this->services['mautic.user.model.user'] ?? $this->getMautic_User_Model_UserService()), ($this->services['mautic.core.model.notification'] ?? $this->getMautic_Core_Model_NotificationService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))));
