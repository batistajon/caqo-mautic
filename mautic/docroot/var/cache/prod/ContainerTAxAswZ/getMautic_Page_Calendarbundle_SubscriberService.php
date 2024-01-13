<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.page.calendarbundle.subscriber' shared service.

return $this->services['mautic.page.calendarbundle.subscriber'] = new \Mautic\PageBundle\EventListener\CalendarSubscriber(($this->services['mautic.page.model.page'] ?? $this->getMautic_Page_Model_PageService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()));