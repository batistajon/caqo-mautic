<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Mautic\ChannelBundle\Form\Type\MessageType' shared service.

$this->services['Mautic\\ChannelBundle\\Form\\Type\\MessageType'] = $instance = new \Mautic\ChannelBundle\Form\Type\MessageType(($this->services['mautic.channel.model.message'] ?? $this->load('getMautic_Channel_Model_MessageService.php')));

$instance->setSecurity(($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));

return $instance;