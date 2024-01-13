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

/* @bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php */
class __TwigTemplate_f0ec2003c5b8abd687030deba14cdd0ace9ed71ce08b67f8064478eee7f72310 extends Template
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

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;

class EventBuilder
{
    /**
     * @return array
     */
    public static function buildActions(array \$actions)
    {
        \$converted = [];
        foreach (\$actions as \$key => \$actionArray) {
            \$converted[\$key] = new ActionAccessor(\$actionArray);
        }

        return \$converted;
    }

    /**
     * @return array
     */
    public static function buildConditions(array \$conditions)
    {
        \$converted = [];
        foreach (\$conditions as \$key => \$conditionArray) {
            \$converted[\$key] = new ConditionAccessor(\$conditionArray);
        }

        return \$converted;
    }

    /**
     * @return array
     */
    public static function buildDecisions(array \$decisions)
    {
        \$converted = [];
        foreach (\$decisions as \$key => \$decisionArray) {
            \$converted[\$key] = new DecisionAccessor(\$decisionArray);
        }

        return \$converted;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php");
    }
}
