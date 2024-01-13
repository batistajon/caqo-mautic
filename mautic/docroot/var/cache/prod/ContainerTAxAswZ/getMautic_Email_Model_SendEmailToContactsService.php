<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.model.send_email_to_contacts' shared service.

return $this->services['mautic.email.model.send_email_to_contacts'] = new \Mautic\EmailBundle\Model\SendEmailToContact(($this->services['mautic.helper.mailer'] ?? $this->getMautic_Helper_MailerService()), ($this->services['mautic.email.helper.stat'] ?? $this->load('getMautic_Email_Helper_StatService.php')), ($this->services['mautic.lead.model.dnc'] ?? $this->load('getMautic_Lead_Model_DncService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));