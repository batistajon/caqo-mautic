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

/* @bundles/CampaignBundle/Event/EventArrayTrait.php */
class __TwigTemplate_5f6ea0e481dbf406df5bb26c81f716a8b97cedfdd4b0f88e7cad088d3b90d424 extends Template
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
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

/**
 * Trait EventArrayTrait.
 *
 * @deprecated 2.13.0; used for BC support. To be removed in 3.0
 */
trait EventArrayTrait
{
    /**
     * @var array
     */
    protected \$eventArray = [];

    /**
     * Used to convert entities to the old array format; tried to minimize the need for this except where needed.
     *
     * @return array
     */
    protected function getEventArray(Event \$event)
    {
        \$eventId = \$event->getId();
        if (isset(\$this->eventArray[\$eventId])) {
            return \$this->eventArray[\$eventId];
        }

        \$eventArray = \$event->convertToArray();
        \$campaign   = \$event->getCampaign();

        \$eventArray['campaign'] = [
            'id'        => \$campaign->getId(),
            'name'      => \$campaign->getName(),
            'createdBy' => \$campaign->getCreatedBy(),
        ];

        \$eventArray['parent'] = null;
        if (\$parent = \$event->getParent()) {
            \$eventArray['parent']             = \$parent->convertToArray();
            \$eventArray['parent']['campaign'] = \$eventArray['campaign'];
        }

        \$eventArray['children'] = [];
        if (\$children = \$event->getChildren()) {
            /** @var Event \$child */
            foreach (\$children as \$child) {
                \$childArray             = \$child->convertToArray();
                \$childArray['parent']   =&\$eventArray;
                \$childArray['campaign'] =&\$eventArray['campaign'];
                unset(\$childArray['children']);

                \$eventArray['children'] = \$childArray;
            }
        }

        \$this->eventArray[\$eventId] = \$eventArray;

        return \$this->eventArray[\$eventId];
    }

    /**
     * @return array
     */
    protected function getLegacyEventsArray(LeadEventLog \$log)
    {
        \$event = \$log->getEvent();

        return [
            \$event->getCampaign()->getId() => [
                \$this->getEventArray(\$event),
            ],
        ];
    }

    /**
     * @return array
     */
    protected function getLegacyEventsConfigArray(Event \$event, AbstractEventAccessor \$config)
    {
        return [
            \$event->getEventType() => [
                \$event->getType() => [
                    \$config->getConfig(),
                ],
            ],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/EventArrayTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/EventArrayTrait.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/EventArrayTrait.php");
    }
}
