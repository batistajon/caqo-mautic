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

/* @bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php */
class __TwigTemplate_b8b4b6259538dd13c6f5303c84fbb5d694e467f41862177c5e858b45a0097ca7 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller\\Api;

use Mautic\\CampaignBundle\\Tests\\CampaignTestAbstract;
use Mautic\\LeadBundle\\Controller\\Api\\FieldApiController;
use Symfony\\Component\\HttpFoundation\\Request;

class FieldApiControllerTest extends CampaignTestAbstract
{
    private \$defaultWhere = [
        [
            'col'  => 'object',
            'expr' => 'eq',
            'val'  => null,
        ],
    ];

    public function testgetWhereFromRequestWithNoWhere()
    {
        \$request = \$this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$result = \$this->getResultFromProtectedMethod('getWhereFromRequest', [], \$request);

        \$this->assertEquals(\$this->defaultWhere, \$result);
    }

    public function testgetWhereFromRequestWithSomeWhere()
    {
        \$where = [
            [
                'col'  => 'id',
                'expr' => 'eq',
                'val'  => 5,
            ],
        ];

        \$request = \$this->getMockBuilder(Request::class)
            ->onlyMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();

        \$request->method('get')
            ->willReturn(\$where);

        \$result = \$this->getResultFromProtectedMethod('getWhereFromRequest', [], \$request);

        \$this->assertEquals(array_merge(\$where, \$this->defaultWhere), \$result);
    }

    protected function getResultFromProtectedMethod(\$method, array \$args, Request \$request = null)
    {
        \$controller = new FieldApiController();

        if (\$request) {
            \$controller->setRequest(\$request);
        }

        \$controllerReflection = new \\ReflectionClass(FieldApiController::class);
        \$method               = \$controllerReflection->getMethod(\$method);
        \$method->setAccessible(true);

        return \$method->invokeArgs(\$controller, \$args);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php");
    }
}
