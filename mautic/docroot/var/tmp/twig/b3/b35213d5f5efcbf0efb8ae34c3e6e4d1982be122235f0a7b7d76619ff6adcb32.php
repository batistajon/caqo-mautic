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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_onedrive.svg */
class __TwigTemplate_274d0aa6069cdef3c625cde657a424fdc1f1e7b78d4af690ea2002d5bad4473e extends Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\"><path d=\"M40.4 36s3-.4 3.5-3.2a5 5 0 0 0 0-1.7c-.4-3.1-3.8-3.8-3.8-3.8s.6-3.4-2.5-5.2c-3.2-1.8-6 0-6 0s-1.7-3.4-6.3-3.4c-5.8 0-6.8 6.6-6.8 6.6s-5.5.3-5.5 5.2 5 5.5 5 5.5h22.4z\" fill=\"#1565c0\"/><path d=\"M11 30.5c0-4.4 3.3-6.3 5.9-7 .9-3 3.4-6.8 8.4-6.8a9 9 0 0 1 7 3c.6-.3 1.4-.4 2.3-.4A8 8 0 0 0 26 12c-5.5 0-7.4 4.7-7.4 4.7s-4-3-8.1 1.1c-2.1 2.1-1.6 5.4-1.6 5.4S4 23.6 4 28.8C4 33.5 9 34 9 34h2.8c-.5-1-.8-2.1-.8-3.5z\" fill=\"#1565c0\"/></svg>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_onedrive.svg";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_onedrive.svg", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_onedrive.svg");
    }
}
