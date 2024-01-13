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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/DateOptionFactoryTest.php */
class __TwigTemplate_664d0cd484ffc66d348f9ffc1c18314cb81b8956915d2319e6ce24dbcb77394b extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Day\\DateDayToday;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Day\\DateDayTomorrow;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Day\\DateDayYesterday;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthLast;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateDefault;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\TimezoneResolver;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Year\\DateYearLast;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Year\\DateYearNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Year\\DateYearThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;
use Mautic\\LeadBundle\\Segment\\RelativeDate;

class DateOptionFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testBirthday()
    {
        \$filterName = 'birthday';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateAnniversary::class, \$filterDecorator);

        \$filterName = 'anniversary';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateAnniversary::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testDayToday()
    {
        \$filterName = 'today';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateDayToday::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testDayTomorrow()
    {
        \$filterName = 'tomorrow';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateDayTomorrow::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testDayYesterday()
    {
        \$filterName = 'yesterday';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateDayYesterday::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testWeekLast()
    {
        \$filterName = 'last week';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateWeekLast::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testWeekNext()
    {
        \$filterName = 'next week';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateWeekNext::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testWeekThis()
    {
        \$filterName = 'this week';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateWeekThis::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testMonthLast()
    {
        \$filterName = 'last month';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateMonthLast::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testMonthNext()
    {
        \$filterName = 'next month';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateMonthNext::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testMonthThis()
    {
        \$filterName = 'this month';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateMonthThis::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testYearLast()
    {
        \$filterName = 'last year';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateYearLast::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testYearNext()
    {
        \$filterName = 'next year';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateYearNext::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testYearThis()
    {
        \$filterName = 'this year';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateYearThis::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testRelativePlus()
    {
        \$filterName = '+20 days';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateRelativeInterval::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testRelativeMinus()
    {
        \$filterName = '+20 days';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateRelativeInterval::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testRelativeAgo()
    {
        \$filterName = '20 days ago';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateRelativeInterval::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testDateDefault()
    {
        \$filterName = '2018-01-01';

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateDefault::class, \$filterDecorator);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory::getDateOption
     */
    public function testNullValue()
    {
        \$filterName = null;

        \$filterDecorator = \$this->getFilterDecorator(\$filterName);

        \$this->assertInstanceOf(DateDefault::class, \$filterDecorator);
    }

    /**
     * @param string \$filterName
     *
     * @return \\Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface
     */
    private function getFilterDecorator(\$filterName)
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$relativeDate     = \$this->createMock(RelativeDate::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$relativeDate->method('getRelativeDateStrings')
            ->willReturn(
                [
                    'mautic.lead.list.month_last'  => 'last month',
                    'mautic.lead.list.month_next'  => 'next month',
                    'mautic.lead.list.month_this'  => 'this month',
                    'mautic.lead.list.today'       => 'today',
                    'mautic.lead.list.tomorrow'    => 'tomorrow',
                    'mautic.lead.list.yesterday'   => 'yesterday',
                    'mautic.lead.list.week_last'   => 'last week',
                    'mautic.lead.list.week_next'   => 'next week',
                    'mautic.lead.list.week_this'   => 'this week',
                    'mautic.lead.list.year_last'   => 'last year',
                    'mautic.lead.list.year_next'   => 'next year',
                    'mautic.lead.list.year_this'   => 'this year',
                    'mautic.lead.list.birthday'    => 'birthday',
                    'mautic.lead.list.anniversary' => 'anniversary',
                ]
            );

        \$dateOptionFactory = new DateOptionFactory(\$dateDecorator, \$relativeDate, \$timezoneResolver);

        \$filter                    = [
            'glue'     => 'and',
            'type'     => 'datetime',
            'object'   => 'lead',
            'field'    => 'date_identified',
            'operator' => '=',
            'filter'   => \$filterName,
            'display'  => null,
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);

        return \$dateOptionFactory->getDateOption(\$contactSegmentFilterCrate);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/DateOptionFactoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/DateOptionFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/DateOptionFactoryTest.php");
    }
}
