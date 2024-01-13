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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/dialog.css */
class __TwigTemplate_01d53a5eee0a6167c48ce497060750dea346275a86443ba2bd8be86a9e2104c1 extends Template
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
        echo "/*!
 * jQuery UI Dialog 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/dialog/#theming
 */
.ui-dialog {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tpadding: .2em;
\toutline: 0;
}
.ui-dialog .ui-dialog-titlebar {
\tpadding: .4em 1em;
\tposition: relative;
}
.ui-dialog .ui-dialog-title {
\tfloat: left;
\tmargin: .1em 0;
\twhite-space: nowrap;
\twidth: 90%;
\toverflow: hidden;
\ttext-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
\tposition: absolute;
\tright: .3em;
\ttop: 50%;
\twidth: 20px;
\tmargin: -10px 0 0 0;
\tpadding: 1px;
\theight: 20px;
}
.ui-dialog .ui-dialog-content {
\tposition: relative;
\tborder: 0;
\tpadding: .5em 1em;
\tbackground: none;
\toverflow: auto;
}
.ui-dialog .ui-dialog-buttonpane {
\ttext-align: left;
\tborder-width: 1px 0 0 0;
\tbackground-image: none;
\tmargin-top: .5em;
\tpadding: .3em 1em .5em .4em;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
\tfloat: right;
}
.ui-dialog .ui-dialog-buttonpane button {
\tmargin: .5em .4em .5em 0;
\tcursor: pointer;
}
.ui-dialog .ui-resizable-n {
\theight: 2px;
\ttop: 0;
}
.ui-dialog .ui-resizable-e {
\twidth: 2px;
\tright: 0;
}
.ui-dialog .ui-resizable-s {
\theight: 2px;
\tbottom: 0;
}
.ui-dialog .ui-resizable-w {
\twidth: 2px;
\tleft: 0;
}
.ui-dialog .ui-resizable-se,
.ui-dialog .ui-resizable-sw,
.ui-dialog .ui-resizable-ne,
.ui-dialog .ui-resizable-nw {
\twidth: 7px;
\theight: 7px;
}
.ui-dialog .ui-resizable-se {
\tright: 0;
\tbottom: 0;
}
.ui-dialog .ui-resizable-sw {
\tleft: 0;
\tbottom: 0;
}
.ui-dialog .ui-resizable-ne {
\tright: 0;
\ttop: 0;
}
.ui-dialog .ui-resizable-nw {
\tleft: 0;
\ttop: 0;
}
.ui-draggable .ui-dialog-titlebar {
\tcursor: move;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/dialog.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/dialog.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/dialog.css");
    }
}
