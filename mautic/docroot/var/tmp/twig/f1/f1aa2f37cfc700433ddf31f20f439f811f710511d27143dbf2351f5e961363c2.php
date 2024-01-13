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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/code_view.less */
class __TwigTemplate_86f3fa06c19ef803054a101ccd49978e4240c8617f18822b647f91193da817b8 extends Template
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
textarea.fr-code {
  display: none;
  width: 100%;
  resize: none;
  -moz-resize: none;
  -webkit-resize: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
  padding: 10px;
  margin: 0px;
  font-family: \"Courier New\", monospace;
  font-size: 14px;
  background: #ffffff;
  color: #000000;
  outline: none;
}
.fr-box.fr-rtl textarea.fr-code {
  direction: rtl;
}
.fr-box .CodeMirror {
  display: none;
}
.fr-box.fr-code-view textarea.fr-code {
  display: block;
}
.fr-box.fr-code-view.fr-inline {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-code-view .fr-element,
.fr-box.fr-code-view .fr-placeholder,
.fr-box.fr-code-view .fr-iframe {
  display: none;
}
.fr-box.fr-code-view .CodeMirror {
  display: block;
}
.fr-box.fr-inline.fr-code-view .fr-command.fr-btn.html-switch {
  display: block;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  display: none;
  background: #ffffff;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  padding: 12px 12px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch i {
  font-size: 14px;
  width: 14px;
  text-align: center;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch.fr-desktop:hover {
  background: #ebebeb;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/code_view.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/code_view.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/code_view.less");
    }
}
