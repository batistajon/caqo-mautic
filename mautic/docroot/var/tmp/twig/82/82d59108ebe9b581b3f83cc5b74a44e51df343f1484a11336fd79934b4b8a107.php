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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colordialog/dialogs/colordialog.css */
class __TwigTemplate_d6b7535b759c5783e8af9f1acf4849491300514bd97b2772ff8b7c9eefff786d extends Template
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
        echo "/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

.cke_colordialog_colorcell {
\twidth: 12px; /* All cells have equal width which depends on parent width (in this case table parent). Width works more like max-width. */
\theight: 14px;
\tpadding: 1px; /* Padding is replaced by border for focused cells. Prevents 'jumping' when adding borders. */
}

.cke_colordialog_colorcell.cke_colordialog_focused_light,
.cke_colordialog_colorcell.cke_colordialog_focused_dark {
\tpadding: 0; /* Shrink cell to allow 1px border indicating focus. */
\tborder: 1px dotted #000;
}

.cke_colordialog_colorcell.cke_colordialog_focused_dark {
\tborder-color: #FFF;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colordialog/dialogs/colordialog.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colordialog/dialogs/colordialog.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colordialog/dialogs/colordialog.css");
    }
}
