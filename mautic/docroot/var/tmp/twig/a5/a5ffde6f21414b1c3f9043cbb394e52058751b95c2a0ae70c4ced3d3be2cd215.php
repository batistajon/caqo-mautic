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

/* @bundles/WebhookBundle/Tests/Entity/WebhookTest.php */
class __TwigTemplate_42dd451106f7731be0805b085661e566504b94f1b90433b051285aa43d3053a5 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Entity;

use Mautic\\WebhookBundle\\Entity\\Webhook;
use PHPUnit\\Framework\\Assert;

class WebhookTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWasModifiedRecentlyWithNotModifiedWebhook()
    {
        \$webhook = new Webhook();
        \$this->assertNull(\$webhook->getDateModified());
        \$this->assertFalse(\$webhook->wasModifiedRecently());
    }

    public function testWasModifiedRecentlyWithWebhookModifiedAWhileBack()
    {
        \$webhook = new Webhook();
        \$webhook->setDateModified((new \\DateTime())->modify('-20 days'));
        \$this->assertFalse(\$webhook->wasModifiedRecently());
    }

    public function testWasModifiedRecentlyWithWebhookModifiedRecently()
    {
        \$webhook = new Webhook();
        \$webhook->setDateModified((new \\DateTime())->modify('-2 hours'));
        \$this->assertTrue(\$webhook->wasModifiedRecently());
    }

    public function testTriggersFromApiAreStoredAsEvents(): void
    {
        \$webhook  = new Webhook();
        \$triggers = [
            'mautic.company_post_save',
            'mautic.company_post_delete',
            'mautic.lead_channel_subscription_changed',
        ];

        \$webhook->setTriggers(\$triggers);

        \$events = \$webhook->getEvents();
        Assert::assertCount(3, \$events);

        foreach (\$events as \$key => \$event) {
            Assert::assertEquals(\$event->getEventType(), \$triggers[\$key]);
            Assert::assertSame(\$webhook, \$event->getWebhook());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/Entity/WebhookTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Entity/WebhookTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/Entity/WebhookTest.php");
    }
}
