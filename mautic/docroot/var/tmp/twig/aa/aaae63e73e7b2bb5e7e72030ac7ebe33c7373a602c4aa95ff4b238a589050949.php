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

/* @bundles/StatsBundle/Aggregate/Collection/StatCollection.php */
class __TwigTemplate_29c0ab932f9ec313846ede4182247465ea993d04dc616e39aeff099b566abc29 extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection;

use DateTime;
use DateTimeZone;
use Exception;
use Mautic\\StatsBundle\\Aggregate\\Calculator;
use Mautic\\StatsBundle\\Aggregate\\Collection\\DAO\\StatsDAO;
use Mautic\\StatsBundle\\Aggregate\\Helper\\CalculatorHelper;

class StatCollection
{
    /**
     * @var StatsDAO
     */
    private \$stats;

    /**
     * @var Calculator
     */
    private \$calculator;

    public function __construct()
    {
        \$this->stats = new StatsDAO();
    }

    /**
     * @param int \$year
     * @param int \$month
     * @param int \$day
     * @param int \$hour
     * @param int \$count
     *
     * @return \$this
     *
     * @throws Exception
     */
    public function addStat(\$year, \$month, \$day, \$hour, \$count)
    {
        \$this->stats
            ->getYear(\$year)
            ->getMonth(\$month)
            ->getDay(\$day)
            ->getHour(\$hour)
            ->setCount(\$count);

        return \$this;
    }

    /**
     * @param int \$count
     *
     * @return \$this
     *
     * @throws Exception
     */
    public function addStatByDateTime(DateTime \$dateTime, \$count)
    {
        \$dateTime->setTimezone(new DateTimeZone('UTC'));

        \$this->addStat(
            \$dateTime->format('Y'),
            \$dateTime->format('n'),
            \$dateTime->format('j'),
            \$dateTime->format('H'),
            \$count
        );

        return \$this;
    }

    /**
     * @param \$dateTimeInUTC
     * @param \$count
     *
     * @return \$this
     *
     * @throws Exception
     */
    public function addStatByDateTimeStringInUTC(\$dateTimeInUTC, \$count)
    {
        if (preg_match('/([0-9]{4})\\\\s([0-9]{2})/', \$dateTimeInUTC, \$matches)) {    //  Is this a week?
            \$dateTimeString = CalculatorHelper::getWeekDateString(\$matches[1].'-'.\$matches[2]);
            \$dateTime       = new DateTime(\$dateTimeString, new DateTimeZone('UTC'));
        } elseif (4 === strlen(\$dateTimeInUTC) and is_numeric(\$dateTimeInUTC)) {
            \$dateTime = (new DateTime('now', new DateTimeZone('UTC')))
                ->setDate(\$dateTimeInUTC, 1, 1)
                ->setTime(0, 0);
        } else {
            \$dateTime = new DateTime(\$dateTimeInUTC, new DateTimeZone('UTC'));
        }
        \$this->addStatByDateTime(\$dateTime, \$count);

        return \$this;
    }

    /**
     * @return StatsDAO
     */
    public function getStats()
    {
        return \$this->stats;
    }

    /**
     * @return Calculator
     */
    public function getCalculator(DateTime \$fromDateTime, DateTime \$toDateTime)
    {
        if (is_null(\$this->calculator)) {
            \$this->calculator = new Calculator(\$this->stats, \$fromDateTime, \$toDateTime);
        }

        return \$this->calculator;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/StatCollection.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/StatCollection.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/StatCollection.php");
    }
}
