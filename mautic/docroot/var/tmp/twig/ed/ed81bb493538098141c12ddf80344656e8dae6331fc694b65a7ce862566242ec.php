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

/* @bundles/CampaignBundle/Event/ContextTrait.php */
class __TwigTemplate_a36da692b774e37bd22ffcd1f88ce1fab73681858adc02977bd829a042725465 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Mautic\\CampaignBundle\\Entity\\Event;

trait ContextTrait
{
    /**
     * Check if an event is applicable.
     *
     * @param \$eventType
     *
     * @return bool
     */
    public function checkContext(\$eventType)
    {
        if (!\$this->event) {
            return false;
        }

        \$type = (\$this->event instanceof Event) ? \$this->event->getType() : \$this->event['type'];

        return strtolower(\$eventType) === strtolower(\$type);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/ContextTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ContextTrait.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/ContextTrait.php");
    }
}
