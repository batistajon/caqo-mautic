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

/* @bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php */
class __TwigTemplate_ca311eedfb5f15586734e4cf9ba702dd47fb6ab6ebd113560056d51785a0be2f extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Entity;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\CoreBundle\\Test\\Doctrine\\DBALMocker;
use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use PHPUnit\\Framework\\TestCase;

class FieldChangeRepositoryTest extends TestCase
{
    public function testWhereQueryPartForFindingChangesForSingleObject(): void
    {
        \$dbalMock = new DBALMocker(\$this);
        \$metadata = \$this->createMock(ClassMetadata::class);

        \$integration = 'test';
        \$objectType  = 'foobar';
        \$objectId    = 5;

        \$repository = new FieldChangeRepository(\$dbalMock->getMockEm(), \$metadata);
        \$repository->findChangesForObject(\$integration, \$objectType, \$objectId);

        \$where = \$dbalMock->getQueryPart('where');
        \$this->assertCount(1, \$where);
        \$this->assertCount(1, \$where[0]);

        /** @var CompositeExpression \$expr */
        \$expr = \$where[0][0];
        \$this->assertSame(
            '(f.integration = :integration) AND (f.object_type = :objectType) AND (f.object_id = :objectId)',
            (string) \$expr
        );

        \$parameters = \$dbalMock->getQueryPart('parameters');
        \$this->assertCount(3, \$parameters);
        \$this->assertEquals('integration', \$parameters[0][0]);
        \$this->assertEquals(\$integration, \$parameters[0][1]);
        \$this->assertEquals('objectType', \$parameters[1][0]);
        \$this->assertEquals(\$objectType, \$parameters[1][1]);
        \$this->assertEquals('objectId', \$parameters[2][0]);
        \$this->assertEquals(\$objectId, \$parameters[2][1]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php");
    }
}
