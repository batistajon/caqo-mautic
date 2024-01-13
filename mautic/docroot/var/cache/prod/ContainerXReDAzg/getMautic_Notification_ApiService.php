<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.notification.api' shared service.

return $this->services['mautic.notification.api'] = new \Mautic\NotificationBundle\Api\OneSignalApi(($this->services['mautic.http.client'] ?? ($this->services['mautic.http.client'] = new \GuzzleHttp\Client())), ($this->services['mautic.page.model.trackable'] ?? $this->getMautic_Page_Model_TrackableService()), ($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()));
