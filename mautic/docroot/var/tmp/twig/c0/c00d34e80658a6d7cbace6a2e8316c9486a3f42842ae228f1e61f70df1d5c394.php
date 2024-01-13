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

/* @bundles/StatsBundle/Aggregate/Collector.php */
class __TwigTemplate_c9c8dfcc7ee32b60c2b6579d9e17963382a11c0f6e55e1f8544109d11fa592e3 extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;
use Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent;
use Mautic\\StatsBundle\\Event\\Options\\FetchOptions;
use Mautic\\StatsBundle\\StatEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

/**
 * Class Collector.
 */
class Collector
{
    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    /**
     * Collector constructor.
     */
    public function __construct(EventDispatcherInterface \$eventDispatcher)
    {
        \$this->eventDispatcher = \$eventDispatcher;
    }

    /**
     * @param string \$statName
     *
     * @return StatCollection
     */
    public function fetchStats(\$statName, \\DateTime \$fromDateTime, \\DateTime \$toDateTime, FetchOptions \$fetchOptions = null)
    {
        if (null === \$fetchOptions) {
            \$fetchOptions = new FetchOptions();
        }

        \$event = new AggregateStatRequestEvent(\$statName, \$fromDateTime, \$toDateTime, \$fetchOptions);

        \$this->eventDispatcher->dispatch(StatEvents::AGGREGATE_STAT_REQUEST, \$event);

        return \$event->getStatCollection();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collector.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collector.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collector.php");
    }
}
