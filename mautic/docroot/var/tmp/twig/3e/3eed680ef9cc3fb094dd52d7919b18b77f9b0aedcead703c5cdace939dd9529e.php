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

/* @bundles/AssetBundle/Assets/css/asset.css */
class __TwigTemplate_585acd2a36dbedd389678bde7d0776e2c5d039c1dcc2a7c59f4d6311ba5475f5 extends Template
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
        echo ".thumbnail-preview img {
\theight: 100px;
}
.modal-body-content iframe, .preview-detail iframe {
\theight: 400px;
}
.form-group.preview img {
  max-height: 260px;
}

@-webkit-keyframes passing-through { 0% { opacity: 0; -webkit-transform: translateY(40px); -moz-transform: translateY(40px); -ms-transform: translateY(40px); -o-transform: translateY(40px); transform: translateY(40px); }
  30%, 70% { opacity: 1; -webkit-transform: translateY(0px); -moz-transform: translateY(0px); -ms-transform: translateY(0px); -o-transform: translateY(0px); transform: translateY(0px); }
  100% { opacity: 0; -webkit-transform: translateY(-40px); -moz-transform: translateY(-40px); -ms-transform: translateY(-40px); -o-transform: translateY(-40px); transform: translateY(-40px); } }
@-moz-keyframes passing-through { 0% { opacity: 0; -webkit-transform: translateY(40px); -moz-transform: translateY(40px); -ms-transform: translateY(40px); -o-transform: translateY(40px); transform: translateY(40px); }
  30%, 70% { opacity: 1; -webkit-transform: translateY(0px); -moz-transform: translateY(0px); -ms-transform: translateY(0px); -o-transform: translateY(0px); transform: translateY(0px); }
  100% { opacity: 0; -webkit-transform: translateY(-40px); -moz-transform: translateY(-40px); -ms-transform: translateY(-40px); -o-transform: translateY(-40px); transform: translateY(-40px); } }
@keyframes passing-through { 0% { opacity: 0; -webkit-transform: translateY(40px); -moz-transform: translateY(40px); -ms-transform: translateY(40px); -o-transform: translateY(40px); transform: translateY(40px); }
  30%, 70% { opacity: 1; -webkit-transform: translateY(0px); -moz-transform: translateY(0px); -ms-transform: translateY(0px); -o-transform: translateY(0px); transform: translateY(0px); }
  100% { opacity: 0; -webkit-transform: translateY(-40px); -moz-transform: translateY(-40px); -ms-transform: translateY(-40px); -o-transform: translateY(-40px); transform: translateY(-40px); } }
@-webkit-keyframes slide-in { 0% { opacity: 0; -webkit-transform: translateY(40px); -moz-transform: translateY(40px); -ms-transform: translateY(40px); -o-transform: translateY(40px); transform: translateY(40px); }
  30% { opacity: 1; -webkit-transform: translateY(0px); -moz-transform: translateY(0px); -ms-transform: translateY(0px); -o-transform: translateY(0px); transform: translateY(0px); } }
@-moz-keyframes slide-in { 0% { opacity: 0; -webkit-transform: translateY(40px); -moz-transform: translateY(40px); -ms-transform: translateY(40px); -o-transform: translateY(40px); transform: translateY(40px); }
  30% { opacity: 1; -webkit-transform: translateY(0px); -moz-transform: translateY(0px); -ms-transform: translateY(0px); -o-transform: translateY(0px); transform: translateY(0px); } }
@keyframes slide-in { 0% { opacity: 0; -webkit-transform: translateY(40px); -moz-transform: translateY(40px); -ms-transform: translateY(40px); -o-transform: translateY(40px); transform: translateY(40px); }
  30% { opacity: 1; -webkit-transform: translateY(0px); -moz-transform: translateY(0px); -ms-transform: translateY(0px); -o-transform: translateY(0px); transform: translateY(0px); } }
@-webkit-keyframes pulse { 0% { -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); }
  10% { -webkit-transform: scale(1.1); -moz-transform: scale(1.1); -ms-transform: scale(1.1); -o-transform: scale(1.1); transform: scale(1.1); }
  20% { -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); } }
@-moz-keyframes pulse { 0% { -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); }
  10% { -webkit-transform: scale(1.1); -moz-transform: scale(1.1); -ms-transform: scale(1.1); -o-transform: scale(1.1); transform: scale(1.1); }
  20% { -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); } }
