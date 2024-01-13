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

/* @bundles/CalendarBundle/MauticCalendarBundle.php */
class __TwigTemplate_892c6f60623755e866c4faff4bb22a8649a7c6eead988a95e733621d8c8c27bd extends Template
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

use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Class MauticCalendarBundle.
 */
class MauticCalendarBundle extends Bundle
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/MauticCalendarBundle.php";
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
        return new Source("", "@bundles/CalendarBundle/MauticCalendarBundle.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/MauticCalendarBundle.php");
    }
}
