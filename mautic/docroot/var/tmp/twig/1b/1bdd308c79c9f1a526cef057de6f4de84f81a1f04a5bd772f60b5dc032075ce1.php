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

/* @bundles/CalendarBundle/CalendarEvents.php */
class __TwigTemplate_c72d2420bca586086145895418922f6dc3288cfe3fbfadf86ff0266684aa032f extends Template
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

namespace Mautic\\CalendarBundle;

/**
 * Class CalendarEvents.
 *
 * Events available for CalendarBundle
 */
final class CalendarEvents
{
    /**
     * The mautic.calendar_on_generate event is thrown when generating a calendar view.
     *
     * The event listener receives a Mautic\\CalendarBundle\\Event\\CalendarGeneratorEvent instance.
     *
     * @var string
     */
    const CALENDAR_ON_GENERATE = 'mautic.calendar_on_generate';

    /**
     * The mautic.calendar_event_on_generate event is thrown when generating a calendar edit / new view.
     *
     * The event listener receives a Mautic\\CalendarBundle\\Event\\EventGeneratorEvent instance.
     *
     * @var string
     */
    const CALENDAR_EVENT_ON_GENERATE = 'mautic.calendar_event_on_generate';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/CalendarEvents.php";
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
        return new Source("", "@bundles/CalendarBundle/CalendarEvents.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/CalendarEvents.php");
    }
}
