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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/tabs.css */
class __TwigTemplate_a52fd4c680b704864266bca850b2458e5784994998fcd56e3e1e52232b97eada extends Template
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
 * jQuery UI Tabs 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/tabs/#theming
 */
.ui-tabs {
\tposition: relative;/* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as \"fixed\") */
\tpadding: .2em;
}
.ui-tabs .ui-tabs-nav {
\tmargin: 0;
\tpadding: .2em .2em 0;
}
.ui-tabs .ui-tabs-nav li {
\tlist-style: none;
\tfloat: left;
\tposition: relative;
\ttop: 0;
\tmargin: 1px .2em 0 0;
\tborder-bottom-width: 0;
\tpadding: 0;
\twhite-space: nowrap;
}
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
\tfloat: left;
\tpadding: .5em 1em;
\ttext-decoration: none;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
\tmargin-bottom: -1px;
\tpadding-bottom: 1px;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
\tcursor: text;
}
.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
\tcursor: pointer;
}
.ui-tabs .ui-tabs-panel {
\tdisplay: block;
\tborder-width: 0;
\tpadding: 1em 1.4em;
\tbackground: none;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/tabs.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/tabs.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/tabs.css");
    }
}
