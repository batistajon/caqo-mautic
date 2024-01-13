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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/CallbackEnumTest.php */
class __TwigTemplate_a31c30142195b3932eb281946aea7b25329cc0ac8c44ab88eee3470c0d9d8612 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Swiftmailer\\SendGrid\\Callback;

use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Callback\\CallbackEnum;
use Mautic\\LeadBundle\\Entity\\DoNotContact;

class CallbackEnumTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider supportedEventsProvider
     */
    public function testSupportedEvents(\$event)
    {
        \$this->assertTrue(CallbackEnum::shouldBeEventProcessed(\$event));
    }

    public function supportedEventsProvider()
    {
        return [
            ['bounce'],
            ['dropped'],
            ['spamreport'],
            ['unsubscribe'],
            ['group_unsubscribe'],
        ];
    }

    /**
     * @dataProvider notSupportedEventsProvider
     */
    public function testNotSupportedEvents(\$event)
    {
        \$this->assertFalse(CallbackEnum::shouldBeEventProcessed(\$event));
    }

    public function notSupportedEventsProvider()
    {
        return [
            ['processed'],
            ['delivered'],
            ['deferred'],
            ['open'],
            ['click'],
            ['group_resubscribe'],
        ];
    }

    public function testConvertEventToDncReason()
    {
        \$this->assertSame(DoNotContact::BOUNCED, CallbackEnum::convertEventToDncReason('bounce'));
        \$this->assertSame(DoNotContact::BOUNCED, CallbackEnum::convertEventToDncReason('dropped'));
        \$this->assertSame(DoNotContact::BOUNCED, CallbackEnum::convertEventToDncReason('spamreport'));
        \$this->assertSame(DoNotContact::UNSUBSCRIBED, CallbackEnum::convertEventToDncReason('unsubscribe'));
        \$this->assertSame(DoNotContact::UNSUBSCRIBED, CallbackEnum::convertEventToDncReason('group_unsubscribe'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/CallbackEnumTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/CallbackEnumTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/CallbackEnumTest.php");
    }
}
