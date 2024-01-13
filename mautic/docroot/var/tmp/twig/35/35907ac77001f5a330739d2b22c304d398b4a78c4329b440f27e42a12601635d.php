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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/button.css */
class __TwigTemplate_8981a11c60241e77e50f03e5e04b529f1daed2fd9139c38e8cdf6f6d53096538 extends Template
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
 * jQuery UI Button 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/button/#theming
 */
.ui-button {
\tpadding: .4em 1em;
\tdisplay: inline-block;
\tposition: relative;
\tline-height: normal;
\tmargin-right: .1em;
\tcursor: pointer;
\tvertical-align: middle;
\ttext-align: center;
\t-webkit-user-select: none;
\t-moz-user-select: none;
\t-ms-user-select: none;
\tuser-select: none;

\t/* Support: IE <= 11 */
\toverflow: visible;
}

.ui-button,
.ui-button:link,
.ui-button:visited,
.ui-button:hover,
.ui-button:active {
\ttext-decoration: none;
}

/* to make room for the icon, a width needs to be set here */
.ui-button-icon-only {
\twidth: 2em;
\tbox-sizing: border-box;
\ttext-indent: -9999px;
\twhite-space: nowrap;
}

/* no icon support for input elements */
input.ui-button.ui-button-icon-only {
\ttext-indent: 0;
}

/* button icon element(s) */
.ui-button-icon-only .ui-icon {
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\tmargin-top: -8px;
\tmargin-left: -8px;
}

.ui-button.ui-icon-notext .ui-icon {
\tpadding: 0;
\twidth: 2.1em;
\theight: 2.1em;
\ttext-indent: -9999px;
\twhite-space: nowrap;

}

input.ui-button.ui-icon-notext .ui-icon {
\twidth: auto;
\theight: auto;
\ttext-indent: 0;
\twhite-space: normal;
\tpadding: .4em 1em;
}

/* workarounds */
/* Support: Firefox 5 - 40 */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
\tborder: 0;
\tpadding: 0;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/button.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/button.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/button.css");
    }
}
