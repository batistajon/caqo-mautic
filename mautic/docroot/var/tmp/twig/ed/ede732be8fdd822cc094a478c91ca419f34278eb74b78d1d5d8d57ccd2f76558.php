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

/* @bundles/EmailBundle/Assets/css/email.css */
class __TwigTemplate_edee431f8188af6ecec2058cee646cc195c66810b0bf521a74d4ea8c400f362f extends Template
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
        echo "/* EmailBundle */

.col-email-id {
    width: 75px;
}

.email-builder .builder-panel .panel-body {
    padding: 5px 0;
}

.table-bordered {
\tborder-left: 0;
}

.table-bordered.email-list > thead > tr > th:first-child, .table-bordered.email-list > tbody > tr > td:first-child,
.table-bordered.email-template > thead > tr > th:first-child, .table-bordered.email-template > tbody > tr > td:first-child {
\tborder-left: 0px;
}

.table-bordered.email-list > thead > tr > th:last-child, .table-bordered.email-list > tbody > tr > td:last-child,
.table-bordered.email-template > thead > tr > th:last-child, .table-bordered.email-template > tbody > tr > td:last-child {
    border-right: 0px;
}

.email-filters {

}

.clickable-stat a { color: #fff; }
.clickable-stat a:hover { color: #fff; }

#emailGraphStats {
    height: 437px;
}

#emailGraphStats .spinner {
    padding-top: 50px;
    text-align: center;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Assets/css/email.css";
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
        return new Source("", "@bundles/EmailBundle/Assets/css/email.css", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Assets/css/email.css");
    }
}
