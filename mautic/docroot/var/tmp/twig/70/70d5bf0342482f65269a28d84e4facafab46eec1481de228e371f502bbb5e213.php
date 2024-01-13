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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/slider.css */
class __TwigTemplate_db2b50b930ae2fee9d5df0462b63cdbd0b41bcc328ceb707162fa31352d3b58e extends Template
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
 * jQuery UI Slider 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/slider/#theming
 */
.ui-slider {
\tposition: relative;
\ttext-align: left;
}
.ui-slider .ui-slider-handle {
\tposition: absolute;
\tz-index: 2;
\twidth: 1.2em;
\theight: 1.2em;
\tcursor: default;
\t-ms-touch-action: none;
\ttouch-action: none;
}
.ui-slider .ui-slider-range {
\tposition: absolute;
\tz-index: 1;
\tfont-size: .7em;
\tdisplay: block;
\tborder: 0;
\tbackground-position: 0 0;
}

/* support: IE8 - See #6727 */
.ui-slider.ui-state-disabled .ui-slider-handle,
.ui-slider.ui-state-disabled .ui-slider-range {
\tfilter: inherit;
}

.ui-slider-horizontal {
\theight: .8em;
}
.ui-slider-horizontal .ui-slider-handle {
\ttop: -.3em;
\tmargin-left: -.6em;
}
.ui-slider-horizontal .ui-slider-range {
\ttop: 0;
\theight: 100%;
}
.ui-slider-horizontal .ui-slider-range-min {
\tleft: 0;
}
.ui-slider-horizontal .ui-slider-range-max {
\tright: 0;
}

.ui-slider-vertical {
\twidth: .8em;
\theight: 100px;
}
.ui-slider-vertical .ui-slider-handle {
\tleft: -.3em;
\tmargin-left: 0;
\tmargin-bottom: -.6em;
}
.ui-slider-vertical .ui-slider-range {
\tleft: 0;
\twidth: 100%;
}
.ui-slider-vertical .ui-slider-range-min {
\tbottom: 0;
}
.ui-slider-vertical .ui-slider-range-max {
\ttop: 0;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/slider.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/slider.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/slider.css");
    }
}
