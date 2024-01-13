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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/elfinder.full.css */
class __TwigTemplate_b003a3b91cebc645815633d85889ae191ad5b2d161d77bb06eabdf07f25c1526 extends Template
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
 * elFinder - file manager for web
 * Version 2.1.57 (2020-06-05)
 * http://elfinder.org
 * 
 * Copyright 2009-2020, Studio 42
 * Licensed under a 3-clauses BSD license
 */

/* File: /css/commands.css */
/******************************************************************/
/*                          COMMANDS STYLES                       */
/******************************************************************/

/********************** COMMAND \"RESIZE\" ****************************/
.elfinder-resize-container {
    margin-top: .3em;
}

.elfinder-resize-type {
    float: left;
    margin-bottom: .4em;
}

.elfinder-resize-control {
    float: left;
}

.elfinder-resize-control input[type=number] {
    border: 1px solid #aaa;
    text-align: right;
    width: 4.5em;
}

.elfinder-mobile .elfinder-resize-control input[type=number] {
    width: 3.5em;
}

.elfinder-resize-control input.elfinder-resize-bg {
    text-align: center;
    width: 5em;
    direction: ltr;
}

.elfinder-dialog-resize .elfinder-resize-control-panel {
    margin-top: 10px;
}

.elfinder-dialog-resize .elfinder-resize-imgrotate,
.elfinder-dialog-resize .elfinder-resize-pallet {
    cursor: pointer;
}

.elfinder-dialog-resize .elfinder-resize-picking {
    cursor: crosshair;
}

.elfinder-dialog-resize .elfinder-resize-grid8 + button {
    padding-top: 2px;
    padding-bottom: 2px;
}

.elfinder-resize-preview {
    width: 400px;
    height: 400px;
    padding: 10px;
    background: #fff;
    border: 1px solid #aaa;
    float: right;
    position: relative;
    overflow: hidden;
    text-align: left;
    direction: ltr;
}

.elfinder-resize-handle {
    position: relative;
}

.elfinder-resize-handle-hline,
.elfinder-resize-handle-vline {
    position: absolute;
    background-image: url(\"../img/crop.gif\");
}

.elfinder-resize-handle-hline {
    width: 100%;
    height: 1px !important;
    background-repeat: repeat-x;
}

.elfinder-resize-handle-vline {
    width: 1px !important;
    height: 100%;
    background-repeat: repeat-y;
}

.elfinder-resize-handle-hline-top {
    top: 0;
    left: 0;
}

.elfinder-resize-handle-hline-bottom {
    bottom: 0;
    left: 0;
}

.elfinder-resize-handle-vline-left {
    top: 0;
    left: 0;
}

.elfinder-resize-handle-vline-right {
    top: 0;
    right: 0;
}

.elfinder-resize-handle-point {
    position: absolute;
    width: 8px;
    height: 8px;
    border: 1px solid #777;
    background: transparent;
}

.elfinder-resize-handle-point-n {
    top: 0;
    left: 50%;
    margin-top: -5px;
    margin-left: -5px;
}

.elfinder-resize-handle-point-ne {
    top: 0;
    right: 0;
    margin-top: -5px;
    margin-right: -5px;
}

.elfinder-resize-handle-point-e {
    top: 50%;
    right: 0;
    margin-top: -5px;
    margin-right: -5px;
}

.elfinder-resize-handle-point-se {
    bottom: 0;
    right: 0;
    margin-bottom: -5px;
    margin-right: -5px;
}

.elfinder-resize-handle-point-s {
    bottom: 0;
    left: 50%;
    margin-bottom: -5px;
    margin-left: -5px;
}

.elfinder-resize-handle-point-sw {
    bottom: 0;
    left: 0;
    margin-bottom: -5px;
    margin-left: -5px;
}

.elfinder-resize-handle-point-w {
    top: 50%;
    left: 0;
    margin-top: -5px;
    margin-left: -5px;
}

.elfinder-resize-handle-point-nw {
    top: 0;
    left: 0;
    margin-top: -5px;
    margin-left: -5px;
}

.elfinder-dialog.elfinder-dialog-resize .ui-resizable-e {
    width: 10px;
    height: 100%;
}

.elfinder-dialog.elfinder-dialog-resize .ui-resizable-s {
    width: 100%;
    height: 10px;
}

.elfinder-resize-loading {
    position: absolute;
    width: 200px;
    height: 30px;
    top: 50%;
    margin-top: -25px;
    left: 50%;
    margin-left: -100px;
    text-align: center;
    background: url(../img/progress.gif) center bottom repeat-x;
}

.elfinder-resize-row {
    margin-bottom: 9px;
    position: relative;
}

.elfinder-resize-label {
    float: left;
    width: 80px;
    padding-top: 3px;
}

.elfinder-resize-checkbox-label {
    border: 1px solid transparent;
}

.elfinder-dialog-resize .elfinder-resize-whctrls {
    margin: -20px 5px 0 5px;
}

.elfinder-ltr .elfinder-dialog-resize .elfinder-resize-whctrls {
    float: right;
}

.elfinder-rtl .elfinder-dialog-resize .elfinder-resize-whctrls {
    float: left;
}

.elfinder-dialog-resize .ui-resizable-e,
.elfinder-dialog-resize .ui-resizable-w {
    height: 100%;
    width: 10px;
}

.elfinder-dialog-resize .ui-resizable-s,
.elfinder-dialog-resize .ui-resizable-n {
    width: 100%;
    height: 10px;
}

.elfinder-dialog-resize .ui-resizable-e {
    margin-right: -7px;
}

.elfinder-dialog-resize .ui-resizable-w {
    margin-left: -7px;
}

.elfinder-dialog-resize .ui-resizable-s {
    margin-bottom: -7px;
}

.elfinder-dialog-resize .ui-resizable-n {
    margin-top: -7px;
}

.elfinder-dialog-resize .ui-resizable-se,
.elfinder-dialog-resize .ui-resizable-sw,
.elfinder-dialog-resize .ui-resizable-ne,
.elfinder-dialog-resize .ui-resizable-nw {
    width: 10px;
    height: 10px;
}

.elfinder-dialog-resize .ui-resizable-se {
    background: transparent;
    bottom: 0;
    right: 0;
    margin-right: -7px;
    margin-bottom: -7px;
}

.elfinder-dialog-resize .ui-resizable-sw {
    margin-left: -7px;
    margin-bottom: -7px;
}

.elfinder-dialog-resize .ui-resizable-ne {
    margin-right: -7px;
    margin-top: -7px;
}

.elfinder-dialog-resize .ui-resizable-nw {
    margin-left: -7px;
    margin-top: -7px;
}

.elfinder-touch .elfinder-dialog-resize .ui-resizable-s,
.elfinder-touch .elfinder-dialog-resize .ui-resizable-n {
    height: 20px;
}

.elfinder-touch .elfinder-dialog-resize .ui-resizable-e,
.elfinder-touch .elfinder-dialog-resize .ui-resizable-w {
    width: 20px;
}

.elfinder-touch .elfinder-dialog-resize .ui-resizable-se,
.elfinder-touch .elfinder-dialog-resize .ui-resizable-sw,
.elfinder-touch .elfinder-dialog-resize .ui-resizable-ne,
.elfinder-touch .elfinder-dialog-resize .ui-resizable-nw {
    width: 30px;
    height: 30px;
}

.elfinder-touch .elfinder-dialog-resize .elfinder-resize-preview .ui-resizable-se {
    width: 30px;
    height: 30px;
    margin: 0;
}

.elfinder-dialog-resize .ui-icon-grip-solid-vertical {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
    margin-right: -11px;
}

.elfinder-dialog-resize .ui-icon-grip-solid-horizontal {
    position: absolute;
    left: 50%;
    bottom: 0;
    margin-left: -8px;
    margin-bottom: -11px;;
}

.elfinder-dialog-resize .elfinder-resize-row .ui-buttonset {
    float: right;
}

.elfinder-dialog-resize .elfinder-resize-degree input,
.elfinder-dialog-resize input.elfinder-resize-quality {
    width: 3.5em;
}

.elfinder-mobile .elfinder-dialog-resize .elfinder-resize-degree input,
.elfinder-mobile .elfinder-dialog-resize input.elfinder-resize-quality {
    width: 2.5em;
}

.elfinder-dialog-resize .elfinder-resize-degree button.ui-button {
    padding: 6px 8px;
}

.elfinder-dialog-resize button.ui-button span {
    padding: 0;
}

.elfinder-dialog-resize .elfinder-resize-jpgsize {
    font-size: 90%;
}

.ui-widget-content .elfinder-resize-container .elfinder-resize-rotate-slider {
    width: 195px;
    margin: 10px 7px;
    background-color: #fafafa;
}

.elfinder-dialog-resize .elfinder-resize-type span.ui-checkboxradio-icon {
    display: none;
}

.elfinder-resize-preset-container {
    box-sizing: border-box;
    border-radius: 5px;
}

/********************** COMMAND \"EDIT\" ****************************/
/* edit text file textarea */
.elfinder-file-edit {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 2px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    resize: none;
}

.elfinder-touch .elfinder-file-edit {
    font-size: 16px;
}

/* edit area */
.elfinder-dialog-edit .ui-dialog-content.elfinder-edit-editor {
    background-color: #fff;
}

.elfinder-dialog-edit .ui-dialog-content.elfinder-edit-editor .elfinder-edit-imageeditor {
    width: 100%;
    height: 300px;
    max-height: 100%;
    text-align: center;
}

.elfinder-dialog-edit .ui-dialog-content.elfinder-edit-editor .elfinder-edit-imageeditor * {
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
}

.elfinder-edit-imageeditor .tui-image-editor-main-container .tui-image-editor-main {
    top: 0;
}

.elfinder-edit-imageeditor .tui-image-editor-main-container .tui-image-editor-header {
    display: none;
}

.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-crop .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-flip .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-rotate .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-draw .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-shape .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-icon .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-text .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-mask .tui-image-editor-wrap,
.elfinder-edit-imageeditor .tui-image-editor-main.tui-image-editor-menu-filter .tui-image-editor-wrap {
    height: calc(100% - 150px);
}

/* bottom margen for softkeyboard on fullscreen mode */
.elfinder-touch.elfinder-fullscreen-native textarea.elfinder-file-edit {
    padding-bottom: 20em;
    margin-bottom: -20em;
}

.elfinder-dialog-edit .ui-dialog-buttonpane .elfinder-dialog-confirm-encoding {
    font-size: 12px;
}

.ui-dialog-buttonpane .ui-dialog-buttonset.elfinder-edit-extras {
    margin: 0 1em 0 .2em;
    float: left;
}

.ui-dialog-buttonpane .ui-dialog-buttonset.elfinder-edit-extras-quality {
    padding-top: 6px;
}

.ui-dialog-buttonpane .ui-dialog-buttonset.elfinder-edit-extras select {
    font-size: 12px;
    margin-top: 8px;
}

.elfinder-dialog-edit .ui-dialog-buttonpane .ui-icon {
    cursor: pointer;
}

.elfinder-edit-spinner {
    position: absolute;
    top: 50%;
    text-align: center;
    width: 100%;
    font-size: 16pt;
}

.elfinder-dialog-edit .elfinder-edit-spinner .elfinder-spinner,
.elfinder-dialog-edit .elfinder-edit-spinner .elfinder-spinner-text {
    float: none;
}

.elfinder-dialog-edit .elfinder-toast > div {
    width: 280px;
}
 
.elfinder-edit-onlineconvert-button {
    display: inline-block;
    width: 180px;
    min-height: 30px;
    vertical-align: top;
}
.elfinder-edit-onlineconvert-button button,
.elfinder-edit-onlineconvert-bottom-btn button {
    cursor: pointer;
}
.elfinder-edit-onlineconvert-bottom-btn button.elfinder-button-ios-multiline {
    -webkit-appearance: none;
    border-radius: 16px;
    color: #000;
    text-align: center;
    padding: 8px;
    background-color: #eee;
    background-image: -webkit-linear-gradient(top, hsl(0,0%,98%) 0%,hsl(0,0%,77%) 100%);
    background-image: linear-gradient(to bottom, hsl(0,0%,98%) 0%,hsl(0,0%,77%) 100%);
}
.elfinder-edit-onlineconvert-button .elfinder-button-icon {
    margin: 0 10px;
    vertical-align: middle;
    cursor: pointer;
}
.elfinder-edit-onlineconvert-bottom-btn {
    text-align: center;
    margin: 10px 0 0;
}

.elfinder-edit-onlineconvert-link {
    margin-top: 1em;
    text-align: center;
}
.elfinder-edit-onlineconvert-link .elfinder-button-icon {
    background-image: url(\"../img/editor-icons.png\");
    background-repeat: no-repeat;
    background-position: 0 -144px;
    margin-bottom: -3px;
}
.elfinder-edit-onlineconvert-link a {
    text-decoration: none;
}

/********************** COMMAND \"SORT\" ****************************/
/* for list table header sort triangle icon */
div.elfinder-cwd-wrapper-list tr.ui-state-default td {
    position: relative;
}

div.elfinder-cwd-wrapper-list tr.ui-state-default td span.ui-icon {
    position: absolute;
    top: 4px;
    left: 0;
    right: 0;
    margin: auto 0px auto auto;
}

.elfinder-touch div.elfinder-cwd-wrapper-list tr.ui-state-default td span.ui-icon {
    top: 7px;
}

.elfinder-rtl div.elfinder-cwd-wrapper-list tr.ui-state-default td span.ui-icon {
    margin: auto auto auto 0px;
}

/********************** COMMAND \"HELP\" ****************************/
/* help dialog */
.elfinder-help {
    margin-bottom: .5em;
    -webkit-overflow-scrolling: touch;
}

/* fix tabs */
.elfinder-help .ui-tabs-panel {
    padding: .5em;
    overflow: auto;
    padding: 10px;
}

.elfinder-dialog .ui-tabs .ui-tabs-nav li {
    overflow: hidden;
}

.elfinder-dialog .ui-tabs .ui-tabs-nav li a {
    padding: .2em .8em;
    display: inline-block;
}

.elfinder-touch .elfinder-dialog .ui-tabs .ui-tabs-nav li a {
    padding: .5em .5em;
}

.elfinder-dialog .ui-tabs-active a {
    background: inherit;
}

.elfinder-help-shortcuts {
    height: auto;
    padding: 10px;
    margin: 0;
    box-sizing: border-box;
}

.elfinder-help-shortcut {
    white-space: nowrap;
    clear: both;
}

.elfinder-help-shortcut-pattern {
    float: left;
    width: 160px;
}

.elfinder-help-logo {
    width: 100px;
    height: 96px;
    float: left;
    margin-right: 1em;
    background: url('../img/logo.png') center center no-repeat;
}

.elfinder-help h3 {
    font-size: 1.5em;
    margin: .2em 0 .3em 0;
}

.elfinder-help-separator {
    clear: both;
    padding: .5em;
}

.elfinder-help-link {
    display: inline-block;
    margin-right: 12px;
    padding: 2px 0;
    white-space: nowrap;
}

.elfinder-rtl .elfinder-help-link {
    margin-right: 0;
    margin-left: 12px;
}

.elfinder-help .ui-priority-secondary {
    font-size: .9em;
}

.elfinder-help .ui-priority-primary {
    margin-bottom: 7px;
}

.elfinder-help-team {
    clear: both;
    text-align: right;
    border-bottom: 1px solid #ccc;
    margin: .5em 0;
    font-size: .9em;
}

.elfinder-help-team div {
    float: left;
}

.elfinder-help-license {
    font-size: .9em;
}

.elfinder-help-disabled {
    font-weight: bold;
    text-align: center;
    margin: 90px 0;
}

.elfinder-help .elfinder-dont-panic {
    display: block;
    border: 1px solid transparent;
    width: 200px;
    height: 200px;
    margin: 30px auto;
    text-decoration: none;
    text-align: center;
    position: relative;
    background: #d90004;
    -moz-box-shadow: 5px 5px 9px #111;
    -webkit-box-shadow: 5px 5px 9px #111;
    box-shadow: 5px 5px 9px #111;
    background: -moz-radial-gradient(80px 80px, circle farthest-corner, #d90004 35%, #960004 100%);
    background: -webkit-gradient(radial, 80 80, 60, 80 80, 120, from(#d90004), to(#960004));
    -moz-border-radius: 100px;
    -webkit-border-radius: 100px;
    border-radius: 100px;
    outline: none;
}

.elfinder-help .elfinder-dont-panic span {
    font-size: 3em;
    font-weight: bold;
    text-align: center;
    color: #fff;
    position: absolute;
    left: 0;
    top: 45px;
}

ul.elfinder-help-integrations ul {
    margin-bottom: 1em;
    padding: 0;
    margin: 0 1em 1em;
}

ul.elfinder-help-integrations a {
    text-decoration: none;
}

ul.elfinder-help-integrations a:hover {
    text-decoration: underline;
}

.elfinder-help-debug {
    height: 100%;
    padding: 0;
    margin: 0;
    overflow: none;
    border: none;
}

.elfinder-help-debug .ui-tabs-panel {
    padding: 0;
    margin: 0;
    overflow: auto;
}

.elfinder-help-debug fieldset {
    margin-bottom: 10px;
    border-color: #778899;
    border-radius: 10px;
}

.elfinder-help-debug legend {
    font-size: 1.2em;
    font-weight: bold;
    color: #2e8b57;
}

.elfinder-help-debug dl {
    margin: 0;
}

.elfinder-help-debug dt {
    color: #778899;
}

.elfinder-help-debug dt:before {
    content: \"[\";
}

.elfinder-help-debug dt:after {
    content: \"]\";
}

.elfinder-help-debug dd {
    margin-left: 1em;
}

.elfinder-help-debug dd span {
    /*font-size: 1.2em;*/
}

/********************** COMMAND \"PREFERENCE\" ****************************/
.elfinder-dialog .elfinder-preference .ui-tabs-nav {
    margin-bottom: 1px;
    height: auto;
}

/* fix tabs */
.elfinder-preference .ui-tabs-panel {
    padding: 10px 10px 0;
    overflow: auto;
    box-sizing: border-box;
    -webkit-overflow-scrolling: touch;
}

.elfinder-preference a.ui-state-hover,
.elfinder-preference label.ui-state-hover {
    border: none;
}

.elfinder-preference dl {
    width: 100%;
    display: inline-block;
    margin: .5em 0;
}

.elfinder-preference dt {
    display: block;
    width: 200px;
    clear: left;
    float: left;
    max-width: 50%;
}

.elfinder-rtl .elfinder-preference dt {
    clear: right;
    float: right;
}

.elfinder-preference dd {
    margin-bottom: 1em;
}

.elfinder-preference dt label {
    cursor: pointer;
}

.elfinder-preference dd label,
.elfinder-preference dd input[type=checkbox] {
    white-space: nowrap;
    display: inline-block;
    cursor: pointer;
}

.elfinder-preference dt.elfinder-preference-checkboxes {
    width: 100%;
    max-width: none;
}

.elfinder-preference dd.elfinder-preference-checkboxes {
    padding-top: 3ex;
}

.elfinder-preference select {
    max-width: 100%;
}

.elfinder-preference dd.elfinder-preference-iconSize .ui-slider {
    width: 50%;
    max-width: 100px;
    display: inline-block;
    margin: 0 10px;
}

.elfinder-preference button {
    margin: 0 16px;
}

.elfinder-preference button + button {
    margin: 0 -10px;
}

.elfinder-preference .elfinder-preference-taball .elfinder-reference-hide-taball {
    display: none;
}

.elfinder-preference-theme fieldset {
    margin-bottom: 10px;
}

.elfinder-preference-theme legend a {
    font-size: 1.8em;
    text-decoration: none;
    cursor: pointer;
}

.elfinder-preference-theme dt {
    width: 20%;
    word-break: break-all;
}

.elfinder-preference-theme dt:after {
    content: \" :\";
}

.elfinder-preference-theme dd {
    margin-inline-start: 20%;
}

.elfinder-preference img.elfinder-preference-theme-image {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 90%;
    max-height: 200px;
    cursor: pointer;
}

.elfinder-preference-theme-btn {
    text-align: center;
}

.elfinder-preference-theme button.elfinder-preference-theme-default {
    display: inline;
    margin: 0 10px;
    font-size: 8pt;
}

/********************** COMMAND \"INFO\" ****************************/
.elfinder-rtl .elfinder-info-title .elfinder-cwd-icon:before {
    right: 33px;
    left: auto;
}

.elfinder-info-title .elfinder-cwd-icon.elfinder-cwd-bgurl:after {
    content: none;
}

/********************** COMMAND \"UPLOAD\" ****************************/
.elfinder-upload-dialog-wrapper .elfinder-upload-dirselect {
    position: absolute;
    bottom: 2px;
    width: 16px;
    height: 16px;
    padding: 10px;
    border: none;
    overflow: hidden;
    cursor: pointer;
}

.elfinder-ltr .elfinder-upload-dialog-wrapper .elfinder-upload-dirselect {
    left: 2px;
}

.elfinder-rtl .elfinder-upload-dialog-wrapper .elfinder-upload-dirselect {
    right: 2px;
}

/********************** COMMAND \"RM\" ****************************/
.elfinder-ltr .elfinder-rm-title .elfinder-cwd-icon:before {
    left: 38px;
}

.elfinder-rtl .elfinder-rm-title .elfinder-cwd-icon:before {
    right: 86px;
    left: auto;
}

.elfinder-rm-title .elfinder-cwd-icon.elfinder-cwd-bgurl:after {
    content: none;
}

/********************** COMMAND \"RENAME\" ****************************/
.elfinder-rename-batch div {
    margin: 5px 8px;
}

.elfinder-rename-batch .elfinder-rename-batch-name input {
    width: 100%;
    font-size: 1.6em;
}

.elfinder-rename-batch-type {
    text-align: center;
}

.elfinder-rename-batch .elfinder-rename-batch-type label {
    margin: 2px;
    font-size: .9em;
}

.elfinder-rename-batch-preview {
    padding: 0 8px;
    font-size: 1.1em;
    min-height: 4ex;
}


/* File: /css/common.css */
/*********************************************/
/*            COMMON ELFINDER STUFFS         */
/*********************************************/

/* for old jQuery UI */
.ui-front {
    z-index: 100;
}

/* style reset */
div.elfinder *,
div.elfinder :after,
div.elfinder :before {
    box-sizing: content-box;
}

div.elfinder fieldset {
    display: block;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: threedface;
    border-image: initial;
}

div.elfinder legend {
    display: block;
    padding-inline-start: 2px;
    padding-inline-end: 2px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    width: auto;
    margin-bottom: 0;
}

/* base container */
div.elfinder {
    padding: 0;
    position: relative;
    display: block;
    visibility: visible;
    font-size: 18px;
    font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* prevent auto zoom on iOS */
.elfinder-ios input,
.elfinder-ios select,
.elfinder-ios textarea {
    font-size: 16px !important;
}

/* full screen mode */
.elfinder.elfinder-fullscreen > .ui-resizable-handle {
    display: none;
}

.elfinder-font-mono {
    line-height: 2ex;
}

/* in lazy execution status */
.elfinder.elfinder-processing * {
    cursor: progress !important
}

.elfinder.elfinder-processing.elfinder-touch .elfinder-workzone:after {
    position: absolute;
    top: 0;
    width: 100%;
    height: 3px;
    content: '';
    left: 0;
    background-image: url(../img/progress.gif);
    opacity: .6;
    pointer-events: none;
}

/* for disable select of Touch devices */
.elfinder *:not(input):not(textarea):not(select):not([contenteditable=true]),
.elfinder-contextmenu *:not(input):not(textarea):not(select):not([contenteditable=true]) {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    /*-webkit-touch-callout:none;*/
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
}

.elfinder .overflow-scrolling-touch {
    -webkit-overflow-scrolling: touch;
}

/* right to left enviroment */
.elfinder-rtl {
    text-align: right;
    direction: rtl;
}

/* nav and cwd container */
.elfinder-workzone {
    padding: 0;
    position: relative;
    overflow: hidden;
}

/* dir/file permissions and symlink markers */
.elfinder-lock,
.elfinder-perms,
.elfinder-symlink {
    position: absolute;
    width: 16px;
    height: 16px;
    background-image: url(../img/toolbar.png);
    background-repeat: no-repeat;
    background-position: 0 -528px;
}

.elfinder-symlink {
}

/* noaccess */
.elfinder-na .elfinder-perms {
    background-position: 0 -96px;
}

/* read only */
.elfinder-ro .elfinder-perms {
    background-position: 0 -64px;
}

/* write only */
.elfinder-wo .elfinder-perms {
    background-position: 0 -80px;
}

/* volume type group */
.elfinder-group .elfinder-perms {
    background-position: 0 0px;
}

/* locked */
.elfinder-lock {
    background-position: 0 -656px;
}

/* drag helper */
.elfinder-drag-helper {
    top: 0px;
    left: 0px;
    width: 70px;
    height: 60px;
    padding: 0 0 0 25px;
    z-index: 100000;
    will-change: left, top;
}

.elfinder-drag-helper.html5-native {
    position: absolute;
    top: -1000px;
    left: -1000px;
}

/* drag helper status icon (default no-drop) */
.elfinder-drag-helper-icon-status {
    position: absolute;
    width: 16px;
    height: 16px;
    left: 42px;
    top: 60px;
    background: url('../img/toolbar.png') 0 -96px no-repeat;
    display: block;
}

/* show \"up-arrow\" icon for move item */
.elfinder-drag-helper-move .elfinder-drag-helper-icon-status {
    background-position: 0 -720px;
}

/* show \"plus\" icon when ctrl/shift pressed */
.elfinder-drag-helper-plus .elfinder-drag-helper-icon-status {
    background-position: 0 -544px;
}

/* files num in drag helper */
.elfinder-drag-num {
    display: inline-box;
    position: absolute;
    top: 0;
    left: 0;
    width: auto;
    height: 14px;
    text-align: center;
    padding: 1px 3px 1px 3px;

    font-weight: bold;
    color: #fff;
    background-color: red;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

/* icon in drag helper */
.elfinder-drag-helper .elfinder-cwd-icon {
    margin: 0 0 0 -24px;
    float: left;
}

/* transparent overlay */
.elfinder-overlay {
    position: absolute;
    opacity: .2;
    filter: Alpha(Opacity=20);
}

/* panels under/below cwd (for search field etc) */
.elfinder .elfinder-panel {
    position: relative;
    background-image: none;
    padding: 7px 12px;
}

/* for html5 drag and drop */
[draggable=true] {
    -khtml-user-drag: element;
}

/* for place holder to content editable elements */
.elfinder [contentEditable=true]:empty:not(:focus):before {
    content: attr(data-ph);
}

/* bottom tray */
.elfinder div.elfinder-bottomtray {
    position: fixed;
    bottom: 0;
    max-width: 100%;
    opacity: .8;
}

.elfinder div.elfinder-bottomtray > div {
    top: initial;
    right: initial;
    left: initial;
}

.elfinder.elfinder-ltr div.elfinder-bottomtray {
    left: 0;
}

.elfinder.elfinder-rtl div.elfinder-bottomtray {
    right: 0;
}

/* tooltip */
.elfinder-ui-tooltip,
.elfinder .elfinder-ui-tooltip {
    font-size: 14px;
    padding: 2px 4px;
}

/* progressbar */
.elfinder-ui-progressbar {
    pointer-events: none;
    position: absolute;
    width: 0;
    height: 2px;
    top: 0px;
    border-radius: 2px;
    filter: blur(1px);
}

.elfinder-ltr .elfinder-ui-progressbar {
    left: 0;
}

.elfinder-rtl .elfinder-ui-progressbar {
    right: 0;
}
/* File: /css/contextmenu.css */
/* menu and submenu */
.elfinder .elfinder-contextmenu,
.elfinder .elfinder-contextmenu-sub {
    position: absolute;
    border: 1px solid #aaa;
    background: #fff;
    color: #555;
    padding: 4px 0;
    top: 0;
    left: 0;
}

/* submenu */
.elfinder .elfinder-contextmenu-sub {
    top: 5px;
}

/* submenu in rtl/ltr enviroment */
.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-sub {
    margin-left: -5px;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-sub {
    margin-right: -5px;
}

/* menu item */
.elfinder .elfinder-contextmenu-header {
    margin-top: -4px;
    padding: 0 .5em .2ex;
    border: none;
    text-align: center;
}

.elfinder .elfinder-contextmenu-header span {
    font-weight: normal;
    font-size: 0.8em;
    font-weight: bolder;
}

.elfinder .elfinder-contextmenu-item {
    position: relative;
    display: block;
    padding: 4px 30px;
    text-decoration: none;
    white-space: nowrap;
    cursor: default;
}

.elfinder .elfinder-contextmenu-item.ui-state-active {
    border: none;
}

.elfinder .elfinder-contextmenu-item .ui-icon {
    width: 16px;
    height: 16px;
    position: absolute;
    left: auto;
    right: auto;
    top: 50%;
    margin-top: -8px;
}

.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-item .ui-icon {
    left: 2px;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-item .ui-icon {
    right: 2px;
}

.elfinder-touch .elfinder-contextmenu-item {
    padding: 12px 38px;
}

/* root icon of each volume */
.elfinder-navbar-root-local.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_local.svg\");
    background-size: contain;
}

.elfinder-navbar-root-trash.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_trash.svg\");
    background-size: contain;
}

.elfinder-navbar-root-ftp.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_ftp.svg\");
    background-size: contain;
}

.elfinder-navbar-root-sql.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_sql.svg\");
    background-size: contain;
}

.elfinder-navbar-root-dropbox.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_dropbox.svg\");
    background-size: contain;
}

.elfinder-navbar-root-googledrive.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_googledrive.svg\");
    background-size: contain;
}

.elfinder-navbar-root-onedrive.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_onedrive.svg\");
    background-size: contain;
}

.elfinder-navbar-root-box.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_box.svg\");
    background-size: contain;
}

.elfinder-navbar-root-zip.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_zip.svg\");
    background-size: contain;
}

