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

/* @bundles/CoreBundle/Assets/css/app/less/custom.less */
class __TwigTemplate_a0ed78a164d6c2ccd10cea94fa3ea2f28ed3d0b22043e72e0d857657b24ad4a8 extends Template
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
        echo "@import \"../../libraries/bootstrap/less/variables\";

@media (min-width: @screen-md-min) {
  .modal-xl { width: 1140px; }
}

// vertical tabs
.bg-auto {
  .tabs-left>li.active>a,
  .tabs-left>li.active>a:hover,
  .tabs-left>li.active>a:focus {
    border-left-width: 0;
  }

  .tabs-left, .tabs-right {
    -webkit-box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);

    li:last-child {
      margin-bottom: -2px;
    }
  }

  .tabs-right>li.active>a,
  .tabs-right>li.active>a:hover,
  .tabs-right>li.active>a:focus {
    border-right-width: 0;
  }
}

.tab-button {
  border-bottom: 1px solid #ebedf0 !important;
}

.modal-body.np {
  .tabs-horizontal {
    margin-top: -1px;
  }
  .tabs-left, .tabs-right {
    li>a {
      border-radius: 0;
    }
  }
}

//confirmation modal

.confirmation-modal .modal-content {
  width: 400px;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10% auto;
  padding: 8px;
  border-radius: 8px;
  background: #fff;
  text-align: center;
}

.content-overlay {
  position: absolute;
  background: #fbfbfb;
  z-index: 50;
  width: 100%;
  height: 100%;
  padding-left: 15px;
  font-weight: bold;
}

.stat-boxes {
  .panel {
    height: 164px;
  }
}

.has-click-event {
  cursor: pointer;
}

//Mautibot
.mautibot-error {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
}

label.required:after {
  content: \" *\";
  color: @brand-danger;
}

//Nav header
#app-header .nav > li > a {
  padding: 10px 12px;
}

//Search
.search-container {
  position: relative;
  line-height: 60px;
  .transition(all 0.3s ease);

  .search {
    border: 1px solid #fff;
    position: absolute;
    left: 0px;
    width: 24px;
    height: 34px;
    padding: 0 0 0 24px;
    margin: 12px 0 0 5px;
    z-index: 1;
    .transition(all 0.5s ease);
  }
  a.search-button {
    color: rgba(0, 0, 0, 0.6);
    position: absolute;
    left: 12px;
    z-index: 5;
  }

  &.active {
    .search {
      width: 225px;
      border: 1px solid @input-border;
    }
    i {
      color: @brand-primary;
    }
  }
}
.col-actions {
  width: 100px;
}

/* Shuffle */
.shuffle-item .card{
  height: 150px;
}

.equal, .equal > div[class*='col-'] {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex:1 1 auto;
}

.mautic-pleasewait {
  width: 200px;
  height: 50px;
  position: fixed;
  left: 50%;
  top: 10px;
  margin: 0 0 0 -100px;
  text-align: center;
  font-weight: bold;
  font-size: 2em;
  color: #eee;
  z-index: 9999;
}

body.noscroll {
  overflow: hidden;
}

.form-select-modal .panel-body {
  min-height: 150px;
}

@media (max-width: @screen-sm-min) {
  .form-select-modal .panel-body {
    min-height: 0;
  }
}

.table .input-group-sm {
  & > .input-group-addon {
    font-size: 10px;
    line-height: 1em;
  }

  .dropdown-toggle {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
}

.input-group {
  .input-group-btn {
    button {
      height: 32px;
    }
  }
}

.theme-selected {
  border: 1px solid #4e5e9e;
  -webkit-box-shadow: 0px 0px 40px #f3f3f3;
  box-shadow: 0px 0px 40px #f3f3f3;
}

#app-content.content-only {
  .toolbar-form-buttons.pull-right {
    padding-right:20px;
  }
}

.fr-toolbar {
  border-top: 2px solid #4e5d9d;
}
.modal-body-content iframe.fr-iframe {
  min-height:300px;
}

.CodeMirror {
  border: 1px solid #d5d5d5;
  border-radius: 3px;
}

table.table > tbody > tr > td.long-text {
  max-width: 500px;
  min-width: 300px;
  -ms-word-break: break-all;
  word-break: break-word;
  overflow-wrap: break-word;
  word-wrap: break-word;
  white-space: normal;
}

.dynamicContentFilterContainer .btn-primary:hover {
  color:#5d6c7c;
}

#dynamicContentContainer .remove-item {
  display:block;
}
#dynamicContentContainer > .tab-pane > .panel > ul {
  white-space: nowrap;
  overflow:auto;
  overflow-y:hidden;
  max-width:100%;
}
#dynamicContentContainer > .tab-pane > .panel > ul li {
  display:inline-block;
  vertical-align: top;
  float:none;
}

div[data-filter-container] .in-group {
  margin-left:20px;
}

div[data-filter-container] .panel {
  margin-bottom:0;
  margin-top:20px;
}

div[data-filter-container] .panel.in-group {
  margin-top:0;
  border-top:0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

td.col-id, th.col-id {
  width: 75px;
}

.badge-wrapper {
  float: right;
  vertical-align: middle;
  margin-right: -10px;
}
span.slot-caption {
  font-size: 12px;
}
.imagecard-caption, figcaption {
  font-size: 16px;
}
.imagecard {
  background-color: #ddd !important;
}
.imagecard .imagecard-caption {
  background-color: #bbb !important;
}

ul.media-list.media-list-feed div.media-body
{
  width:auto;
}

ul.media-list.media-list-feed div.media-object
{
  padding: 0px;
  margin: 10px;
}
.ico-email:before {
  font-family: \"FontAwesome\";
  content: \"\\f1fa\";
}
.ico-sms:before {
  font-family: \"FontAwesome\";
  content: \"\\f27b\";
}

#globalSearchDropdown .list-group-item>a{
  padding-top: 10px;
}

.characters-count {
  z-index: 100;
  top: 20px;
  float: right;
  position: relative;
  right: 10px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/custom.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/custom.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/custom.less");
    }
}
