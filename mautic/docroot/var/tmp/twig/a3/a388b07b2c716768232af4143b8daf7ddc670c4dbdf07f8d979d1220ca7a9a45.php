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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/preview/images/pagebreak.gif */
class __TwigTemplate_4ee19425489c10c6a7c8544d004b6c619a1114b338fce2bc9b203adcd63ae8e6 extends Template
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
        echo "GIF89a\000\000�\000\000\000\000\000���\000\000\000\000\000\000!�\000\000\000!�ImageMagick
gamma=0.45455\000,\000\000\000\000\000\000\000�b���[�* ��|o:Ҹ4�a\000;";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/preview/images/pagebreak.gif";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/preview/images/pagebreak.gif", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/preview/images/pagebreak.gif");
    }
}
