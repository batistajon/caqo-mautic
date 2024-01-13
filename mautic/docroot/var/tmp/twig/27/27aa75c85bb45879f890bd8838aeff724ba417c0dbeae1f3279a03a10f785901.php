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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/wsc.css */
class __TwigTemplate_16b1f72fab45072896ffd726122619da06823e1d4481c50da121cc1a89b6762f extends Template
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
        echo "/*
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

html, body
{
\tbackground-color: transparent;
\tmargin: 0px;
\tpadding: 0px;
}

body
{
\tpadding: 10px;
}

body, td, input, select, textarea
{
\tfont-size: 11px;
\tfont-family: 'Microsoft Sans Serif' , Arial, Helvetica, Verdana;
}

.midtext
{
\tpadding:0px;
\tmargin:10px;
}

.midtext p
{
\tpadding:0px;
\tmargin:10px;
}

.Button
{
\tborder: #737357 1px solid;
\tcolor: #3b3b1f;
\tbackground-color: #c7c78f;
}

.PopupTabArea
{
\tcolor: #737357;
\tbackground-color: #e3e3c7;
}

.PopupTitleBorder
{
\tborder-bottom: #d5d59d 1px solid;
}
.PopupTabEmptyArea
{
\tpadding-left: 10px;
\tborder-bottom: #d5d59d 1px solid;
}

.PopupTab, .PopupTabSelected
{
\tborder-right: #d5d59d 1px solid;
\tborder-top: #d5d59d 1px solid;
\tborder-left: #d5d59d 1px solid;
\tpadding: 3px 5px 3px 5px;
\tcolor: #737357;
}

.PopupTab
{
\tmargin-top: 1px;
\tborder-bottom: #d5d59d 1px solid;
\tcursor: pointer;
}

.PopupTabSelected
{
\tfont-weight: bold;
\tcursor: default;
\tpadding-top: 4px;
\tborder-bottom: #f1f1e3 1px solid;
\tbackground-color: #f1f1e3;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/wsc.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/wsc.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/wsc.css");
    }
}
