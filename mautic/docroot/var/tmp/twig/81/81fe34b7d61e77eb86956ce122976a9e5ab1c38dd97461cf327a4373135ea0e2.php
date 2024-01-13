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

/* @bundles/StatsBundle/StatEvents.php */
class __TwigTemplate_77e6680118b5e42220cd9e9137c34a741175642d84430c965572fa986e72bc24 extends Template
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

namespace Mautic\\StatsBundle;

final class StatEvents
{
    /**
     * The mautic.aggregate_stat_request event is dispatched when an aggregate stat is requested.
     *
     * The event listener receives a \\Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent instance.
     *
     * @var string
     */
    const AGGREGATE_STAT_REQUEST = 'mautic.aggregate_stat_request';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/StatEvents.php";
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
        return new Source("", "@bundles/StatsBundle/StatEvents.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/StatEvents.php");
    }
}
