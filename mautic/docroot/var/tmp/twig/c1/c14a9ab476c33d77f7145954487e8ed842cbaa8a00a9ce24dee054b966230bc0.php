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

/* @bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php */
class __TwigTemplate_ef46e7f3739b01f5358c27d33a9a9c1a9f93b7fbe3cac5bd2fe271f00996035a extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Chart;

use Mautic\\CoreBundle\\Helper\\Chart\\DateRangeUnitTrait;
use PHPUnit\\Framework\\TestCase;

class DateRangeUnitTraitTest extends TestCase
{
    /**
     * @var DateRangeUnitTrait
     */
    private \$trait;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->trait = \$this->getMockForTrait(DateRangeUnitTrait::class);
    }

    public function testGetTimeUnitFromDateRangeWithSameDay()
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2019-04-01');
        \$this->assertSame('H', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanDay()
    {
        \$from = new \\DateTime('2019-04-01 00:00:00');
        \$to   = new \\DateTime('2019-04-01 04:30:00');
        \$this->assertSame('H', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanHour()
    {
        \$from = new \\DateTime('2019-04-01 04:00:00');
        \$to   = new \\DateTime('2019-04-01 04:30:00');
        \$this->assertSame('i', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanMinute()
    {
        \$from = new \\DateTime('2019-04-01 04:00:00');
        \$to   = new \\DateTime('2019-04-01 04:00:30');
        \$this->assertSame('i', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanMonth()
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2019-04-30');
        \$this->assertSame('d', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThan100Days()
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2019-05-30');
        \$this->assertSame('W', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThan1000Days()
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2020-05-30');
        \$this->assertSame('m', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithMoreThan1000Days()
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2022-05-30');
        \$this->assertSame('Y', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php");
    }
}
