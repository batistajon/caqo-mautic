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

/* @bundles/ApiBundle/ApiEvents.php */
class __TwigTemplate_842c2fbf2e6d0a1edf62d0950a9276af52f243ed8ae5b290bcb10f7e87453a80 extends Template
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

namespace Mautic\\ApiBundle;

/**
 * Class ApiEvents.
 */
final class ApiEvents
{
    /**
     * The mautic.client_pre_save event is thrown right before an API client is persisted.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ClientEvent instance.
     *
     * @var string
     */
    const CLIENT_PRE_SAVE = 'mautic.client_pre_save';

    /**
     * The mautic.client_post_save event is thrown right after an API client is persisted.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ClientEvent instance.
     *
     * @var string
     */
    const CLIENT_POST_SAVE = 'mautic.client_post_save';

    /**
     * The mautic.client_post_delete event is thrown after an API client is deleted.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ClientEvent instance.
     *
     * @var string
     */
    const CLIENT_POST_DELETE = 'mautic.client_post_delete';

    /**
     * The mautic.build_api_route event is thrown to build Mautic API routes.
     *
     * The event listener receives a Mautic\\CoreBundle\\Event\\RouteEvent instance.
     *
     * @var string
     */
    const BUILD_ROUTE = 'mautic.build_api_route';

    /**
     * The mautic.api_on_entity_pre_save event is thrown after an entity about to be saved via API.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ApiEntityEvent instance.
     *
     * @var string
     */
    const API_ON_ENTITY_PRE_SAVE = 'mautic.api_on_entity_pre_save';

    /**
     * The mautic.api_on_entity_post_save event is thrown after an entity is saved via API.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ApiEntityEvent instance.
     *
     * @var string
     */
    const API_ON_ENTITY_POST_SAVE = 'mautic.api_on_entity_post_save';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/ApiEvents.php";
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
        return new Source("", "@bundles/ApiBundle/ApiEvents.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/ApiEvents.php");
    }
}
