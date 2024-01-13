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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css */
class __TwigTemplate_04f3ea714d966bf94920d761446537d49d8cb42bd280f68944e6f00838c4dbc0 extends Template
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
        echo ".scayt-lang-list > div
{
    padding-bottom: 6px !important;
}

.scayt-lang-list > div input
{
    margin-right: 4px;
}

#scayt_about_
{
    margin: 30px auto 0 auto;
}

#scayt_about_ p
{
\ttext-align: center;
\tmargin-bottom: 10px;
}

.cke_dialog_contents_body div[name=dictionaries] .cke_dialog_ui_hbox_last > a.cke_dialog_ui_button
{
    margin-top: 0;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css");
    }
}
