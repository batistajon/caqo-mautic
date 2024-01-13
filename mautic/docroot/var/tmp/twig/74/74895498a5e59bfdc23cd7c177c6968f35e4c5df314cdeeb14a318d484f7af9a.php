<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/LeadBundle/Field/Notification/CustomFieldNotification.php */
class __TwigTemplate_7e1504422d769fe7dc278c1bcb675dcf6dd92398da87e438eabfba915bfc7979 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field\\Notification;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Exception\\NoUserException;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CustomFieldNotification
{
    /**
     * @var NotificationModel
     */
    private \$notificationModel;

    /**
     * @var UserModel
     */
    private \$userModel;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(
        NotificationModel \$notificationModel,
        UserModel \$userModel,
        TranslatorInterface \$translator
    ) {
        \$this->notificationModel = \$notificationModel;
        \$this->userModel         = \$userModel;
        \$this->translator        = \$translator;
    }

    public function customFieldWasCreated(LeadField \$leadField, int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException \$e) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.created_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.created_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    public function customFieldLimitWasHit(LeadField \$leadField, int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException \$e) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.custom_field_limit_hit_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.custom_field_limit_hit_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    public function customFieldCannotBeCreated(LeadField \$leadField, int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException \$e) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.cannot_be_created_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.cannot_be_created_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    private function addToNotificationCenter(User \$user, string \$message, string \$header): void
    {
        \$this->notificationModel->addNotification(
            \$message,
            'info',
            false,
            \$header,
            'fa-columns',
            null,
            \$user
        );
    }

    /**
     * @throws NoUserException
     */
    private function getUser(int \$userId): User
    {
        if (!\$userId || !\$user = \$this->userModel->getEntity(\$userId)) {
            throw new NoUserException();
        }

        return \$user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Notification/CustomFieldNotification.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/LeadBundle/Field/Notification/CustomFieldNotification.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Notification/CustomFieldNotification.php");
    }
}
