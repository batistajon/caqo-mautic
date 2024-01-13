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

/* @bundles/FormBundle/Assets/css/form.css */
class __TwigTemplate_76d3ad4fe80426581ed1518e274f18b35b031861c13b31868cc22aa0a3e5c780 extends Template
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
        echo "/* FormBundle */

.panel2 {
    border: 1px solid #ebedf0;
    -webkit-box-shadow: 0px 1px 1px #f3f3f3;
    box-shadow: 0px 1px 1px #f3f3f3;
    margin-left:25px;
    margin-bottom:25px;
    margin-right:25px;
    zoom:0.9;
}
.panel2 label {
    font-size:1em;
}
.panel:hover, .panel2:hover {
    border-color:#ccc;
}

.form-submitaction-group-header {
    font-size: 1.1em;
    font-weight: bold;
}

.form-field-wrapper {
    position: relative;
}

.form-field-wrapper img {
    max-width: 100%;
}

#mauticforms_fields .mauticform-row, #mauticforms_actions .mauticform-row {
    padding: 10px;
}

#mauticforms_fields .mauticform-row {
    margin-bottom: 0 !important;
}

#mauticforms_actions .mauticform-row .action-label {
    font-size: 1.1em;
    font-weight: bold;
    display: block;
}

#mauticforms_actions .mauticform-row .action-descr {
    font-size: 0.9em;
    display: block;
}

#mauticforms_actions .form-buttons {
    float: right;
    margin-top: 3px;
}

#mauticforms_fields .form-buttons {
    position: absolute;
    right: 8px;
    top: 8px;
}

#mauticforms_fields input, #mauticforms_fields textarea, #mauticforms_fields select {
    background-color: #fff;
    box-shadow: 0px 0px 0px #fff inset;
    padding: 0.5em 0.5em;
    width: 50%;
}

#mauticforms_fields .chosen-container-single .chosen-search input[type=\"text\"] {
    width:100%;
}

.mauticform-row {
    min-height: 60px;
}

#mauticforms_fields .panel-footer {
    padding: 3px 15px;
}

textarea.form-html {
    height: 200px;
}

.col-form-id, .col-formresult-id {
    width: 75px;
}

.col-form-submissions {
    width: 100px;
}

.formresult-list th .input-group {
    margin-top: 10px;
}

.formresult-list th:not(.col-formresult-id):not(.col-actions) {
    min-width: 125px;
}

.formresult-list th.col-formresult-id {
    min-width: 125px;
}

.inline-spacer {
    padding-right: 20px;
}

#mauticforms_fields input[type=\"date\"],
#mauticforms_fields input[type=\"time\"],
#mauticforms_fields input[type=\"datetime-local\"],
#mauticforms_fields input[type=\"month\"] {
    line-height: inherit;
}
#mauticforms_fields input.mauticform-radiogrp-radio {
    width: auto;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Assets/css/form.css";
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
        return new Source("", "@bundles/FormBundle/Assets/css/form.css", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Assets/css/form.css");
    }
}
