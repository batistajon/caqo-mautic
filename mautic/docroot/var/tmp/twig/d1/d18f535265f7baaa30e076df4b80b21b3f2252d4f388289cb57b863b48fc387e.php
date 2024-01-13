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

/* @bundles/CategoryBundle/CategoryEvents.php */
class __TwigTemplate_adbaf38d1b8cd165f3a1a3ae8eb6cb4fb9955e3f66ff53c870f172ec78b7975d extends Template
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

namespace Mautic\\CategoryBundle;

/**
 * Class CategoryBundle
 * Events available for CategoryBundle.
 */
final class CategoryEvents
{
    /**
     * The mautic.category_pre_save event is thrown right before a category is persisted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_PRE_SAVE = 'mautic.category_pre_save';

    /**
     * The mautic.category_post_save event is thrown right after a category is persisted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_POST_SAVE = 'mautic.category_post_save';

    /**
     * The mautic.category_pre_delete event is thrown prior to when a category is deleted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_PRE_DELETE = 'mautic.category_pre_delete';

    /**
     * The mautic.category_post_delete event is thrown after a category is deleted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_POST_DELETE = 'mautic.category_post_delete';

    /**
     * The mautic.category_on_bundle_list_build event is thrown when a list of bundles supporting categories is build.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryTypesEvent instance.
     *
     * @var string
     */
    const CATEGORY_ON_BUNDLE_LIST_BUILD = 'mautic.category_on_bundle_list_build';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/CategoryEvents.php";
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
        return new Source("", "@bundles/CategoryBundle/CategoryEvents.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/CategoryEvents.php");
    }
}
