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

/* @bundles/LeadBundle/Segment/Decorator/Date/DateOptionFactory.php */
class __TwigTemplate_4e1e2e11501f24638fc12b7f1c551bd422ead1ac761903c5576b3653436fad22 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Day\\DateDayToday;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Day\\DateDayTomorrow;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Day\\DateDayYesterday;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthLast;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateDefault;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekLast;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Year\\DateYearLast;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Year\\DateYearNext;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Year\\DateYearThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;
use Mautic\\LeadBundle\\Segment\\RelativeDate;

class DateOptionFactory
{
    /**
     * @var DateDecorator
     */
    private \$dateDecorator;

    /**
     * @var RelativeDate
     */
    private \$relativeDate;

    /**
     * @var TimezoneResolver
     */
    private \$timezoneResolver;

    public function __construct(
        DateDecorator \$dateDecorator,
        RelativeDate \$relativeDate,
        TimezoneResolver \$timezoneResolver
    ) {
        \$this->dateDecorator    = \$dateDecorator;
        \$this->relativeDate     = \$relativeDate;
        \$this->timezoneResolver = \$timezoneResolver;
    }

    /**
     * @return FilterDecoratorInterface
     */
    public function getDateOption(ContactSegmentFilterCrate \$leadSegmentFilterCrate)
    {
        \$originalValue        = \$leadSegmentFilterCrate->getFilter();
        \$relativeDateStrings  = \$this->relativeDate->getRelativeDateStrings();

        \$dateOptionParameters = new DateOptionParameters(\$leadSegmentFilterCrate, \$relativeDateStrings, \$this->timezoneResolver);

        \$timeframe = \$dateOptionParameters->getTimeframe();

        if (!\$timeframe) {
            return new DateDefault(\$this->dateDecorator, \$originalValue);
        }

        switch (\$timeframe) {
            case 'birthday':
            case 'anniversary':
            case \$timeframe && (
                    false !== strpos(\$timeframe, 'anniversary') ||
                    false !== strpos(\$timeframe, 'birthday')
                ):
                return new DateAnniversary(\$this->dateDecorator, \$dateOptionParameters);
            case 'today':
                return new DateDayToday(\$this->dateDecorator, \$dateOptionParameters);
            case 'tomorrow':
                return new DateDayTomorrow(\$this->dateDecorator, \$dateOptionParameters);
            case 'yesterday':
                return new DateDayYesterday(\$this->dateDecorator, \$dateOptionParameters);
            case 'week_last':
                return new DateWeekLast(\$this->dateDecorator, \$dateOptionParameters);
            case 'week_next':
                return new DateWeekNext(\$this->dateDecorator, \$dateOptionParameters);
            case 'week_this':
                return new DateWeekThis(\$this->dateDecorator, \$dateOptionParameters);
            case 'month_last':
                return new DateMonthLast(\$this->dateDecorator, \$dateOptionParameters);
            case 'month_next':
                return new DateMonthNext(\$this->dateDecorator, \$dateOptionParameters);
            case 'month_this':
                return new DateMonthThis(\$this->dateDecorator, \$dateOptionParameters);
            case 'year_last':
                return new DateYearLast(\$this->dateDecorator, \$dateOptionParameters);
            case 'year_next':
                return new DateYearNext(\$this->dateDecorator, \$dateOptionParameters);
            case 'year_this':
                return new DateYearThis(\$this->dateDecorator, \$dateOptionParameters);
            case \$timeframe && (
                    false !== strpos(\$timeframe[0], '-') || // -5 days
                    false !== strpos(\$timeframe[0], '+') || // +5 days
                    false !== strpos(\$timeframe, ' ago')    // 5 days ago
                ):
                return new DateRelativeInterval(\$this->dateDecorator, \$originalValue, \$dateOptionParameters);
            default:
                return new DateDefault(\$this->dateDecorator, \$originalValue);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/Date/DateOptionFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/DateOptionFactory.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/DateOptionFactory.php");
    }
}
