<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.dashboard.subscriber' shared service.

return $this->services['mautic.report.dashboard.subscriber'] = new \Mautic\ReportBundle\EventListener\DashboardSubscriber(($this->services['mautic.report.model.report'] ?? $this->load('getMautic_Report_Model_ReportService.php')), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));