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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_dropbox.svg */
class __TwigTemplate_8ab198cf44e0a8df5f9d3f5b46795dbda76a4119ad893172e672330dac6dc19c extends Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\"><g fill=\"#1e88e5\"><path d=\"M42 14L31.4 7.3l-7.4 6 11 6.4zM6 25.6l11 6.5 7-5.5L13.5 20zM17 7.3l-11 7 7.5 5.7L24 13.3zM24 26.6l7.2 5.5L42 25.6l-7-5.9z\"/><path d=\"M32.2 33.8l-1.2.7-1-.8-6-4.5-5.8 4.4-1.1.9-1.2-.7L13 32v2.6L24 42l11-7.2V32z\"/></g></svg>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_dropbox.svg";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_dropbox.svg", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_dropbox.svg");
    }
}
