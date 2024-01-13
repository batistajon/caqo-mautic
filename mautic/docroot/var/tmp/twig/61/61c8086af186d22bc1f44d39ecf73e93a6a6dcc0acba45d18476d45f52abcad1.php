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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.css */
class __TwigTemplate_6687ae0d9387fd8077a302001e79f4cd536884dd9fd691410645a7780a906990 extends Template
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
Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/

.cke_tpl_list
{
\tborder: #dcdcdc 2px solid;
\tbackground-color: #ffffff;
\toverflow-y: auto;
\toverflow-x: hidden;
\twidth: 100%;
\theight: 220px;
}

.cke_tpl_item
{
\tmargin: 5px;
\tpadding: 7px;
\tborder: #eeeeee 1px solid;
\t*width: 88%;
}

.cke_tpl_preview
{
\tborder-collapse: separate;
\ttext-indent:0;
\twidth: 100%;
}
.cke_tpl_preview td
{
\tpadding: 2px;
\tvertical-align: middle;
}
.cke_tpl_preview .cke_tpl_preview_img
{
\twidth: 100px;
}
.cke_tpl_preview span
{
\twhite-space: normal;
}

.cke_tpl_title
{
\tfont-weight: bold;
}

.cke_tpl_list a:hover .cke_tpl_item,
.cke_tpl_list a:focus .cke_tpl_item,
.cke_tpl_list a:active .cke_tpl_item
{
\tborder: #ff9933 1px solid;
\tbackground-color: #fffacd;
}

.cke_tpl_list a:hover *,
.cke_tpl_list a:focus *,
.cke_tpl_list a:active *
{
\tcursor: pointer;
}

/* IE Quirks contextual selectors children will not get :hover transition until
\tthe hover style of the link itself contains certain CSS declarations. */
.cke_browser_quirks .cke_tpl_list a:active,
.cke_browser_quirks .cke_tpl_list a:hover,
.cke_browser_quirks .cke_tpl_list a:focus
{
\tbackground-position: 0 0;
}

.cke_hc .cke_tpl_list a:hover .cke_tpl_item,
.cke_hc .cke_tpl_list a:focus .cke_tpl_item,
.cke_hc .cke_tpl_list a:active .cke_tpl_item
{
\tborder-width: 3px;
}

.cke_tpl_empty, .cke_tpl_loading
{
\ttext-align: center;
\tpadding: 5px;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.css");
    }
}
