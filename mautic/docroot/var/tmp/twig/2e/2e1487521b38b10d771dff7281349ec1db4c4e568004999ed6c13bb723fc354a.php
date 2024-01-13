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

/* @bundles/PointBundle/PointEvents.php */
class __TwigTemplate_7e483abd0e9958cc31151908f44e06621394109b4384017c1432e3a1f5c43ab4 extends Template
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

namespace Mautic\\PointBundle;

/**
 * Class PointEvents.
 *
 * Events available for PointBundle
 */
final class PointEvents
{
    /**
     * The mautic.point_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\PointEvent instance.
     *
     * @var string
     */
    const POINT_PRE_SAVE = 'mautic.point_pre_save';

    /**
     * The mautic.point_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\PointEvent instance.
     *
     * @var string
     */
    const POINT_POST_SAVE = 'mautic.point_post_save';

    /**
     * The mautic.point_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\PointEvent instance.
     *
     * @var string
     */
    const POINT_PRE_DELETE = 'mautic.point_pre_delete';

    /**
     * The mautic.point_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\PointEvent instance.
     *
     * @var string
     */
    const POINT_POST_DELETE = 'mautic.point_post_delete';

    /**
     * The mautic.point_on_build event is thrown before displaying the point builder form to allow adding of custom actions.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\PointBuilderEvent instance.
     *
     * @var string
     */
    const POINT_ON_BUILD = 'mautic.point_on_build';

    /**
     * The mautic.point_on_action event is thrown to execute a point action.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\PointActionEvent instance.
     *
     * @var string
     */
    const POINT_ON_ACTION = 'mautic.point_on_action';

    /**
     * The mautic.point_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\TriggerEvent instance.
     *
     * @var string
     */
    const TRIGGER_PRE_SAVE = 'mautic.trigger_pre_save';

    /**
     * The mautic.trigger_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\TriggerEvent instance.
     *
     * @var string
     */
    const TRIGGER_POST_SAVE = 'mautic.trigger_post_save';

    /**
     * The mautic.trigger_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\TriggerEvent instance.
     *
     * @var string
     */
    const TRIGGER_PRE_DELETE = 'mautic.trigger_pre_delete';

    /**
     * The mautic.trigger_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\TriggerEvent instance.
     *
     * @var string
     */
    const TRIGGER_POST_DELETE = 'mautic.trigger_post_delete';

    /**
     * The mautic.trigger_on_build event is thrown before displaying the trigger builder form to allow adding of custom actions.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\TriggerBuilderEvent instance.
     *
     * @var string
     */
    const TRIGGER_ON_BUILD = 'mautic.trigger_on_build';

    /**
     * The mautic.trigger_on_event_execute event is thrown to execute a trigger event.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\TriggerExecutedEvent instance.
     *
     * @var string
     */
    const TRIGGER_ON_EVENT_EXECUTE = 'mautic.trigger_on_event_execute';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/PointEvents.php";
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
        return new Source("", "@bundles/PointBundle/PointEvents.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/PointEvents.php");
    }
}
