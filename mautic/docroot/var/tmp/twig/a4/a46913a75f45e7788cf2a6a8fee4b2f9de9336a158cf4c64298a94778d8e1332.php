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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php */
class __TwigTemplate_7e942c27077b5bc9f73ee318170c1e94e3d4082d536af759832bc347d257b66d extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date\\Other;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateDefault;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;

class DateDefaultTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateDefault::getParameterValue
     */
    public function testGetParameterValue()
    {
        \$dateDecorator             = \$this->createMock(DateDecorator::class);
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([]);

        \$filterDecorator = new DateDefault(\$dateDecorator, '2018-03-02 01:02:03');

        \$this->assertEquals('2018-03-02 01:02:03', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php");
    }
}
