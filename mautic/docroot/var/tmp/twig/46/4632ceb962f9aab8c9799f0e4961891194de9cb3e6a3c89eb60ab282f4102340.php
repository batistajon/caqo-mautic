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

/* @bundles/ConfigBundle/ConfigEvents.php */
class __TwigTemplate_833bd0e20c2e858e18294f0c0767882cf1821eee0e5afaf6e8f0ca465766df26 extends Template
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

namespace Mautic\\ConfigBundle;

/**
 * Class ConfigEvents
 * Events available for ConfigBundle.
 */
final class ConfigEvents
{
    /**
     * The mautic.config_on_generate event is thrown when the configuration form is generated.
     *
     * The event listener receives a
     * Mautic\\ConfigBundle\\Event\\ConfigGenerateEvent instance.
     *
     * @var string
     */
    const CONFIG_ON_GENERATE = 'mautic.config_on_generate';

    /**
     * The mautic.config_pre_save event is thrown right before config data are saved.
     *
     * The event listener receives a Mautic\\ConfigBundle\\Event\\ConfigEvent instance.
     *
     * @var string
     */
    const CONFIG_PRE_SAVE = 'mautic.config_pre_save';

    /**
     * The mautic.config_post_save event is thrown right after config data are saved.
     *
     * The event listener receives a Mautic\\ConfigBundle\\Event\\ConfigEvent instance.
     *
     * @var string
     */
    const CONFIG_POST_SAVE = 'mautic.config_post_save';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/ConfigEvents.php";
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
        return new Source("", "@bundles/ConfigBundle/ConfigEvents.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/ConfigEvents.php");
    }
}
