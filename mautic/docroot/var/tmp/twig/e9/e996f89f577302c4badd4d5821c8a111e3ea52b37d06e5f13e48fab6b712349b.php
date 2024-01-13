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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/styles/copyformatting.css */
class __TwigTemplate_0ac70c2bdf4a10532186e05bfb25bc684b40a63968ca4068042897e5455956b0 extends Template
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

html.cke_copyformatting_active {
\tmin-height: 100%;
}

/* There is no cursor in CUR format for IE/Edge as that browser
 does not support custom cursor in [contenteditable] area.
 Ticket for this issue:
 https://connect.microsoft.com/IE/feedback/details/1070215/cant-change-cursor-in-contenteditable-using-css */
.cke_copyformatting_disabled,
.cke_copyformatting_disabled a,
.cke_copyformatting_disabled .cke_editable {
\tcursor: url(../cursors/cursor-disabled.svg) 12 1, auto;
}

.cke_copyformatting_disabled .cke_top a,
.cke_copyformatting_disabled .cke_bottom a {
\tcursor: default;
}

/* Added `!important` rule as a fix for overriding the cursor by the Table Resize plugin.
 The `!important` rule is used because the Table Resize plugin creates a `<div>` which changes the cursor using inlined styles. */
.cke_copyformatting_active,
.cke_copyformatting_active.cke_editable,
.cke_copyformatting_active .cke_editable,
.cke_copyformatting_active a,
.cke_copyformatting_active table,
.cke_copyformatting_active div[data-cke-temp],
.cke_copyformatting_tableresize_cursor div[data-cke-temp] {
\tcursor: url(../cursors/cursor.svg) 12 1, auto !important;
}

.cke_screen_reader_only {
\tposition: absolute;
\tclip: rect(1px, 1px, 1px, 1px);
\tpadding: 0;
\tborder: 0;
\theight: 1px;
\twidth: 1px;
\toverflow: hidden;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/styles/copyformatting.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/styles/copyformatting.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/styles/copyformatting.css");
    }
}