@keyframes pulse { 0% { -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); }
  10% { -webkit-transform: scale(1.1); -moz-transform: scale(1.1); -ms-transform: scale(1.1); -o-transform: scale(1.1); transform: scale(1.1); }
  20% { -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); } }
.mdropzone, .mdropzone * { box-sizing: border-box; }

.mdropzone { min-height: 150px; border: 2px solid rgba(0, 0, 0, 0.3); background: white; padding: 30px 30px; }
.has-error .mdropzone {border: 2px solid #a94442;}
.is-success .mdropzone {border: 2px solid #00a08a;}
.mdropzone.dz-clickable { cursor: pointer; }
.mdropzone.dz-clickable * { cursor: default; }
.mdropzone.dz-clickable .dz-message, .mdropzone.dz-clickable .dz-message * { cursor: pointer; }
.mdropzone.dz-started .dz-message { display: none; }
.mdropzone.dz-drag-hover { border-style: solid; }
.mdropzone.dz-drag-hover .dz-message { opacity: 0.5; }
.mdropzone .dz-message { text-align: center; margin: 2em 0; }
.mdropzone .dz-preview { position: relative; display: inline-block; vertical-align: top; margin: 16px; min-height: 100px; }
.mdropzone .dz-preview:hover { z-index: 1000; }
.mdropzone .dz-preview:hover .dz-details { opacity: 1; }
.mdropzone .dz-preview.dz-file-preview .dz-image { border-radius: 20px; background: #999; background: linear-gradient(to bottom, #eee, #ddd); }
.mdropzone .dz-preview.dz-file-preview .dz-details { opacity: 1; }
.mdropzone .dz-preview.dz-image-preview { background: white; }
.mdropzone .dz-preview.dz-image-preview .dz-details { -webkit-transition: opacity 0.2s linear; -moz-transition: opacity 0.2s linear; -ms-transition: opacity 0.2s linear; -o-transition: opacity 0.2s linear; transition: opacity 0.2s linear; }
.mdropzone .dz-preview .dz-remove { font-size: 14px; text-align: center; display: block; cursor: pointer; border: none; }
.mdropzone .dz-preview .dz-remove:hover { text-decoration: underline; }
.mdropzone .dz-preview:hover .dz-details { opacity: 1; }
.mdropzone .dz-preview .dz-details { z-index: 20; position: absolute; top: 0; left: 0; opacity: 0; font-size: 13px; min-width: 100%; max-width: 100%; padding: 2em 1em; text-align: center; color: rgba(0, 0, 0, 0.9); line-height: 150%; }
.mdropzone .dz-preview .dz-details .dz-size { margin-bottom: 1em; font-size: 16px; }
.mdropzone .dz-preview .dz-details .dz-filename { white-space: nowrap; }
.mdropzone .dz-preview .dz-details .dz-filename:hover span { border: 1px solid rgba(200, 200, 200, 0.8); background-color: rgba(255, 255, 255, 0.8); }
.mdropzone .dz-preview .dz-details .dz-filename:not(:hover) { overflow: hidden; text-overflow: ellipsis; }
.mdropzone .dz-preview .dz-details .dz-filename:not(:hover) span { border: 1px solid transparent; }
.mdropzone .dz-preview .dz-details .dz-filename span, .mdropzone .dz-preview .dz-details .dz-size span { background-color: rgba(255, 255, 255, 0.4); padding: 0 0.4em; border-radius: 3px; }
.mdropzone .dz-preview:hover .dz-image img { -webkit-transform: scale(1.05, 1.05); -moz-transform: scale(1.05, 1.05); -ms-transform: scale(1.05, 1.05); -o-transform: scale(1.05, 1.05); transform: scale(1.05, 1.05); -webkit-filter: blur(8px); filter: blur(8px); }
.mdropzone .dz-preview .dz-image { border-radius: 20px; overflow: hidden; width: 120px; height: 120px; position: relative; display: block; z-index: 10; }
.mdropzone .dz-preview .dz-image img { display: block; }
.mdropzone .dz-preview.dz-success .dz-success-mark { -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); }
.mdropzone .dz-preview.dz-error .dz-error-mark { opacity: 1; -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); }
.mdropzone .dz-preview .dz-success-mark, .mdropzone .dz-preview .dz-error-mark { pointer-events: none; opacity: 0; z-index: 500; position: absolute; display: block; top: 50%; left: 50%; margin-left: -27px; margin-top: -27px; }
.mdropzone .dz-preview .dz-success-mark svg, .mdropzone .dz-preview .dz-error-mark svg { display: block; width: 54px; height: 54px; }
.mdropzone .dz-preview.dz-processing .dz-progress { opacity: 1; -webkit-transition: all 0.2s linear; -moz-transition: all 0.2s linear; -ms-transition: all 0.2s linear; -o-transition: all 0.2s linear; transition: all 0.2s linear; }
.mdropzone .dz-preview.dz-complete .dz-progress { opacity: 0; -webkit-transition: opacity 0.4s ease-in; -moz-transition: opacity 0.4s ease-in; -ms-transition: opacity 0.4s ease-in; -o-transition: opacity 0.4s ease-in; transition: opacity 0.4s ease-in; }
.mdropzone .dz-preview:not(.dz-processing) .dz-progress { -webkit-animation: pulse 6s ease infinite; -moz-animation: pulse 6s ease infinite; -ms-animation: pulse 6s ease infinite; -o-animation: pulse 6s ease infinite; animation: pulse 6s ease infinite; }
.mdropzone .dz-preview .dz-progress { opacity: 1; z-index: 1000; pointer-events: none; position: absolute; height: 16px; left: 50%; top: 50%; margin-top: -8px; width: 80px; margin-left: -40px; background: rgba(255, 255, 255, 0.9); -webkit-transform: scale(1); border-radius: 8px; overflow: hidden; }
.mdropzone .dz-preview .dz-progress .dz-upload { background: #333; background: linear-gradient(to bottom, #666, #444); position: absolute; top: 0; left: 0; bottom: 0; width: 0; -webkit-transition: width 300ms ease-in-out; -moz-transition: width 300ms ease-in-out; -ms-transition: width 300ms ease-in-out; -o-transition: width 300ms ease-in-out; transition: width 300ms ease-in-out; }
.mdropzone .dz-preview.dz-error .dz-error-message { display: block; }
.mdropzone .dz-preview.dz-error:hover .dz-error-message { opacity: 1; pointer-events: auto; }
.mdropzone .dz-preview .dz-error-message { pointer-events: none; z-index: 1000; position: absolute; display: block; display: none; opacity: 0; -webkit-transition: opacity 0.3s ease; -moz-transition: opacity 0.3s ease; -ms-transition: opacity 0.3s ease; -o-transition: opacity 0.3s ease; transition: opacity 0.3s ease; border-radius: 8px; font-size: 13px; top: 130px; left: -10px; width: 140px; background: #be2626; background: linear-gradient(to bottom, #be2626, #a92222); padding: 0.5em 1.2em; color: white; }
.mdropzone .dz-preview .dz-error-message:after { content: ''; position: absolute; top: -6px; left: 64px; width: 0; height: 0; border-left: 6px solid transparent; border-right: 6px solid transparent; border-bottom: 6px solid #a94442; }

/*
 * The MIT License
 * Copyright (c) 2012 Matias Meno <m@tias.me>
 */
.mdropzone, .mdropzone * {
  box-sizing: border-box; }

.mdropzone {
  position: relative;
}
.mdropzone .dz-preview {
  position: relative;
  display: inline-block;
  width: 120px;
  margin: 0.5em;
}
.mdropzone .dz-preview .dz-progress {
  display: block;
  height: 15px;
  border: 1px solid #aaa;
}
.mdropzone .dz-preview .dz-progress .dz-upload {
  display: block;
  height: 100%;
  width: 0;
  background: green;
}
.mdropzone .dz-preview .dz-error-message {
  color: #fff;
  display: none;
}
.mdropzone .dz-preview.dz-error .dz-error-message, .mdropzone .dz-preview.dz-error .dz-error-mark {
  display: block;
}
.mdropzone .dz-preview.dz-success .dz-success-mark {
  display: block;
}
.mdropzone .dz-preview .dz-error-mark, .mdropzone .dz-preview .dz-success-mark {
  position: absolute;
  display: none;
  left: 30px;
  top: 30px;
  width: 54px;
  height: 58px;
  left: 50%;
  margin-left: -27px;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Assets/css/asset.css";
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
        return new Source("", "@bundles/AssetBundle/Assets/css/asset.css", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Assets/css/asset.css");
    }
}