<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.model.company_report_data' shared service.

return $this->services['mautic.lead.model.company_report_data'] = new \Mautic\LeadBundle\Model\CompanyReportData(($this->services['mautic.lead.model.field'] ?? $this->getMautic_Lead_Model_FieldService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
