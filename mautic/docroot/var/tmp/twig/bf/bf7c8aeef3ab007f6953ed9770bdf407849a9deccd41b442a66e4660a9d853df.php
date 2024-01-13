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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php */
class __TwigTemplate_6906f29dbd36862835c1b6444d1bdde37ba38dc9d20fe8b64c6b0cb90ae1679b extends Template
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

class WeekStat
{
    /**
     * @var int
     */
    private \$count = 0;

    /**
     * @return int
     */
    public function getCount()
    {
        return \$this->count;
    }

    /**
     * @param int \$count
     */
    public function setCount(\$count)
    {
        \$this->count = (int) \$count;
    }

    /**
     * @param int \$count
     */
    public function addToCount(\$count)
    {
        \$this->count += \$count;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php");
    }
}
