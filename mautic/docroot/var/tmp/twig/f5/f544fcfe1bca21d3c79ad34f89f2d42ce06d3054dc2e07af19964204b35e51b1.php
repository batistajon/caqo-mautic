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

/* @bundles/CampaignBundle/Assets/css/campaign.css */
class __TwigTemplate_2867c09ab02c1d145946c27b58de6f3c67f636a245eec546b8f6a0e0e6edfc70 extends Template
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
        echo ".col-campaign-id {
    width: 75px;
}


.campaign-builder .btns-builder {
    position: fixed;
    top: 15px;
    right: 30px;
    z-index: 1040;
}

.campaign-builder .builder-content {
    right: 0;
}

.campaign-builder #builder-errors {
    position: fixed;
    top: 52px;
    right: 30px;
    z-index: 1040;
}

#CampaignCanvas {
    height: 10000px;
    width: 10000px;
}

#CampaignEvent_newsource_hide {
    display: none;
}

#CampaignEventPanel {
    position: absolute;
    padding: 10px 20px;
    background-color: #ededed;
    border: 1px solid #cdcdcd;
    border-radius: 4px;
    z-index:1035;
}

#CampaignEventPanelLists .disabled-result {
    display: none;
}

#CampaignEventPanelGroups .panel-body {
    height: 150px;
}

.jtk-endpoint {
    z-index: 1005;
}

.jtk-endpoint.dragActive {
    /* changes endpoint when dragging connector */
}

.jtk-label {
    background-color: white;
    opacity:0.9;
    padding:0.3em;
    border-radius:0.5em;
    border: 1px solid #47535f;
    cursor:pointer;
    z-index: 1004;
    color: #47535f;
}

.jtk-connector {
    z-index: 1000;
}

.jtk-clickable_anchor {
    cursor: pointer;
    z-index: 1050;
}

.jtk-endpoint svg text {
    display: none;
}

.jtk-clickable_anchor svg text {
    display: block;
}

.jtk-surface {
    overflow: hidden !important;
    position: relative;
    cursor: move;
    cursor: -moz-grab;
    cursor: -webkit-grab;
    touch-action:none;
}

.jtk-surface-nopan {
    overflow: scroll !important;
    cursor:default;
}

.list-campaign-event, .list-campaign-source {
    width: 200px;
    height: 45px;
    position: absolute;
    padding: 10px 15px;
    z-index: 1010;
    background: #FFFFFF;
    border-radius: 3px;
}

.live .list-campaign-event:hover, .live .list-campaign-source:hover {
    border:1px solid #123456;
    /*
    box-shadow: 2px 2px 19px #444;
    -o-box-shadow: 2px 2px 19px #444;
    -webkit-box-shadow: 2px 2px 19px #444;
    -moz-box-shadow: 2px 2px 19px #fff;
    opacity:0.9;
    filter:alpha(opacity=90);
    */
}

.campaign-event-buttons {
    position: absolute;
    top: -10px;
    right: -10px;
}

.campaign-event-buttons .btn {
    border-radius: 10px;
    width: 20px;
    height: 20px;
    padding: 0;
}

.campaign-event-content {
    cursor: pointer;
    position: relative;
}

.campaign-event-content .highlight-jump-target {
    position: absolute;
    bottom: -26px;
    left: 50%;
    border-radius: 10px;
    width: 20px;
    height: 20px;
    padding: 0;
    margin-left: -10px;
}

.list-campaign-event .campaign-event-name {
    overflow: hidden;
    white-space: nowrap;
}

.list-campaign-decision {
    /*background-color: #e5ffff;*/
    border: solid 1px #00b49d;
}

.list-campaign-condition {
    /*background-color: #ffe9d1;*/
    border: solid 1px #ffb79f;
}

.list-campaign-action {
    /*background-color: #cdddff;*/
    border: solid 1px #9babeb;
    /*color: #fff;*/
}

.list-campaign-leadsource {
    /*background-color: #ffffe6;*/
    border: solid 1px #fdb933;
    /*color: #fff;*/
}

#CampaignEventSelector_chosen .list-campaign-action,
#CampaignEventSelector_chosen .list-campaign-condition,
#CampaignEventSelector_chosen .list-campaign-decision,
#CampaignEventSelector_chosen .list-campaign-leadsource {
    border-left: none;
    border-right: none;
    border-top: none;
    padding: 10px 5px;
}

#CampaignEventSelector_chosen .disabled-result {
    display: none;
}

.campaign-builder .list-group-item.ui-draggable-dragging {
    width: 206px;
    padding: 10px 15px;
    border-radius: 6px;
}

.campaign-builder .builder-active {
    height: 10000px !important;
}

.campaign-builder .builder-content {
    height: auto;
    width: auto;
    bottom: 0;
    overflow: auto;
}

#CampaignCanvas {
    height: 10000px;
    width: 10000px;
    position: relative;
}

.campaign-event-list .progress-bar {
    position: absolute;
    top: 0;
    height: 3px;
}

.campaign-event-buttons .btn-edit {
    background: #337ab7;
}

.stat-boxes .pie-legend li {
    display: inline;
}

.preview .builder-content {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: visible;
}

.preview .builder-active {
    width: 100%;
    height: auto;
    position: relative;
}

.preview .list-campaign-event, .preview  .list-campaign-source {
    width: auto;
    height: 45px;
    position: absolute;
    padding: 10px 15px;
    z-index: 1010;
    background: #FFFFFF;
    border-radius: 3px;
}

.preview .list-campaign-event {
    height: 54px;
}

.preview .list-campaign-source {
    height: 45px;
}

.preview .jtk-endpoint {
    cursor: default;
}

.preview .jtk-endpoint svg {
    display: none;
}

.preview .list-campaign-event .campaign-event-name {
    line-height: 14px;
    overflow: visible;
}

#preview-container {
    width: 100%;
    height: 500px;
    overflow: auto;
}

.campaign-event-logic {
    text-transform: uppercase;
    font-size: 10px;
    line-height: 10px;
}

.list-campaign-decision .campaign-event-logic {
    color: #00b49d;
}

.list-campaign-condition .campaign-event-logic {
    color: #ffb79f;
}

.list-campaign-action .campaign-event-logic {
    color: #9babeb;
}

#EventJumpOverlay {
  display: none;
  background: rgba(0, 0, 0, 0.5);
  width: 10000px;
  height: 10000px;
  z-index: 2000;
  position: absolute;
  top: 0;
  left: 0;
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
        return "@bundles/CampaignBundle/Assets/css/campaign.css";
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
        return new Source("", "@bundles/CampaignBundle/Assets/css/campaign.css", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Assets/css/campaign.css");
    }
}