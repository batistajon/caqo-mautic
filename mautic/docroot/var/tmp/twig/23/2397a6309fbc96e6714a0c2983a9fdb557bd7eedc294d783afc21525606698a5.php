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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/colors.less */
class __TwigTemplate_7a30e1746d580eb0b30ed1349f6e498c8f22dd49e92022d1b484d39d83b7a4a2 extends Template
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
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

.clearfix::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-popup .fr-colors-tabs {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  margin-bottom: 5px;
  line-height: 16px;
  margin-left: -2px;
  margin-right: -2px;
}
.fr-popup .fr-colors-tabs .fr-colors-tab {
  display: inline-block;
  width: 50%;
  cursor: pointer;
  text-align: center;
  color: #222222;
  font-size: 13px;
  padding: 8px 0;
  position: relative;
}
.fr-popup .fr-colors-tabs .fr-colors-tab:hover,
.fr-popup .fr-colors-tabs .fr-colors-tab:focus {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab[data-param1=\"background\"]::after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #1e88e5;
  content: '';
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
}
.fr-popup .fr-separator + .fr-colors-tabs {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-left: 2px;
  margin-right: 2px;
}
.fr-popup .fr-color-set {
  line-height: 0;
  display: none;
}
.fr-popup .fr-color-set.fr-selected-set {
  display: block;
}
.fr-popup .fr-color-set > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-color-set > span > i {
  text-align: center;
  line-height: 32px;
  height: 32px;
  width: 32px;
  font-size: 13px;
  position: absolute;
  bottom: 0;
  cursor: default;
  left: 0;
}
.fr-popup .fr-color-set > span .fr-selected-color {
  color: #ffffff;
  font-family: FontAwesome;
  font-size: 13px;
  font-weight: 400;
  line-height: 32px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  text-align: center;
  cursor: default;
}
.fr-popup .fr-color-set > span:hover,
.fr-popup .fr-color-set > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-rtl .fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/colors.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/colors.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/colors.less");
    }
}
