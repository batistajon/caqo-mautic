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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/skins/default.css */
class __TwigTemplate_af8f537ebb39a2db2f4541795d79a1268b034d066eabaa2bc059beecea0655f8 extends Template
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

.cke_autocomplete_panel
{
\tposition: absolute;
\tdisplay: none;
\tbox-sizing: border-box;
\twidth: 200px;
\tmax-height: 300px;
\toverflow: auto;
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
\tbackground: #FFF;
\tborder: 1px solid #b6b6b6;
\tborder-bottom-color: #999;
\tborder-radius: 3px;
\tfont: 12px Arial, Helvetica, Tahoma, Verdana, Sans-Serif;
}
.cke_autocomplete_opened
{
\tdisplay: block;
}
.cke_autocomplete_panel > li
{
\tpadding: 5px;
}
.cke_autocomplete_panel > li:hover
{
\tcursor: pointer;
}
.cke_autocomplete_selected, .cke_autocomplete_panel > li:hover
{
\tbackground-color: #EFF0EF;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/skins/default.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/skins/default.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/skins/default.css");
    }
}
