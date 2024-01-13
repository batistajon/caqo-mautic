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

/* @bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php */
class __TwigTemplate_18d07103ce92a28d85ab668ff57311ae32446096f6e3edd1c969224d79f2302f extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Chart;

use DateTimeInterface;

trait DateRangeUnitTrait
{
    /**
     * Returns appropriate time unit from a date range so the line/bar charts won't be too full/empty.
     *
     * @return string
     */
    public function getTimeUnitFromDateRange(DateTimeInterface \$dateFrom, DateTimeInterface \$dateTo)
    {
        \$dayDiff = \$dateTo->diff(\$dateFrom)->format('%a');
        \$unit    = 'd';

        if (\$dayDiff <= 1) {
            \$unit = 'H';

            \$sameDay    = \$dateTo->format('d') === \$dateFrom->format('d');
            \$hourDiff   = \$dateTo->diff(\$dateFrom)->format('%h');
            \$minuteDiff = \$dateTo->diff(\$dateFrom)->format('%i');
            if (\$sameDay && !intval(\$hourDiff) && intval(\$minuteDiff)) {
                \$unit = 'i';
            }
            \$secondDiff = \$dateTo->diff(\$dateFrom)->format('%s');
            if (!intval(\$minuteDiff) && intval(\$secondDiff)) {
                \$unit = 'i';
            }
        }
        if (\$dayDiff > 31) {
            \$unit = 'W';
        }
        if (\$dayDiff > 100) {
            \$unit = 'm';
        }
        if (\$dayDiff > 1000) {
            \$unit = 'Y';
        }

        return \$unit;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php");
    }
}
