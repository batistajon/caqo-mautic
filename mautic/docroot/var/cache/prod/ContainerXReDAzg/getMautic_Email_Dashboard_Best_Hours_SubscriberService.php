<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.dashboard.best.hours.subscriber' shared service.

return $this->services['mautic.email.dashboard.best.hours.subscriber'] = new \Mautic\EmailBundle\EventListener\DashboardBestHoursSubscriber(($this->services['mautic.email.model.email'] ?? $this->load('getMautic_Email_Model_EmailService.php')));
