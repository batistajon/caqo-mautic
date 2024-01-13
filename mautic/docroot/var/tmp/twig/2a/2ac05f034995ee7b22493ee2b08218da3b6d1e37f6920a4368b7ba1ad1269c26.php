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

/* @bundles/CoreBundle/Tests/Unit/Templating/Helper/ConfigHelperTest.php */
class __TwigTemplate_8d652933629a15450d3ee779f21ce2113b2fc7450f895e4d8aed465b288a58e0 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\ConfigHelper;
use PHPUnit\\Framework\\Assert;

class ConfigHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGet()
    {
        \$coreParametersHelper = new class() extends CoreParametersHelper {
            public function __construct()
            {
            }

            public function get(\$name, \$default = null)
            {
                Assert::assertEquals('param_a', \$name);

                return 'value A';
            }
        };

        \$helper = new ConfigHelper(\$coreParametersHelper);

        Assert::assertEquals('value A', \$helper->get('param_a'));
    }

    public function testGetName()
    {
        \$coreParametersHelper = new class() extends CoreParametersHelper {
            public function __construct()
            {
            }
        };

        \$helper = new ConfigHelper(\$coreParametersHelper);

        Assert::assertEquals('config', \$helper->getName());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Templating/Helper/ConfigHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Templating/Helper/ConfigHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Templating/Helper/ConfigHelperTest.php");
    }
}
