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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/spinner.css */
class __TwigTemplate_88549d40f48cebce8d38708a15378f9694c5db2c91fe5df84f78204b3258ba61 extends Template
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
 * jQuery UI Spinner 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/spinner/#theming
 */
.ui-spinner {
\tposition: relative;
\tdisplay: inline-block;
\toverflow: hidden;
\tpadding: 0;
\tvertical-align: middle;
}
.ui-spinner-input {
\tborder: none;
\tbackground: none;
\tcolor: inherit;
\tpadding: .222em 0;
\tmargin: .2em 0;
\tvertical-align: middle;
\tmargin-left: .4em;
\tmargin-right: 2em;
}
.ui-spinner-button {
\twidth: 1.6em;
\theight: 50%;
\tfont-size: .5em;
\tpadding: 0;
\tmargin: 0;
\ttext-align: center;
\tposition: absolute;
\tcursor: default;
\tdisplay: block;
\toverflow: hidden;
\tright: 0;
}
/* more specificity required here to override default borders */
.ui-spinner a.ui-spinner-button {
\tborder-top-style: none;
\tborder-bottom-style: none;
\tborder-right-style: none;
}
.ui-spinner-up {
\ttop: 0;
}
.ui-spinner-down {
\tbottom: 0;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/spinner.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/spinner.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/spinner.css");
    }
}
