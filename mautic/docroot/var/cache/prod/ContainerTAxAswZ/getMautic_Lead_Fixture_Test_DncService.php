<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.fixture.test.dnc' shared service.

return $this->services['mautic.lead.fixture.test.dnc'] = new \Mautic\LeadBundle\Tests\DataFixtures\ORM\LoadDncData(($this->services['mautic.lead.model.list'] ?? $this->getMautic_Lead_Model_ListService()), ($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()));