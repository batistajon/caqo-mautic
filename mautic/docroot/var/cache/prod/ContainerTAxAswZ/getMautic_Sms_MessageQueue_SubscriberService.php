<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.sms.message_queue.subscriber' shared service.

return $this->services['mautic.sms.message_queue.subscriber'] = new \Mautic\SmsBundle\EventListener\MessageQueueSubscriber(($this->services['mautic.sms.model.sms'] ?? $this->load('getMautic_Sms_Model_SmsService.php')));
