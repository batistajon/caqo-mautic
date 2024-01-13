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

/* @bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php */
class __TwigTemplate_857a58c5247b0b2e9194df9bbf1afc75d1886d73d74ba4ec56c13c3cc33fb340 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CsvHelper;

class CsvHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSanitizeHeaders()
    {
        \$headers = [
            'withoutSpaces',
            ' with spaces ',
            ' left space',
            'right space ',
        ];

        \$expected = [
            'withoutSpaces',
            'with spaces',
            'left space',
            'right space',
        ];

        \$this->assertEquals(\$expected, CsvHelper::sanitizeHeaders(\$headers));
    }

    public function testConvertHeadersIntoFields()
    {
        \$headers = [
            'České znáčky',
            '',
            'First Name',
        ];

        \$expected = [
            'first_name' => 'First Name',
            'esk_znky'   => 'České znáčky',
        ];

        \$this->assertEquals(\$expected, CsvHelper::convertHeadersIntoFields(\$headers));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php");
    }
}
