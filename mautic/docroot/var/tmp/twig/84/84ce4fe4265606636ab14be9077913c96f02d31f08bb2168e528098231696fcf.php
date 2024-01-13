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

/* @bundles/CoreBundle/Tests/Unit/Templating/Helper/ContentHelperTest.html.php */
class __TwigTemplate_e387a0cd6b38952015f5736969d50484c69f1547351796ed955dd876e977f6c9 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Templating\\Helper;

use Mautic\\CoreBundle\\Templating\\Helper\\ContentHelper;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ContentHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ContentHelper
     */
    private \$contentHelper;

    protected function setUp(): void
    {
        \$dispatcherMock = \$this->getMockBuilder(EventDispatcherInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$delegationMock = \$this->getMockBuilder(DelegatingEngine::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->contentHelper = new contenthelper(\$delegationMock, \$dispatcherMock);
    }

    public function testShowScriptTagsContext()
    {
        \$this->doShowTagsContext('script');
    }

    public function testShowStyleTagsContext()
    {
        \$this->doShowTagsContext('style');
    }

    public function testShowScriptTagsInlineContext()
    {
        \$sample   = 'Hi <script>console.log(\"do not mind me\");</script> <script type=\"text/javascript\">console.log(\"do not mind me\");</script>';
        \$expected = 'Hi [script]console.log(\"do not mind me\");[/script] [script type=\"text/javascript\"]console.log(\"do not mind me\");[/script]';

        \$result = \$this->contentHelper->showScriptTags(\$sample);

        \$this->assertEquals(\$expected, \$result);
    }

    private function doShowTagsContext(\$tag)
    {
        \$sample        = '<h1>Hello World</h1>

        <'.\$tag.'>
            console.log(\"do not mind me\");
        </'.\$tag.'>
        
        <'.\$tag.' type=\"text/javascript\">
            console.log(\"do not mind me\");
        </'.\$tag.'>';

        \$expected = '<h1>Hello World</h1>

        ['.\$tag.']
            console.log(\"do not mind me\");
        [/'.\$tag.']
        
        ['.\$tag.' type=\"text/javascript\"]
            console.log(\"do not mind me\");
        [/'.\$tag.']';

        \$result = \$this->contentHelper->showScriptTags(\$sample);

        \$this->assertEquals(\$expected, \$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Templating/Helper/ContentHelperTest.html.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Templating/Helper/ContentHelperTest.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Templating/Helper/ContentHelperTest.html.php");
    }
}
