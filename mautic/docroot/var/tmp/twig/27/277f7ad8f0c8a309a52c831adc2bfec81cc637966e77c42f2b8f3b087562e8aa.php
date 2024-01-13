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

/* @bundles/PluginBundle/Tests/Entity/PluginTest.php */
class __TwigTemplate_088f31bcdfd2ca1d246fe5e4b3338e1ec959158c333bc36434df70ab61bf8be8 extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Entity;

use Mautic\\PluginBundle\\Entity\\Plugin;

class PluginTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEmptyDescription()
    {
        \$plugin = new Plugin();
        \$this->assertNull(\$plugin->getDescription());
        \$this->assertNull(\$plugin->getPrimaryDescription());
        \$this->assertNull(\$plugin->getSecondaryDescription());
        \$this->assertFalse(\$plugin->hasSecondaryDescription());
    }

    public function testSimpleDescription()
    {
        \$description = 'This is the best plugin in the whole galaxy';
        \$plugin      = new Plugin();
        \$plugin->setDescription(\$description);
        \$this->assertEquals(\$description, \$plugin->getDescription());
        \$this->assertEquals(\$description, \$plugin->getPrimaryDescription());
        \$this->assertNull(\$plugin->getSecondaryDescription());
        \$this->assertFalse(\$plugin->hasSecondaryDescription());
    }

    public function testSecondaryDescriptionWithUnixLineEnding()
    {
        \$description = \"This is the best plugin in the whole galaxy\\n---\\nLearn more about it <a href=\\\"#\\\">here</a>\";
        \$plugin      = new Plugin();
        \$plugin->setDescription(\$description);
        \$this->assertEquals(\$description, \$plugin->getDescription());
        \$this->assertEquals('This is the best plugin in the whole galaxy', \$plugin->getPrimaryDescription());
        \$this->assertEquals('Learn more about it <a href=\"#\">here</a>', \$plugin->getSecondaryDescription());
        \$this->assertTrue(\$plugin->hasSecondaryDescription());
    }

    public function testSecondaryDescriptionWithWinLineEnding()
    {
        \$description = \"This is the best plugin in the whole galaxy\\n\\r---\\n\\rLearn more about it <a href=\\\"#\\\">here</a>\";
        \$plugin      = new Plugin();
        \$plugin->setDescription(\$description);
        \$this->assertEquals(\$description, \$plugin->getDescription());
        \$this->assertEquals('This is the best plugin in the whole galaxy', \$plugin->getPrimaryDescription());
        \$this->assertEquals('Learn more about it <a href=\"#\">here</a>', \$plugin->getSecondaryDescription());
        \$this->assertTrue(\$plugin->hasSecondaryDescription());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Tests/Entity/PluginTest.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Entity/PluginTest.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Tests/Entity/PluginTest.php");
    }
}
