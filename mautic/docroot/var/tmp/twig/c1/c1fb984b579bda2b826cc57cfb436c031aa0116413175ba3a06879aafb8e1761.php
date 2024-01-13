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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/print.less */
class __TwigTemplate_1cc5c846432c92092ccad306e2dd05f2ee0acaf12de173ea273e56e961a75faa extends Template
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
        echo "/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */

// ==========================================================================
// Print styles.
// Inlined to avoid the additional HTTP request: h5bp.com/r
// ==========================================================================

@media print {
    *,
    *:before,
    *:after {
        background: transparent !important;
        color: #000 !important; // Black prints faster: h5bp.com/s
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: \" (\" attr(href) \")\";
    }

    abbr[title]:after {
        content: \" (\" attr(title) \")\";
    }

    // Don't show links that are fragment identifiers,
    // or use the `javascript:` pseudo protocol
    a[href^=\"#\"]:after,
    a[href^=\"javascript:\"]:after {
        content: \"\";
    }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group; // h5bp.com/t
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }

    // Bootstrap specific changes start

    // Bootstrap components
    .navbar {
        display: none;
    }
    .btn,
    .dropup > .btn {
        > .caret {
            border-top-color: #000 !important;
        }
    }
    .label {
        border: 1px solid #000;
    }

    .table {
        border-collapse: collapse !important;

        td,
        th {
            background-color: #fff !important;
        }
    }
    .table-bordered {
        th,
        td {
            border: 1px solid #ddd !important;
        }
    }

    // Bootstrap specific changes end
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/print.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/print.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/print.less");
    }
}
