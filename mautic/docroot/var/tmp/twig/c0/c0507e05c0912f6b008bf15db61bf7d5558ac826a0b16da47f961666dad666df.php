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

/* @bundles/CampaignBundle/EventCollector/Builder/ConnectionBuilder.php */
class __TwigTemplate_bed81cc749d654546ba5580e2dbd16fb8bd6690dc34f7423e225289dd1aff8f0 extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector\\Builder;

use Mautic\\CampaignBundle\\Entity\\Event;

class ConnectionBuilder
{
    /**
     * @var array
     */
    private static \$eventTypes = [];

    /**
     * @var array
     */
    private static \$connectionRestrictions = ['anchor' => []];

    /**
     * Used by JS/JsPlumb to restrict how events can be associated to each other in the UI.
     *
     * @return array
     */
    public static function buildRestrictionsArray(array \$events)
    {
        // Reset restrictions
        self::\$connectionRestrictions = ['anchor' => []];

        // Build the restrictions
        self::\$eventTypes = array_fill_keys(array_keys(\$events), []);
        foreach (\$events as \$eventType => \$typeEvents) {
            foreach (\$typeEvents as \$key => \$event) {
                self::addTypeConnection(\$eventType, \$key, \$event);
            }
        }

        return self::\$connectionRestrictions;
    }

    /**
     * @param string \$eventType
     * @param string \$key
     */
    private static function addTypeConnection(\$eventType, \$key, array \$event)
    {
        if (!isset(self::\$connectionRestrictions[\$key])) {
            self::\$connectionRestrictions[\$key] = [
                'source' => self::\$eventTypes,
                'target' => self::\$eventTypes,
            ];
        }

        if (!isset(self::\$connectionRestrictions[\$key])) {
            self::\$connectionRestrictions['anchor'][\$key] = [];
        }

        if (isset(\$event['connectionRestrictions'])) {
            foreach (\$event['connectionRestrictions'] as \$restrictionType => \$restrictions) {
                self::addRestriction(\$key, \$restrictionType, \$restrictions);
            }
        }

        self::addDeprecatedAnchorRestrictions(\$eventType, \$key, \$event);
    }

    /**
     * @param string \$key
     * @param string \$restrictionType
     */
    private static function addRestriction(\$key, \$restrictionType, array \$restrictions)
    {
        switch (\$restrictionType) {
            case 'source':
            case 'target':
                foreach (\$restrictions as \$groupType => \$groupRestrictions) {
                    self::\$connectionRestrictions[\$key][\$restrictionType][\$groupType] += \$groupRestrictions;
                }
                break;
            case 'anchor':
                foreach (\$restrictions as \$anchor) {
                    list(\$group, \$anchor)                                           = explode('.', \$anchor);
                    self::\$connectionRestrictions[\$restrictionType][\$group][\$key][] = \$anchor;
                }

                break;
        }
    }

    /**
     * @deprecated 2.6.0 to be removed in 3.0; BC support
     *
     * @param string \$eventType
     * @param string \$key
     */
    private static function addDeprecatedAnchorRestrictions(\$eventType, \$key, array \$event)
    {
        switch (\$eventType) {
            case Event::TYPE_DECISION:
                if (isset(\$event['associatedActions'])) {
                    self::\$connectionRestrictions[\$key]['target']['action'] += \$event['associatedActions'];
                }
                break;
            case Event::TYPE_ACTION:
                if (isset(\$event['associatedDecisions'])) {
                    self::\$connectionRestrictions[\$key]['source']['decision'] += \$event['associatedDecisions'];
                }
                break;
        }

        if (isset(\$event['anchorRestrictions'])) {
            foreach (\$event['anchorRestrictions'] as \$restriction) {
                list(\$group, \$anchor)                                   = explode('.', \$restriction);
                self::\$connectionRestrictions['anchor'][\$key][\$group][] = \$anchor;
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventCollector/Builder/ConnectionBuilder.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Builder/ConnectionBuilder.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventCollector/Builder/ConnectionBuilder.php");
    }
}
