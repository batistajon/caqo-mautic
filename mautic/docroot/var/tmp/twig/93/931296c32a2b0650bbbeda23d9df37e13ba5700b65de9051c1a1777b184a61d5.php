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

/* @bundles/DashboardBundle/Assets/css/dashboard.css */
class __TwigTemplate_417af9c56bd7b9b57cac5686ec127948f6e3a6fc7ceb8bdeb29583365a42c3ca extends Template
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
        echo ".input-group-addon label {
    margin-bottom: 0px;
}
.vector-map {
\theight: 350px;
    color: transparent;
}
.jvectormap-container {
    height:100%;
    width:100%;
}
.dashboard-widgets .sortable-placeholder {
    background-color: #fff;
    border: 1px dashed #4e5d9d;
    flex-grow: 0;
}
.dashboard-widgets.cards {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 10px;

}
.dashboard-widgets .card {
    margin: 5px;
    background: #FEFEFE;
    border: 1px solid rgba(0, 0, 0, 0.1);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -moz-transition-property: background-color, box-shadow, -moz-transform;
    -o-transition-property: background-color, box-shadow, text-shadow, -o-transform;
    -webkit-transition-property: background-color, box-shadow, text-shadow, -webkit-transform;
    transition-property: background-color, box-shadow, text-shadow, transform;
    -moz-transition-duration: 0.2s;
    -o-transition-duration: 0.2s;
    -webkit-transition-duration: 0.2s;
    transition-duration: 0.2s;
    -moz-transition-timing-function: linear;
    -o-transition-timing-function: linear;
    -webkit-transition-timing-function: linear;
    transition-timing-function: linear;
    position: relative;
}
.dashboard-widgets .card-header h4 {
    padding: 10px 15px;
    cursor: -moz-grab;
    cursor: -webkit-grab;
    cursor: grab;
}
.dashboard-widgets .card-header .dropdown {
    position: absolute;
    top: 6px;
    right: 3px;
}
.dashboard-widgets .card-header .dropdown-toggle .fa-ellipsis-v {
    font-size: 15px;
    color: rgba(0, 0, 0, 0.6);
    width: 30px;
    text-align: center;
    line-height: 30px;
}
.dashboard-widgets .card-header h4 {
    width: 90%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.dashboard-widgets .card table {
    table-layout: fixed;
}
.dashboard-widgets .card table td {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.dashboard-widgets .card table td:last-child {
    width: 30px;
}

.chart-wrapper {
    position: relative;
}
.chart-wrapper .legend {
    background: #000;
    opacity: 0;
    position: absolute;
    bottom: -17px;
    width: 100%;
    -moz-border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
    color: #fff;
    -webkit-transition: all 0.3s ease-in-out;
}
.chart-wrapper:hover .legend {
    opacity: 0.8;
}
.chart-wrapper .legend ul {
    list-style: none;
    margin: 0;
    padding: 5px 0;
}
.chart-wrapper .legend li {
    margin: 0 10px;
    padding: 5px 0;
}
.chart-wrapper .legend li span {
    display: inline-block;
    width: 14px;
    height: 8px;
    margin-right: 5px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

@media (max-width: 700px) {
    .dashboard-widgets .widget {
        width: 100% !important;
    }
}

#dashboard-widgets .spinner {
    text-align: center;
    line-height: 250px;
    font-size: 24px;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Assets/css/dashboard.css";
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
        return new Source("", "@bundles/DashboardBundle/Assets/css/dashboard.css", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Assets/css/dashboard.css");
    }
}
