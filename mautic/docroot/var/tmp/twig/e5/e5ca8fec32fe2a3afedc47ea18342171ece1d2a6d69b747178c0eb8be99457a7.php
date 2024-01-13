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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/theme.css */
class __TwigTemplate_bf6df07cc21d7f7808e1ead950d7a004ff44e117871ff41756d08d13b32e90f4 extends Template
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
        echo "/**
 * MacOS X like theme for elFinder.
 * Required jquery ui \"smoothness\" theme.
 *
 * @author Dmitry (dio) Levashov
 **/

/* scrollbar for Chrome and Safari */
.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-track {
    border-radius: 10px;
    box-shadow: inset 0 0 6px rgba(0, 0, 0, .1);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 50, 0.08);
    border-radius: 10px;
    box-shadow:0 0 0 1px rgba(255, 255, 255, .3);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-thumb:hover {
    background-color: rgba(0, 0, 50, 0.16);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-thumb:active {
    background-color: rgba(0, 0, 50, 0.24);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-corner {
    background-color: transparent;
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button {
    background-color: transparent;
    width: 10px;
    height: 10px;
    border: 5px solid transparent;
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button:hover {
    border: 5px solid rgba(0, 0, 50, 0.08);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button:active {
    border: 5px solid rgba(0, 0, 50, 0.5);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button:single-button:vertical:decrement {
    border-bottom: 8px solid rgba(0, 0, 50, 0.3);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button:single-button:vertical:increment {
    border-top: 8px solid rgba(0, 0, 50, 0.3);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button:single-button:horizontal:decrement {
    border-right: 8px solid rgba(0, 0, 50, 0.3);
}

.elfinder:not(.elfinder-mobile) *::-webkit-scrollbar-button:single-button:horizontal:increment {
    border-left: 8px solid rgba(0, 0, 50, 0.3);
}

/* input textarea */
.elfinder input,
.elfinder textarea {
    color: #000;
    background-color: #FFF;
    border-color: #ccc;
}

/* dialogs */
.std42-dialog, .std42-dialog .ui-widget-content {
    background-color: #ededed;
    background-image: none;
    background-clip: content-box;
}

.std42-dialog.elfinder-bg-translucent {
    background-color: #fff;
    background-color: rgba(255, 255, 255, 0.9);
}

.std42-dialog.elfinder-bg-translucent .ui-widget-content {
    background-color: transparent;
}

.elfinder-quicklook-title {
    color: #fff;
}

.elfinder-quicklook-titlebar-icon {
    background-color: transparent;
    background-image: none;
}

.elfinder-quicklook-titlebar-icon .ui-icon {
    background-color: #d4d4d4;
    border-color: #8a8a8a;
}

.elfinder-quicklook-info-progress {
    background-color: gray;
}

.std42-dialog .ui-dialog-titlebar .ui-dialog-titlebar-close:hover .ui-icon,
.elfinder-mobile .std42-dialog .ui-dialog-titlebar .ui-dialog-titlebar-close .ui-icon,
.elfinder-quicklook-titlebar-icon .ui-icon.elfinder-icon-close:hover,
.elfinder-mobile .elfinder-quicklook-titlebar-icon .ui-icon.elfinder-icon-close {
    background-color: #ff6252;
    border-color: #e5695d;
    background-image: url(\"../img/ui-icons_ffffff_256x240.png\");
}

.std42-dialog .ui-dialog-titlebar .elfinder-titlebar-minimize:hover .ui-icon,
.elfinder-mobile .std42-dialog .ui-dialog-titlebar .elfinder-titlebar-minimize .ui-icon,
.elfinder-quicklook-titlebar-icon .ui-icon.elfinder-icon-minimize:hover,
.elfinder-mobile .elfinder-quicklook-titlebar-icon .ui-icon.elfinder-icon-minimize {
    background-color: #ffbc00;
    border-color: #e3a40b;
    background-image: url(\"../img/ui-icons_ffffff_256x240.png\");
}

.std42-dialog .ui-dialog-titlebar .elfinder-titlebar-full:hover .ui-icon,
.elfinder-mobile .std42-dialog .ui-dialog-titlebar .elfinder-titlebar-full .ui-icon,
.elfinder-quicklook-titlebar-icon .ui-icon.elfinder-icon-full:hover,
.elfinder-mobile .elfinder-quicklook-titlebar-icon .ui-icon.elfinder-icon-full {
    background-color: #26c82f;
    border-color: #13ae10;
    background-image: url(\"../img/ui-icons_ffffff_256x240.png\");
}

.std42-dialog .elfinder-help,
.std42-dialog .elfinder-help .ui-widget-content {
    background: #fff;
}

/* navbar */
.elfinder .elfinder-navbar {
    background: #dde4eb;
}

.elfinder-navbar .ui-state-hover {
    color: #000;
    background-color: #edf1f4;
    border-color: #bdcbd8;
}

.elfinder-navbar .ui-droppable-hover {
    background: transparent;
}

.elfinder-navbar .ui-state-active {
    background: #3875d7;
    border-color: #3875d7;
    color: #fff;
}

.elfinder-navbar .elfinder-droppable-active {
    background: #A7C6E5;
}

/* disabled elfinder */
.elfinder-disabled .elfinder-navbar .ui-state-active {
    background: #dadada;
    border-color: #aaa;
    color: #777;
}

/* workzone */
.elfinder-workzone {
    background: #fff;
}

/* current directory */
/* Is in trash */
.elfinder-cwd-wrapper.elfinder-cwd-wrapper-trash {
    background-color: #f0f0f0;
}

/* selected file in \"icons\" view */
.elfinder-cwd-view-icons .elfinder-cwd-file .ui-state-hover,
.elfinder-cwd-view-icons .elfinder-cwd-file .ui-state-active {
    background: #ccc;
}

/* type badge in \"icons\" view */
/* default */
.elfinder-cwd-icon:before {
    color: white;
    background-color: #798da7;
}

/* type */
.elfinder-cwd-icon-text:before {
    background-color: #6f99e6
}

.elfinder-cwd-icon-image:before {
    background-color: #2ea26c
}

.elfinder-cwd-icon-audio:before {
    background-color: #7bad2a
}

.elfinder-cwd-icon-video:before {
    background-color: #322aad
}

/* subtype */
.elfinder-cwd-icon-x-empty:before,
.elfinder-cwd-icon-plain:before {
    background-color: #719be6
}

.elfinder-cwd-icon-rtf:before,
.elfinder-cwd-icon-rtfd:before {
    background-color: #83aae7
}

.elfinder-cwd-icon-pdf:before {
    background-color: #db7424
}

.elfinder-cwd-icon-html:before {
    background-color: #82bc12
}

.elfinder-cwd-icon-xml:before,
.elfinder-cwd-icon-css:before {
    background-color: #7c7c7c
}

.elfinder-cwd-icon-x-shockwave-flash:before {
    background-color: #f43a36
}

.elfinder-cwd-icon-zip:before,
.elfinder-cwd-icon-x-zip:before,
.elfinder-cwd-icon-x-xz:before,
.elfinder-cwd-icon-x-7z-compressed:before,
.elfinder-cwd-icon-x-gzip:before,
.elfinder-cwd-icon-x-tar:before,
.elfinder-cwd-icon-x-bzip:before,
.elfinder-cwd-icon-x-bzip2:before,
.elfinder-cwd-icon-x-rar:before,
.elfinder-cwd-icon-x-rar-compressed:before {
    background-color: #97638e
}

.elfinder-cwd-icon-javascript:before,
.elfinder-cwd-icon-x-javascript:before,
.elfinder-cwd-icon-x-perl:before,
.elfinder-cwd-icon-x-python:before,
.elfinder-cwd-icon-x-ruby:before,
.elfinder-cwd-icon-x-sh:before,
.elfinder-cwd-icon-x-shellscript:before,
.elfinder-cwd-icon-x-c:before,
.elfinder-cwd-icon-x-csrc:before,
.elfinder-cwd-icon-x-chdr:before,
.elfinder-cwd-icon-x-c--:before,
.elfinder-cwd-icon-x-c--src:before,
.elfinder-cwd-icon-x-c--hdr:before,
.elfinder-cwd-icon-x-java:before,
.elfinder-cwd-icon-x-java-source:before,
.elfinder-cwd-icon-x-php:before {
    background-color: #7c607c
}

.elfinder-cwd-icon-msword:before,
.elfinder-cwd-icon-vnd-ms-office:before,
.elfinder-cwd-icon-vnd-ms-word:before,
.elfinder-cwd-icon-vnd-ms-word-document-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-word-template-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-wordprocessingml-document:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-wordprocessingml-template:before {
    background-color: #2b569a
}

.elfinder-cwd-icon-ms-excel:before,
.elfinder-cwd-icon-vnd-ms-excel:before,
.elfinder-cwd-icon-vnd-ms-excel-addin-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-excel-sheet-binary-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-excel-sheet-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-excel-template-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-spreadsheetml-sheet:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-spreadsheetml-template:before {
    background-color: #107b10
}

.elfinder-cwd-icon-vnd-ms-powerpoint:before,
.elfinder-cwd-icon-vnd-ms-powerpoint-addin-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-powerpoint-presentation-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-powerpoint-slide-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-powerpoint-slideshow-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-ms-powerpoint-template-macroEnabled-12:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-presentation:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-slide:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-slideshow:before,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-template:before {
    background-color: #d24625
}

.elfinder-cwd-icon-vnd-oasis-opendocument-chart:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-database:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-formula:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-graphics:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-graphics-template:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-image:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-presentation:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-presentation-template:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-spreadsheet:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-spreadsheet-template:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-text:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-master:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-template:before,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-web:before,
.elfinder-cwd-icon-vnd-openofficeorg-extension:before {
    background-color: #00a500
}

.elfinder-cwd-icon-postscript:before {
    background-color: #ff5722
}

/* list view*/
.elfinder-cwd table thead td.ui-state-hover {
    background: #ddd;
}

.elfinder-cwd table tr:nth-child(odd) {
    background-color: #edf3fe;
}

.elfinder-cwd table tr {
    border: 1px solid transparent;
    border-top: 1px solid #fff;
}

.elfinder-cwd .elfinder-droppable-active td {
    background: #A7C6E5;
}

.elfinder-cwd.elfinder-table-header-sticky table {
    border-top-color: #fff;
}

.elfinder-droppable-active .elfinder-cwd.elfinder-table-header-sticky table {
    border-top-color: #A7C6E5;
}

/* common selected background/color */
.elfinder-cwd-view-icons .elfinder-cwd-file .elfinder-cwd-filename.ui-state-hover,
.elfinder-cwd table td.ui-state-hover,
.elfinder-button-menu .ui-state-hover {
    background: #3875d7;
    color: #fff;
}

/* disabled elfinder */
.elfinder-disabled .elfinder-cwd-view-icons .elfinder-cwd-file .elfinder-cwd-filename.ui-state-hover,
.elfinder-disabled .elfinder-cwd table td.ui-state-hover {
    background: #dadada;
}

/* statusbar */
.elfinder .elfinder-statusbar {
    color: #555;
}

.elfinder .elfinder-statusbar a {
    text-decoration: none;
    color: #555;
}

/* contextmenu */
.elfinder-contextmenu .ui-state-active {
    background: #6293df;
    color: #fff;
}

.elfinder-contextmenu .ui-state-hover {
    background: #3875d7;
    color: #fff;
}

.elfinder-contextmenu .ui-state-hover .elfinder-contextmenu-arrow {
    background-image: url('../img/arrows-active.png');
}

/* dialog */
.elfinder .ui-dialog input:text.ui-state-hover,
.elfinder .ui-dialog textarea.ui-state-hover {
    background-image: none;
    background-color: inherit;
}

.elfinder-notify-cancel .elfinder-notify-button {
    background-color: #707070;
    background-image: url(\"../img/ui-icons_ffffff_256x240.png\");
}

.elfinder-notify-cancel .elfinder-notify-button.ui-state-hover {
    background-color: #aaa;
}

/* edit dialog */
.elfinder-dialog-edit select.elfinder-edit-changed {
    border-bottom: 2px solid #13ae10;
}

/* tooltip */
.ui-widget-content.elfinder-ui-tooltip {
    background-color: #fff;
}

.elfinder-ui-tooltip.ui-widget-shadow,
.elfinder .elfinder-ui-tooltip.ui-widget-shadow {
    box-shadow: 2px 6px 4px -4px #cecdcd;
}

/* progressbar */
.elfinder-ui-progressbar {
    background-color: #419bf3;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/theme.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/theme.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/theme.css");
    }
}
