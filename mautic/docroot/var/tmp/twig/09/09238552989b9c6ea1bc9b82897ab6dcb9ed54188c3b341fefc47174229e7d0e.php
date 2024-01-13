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

/* @bundles/CoreBundle/Tests/Unit/Event/CustomTemplateEventTest.php */
class __TwigTemplate_8e62c237f9ac4b535374e8452ed5a92ca77e9557deb1299fc47cde4504136dab extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Event;

use Mautic\\CoreBundle\\Event\\CustomTemplateEvent;

class CustomTemplateEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNullRequestDoesNotThrowException()
    {
        \$event = new CustomTemplateEvent(null, 'test');
        \$this->assertSame('test', \$event->getTemplate());
    }

    public function testEmptyTemplateThrowsException()
    {
        \$this->expectException(\\InvalidArgumentException::class);

        new CustomTemplateEvent();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Event/CustomTemplateEventTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Event/CustomTemplateEventTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Event/CustomTemplateEventTest.php");
    }
}
