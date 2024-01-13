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

/* @bundles/FormBundle/Event/FormEvent.php */
class __TwigTemplate_769ee62844dff0da36771d96715347651a930ac92f14b068d62122c108fbdb4d extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Entity\\Form;

/**
 * Class FormEvent.
 */
class FormEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Form &\$form, \$isNew = false)
    {
        \$this->entity = &\$form;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Form entity.
     *
     * @return Form
     */
    public function getForm()
    {
        return \$this->entity;
    }

    /**
     * Sets the Form entity.
     */
    public function setForm(Form \$form)
    {
        \$this->entity = \$form;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/FormEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FormEvent.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Event/FormEvent.php");
    }
}
