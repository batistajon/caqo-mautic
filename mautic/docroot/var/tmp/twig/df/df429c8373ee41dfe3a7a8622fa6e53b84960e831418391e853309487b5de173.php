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

/* @bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php */
class __TwigTemplate_09215636020a0e4f23753d372ed6f56057508a29226f7443bca46498db2617a0 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\SearchStringHelper;

class SearchStringHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNegativeGroup(): void
    {
        \$result = SearchStringHelper::parseSearchString('email:!(test@example.%)');

        \$this->assertArrayHasKey('email', \$result->commands);
        \$this->assertEquals('email', \$result->root[0]->command);
        \$this->assertEquals('test@example.%', \$result->root[0]->string);
        \$this->assertEquals(1, \$result->root[0]->not);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php");
    }
}
