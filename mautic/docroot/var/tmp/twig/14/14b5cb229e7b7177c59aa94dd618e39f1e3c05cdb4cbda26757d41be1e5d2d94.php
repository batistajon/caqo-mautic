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

/* @bundles/PluginBundle/Helper/EventHelper.php */
class __TwigTemplate_41c5e5aee633a2b9d95a6c5d43d8d29463e18a6ae20aed504c750e908980a696 extends Template
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

namespace Mautic\\PluginBundle\\Helper;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\EventListener\\PushToIntegrationTrait;

/**
 * Class EventHelper.
 */
class EventHelper
{
    use PushToIntegrationTrait;

    /**
     * @param \$lead
     */
    public static function pushLead(\$config, \$lead, MauticFactory \$factory)
    {
        \$contact = \$factory->getEntityManager()->getRepository('MauticLeadBundle:Lead')->getEntityWithPrimaryCompany(\$lead);

        /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$integrationHelper */
        \$integrationHelper = \$factory->getHelper('integration');

        static::setStaticIntegrationHelper(\$integrationHelper);
        \$errors  = [];

        return static::pushIt(\$config, \$contact, \$errors);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Helper/EventHelper.php";
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
        return new Source("", "@bundles/PluginBundle/Helper/EventHelper.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Helper/EventHelper.php");
    }
}
