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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/core.css */
class __TwigTemplate_389ef5094c58798cd7df2c2c1ab4bc805a60fdb28677e0e17eda03db21064324 extends Template
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
 * jQuery UI CSS Framework 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */

/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
\tdisplay: none;
}
.ui-helper-hidden-accessible {
\tborder: 0;
\tclip: rect(0 0 0 0);
\theight: 1px;
\tmargin: -1px;
\toverflow: hidden;
\tpadding: 0;
\tposition: absolute;
\twidth: 1px;
}
.ui-helper-reset {
\tmargin: 0;
\tpadding: 0;
\tborder: 0;
\toutline: 0;
\tline-height: 1.3;
\ttext-decoration: none;
\tfont-size: 100%;
\tlist-style: none;
}
.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
\tcontent: \"\";
\tdisplay: table;
\tborder-collapse: collapse;
}
.ui-helper-clearfix:after {
\tclear: both;
}
.ui-helper-zfix {
\twidth: 100%;
\theight: 100%;
\ttop: 0;
\tleft: 0;
\tposition: absolute;
\topacity: 0;
\tfilter:Alpha(Opacity=0); /* support: IE8 */
}

.ui-front {
\tz-index: 100;
}


/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
\tcursor: default !important;
\tpointer-events: none;
}


/* Icons
----------------------------------*/
.ui-icon {
\tdisplay: inline-block;
\tvertical-align: middle;
\tmargin-top: -.25em;
\tposition: relative;
\ttext-indent: -99999px;
\toverflow: hidden;
\tbackground-repeat: no-repeat;
}

.ui-widget-icon-block {
\tleft: 50%;
\tmargin-left: -8px;
\tdisplay: block;
}

/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay {
\tposition: fixed;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/core.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/core.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/core.css");
    }
}
