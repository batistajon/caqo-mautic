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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php */
class __TwigTemplate_41d96dbac7519f686c47d6fce5b3020903e3410047a22143dbf8f61f310462d9 extends Template
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

class YearStat implements StatInterface
{
    /**
     * @var MonthStat[]
     */
    private \$stats = [];

    /**
     * @var int
     */
    private \$year;

    /**
     * YearStat constructor.
     *
     * @param int \$year
     */
    public function __construct(\$year)
    {
        \$this->year = (int) \$year;
    }

    /**
     * @param int \$month
     *
     * @return MonthStat
     *
     * @throws \\Exception
     */
    public function getMonth(\$month)
    {
        \$key = (new \\DateTime(\"{\$this->year}-\$month-01 00:00:00\"))->format('Y-m');

        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = new MonthStat(\$key);
        }

        return \$this->stats[\$key];
    }

    /**
     * @return MonthStat[]
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
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php");
    }
}
