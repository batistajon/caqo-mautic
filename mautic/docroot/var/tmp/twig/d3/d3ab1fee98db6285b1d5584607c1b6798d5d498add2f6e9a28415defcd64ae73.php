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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Callback/CallbackEnum.php */
class __TwigTemplate_1a9ce852d5f74204a8aa8db407f305396030e249483959cd573cb3796a2fed18 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Callback;

use Mautic\\LeadBundle\\Entity\\DoNotContact;

class CallbackEnum
{
    const BOUNCE            = 'bounce';
    const DROPPED           = 'dropped';
    const SPAM_REPORT       = 'spamreport';
    const UNSUBSCRIBE       = 'unsubscribe';
    const GROUP_UNSUBSCRIBE = 'group_unsubscribe';

    /**
     * @see https://sendgrid.com/docs/API_Reference/Webhooks/event.html#-Event-Types
     *
     * @param string \$event
     *
     * @return bool
     */
    public static function shouldBeEventProcessed(\$event)
    {
        return in_array(\$event, self::getSupportedEvents(), true);
    }

    /**
     * @param \$event
     *
     * @return string|null
     */
    public static function convertEventToDncReason(\$event)
    {
        if (!self::shouldBeEventProcessed(\$event)) {
            return null;
        }

        \$mapping = self::eventMappingToDncReason();

        return \$mapping[\$event];
    }

    /**
     * @return array
     */
    private static function getSupportedEvents()
    {
        return [
            self::BOUNCE,
            self::DROPPED,
            self::SPAM_REPORT,
            self::UNSUBSCRIBE,
            self::GROUP_UNSUBSCRIBE,
        ];
    }

    /**
     * @return array
     */
    private static function eventMappingToDncReason()
    {
        return [
            self::BOUNCE            => DoNotContact::BOUNCED,
            self::DROPPED           => DoNotContact::BOUNCED,
            self::SPAM_REPORT       => DoNotContact::BOUNCED,
            self::UNSUBSCRIBE       => DoNotContact::UNSUBSCRIBED,
            self::GROUP_UNSUBSCRIBE => DoNotContact::UNSUBSCRIBED,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/CallbackEnum.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/CallbackEnum.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Callback/CallbackEnum.php");
    }
}
