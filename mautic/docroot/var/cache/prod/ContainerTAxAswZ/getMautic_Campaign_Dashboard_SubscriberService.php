<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.dashboard.subscriber' shared service.

return $this->services['mautic.campaign.dashboard.subscriber'] = new \Mautic\CampaignBundle\EventListener\DashboardSubscriber(($this->services['mautic.campaign.model.campaign'] ?? $this->load('getMautic_Campaign_Model_CampaignService.php')), ($this->services['mautic.campaign.model.event'] ?? $this->load('getMautic_Campaign_Model_EventService.php')));