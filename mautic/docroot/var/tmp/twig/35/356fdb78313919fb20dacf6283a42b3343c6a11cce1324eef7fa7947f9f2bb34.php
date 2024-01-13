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

/* @bundles/CalendarBundle/Model/CalendarModel.php */
class __TwigTemplate_34c3b14da73134778ba7e0e321eb97445bd9cecaedc44f447b55fe7af67fdcad extends Template
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

namespace Mautic\\CalendarBundle\\Model;

use Mautic\\CalendarBundle\\CalendarEvents;
use Mautic\\CalendarBundle\\Event\\CalendarGeneratorEvent;
use Mautic\\CalendarBundle\\Event\\EventGeneratorEvent;
use Mautic\\CoreBundle\\Model\\FormModel;

/**
 * Class CalendarModel.
 */
class CalendarModel extends FormModel
{
    /**
     * Collects data for the calendar display.
     *
     * @param array \$dates Associative array containing a 'start_date' and 'end_date' key
     *
     * @return array
     */
    public function getCalendarEvents(array \$dates)
    {
        \$event = new CalendarGeneratorEvent(\$dates);
        \$this->dispatcher->dispatch(CalendarEvents::CALENDAR_ON_GENERATE, \$event);

        return \$event->getEvents();
    }

    /**
     * Collects data for the calendar display.
     *
     * @param string \$bundle
     * @param int    \$id
     *
     * @return array
     */
    public function editCalendarEvent(\$bundle, \$id)
    {
        \$event = new EventGeneratorEvent(\$bundle, \$id);
        \$this->dispatcher->dispatch(CalendarEvents::CALENDAR_EVENT_ON_GENERATE, \$event);

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/Model/CalendarModel.php";
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
        return new Source("", "@bundles/CalendarBundle/Model/CalendarModel.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Model/CalendarModel.php");
    }
}
