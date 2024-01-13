<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.timeline_events.campaign.subscriber' shared service.

return $this->services['mautic.lead.timeline_events.campaign.subscriber'] = new \Mautic\LeadBundle\EventListener\TimelineEventLogCampaignSubscriber(($this->services['mautic.lead.repository.lead_event_log'] ?? $this->load('getMautic_Lead_Repository_LeadEventLogService.php')), ($this->services['mautic.helper.user'] ?? $this->getMautic_Helper_UserService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
