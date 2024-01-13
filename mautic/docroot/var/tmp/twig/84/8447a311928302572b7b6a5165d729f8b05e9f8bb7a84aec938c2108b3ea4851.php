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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php */
class __TwigTemplate_985a505804a1e35db005abae16ae8d17bb345a97c26ddc17f939238aeb272ddb extends Template
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

class HourStat
{
    /**
     * @var int
     */
    private \$count = 0;

    /**
     * @var string
     */
    private \$hour;

    /**
     * HourStat constructor.
     *
     * @param string \$hour \"2018-12-07 12\" format
     */
    public function __construct(\$hour)
    {
        \$this->hour = \$hour;
    }

    /**
     * @return string
     */
    public function getHour()
    {
        return \$this->hour;
    }

    /**
     * @param int \$count
     */
    public function setCount(\$count)
    {
        \$this->count = (int) \$count;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return \$this->count;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php");
    }
}