.elfinder-navbar-root-network.elfinder-contextmenu-icon {
    background-image: url(\"../img/volume_icon_network.svg\");
    background-size: contain;
}

/* text in item */
.elfinder .elfinder-contextmenu .elfinder-contextmenu-item span {
    display: block;
}

/* submenu item in rtl/ltr enviroment */
.elfinder .elfinder-contextmenu-sub .elfinder-contextmenu-item {
    padding-left: 12px;
    padding-right: 12px;
}

.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-item {
    text-align: left;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-item {
    text-align: right;
}

.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-sub .elfinder-contextsubmenu-item-icon {
    padding-left: 28px;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-sub .elfinder-contextsubmenu-item-icon {
    padding-right: 28px;
}

.elfinder-touch .elfinder-contextmenu-ltr .elfinder-contextmenu-sub .elfinder-contextsubmenu-item-icon {
    padding-left: 36px;
}

.elfinder-touch .elfinder-contextmenu-rtl .elfinder-contextmenu-sub .elfinder-contextsubmenu-item-icon {
    padding-right: 36px;
}

/* command/submenu icon */
.elfinder .elfinder-contextmenu-extra-icon,
.elfinder .elfinder-contextmenu-arrow,
.elfinder .elfinder-contextmenu-icon {
    position: absolute;
    top: 50%;
    margin-top: -8px;
    overflow: hidden;
}

.elfinder-touch .elfinder-button-icon.elfinder-contextmenu-icon {
    transform-origin: center center;
}

/* command icon in rtl/ltr enviroment */
.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-icon {
    left: 8px;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-icon {
    right: 8px;
}

.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-extra-icon {
    right: 8px;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-extra-icon {
    left: 8px;
}

/* arrow icon */
.elfinder .elfinder-contextmenu-arrow {
    width: 16px;
    height: 16px;
    background: url('../img/arrows-normal.png') 5px 4px no-repeat;
}

/* arrow icon in rtl/ltr enviroment */
.elfinder .elfinder-contextmenu-ltr .elfinder-contextmenu-arrow {
    right: 5px;
}

.elfinder .elfinder-contextmenu-rtl .elfinder-contextmenu-arrow {
    left: 5px;
    background-position: 0 -10px;
}

/* command extra icon's <a>, <span> tag */
.elfinder .elfinder-contextmenu-extra-icon a,
.elfinder .elfinder-contextmenu-extra-icon span {
    position: relative;
    width: 100%;
    height: 100%;
    margin: 0;
    color: transparent !important;
    text-decoration: none;
    cursor: pointer;
}

/* disable ui border/bg image on hover */
.elfinder .elfinder-contextmenu .ui-state-hover {
    border: 0 solid;
    background-image: none;
}

/* separator */
.elfinder .elfinder-contextmenu-separator {
    height: 0px;
    border-top: 1px solid #ccc;
    margin: 0 1px;
}

/* for CSS style priority to ui-state-disabled - \"background-image: none\" */
.elfinder .elfinder-contextmenu-item .elfinder-button-icon.ui-state-disabled {
    background-image: url('../img/toolbar.png');
}

/* File: /css/cwd.css */
/******************************************************************/
/*                     CURRENT DIRECTORY STYLES                   */
/******************************************************************/
/* cwd container to avoid selectable on scrollbar */
.elfinder-cwd-wrapper {
    overflow: auto;
    position: relative;
    padding: 2px;
    margin: 0;
}

.elfinder-cwd-wrapper-list {
    padding: 0;
}

/* container */
.elfinder-cwd {
    position: absolute;
    top: 0;
    cursor: default;
    padding: 0;
    margin: 0;
    -ms-touch-action: auto;
    touch-action: auto;
    min-width: 100%;
}

.elfinder-ltr .elfinder-cwd {
    left: 0;
}

.elfinder-rtl .elfinder-cwd {
    right: 0;
}

.elfinder-cwd.elfinder-table-header-sticky {
    position: -webkit-sticky;
    position: -ms-sticky;
    position: sticky;
    top: 0;
    left: auto;
    right: auto;
    width: -webkit-max-content;
    width: -moz-max-content;
    width: -ms-max-content;
    width: max-content;
    height: 0;
    overflow: visible;
}

.elfinder-cwd.elfinder-table-header-sticky table {
    border-top: 2px solid;
    padding-top: 0;
}

.elfinder-cwd.elfinder-table-header-sticky td {
    display: inline-block;
}

.elfinder-droppable-active .elfinder-cwd.elfinder-table-header-sticky table {
    border-top: 2px solid transparent;
}

/* fixed table header container */
.elfinder-cwd-fixheader .elfinder-cwd {
    position: relative;
}

/* container active on dropenter */
.elfinder .elfinder-cwd-wrapper.elfinder-droppable-active {
    outline: 2px solid #8cafed;
    outline-offset: -2px;
}

.elfinder-cwd-wrapper-empty .elfinder-cwd:after {
    display: block;
    position: absolute;
    height: auto;
    width: 90%;
    width: calc(100% - 20px);
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translateY(-50%) translateX(-50%);
    -webkit-transform: translateY(-50%) translateX(-50%);
    transform: translateY(-50%) translateX(-50%);
    line-height: 1.5em;
    text-align: center;
    white-space: pre-wrap;
    opacity: 0.6;
    filter: Alpha(Opacity=60);
    font-weight: bold;
}

.elfinder-cwd-file .elfinder-cwd-select {
    position: absolute;
    top: 0px;
    left: 0px;
    background-color: transparent;
    opacity: .4;
    filter: Alpha(Opacity=40);
}

.elfinder-mobile .elfinder-cwd-file .elfinder-cwd-select {
    width: 30px;
    height: 30px;
}

.elfinder-cwd-file.ui-selected .elfinder-cwd-select {
    opacity: .8;
    filter: Alpha(Opacity=80);
}

.elfinder-rtl .elfinder-cwd-file .elfinder-cwd-select {
    left: auto;
    right: 0px;
}

.elfinder .elfinder-cwd-selectall {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 0px;
    opacity: .8;
    filter: Alpha(Opacity=80);
}

.elfinder .elfinder-workzone.elfinder-cwd-wrapper-empty .elfinder-cwd-selectall {
    display: none;
}

/************************** ICONS VIEW ********************************/

.elfinder-ltr .elfinder-workzone .elfinder-cwd-selectall {
    text-align: right;
    right: 18px;
    left: auto;
}

.elfinder-rtl .elfinder-workzone .elfinder-cwd-selectall {
    text-align: left;
    right: auto;
    left: 18px;
}

.elfinder-ltr.elfinder-mobile .elfinder-workzone .elfinder-cwd-selectall {
    right: 0px;
}

.elfinder-rtl.elfinder-mobile .elfinder-workzone .elfinder-cwd-selectall {
    left: 0px;
}

.elfinder-cwd-view-icons .elfinder-cwd-file .elfinder-cwd-select.ui-state-hover {
    background-color: transparent;
}

/* file container */
.elfinder-cwd-view-icons .elfinder-cwd-file {
    width: 120px;
    height: 90px;
    padding-bottom: 2px;
    cursor: default;
    border: none;
    position: relative;
}

.elfinder-cwd-view-icons .elfinder-cwd-file .ui-state-active {
    border: none;
}

/* ltr/rtl enviroment */
.elfinder-ltr .elfinder-cwd-view-icons .elfinder-cwd-file {
    float: left;
    margin: 0 3px 2px 0;
}

.elfinder-rtl .elfinder-cwd-view-icons .elfinder-cwd-file {
    float: right;
    margin: 0 0 5px 3px;
}

/* remove ui hover class border */
.elfinder-cwd-view-icons .elfinder-cwd-file .ui-state-hover {
    border: 0 solid;
}

/* icon wrapper to create selected highlight around icon */
.elfinder-cwd-view-icons .elfinder-cwd-file-wrapper {
    width: 52px;
    height: 52px;
    margin: 1px auto 1px auto;
    padding: 2px;
    position: relative;
}

/*** Custom Icon Size size1 - size3 ***/
/* type badge */
.elfinder-cwd-size1 .elfinder-cwd-icon:before,
.elfinder-cwd-size2 .elfinder-cwd-icon:before,
.elfinder-cwd-size3 .elfinder-cwd-icon:before {
    top: 3px;
    display: block;
}

/* size1 */
.elfinder-cwd-size1.elfinder-cwd-view-icons .elfinder-cwd-file {
    width: 120px;
    height: 112px;
}

.elfinder-cwd-size1.elfinder-cwd-view-icons .elfinder-cwd-file-wrapper {
    width: 74px;
    height: 74px;
}

.elfinder-cwd-size1 .elfinder-cwd-icon {
    -ms-transform-origin: top center;
    -ms-transform: scale(1.5);
    -webkit-transform-origin: top center;
    -webkit-transform: scale(1.5);
    transform-origin: top center;
    transform: scale(1.5);
}

.elfinder-cwd-size1 .elfinder-cwd-icon.elfinder-cwd-bgurl:before {
    -ms-transform-origin: top left;
    -ms-transform: scale(1.35) translate(-4px, 15%);
    -webkit-transform-origin: top left;
    -webkit-transform: scale(1.35) translate(-4px, 15%);
    transform-origin: top left;
    transform: scale(1.35) translate(-4px, 15%);
}

.elfinder-cwd-size1 .elfinder-cwd-icon.elfinder-cwd-bgurl:after {
    -ms-transform: scale(1) translate(10px, -5px);
    -webkit-transform: scale(1) translate(10px, -5px);
    transform: scale(1) translate(10px, -5px);
}

.elfinder-cwd-size1 .elfinder-cwd-icon.elfinder-cwd-bgurl {
    -ms-transform-origin: center center;
    -ms-transform: scale(1);
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1);
    transform-origin: center center;
    transform: scale(1);
    width: 72px;
    height: 72px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
}

/* size2 */
.elfinder-cwd-size2.elfinder-cwd-view-icons .elfinder-cwd-file {
    width: 140px;
    height: 134px;
}

.elfinder-cwd-size2.elfinder-cwd-view-icons .elfinder-cwd-file-wrapper {
    width: 98px;
    height: 98px;
}

.elfinder-cwd-size2 .elfinder-cwd-icon {
    -ms-transform-origin: top center;
    -ms-transform: scale(2);
    -webkit-transform-origin: top center;
    -webkit-transform: scale(2);
    transform-origin: top center;
    transform: scale(2);
}

.elfinder-cwd-size2 .elfinder-cwd-icon.elfinder-cwd-bgurl:before {
    -ms-transform-origin: top left;
    -ms-transform: scale(1.8) translate(-5px, 18%);
    -webkit-transform-origin: top left;
    -webkit-transform: scale(1.8) translate(-5px, 18%);
    transform-origin: top left;
    transform: scale(1.8) translate(-5px, 18%);
}

.elfinder-cwd-size2 .elfinder-cwd-icon.elfinder-cwd-bgurl:after {
    -ms-transform: scale(1.1) translate(0px, 10px);
    -webkit-transform: scale(1.1) translate(0px, 10px);
    transform: scale(1.1) translate(0px, 10px);
}

.elfinder-cwd-size2 .elfinder-cwd-icon.elfinder-cwd-bgurl {
    -ms-transform-origin: center center;
    -ms-transform: scale(1);
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1);
    transform-origin: center center;
    transform: scale(1);
    width: 96px;
    height: 96px;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

/* size3 */
.elfinder-cwd-size3.elfinder-cwd-view-icons .elfinder-cwd-file {
    width: 174px;
    height: 158px;
}

.elfinder-cwd-size3.elfinder-cwd-view-icons .elfinder-cwd-file-wrapper {
    width: 122px;
    height: 122px;
}

.elfinder-cwd-size3 .elfinder-cwd-icon {
    -ms-transform-origin: top center;
    -ms-transform: scale(2.5);
    -webkit-transform-origin: top center;
    -webkit-transform: scale(2.5);
    transform-origin: top center;
    transform: scale(2.5);
}

.elfinder-cwd-size3 .elfinder-cwd-icon.elfinder-cwd-bgurl:before {
    -ms-transform-origin: top left;
    -ms-transform: scale(2.25) translate(-6px, 20%);
    -webkit-transform-origin: top left;
    -webkit-transform: scale(2.25) translate(-6px, 20%);
    transform-origin: top left;
    transform: scale(2.25) translate(-6px, 20%);
}

.elfinder-cwd-size3 .elfinder-cwd-icon.elfinder-cwd-bgurl:after {
    -ms-transform: scale(1.2) translate(-9px, 22px);
    -webkit-transform: scale(1.2) translate(-9px, 22px);
    transform: scale(1.2) translate(-9px, 22px);
}

.elfinder-cwd-size3 .elfinder-cwd-icon.elfinder-cwd-bgurl {
    -ms-transform-origin: center center;
    -ms-transform: scale(1);
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1);
    transform-origin: center center;
    transform: scale(1);
    width: 120px;
    height: 120px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

/* file name place */
.elfinder-cwd-view-icons .elfinder-cwd-filename {
    text-align: center;
    max-height: 2.4em;
    line-height: 1.2em;
    white-space: pre-line;
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    margin: 3px 1px 0 1px;
    padding: 1px;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    /* for webkit CSS3 */
    word-break: break-word;
    overflow-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

/* permissions/symlink markers */
.elfinder-cwd-view-icons .elfinder-perms {
    bottom: 4px;
    right: 2px;
}

.elfinder-cwd-view-icons .elfinder-lock {
    top: -3px;
    right: -2px;
}

.elfinder-cwd-view-icons .elfinder-symlink {
    bottom: 6px;
    left: 0px;
}

/* icon/thumbnail */
.elfinder-cwd-icon {
    display: block;
    width: 48px;
    height: 48px;
    margin: 0 auto;
    background-image: url('../img/icons-big.svg');
    background-image: url('../img/icons-big.png') \\9;
    background-position: 0 0;
    background-repeat: no-repeat;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
}

/* volume icon of root in folder */
.elfinder-navbar-root-local .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-local.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-local td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_local.svg\");
    background-image: url(\"../img/volume_icon_local.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-local.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

.elfinder-navbar-root-trash .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-trash.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-trash td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_trash.svg\");
    background-image: url(\"../img/volume_icon_trash.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-trash.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

.elfinder-navbar-root-ftp .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-ftp.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-ftp td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_ftp.svg\");
    background-image: url(\"../img/volume_icon_ftp.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-ftp.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

.elfinder-navbar-root-sql .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-sql.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-sql td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_sql.svg\");
    background-image: url(\"../img/volume_icon_sql.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-sql.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

.elfinder-navbar-root-dropbox .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-dropbox.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-dropbox td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_dropbox.svg\");
    background-image: url(\"../img/volume_icon_dropbox.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-dropbox.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

.elfinder-navbar-root-googledrive .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-googledrive.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-googledrive td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_googledrive.svg\");
    background-image: url(\"../img/volume_icon_googledrive.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-navbar-root-onedrive .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-onedrive.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-onedrive td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_onedrive.svg\");
    background-image: url(\"../img/volume_icon_onedrive.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-navbar-root-box .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-box.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-box td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_box.svg\");
    background-image: url(\"../img/volume_icon_box.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-navbar-root-zip .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-zip.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-zip td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_zip.svg\");
    background-image: url(\"../img/volume_icon_zip.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-googledrive.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-onedrive.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-box.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

.elfinder-navbar-root-network .elfinder-cwd-icon,
.elfinder-cwd .elfinder-navbar-root-network.elfinder-droppable-active .elfinder-cwd-icon,
.elfinder-cwd-view-list .elfinder-navbar-root-network td .elfinder-cwd-icon {
    background-image: url(\"../img/volume_icon_network.svg\");
    background-image: url(\"../img/volume_icon_network.png\") \\9;
    background-position: 0 0;
    background-size: contain;
}

.elfinder-cwd .elfinder-navbar-root-network.elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 1px -1px;
}

/* type badge in \"icons\" view */
.elfinder-cwd-icon:before {
    content: none;
    position: absolute;
    left: 0px;
    top: 5px;
    min-width: 20px;
    max-width: 84px;
    text-align: center;
    padding: 0px 4px 1px;
    border-radius: 4px;
    font-family: Verdana;
    font-size: 10px;
    line-height: 1.3em;
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -o-transform: scale(0.9);
    transform: scale(0.9);
}

.elfinder-cwd-view-icons .elfinder-cwd-icon.elfinder-cwd-bgurl:before {
    left: -10px;
}

/* addtional type badge name */
.elfinder-cwd-icon.elfinder-cwd-icon-mp2t:before {
    content: 'ts'
}

.elfinder-cwd-icon.elfinder-cwd-icon-dash-xml:before {
    content: 'dash'
}

.elfinder-cwd-icon.elfinder-cwd-icon-x-mpegurl:before {
    content: 'hls'
}

.elfinder-cwd-icon.elfinder-cwd-icon-x-c:before {
    content: 'c++'
}

/* thumbnail image */
.elfinder-cwd-icon.elfinder-cwd-bgurl {
    background-position: center center;
    background-repeat: no-repeat;
    -moz-background-size: contain;
    background-size: contain;
}

/* thumbnail self */
.elfinder-cwd-icon.elfinder-cwd-bgurl.elfinder-cwd-bgself {
    -moz-background-size: cover;
    background-size: cover;
}

/* thumbnail crop*/
.elfinder-cwd-icon.elfinder-cwd-bgurl {
    -moz-background-size: cover;
    background-size: cover;
}

.elfinder-cwd-icon.elfinder-cwd-bgurl:after {
    content: ' ';
}

.elfinder-cwd-bgurl:after {
    position: relative;
    display: inline-block;
    top: 36px;
    left: -38px;
    width: 48px;
    height: 48px;
    background-image: url('../img/icons-big.svg');
    background-image: url('../img/icons-big.png') \\9;
    background-repeat: no-repeat;
    background-size: auto !important;
    opacity: .8;
    filter: Alpha(Opacity=60);
    -webkit-transform-origin: 54px -24px;
    -webkit-transform: scale(.6);
    -moz-transform-origin: 54px -24px;
    -moz-transform: scale(.6);
    -ms-transform-origin: 54px -24px;
    -ms-transform: scale(.6);
    -o-transform-origin: 54px -24px;
    -o-transform: scale(.6);
    transform-origin: 54px -24px;
    transform: scale(.6);
}

/* thumbnail image and draging icon */
.elfinder-cwd-icon.elfinder-cwd-icon-drag {
    width: 48px;
    height: 48px;
}

/* thumbnail image and draging icon overlay none */
.elfinder-cwd-icon.elfinder-cwd-icon-drag:before,
.elfinder-cwd-icon.elfinder-cwd-icon-drag:after,
.elfinder-cwd-icon-image.elfinder-cwd-bgurl:after,
.elfinder-cwd-icon-directory.elfinder-cwd-bgurl:after {
    content: none;
}

/* \"opened folder\" icon on dragover */
.elfinder-cwd .elfinder-droppable-active .elfinder-cwd-icon {
    background-position: 0 -100px;
}

.elfinder-cwd .elfinder-droppable-active {
    outline: 2px solid #8cafed;
    outline-offset: -2px;
}

/* mimetypes icons */
.elfinder-cwd-icon-directory {
    background-position: 0 -50px;
}

.elfinder-cwd-icon-application:after,
.elfinder-cwd-icon-application {
    background-position: 0 -150px;
}

.elfinder-cwd-icon-text:after,
.elfinder-cwd-icon-text {
    background-position: 0 -1350px;
}

.elfinder-cwd-icon-plain:after,
.elfinder-cwd-icon-plain,
.elfinder-cwd-icon-x-empty:after,
.elfinder-cwd-icon-x-empty {
    background-position: 0 -200px;
}

.elfinder-cwd-icon-image:after,
.elfinder-cwd-icon-vnd-adobe-photoshop:after,
.elfinder-cwd-icon-image,
.elfinder-cwd-icon-vnd-adobe-photoshop {
    background-position: 0 -250px;
}

.elfinder-cwd-icon-postscript:after,
.elfinder-cwd-icon-postscript {
    background-position: 0 -1550px;
}

.elfinder-cwd-icon-audio:after,
.elfinder-cwd-icon-audio {
    background-position: 0 -300px;
}

.elfinder-cwd-icon-video:after,
.elfinder-cwd-icon-video,
.elfinder-cwd-icon-flash-video,
.elfinder-cwd-icon-dash-xml,
.elfinder-cwd-icon-vnd-apple-mpegurl,
.elfinder-cwd-icon-x-mpegurl {
    background-position: 0 -350px;
}

.elfinder-cwd-icon-rtf:after,
.elfinder-cwd-icon-rtfd:after,
.elfinder-cwd-icon-rtf,
.elfinder-cwd-icon-rtfd {
    background-position: 0 -400px;
}

.elfinder-cwd-icon-pdf:after,
.elfinder-cwd-icon-pdf {
    background-position: 0 -450px;
}

.elfinder-cwd-icon-ms-excel,
.elfinder-cwd-icon-ms-excel:after,
.elfinder-cwd-icon-vnd-ms-excel,
.elfinder-cwd-icon-vnd-ms-excel-addin-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-excel-addin-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-excel-sheet-binary-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-excel-sheet-binary-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-excel-sheet-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-excel-sheet-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-excel-template-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-excel-template-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-excel:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-spreadsheetml-sheet,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-spreadsheetml-sheet:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-spreadsheetml-template,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-spreadsheetml-template:after {
    background-position: 0 -1450px
}

.elfinder-cwd-icon-vnd-oasis-opendocument-spreadsheet,
.elfinder-cwd-icon-vnd-oasis-opendocument-spreadsheet-template,
.elfinder-cwd-icon-vnd-oasis-opendocument-spreadsheet-template:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-spreadsheet:after {
    background-position: 0 -1700px
}

.elfinder-cwd-icon-vnd-ms-powerpoint,
.elfinder-cwd-icon-vnd-ms-powerpoint-addin-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-powerpoint-addin-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-powerpoint-presentation-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-powerpoint-presentation-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-powerpoint-slide-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-powerpoint-slide-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-powerpoint-slideshow-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-powerpoint-slideshow-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-powerpoint-template-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-powerpoint-template-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-powerpoint:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-presentation,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-presentation:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-slide,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-slide:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-slideshow,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-slideshow:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-template,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-presentationml-template:after {
    background-position: 0 -1400px
}

.elfinder-cwd-icon-vnd-oasis-opendocument-presentation,
.elfinder-cwd-icon-vnd-oasis-opendocument-presentation-template,
.elfinder-cwd-icon-vnd-oasis-opendocument-presentation-template:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-presentation:after {
    background-position: 0 -1650px
}

.elfinder-cwd-icon-msword,
.elfinder-cwd-icon-msword:after,
.elfinder-cwd-icon-vnd-ms-word,
.elfinder-cwd-icon-vnd-ms-word-document-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-word-document-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-word-template-macroEnabled-12,
.elfinder-cwd-icon-vnd-ms-word-template-macroEnabled-12:after,
.elfinder-cwd-icon-vnd-ms-word:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-wordprocessingml-document,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-wordprocessingml-document:after,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-wordprocessingml-template,
.elfinder-cwd-icon-vnd-openxmlformats-officedocument-wordprocessingml-template:after {
    background-position: 0 -1500px
}

.elfinder-cwd-icon-vnd-oasis-opendocument-text,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-master,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-master:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-template,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-template:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-web,
.elfinder-cwd-icon-vnd-oasis-opendocument-text-web:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-text:after {
    background-position: 0 -1750px
}

.elfinder-cwd-icon-vnd-ms-office,
.elfinder-cwd-icon-vnd-ms-office:after {
    background-position: 0 -500px
}

.elfinder-cwd-icon-vnd-oasis-opendocument-chart,
.elfinder-cwd-icon-vnd-oasis-opendocument-chart:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-database,
.elfinder-cwd-icon-vnd-oasis-opendocument-database:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-formula,
.elfinder-cwd-icon-vnd-oasis-opendocument-formula:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-graphics,
.elfinder-cwd-icon-vnd-oasis-opendocument-graphics-template,
.elfinder-cwd-icon-vnd-oasis-opendocument-graphics-template:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-graphics:after,
.elfinder-cwd-icon-vnd-oasis-opendocument-image,
.elfinder-cwd-icon-vnd-oasis-opendocument-image:after,
.elfinder-cwd-icon-vnd-openofficeorg-extension,
.elfinder-cwd-icon-vnd-openofficeorg-extension:after {
    background-position: 0 -1600px
}

.elfinder-cwd-icon-html:after,
.elfinder-cwd-icon-html {
    background-position: 0 -550px;
}

.elfinder-cwd-icon-css:after,
.elfinder-cwd-icon-css {
    background-position: 0 -600px;
}

.elfinder-cwd-icon-javascript:after,
.elfinder-cwd-icon-x-javascript:after,
.elfinder-cwd-icon-javascript,
.elfinder-cwd-icon-x-javascript {
    background-position: 0 -650px;
}

.elfinder-cwd-icon-x-perl:after,
.elfinder-cwd-icon-x-perl {
    background-position: 0 -700px;
}

.elfinder-cwd-icon-x-python:after,
.elfinder-cwd-icon-x-python {
    background-position: 0 -750px;
}

.elfinder-cwd-icon-x-ruby:after,
.elfinder-cwd-icon-x-ruby {
    background-position: 0 -800px;
}

.elfinder-cwd-icon-x-sh:after,
.elfinder-cwd-icon-x-shellscript:after,
.elfinder-cwd-icon-x-sh,
.elfinder-cwd-icon-x-shellscript {
    background-position: 0 -850px;
}

.elfinder-cwd-icon-x-c:after,
.elfinder-cwd-icon-x-csrc:after,
.elfinder-cwd-icon-x-chdr:after,
.elfinder-cwd-icon-x-c--:after,
.elfinder-cwd-icon-x-c--src:after,
.elfinder-cwd-icon-x-c--hdr:after,
.elfinder-cwd-icon-x-java:after,
.elfinder-cwd-icon-x-java-source:after,
.elfinder-cwd-icon-x-c,
.elfinder-cwd-icon-x-csrc,
.elfinder-cwd-icon-x-chdr,
.elfinder-cwd-icon-x-c--,
.elfinder-cwd-icon-x-c--src,
.elfinder-cwd-icon-x-c--hdr,
.elfinder-cwd-icon-x-java,
.elfinder-cwd-icon-x-java-source {
    background-position: 0 -900px;
}

.elfinder-cwd-icon-x-php:after,
.elfinder-cwd-icon-x-php {
    background-position: 0 -950px;
}

.elfinder-cwd-icon-xml:after,
.elfinder-cwd-icon-xml {
    background-position: 0 -1000px;
}

.elfinder-cwd-icon-zip:after,
.elfinder-cwd-icon-x-zip:after,
.elfinder-cwd-icon-x-xz:after,
.elfinder-cwd-icon-x-7z-compressed:after,
.elfinder-cwd-icon-zip,
.elfinder-cwd-icon-x-zip,
.elfinder-cwd-icon-x-xz,
.elfinder-cwd-icon-x-7z-compressed {
    background-position: 0 -1050px;
}

.elfinder-cwd-icon-x-gzip:after,
.elfinder-cwd-icon-x-tar:after,
.elfinder-cwd-icon-x-gzip,
.elfinder-cwd-icon-x-tar {
    background-position: 0 -1100px;
}

.elfinder-cwd-icon-x-bzip:after,
.elfinder-cwd-icon-x-bzip2:after,
.elfinder-cwd-icon-x-bzip,
.elfinder-cwd-icon-x-bzip2 {
    background-position: 0 -1150px;
}

.elfinder-cwd-icon-x-rar:after,
.elfinder-cwd-icon-x-rar-compressed:after,
.elfinder-cwd-icon-x-rar,
.elfinder-cwd-icon-x-rar-compressed {
    background-position: 0 -1200px;
}

.elfinder-cwd-icon-x-shockwave-flash:after,
.elfinder-cwd-icon-x-shockwave-flash {
    background-position: 0 -1250px;
}

.elfinder-cwd-icon-group {
    background-position: 0 -1300px;
}

/* textfield inside icon */
.elfinder-cwd-filename input {
    width: 100%;
    border: none;
    margin: 0;
    padding: 0;
}

.elfinder-cwd-view-icons input {
    text-align: center;
}

.elfinder-cwd-view-icons textarea {
    width: 100%;
    border: 0px solid;
    margin: 0;
    padding: 0;
    text-align: center;
    overflow: hidden;
    resize: none;
}

.elfinder-cwd-view-icons {
    text-align: center;
}

/************************************  LIST VIEW ************************************/

/*.elfinder-cwd-view-list { padding:0 0 4px 0; }*/

.elfinder-cwd-wrapper.elfinder-cwd-fixheader .elfinder-cwd::after {
    display: none;
}

.elfinder-cwd table {
    width: 100%;
    border-collapse: separate;
    border: 0 solid;
    margin: 0 0 10px 0;
    border-spacing: 0;
    box-sizing: padding-box;
    padding: 2px;
    position: relative;
}

.elfinder-cwd table td {
    /* fix conflict with Bootstrap CSS */
    box-sizing: content-box;
}

.elfinder-cwd-wrapper-list.elfinder-cwd-fixheader {
    position: absolute;
    overflow: hidden;
}

.elfinder-cwd-wrapper-list.elfinder-cwd-fixheader:before {
    content: '';
    position: absolute;
    width: 100%;
    top: 0;
    height: 3px;
    background-color: white;
}

.elfinder-droppable-active + .elfinder-cwd-wrapper-list.elfinder-cwd-fixheader:before {
    background-color: #8cafed;
}

.elfinder .elfinder-workzone div.elfinder-cwd-fixheader table {
    table-layout: fixed;
}

.elfinder .elfinder-cwd table tbody.elfinder-cwd-fixheader {
    position: relative;
}

.elfinder-ltr .elfinder-cwd thead .elfinder-cwd-selectall {
    text-align: left;
    right: auto;
    left: 0px;
    padding-top: 3px;
}

.elfinder-rtl .elfinder-cwd thead .elfinder-cwd-selectall {
    text-align: right;
    right: 0px;
    left: auto;
    padding-top: 3px;
}

.elfinder-touch .elfinder-cwd thead .elfinder-cwd-selectall {
    padding-top: 4px;
}

.elfinder .elfinder-cwd table thead tr {
    border-left: 0 solid;
    border-top: 0 solid;
    border-right: 0 solid;
}

.elfinder .elfinder-cwd table thead td {
    padding: 4px 14px;
}

.elfinder-ltr .elfinder-cwd.elfinder-has-checkbox table thead td:first-child {
    padding: 4px 14px 4px 22px;
}

.elfinder-rtl .elfinder-cwd.elfinder-has-checkbox table thead td:first-child {
    padding: 4px 22px 4px 14px;
}

.elfinder-touch .elfinder-cwd table thead td,
.elfinder-touch .elfinder-cwd.elfinder-has-checkbox table thead td:first-child {
    padding-top: 8px;
    padding-bottom: 8px;
}

.elfinder .elfinder-cwd table thead td.ui-state-active {
    background: #ebf1f6;
    background: -moz-linear-gradient(top, #ebf1f6 0%, #abd3ee 50%, #89c3eb 51%, #d5ebfb 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ebf1f6), color-stop(50%, #abd3ee), color-stop(51%, #89c3eb), color-stop(100%, #d5ebfb));
    background: -webkit-linear-gradient(top, #ebf1f6 0%, #abd3ee 50%, #89c3eb 51%, #d5ebfb 100%);
    background: -o-linear-gradient(top, #ebf1f6 0%, #abd3ee 50%, #89c3eb 51%, #d5ebfb 100%);
    background: -ms-linear-gradient(top, #ebf1f6 0%, #abd3ee 50%, #89c3eb 51%, #d5ebfb 100%);
    background: linear-gradient(to bottom, #ebf1f6 0%, #abd3ee 50%, #89c3eb 51%, #d5ebfb 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ebf1f6', endColorstr='#d5ebfb', GradientType=0);
}

.elfinder .elfinder-cwd table td {
    padding: 0 12px;
    white-space: pre;
    overflow: hidden;
    text-align: right;
    cursor: default;
    border: 0 solid;
}

.elfinder .elfinder-cwd table tbody td:first-child {
    position: relative
}

.elfinder .elfinder-cwd table td div {
    box-sizing: content-box;
}

tr.elfinder-cwd-file td .elfinder-cwd-select {
    padding-top: 3px;
}

.elfinder-mobile tr.elfinder-cwd-file td .elfinder-cwd-select {
    width: 40px;
}

.elfinder-touch tr.elfinder-cwd-file td .elfinder-cwd-select {
    padding-top: 10px;
}

.elfinder-touch .elfinder-cwd tr td {
    padding: 10px 12px;
}

.elfinder-touch .elfinder-cwd tr.elfinder-cwd-file td {
    padding: 13px 12px;
}

.elfinder-ltr .elfinder-cwd table td {
    text-align: right;
}

.elfinder-ltr .elfinder-cwd table td:first-child {
    text-align: left;
}

.elfinder-rtl .elfinder-cwd table td {
    text-align: left;
}

.elfinder-rtl .elfinder-cwd table td:first-child {
    text-align: right;
}

.elfinder-odd-row {
    background: #eee;
}

/* filename container */
.elfinder-cwd-view-list .elfinder-cwd-file-wrapper {
    width: 97%;
    position: relative;
}

/* filename container in ltr/rtl enviroment */
.elfinder-ltr .elfinder-cwd-view-list.elfinder-has-checkbox .elfinder-cwd-file-wrapper {
    margin-left: 8px;
}

.elfinder-rtl .elfinder-cwd-view-list.elfinder-has-checkbox .elfinder-cwd-file-wrapper {
    margin-right: 8px;
}

.elfinder-cwd-view-list .elfinder-cwd-filename {
    padding-top: 4px;
    padding-bottom: 4px;
    display: inline-block;
}

.elfinder-ltr .elfinder-cwd-view-list .elfinder-cwd-filename {
    padding-left: 23px;
}

.elfinder-rtl .elfinder-cwd-view-list .elfinder-cwd-filename {
    padding-right: 23px;
}

/* premissions/symlink marker */
.elfinder-cwd-view-list .elfinder-perms,
.elfinder-cwd-view-list .elfinder-lock,
.elfinder-cwd-view-list .elfinder-symlink {
    margin-top: -6px;
    opacity: .6;
    filter: Alpha(Opacity=60);
}

.elfinder-cwd-view-list .elfinder-perms {
    bottom: -4px;
}

.elfinder-cwd-view-list .elfinder-lock {
    top: 0px;
}

.elfinder-cwd-view-list .elfinder-symlink {
    bottom: -4px;
}

/* markers in ltr/rtl enviroment */
.elfinder-ltr .elfinder-cwd-view-list .elfinder-perms {
    left: 8px;
}

.elfinder-rtl .elfinder-cwd-view-list .elfinder-perms {
    right: -8px;
}

.elfinder-ltr .elfinder-cwd-view-list .elfinder-lock {
    left: 10px;
}

.elfinder-rtl .elfinder-cwd-view-list .elfinder-lock {
    right: -10px;
}

.elfinder-ltr .elfinder-cwd-view-list .elfinder-symlink {
    left: -7px;
}

.elfinder-rtl .elfinder-cwd-view-list .elfinder-symlink {
    right: 7px;
}

/* file icon */
.elfinder-cwd-view-list td .elfinder-cwd-icon {
    width: 16px;
    height: 16px;
    position: absolute;
    top: 50%;
    margin-top: -8px;
    background-image: url(../img/icons-small.png);
}

/* icon in ltr/rtl enviroment */
.elfinder-ltr .elfinder-cwd-view-list .elfinder-cwd-icon {
    left: 0;
}

.elfinder-rtl .elfinder-cwd-view-list .elfinder-cwd-icon {
    right: 0;
}

/* type badge, thumbnail image overlay */
.elfinder-cwd-view-list .elfinder-cwd-icon:before,
.elfinder-cwd-view-list .elfinder-cwd-icon:after {
    content: none;
}

/* table header resize handle */
.elfinder-cwd-view-list thead td .ui-resizable-handle {
    height: 100%;
    top: 6px;
}

.elfinder-touch .elfinder-cwd-view-list thead td .ui-resizable-handle {
    top: -4px;
    margin: 10px;
}

.elfinder-cwd-view-list thead td .ui-resizable-e {
    right: -7px;
}

.elfinder-cwd-view-list thead td .ui-resizable-w {
    left: -7px;
}

.elfinder-touch .elfinder-cwd-view-list thead td .ui-resizable-e {
    right: -16px;
}

.elfinder-touch .elfinder-cwd-view-list thead td .ui-resizable-w {
    left: -16px;
}

/* empty message */
.elfinder-cwd-wrapper-empty .elfinder-cwd-view-list.elfinder-cwd:after {
    margin-top: 0;
}

/* overlay message board */
.elfinder-cwd-message-board {
    position: absolute;
    position: -webkit-sticky;
    position: sticky;
    width: 100%;
    height: calc(100% - 0.01px); /* for Firefox scroll problem */
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    pointer-events: none;
    background-color: transparent;
}

/* overlay message board for trash */
.elfinder-cwd-wrapper-trash .elfinder-cwd-message-board {
    background-image: url(../img/trashmesh.png);
}

.elfinder-cwd-message-board .elfinder-cwd-trash {
    position: absolute;
    bottom: 0;
    font-size: 30px;
    width: 100%;
    text-align: right;
    display: none;
}

.elfinder-rtl .elfinder-cwd-message-board .elfinder-cwd-trash {
    text-align: left;
}

.elfinder-mobile .elfinder-cwd-message-board .elfinder-cwd-trash {
    font-size: 20px;
}

.elfinder-cwd-wrapper-trash .elfinder-cwd-message-board .elfinder-cwd-trash {
    display: block;
    opacity: .3;
}

/* overlay message board for expires */
.elfinder-cwd-message-board .elfinder-cwd-expires {
    position: absolute;
    bottom: 0;
    font-size: 24px;
    width: 100%;
    text-align: right;
    opacity: .25;
}

.elfinder-rtl .elfinder-cwd-message-board .elfinder-cwd-expires {
    text-align: left;
}

.elfinder-mobile .elfinder-cwd-message-board .elfinder-cwd-expires {
    font-size: 20px;
}

/* File: /css/dialog.css */
/*********************************************/
/*                DIALOGS STYLES             */
/*********************************************/

/* common dialogs class */
.std42-dialog {
    padding: 0;
    position: absolute;
    left: auto;
    right: auto;
    box-sizing: border-box;
}

.std42-dialog.elfinder-dialog-minimized {
    overFlow: hidden;
    position: relative;
    float: left;
    width: auto;
    cursor: pointer;
}

.elfinder-rtl .std42-dialog.elfinder-dialog-minimized {
    float: right;
}

.std42-dialog input {
    border: 1px solid;
}

/* titlebar */
.std42-dialog .ui-dialog-titlebar {
    border-left: 0 solid transparent;
    border-top: 0 solid transparent;
    border-right: 0 solid transparent;
    font-weight: normal;
    padding: .2em 1em;
}

.std42-dialog.elfinder-dialog-minimized .ui-dialog-titlebar {
    padding: 0 .5em;
    height: 20px;
}

.elfinder-touch .std42-dialog.elfinder-dialog-minimized .ui-dialog-titlebar {
    padding: .3em .5em;
}

.std42-dialog.ui-draggable-disabled .ui-dialog-titlebar {
    cursor: default;
}

.std42-dialog .ui-dialog-titlebar .ui-widget-header {
    border: none;
    cursor: pointer;
}

.std42-dialog .ui-dialog-titlebar span.elfinder-dialog-title {
    display: inherit;
    word-break: break-all;
}

.std42-dialog.elfinder-dialog-minimized .ui-dialog-titlebar span.elfinder-dialog-title {
    display: list-item;
    display: -moz-inline-box;
    white-space: nowrap;
    word-break: normal;
    overflow: hidden;
    word-wrap: normal;
    overflow-wrap: normal;
    max-width: -webkit-calc(100% - 24px);
    max-width: -moz-calc(100% - 24px);
    max-width: calc(100% - 24px);
}

.elfinder-touch .std42-dialog .ui-dialog-titlebar span.elfinder-dialog-title {
    padding-top: .15em;
}

.elfinder-touch .std42-dialog.elfinder-dialog-minimized .ui-dialog-titlebar span.elfinder-dialog-title {
    max-width: -webkit-calc(100% - 36px);
    max-width: -moz-calc(100% - 36px);
    max-width: calc(100% - 36px);
}

.std42-dialog .ui-dialog-titlebar .elfinder-titlebar-button {
    position: relative;
    float: left;
    top: 10px;
    left: -10px;
    right: 10px;
    width: 20px;
    height: 20px;
    padding: 1px;
    margin: -10px 1px 0 1px;
    background-color: transparent;
    background-image: none;
}

.elfinder-touch .std42-dialog .ui-dialog-titlebar .elfinder-titlebar-button {
    -moz-transform: scale(1.2);
    zoom: 1.2;
    padding-left: 6px;
    padding-right: 6px;
    height: 24px;
}

.std42-dialog .ui-dialog-titlebar .elfinder-titlebar-button-right {
    float: right;
}

.std42-dialog .ui-dialog-titlebar .elfinder-titlebar-button.elfinder-titlebar-button-right {
    left: 10px;
    right: -10px;
}

.std42-dialog .ui-dialog-titlebar .elfinder-titlebar-button .ui-icon {
    width: 17px;
    height: 17px;
    border-width: 1px;
    opacity: .7;
    filter: Alpha(Opacity=70);
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

.elfinder-mobile .std42-dialog .ui-dialog-titlebar .elfinder-titlebar-button .ui-icon {
    opacity: .5;
    filter: Alpha(Opacity=50);
}

.std42-dialog.elfinder-dialog-minimized .ui-dialog-titlebar .elfinder-titlebar-button .ui-icon {
    opacity: 1;
    filter: Alpha(Opacity=100);
}

.std42-dialog.elfinder-dialog-minimized .ui-dialog-titlebar select {
    display: none;
}

.elfinder-spinner {
    width: 14px;
    height: 14px;
    background: url(\"../img/spinner-mini.gif\") center center no-repeat;
    margin: 0 5px;
    display: inline-block;
    vertical-align: middle;
}

.elfinder-ltr .elfinder-spinner,
.elfinder-ltr .elfinder-spinner-text {
    float: left;
}

.elfinder-rtl .elfinder-spinner,
.elfinder-rtl .elfinder-spinner-text  {
    float: right;
}



/* resize handle for touch devices */
.elfinder-touch .std42-dialog.ui-dialog:not(ui-resizable-disabled) .ui-resizable-se {
    width: 12px;
    height: 12px;
    -moz-transform-origin: bottom right;
    -moz-transform: scale(1.5);
    zoom: 1.5;
    right: -7px;
    bottom: -7px;
    margin: 3px 7px 7px 3px;
    background-position: -64px -224px;
}

.elfinder-rtl .elfinder-dialog .ui-dialog-titlebar {
    text-align: right;
}

/* content */
.std42-dialog .ui-dialog-content {
    padding: .3em .5em;
}

.elfinder .std42-dialog .ui-dialog-content,
.elfinder .std42-dialog .ui-dialog-content * {
    -webkit-user-select: auto;
    -moz-user-select: text;
    -khtml-user-select: text;
    user-select: text;
}

.elfinder .std42-dialog .ui-dialog-content label {
    border: none;
}

/* buttons */
.std42-dialog .ui-dialog-buttonpane {
    border: 0 solid;
    margin: 0;
    padding: .5em;
    text-align: right;
}

.elfinder-rtl .std42-dialog .ui-dialog-buttonpane {
    text-align: left;
}

.std42-dialog .ui-dialog-buttonpane button {
    margin: .2em 0 0 .4em;
    padding: .2em;
    outline: 0px solid;
}

.std42-dialog .ui-dialog-buttonpane button span {
    padding: 2px 9px;
}

.std42-dialog .ui-dialog-buttonpane button span.ui-icon {
    padding: 2px;
}

.elfinder-dialog .ui-resizable-e,
.elfinder-dialog .ui-resizable-s {
    width: 0;
    height: 0;
}

.std42-dialog .ui-button input {
    cursor: pointer;
}

.std42-dialog select {
    border: 1px solid #ccc;
}

/* error/notify/confirm dialogs icon */
.elfinder-dialog-icon {
    position: absolute;
    width: 32px;
    height: 32px;
    left: 10px;
    top: 50%;
    margin-top: -15px;
    background: url(\"../img/dialogs.png\") 0 0 no-repeat;
}

.elfinder-rtl .elfinder-dialog-icon {
    left: auto;
    right: 10px;
}

/*********************** ERROR DIALOG **************************/

.elfinder-dialog-error .ui-dialog-content,
.elfinder-dialog-confirm .ui-dialog-content {
    padding-left: 56px;
    min-height: 35px;
}

.elfinder-rtl .elfinder-dialog-error .ui-dialog-content,
.elfinder-rtl .elfinder-dialog-confirm .ui-dialog-content {
    padding-left: 0;
    padding-right: 56px;
}

.elfinder-dialog-error .elfinder-err-var {
    word-break: break-all;
}

/*********************** NOTIFY DIALOG **************************/

.elfinder-dialog-notify {
    top : 36px;
    width : 280px;
}

.elfinder-ltr .elfinder-dialog-notify {
    right : 12px;
}

.elfinder-rtl .elfinder-dialog-notify {
    left : 12px;
}

.elfinder-dialog-notify .ui-dialog-titlebar {
    height: 5px;
    overflow: hidden;
}

.elfinder.elfinder-touch > .elfinder-dialog-notify .ui-dialog-titlebar {
    height: 10px;
}

.elfinder > .elfinder-dialog-notify .ui-dialog-titlebar .elfinder-titlebar-button {
    top: 2px;
}

.elfinder.elfinder-touch > .elfinder-dialog-notify .ui-dialog-titlebar .elfinder-titlebar-button {
    top: 4px;
}

.elfinder > .elfinder-dialog-notify .ui-dialog-titlebar .elfinder-titlebar-button {
    left: -18px;
    right: 18px;
}

.elfinder > .elfinder-dialog-notify .ui-dialog-titlebar .elfinder-titlebar-button.elfinder-titlebar-button-right {
    left: 18px;
    right: -18px;
}

.ui-dialog-titlebar .elfinder-ui-progressbar {
    position: absolute;
    top: 17px;
}

.elfinder-touch .ui-dialog-titlebar .elfinder-ui-progressbar {
    top: 26px;
}

.elfinder-dialog-notify.elfinder-titlebar-button-hide .ui-dialog-titlebar-close {
    display: none;
}

.elfinder-dialog-notify.elfinder-dialog-minimized.elfinder-titlebar-button-hide .ui-dialog-titlebar span.elfinder-dialog-title {
    max-width: initial;
}

.elfinder-dialog-notify .ui-dialog-content {
    padding: 0;
}

/* one notification container */
.elfinder-notify {
    border-bottom: 1px solid #ccc;
    position: relative;
    padding: .5em;

    text-align: center;
    overflow: hidden;
}

.elfinder-ltr .elfinder-notify {
    padding-left: 36px;
}

.elfinder-rtl .elfinder-notify {
    padding-right: 36px;
}

.elfinder-notify:last-child {
    border: 0 solid;
}

/* progressbar */
.elfinder-notify-progressbar {
    width: 180px;
    height: 8px;
    border: 1px solid #aaa;
    background: #f5f5f5;
    margin: 5px auto;
    overflow: hidden;
}

.elfinder-notify-progress {
    width: 100%;
    height: 8px;
    background: url(../img/progress.gif) center center repeat-x;
}

.elfinder-notify-progressbar, .elfinder-notify-progress {
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}

.elfinder-notify-cancel {
    position: relative;
    top: -18px;
    right: calc(-50% + 15px);
}

.elfinder-notify-cancel .ui-icon-close {
    background-position: -80px -128px;
    width: 18px;
    height: 18px;
    border-radius: 9px;
    border: none;
    background-position: -80px -128px;
    cursor: pointer;
}

/* icons */
.elfinder-dialog-icon-open,
.elfinder-dialog-icon-readdir,
.elfinder-dialog-icon-file {
    background-position: 0 -225px;
}

.elfinder-dialog-icon-reload {
    background-position: 0 -225px;
}

.elfinder-dialog-icon-mkdir {
    background-position: 0 -64px;
}

.elfinder-dialog-icon-mkfile {
    background-position: 0 -96px;
}

.elfinder-dialog-icon-copy,
.elfinder-dialog-icon-prepare,
.elfinder-dialog-icon-move {
    background-position: 0 -128px;
}

.elfinder-dialog-icon-upload {
    background-position: 0 -160px;
}

.elfinder-dialog-icon-chunkmerge {
    background-position: 0 -160px;
}

.elfinder-dialog-icon-rm {
    background-position: 0 -192px;
}

.elfinder-dialog-icon-download {
    background-position: 0 -260px;
}

.elfinder-dialog-icon-save {
    background-position: 0 -295px;
}

.elfinder-dialog-icon-rename,
.elfinder-dialog-icon-chkcontent {
    background-position: 0 -330px;
}

.elfinder-dialog-icon-zipdl,
.elfinder-dialog-icon-archive,
.elfinder-dialog-icon-extract {
    background-position: 0 -365px;
}

.elfinder-dialog-icon-search {
    background-position: 0 -402px;
}

.elfinder-dialog-icon-resize,
.elfinder-dialog-icon-loadimg,
.elfinder-dialog-icon-netmount,
.elfinder-dialog-icon-netunmount,
.elfinder-dialog-icon-chmod,
.elfinder-dialog-icon-preupload,
.elfinder-dialog-icon-url,
.elfinder-dialog-icon-dim {
    background-position: 0 -434px;
}

/*********************** CONFIRM DIALOG **************************/

.elfinder-dialog-confirm-applyall,
.elfinder-dialog-confirm-encoding {
    padding: 0 1em;
    margin: 0;
}

.elfinder-ltr .elfinder-dialog-confirm-applyall,
.elfinder-ltr .elfinder-dialog-confirm-encoding {
    text-align: left;
}

.elfinder-rtl .elfinder-dialog-confirm-applyall,
.elfinder-rtl .elfinder-dialog-confirm-encoding {
    text-align: right;
}

.elfinder-dialog-confirm .elfinder-dialog-icon {
    background-position: 0 -32px;
}

.elfinder-dialog-confirm .ui-dialog-buttonset {
    width: auto;
}

/*********************** FILE INFO DIALOG **************************/

.elfinder-info-title .elfinder-cwd-icon {
    float: left;
    width: 48px;
    height: 48px;
    margin-right: 1em;
}

.elfinder-rtl .elfinder-info-title .elfinder-cwd-icon {
    float: right;
    margin-right: 0;
    margin-left: 1em;
}

.elfinder-info-title strong {
    display: block;
    padding: .3em 0 .5em 0;
}

.elfinder-info-tb {
    min-width: 200px;
    border: 0 solid;
    margin: 1em .2em 1em .2em;
    width: 100%;
}

.elfinder-info-tb td {
    white-space: pre-wrap;
    padding: 2px;
}

.elfinder-info-tb td.elfinder-info-label {
    white-space: nowrap;
}

.elfinder-info-tb td.elfinder-info-hash {
    display: inline-block;
    word-break: break-all;
    max-width: 32ch;
}

.elfinder-ltr .elfinder-info-tb tr td:first-child {
    text-align: right;
}

.elfinder-ltr .elfinder-info-tb span {
    float: left;
}

.elfinder-rtl .elfinder-info-tb tr td:first-child {
    text-align: left;
}

.elfinder-rtl .elfinder-info-tb span {
    float: right;
}

.elfinder-info-tb a {
    outline: none;
    text-decoration: underline;
}

.elfinder-info-tb a:hover {
    text-decoration: none;
}

.elfinder-netmount-tb {
    margin: 0 auto;
}

.elfinder-netmount-tb select,
.elfinder-netmount-tb .elfinder-button-icon {
    cursor: pointer;
}

button.elfinder-info-button {
    margin: -3.5px 0;
    cursor: pointer;
}

/*********************** UPLOAD DIALOG **************************/

.elfinder-upload-dropbox {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    padding: 0.5em;
    border: 3px dashed #aaa;
    width: 9999px;
    height: 80px;
    overflow: hidden;
    word-break: keep-all;
}

.elfinder-upload-dropbox.ui-state-hover {
    background: #dfdfdf;
    border: 3px dashed #555;
}

.elfinder-upload-dialog-or {
    margin: .3em 0;
    text-align: center;
}

.elfinder-upload-dialog-wrapper {
    text-align: center;
}

.elfinder-upload-dialog-wrapper .ui-button {
    position: relative;
    overflow: hidden;
}

.elfinder-upload-dialog-wrapper .ui-button form {
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    opacity: 0;
    filter: Alpha(Opacity=0);
}

.elfinder-upload-dialog-wrapper .ui-button form input {
    padding: 50px 0 0;
    font-size: 3em;
    width: 100%;
}

/* dialog for elFinder itself */
.dialogelfinder .dialogelfinder-drag {
    border-left: 0 solid;
    border-top: 0 solid;
    border-right: 0 solid;
    font-weight: normal;
    padding: 2px 12px;
    cursor: move;
    position: relative;
    text-align: left;
}

.elfinder-rtl .dialogelfinder-drag {
    text-align: right;
}

.dialogelfinder-drag-close {
    position: absolute;
    top: 50%;
    margin-top: -8px;
}

.elfinder-ltr .dialogelfinder-drag-close {
    right: 12px;
}

.elfinder-rtl .dialogelfinder-drag-close {
    left: 12px;
}

/*********************** RM CONFIRM **************************/
.elfinder-rm-title {
    margin-bottom: .5ex;
}

.elfinder-rm-title .elfinder-cwd-icon {
    float: left;
    width: 48px;
    height: 48px;
    margin-right: 1em;
}

.elfinder-rtl .elfinder-rm-title .elfinder-cwd-icon {
    float: right;
    margin-right: 0;
    margin-left: 1em;
}

.elfinder-rm-title strong {
    display: block;
    /*word-wrap: break-word;*/
    white-space: pre-wrap;
    word-break: normal;
    overflow: hidden;
    text-overflow: ellipsis;
}

.elfinder-rm-title + br {
    display: none;
}

/* File: /css/fonts.css */
.elfinder-font-mono {
    font-family: \"Ricty Diminished\", \"Myrica M\", Consolas, \"Courier New\", Courier, Monaco, monospace;
    font-size: 1.1em;
}

.elfinder-contextmenu .elfinder-contextmenu-item span {
    font-size: .72em;
}

.elfinder-cwd-view-icons .elfinder-cwd-filename {
    font-size: .7em;
}

.elfinder-cwd-view-list td {
    font-size: .7em;
}

.std42-dialog .ui-dialog-titlebar {
    font-size: .82em;
}

.std42-dialog .ui-dialog-content {
    font-size: .72em;
}

.std42-dialog .ui-dialog-buttonpane {
    font-size: .76em;
}

.elfinder-info-tb {
    font-size: .9em;
}

.elfinder-upload-dropbox {
    font-size: 1.2em;
}

.elfinder-upload-dialog-or {
    font-size: 1.2em;
}

.dialogelfinder .dialogelfinder-drag {
    font-size: .9em;
}

.elfinder .elfinder-navbar {
    font-size: .72em;
}

.elfinder-place-drag .elfinder-navbar-dir {
    font-size: .9em;
}

.elfinder-quicklook-title {
    font-size: .7em;
    font-weight: normal;
}

.elfinder-quicklook-info-data {
    font-size: .72em;
}

.elfinder-quicklook-preview-text-wrapper {
    font-size: .9em;
}

.elfinder-button-menu-item {
    font-size: .72em;
}

.elfinder-button-search input {
    font-size: .8em;
}

.elfinder-statusbar div {
    font-size: .7em;
}

.elfinder-drag-num {
    font-size: 12px;
}

.elfinder-toast {
    font-size: .76em;
}


/* File: /css/navbar.css */
/*********************************************/
/*              NAVIGATION PANEL             */
/*********************************************/

/* container */
.elfinder .elfinder-navbar {
    /*box-sizing: border-box;*/
    width: 230px;
    padding: 3px 5px;
    background-image: none;
    border-top: 0 solid;
    border-bottom: 0 solid;
    overflow: auto;
    position: relative;
}

.elfinder .elfinder-navdock {
    box-sizing: border-box;
    width: 230px;
    height: auto;
    position: absolute;
    bottom: 0;
    overflow: auto;
}

.elfinder-navdock .ui-resizable-n {
    top: 0;
    height: 20px;
}

/* ltr/rtl enviroment */
.elfinder-ltr .elfinder-navbar {
    float: left;
    border-left: 0 solid;
}

.elfinder-rtl .elfinder-navbar {
    float: right;
    border-right: 0 solid;
}

.elfinder-ltr .ui-resizable-e {
    margin-left: 10px;
}

/* folders tree container */
.elfinder-tree {
    display: table;
    width: 100%;
    margin: 0 0 .5em 0;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

/* one folder wrapper */
.elfinder-navbar-wrapper, .elfinder-place-wrapper {
}

/* folder */
.elfinder-navbar-dir {
    position: relative;
    display: block;
    white-space: nowrap;
    padding: 3px 12px;
    margin: 0;
    outline: 0px solid;
    border: 1px solid transparent;
    cursor: default;
}

.elfinder-touch .elfinder-navbar-dir {
    padding: 12px 12px;
}

/* ltr/rtl enviroment */
.elfinder-ltr .elfinder-navbar-dir {
    padding-left: 35px;
}

.elfinder-rtl .elfinder-navbar-dir {
    padding-right: 35px;
}

/* arrow before icon */
.elfinder-navbar-arrow {
    width: 12px;
    height: 14px;
    position: absolute;
    display: none;
    top: 50%;
    margin-top: -8px;
    background-image: url(\"../img/arrows-normal.png\");
    background-repeat: no-repeat;
    /*\tborder:1px solid #111;*/
}

.elfinder-ltr .elfinder-navbar-arrow {
    left: 0;
}

.elfinder-rtl .elfinder-navbar-arrow {
    right: 0;
}

.elfinder-touch .elfinder-navbar-arrow {
    -moz-transform-origin: top left;
    -moz-transform: scale(1.4);
    zoom: 1.4;
    margin-bottom: 7px;
}

.elfinder-ltr.elfinder-touch .elfinder-navbar-arrow {
    left: -3px;
    margin-right: 20px;
}

.elfinder-rtl.elfinder-touch .elfinder-navbar-arrow {
    right: -3px;
    margin-left: 20px;
}

.ui-state-active .elfinder-navbar-arrow {
    background-image: url(\"../img/arrows-active.png\");
}

/* collapsed/expanded arrow view */
.elfinder-navbar-collapsed .elfinder-navbar-arrow {
    display: block;
}

.elfinder-subtree-chksubdir .elfinder-navbar-arrow {
    opacity: .25;
    filter: Alpha(Opacity=25);
}

/* arrow ltr/rtl enviroment */
.elfinder-ltr .elfinder-navbar-collapsed .elfinder-navbar-arrow {
    background-position: 0 4px;
}

.elfinder-rtl .elfinder-navbar-collapsed .elfinder-navbar-arrow {
    background-position: 0 -10px;
}

.elfinder-ltr .elfinder-navbar-expanded .elfinder-navbar-arrow,
.elfinder-rtl .elfinder-navbar-expanded .elfinder-navbar-arrow {
    background-position: 0 -21px;
}

/* folder icon */
.elfinder-navbar-icon {
    width: 16px;
    height: 16px;
    position: absolute;
    top: 50%;
    margin-top: -8px;
    background-image: url(\"../img/toolbar.png\");
    background-repeat: no-repeat;
    background-position: 0 -16px;
}

/* ltr/rtl enviroment */
.elfinder-ltr .elfinder-navbar-icon {
    left: 14px;
}

.elfinder-rtl .elfinder-navbar-icon {
    right: 14px;
}

/* places icon */
.elfinder-places .elfinder-navbar-root .elfinder-navbar-icon {
    background-position: 0 -704px;
}

/* root folder */
.elfinder-tree .elfinder-navbar-root-local .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-trash .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-ftp .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-sql .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-dropbox .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-googledrive .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-onedrive .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-box .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-zip .elfinder-navbar-icon,
.elfinder-tree .elfinder-navbar-root-network .elfinder-navbar-icon {
    background-position: 0 0;
    background-size: contain;
}

/* root icon of each volume \"\\9\" for IE8 trick */
.elfinder-tree .elfinder-navbar-root-local .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_local.svg\");
    background-image: url(\"../img/volume_icon_local.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-trash .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_trash.svg\");
    background-image: url(\"../img/volume_icon_trash.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-ftp .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_ftp.svg\");
    background-image: url(\"../img/volume_icon_ftp.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-sql .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_sql.svg\");
    background-image: url(\"../img/volume_icon_sql.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-dropbox .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_dropbox.svg\");
    background-image: url(\"../img/volume_icon_dropbox.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-googledrive .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_googledrive.svg\");
    background-image: url(\"../img/volume_icon_googledrive.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-onedrive .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_onedrive.svg\");
    background-image: url(\"../img/volume_icon_onedrive.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-box .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_box.svg\");
    background-image: url(\"../img/volume_icon_box.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-zip .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_zip.svg\");
    background-image: url(\"../img/volume_icon_zip.png\") \\9;
}

.elfinder-tree .elfinder-navbar-root-network .elfinder-navbar-icon {
    background-image: url(\"../img/volume_icon_network.svg\");
    background-image: url(\"../img/volume_icon_network.png\") \\9;
}

/* icon in active/hove/dropactive state */
.ui-state-active .elfinder-navbar-icon,
.elfinder-droppable-active .elfinder-navbar-icon,
.ui-state-hover .elfinder-navbar-icon {
    background-position: 0 -32px;
}

/* ltr/rtl enviroment */
.elfinder-ltr .elfinder-navbar-subtree {
    margin-left: 12px;
}

.elfinder-rtl .elfinder-navbar-subtree {
    margin-right: 12px;
}

/* spinner */
.elfinder-tree .elfinder-spinner {
    position: absolute;
    top: 50%;
    margin: -7px 0 0;
}

/* spinner ltr/rtl enviroment */
.elfinder-ltr .elfinder-tree .elfinder-spinner {
    left: 0;
    margin-left: -2px;
}

.elfinder-rtl .elfinder-tree .elfinder-spinner {
    right: 0;
    margin-right: -2px;
}

/* marker */
.elfinder-navbar .elfinder-perms,
.elfinder-navbar .elfinder-lock,
.elfinder-navbar .elfinder-symlink {
    opacity: .6;
    filter: Alpha(Opacity=60);
}

/* permissions marker */
.elfinder-navbar .elfinder-perms {
    bottom: -1px;
    margin-top: -8px;
}

/* locked marker */
.elfinder-navbar .elfinder-lock {
    top: -2px;
}

/* permissions/symlink markers ltr/rtl enviroment */
.elfinder-ltr .elfinder-navbar .elfinder-perms {
    left: 20px;
    transform: scale(0.8);
}

.elfinder-rtl .elfinder-navbar .elfinder-perms {
    right: 20px;
    transform: scale(0.8);
}

.elfinder-ltr .elfinder-navbar .elfinder-lock {
    left: 20px;
    transform: scale(0.8);
}

.elfinder-rtl .elfinder-navbar .elfinder-lock {
    right: 20px;
    transform: scale(0.8);
}

.elfinder-ltr .elfinder-navbar .elfinder-symlink {
    left: 8px;
    transform: scale(0.8);
}

.elfinder-rtl .elfinder-navbar .elfinder-symlink {
    right: 8px;
    transform: scale(0.8);
}

/* navbar input */
.elfinder-navbar input {
    width: 100%;
    border: 0px solid;
    margin: 0;
    padding: 0;
}

/* resizable */
.elfinder-navbar .ui-resizable-handle {
    width: 12px;
    background: transparent url('../img/resize.png') center center no-repeat;
}

.elfinder-nav-handle-icon {
    position: absolute;
    top: 50%;
    margin: -8px 2px 0 2px;
    opacity: .5;
    filter: Alpha(Opacity=50);
}

/* pager button */
.elfinder-navbar-pager {
    width: 100%;
    box-sizing: border-box;
    padding-top: 3px;
    padding-bottom: 3px;
}

.elfinder-touch .elfinder-navbar-pager {
    padding-top: 10px;
    padding-bottom: 10px;
}

.elfinder-places {
    border: none;
    margin: 0;
    padding: 0;
}

.elfinder-places.elfinder-droppable-active {
    /*border:1px solid #8cafed;*/
}

/* navbar swipe handle */
.elfinder-navbar-swipe-handle {
    position: absolute;
    top: 0px;
    height: 100%;
    width: 50px;
    pointer-events: none;
}

.elfinder-ltr .elfinder-navbar-swipe-handle {
    left: 0px;
    background: linear-gradient(to right,
    rgba(221, 228, 235, 1) 0,
    rgba(221, 228, 235, 0.8) 5px,
    rgba(216, 223, 230, 0.3) 8px,
    rgba(0, 0, 0, 0.1) 95%,
    rgba(0, 0, 0, 0) 100%);
}

.elfinder-rtl .elfinder-navbar-swipe-handle {
    right: 0px;
    background: linear-gradient(to left,
    rgba(221, 228, 235, 1) 0,
    rgba(221, 228, 235, 0.8) 5px,
    rgba(216, 223, 230, 0.3) 8px,
    rgba(0, 0, 0, 0.1) 95%,
    rgba(0, 0, 0, 0) 100%);
}

/* File: /css/places.css */
/*********************************************/
/*               PLACES STYLES               */
/*********************************************/
/* root extra icon */
.elfinder-navbar-root .elfinder-places-root-icon {
    position: absolute;
    top: 50%;
    margin-top: -9px;
    cursor: pointer;
}

.elfinder-ltr .elfinder-places-root-icon {
    right: 10px;
}

.elfinder-rtl .elfinder-places-root-icon {
    left: 10px;
}

.elfinder-navbar-expanded .elfinder-places-root-icon {
    display: block;
}

/* dragging helper base */
.elfinder-place-drag {
    font-size: 0.8em;
}

/* File: /css/quicklook.css */
/* quicklook window */
.elfinder-quicklook {
    position: absolute;
    background: url(\"../img/quicklook-bg.png\");
    overflow: hidden;
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
    border-radius: 7px;
    padding: 20px 0 40px 0;
}

.elfinder-navdock .elfinder-quicklook {
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    font-size: 90%;
    overflow: auto;
}

.elfinder-quicklook.elfinder-touch {
    padding: 30px 0 40px 0;
}

.elfinder-quicklook .ui-resizable-se {
    width: 14px;
    height: 14px;
    right: 5px;
    bottom: 3px;
    background: url(\"../img/toolbar.png\") 0 -496px no-repeat;
}

.elfinder-quicklook.elfinder-touch .ui-resizable-se {
    -moz-transform-origin: bottom right;
    -moz-transform: scale(1.5);
    zoom: 1.5;
}

/* quicklook fullscreen window */
.elfinder-quicklook.elfinder-quicklook-fullscreen {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    -webkit-background-clip: padding-box;
    padding: 0;
    background: #000;
    display: block;
}

/* hide titlebar in fullscreen mode */
.elfinder-quicklook-fullscreen .elfinder-quicklook-titlebar,
.elfinder-quicklook-fullscreen.elfinder-quicklook .ui-resizable-handle {
    display: none;
}

/* hide preview border in fullscreen mode */
.elfinder-quicklook-fullscreen .elfinder-quicklook-preview {
    border: 0 solid;
}

/*.elfinder-quicklook-fullscreen iframe {
\theight: 100%;
}*/

.elfinder-quicklook-cover {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
}

.elfinder-quicklook-cover.elfinder-quicklook-coverbg {
    /* background need to catch mouse event over browser plugin (eg PDF preview) */
    background-color: #fff;
    opacity: 0.000001;
    filter: Alpha(Opacity=0.0001);
}

/* quicklook titlebar */
.elfinder-quicklook-titlebar {
    text-align: center;
    background: #777;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 20px;
    -moz-border-radius-topleft: 7px;
    -webkit-border-top-left-radius: 7px;
    border-top-left-radius: 7px;
    -moz-border-radius-topright: 7px;
    -webkit-border-top-right-radius: 7px;
    border-top-right-radius: 7px;
    border: none;
    line-height: 1.2;
}

.elfinder-navdock .elfinder-quicklook-titlebar {
    -moz-border-radius-topleft: 0;
    -webkit-border-top-left-radius: 0;
    border-top-left-radius: 0;
    -moz-border-radius-topright: 0;
    -webkit-border-top-right-radius: 0;
    border-top-right-radius: 0;
    cursor: default;
}

.elfinder-touch .elfinder-quicklook-titlebar {
    height: 30px;
}

/* window title */
.elfinder-quicklook-title {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
}

.elfinder-touch .elfinder-quicklook-title {
    padding: 8px 0;
}

/* icon \"close\" in titlebar */
.elfinder-quicklook-titlebar-icon {
    position: absolute;
    left: 4px;
    top: 50%;
    margin-top: -8px;
    height: 16px;
    border: none;
}
.elfinder-touch .elfinder-quicklook-titlebar-icon {
    height: 22px;
}

.elfinder-quicklook-titlebar-icon .ui-icon {
    position: relative;
    margin: -9px 3px 0px 0px;
    cursor: pointer;
    border-radius: 10px;
    border: 1px solid;
    opacity: .7;
    filter: Alpha(Opacity=70);
}

.elfinder-quicklook-titlebar-icon .ui-icon.ui-icon-closethick {
    padding-left: 1px;
}

.elfinder-mobile .elfinder-quicklook-titlebar-icon .ui-icon {
    opacity: .6;
    filter: Alpha(Opacity=60);
}

.elfinder-touch .elfinder-quicklook-titlebar-icon .ui-icon {
    margin-top: -5px;
}

.elfinder-quicklook-titlebar-icon.elfinder-titlebar-button-right {
    left: auto;
    right: 4px;
    direction: rtl;
}

.elfinder-quicklook-titlebar-icon.elfinder-titlebar-button-right .ui-icon {
    margin: -9px 0px 0px 3px;
}

.elfinder-touch .elfinder-quicklook-titlebar .ui-icon {
    -moz-transform-origin: center center;
    -moz-transform: scale(1.2);
    zoom: 1.2;
}

.elfinder-touch .elfinder-quicklook-titlebar-icon .ui-icon {
    margin-right: 10px;
}

.elfinder-touch .elfinder-quicklook-titlebar-icon.elfinder-titlebar-button-right .ui-icon {
    margin-left: 10px;
}

/* main part of quicklook window */
.elfinder-quicklook-preview {
    overflow: hidden;
    position: relative;
    border: 0 solid;
    border-left: 1px solid transparent;
    border-right: 1px solid transparent;
    height: 100%;
}

.elfinder-navdock .elfinder-quicklook-preview {
    border-left: 0;
    border-right: 0;
}

.elfinder-quicklook-preview.elfinder-overflow-auto {
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

/* wrapper for file info/icon */
.elfinder-quicklook-info-wrapper {
    display: table;
    position: absolute;
    width: 100%;
    height: 100%;
    height: calc(100% - 80px);
    left: 0;
    top: 20px;
}

.elfinder-navdock .elfinder-quicklook-info-wrapper {
    height: calc(100% - 20px);
}

/* file info */
.elfinder-quicklook-info {
    display: table-cell;
    vertical-align: middle;
}

.elfinder-ltr .elfinder-quicklook-info {
    padding: 0 12px 0 112px;
}

.elfinder-rtl .elfinder-quicklook-info {
    padding: 0 112px 0 12px;
}

.elfinder-ltr .elfinder-navdock .elfinder-quicklook-info {
    padding: 0 0 0 80px;
}

.elfinder-rtl .elfinder-navdock .elfinder-quicklook-info {
    padding: 0 80px 0 0;
}

/* file name in info */
.elfinder-quicklook-info .elfinder-quicklook-info-data:first-child {
    color: #fff;
    font-weight: bold;
    padding-bottom: .5em;
}

/* other data in info */
.elfinder-quicklook-info-data {
    clear: both;
    padding-bottom: .2em;
    color: #fff;
}

.elfinder-quicklook-info-progress {
    width: 0;
    height: 4px;
    border-radius: 2px;
}

/* file icon */
.elfinder-quicklook .elfinder-cwd-icon {
    position: absolute;
    left: 32px;
    top: 50%;
    margin-top: -20px;
}

.elfinder-navdock .elfinder-quicklook .elfinder-cwd-icon {
    left: 16px;
}

.elfinder-rtl .elfinder-quicklook .elfinder-cwd-icon {
    left: auto;
    right: 32px;
}

.elfinder-rtl .elfinder-navdock .elfinder-quicklook .elfinder-cwd-icon {
    right: 6px;
}

.elfinder-quicklook .elfinder-cwd-icon:before {
    top: -10px;
}

.elfinder-ltr .elfinder-quicklook .elfinder-cwd-icon:before {
    left: -20px;
}

.elfinder-ltr .elfinder-navdock .elfinder-quicklook .elfinder-cwd-icon:before {
    left: -14px;
}

.elfinder-ltr .elfinder-quicklook .elfinder-cwd-icon:after {
    left: -42px;
}

.elfinder-ltr .elfinder-navdock .elfinder-quicklook .elfinder-cwd-icon:after {
    left: -12px;
}

.elfinder-rtl .elfinder-quicklook .elfinder-cwd-icon:before {
    left: auto;
    right: 40px;
}

.elfinder-rtl .elfinder-quicklook .elfinder-cwd-icon:after {
    left: auto;
    right: 42px;
}

/* image in preview */
.elfinder-quicklook-preview > img,
.elfinder-quicklook-preview > div > canvas {
    display: block;
    margin: auto;
}

/* navigation bar on quicklook window bottom */
.elfinder-quicklook-navbar {
    position: absolute;
    left: 50%;
    bottom: 4px;
    width: 140px;
    height: 32px;
    padding: 0px;
    margin-left: -70px;
    border: 1px solid transparent;
    border-radius: 19px;
    -moz-border-radius: 19px;
    -webkit-border-radius: 19px;
}

/* navigation bar in fullscreen mode */
.elfinder-quicklook-fullscreen .elfinder-quicklook-navbar {
    width: 188px;
    margin-left: -94px;
    padding: 5px;
    border: 1px solid #eee;
    background: #000;
    opacity: 0.4;
    filter: Alpha(Opacity=40);
}

/* show close icon in fullscreen mode */
.elfinder-quicklook-fullscreen .elfinder-quicklook-navbar-icon-close,
.elfinder-quicklook-fullscreen .elfinder-quicklook-navbar-separator {
    display: inline;
}

/* icons in navbar */
.elfinder-quicklook-navbar-icon {
    width: 32px;
    height: 32px;
    margin: 0 7px;
    float: left;
    background: url(\"../img/quicklook-icons.png\") 0 0 no-repeat;

}

/* fullscreen icon */
.elfinder-quicklook-navbar-icon-fullscreen {
    background-position: 0 -64px;
}

/* exit fullscreen icon */
.elfinder-quicklook-navbar-icon-fullscreen-off {
    background-position: 0 -96px;
}

/* prev file icon */
.elfinder-quicklook-navbar-icon-prev {
    background-position: 0 0;
}

/* next file icon */
.elfinder-quicklook-navbar-icon-next {
    background-position: 0 -32px;
}

/* close icon */
.elfinder-quicklook-navbar-icon-close {
    background-position: 0 -128px;
    display: none;
}

/* icons separator */
.elfinder-quicklook-navbar-separator {
    width: 1px;
    height: 32px;
    float: left;
    border-left: 1px solid #fff;
    display: none;
}

/* text encoding selector */
.elfinder-quicklook-encoding {
    height: 40px;
}
.elfinder-quicklook-encoding > select {
    color: #fff;
    background: #000;
    border: 0;
    font-size: 12px;
    max-width: 100px;
    display: inline-block;
    position: relative;
    top: 6px;
    left: 5px;
}
.elfinder-navdock .elfinder-quicklook .elfinder-quicklook-encoding {
    display: none;
}


/* text files preview wrapper */
.elfinder-quicklook-preview-text-wrapper {
    width: 100%;
    height: 100%;
    background: #fff;
    color: #222;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

/* archive files preview wrapper */
.elfinder-quicklook-preview-archive-wrapper {
    width: 100%;
    height: 100%;
    background: #fff;
    color: #222;
    font-size: 90%;
    overflow: auto;
    -webkit-overflow-scrolling: touch
}

/* archive files preview header */
.elfinder-quicklook-preview-archive-wrapper strong {
    padding: 0 5px;
}

/* text preview */
pre.elfinder-quicklook-preview-text,
pre.elfinder-quicklook-preview-text.prettyprint {
    width: auto;
    height: auto;
    margin: 0;
    padding: 3px 9px;
    border: none;
    overflow: visible;
    background: #fff;
    -o-tab-size: 4;
    -moz-tab-size: 4;
    tab-size: 4;
}

.elfinder-quicklook-preview-charsleft hr {
    border: none;
    border-top: dashed 1px;
}

.elfinder-quicklook-preview-charsleft span {
    font-size: 90%;
    font-style: italic;
    cursor: pointer;
}

/* html/pdf preview */
.elfinder-quicklook-preview-html,
.elfinder-quicklook-preview-pdf,
.elfinder-quicklook-preview-iframe {
    width: 100%;
    height: 100%;
    background: #fff;
    margin: 0;
    border: none;
    display: block;
}

/* swf preview container */
.elfinder-quicklook-preview-flash {
    width: 100%;
    height: 100%;
}

/* audio preview container */
.elfinder-quicklook-preview-audio {
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
}

/* audio preview using embed */
embed.elfinder-quicklook-preview-audio {
    height: 30px;
    background: transparent;
}

/* video preview container */
.elfinder-quicklook-preview-video {
    width: 100%;
    height: 100%;
}

/* video.js error message */
.elfinder-quicklook-preview .vjs-error .vjs-error-display .vjs-modal-dialog-content {
    font-size: 12pt;
    padding: 0;
    color: #fff;
}

/* allow user select */
.elfinder .elfinder-quicklook .elfinder-quicklook-info *,
.elfinder .elfinder-quicklook .elfinder-quicklook-preview * {
    -webkit-user-select: auto;
    -moz-user-select: text;
    -khtml-user-select: text;
    user-select: text;
}

/* File: /css/statusbar.css */
/******************************************************************/
/*                           STATUSBAR STYLES                     */
/******************************************************************/

/* statusbar container */
.elfinder-statusbar {
    display: flex;
    justify-content: space-between;
    cursor: default;
    text-align: center;
    font-weight: normal;
    padding: .2em .5em;
    border-right: 0 solid transparent;
    border-bottom: 0 solid transparent;
    border-left: 0 solid transparent;
}

.elfinder-statusbar:before,
.elfinder-statusbar:after {
    display: none;
}

.elfinder-statusbar span {
    vertical-align: bottom;
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
}

.elfinder-statusbar span.elfinder-path-other {
    flex-shrink: 0;
    text-overflow: clip;
    -o-text-overflow: clip;
}

.elfinder-statusbar span.ui-state-hover,
.elfinder-statusbar span.ui-state-active {
    border: none;
}

.elfinder-statusbar span.elfinder-path-cwd {
    cursor: default;
}

/* path in statusbar */
.elfinder-path {
    display: flex;
    order: 1;
    flex-grow: 1;
    cursor: pointer;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    max-width: 30%\\9;
}

.elfinder-ltr .elfinder-path {
    text-align: left;
    float: left\\9;
}

.elfinder-rtl .elfinder-path {
    text-align: right;
    float: right\\9;
}

/* path in workzone (case of swipe to navbar close) */
.elfinder-workzone-path {
    position: relative;
}

.elfinder-workzone-path .elfinder-path {
    position: relative;
    font-size: .75em;
    font-weight: normal;
    float: none;
    max-width: none;
    overflow: hidden;
    overflow-x: hidden;
    text-overflow: initial;
    -o-text-overflow: initial;
}

.elfinder-mobile .elfinder-workzone-path .elfinder-path {
    overflow: auto;
    overflow-x: scroll;
}

.elfinder-ltr .elfinder-workzone-path .elfinder-path {
    margin-left: 24px;
}

.elfinder-rtl .elfinder-workzone-path .elfinder-path {
    margin-right: 24px;
}

.elfinder-workzone-path .elfinder-path span {
    display: inline-block;
    padding: 5px 3px;
}

.elfinder-workzone-path .elfinder-path span.elfinder-path-cwd {
    font-weight: bold;
}

.elfinder-workzone-path .elfinder-path span.ui-state-hover,
.elfinder-workzone-path .elfinder-path span.ui-state-active {
    border: none;
}

.elfinder-workzone-path .elfinder-path-roots {
    position: absolute;
    top: 0;
    width: 24px;
    height: 20px;
    padding: 2px;
    border: none;
    overflow: hidden;
}

.elfinder-ltr .elfinder-workzone-path .elfinder-path-roots {
    left: 0;
}

.elfinder-rtl .elfinder-workzone-path .elfinder-path-roots {
    right: 0;
}

/* total/selected size in statusbar */
.elfinder-stat-size {
    order: 3;
    flex-grow: 1;
    overflow: hidden;
    white-space: nowrap;
}

.elfinder-ltr .elfinder-stat-size {
    text-align: right;
    float: right\\9;
}

.elfinder-rtl .elfinder-stat-size {
    text-align: left;
    float: left\\9;
}

/* info of current selected item */
.elfinder-stat-selected {
    order: 2;
    margin: 0 .5em;
    white-space: nowrap;
    overflow: hidden;
}

/* File: /css/toast.css */
/*
 * CSS for Toastr
 * Copyright 2012-2015
 * Authors: John Papa, Hans Fjällemark, and Tim Ferrell.
 * All Rights Reserved.
 * Use, reproduction, distribution, and modification of this code is subject to the terms and
 * conditions of the MIT license, available at http://www.opensource.org/licenses/mit-license.php
 *
 * ARIA Support: Greta Krafsig
 *
 * Project: https://github.com/CodeSeven/toastr
 */

.elfinder .elfinder-toast {
    position: absolute;
    top: 12px;
    right: 12px;
    max-width: 90%;
    cursor: default;
}

.elfinder .elfinder-toast > div {
    position: relative;
    pointer-events: auto;
    overflow: hidden;
    margin: 0 0 6px;
    padding: 8px 16px 8px 50px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    border-radius: 3px 3px 3px 3px;
    background-position: 15px center;
    background-repeat: no-repeat;
    -moz-box-shadow: 0 0 12px #999999;
    -webkit-box-shadow: 0 0 12px #999999;
    box-shadow: 0 0 12px #999999;
    color: #FFFFFF;
    opacity: 0.9;
    filter: alpha(opacity=90);
    background-color: #030303;
    text-align: center;
}

.elfinder .elfinder-toast > .toast-info {
    background-color: #2F96B4;
    background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=\") !important;
}

.elfinder .elfinder-toast > .toast-error {
    background-color: #BD362F;
    background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=\") !important;
}

.elfinder .elfinder-toast > .toast-success {
    background-color: #51A351;
    background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==\") !important;
}

.elfinder .elfinder-toast > .toast-warning {
    background-color: #F89406;
    background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=\") !important;
}

.elfinder .elfinder-toast > div button.ui-button {
    background-image: none;
    margin-top: 8px;
    padding: .5em .8em;
}

.elfinder .elfinder-toast > .toast-success button.ui-button {
    background-color: green;
    color: #FFF;
}

.elfinder .elfinder-toast > .toast-success button.ui-button.ui-state-hover {
    background-color: #add6ad;
    color: #254b25;
}

.elfinder .elfinder-toast > .toast-info button.ui-button {
    background-color: #046580;
    color: #FFF;
}

.elfinder .elfinder-toast > .toast-info button.ui-button.ui-state-hover {
    background-color: #7DC6DB;
    color: #046580;
}

.elfinder .elfinder-toast > .toast-warning button.ui-button {
    background-color: #dd8c1a;
    color: #FFF;
}

.elfinder .elfinder-toast > .toast-warning button.ui-button.ui-state-hover {
    background-color: #e7ae5e;
    color: #422a07;
}

/* File: /css/toolbar.css */
/*********************************************/
/*               TOOLBAR STYLES              */
/*********************************************/
/* toolbar container */
.elfinder-toolbar {
    padding: 4px 0 3px 0;
    border-left: 0 solid transparent;
    border-top: 0 solid transparent;
    border-right: 0 solid transparent;
    max-height: 50%;
    overflow-y: auto;
}

/* container for button's group */
.elfinder-buttonset {
    margin: 1px 4px;
    float: left;
    background: transparent;
    padding: 0;
    overflow: hidden;
}

/*.elfinder-buttonset:first-child { margin:0; }*/

/* button */
.elfinder .elfinder-button {
    min-width: 16px;
    height: 16px;
    margin: 0;
    padding: 4px;
    float: left;
    overflow: hidden;
    position: relative;
    border: 0 solid;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    line-height: 1;
    cursor: default;
}

.elfinder-rtl .elfinder-button {
    float: right;
}

.elfinder-touch .elfinder-button {
    min-width: 20px;
    height: 20px;
}

.elfinder .ui-icon-search {
    cursor: pointer;
}

/* separator between buttons, required for berder between button with ui color */
.elfinder-toolbar-button-separator {
    float: left;
    padding: 0;
    height: 24px;
    border-top: 0 solid;
    border-right: 0 solid;
    border-bottom: 0 solid;
    width: 0;
}

.elfinder-rtl .elfinder-toolbar-button-separator {
    float: right;
}

.elfinder-touch .elfinder-toolbar-button-separator {
    height: 28px;
}

/* change icon opacity^ not button */
.elfinder .elfinder-button.ui-state-disabled {
    opacity: 1;
    filter: Alpha(Opacity=100);
}

.elfinder .elfinder-button.ui-state-disabled .elfinder-button-icon,
.elfinder .elfinder-button.ui-state-disabled .elfinder-button-text {
    opacity: .4;
    filter: Alpha(Opacity=40);
}

/* rtl enviroment */
.elfinder-rtl .elfinder-buttonset {
    float: right;
}

/* icon inside button */
.elfinder-button-icon {
    width: 16px;
    height: 16px;
    /*display:block;*/
    display: inline-block;
    background: url('../img/toolbar.png') no-repeat;
}

.elfinder-button-text {
    position: relative;
    display: inline-block;
    top: -4px;
    margin: 0 2px;
    font-size: 12px;
}

.elfinder-touch .elfinder-button-icon {
    transform: scale(1.25);
    transform-origin: top left;
}

.elfinder-rtl.elfinder-touch .elfinder-button-icon {
    transform-origin: top right;
}

.elfinder-touch .elfinder-button-text {
    transform: translate(3px, 3px);
    top: -5px;
}

.elfinder-rtl.elfinder-touch .elfinder-button-text {
    transform: translate(-3px, 3px);
}

.elfinder-touch .elfinder-button-icon.elfinder-contextmenu-extra-icon {
    transform: scale(2);
    transform-origin: 12px 8px;
}

.elfinder-rtl.elfinder-touch .elfinder-button-icon.elfinder-contextmenu-extra-icon {
    transform-origin: 4px 8px;
}

/* buttons icons */
.elfinder-button-icon-home {
    background-position: 0 0;
}

.elfinder-button-icon-back {
    background-position: 0 -112px;
}

.elfinder-button-icon-forward {
    background-position: 0 -128px;
}

.elfinder-button-icon-up {
    background-position: 0 -144px;
}

.elfinder-button-icon-dir {
    background-position: 0 -16px;
}

.elfinder-button-icon-opendir {
    background-position: 0 -32px;
}

.elfinder-button-icon-reload {
    background-position: 0 -160px;
}

.elfinder-button-icon-open {
    background-position: 0 -176px;
}

.elfinder-button-icon-mkdir {
    background-position: 0 -192px;
}

.elfinder-button-icon-mkfile {
    background-position: 0 -208px;
}

.elfinder-button-icon-rm {
    background-position: 0 -832px;
}

.elfinder-button-icon-trash {
    background-position: 0 -224px;
}

.elfinder-button-icon-restore {
    background-position: 0 -816px;
}

.elfinder-button-icon-copy {
    background-position: 0 -240px;
}

.elfinder-button-icon-cut {
    background-position: 0 -256px;
}

.elfinder-button-icon-paste {
    background-position: 0 -272px;
}

.elfinder-button-icon-getfile {
    background-position: 0 -288px;
}

.elfinder-button-icon-duplicate {
    background-position: 0 -304px;
}

.elfinder-button-icon-rename {
    background-position: 0 -320px;
}

.elfinder-button-icon-edit {
    background-position: 0 -336px;
}

.elfinder-button-icon-quicklook {
    background-position: 0 -352px;
}

.elfinder-button-icon-upload {
    background-position: 0 -368px;
}

.elfinder-button-icon-download {
    background-position: 0 -384px;
}

.elfinder-button-icon-info {
    background-position: 0 -400px;
}

.elfinder-button-icon-extract {
    background-position: 0 -416px;
}

.elfinder-button-icon-archive {
    background-position: 0 -432px;
}

.elfinder-button-icon-view {
    background-position: 0 -448px;
}

.elfinder-button-icon-view-list {
    background-position: 0 -464px;
}

.elfinder-button-icon-help {
    background-position: 0 -480px;
}

.elfinder-button-icon-resize {
    background-position: 0 -512px;
}

.elfinder-button-icon-link {
    background-position: 0 -528px;
}

.elfinder-button-icon-search {
    background-position: 0 -561px;
}

.elfinder-button-icon-sort {
    background-position: 0 -577px;
}

.elfinder-button-icon-rotate-r {
    background-position: 0 -625px;
}

.elfinder-button-icon-rotate-l {
    background-position: 0 -641px;
}

.elfinder-button-icon-netmount {
    background-position: 0 -688px;
}

.elfinder-button-icon-netunmount {
    background-position: 0 -96px;
}

.elfinder-button-icon-places {
    background-position: 0 -704px;
}

.elfinder-button-icon-chmod {
    background-position: 0 -48px;
}

.elfinder-button-icon-accept {
    background-position: 0 -736px;
}

.elfinder-button-icon-menu {
    background-position: 0 -752px;
}

.elfinder-button-icon-colwidth {
    background-position: 0 -768px;
}

.elfinder-button-icon-fullscreen {
    background-position: 0 -784px;
}

.elfinder-button-icon-unfullscreen {
    background-position: 0 -800px;
}

.elfinder-button-icon-empty {
    background-position: 0 -848px;
}

.elfinder-button-icon-undo {
    background-position: 0 -864px;
}

.elfinder-button-icon-redo {
    background-position: 0 -880px;
}

.elfinder-button-icon-preference {
    background-position: 0 -896px;
}

.elfinder-button-icon-mkdirin {
    background-position: 0 -912px;
}

.elfinder-button-icon-selectall {
    background-position: 0 -928px;
}

.elfinder-button-icon-selectnone {
    background-position: 0 -944px;
}

.elfinder-button-icon-selectinvert {
    background-position: 0 -960px;
}

.elfinder-button-icon-opennew {
    background-position: 0 -976px;
}

.elfinder-button-icon-hide {
    background-position: 0 -992px;
}

.elfinder-button-icon-text {
    background-position: 0 -1008px;
}

/* button icon mirroring for rtl */
.elfinder-rtl .elfinder-button-icon-back,
.elfinder-rtl .elfinder-button-icon-forward,
.elfinder-rtl .elfinder-button-icon-getfile,
.elfinder-rtl .elfinder-button-icon-help,
.elfinder-rtl .elfinder-button-icon-redo,
.elfinder-rtl .elfinder-button-icon-rename,
.elfinder-rtl .elfinder-button-icon-search,
.elfinder-rtl .elfinder-button-icon-undo,
.elfinder-rtl .elfinder-button-icon-view-list,
.elfinder-rtl .ui-icon-search {
    -ms-transform: scale(-1, 1);
    -webkit-transform: scale(-1, 1);
    transform: scale(-1, 1);
}

.elfinder-rtl.elfinder-touch .elfinder-button-icon-back,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-forward,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-getfile,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-help,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-redo,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-rename,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-search,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-undo,
.elfinder-rtl.elfinder-touch .elfinder-button-icon-view-list,
.elfinder-rtl.elfinder-touch .ui-icon-search {
    -ms-transform: scale(-1.25, 1.25) translateX(16px);
    -webkit-transform: scale(-1.25, 1.25) translateX(16px);
    transform: scale(-1.25, 1.25) translateX(16px);
}

/* button with dropdown menu*/
.elfinder .elfinder-menubutton {
    overflow: visible;
}

/* button with spinner icon */
.elfinder-button-icon-spinner {
    background: url(\"../img/spinner-mini.gif\") center center no-repeat;
}

/* menu */
.elfinder-button-menu {
    position: absolute;
    margin-top: 24px;
    padding: 3px 0;
    overflow-y: auto;
}

.elfinder-touch .elfinder-button-menu {
    margin-top: 30px;
}

/* menu item */
.elfinder-button-menu-item {
    white-space: nowrap;
    cursor: default;
    padding: 5px 19px;
    position: relative;
}

.elfinder-touch .elfinder-button-menu-item {
    padding: 12px 19px
}

/* fix hover ui class */
.elfinder-button-menu .ui-state-hover {
    border: 0 solid;
}

.elfinder-button-menu-item-separated {
    border-top: 1px solid #ccc;
}

.elfinder-button-menu-item .ui-icon {
    width: 16px;
    height: 16px;
    position: absolute;
    left: 2px;
    top: 50%;
    margin-top: -8px;
    display: none;
}

.elfinder-button-menu-item-selected .ui-icon {
    display: block;
}

.elfinder-button-menu-item-selected-asc .ui-icon-arrowthick-1-s {
    display: none;
}

.elfinder-button-menu-item-selected-desc .ui-icon-arrowthick-1-n {
    display: none;
}

/* hack for upload button */
.elfinder-button form {
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
    filter: Alpha(Opacity=0);
    cursor: pointer;
}

.elfinder .elfinder-button form input {
    background: transparent;
    cursor: default;
}

/* search \"button\" */
.elfinder .elfinder-button-search {
    border: 0 solid;
    background: transparent;
    padding: 0;
    margin: 1px 4px;
    height: auto;
    min-height: 26px;
    width: 70px;
    overflow: visible;
}

.elfinder .elfinder-button-search.ui-state-active {
    width: 220px;
}

/* search \"pull down menu\" */
.elfinder .elfinder-button-search-menu {
    font-size: 8pt;
    text-align: center;
    width: auto;
    min-width: 180px;
    position: absolute;
    top: 30px;
    padding-right: 5px;
    padding-left: 5px;
}

.elfinder-ltr .elfinder-button-search-menu {
    right: 22px;
    left: auto;
}

.elfinder-rtl .elfinder-button-search-menu {
    right: auto;
    left: 22px;
}

.elfinder-touch .elfinder-button-search-menu {
    top: 34px;
}

.elfinder .elfinder-button-search-menu div {
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    margin-bottom: 5px;
    display: table;
}

.elfinder .elfinder-button-search-menu div .ui-state-hover {
    border: 1px solid;
}

/* ltr/rte enviroment */
.elfinder-ltr .elfinder-button-search {
    float: right;
    margin-right: 10px;
}

.elfinder-rtl .elfinder-button-search {
    float: left;
    margin-left: 10px;
}

.elfinder-rtl .ui-controlgroup > .ui-controlgroup-item {
    float: right;
}

/* search text field */
.elfinder-button-search input[type=text] {
    box-sizing: border-box;
    width: 100%;
    height: 26px;
    padding: 0 20px;
    line-height: 22px;
    border: 0 solid;
    border: 1px solid #aaa;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12px;
    border-radius: 12px;
    outline: 0px solid;
}

.elfinder-button-search input::-ms-clear {
    display: none;
}

.elfinder-touch .elfinder-button-search input {
    height: 30px;
    line-height: 28px;
}

.elfinder-rtl .elfinder-button-search input {
    direction: rtl;
}

/* icons */
.elfinder-button-search .ui-icon {
    position: absolute;
    height: 18px;
    top: 50%;
    margin: -8px 4px 0 4px;
    opacity: .6;
    filter: Alpha(Opacity=60);
}

.elfinder-button-search-menu .ui-checkboxradio-icon {
    display: none;
}

/* search/close icons */
.elfinder-ltr .elfinder-button-search .ui-icon-search {
    left: 0;
}

.elfinder-rtl .elfinder-button-search .ui-icon-search {
    right: 0;
}

.elfinder-ltr .elfinder-button-search .ui-icon-close {
    right: 0;
}

.elfinder-rtl .elfinder-button-search .ui-icon-close {
    left: 0;
}

/* toolbar swipe handle */
.elfinder-toolbar-swipe-handle {
    position: absolute;
    top: 0px;
    left: 0px;
    height: 50px;
    width: 100%;
    pointer-events: none;
    background: linear-gradient(to bottom,
    rgba(221, 228, 235, 1) 0,
    rgba(221, 228, 235, 0.8) 2px,
    rgba(216, 223, 230, 0.3) 5px,
    rgba(0, 0, 0, 0.1) 95%,
    rgba(0, 0, 0, 0) 100%);
}

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/elfinder.full.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/elfinder.full.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/elfinder.full.css");
    }
}
