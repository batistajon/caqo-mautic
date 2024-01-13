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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/datepicker.css */
class __TwigTemplate_a146ce81b0ad4e0e817fef9bc28711310d187f1f7029e6d34154e52b19e04167 extends Template
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
 * jQuery UI Datepicker 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/datepicker/#theming
 */
.ui-datepicker {
\twidth: 17em;
\tpadding: .2em .2em 0;
\tdisplay: none;
}
.ui-datepicker .ui-datepicker-header {
\tposition: relative;
\tpadding: .2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
\tposition: absolute;
\ttop: 2px;
\twidth: 1.8em;
\theight: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
\ttop: 1px;
}
.ui-datepicker .ui-datepicker-prev {
\tleft: 2px;
}
.ui-datepicker .ui-datepicker-next {
\tright: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
\tleft: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
\tright: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
\tdisplay: block;
\tposition: absolute;
\tleft: 50%;
\tmargin-left: -8px;
\ttop: 50%;
\tmargin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
\tmargin: 0 2.3em;
\tline-height: 1.8em;
\ttext-align: center;
}
.ui-datepicker .ui-datepicker-title select {
\tfont-size: 1em;
\tmargin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
\twidth: 45%;
}
.ui-datepicker table {
\twidth: 100%;
\tfont-size: .9em;
\tborder-collapse: collapse;
\tmargin: 0 0 .4em;
}
.ui-datepicker th {
\tpadding: .7em .3em;
\ttext-align: center;
\tfont-weight: bold;
\tborder: 0;
}
.ui-datepicker td {
\tborder: 0;
\tpadding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
\tdisplay: block;
\tpadding: .2em;
\ttext-align: right;
\ttext-decoration: none;
}
.ui-datepicker .ui-datepicker-buttonpane {
\tbackground-image: none;
\tmargin: .7em 0 0 0;
\tpadding: 0 .2em;
\tborder-left: 0;
\tborder-right: 0;
\tborder-bottom: 0;
}
.ui-datepicker .ui-datepicker-buttonpane button {
\tfloat: right;
\tmargin: .5em .2em .4em;
\tcursor: pointer;
\tpadding: .2em .6em .3em .6em;
\twidth: auto;
\toverflow: visible;
}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
\tfloat: left;
}

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi {
\twidth: auto;
}
.ui-datepicker-multi .ui-datepicker-group {
\tfloat: left;
}
.ui-datepicker-multi .ui-datepicker-group table {
\twidth: 95%;
\tmargin: 0 auto .4em;
}
.ui-datepicker-multi-2 .ui-datepicker-group {
\twidth: 50%;
}
.ui-datepicker-multi-3 .ui-datepicker-group {
\twidth: 33.3%;
}
.ui-datepicker-multi-4 .ui-datepicker-group {
\twidth: 25%;
}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
\tborder-left-width: 0;
}
.ui-datepicker-multi .ui-datepicker-buttonpane {
\tclear: left;
}
.ui-datepicker-row-break {
\tclear: both;
\twidth: 100%;
\tfont-size: 0;
}

/* RTL support */
.ui-datepicker-rtl {
\tdirection: rtl;
}
.ui-datepicker-rtl .ui-datepicker-prev {
\tright: 2px;
\tleft: auto;
}
.ui-datepicker-rtl .ui-datepicker-next {
\tleft: 2px;
\tright: auto;
}
.ui-datepicker-rtl .ui-datepicker-prev:hover {
\tright: 1px;
\tleft: auto;
}
.ui-datepicker-rtl .ui-datepicker-next:hover {
\tleft: 1px;
\tright: auto;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane {
\tclear: right;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button {
\tfloat: left;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
\tfloat: right;
}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
\tborder-right-width: 0;
\tborder-left-width: 1px;
}

/* Icons */
.ui-datepicker .ui-icon {
\tdisplay: block;
\ttext-indent: -99999px;
\toverflow: hidden;
\tbackground-repeat: no-repeat;
\tleft: .5em;
\ttop: .3em;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/datepicker.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/datepicker.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/datepicker.css");
    }
}
