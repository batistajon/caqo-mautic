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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/controlgroup.css */
class __TwigTemplate_338adfde4cceecb6c344f8a984e1d85e8119fed95592f5e4c665094b3ccd94a2 extends Template
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
 * jQuery UI Controlgroup 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/controlgroup/#theming
 */

.ui-controlgroup {
\tvertical-align: middle;
\tdisplay: inline-block;
}
.ui-controlgroup > .ui-controlgroup-item {
\tfloat: left;
\tmargin-left: 0;
\tmargin-right: 0;
}
.ui-controlgroup > .ui-controlgroup-item:focus,
.ui-controlgroup > .ui-controlgroup-item.ui-visual-focus {
\tz-index: 9999;
}
.ui-controlgroup-vertical > .ui-controlgroup-item {
\tdisplay: block;
\tfloat: none;
\twidth: 100%;
\tmargin-top: 0;
\tmargin-bottom: 0;
\ttext-align: left;
}
.ui-controlgroup-vertical .ui-controlgroup-item {
\tbox-sizing: border-box;
}
.ui-controlgroup .ui-controlgroup-label {
\tpadding: .4em 1em;
}
.ui-controlgroup .ui-controlgroup-label span {
\tfont-size: 80%;
}
.ui-controlgroup-horizontal .ui-controlgroup-label + .ui-controlgroup-item {
\tborder-left: none;
}
.ui-controlgroup-vertical .ui-controlgroup-label + .ui-controlgroup-item {
\tborder-top: none;
}
.ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content {
\tborder-right: none;
}
.ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content {
\tborder-bottom: none;
}

/* Spinner specific style fixes */
.ui-controlgroup-vertical .ui-spinner-input {

\t/* Support: IE8 only, Android < 4.4 only */
\twidth: 75%;
\twidth: calc( 100% - 2.4em );
}
.ui-controlgroup-vertical .ui-spinner .ui-spinner-up {
\tborder-top-style: solid;
}

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/controlgroup.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/controlgroup.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/controlgroup.css");
    }
}
