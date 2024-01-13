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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/selectmenu.css */
class __TwigTemplate_f719795dfa71af93eb40c2d298393af811120baee0db96402e9f0b7ebbf8b4fb extends Template
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
 * jQuery UI Selectmenu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/selectmenu/#theming
 */
.ui-selectmenu-menu {
\tpadding: 0;
\tmargin: 0;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tdisplay: none;
}
.ui-selectmenu-menu .ui-menu {
\toverflow: auto;
\toverflow-x: hidden;
\tpadding-bottom: 1px;
}
.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
\tfont-size: 1em;
\tfont-weight: bold;
\tline-height: 1.5;
\tpadding: 2px 0.4em;
\tmargin: 0.5em 0 0 0;
\theight: auto;
\tborder: 0;
}
.ui-selectmenu-open {
\tdisplay: block;
}
.ui-selectmenu-text {
\tdisplay: block;
\tmargin-right: 20px;
\toverflow: hidden;
\ttext-overflow: ellipsis;
}
.ui-selectmenu-button.ui-button {
\ttext-align: left;
\twhite-space: nowrap;
\twidth: 14em;
}
.ui-selectmenu-icon.ui-icon {
\tfloat: right;
\tmargin-top: 0;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/selectmenu.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/selectmenu.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/selectmenu.css");
    }
}
