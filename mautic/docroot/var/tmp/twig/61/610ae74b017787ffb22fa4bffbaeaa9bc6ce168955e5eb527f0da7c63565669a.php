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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php */
class __TwigTemplate_debfbec13a6a1e5e728e0dbae81dcdc83bb17d1a1e845c6ddb55bc6fd4ade364 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO\\Sync\\Order;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderDAO;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class OrderDAOTest extends TestCase
{
    /**
     * Test that the retry object is removed from the synced objects and the success object is present.
     */
    public function testGetSuccessfullySyncedObjects(): void
    {
        \$orderDAO      = new OrderDAO(new \\DateTimeImmutable(), false, 'IntegrationA');
        \$successObject = new ObjectChangeDAO('IntegrationA', 'Contact', 'integration-id-1', 'lead', 123);
        \$retryObject   = new ObjectChangeDAO('IntegrationA', 'Contact', 'integration-id-2', 'lead', 456);

        \$orderDAO->addObjectChange(\$successObject);
        \$orderDAO->addObjectChange(\$retryObject);
        \$orderDAO->retrySyncLater(\$retryObject);

        Assert::assertSame(
            [\$successObject],
            \$orderDAO->getSuccessfullySyncedObjects()
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php");
    }
}
