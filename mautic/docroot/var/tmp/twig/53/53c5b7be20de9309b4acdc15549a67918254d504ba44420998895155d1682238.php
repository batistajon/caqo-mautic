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

/* @bundles/LeadBundle/Segment/Decorator/Date/DateOptionParameters.php */
class __TwigTemplate_42898286ab80c72eea20baf98c145b9553cc0b04def437ecb6907abb88f9a3ac extends Template
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

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;

class DateOptionParameters
{
    /**
     * @var bool
     */
    private \$hasTimePart;

    /**
     * @var string
     */
    private \$timeframe;

    /**
     * @var bool
     */
    private \$requiresBetween;

    /**
     * @var bool
     */
    private \$shouldUseLastDayOfRange;

    /**
     * @var DateTimeHelper
     */
    private \$dateTimeHelper;

    public function __construct(
        ContactSegmentFilterCrate \$leadSegmentFilterCrate,
        array \$relativeDateStrings,
        TimezoneResolver \$timezoneResolver
    ) {
        \$this->hasTimePart             = \$leadSegmentFilterCrate->hasTimeParts();
        \$this->timeframe               = \$this->parseTimeFrame(\$leadSegmentFilterCrate, \$relativeDateStrings);
        \$this->requiresBetween         = in_array(\$leadSegmentFilterCrate->getOperator(), ['=', '!='], true);
        \$this->shouldUseLastDayOfRange = in_array(\$leadSegmentFilterCrate->getOperator(), ['gt', 'lte'], true);

        \$this->setDateTimeHelper(\$timezoneResolver);
    }

    /**
     * @return bool
     */
    public function hasTimePart()
    {
        return \$this->hasTimePart;
    }

    /**
     * @return string
     */
    public function getTimeframe()
    {
        return \$this->timeframe;
    }

    /**
     * @return bool
     */
    public function isBetweenRequired()
    {
        return \$this->requiresBetween;
    }

    /**
     * This function indicates that we need to modify date to the last date of range.
     * \"Less than or equal\" operator means that we need to include whole week / month / year > last day from range
     * \"Grater than\" needs same logic.
     *
     * @return bool
     */
    public function shouldUseLastDayOfRange()
    {
        return \$this->shouldUseLastDayOfRange;
    }

    /**
     * @return DateTimeHelper
     */
    public function getDefaultDate()
    {
        return \$this->dateTimeHelper;
    }

    /**
     * @return string
     */
    private function parseTimeFrame(ContactSegmentFilterCrate \$leadSegmentFilterCrate, array \$relativeDateStrings)
    {
        \$key = array_search(\$leadSegmentFilterCrate->getFilter(), \$relativeDateStrings, true);

        if (false === \$key) {
            // Time frame does not match any option from \$relativeDateStrings, so return original value
            return \$leadSegmentFilterCrate->getFilter();
        }

        return str_replace('mautic.lead.list.', '', \$key);
    }

    private function setDateTimeHelper(TimezoneResolver \$timezoneResolver)
    {
        \$this->dateTimeHelper = \$timezoneResolver->getDefaultDate(\$this->hasTimePart());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/Date/DateOptionParameters.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/DateOptionParameters.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/DateOptionParameters.php");
    }
}
