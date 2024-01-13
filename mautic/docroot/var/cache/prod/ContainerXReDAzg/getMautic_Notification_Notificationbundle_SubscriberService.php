<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.notification.notificationbundle.subscriber' shared service.

return $this->services['mautic.notification.notificationbundle.subscriber'] = new \Mautic\NotificationBundle\EventListener\NotificationSubscriber(($this->services['mautic.core.model.auditlog'] ?? $this->getMautic_Core_Model_AuditlogService()), ($this->services['mautic.page.model.trackable'] ?? $this->getMautic_Page_Model_TrackableService()), ($this->services['mautic.page.helper.token'] ?? $this->getMautic_Page_Helper_TokenService()), ($this->services['mautic.asset.helper.token'] ?? $this->getMautic_Asset_Helper_TokenService()));
