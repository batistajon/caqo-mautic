<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.webhook.subscriber' shared service.

return $this->services['mautic.form.webhook.subscriber'] = new \Mautic\FormBundle\EventListener\WebhookSubscriber(($this->services['mautic.webhook.model.webhook'] ?? $this->load('getMautic_Webhook_Model_WebhookService.php')));
