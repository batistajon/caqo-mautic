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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php */
class __TwigTemplate_9f03d6bea523a82cdd911bcda3076a175a18078ee1d2f98e613df03770a20ff6 extends Template
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

class DayStat implements StatInterface
{
    /**
     * @var HourStat[]
     */
    private \$stats = [];

    /**
     * @var string
     */
    private \$day;

    /**
     * DayStat constructor.
     *
     * @param string \$day \"2019-11-07\" format
     */
    public function __construct(\$day)
    {
        \$this->day = \$day;
    }

    /**
     * @param int \$hour
     *
     * @return HourStat
     *
     * @throws \\Exception
     */
    public function getHour(\$hour)
    {
        \$key = (new \\DateTime(\"{\$this->day} \$hour:00:00\"))->format('Y-m-d H');

        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = new HourStat(\$key);
        }

        return \$this->stats[\$key];
    }

    /**
     * @return HourStat[]
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
            \$sum += \$stat->getCount();
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
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php");
    }
}
