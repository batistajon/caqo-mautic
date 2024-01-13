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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/tableselection/styles/tableselection.css */
class __TwigTemplate_b0d68b2c667eb68db36f82b36c5d452c121e4025d5d18059dc482cf9a420a9fc extends Template
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
        echo ".cke_table-faked-selection-editor *::selection, table[data-cke-table-faked-selection-table] *::selection {
\tbackground: transparent;
}

.cke_table-faked-selection {
\tbackground: darkgray !important;
\tcolor: black;
}
.cke_table-faked-selection a {
\tcolor: black;
}
.cke_editable:focus .cke_table-faked-selection {
\t/* We have to use !important here, as td might specify it's own background, thus table selection
\twould not be visible. */
\tbackground: #0076cb !important;
\tcolor: white;
}
.cke_editable:focus .cke_table-faked-selection a {
\tcolor: white;
}
.cke_table-faked-selection::-moz-selection, .cke_table-faked-selection ::-moz-selection {
\tbackground: transparent;
}
.cke_table-faked-selection::selection, .cke_table-faked-selection ::selection {
\tbackground: transparent;
}

/* Change the cursor when selecting cells (#706).
 *
 * This solution does not work in IE, Edge and Safari due to upstream isues:
 * https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/3419602/
 * https://bugs.webkit.org/show_bug.cgi?id=53341
 */
table[data-cke-table-faked-selection-table] {
\tcursor: cell;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/tableselection/styles/tableselection.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/tableselection/styles/tableselection.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/tableselection/styles/tableselection.css");
    }
}
