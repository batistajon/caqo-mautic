<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.focus.subscriber.stat' shared service.

return $this->services['mautic.focus.subscriber.stat'] = new \MauticPlugin\MauticFocusBundle\EventListener\StatSubscriber(($this->services['mautic.focus.model.focus'] ?? $this->getMautic_Focus_Model_FocusService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
