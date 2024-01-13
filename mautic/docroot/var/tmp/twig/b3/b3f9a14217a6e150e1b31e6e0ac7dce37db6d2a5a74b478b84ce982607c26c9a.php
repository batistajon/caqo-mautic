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

/* @bundles/StatsBundle/Event/AggregateStatRequestEvent.php */
class __TwigTemplate_debabc20002dd1ee99ecc31300e3cf2c8d2a805ded387104e4fd7c0e259d6543 extends Template
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

namespace Mautic\\StatsBundle\\Event;

use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;
use Mautic\\StatsBundle\\Event\\Options\\FetchOptions;
use Symfony\\Component\\EventDispatcher\\Event;

class AggregateStatRequestEvent extends Event
{
    /**
     * @var string
     */
    private \$statName;

    /**
     * @var \\DateTimeInterface
     */
    private \$fromDateTime;

    /**
     * @var \\DateTimeInterface
     */
    private \$toDateTime;

    /**
     * @var StatCollection
     */
    private \$statCollection;

    /**
     * @var FetchOptions
     */
    private \$options;

    /**
     * AggregateStatRequestEvent constructor.
     *
     * @param string \$statName
     */
    public function __construct(\$statName, \\DateTimeInterface \$fromDateTime, \\DateTimeInterface \$toDateTime, FetchOptions \$eventOptions)
    {
        \$this->statName       = \$statName;
        \$this->fromDateTime   = \$fromDateTime;
        \$this->toDateTime     = \$toDateTime;
        \$this->options        = \$eventOptions;
        \$this->statCollection = new StatCollection();
    }

    /**
     * Note if the listener handled collecting these stats.
     */
    public function statsCollected()
    {
        \$this->stopPropagation();
    }

    /**
     * @return string
     */
    public function getStatName()
    {
        return \$this->statName;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getFromDateTime()
    {
        return \$this->fromDateTime;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getToDateTime()
    {
        return \$this->toDateTime;
    }

    /**
     * @return FetchOptions
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * @return StatCollection
     */
    public function getStatCollection()
    {
        return \$this->statCollection;
    }

    /**
     * @param string \$context
     *
     * @return bool
     */
    public function checkContext(\$context)
    {
        return \$this->statName === \$context;
    }

    /**
     * @return bool
     */
    public function checkContexts(array \$contexts)
    {
        return in_array(\$this->statName, \$contexts, true);
    }

    /**
     * @param string \$prefix
     *
     * @return bool
     */
    public function checkContextPrefix(\$prefix)
    {
        return 0 === strpos(\$this->statName, \$prefix);
    }

    /**
     * @return bool
     */
    public function checkContextPrefixes(array \$prefixes)
    {
        foreach (\$prefixes as \$string) {
            if (0 === strpos(\$this->statName, \$string)) {
                return true;
            }
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Event/AggregateStatRequestEvent.php";
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
        return new Source("", "@bundles/StatsBundle/Event/AggregateStatRequestEvent.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Event/AggregateStatRequestEvent.php");
    }
}
