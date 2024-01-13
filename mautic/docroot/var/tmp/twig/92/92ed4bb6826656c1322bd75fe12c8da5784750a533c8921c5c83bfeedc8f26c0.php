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

/* @bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php */
class __TwigTemplate_abad92d7248eeee257117469c0cc08375e91060b67baac8804fc8f44c9927bba extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event;

class ActionAccessor extends AbstractEventAccessor
{
    /**
     * ActionAccessor constructor.
     */
    public function __construct(array \$config)
    {
        \$this->systemProperties[] = 'batchEventName';

        parent::__construct(\$config);
    }

    /**
     * @return mixed
     */
    public function getBatchEventName()
    {
        return \$this->getProperty('batchEventName');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php");
    }
}
