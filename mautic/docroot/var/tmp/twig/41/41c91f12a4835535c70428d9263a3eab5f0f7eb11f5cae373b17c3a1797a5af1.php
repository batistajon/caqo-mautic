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

/* @bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php */
class __TwigTemplate_647467813b7e66cf8ce4019d8249dd56e0063a5dad3af708e1e38519311d0c29 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Helper\\FieldAliasHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;

class FieldAliasHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$fieldModel;
    private \$fieldRepository;
    private \$helper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->fieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$this->fieldModel      = \$this->getMockBuilder(FieldModel::class)
            ->onlyMethods(['cleanAlias', 'getRepository'])
            ->disableOriginalConstructor()
            ->getMock();

        \$this->fieldRepository->method('getAliases')->willReturn([
            'title',
            'firstname',
            'lastname',
        ]);

        \$this->fieldModel->method('cleanAlias')->will(\$this->returnCallback(function () {
            return func_get_args()[0];
        }));

        \$this->fieldModel->method('getRepository')->willReturn(\$this->fieldRepository);

        \$this->helper = new FieldAliasHelper(\$this->fieldModel);
    }

    public function testDuplicatedAliasWithAliasSet()
    {
        \$field = new LeadField();
        \$field->setAlias('title');
        \$field = \$this->helper->makeAliasUnique(\$field);

        \$this->assertEquals('title1', \$field->getAlias());
    }

    public function testDuplicatedAliasWithAliasEmpty()
    {
        \$field = new LeadField();
        \$field->setName('title');
        \$field = \$this->helper->makeAliasUnique(\$field);

        \$this->assertEquals('title1', \$field->getAlias());
    }

    public function testUniqueAliasWithAliasEmpty()
    {
        \$field = new LeadField();
        \$field->setName('phone');
        \$field = \$this->helper->makeAliasUnique(\$field);

        \$this->assertEquals('phone', \$field->getAlias());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php");
    }
}
