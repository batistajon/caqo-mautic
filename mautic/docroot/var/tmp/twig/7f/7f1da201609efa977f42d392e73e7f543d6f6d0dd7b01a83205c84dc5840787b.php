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

/* @bundles/LeadBundle/Assets/css/lead.css */
class __TwigTemplate_2b18c1eca16228047e87d84a64518759ee5b28b959008441e36cd433b6a792e7 extends Template
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
        echo "/* LeadBundle */

.col-leadfield-id, .col-leadlist-id, .col-lead-id {
    width: 75px;
}

.col-leadfield-statusicons, .col-leadlist-leadcount {
    width: 100px;
}

.col-leadfield-orderhandle {
    width: 25px;
}

.col-leadfield-type {
    width: 125px;
}

.leadfield-list .fa-asterisk:hover, .leadfield-list .fa-eye:hover, .leadfield-list .fa-lock:hover, .leadfield-list .fa-list:hover {
    color: #7D5B71;
}

.leadlist-filter a {
    text-decoration: none;
}

.leadlist-filter:hover {
    background-color: #ecf0f1;
}

.leadlist-filter {
    height: 40px;
    border-bottom: 1px solid #cccccc;
    overflow: hidden;
}

.leadlist-filter-name {
    font-size: 1.1em;
}

.available-filters .rounded-corners {
    height: 300px;
    overflow: auto;
}

.selected-filters .rounded-corners {
    height: 300px;
    overflow: auto;
}

.selected-filters .in-group {
    margin-left:20px;
}


.selected-filters .glue-select {
    margin-top:2px;
}

.selected-filters .panel {
    margin-bottom:0;
    margin-top:20px;
}

.selected-filters .panel.in-group {
    margin-top:0;
    border-top:0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.col-leadpoints-date {
    width: 175px;
}

.col-leadpoints-delta {
    width: 75px;
}

.panel-foursquare .panel-heading {
    background: #0072b1;
    color: #FFFFFF;
}

.panel-facebook .panel-heading {
    background: #3b5998;
    color: #FFFFFF;
}

.panel-linkedin .panel-heding {
    background: #007bb6;
    color: #FFFFFF;
}

.panel-twitter .panel-heading {
    background: #00aced;
    color: #FFFFFF;
}

.panel-instagram .panel-heading {
    background: #517fa4;
    color: #FFFFFF;
}

.btn-leadnote-add {
    margin-left: 0 !important;
    border-bottom-left-radius: 2px !important;
    border-top-left-radius: 2px !important;
}

ul.tag-cloud li {
    list-style-type: none;
    float:left;
    margin: 0 10px;
    height: 35px;
}

#social-container div.tab-pane {
    height: 250px;
    overflow-y: auto;
    overflow-x: hidden;
}

.card.highlight {
    background-color: #faf2cc;
    border: 3px solid #4e5d9d !important;
}

.lead-avatar-panel {
    position: relative;
}

.lead-avatar-panel .avatar-collapser a.arrow {
    position: absolute;
    top:0;
    right: 0px;
    margin: 0 3px 0 0;
    padding: 0 10px;
}

.lead-avatar-panel .img-responsive {
    min-width: 100%;
}

.lead-merge-options {
    position: relative;
}

.contact-cards .panel-body {
    max-height: 150px;
}

.contact-cards .img {
    max-height: 115px;
}

#lead_merge_lead_to_merge_chosen .chosen-search {
    display:none;
}

.history-search{
    overflow: visible!important;
    min-height: 53px;
}

.timeline-icon {
    width: 50px;
    text-align: center;
}

.timeline-featured td, .timeline-featured th {
    background: rgba(78, 94, 158, 0.1 );
    border-right: 1px solid rgba(78, 94, 158, 0.1) !important;
}

#contact-timeline td {
    overflow-wrap: break-word;
    word-wrap: break-word;
    -ms-word-break: break-all;
    word-break: break-all;
    -ms-hyphens: auto;
    -moz-hyphens: auto;
    -webkit-hyphens: auto;
    hyphens: auto;
}

#contact-timeline .dl-horizontal dt {
    width: auto;
    text-align: left;
    margin-right: 10px;
}

#contact-timeline .dl-horizontal dd {
    margin-left: 0px;
}

#contact-timeline tr.timeline-row-highlighted {
    background-color: #fafafa;
}

#contact-timeline tr.timeline-details img {
    max-height: 200px;
}

.frequency{
    width: 65px!important;
}

.contact{
    display: inline !important;
}

.frequency-table, .frequency-table td{
    border-bottom: none!important;
    border-top: none!important;
}

.frequency-values {
    padding-left: 10px;
    padding-top: 27px;
    padding-bottom: 15px;
}

.frequency-select {
    width:125px !important;
    float: right;
    padding-right: 5px;
}

.frequency-label {
    padding: 8px;
 }

.frequency-date {
    width: 100px;
    float:left;
}

.panel-companies .primary {
    color: #fdb933;
}

.building::before {
    content: \"\\f1ad\";
    font-family: \"FontAwesome\";
    padding-right: 3px;
}

.user::before {
    content: \"\\f007\";
    font-family: \"FontAwesome\";
    padding-right: 3px;
}

#leads-container .spinner {
    text-align: center;
    line-height: 250px;
    font-size: 24px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Assets/css/lead.css";
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
        return new Source("", "@bundles/LeadBundle/Assets/css/lead.css", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Assets/css/lead.css");
    }
}
