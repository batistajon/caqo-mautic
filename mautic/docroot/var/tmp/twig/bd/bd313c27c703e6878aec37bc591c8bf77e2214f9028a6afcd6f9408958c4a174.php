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

/* @bundles/DashboardBundle/Event/WidgetFormEvent.php */
class __TwigTemplate_309ff6a552fa7ca8c1d949d48e187eeca98fbc4205fb633f940f1292ff48ae68 extends Template
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

namespace Mautic\\DashboardBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\DashboardBundle\\Entity\\Widget;

/**
 * Class WidgetFormEvent.
 */
class WidgetFormEvent extends CommonEvent
{
    protected \$form;
    protected \$type;

    /**
     * Set the widget type.
     *
     * @param string \$type
     */
    public function setType(\$type)
    {
        \$this->type = \$type;
    }

    /**
     * Get the widget type.
     *
     * @return string \$type
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Set the widget form.
     *
     * @param string \$form
     */
    public function setForm(\$form)
    {
        \$this->form = \$form;
    }

    /**
     * Returns the widget edit form.
     *
     * @param string \$form
     */
    public function getForm()
    {
        return \$this->form;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Event/WidgetFormEvent.php";
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
        return new Source("", "@bundles/DashboardBundle/Event/WidgetFormEvent.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Event/WidgetFormEvent.php");
    }
}
