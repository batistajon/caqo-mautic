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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php */
class __TwigTemplate_559bbb039e6e6a0d7ff2fbf79e522be54c10759b563e2ff08ee4c4ffe0226424 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\RelationsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\RelationDAO;
use PHPUnit\\Framework\\TestCase;

class RelationsDAOTest extends TestCase
{
    public function testAddRelations(): void
    {
        \$relationsDAO           = new RelationsDAO();
        \$integrationObjectId    = 'IntegrationId-123';
        \$integrationRelObjectId = 'IntegrationId-456';
        \$objectName             = 'Contact';
        \$relObjectName          = 'Account';
        \$relationObject         = new RelationDAO(
            \$objectName,
            \$relObjectName,
            \$relObjectName,
            \$integrationObjectId,
            \$integrationRelObjectId
        );

        \$relations = ['AccountId' => \$relationObject];

        \$relationsDAO->addRelations(\$relations);

        \$this->assertEquals(\$relationsDAO->current(), \$relationObject);
        \$this->assertEquals(\$relationsDAO->current()->getObjectName(), \$objectName);
        \$this->assertEquals(\$relationsDAO->current()->getRelObjectName(), \$relObjectName);
        \$this->assertEquals(\$relationsDAO->current()->getObjectIntegrationId(), \$integrationObjectId);
        \$this->assertEquals(\$relationsDAO->current()->getRelObjectIntegrationId(), \$integrationRelObjectId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php");
    }
}
