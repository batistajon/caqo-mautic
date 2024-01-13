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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_box.svg */
class __TwigTemplate_e1ae91aed2da70470231f1834122d0947bce51c05097b133491ec684a6b7f8dd extends Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\"><g fill=\"#0288d1\"><path d=\"M25.6 18c-3 0-5.8 1.8-7.2 4.5a8 8 0 0 0-12.2-2.9V12c0-.8-.8-1.7-1.6-1.7-1 0-1.6.7-1.6 1.7v14.5C3 31 6.7 35 11 35c3.2 0 6-1.8 7.4-4.5 1.4 2.7 4 4.5 7.2 4.5 4.6 0 8.1-3.9 8.1-8.4 0-4.7-3.5-8.6-8-8.6M11 31.6a5 5 0 0 1-4.9-5 5 5 0 0 1 4.9-5.2c2.6 0 4.8 2.4 4.8 5.1.2 2.7-2 5-4.8 5zm14.5 0a5 5 0 0 1-4.8-5 5 5 0 0 1 4.8-5.2 5 5 0 0 1 4.9 5.1c0 2.7-2.3 5-4.9 5z\"/><path d=\"M44.8 32.4l-4.3-6 4.3-5.8c.5-.7.3-1.9-.3-2.4-.7-.5-1.8-.3-2.3.3l-3.6 5.1-3.6-5c-.5-.7-1.7-.9-2.3-.4-.7.5-.8 1.7-.3 2.4l4.2 5.9-4.2 5.9c-.5.6-.4 1.8.3 2.3.6.5 1.8.3 2.3-.3l3.6-5 3.6 5c.5.6 1.6.8 2.3.3.6-.5.8-1.7.3-2.3\"/></g></svg>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_box.svg";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_box.svg", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/volume_icon_box.svg");
    }
}