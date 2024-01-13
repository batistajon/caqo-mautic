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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/resizable.css */
class __TwigTemplate_ce80ac3901a2eb9bb8093aed9d818023b82284b4c45d570739497ca3b1a7cbd3 extends Template
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
 * jQuery UI Resizable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
.ui-resizable {
\tposition: relative;
}
.ui-resizable-handle {
\tposition: absolute;
\tfont-size: 0.1px;
\tdisplay: block;
\t-ms-touch-action: none;
\ttouch-action: none;
}
.ui-resizable-disabled .ui-resizable-handle,
.ui-resizable-autohide .ui-resizable-handle {
\tdisplay: none;
}
.ui-resizable-n {
\tcursor: n-resize;
\theight: 7px;
\twidth: 100%;
\ttop: -5px;
\tleft: 0;
}
.ui-resizable-s {
\tcursor: s-resize;
\theight: 7px;
\twidth: 100%;
\tbottom: -5px;
\tleft: 0;
}
.ui-resizable-e {
\tcursor: e-resize;
\twidth: 7px;
\tright: -5px;
\ttop: 0;
\theight: 100%;
}
.ui-resizable-w {
\tcursor: w-resize;
\twidth: 7px;
\tleft: -5px;
\ttop: 0;
\theight: 100%;
}
.ui-resizable-se {
\tcursor: se-resize;
\twidth: 12px;
\theight: 12px;
\tright: 1px;
\tbottom: 1px;
}
.ui-resizable-sw {
\tcursor: sw-resize;
\twidth: 9px;
\theight: 9px;
\tleft: -5px;
\tbottom: -5px;
}
.ui-resizable-nw {
\tcursor: nw-resize;
\twidth: 9px;
\theight: 9px;
\tleft: -5px;
\ttop: -5px;
}
.ui-resizable-ne {
\tcursor: ne-resize;
\twidth: 9px;
\theight: 9px;
\tright: -5px;
\ttop: -5px;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/resizable.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/resizable.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/resizable.css");
    }
}
