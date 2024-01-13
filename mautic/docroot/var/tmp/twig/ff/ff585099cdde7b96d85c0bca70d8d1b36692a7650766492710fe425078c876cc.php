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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/GeneratedColumn/GeneratedColumnsTest.php */
class __TwigTemplate_f757ebfc08fb9fd1471ac716cd77046af96af9f47409b790e4cdb72adff71e93 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\Mapping\\GeneratedColumn;

use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumns;

class GeneratedColumnsTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testAllGettersAndSeters(): void
    {
        \$generatedColumn1 = new GeneratedColumn('page_hits', 'generated_hit_date', 'DATE', 'not important');
        \$generatedColumn2 = new GeneratedColumn('page_hits2', 'generated_hit_date2', 'DATE', 'not important');

        \$generatedColumn2->setOriginalDateColumn('date_hit', 'd');

        \$generatedColumns = new GeneratedColumns();

        \$generatedColumns->add(\$generatedColumn1);
        \$generatedColumns->add(\$generatedColumn2);

        \$this->assertCount(2, \$generatedColumns);
        \$this->assertSame(\$generatedColumn2, \$generatedColumns->getForOriginalDateColumnAndUnit('date_hit', 'd'));

        \$this->expectException(\\UnexpectedValueException::class);
        \$generatedColumns->getForOriginalDateColumnAndUnit('not-found', 'd');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/GeneratedColumn/GeneratedColumnsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/GeneratedColumn/GeneratedColumnsTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/GeneratedColumn/GeneratedColumnsTest.php");
    }
}
