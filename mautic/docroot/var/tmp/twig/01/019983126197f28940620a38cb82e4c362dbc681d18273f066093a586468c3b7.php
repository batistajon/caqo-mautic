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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/base.css */
class __TwigTemplate_daaedb4dcd1d6a83b35d40970eb2a62ffb4b0d9e3858f35c62d0cc641283aa8c extends Template
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
@import url(\"core.css\");

@import url(\"accordion.css\");
@import url(\"autocomplete.css\");
@import url(\"button.css\");
@import url(\"checkboxradio.css\");
@import url(\"controlgroup.css\");
@import url(\"datepicker.css\");
@import url(\"dialog.css\");
@import url(\"draggable.css\");
@import url(\"menu.css\");
@import url(\"progressbar.css\");
@import url(\"resizable.css\");
@import url(\"selectable.css\");
@import url(\"selectmenu.css\");
@import url(\"sortable.css\");
@import url(\"slider.css\");
@import url(\"spinner.css\");
@import url(\"tabs.css\");
@import url(\"tooltip.css\");
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/base.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/base.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/base/base.css");
    }
}
