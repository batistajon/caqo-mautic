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

/* @bundles/DashboardBundle/Tests/Controller/DashboardControllerFunctionalTest.php */
class __TwigTemplate_8a83c248e5f3d17326d2594113669183e1e657f5ccff979ecca45115bc1a668e extends Template
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

namespace Mautic\\DashboardBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\UserBundle\\Entity\\User;
use PHPUnit\\Framework\\Assert;

class DashboardControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testWidgetWithReport(): void
    {
        \$user = \$this->em->getRepository(User::class)->findOneBy([]);

        \$report = new Report();
        \$report->setName('Lead and points');
        \$report->setSource('lead.pointlog');
        \$this->em->persist(\$report);
        \$this->em->flush();

        \$widget = new Widget();
        \$widget->setName('Line graph report');
        \$widget->setType('report');
        \$widget->setParams(['graph' => sprintf('%s:mautic.lead.graph.line.leads', \$report->getId())]);
        \$widget->setWidth(100);
        \$widget->setHeight(200);
        \$widget->setCreatedBy(\$user);
        \$this->em->persist(\$widget);

        \$this->em->flush();
        \$this->em->clear();

        \$this->client->request('GET', sprintf('/s/dashboard/widget/%s', \$widget->getId()), [], [], [
            'HTTP_X-Requested-With' => 'XMLHttpRequest',
        ]);

        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode());

        \$content = \$response->getContent();
        Assert::assertJson(\$content);

        \$data = json_decode(\$content, true);
        Assert::assertIsArray(\$data);
        Assert::assertArrayHasKey('success', \$data);
        Assert::assertSame(1, \$data['success']);
        Assert::assertArrayHasKey('widgetId', \$data);
        Assert::assertSame((string) \$widget->getId(), \$data['widgetId']);
        Assert::assertArrayHasKey('widgetWidth', \$data);
        Assert::assertSame(\$widget->getWidth(), \$data['widgetWidth']);
        Assert::assertArrayHasKey('widgetHeight', \$data);
        Assert::assertSame(\$widget->getHeight(), \$data['widgetHeight']);
        Assert::assertArrayHasKey('widgetHtml', \$data);
        Assert::assertStringContainsString('View Full Report', \$data['widgetHtml']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Tests/Controller/DashboardControllerFunctionalTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Controller/DashboardControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Tests/Controller/DashboardControllerFunctionalTest.php");
    }
}
