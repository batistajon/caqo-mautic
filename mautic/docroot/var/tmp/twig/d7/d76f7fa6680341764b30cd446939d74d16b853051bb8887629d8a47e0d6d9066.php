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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/menu.css */
class __TwigTemplate_e35c36ec03a8e42cebb6638d71b1c3c61ccb3cca870a109929665f310d8b0825 extends Template
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
 * jQuery UI Menu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/menu/#theming
 */
.ui-menu {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tdisplay: block;
\toutline: 0;
}
.ui-menu .ui-menu {
\tposition: absolute;
}
.ui-menu .ui-menu-item {
\tmargin: 0;
\tcursor: pointer;
\t/* support: IE10, see #8844 */
\tlist-style-image: url(\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\");
}
.ui-menu .ui-menu-item-wrapper {
\tposition: relative;
\tpadding: 3px 1em 3px .4em;
}
.ui-menu .ui-menu-divider {
\tmargin: 5px 0;
\theight: 0;
\tfont-size: 0;
\tline-height: 0;
\tborder-width: 1px 0 0 0;
}
.ui-menu .ui-state-focus,
.ui-menu .ui-state-active {
\tmargin: -1px;
}

/* icon support */
.ui-menu-icons {
\tposition: relative;
}
.ui-menu-icons .ui-menu-item-wrapper {
\tpadding-left: 2em;
}

/* left-aligned */
.ui-menu .ui-icon {
\tposition: absolute;
\ttop: 0;
\tbottom: 0;
\tleft: .2em;
\tmargin: auto 0;
}

/* right-aligned */
.ui-menu .ui-menu-icon {
\tleft: auto;
\tright: 0;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/menu.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/menu.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/menu.css");
    }
}
