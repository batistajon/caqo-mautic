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

/* @bundles/FormBundle/Tests/Model/FieldModelTest.php */
class __TwigTemplate_4f1548e35ad30a5a977c43a8b35bfa2db9258ac5e26b693202ad410e15ce57b4 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Model;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\EntityManager;
use Mautic\\FormBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\TestCase;

class FieldModelTest extends TestCase
{
    public function testGenerateAlias()
    {
        \$connection = \$this->createMock(Connection::class);

        \$platform = new class() {
            public function getReservedKeywordsList(): object
            {
                return new class() {
                    public function isKeyword(): void
                    {
                    }
                };
            }

            public function isKeyword(): void
            {
            }
        };

        \$connection->method('getDatabasePlatform')
            ->willReturn(\$platform);

        \$leadFieldModel = \$this->createMock(\\Mautic\\LeadBundle\\Model\\FieldModel::class);
        \$fieldModel     = new FieldModel(\$leadFieldModel);

        \$entityManager = \$this->createMock(EntityManager::class);
        \$entityManager->expects(\$this->any())
            ->method('getConnection')
            ->willReturn(\$connection);
        \$fieldModel->setEntityManager(\$entityManager);

        \$aliases = [
            'existed_alias',
            'existed_alias_with_space',
        ];

        \$strings = [
            'existed_alias1'            => 'existed alias',
            'not_existed'               => 'not existed',
            'existed_alias_with_space1' => 'existed alias with space',
            'alias_test'                => 'alias test',
        ];

        foreach (\$strings as \$expected => \$string) {
            \$alias = \$fieldModel->generateAlias(\$string, \$aliases);
            \$this->assertEquals(\$expected, \$alias);
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
        return "@bundles/FormBundle/Tests/Model/FieldModelTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Model/FieldModelTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Model/FieldModelTest.php");
    }
}
