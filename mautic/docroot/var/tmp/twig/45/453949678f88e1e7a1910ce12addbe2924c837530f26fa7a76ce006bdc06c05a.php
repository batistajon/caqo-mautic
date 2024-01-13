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

/* @bundles/CoreBundle/Tests/Unit/Helper/DateTimeHelperTest.php */
class __TwigTemplate_ceb1f99740b681f82371f48992f59ce64f853c1ecd9fe025e87a0dbd369bb8fc extends Template
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

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

class DateTimeHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox The guessTimezoneFromOffset returns correct values
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\DateTimeHelper::guessTimezoneFromOffset
     */
    public function testGuessTimezoneFromOffset()
    {
        \$helper   = new DateTimeHelper();
        \$timezone = \$helper->guessTimezoneFromOffset();
        \$this->assertEquals(\$timezone, 'Europe/London');
        \$timezone = \$helper->guessTimezoneFromOffset(3600);
        \$this->assertEquals(\$timezone, 'Europe/Paris');
        \$timezone = \$helper->guessTimezoneFromOffset(-2 * 3600);
        \$this->assertEquals(\$timezone, 'America/Goose_Bay'); // Is it really in timezone -2
        \$timezone = \$helper->guessTimezoneFromOffset(-5 * 3600);
        \$this->assertEquals(\$timezone, 'America/New_York');
    }

    public function testBuildIntervalWithBadUnit()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$helper = new DateTimeHelper();
        \$helper->buildInterval(4, 'j');
    }

    public function testBuildIntervalWithRightUnits()
    {
        \$helper   = new DateTimeHelper();
        \$interval = \$helper->buildInterval(4, 'Y');
        \$this->assertEquals(new \\DateInterval('P4Y'), \$interval);
        \$interval = \$helper->buildInterval(4, 'M');
        \$this->assertEquals(new \\DateInterval('P4M'), \$interval);
        \$interval = \$helper->buildInterval(4, 'I');
        \$this->assertEquals(new \\DateInterval('PT4M'), \$interval);
        \$interval = \$helper->buildInterval(4, 'S');
        \$this->assertEquals(new \\DateInterval('PT4S'), \$interval);
    }

    public function testvalidateMysqlDateTimeUnitWillThrowExceptionOnBadUnit()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        DateTimeHelper::validateMysqlDateTimeUnit('D');
    }

    public function testvalidateMysqlDateTimeUnitWillNotThrowExceptionOnExpectedUnit()
    {
        DateTimeHelper::validateMysqlDateTimeUnit('s');
        DateTimeHelper::validateMysqlDateTimeUnit('i');
        DateTimeHelper::validateMysqlDateTimeUnit('H');
        DateTimeHelper::validateMysqlDateTimeUnit('d');
        DateTimeHelper::validateMysqlDateTimeUnit('W');
        DateTimeHelper::validateMysqlDateTimeUnit('m');
        DateTimeHelper::validateMysqlDateTimeUnit('Y');

        \$this->assertTrue(true, 'Just to avoid the risky test warning...');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/DateTimeHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/DateTimeHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/DateTimeHelperTest.php");
    }
}
