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

/* @bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingTest.php */
class __TwigTemplate_9cef3eb74bbbbfab002695c9ed7fa7a513fc010db0264abd3b338e12777e79fe extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Entity;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use PHPUnit\\Framework\\TestCase;

class ObjectMappingTest extends TestCase
{
    /**
     * @var \\DateTime
     */
    private \$dateCreated;

    public function setUp(): void
    {
        \$this->dateCreated = new \\DateTime();

        parent::setUp();
    }

    public function testConstruct(): void
    {
        \$objectMapping = new ObjectMapping(\$this->dateCreated);
        \$this->assertInstanceOf(ObjectMapping::class, \$objectMapping);
        \$this->assertEquals(\$this->dateCreated, \$objectMapping->getDateCreated());
    }

    public function testSetAndGetIntegrationReferenceId(): void
    {
        \$objectMapping = new ObjectMapping(\$this->dateCreated);
        \$objectMapping->setIntegrationReferenceId('ref');
        \$this->assertEquals('ref', \$objectMapping->getIntegrationReferenceId());
    }

    public function testLoadMetadata(): void
    {
        \$metadata = new \\Doctrine\\ORM\\Mapping\\ClassMetadata(ObjectMapping::class);
        ObjectMapping::loadMetadata(\$metadata);

        \$expectedFieldNames = [
            'id',
            'dateCreated',
            'integration',
            'internalObjectName',
            'internalObjectId',
            'integrationObjectName',
            'integrationObjectId',
            'lastSyncDate',
            'internalStorage',
            'isDeleted',
            'integrationReferenceId',
        ];
        \$this->assertEquals(\$expectedFieldNames, \$metadata->getFieldNames());

        \$referenceIdMapping = \$metadata->table['indexes']['integration_reference'];
        \$this->assertEquals(
            [
                'integration',
                'integration_object_name',
                'integration_reference_id',
                'integration_object_id',
            ],
            \$referenceIdMapping['columns'],
            'Required index is not being created.'
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingTest.php");
    }
}
