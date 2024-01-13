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

/* @bundles/PointBundle/Assets/css/point.css */
class __TwigTemplate_b977c742543d6064217335f72ce2faef4f6b1f211b57a3b091d3ce062a28053f extends Template
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
        echo ".col-point-id, .col-pointtrigger-id {
    width: 75px;
}

.trigger-event-group-header {
    font-size: 1.1em;
    font-weight: bold;
}

#triggerEvents .trigger-event-row {
    padding: 20px;
    margin-bottom: 0 !important;
    border: 1px solid #ecf0f1;
}

#triggerEvents .trigger-event-row .event-label {
    font-size: 1.1em;
    font-weight: bold;
    display: block;
}

#triggerEvents .trigger-event-row .event-descr {
    font-size: 0.9em;
    display: block;
}

#triggerEvents .trigger-event-row:hover {
    background-color: #ecf0f1;
}

#triggerEvents .trigger-event-row.bg-danger:hover {
    background-color: #f2d4d2;
}

#triggerEvents .form-buttons {
    float: right;
}

.col-pointtrigger-color {
    width: 50px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Assets/css/point.css";
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
        return new Source("", "@bundles/PointBundle/Assets/css/point.css", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Assets/css/point.css");
    }
}
