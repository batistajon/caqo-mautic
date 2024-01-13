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

/* @bundles/CalendarBundle/Event/CalendarGeneratorEvent.php */
class __TwigTemplate_3a2797fd5a65bedf39d7b13adfb975d726738b25d33ddace74a942a17ad8eac4 extends Template
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

namespace Mautic\\CalendarBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class CalendarGeneratorEvent.
 */
class CalendarGeneratorEvent extends Event
{
    /**
     * @var array
     */
    private \$dates;

    /**
     * @var array
     */
    private \$events = [];

    public function __construct(array \$dates)
    {
        \$this->dates = \$dates;
    }

    /**
     * Adds an array of events to the container.
     */
    public function addEvents(array \$events)
    {
        // Modify colors
        foreach (\$events as &\$event) {
            if (isset(\$event['color']) && \$event['color']) {
                \$event['textColor'] = \$this->getContrastColor(\$event['color']);
                \$event['color']     = '#'.\$event['color'];
            }
        }

        \$this->events = array_merge(\$this->events, \$events);
    }

    /**
     * Fetches the event dates.
     *
     * @return array
     */
    public function getDates()
    {
        return \$this->dates;
    }

    /**
     * Fetches the events container.
     *
     * @return array
     */
    public function getEvents()
    {
        return \$this->events;
    }

    /**
     * Returns contrast hexadecimal color from color in the param.
     * It is used for picking contrast font color on \$hex background.
     *
     * @param string \$hex
     *
     * @return string
     */
    public function getContrastColor(\$hex)
    {
        \$r = hexdec(substr(\$hex, 0, 2));
        \$g = hexdec(substr(\$hex, 2, 2));
        \$b = hexdec(substr(\$hex, 4, 2));

        if (\$r + \$g + \$b > 382) {
            //bright color, use dark font
            return '#47535f';
        } else {
            //dark color, use bright font
            return '#ffffff';
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
        return "@bundles/CalendarBundle/Event/CalendarGeneratorEvent.php";
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
        return new Source("", "@bundles/CalendarBundle/Event/CalendarGeneratorEvent.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Event/CalendarGeneratorEvent.php");
    }
}
