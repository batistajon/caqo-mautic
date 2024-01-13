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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/toolbar.css */
class __TwigTemplate_becf5c88533b275c0e3dadc5d330add8af91fb14af54844fd2333b4717b981b9 extends Template
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
        echo "a
{
\ttext-decoration:none;
\tpadding: 2px 4px 4px 6px;
\tdisplay : block;
\tborder-width: 1px;
\tborder-style: solid;
\tmargin : 0px;
}

a.cke_scayt_toogle:hover,
a.cke_scayt_toogle:focus,
a.cke_scayt_toogle:active
{
\tborder-color: #316ac5;
\tbackground-color: #dff1ff;
\tcolor : #000;
\tcursor: pointer;
\tmargin : 0px;
}
a.cke_scayt_toogle {
\tcolor : #316ac5;
\tborder-color: #fff;
}
.scayt_enabled a.cke_scayt_item {
\tcolor : #316ac5;
\tborder-color: #fff;
\tmargin : 0px;
}
.scayt_disabled a.cke_scayt_item {
\tcolor : gray;
\tborder-color : #fff;
}
.scayt_enabled a.cke_scayt_item:hover,
.scayt_enabled a.cke_scayt_item:focus,
.scayt_enabled a.cke_scayt_item:active
{
\tborder-color: #316ac5;
\tbackground-color: #dff1ff;
\tcolor : #000;
\tcursor: pointer;
}
.scayt_disabled a.cke_scayt_item:hover,
.scayt_disabled a.cke_scayt_item:focus,
.scayt_disabled a.cke_scayt_item:active
{
\tborder-color: gray;
\tbackground-color: #dff1ff;
\tcolor : gray;
\tcursor: no-drop;
}
.cke_scayt_set_on, .cke_scayt_set_off
{
\tdisplay: none;
}
.scayt_enabled .cke_scayt_set_on
{
\tdisplay: none;
}
.scayt_disabled .cke_scayt_set_on
{
\tdisplay: inline;
}
.scayt_disabled .cke_scayt_set_off
{
\tdisplay: none;
}
.scayt_enabled  .cke_scayt_set_off
{
\tdisplay: inline;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/toolbar.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/toolbar.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/toolbar.css");
    }
}
