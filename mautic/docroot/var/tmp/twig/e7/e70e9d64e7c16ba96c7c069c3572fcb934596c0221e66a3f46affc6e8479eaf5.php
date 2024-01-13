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

/* @bundles/StatsBundle/Aggregate/Calculator.php */
class __TwigTemplate_54b3ff30cb7ec8cdc0c0501dcfa8ff3891a15e1ade1764a064d91df9c45d8723 extends Template
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

namespace Mautic\\StatsBundle\\Aggregate;

use DateTime;
use Exception;
use Mautic\\StatsBundle\\Aggregate\\Collection\\DAO\\StatDAO;
use Mautic\\StatsBundle\\Aggregate\\Collection\\DAO\\StatsDAO;
use Mautic\\StatsBundle\\Aggregate\\Helper\\CalculatorHelper;

class Calculator
{
    /**
     * @var StatsDAO
     */
    private \$statsDAO;

    /**
     * @var DateTime|null
     */
    private \$fromDateTime;

    /**
     * @var DateTime|null
     */
    private \$toDateTime;

    /**
     * Calculator constructor.
     */
    public function __construct(StatsDAO \$statsDAO, DateTime \$fromDateTime = null, DateTime \$toDateTime = null)
    {
        \$this->statsDAO     = \$statsDAO;
        \$this->fromDateTime = \$fromDateTime;
        \$this->toDateTime   = \$toDateTime;
    }

    /**
     * @param string \$labelFormat
     *
     * @return StatDAO
     *
     * @throws Exception
     */
    public function getSumsByYear(\$labelFormat = 'Y')
    {
        \$statDAO  = new StatDAO();
        \$lastYear = \$this->fromDateTime ? \$this->fromDateTime->format('Y') : null;

        foreach (\$this->statsDAO->getYears() as \$thisYear => \$stats) {
            CalculatorHelper::fillInMissingYears(\$statDAO, \$lastYear, \$thisYear, \$labelFormat);

            \$statDAO->addStat(
                CalculatorHelper::getYearLabel(\$thisYear, \$labelFormat),
                \$stats->getSum()
            );

            \$lastYear = \$thisYear;
        }

        if (\$this->toDateTime) {
            CalculatorHelper::fillInMissingYears(\$statDAO, \$lastYear, \$this->toDateTime->format('Y'), \$labelFormat);
        }

        return \$statDAO;
    }

    /**
     * @param string \$labelFormat
     *
     * @return StatDAO
     *
     * @throws Exception
     */
    public function getSumsByMonth(\$labelFormat = 'Y-m')
    {
        \$statDAO   = new StatDAO();
        \$lastMonth = \$this->fromDateTime ? \$this->fromDateTime->format('Y-m') : null;

        foreach (\$this->statsDAO->getMonths() as \$thisMonth => \$stats) {
            CalculatorHelper::fillInMissingMonths(\$statDAO, \$lastMonth, \$thisMonth, \$labelFormat);

            \$statDAO->addStat(
                CalculatorHelper::getMonthLabel(\$thisMonth, \$labelFormat),
                \$stats->getSum()
            );

            \$lastMonth = \$thisMonth;
        }

        if (\$this->toDateTime) {
            CalculatorHelper::fillInMissingMonths(\$statDAO, \$lastMonth, \$this->toDateTime->format('Y-m'), \$labelFormat);
        }

        return \$statDAO;
    }

    /**
     * @param string \$labelFormat
     *
     * @return StatDAO
     *
     * @throws Exception
     */
    public function getSumsByDay(\$labelFormat = 'Y-m-d')
    {
        \$statDAO   = new StatDAO();
        \$yesterday = \$this->fromDateTime ? \$this->fromDateTime->format('Y-m-d') : null;

        foreach (\$this->statsDAO->getDays() as \$today => \$stats) {
            CalculatorHelper::fillInMissingDays(\$statDAO, \$yesterday, \$today, \$labelFormat);

            \$statDAO->addStat(
                CalculatorHelper::getDayLabel(\$today, \$labelFormat),
                \$stats->getSum()
            );

            \$yesterday = \$today;
        }

        if (\$this->toDateTime) {
            CalculatorHelper::fillInMissingDays(\$statDAO, \$yesterday, \$this->toDateTime->format('Y-m-d'), \$labelFormat);
        }

        return \$statDAO;
    }

    /**
     * @param string \$labelFormat
     *
     * @return StatDAO
     *
     * @throws Exception
     */
    public function getSumsByWeek(\$labelFormat = 'Y-W')
    {
        \$statDAO   = new StatDAO();
        \$yesterday = \$this->fromDateTime ? \$this->fromDateTime->format('Y-W') : null;

        foreach (\$this->statsDAO->getWeeks() as \$today => \$stats) {
            CalculatorHelper::fillInMissingWeeks(\$statDAO, \$yesterday, \$today, \$labelFormat);

            \$statDAO->addStat(
                \$today,
                \$stats->getCount()
            );

            \$yesterday = \$today;
        }

        \$yesterday = (new DateTime(CalculatorHelper::getWeekDateString(\$yesterday)))->modify('+1 week')->format('Y-W');

        if (\$this->toDateTime) {
            \$tomorrow = clone \$this->toDateTime;
            CalculatorHelper::fillInMissingWeeks(\$statDAO, \$yesterday, \$tomorrow->modify('+1 week')->format('Y-W'), \$labelFormat);
        }

        return \$statDAO;
    }

    /**
     * @param string \$labelFormat
     *
     * @return StatDAO
     *
     * @throws Exception
     */
    public function getCountsByHour(\$labelFormat = 'Y-m-d H')
    {
        \$statDAO  = new StatDAO();
        \$lastHour = \$this->fromDateTime ? \$this->fromDateTime->format('Y-m-d H') : null;

        foreach (\$this->statsDAO->getHours() as \$thisHour => \$stats) {
            CalculatorHelper::fillInMissingHours(\$statDAO, \$lastHour, \$thisHour, \$labelFormat);

            \$statDAO->addStat(
                CalculatorHelper::getHourLabel(\$thisHour, \$labelFormat),
                \$stats->getCount()
            );

            \$lastHour = \$thisHour;
        }

        if (\$this->toDateTime) {
            CalculatorHelper::fillInMissingHours(\$statDAO, \$lastHour, \$this->toDateTime->format('Y-m-d H'), \$labelFormat);
        }

        return \$statDAO;
    }

    public function getSum()
    {
        \$statDAO = new StatDAO();
        \$sum     = 0;

        foreach (\$this->statsDAO->getYears() as \$stats) {
            \$sum += \$stats->getSum();
        }

        return \$statDAO;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Calculator.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Calculator.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Calculator.php");
    }
}
