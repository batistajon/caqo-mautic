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

/* @bundles/WebhookBundle/Tests/Controller/WebhookControllerFunctionalTest.php */
class __TwigTemplate_d4ceeb50a2e2d813b53cea801b3eaab73f168b88cda0e7c0a59bc333369f34a4 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\WebhookBundle\\Entity\\Event;
use Mautic\\WebhookBundle\\Entity\\Log;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

final class WebhookControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testViewWebhookDetail(): void
    {
        \$webhook = \$this->createWebhook('test', 'http://domain.tld', 'secret');
        \$this->createWebhookEvent(\$webhook, 'Type');
        for (\$log = 1; \$log <= 105; ++\$log) {
            \$this->createWebhookLog(\$webhook, 'test', 200);
        }
        \$this->em->flush();
        \$this->em->clear();
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/webhooks/view/'.\$webhook->getId());

        \$logList = \$crawler->filter('.table.table-responsive > tbody > tr')->count();
        Assert::assertSame(Webhook::LOGS_DISPLAY_LIMIT, \$logList);
    }

    private function createWebhook(string \$name, string \$url, string \$secret): Webhook
    {
        \$webhook = new Webhook();
        \$webhook->setName(\$name);
        \$webhook->setWebhookUrl(\$url);
        \$webhook->setSecret(\$secret);
        \$this->em->persist(\$webhook);

        return \$webhook;
    }

    private function createWebhookEvent(Webhook \$webhook, string \$type): Event
    {
        \$event = new Event();
        \$event->setWebhook(\$webhook);
        \$event->setEventType(\$type);
        \$this->em->persist(\$event);

        return \$event;
    }

    private function createWebhookLog(Webhook \$webhook, string \$note, int \$statusCode): Log
    {
        \$log = new Log();
        \$log->setWebhook(\$webhook);
        \$log->setNote(\$note);
        \$log->setStatusCode(\$statusCode);
        \$this->em->persist(\$log);

        return \$log;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/Controller/WebhookControllerFunctionalTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Controller/WebhookControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/Controller/WebhookControllerFunctionalTest.php");
    }
}
