<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.sendgrid_api.mail.personalization' shared service.

return $this->services['mautic.transport.sendgrid_api.mail.personalization'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\Mail\SendGridMailPersonalization();