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

/* @bundles/CoreBundle/Controller/MauticController.php */
class __TwigTemplate_206bc15b0d781345c1cc0dae7fa61497e57caf6e133b5fb7c81db25bfa0bc36c extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Interface MauticController.
 *
 * A dummy interface to ensure that only Mautic bundles are affected by Mautic onKernelController events
 */
interface MauticController
{
    /**
     * Initialize the controller.
     *
     * @return mixed
     */
    public function initialize(FilterControllerEvent \$event);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/MauticController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/MauticController.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/MauticController.php");
    }
}
