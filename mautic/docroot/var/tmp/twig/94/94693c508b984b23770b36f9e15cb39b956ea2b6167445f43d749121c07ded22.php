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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php */
class __TwigTemplate_940f6b735bb3e6063efb600e3934d1c22bed66340d5ec237bd821e19422045bb extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection\\Stats;

class MonthStat implements StatInterface
{
    /**
     * @var DayStat[]
     */
    private \$stats = [];

    /**
     * @var string
     */
    private \$month;

    /**
     * MonthStat constructor.
     *
     * @param string \$month \"2019-01\" format
     */
    public function __construct(\$month)
    {
        \$this->month = \$month;
    }

    /**
     * @param int \$day
     *
     * @return DayStat
     *
     * @throws \\Exception
     */
    public function getDay(\$day)
    {
        \$key = (new \\DateTime(\"{\$this->month}-\$day 00:00:00\"))->format('Y-m-d');

        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = new DayStat(\$key);
        }

        return \$this->stats[\$key];
    }

    /**
     * @return DayStat[]
     */
    public function getStats()
    {
        return \$this->stats;
    }

    /**
     * @return int
     */
    public function getSum()
    {
        \$sum = 0;
        foreach (\$this->stats as \$stat) {
            \$sum += \$stat->getSum();
        }

        return \$sum;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return count(\$this->stats);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php");
    }
}
