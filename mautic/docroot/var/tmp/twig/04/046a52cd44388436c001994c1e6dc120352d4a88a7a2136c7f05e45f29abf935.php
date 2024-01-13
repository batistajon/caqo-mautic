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

/* @bundles/PageBundle/Event/RedirectGenerationEvent.php */
class __TwigTemplate_c80d9b9bbbf64bf084f9d77a3d70779d20535c8db82c3f3cb714792124be6b7c extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PageBundle\\Entity\\Redirect;

class RedirectGenerationEvent extends CommonEvent
{
    /**
     * @var array
     */
    private \$clickthrough;

    /**
     * @var Redirect
     */
    private \$redirect;

    public function __construct(Redirect \$redirect, array \$clickthrough)
    {
        \$this->redirect     = \$redirect;
        \$this->clickthrough = \$clickthrough;
    }

    /**
     * Set or overwrite a value in the clickthrough.
     *
     * @param string \$key
     * @param mixed  \$value
     */
    public function setInClickthrough(\$key, \$value)
    {
        \$this->clickthrough[\$key] = \$value;
    }

    /**
     * Get the redirect from the event.
     *
     * @return Redirect
     */
    public function getRedirect()
    {
        return \$this->redirect;
    }

    /**
     * Get the modified clickthrough from the event.
     *
     * @return array
     */
    public function getClickthrough()
    {
        return \$this->clickthrough;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/RedirectGenerationEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/RedirectGenerationEvent.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Event/RedirectGenerationEvent.php");
    }
}
