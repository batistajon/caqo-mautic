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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/Week/DateWeekNextTest.php */
class __TwigTemplate_ef29712386f776942596e9a7c4e20f4af1b8fb7c2ba6dbe919370643a39c0115 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date\\Week;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionParameters;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\TimezoneResolver;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;

class DateWeekNextTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast::getOperator
     */
    public function testGetOperatorBetween()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$filter        = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateWeekNext(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals('between', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast::getOperator
     */
    public function testGetOperatorLessOrEqual()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);
        \$dateDecorator->method('getOperator')
            ->with()
            ->willReturn('=<');

        \$filter        = [
            'operator' => 'lte',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateWeekNext(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals('=<', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast::getParameterValue
     */
    public function testGetParameterValueBetween()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => '!=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateWeekNext(\$dateDecorator, \$dateOptionParameters);

        \$expectedDateStart = new \\DateTime('monday next week');
        \$expectedDateEnd   = new \\DateTime('sunday next week');

        \$this->assertEquals(
            [
                \$expectedDateStart->format('Y-m-d'),
                \$expectedDateEnd->format('Y-m-d'),
            ],
            \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate)
        );
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast::getParameterValue
     */
    public function testGetParameterValueSingle()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => 'lt',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateWeekNext(\$dateDecorator, \$dateOptionParameters);

        \$expectedDate = new \\DateTime('monday next week');

        \$this->assertEquals(\$expectedDate->format('Y-m-d'), \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast::getParameterValue
     */
    public function testGetParameterValueforGreaterOperatorIncludesSunday()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('', null, 'local');
        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => 'gt',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateWeekNext(\$dateDecorator, \$dateOptionParameters);

        \$expectedDate = new \\DateTime('sunday next week');

        \$this->assertEquals(\$expectedDate->format('Y-m-d'), \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast::getParameterValue
     */
    public function testGetParameterValueForLessThanOperatorIncludesSunday()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('', null, 'local');
        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => 'lte',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateWeekNext(\$dateDecorator, \$dateOptionParameters);

        \$expectedDate = new \\DateTime('sunday next week');

        \$this->assertEquals(\$expectedDate->format('Y-m-d'), \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Week/DateWeekNextTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Week/DateWeekNextTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/Week/DateWeekNextTest.php");
    }
}
