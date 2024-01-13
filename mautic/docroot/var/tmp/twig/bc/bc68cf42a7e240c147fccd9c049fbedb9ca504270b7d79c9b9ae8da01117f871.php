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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css */
class __TwigTemplate_1360517aaead0a72155e6e462b84ad3bd5ee0739b0c0d32d243dcd29e4157b03 extends Template
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
        echo ".cke_dialog_body #overlayBlock,
.cke_dialog_body #no_check_over
{
    top: 39px !important;
}

div[name=SpellTab] .wsc-spelltab-bottom .cke_dialog_ui_vbox td > .cke_dialog_ui_button:first-child
{
    margin-top: 4px;
}

div[name=SpellTab] .wsc-spelltab-bottom .cke_dialog_ui_hbox_first .cke_dialog_ui_select > label
{
    margin-left: 0;
}

div[name=SpellTab] .wsc-spelltab-bottom .cke_dialog_ui_hbox_first .cke_dialog_ui_select div.cke_dialog_ui_input_select
{
    width: 140px !important;
}

div[name=SpellTab] .wsc-spelltab-bottom .cke_dialog_ui_hbox_first .cke_dialog_ui_select select.cke_dialog_ui_input_select,
div[name=Thesaurus] div.cke_dialog_ui_input_select select.cke_dialog_ui_input_select
{
    margin-top: 1px;
}

div[name=SpellTab] .wsc-spelltab-bottom .cke_dialog_ui_hbox_first .cke_dialog_ui_select select.cke_dialog_ui_input_select:focus,
div[name=Thesaurus] div.cke_dialog_ui_input_select select.cke_dialog_ui_input_select:focus
{
    margin-top: 0;
}

div[name=GrammTab] .cke_dialog_ui_vbox tbody > tr:first-child .cke_dialog_ui_button,
div[name=Thesaurus] .cke_dialog_ui_vbox tbody > tr:first-child .cke_dialog_ui_button
{
    margin-top: 4px !important;
}

div[name=Thesaurus] div.cke_dialog_ui_input_select
{
    width: 180px !important;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css");
    }
}
