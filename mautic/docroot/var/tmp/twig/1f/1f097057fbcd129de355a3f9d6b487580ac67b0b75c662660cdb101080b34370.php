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

/* @bundles/DashboardBundle/Tests/Entity/WidgetTest.php */
class __TwigTemplate_9410bfb8e2761a8e614f2cc04b5a791596677f0c29d9fa79930fa58a6ffefc3e extends Template
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

namespace Mautic\\DashboardBundle\\Tests\\Entity;

use Mautic\\DashboardBundle\\Entity\\Widget;

class WidgetTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWidgetNameXssAttempt()
    {
        \$widget = new Widget();
        \$widget->setName('csrf<script>console.log(\\'name\\');</script>');
        \$this->assertEquals('csrfconsole.log(\\'name\\');', \$widget->getName());
    }

    public function testWidgetWidthXssAttempt()
    {
        \$widget = new Widget();
        \$widget->setWidth('100<script>console.log(\\'yellow\\');</script>');
        \$this->assertEquals(100, \$widget->getWidth());
    }

    public function testWidgetHeightXssAttempt()
    {
        \$widget = new Widget();
        \$widget->setHeight('100<script>console.log(\\'yellow\\');</script>');
        \$this->assertEquals(100, \$widget->getHeight());
    }

    public function testWidgetOrderingSqliAttempt()
    {
        \$widget = new Widget();
        \$widget->setOrdering('3;DROP grep;');
        \$this->assertEquals(3, \$widget->getOrdering());
    }

    public function testWidgetTypeXssAttempt()
    {
        \$widget = new Widget();
        \$widget->setType('map.of.leads<script>console.log(\\'yellow\\');</script>');
        \$this->assertEquals('map.of.leadsconsole.log(\\'yellow\\');', \$widget->getType());
    }

    public function testToArrayEmpty()
    {
        \$widget   = new Widget();
        \$expected = [
            'name'     => null,
            'width'    => null,
            'height'   => null,
            'ordering' => null,
            'type'     => null,
            'params'   => [],
            'template' => null,
        ];
        \$this->assertEquals(\$expected, \$widget->toArray());
    }

    public function testToArrayFilled()
    {
        \$widget = new Widget();
        \$widget->setName('The itsy bitsy spider');
        \$widget->setWidth(4);
        \$widget->setHeight(5);
        \$widget->setOrdering(6);
        \$widget->setType('climed up');
        \$widget->setParams([]);
        \$widget->setTemplate('the water spout');
        \$expected = [
            'name'     => 'The itsy bitsy spider',
            'width'    => 4,
            'height'   => 5,
            'ordering' => 6,
            'type'     => 'climed up',
            'params'   => [],
            'template' => 'the water spout',
        ];
        \$this->assertEquals(\$expected, \$widget->toArray());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Tests/Entity/WidgetTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Entity/WidgetTest.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Tests/Entity/WidgetTest.php");
    }
}
