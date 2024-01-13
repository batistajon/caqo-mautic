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

/* @bundles/CoreBundle/Assets/css/app.css */
class __TwigTemplate_856bda85f70f7e6932e133817ec15ae2795ddeae7b0b65e43f767f17e9d45b19 extends Template
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
        echo "@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hrIqY.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Zdcg.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhrIqY.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhrIqY.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUuhs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUuhs.ttf) format('truetype');
}
html,
body {
  width: 100%;
  height: 100%;
}
body {
  overflow-y: scroll;
}
body > #app-wrapper {
  overflow: hidden;
  position: relative;
  height: auto;
  min-height: 100%;
  width: 100%;
}
.sidebar-left-open {
  overflow: hidden;
}
.sidebar-left-open body > section#app-wrapper {
  overflow-x: hidden;
}
@media (min-width: 768px) {
  body {
    overflow-x: hidden;
  }
}
@media (min-width: 970px) {
  .modal {
    overflow-y: auto;
  }
  .modal-open {
    overflow: auto;
  }
}
.csstransforms3d.sidebar-open-ltr #app-header.navbar {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr #app-header.navbar {
  left: 230px;
}
.csstransforms3d.sidebar-open-rtl #app-header.navbar {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl #app-header.navbar {
  left: -230px;
  right: 230px;
}
#app-header.navbar {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  background-color: #ffffff;
  float: left;
  z-index: 1005;
  min-height: 60px;
  border-width: 0;
  border-radius: 0;
  margin-bottom: 0;
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
}
.header-fixed #app-header.navbar {
  position: fixed;
  right: 0;
  left: 0;
  top: 0;
  box-shadow: 0 5px 5px -5px rgba(0, 0, 0, 0.15), 0 1px 0 rgba(0, 0, 0, 0.03);
}
.header-fixed #app-header.navbar ~ #app-content > .content-body {
  padding-top: 60px;
}
#app-header.navbar .navbar-nocollapse:before,
#app-header.navbar .navbar-nocollapse:after {
  content: \" \";
  display: table;
}
#app-header.navbar .navbar-nocollapse:after {
  clear: both;
}
#app-header.navbar .navbar-nocollapse .navbar-header {
  height: 60px;
}
#app-header.navbar .navbar-nocollapse .navbar-header .navbar-toggle {
  display: inline-block;
  float: left;
  margin: 0;
  border-width: 0;
  padding: 24px 15px;
}
#app-header.navbar .navbar-nocollapse .navbar-header .navbar-toggle .icon-bar {
  margin-left: auto;
  margin-right: auto;
  background-color: rgba(0, 0, 0, 0.6);
  height: 2px;
  width: 18px;
  border-radius: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-header .navbar-toggle .icon-bar + .icon-bar {
  margin-top: 3px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav {
  float: left;
  margin: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li {
  float: left;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a {
  color: rgba(0, 0, 0, 0.6);
  line-height: 60px;
  padding-top: 0;
  padding-bottom: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:before,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:after {
  content: \" \";
  display: table;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:after {
  clear: both;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a .sli {
  top: 1px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > img,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .img-wrapper {
  display: inline-block;
  width: 32px;
  height: 32px;
  margin-top: -11px;
  margin-bottom: -11px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .badge,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .label {
  position: absolute;
  z-index: 1;
  top: 12px;
  right: 8px;
  font-size: 10px;
  padding: 0 4px;
  line-height: 16px;
  height: 16px;
  min-width: 16px;
  border-radius: 16px;
  -webkit-box-shadow: 0 0 0 2px #ffffff;
  box-shadow: 0 0 0 2px #ffffff;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .badge.pull-right,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .label.pull-right {
  left: auto;
  right: 4px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .bullet {
  position: absolute;
  z-index: 1;
  top: 18px;
  right: 15px;
  -webkit-box-shadow: 0 0 0 2px #ffffff;
  box-shadow: 0 0 0 2px #ffffff;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .bullet.pull-right {
  left: auto;
  right: 4px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:hover {
  color: rgba(0, 0, 0, 0.7);
  background-color: transparent;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:active,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:focus,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a.active {
  color: rgba(0, 0, 0, 0.7);
  background-color: #f5f5f5;
  outline: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-custom {
  position: static;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-custom .dropdown-menu {
  width: 320px;
  overflow: hidden;
}
@media (max-width: 480px) {
  #app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-custom .dropdown-menu {
    width: auto !important;
    left: 15px !important;
    right: 15px !important;
  }
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open .dropdown-menu {
  position: absolute;
  top: 100%;
  margin-top: 5px;
  left: 15px;
  float: left;
  background-color: #fff;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.06);
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a {
  color: rgba(0, 0, 0, 0.7);
  background-color: #f5f5f5;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a:hover,
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a:focus {
  color: rgba(0, 0, 0, 0.7);
  background-color: #f5f5f5;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a > .badge,
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a > .bullet,
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a > .label {
  -webkit-box-shadow: 0 0 0 2px #f5f5f5;
  box-shadow: 0 0 0 2px #f5f5f5;
}
#app-header.navbar .navbar-nocollapse .navbar-form {
  background-color: #ffffff;
  padding-top: 0;
  padding-bottom: 0;
  margin: 0;
  position: absolute;
  z-index: 1000;
  top: -100%;
  left: 0;
  right: 0;
  border-width: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: top 0.3s ease;
  -o-transition: top 0.3s ease;
  transition: top 0.3s ease;
}
#app-header.navbar .navbar-nocollapse .navbar-form.open {
  top: 0;
  -webkit-transition: top 0.3s ease;
  -o-transition: top 0.3s ease;
  transition: top 0.3s ease;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-group,
#app-header.navbar .navbar-nocollapse .navbar-form .input-group {
  margin-top: 14px;
  margin-bottom: 14px;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-group .fa,
#app-header.navbar .navbar-nocollapse .navbar-form .input-group .fa {
  color: rgba(0, 0, 0, 0.6);
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control {
  background-color: rgba(0, 0, 0, 0.08);
  border-color: transparent;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control::-moz-placeholder {
  color: rgba(0, 0, 0, 0.5);
  opacity: 1;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control:-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.5);
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.5);
}
#app-header.navbar .navbar-nocollapse .navbar-left {
  float: left !important;
}
#app-header.navbar .navbar-nocollapse .navbar-left .open .dropdown-menu {
  left: 0;
  right: auto;
}
#app-header.navbar .navbar-nocollapse .navbar-left .open.dropdown-custom .dropdown-menu {
  left: 15px;
  right: auto;
}
#app-header.navbar .navbar-nocollapse .navbar-right {
  float: right !important;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open > a:after {
  z-index: 1003;
  bottom: -7px;
  margin-left: -8px;
  border-width: 0 8px 8px;
  border-color: transparent transparent #fff;
  position: absolute;
  content: \"\";
  left: 50%;
  width: 0;
  height: 0;
  border-style: solid;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open > a:before {
  z-index: 1002;
  bottom: -6px;
  margin-left: -9px;
  border-width: 0 9px 9px;
  border-color: transparent transparent rgba(0, 0, 0, 0.06);
  position: absolute;
  content: \"\";
  left: 50%;
  width: 0;
  height: 0;
  border-style: solid;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open .dropdown-menu {
  left: auto;
  right: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open.dropdown-custom .dropdown-menu {
  left: auto;
  right: 15px;
}
@media (min-width: 768px) {
  .header-fixed #app-header.navbar ~ .app-sidebar {
    padding-top: 60px;
  }
  .sidebar-minimized #app-header.navbar {
    left: 60px !important;
  }
  #app-header.navbar .navbar-nocollapse .navbar-form {
    position: static;
    float: left;
  }
}
.csstransforms3d.sidebar-open-ltr .app-sidebar.sidebar-left {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr .app-sidebar.sidebar-left {
  left: 0;
}
.csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-right {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-left {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-right {
  right: 0;
}
.no-csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-left {
  left: -230px;
}
.app-sidebar {
  position: fixed;
  z-index: 990;
  top: 0;
  bottom: 0;
}
.app-sidebar.sidebar-left {
  width: 230px;
  left: -230px;
  background-color: #1d232b;
  box-shadow: inset -1px 0 0 0 rgba(0, 0, 0, 0.05);
  color: rgba(255, 255, 255, 0.55);
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.app-sidebar.sidebar-left .sidebar-header,
.app-sidebar.sidebar-left .sidebar-footer {
  -webkit-transition: width 0.3s ease;
  -o-transition: width 0.3s ease;
  transition: width 0.3s ease;
  width: 230px;
  background-color: #4E5D9D;
}
.app-sidebar.sidebar-left .sidebar-header > .mautic-brand > .mautic-logo-text {
  opacity: 1;
  margin-left: 3px;
  -webkit-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  -o-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  transition: opacity .3s ease .1s, margin-left 0s ease .2s;
}
.app-sidebar.sidebar-left .sidebar-header > .mautic-brand {
  -webkit-transition: padding-left 0.3s ease;
  -o-transition: padding-left 0.3s ease;
  transition: padding-left 0.3s ease;
}
.app-sidebar.sidebar-left .sidebar-header.minimized {
  padding-left: 3px;
  padding-right: 3px;
}
.app-sidebar.sidebar-left .sidebar-content {
  padding-right: 1px;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.nav-group:after {
  content: '';
  position: absolute;
  right: 0;
  left: 50px;
  bottom: 0;
  border-bottom: 1px solid #202830;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > a {
  color: rgba(255, 255, 255, 0.5);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > a:hover,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > a:focus {
  background-color: #1d232b;
  color: rgba(255, 255, 255, 0.75);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.active > a,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.open > a {
  background-color: #1d232b;
  color: rgba(255, 255, 255, 0.75);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.active > .nav-submenu,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.open > .nav-submenu {
  background-color: #171c22;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu {
  background-color: #1a2026;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu:after {
  background-color: #212831;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li:after {
  background-color: #222a32;
  box-shadow: 0 0 0 2px #1a2026;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a {
  color: rgba(255, 255, 255, 0.5);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a:hover,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a:focus {
  color: rgba(255, 255, 255, 0.8);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li.active > a,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li.open > a {
  color: rgba(255, 255, 255, 0.8);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav .nav-heading {
  color: rgba(255, 255, 255, 0.25);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav .nav-divider {
  background-color: rgba(255, 255, 255, 0.06);
}
.app-sidebar.sidebar-left .nav.sidebar-left-dark,
.app-sidebar.sidebar-left .nav.sidebar-left-dark > li > a:hover {
  background: #0c0f12;
}
.app-sidebar.sidebar-right {
  width: 230px;
  right: -230px;
  background-color: #1d232b;
  box-shadow: inset 1px 0 0 0 rgba(0, 0, 0, 0.05);
  color: rgba(255, 255, 255, 0.55);
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.app-sidebar.sidebar-right .sidebar-header,
.app-sidebar.sidebar-right .sidebar-footer {
  width: 230px;
  background-color: #232b34;
}
.app-sidebar.sidebar-right .sidebar-content {
  padding-left: 1px;
  top: 60px;
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li.nav-group:after {
  content: '';
  position: absolute;
  right: 0;
  left: 50px;
  bottom: 0;
  border-bottom: 1px solid #202830;
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > a {
  color: rgba(255, 255, 255, 0.5);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > a:hover,
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > a:focus {
  background-color: #1d232b;
  color: rgba(255, 255, 255, 0.75);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li.active > a,
.app-sidebar.sidebar-right .nav-sidebar > .nav > li.open > a {
  background-color: #1d232b;
  color: rgba(255, 255, 255, 0.75);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li.active > .nav-submenu,
.app-sidebar.sidebar-right .nav-sidebar > .nav > li.open > .nav-submenu {
  background-color: #171c22;
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu {
  background-color: #1a2026;
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu:after {
  background-color: #212831;
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu > li:after {
  background-color: #222a32;
  box-shadow: 0 0 0 2px #1a2026;
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu > li > a {
  color: rgba(255, 255, 255, 0.5);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu > li > a:hover,
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu > li > a:focus {
  color: rgba(255, 255, 255, 0.8);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu > li.active > a,
.app-sidebar.sidebar-right .nav-sidebar > .nav > li > .nav-submenu > li.open > a {
  color: rgba(255, 255, 255, 0.8);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav .nav-heading {
  color: rgba(255, 255, 255, 0.25);
}
.app-sidebar.sidebar-right .nav-sidebar > .nav .nav-divider {
  background-color: rgba(255, 255, 255, 0.06);
}
.app-sidebar .sidebar-header {
  z-index: 100;
  height: 60px;
  padding-left: 15px;
  padding-right: 15px;
}
.header-fixed .app-sidebar .sidebar-header {
  position: absolute;
  top: 0;
  box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.06);
}
.app-sidebar .sidebar-header ~ .sidebar-content {
  top: 60px;
}
.app-sidebar .sidebar-footer {
  position: absolute;
  bottom: 0;
  z-index: 9;
  height: 46px;
  padding-left: 15px;
  padding-right: 15px;
  box-shadow: 0 -1px 0 0 rgba(0, 0, 0, 0.07);
}
.app-sidebar .sidebar-footer .form-control {
  color: #999999;
}
.app-sidebar .sidebar-footer ~ .sidebar-content {
  bottom: 46px;
}
.app-sidebar .sidebar-content {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
}
.app-sidebar .sidebar-content .nav.nav-tabs {
  border-bottom: 1px solid #1b2128;
  box-shadow: none;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li {
  margin-bottom: 0;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li > a {
  border-width: 0;
  border-radius: 0;
  margin-right: 0;
  padding-top: 12px;
  padding-bottom: 12px;
  color: rgba(255, 255, 255, 0.45);
  background-color: transparent;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li > a:hover,
.app-sidebar .sidebar-content .nav.nav-tabs > li > a:focus {
  color: rgba(255, 255, 255, 0.85);
  background-color: transparent;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a {
  overflow: visible;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a,
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a:hover,
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a:focus {
  color: rgba(255, 255, 255, 0.85);
  background-color: rgba(0, 0, 0, 0.06);
}
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a:after {
  top: auto;
  bottom: -1px;
  height: 1px;
}
.app-sidebar .nav-sidebar > .nav > li > a {
  overflow: hidden;
  padding: 12px 20px;
  -webkit-transition: all 0.15s ease;
  -o-transition: all 0.15s ease;
  transition: all 0.15s ease;
}
.app-sidebar .nav-sidebar > .nav > li > a .text {
  -webkit-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  -o-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  opacity: 1;
  margin-left: 0;
  position: relative;
  top: -1px;
  display: block;
}
.app-sidebar .nav-sidebar > .nav > li > a .icon {
  font-weight: normal;
  font-size: 14px;
  min-width: 26px;
  display: block;
}
.app-sidebar .nav-sidebar > .nav > li > a .arrow {
  -webkit-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  -o-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  opacity: 1;
  margin-left: 0;
  font-family: 'FontAwesome';
  position: relative;
  top: 1px;
  display: block;
}
.app-sidebar .nav-sidebar > .nav > li > a .arrow:after {
  content: \"\\f0da\";
}
.app-sidebar .nav-sidebar > .nav > li.open > a .arrow:after,
.app-sidebar .nav-sidebar > .nav > li.active > a .arrow:after {
  content: \"\\f0d7\";
}
.app-sidebar .nav-sidebar > .nav > li.open > a .icon,
.app-sidebar .nav-sidebar > .nav > li.active > a .icon {
  color: #FDB933;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu {
  position: relative;
  padding-left: 50px;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu:after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 26px;
  z-index: 1;
  width: 1px;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li {
  position: relative;
  list-style: none;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 11px;
  left: -27px;
  width: 7px;
  height: 7px;
  border-radius: 7px;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li.active:after {
  background-color: #FDB933 !important;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li > a {
  display: block;
  padding: 5px 20px 5px 0px;
  -webkit-transition: all 0.15s ease;
  -o-transition: all 0.15s ease;
  transition: all 0.15s ease;
}
.app-sidebar .nav-sidebar > .nav .nav-heading {
  text-transform: uppercase;
  padding: 10px 18px;
}
.app-sidebar .nav-sidebar > .nav .nav-heading:first-child {
  padding-top: 20px;
}
.app-sidebar .nav-sidebar .sidebar-minimizer > .direction:after {
  font-family: 'FontAwesome';
  content: '\\f053';
}
.app-sidebar .nav-sidebar .sidebar-minimizer.active .direction:after {
  content: '\\f054';
}
@media (min-width: 768px) {
  .app-sidebar.sidebar-left {
    left: 0;
  }
  .app-sidebar.sidebar-left ~ #app-header.navbar {
    left: 230px;
  }
  .app-sidebar.sidebar-left ~ #app-content {
    margin-left: 230px;
  }
  .sidebar-left-collapse .app-sidebar.sidebar-left ~ #app-content {
    margin-left: 60px;
  }
  .app-sidebar.sidebar-left ~ #app-footer {
    margin-left: 230px;
  }
  .sidebar-left-collapse .app-sidebar.sidebar-left ~ #app-footer {
    margin-left: 60px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left {
    width: 60px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar {
    margin-top: 10px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > a {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li.nav-heading,
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > a .arrow,
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > a .badge,
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > a .text,
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > a .label {
    /* override default margin-left transition as any delay throws Chrome off */
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
    /* hide everything but the icon; using margin and opacity since display can't be transitioned */
    margin-left: -500px;
    opacity: 0;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > a .icon {
    min-width: 0;
    width: 100%;
    /* text-align: center; */
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu {
    display: none;
    height: auto !important;
    position: absolute;
    z-index: -1;
    top: 0;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 30px;
    min-width: 180px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu:after {
    left: 16px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li:after {
    left: -17px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .nav-sidebar > .nav > li.hover > .nav-submenu {
    display: block;
    left: 60px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .sidebar-content > .scroll-wrapper,
  .sidebar-minimized .app-sidebar.sidebar-left .sidebar-content > .scroll-wrapper > .scroll-content {
    overflow: visible !important;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .sidebar-content > .scroll-wrapper > .scroll-bar {
    display: none !important;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .sidebar-header {
    /* padding: 0; */
    width: 60px;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .sidebar-header > .mautic-brand > .mautic-logo-text {
    opacity: 0;
    margin-left: -500px;
    /* override default margin-left transition as any delay throws Chrome off */
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
  .sidebar-minimized .app-sidebar.sidebar-left .sidebar-header > .mautic-brand {
    padding: 0;
  }
}
.csstransforms3d.sidebar-open-ltr #app-content {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr #app-content {
  left: 230px;
}
.csstransforms3d.sidebar-open-rtl #app-content {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl #app-content {
  left: -230px;
}
#app-content {
  position: relative;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#app-content:before,
#app-content:after {
  content: \" \";
  display: table;
}
#app-content:after {
  clear: both;
}
#app-content > .content-body {
  width: 100%;
  float: left;
}
#app-content > .content-body .container-fluid.container-xs {
  padding-left: 5px;
  padding-right: 5px;
}
#app-content > .content-body .container-fluid.container-sm {
  padding-left: 10px;
  padding-right: 10px;
}
#app-content > .content-body .container-fluid.container-md {
  padding-left: 15px;
  padding-right: 15px;
}
#app-content > .content-body .container-fluid.container-lg {
  padding-left: 20px;
  padding-right: 20px;
}
#app-content.content-only {
  width: 100%;
}
#app-content.content-only .page-header {
  padding-top: 30px;
  padding-left: 30px;
  margin: -15px -15px 0 -15px;
}
#app-content.content-only.container {
  padding-left: 0;
  padding-right: 0;
}
@media (min-width: 768px) {
  #app-content {
    position: static;
  }
  .sidebar-minimized #app-content {
    margin-left: 60px !important;
  }
}
.csstransforms3d.sidebar-open-ltr #app-footer {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr #app-footer {
  left: 230px;
}
.csstransforms3d.sidebar-open-rtl #app-footer {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl #app-footer {
  left: -230px;
  right: 230px;
}
#app-footer {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1000;
  height: 46px;
  line-height: 46px;
  background-color: #fbfbfb;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#app-footer ~ #app-content > .content-body {
  padding-bottom: 46px;
}
#app-footer:after {
  content: \"\";
  position: absolute;
  z-index: -1;
  left: 0;
  right: 0;
  top: -1px;
  height: inherit;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}
@media (min-width: 768px) {
  .sidebar-minimized #app-footer {
    margin-left: 60px !important;
  }
}
hr,
.hr-expand {
  margin-top: 15px;
  margin-bottom: 15px;
  border: 0;
  border-top: 1px solid #ebedf0;
}
hr.hr-w-2,
.hr-expand.hr-w-2 {
  border-width: 2px;
}
hr.hr-w-3,
.hr-expand.hr-w-3 {
  border-width: 3px;
}
.hr-expand a.arrow {
  display: inline-block;
  position: relative;
  top: -1px;
  z-index: 1;
  background-color: #f8f8f8;
  padding: 0 15px;
  margin: 0 15px;
  border: 1px solid #ebedf0;
  border-top-width: 0;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.03);
  font-size: 9px;
  line-height: 22px;
  text-transform: uppercase;
}
.hr-expand a.arrow > .caret {
  margin-left: 0;
  border-top: 0px;
  border-bottom: 4px solid;
}
.hr-expand a.collapsed > .caret {
  border-top: 4px solid;
  border-bottom: 0px;
}
.hr-expand.hr-w-2 a.arrow {
  top: -2px;
}
.hr-expand.hr-w-3 a.arrow {
  top: -3px;
}
a:hover {
  cursor: pointer;
}
a:hover,
a:focus {
  text-decoration: none;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-top: 0;
  margin-bottom: 0;
  color: inherit;
}
.ellipsis {
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.fs-base {
  font-size: 13px;
}
.fs-2 {
  font-size: 2px !important;
}
.fs-4 {
  font-size: 4px !important;
}
.fs-6 {
  font-size: 6px !important;
}
.fs-8 {
  font-size: 8px !important;
}
.fs-10 {
  font-size: 10px !important;
}
.fs-11 {
  font-size: 11px !important;
}
.fs-12 {
  font-size: 12px !important;
}
.fs-14 {
  font-size: 14px !important;
}
.fs-16 {
  font-size: 16px !important;
}
.fs-18 {
  font-size: 18px !important;
}
.fs-20 {
  font-size: 20px !important;
}
.fs-22 {
  font-size: 22px !important;
}
.fs-24 {
  font-size: 24px !important;
}
.fs-26 {
  font-size: 26px !important;
}
.fs-28 {
  font-size: 28px !important;
}
.fs-30 {
  font-size: 30px !important;
}
.fs-32 {
  font-size: 32px !important;
}
.fs-34 {
  font-size: 34px !important;
}
.fs-36 {
  font-size: 36px !important;
}
.fs-38 {
  font-size: 38px !important;
}
.fs-40 {
  font-size: 40px !important;
}
.fs-42 {
  font-size: 42px !important;
}
.fs-44 {
  font-size: 44px !important;
}
.fs-46 {
  font-size: 46px !important;
}
.fs-48 {
  font-size: 48px !important;
}
.fs-50 {
  font-size: 50px !important;
}
.fs-52 {
  font-size: 52px !important;
}
.fs-54 {
  font-size: 54px !important;
}
.fs-56 {
  font-size: 56px !important;
}
.page-header {
  background-color: #fbfbfb;
  padding: 15px;
  margin: 0;
  border-bottom: 0;
  border-bottom: 1px solid #fff;
  box-shadow: inset 0 -1px 0 0 #e5e8eb;
}
.page-header .breadcrumb {
  padding: 5px 0;
  background-color: inherit;
  border-radius: 0;
}
.container .page-header {
  margin: -15px -15px 15px -15px;
}
.container.container-xs .page-header {
  margin: -5px -5px 5px -5px;
}
.container.container-sm .page-header {
  margin: -10px -10px 10px -10px;
}
.container.container-md .page-header {
  margin: -15px -15px 15px -15px;
}
.container.container-lg .page-header {
  margin: -20px -20px 20px -20px;
}
.fw-b {
  font-weight: 700;
}
.fw-sb {
  font-weight: 600;
}
.fw-n {
  font-weight: 400;
}
.fw-t {
  font-weight: 300;
}
.tt-u {
  text-transform: uppercase;
}
.text-muted {
  color: #8393a2;
}
a.text-muted:hover,
a.text-muted:focus {
  color: #68798a;
}
.text-white {
  color: #fff;
}
a.text-white:hover {
  color: #e6e6e6;
}
.text-white.light-xs {
  color: #ffffff;
}
a.text-white.light-xs:hover {
  color: #ffffff;
}
.text-white.dark-xs {
  color: #d9d9d9;
}
a.text-white.dark-xs:hover {
  color: #cccccc;
}
.text-white.dark-sm {
  color: #b3b3b3;
}
a.text-white.dark-sm:hover {
  color: #a6a6a6;
}
.text-white.dark-md {
  color: #8c8c8c;
}
a.text-white.dark-md:hover {
  color: #808080;
}
.text-white.dark-lg {
  color: #666666;
}
a.text-white.dark-lg:hover {
  color: #595959;
}
.text-primary {
  color: #4E5D9D;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #3d497b;
}
.text-success {
  color: #00B49C;
}
a.text-success:hover {
  color: #008170;
}
.text-success.light-xs {
  color: #01ffdd;
}
a.text-success.light-xs:hover {
  color: #00e7c8;
}
.text-success.dark-xs {
  color: #00685a;
}
a.text-success.dark-xs:hover {
  color: #004e44;
}
.text-success.dark-sm {
  color: #001b17;
}
a.text-success.dark-sm:hover {
  color: #000201;
}
.text-success.dark-md {
  color: #000000;
}
a.text-success.dark-md:hover {
  color: #000000;
}
.text-success.dark-lg {
  color: #000000;
}
a.text-success.dark-lg:hover {
  color: #000000;
}
.text-warning {
  color: #FDB933;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #fba702;
}
.text-danger {
  color: #F86B4F;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #f6421e;
}
.text-info {
  color: #35B4B9;
}
a.text-info:hover,
a.text-info:focus {
  color: #2a8d91;
}
.text-twitter {
  color: #55acee;
}
a.text-twitter:hover,
a.text-twitter:focus {
  color: #2795e9;
}
.text-facebook {
  color: #3b5998;
}
a.text-facebook:hover,
a.text-facebook:focus {
  color: #2d4373;
}
.text-google {
  color: #dd4b39;
}
a.text-google:hover,
a.text-google:focus {
  color: #c23321;
}
blockquote {
  padding-left: 40px;
  border-width: 0px;
}
blockquote > p {
  position: relative;
  font-style: italic;
  font-size: 18px !important;
}
blockquote > p:before {
  position: absolute;
  top: -1px;
  margin-left: -25px;
  font-family: \"FontAwesome\";
  font-size: 18px;
  content: \"\\f10d\";
  color: #ebedf0;
}
blockquote > p:after {
  position: absolute;
  bottom: -1px;
  margin-left: 5px;
  font-family: \"FontAwesome\";
  font-size: 18px;
  content: \"\\f10e\";
  color: #ebedf0;
}
.blockquote-reverse {
  padding-left: 20px;
  padding-right: 40px;
  border-width: 0px;
}
.touch .scroll-content {
  height: 100%;
  overflow-y: scroll;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  -webkit-overflow-scrolling: touch;
}
.no-touch .scroll-wrapper,
.no-touch .scroll-wrapper > .scroll-content {
  height: 100%;
}
.no-touch .scroll-wrapper > .scroll-rail {
  display: none !important;
}
.no-touch .scroll-wrapper > .scroll-bar {
  background-color: gray !important;
  right: 3px !important;
}
.btn,
.btn:active,
.btn.active {
  outline: 0;
}
.btn .fa {
  min-width: 13px;
}
.btn > .caret {
  margin-top: -1px;
}
.btn.btn-rounded {
  border-radius: 32px;
  padding-left: 16px;
  padding-right: 16px;
}
.btn.btn-circle {
  width: 32px;
  padding-left: 0;
  padding-right: 0;
  border-radius: 50%;
}
.btn.btn-circle.btn-lg {
  width: 43px;
}
.btn.btn-circle.btn-sm {
  width: 27px;
}
.btn.btn-circle.btn-xs {
  width: 19px;
}
.btn.btn-outline {
  background-color: transparent;
  border-width: 1px;
}
.btn.btn-outline.btn-primary {
  color: #4E5D9D;
}
.btn.btn-outline.btn-success {
  color: #00B49C;
}
.btn.btn-outline.btn-warning {
  color: #FDB933;
}
.btn.btn-outline.btn-danger {
  color: #F86B4F;
}
.btn.btn-outline.btn-info {
  color: #35B4B9;
}
.btn-link {
  font-weight: 600;
}
.btn-link:hover,
.btn-link:focus {
  text-decoration: none;
}
.btn-group .btn ~ .btn,
.btn-group .btn ~ .btn-group,
.btn-group .btn-group ~ .btn,
.btn-group .btn-group ~ .btn-group {
  margin-left: -1px;
}
.alert-dismissible .close,
.alert-dismissible .close {
  top: -1px;
}
.alert-primary {
  background: #aeb6d7;
}
.alert-secondary {
  background: #feedcb;
}
.alert-tertiary {
  background: #a3e2e4;
}
.alert-growl {
  background: rgba(0, 0, 0, 0.8);
  color: #FFFFFF;
  border: 1px solid #000;
}
.alert-growl-container {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 100000;
}
.alert-growl-container .alert-growl {
  margin-bottom: 5px;
}
.alert-growl .close {
  font-size: 13px;
  color: #fff;
  margin-left: 10px;
}
.alert .close {
  font-size: 13px;
  margin-left: 10px;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
  background: #4e5e9e;
  box-shadow: #495894 0px 1px 3px 0px inset;
}
.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
  background: #fdb933 !important;
}
.content-body .cke_chrome {
  background: #f8f8f8;
  border: 1px solid #f0f0f0;
}
.content-body .cke_bottom,
.content-body .cke_top {
  background: #f8f8f8;
}
.ck-mentions span.custom-item {
  color: #000000;
}
.ck-mentions span.custom-item.ck-on,
.ck-mentions span.custom-item.ck-on span.custom-item-id {
  color: #ffffff;
}
.ck-mentions span.custom-item span.custom-item-id {
  margin-left: 10px;
  font-size: smaller;
  color: #cccccc;
}
.ck.ck-dropdown__panel {
  max-height: 180px;
  overflow-y: auto;
}
.ck-editor__editable:not(.ck-editor__nested-editable) {
  min-height: 200px;
}
.ck.ck-balloon-panel.ck-balloon-panel_caret_se.ck-balloon-panel_visible {
  z-index: 99999 !important;
}
a.media {
  display: block;
}
.media > a {
  display: block;
}
.media.read {
  opacity: 0.8;
}
.media.read a {
  color: #52606d;
}
.media.new {
  background-color: #f6f7f8;
}
.notification .media-body {
  display: table-cell;
}
.media-body {
  display: block;
}
.media-heading {
  display: block;
}
.media-heading > .bullet {
  margin-top: -1px;
}
.media-list.media-list-feed {
  position: relative;
}
.media-list.media-list-feed .media {
  overflow: visible;
}
.media-list.media-list-feed .media > .media-object {
  position: relative;
  width: 28px;
  text-align: center;
}
.media-list.media-list-feed .media > .media-object:before {
  content: '';
  position: absolute;
  top: -200%;
  bottom: -200%;
  width: 1px;
  left: 50%;
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9InJnYigyNTUsIDI1NSwgMjU1KSIgc3RvcC1vcGFjaXR5PSIwIi8+PHN0b3Agb2Zmc2V0PSIxMCUiIHN0b3AtY29sb3I9IiNlNWU1ZTUiIHN0b3Atb3BhY2l0eT0iMSIvPjxzdG9wIG9mZnNldD0iOTAlIiBzdG9wLWNvbG9yPSIjZTVlNWU1IiBzdG9wLW9wYWNpdHk9IjEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9InJnYigyMjksIDIyOSwgMjI5KSIgc3RvcC1vcGFjaXR5PSIwIi8+PC9saW5lYXJHcmFkaWVudD48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
}
.media-list.media-list-feed .media > .media-object > .figure {
  position: relative;
  z-index: 5;
  display: inline-block;
  width: 14px;
  height: 14px;
  text-align: center;
  font-size: 12px;
  border-radius: 50%;
  background-color: #dce0e5;
}
.media-list.media-list-feed .media > .media-object > .figure.featured {
  width: 20px;
  height: 20px;
  line-height: 19px;
}
.media-list.media-list-feed .media:first-child > .media-object:before {
  top: 0;
}
.media-list.media-list-contact > .media-heading {
  padding: 15px 15px 5px;
  font-weight: 600;
  font-size: 12px;
  margin-bottom: 0;
}
.media-list.media-list-contact > .media {
  margin: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.media-list.media-list-contact > .media a {
  padding: 10px 15px;
}
.media-list.media-list-contact > .media a:hover,
.media-list.media-list-contact > .media a:focus {
  background-color: transparent;
}
.media-list.media-list-bubble > .media {
  padding: 15px;
}
.media-list.media-list-bubble > .media:after {
  display: none;
}
.media-list.media-list-bubble > .media .media-object {
  position: relative;
  float: left;
  margin-right: 15px;
}
.media-list.media-list-bubble > .media .media-object:after {
  content: \"\";
  position: absolute;
  top: 7px;
  right: -18px;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 10px 10px 10px 0;
  border-color: transparent #f3f3f3 transparent transparent;
}
.media-list.media-list-bubble > .media .media-body .media-text {
  display: inline-block;
  padding: 8px;
  color: #52606d;
  background-color: #f3f3f3;
  border-radius: 3px;
}
.media-list.media-list-bubble > .media.media-right .media-object {
  float: right;
  margin-left: 15px;
  margin-right: 0px;
}
.media-list.media-list-bubble > .media.media-right .media-object:after {
  left: -18px;
  right: auto;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #4E5D9D;
}
.media-list.media-list-bubble > .media.media-right .media-body {
  text-align: right;
}
.media-list.media-list-bubble > .media.media-right .media-body .media-text {
  color: #f2f2f2;
  background-color: #4E5D9D;
}
.extra-menu {
  height: 60px;
  padding-top: 20px;
  position: absolute;
  right: 15px;
}
.extra-menu a {
  font-size: 1.1em;
  color: rgba(255, 255, 255, 0.55);
}
.extra-menu a:hover {
  color: #fff;
}
.list-group-item > a {
  position: relative;
  z-index: 1;
  display: block;
}
a.list-group-item:hover,
a.list-group-item:focus {
  z-index: 2;
}
label.list-group-item {
  color: #555;
}
label.list-group-item .list-group-item-heading {
  color: #333;
}
label.list-group-item:hover,
label.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
.caret {
  margin-top: -1px;
}
.dropdown-menu {
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
}
.dropdown-menu .divider {
  margin: 5px 0;
}
.dropdown-menu .panel {
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
  border-width: 0;
  margin-bottom: 0;
  margin-top: -5px;
  margin-bottom: -5px;
}
.dropdown-menu .panel .panel-heading {
  border-radius: 0;
}
.dropdown-menu > li > a {
  position: relative;
  z-index: 1;
  margin-top: -1px;
  padding: 5px 20px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
}
.dropdown-menu > li > a .fa {
  min-width: 15px;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  z-index: 2;
  border-color: #f3f3f3;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #596776;
  background-color: #f0f0f0;
}
.scrollable-menu {
  height: auto;
  max-height: 200px;
  overflow-x: hidden;
}
ul.dropdown-menu-form {
  padding: 0 5px 0 30px;
  max-height: 300px;
  overflow-y: auto;
}
.nav > li > a {
  font-weight: normal;
}
.nav > li > a .text,
.nav > li > a .icon,
.nav > li > a .arrow {
  line-height: 18px;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: transparent;
}
.nav .nav-divider {
  background-color: rgba(0, 0, 0, 0.05);
}
.nav .nav-heading {
  font-size: 12px;
  font-weight: 600;
  padding: 10px 18px;
  padding-bottom: 5px;
  color: #a0acb8;
}
.nav-tabs {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  -webkit-box-shadow: inset 0 -3px 8px -3px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 -3px 8px -3px rgba(0, 0, 0, 0.05);
}
.nav-tabs > li > a {
  line-height: 20px;
}
.nav-tabs > li.active > a {
  overflow: hidden;
  border-top-color: transparent;
}
.nav-tabs > li.active > a:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background-color: #4E5D9D;
}
/*
.tab-content {
  > .tab-pane {
    border: 1px solid @nav-tabs-active-link-hover-border-color;
    border-top-width: 0;
    border-bottom-right-radius: @nav-pills-border-radius;
    border-bottom-left-radius: @nav-pills-border-radius;
  }
}
*/
.nav-pills > li + li {
  margin-left: 5px;
}
.notes {
  overflow: hidden;
  height: auto;
  position: relative;
  padding: 0px;
  list-style-type: none;
}
.notes li > .panel > .panel-body {
  display: block !important;
  width: 100%;
  table-layout: fixed;
  border-spacing: 0;
}
.notes li > .panel > .panel-body [class*=\" icon\"],
.notes li > .panel > .panel-body [class^=\"icon\"] {
  position: static;
  padding: 0;
}
.notes li > .panel > .panel-body [class*=\" icon\"].height-auto:before,
.notes li > .panel > .panel-body [class^=\"icon\"].height-auto:before {
  content: \"\";
  position: absolute;
  width: inherit;
  top: 0;
  bottom: 0;
  z-index: -1;
  background-color: inherit;
  border: inherit;
}
.notes li > .panel > .panel-body [class*=\" icon\"].bdr-l.height-auto:before,
.notes li > .panel > .panel-body [class^=\"icon\"].bdr-l.height-auto:before {
  margin-left: -1px;
}
.notes li > .panel > .panel-body [class*=\" icon\"].bdr-r.height-auto:before,
.notes li > .panel > .panel-body [class^=\"icon\"].bdr-r.height-auto:before {
  margin-right: -1px;
}
.notes li > .panel > .panel-body > .col-xs-1 {
  vertical-align: middle;
}
.notes li > .panel > .panel-body > .col-xs-2,
.notes li > .panel > .panel-body > .col-xs-3,
.notes li > .panel > .panel-body > .col-xs-4,
.notes li > .panel > .panel-body > .col-xs-5,
.notes li > .panel > .panel-body > .col-xs-6,
.notes li > .panel > .panel-body > .col-xs-7,
.notes li > .panel > .panel-body > .col-xs-8,
.notes li > .panel > .panel-body > .col-xs-9,
.notes li > .panel > .panel-body > .col-xs-10,
.notes li > .panel > .panel-body > .col-xs-11,
.notes li > .panel > .panel-body > .cell {
  display: table-cell;
  vertical-align: top;
  height: 100%;
  float: none;
}
.notes li > .panel > .panel-body > .cell {
  width: 100%;
}
@media (min-width: 768px) {
  .notes li > .panel > .panel-body > .col-sm-1,
  .notes li > .panel > .panel-body > .col-sm-2,
  .notes li > .panel > .panel-body > .col-sm-3,
  .notes li > .panel > .panel-body > .col-sm-4,
  .notes li > .panel > .panel-body > .col-sm-5,
  .notes li > .panel > .panel-body > .col-sm-6,
  .notes li > .panel > .panel-body > .col-sm-7,
  .notes li > .panel > .panel-body > .col-sm-8,
  .notes li > .panel > .panel-body > .col-sm-9,
  .notes li > .panel > .panel-body > .col-sm-10,
  .notes li > .panel > .panel-body > .col-sm-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
@media (min-width: 992px) {
  .notes li > .panel > .panel-body > .col-md-1,
  .notes li > .panel > .panel-body > .col-md-2,
  .notes li > .panel > .panel-body > .col-md-3,
  .notes li > .panel > .panel-body > .col-md-4,
  .notes li > .panel > .panel-body > .col-md-5,
  .notes li > .panel > .panel-body > .col-md-6,
  .notes li > .panel > .panel-body > .col-md-7,
  .notes li > .panel > .panel-body > .col-md-8,
  .notes li > .panel > .panel-body > .col-md-9,
  .notes li > .panel > .panel-body > .col-md-10,
  .notes li > .panel > .panel-body > .col-md-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
@media (min-width: 1200px) {
  .notes li > .panel > .panel-body > .col-lg-1,
  .notes li > .panel > .panel-body > .col-lg-2,
  .notes li > .panel > .panel-body > .col-lg-3,
  .notes li > .panel > .panel-body > .col-lg-4,
  .notes li > .panel > .panel-body > .col-lg-5,
  .notes li > .panel > .panel-body > .col-lg-6,
  .notes li > .panel > .panel-body > .col-lg-7,
  .notes li > .panel > .panel-body > .col-lg-8,
  .notes li > .panel > .panel-body > .col-lg-9,
  .notes li > .panel > .panel-body > .col-lg-10,
  .notes li > .panel > .panel-body > .col-lg-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
.bullet {
  display: inline-block;
  vertical-align: middle;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: #a0acb8;
}
.bullet.bullet-primary {
  background-color: #4E5D9D;
}
.bullet.bullet-success {
  background-color: #00B49C;
}
.bullet.bullet-info {
  background-color: #35B4B9;
}
.bullet.bullet-warning {
  background-color: #FDB933;
}
.bullet.bullet-danger {
  background-color: #F86B4F;
}
.label {
  display: inline-block;
  line-height: 1.5;
  padding: 0.25em 0.6em 0.15em 0.6em;
  border-radius: 2px;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}
.badge {
  padding-top: 0px;
  padding-bottom: 0px;
  font-size: 10px;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}
.mautic-brand {
  display: block;
  height: 60px;
  padding-left: 35px;
  padding-right: 32px;
  width: 100%;
  overflow: hidden;
}
.mautic-brand.pull-left {
  width: 75%;
}
.mautic-brand.minimized {
  background-size: contain;
}
.mautic-brand > svg.mautic-logo-figure {
  width: 32px;
  height: 60px;
}
.mautic-brand > svg.mautic-logo-figure .circle {
  fill: #ffffff;
}
.mautic-brand > svg.mautic-logo-figure .m,
.mautic-brand > svg.mautic-logo-figure .m-arrow {
  fill: #FDB933;
}
.mautic-brand > svg.mautic-logo-text {
  height: 60px;
  width: 98px;
}
.mautic-brand > svg.mautic-logo-text .m,
.mautic-brand > svg.mautic-logo-text .a,
.mautic-brand > svg.mautic-logo-text .u,
.mautic-brand > svg.mautic-logo-text .t,
.mautic-brand > svg.mautic-logo-text .i,
.mautic-brand > svg.mautic-logo-text .c {
  fill: #ffffff;
}
label {
  font-weight: 600;
}
.label-tag {
  white-space: normal;
  text-align: left;
}
.control-label.text-left {
  text-align: left;
}
.form-control {
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: border-color ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s;
  transition: border-color ease-in-out .15s;
}
.form-control.form-control-rounded {
  border-radius: 32px;
}
.form-stack .form-control {
  position: relative;
  border-radius: 0;
}
.form-stack .form-control:focus {
  z-index: 1;
}
.form-stack .form-control + .form-control {
  margin-top: -1px;
}
.form-stack .form-control:first-child {
  border-radius: 3px 3px 0 0;
}
.form-stack .form-control:last-child {
  border-radius: 0 0 3px 3px;
}
.form-stack .form-control.input-lg:first-child {
  border-radius: 4px 4px 0 0;
}
.form-stack .form-control.input-lg:last-child {
  border-radius: 0 0 4px 4px;
}
.form-stack .form-control.input-sm:first-child {
  border-radius: 2px 2px 0 0;
}
.form-stack .form-control.input-sm:last-child {
  border-radius: 0 0 2px 2px;
}
.form-stack .form-control-icon:first-child > .form-control {
  border-radius: 3px 3px 0 0;
}
.form-stack .form-control-icon:first-child > .form-control.input-lg {
  border-radius: 4px 4px 0 0;
}
.form-stack .form-control-icon:first-child > .form-control.input-sm {
  border-radius: 2px 2px 0 0;
}
.form-stack .form-control-icon:last-child > .form-control {
  border-radius: 0 0 3px 3px;
}
.form-stack .form-control-icon:last-child > .form-control.input-lg {
  border-radius: 0 0 4px 4px;
}
.form-stack .form-control-icon:last-child > .form-control.input-sm {
  border-radius: 0 0 2px 2px;
}
.form-stack .form-control-icon + .form-control-icon {
  margin-top: -1px;
}
.form-control-icon {
  position: relative;
}
.form-control-icon .form-control {
  padding-left: 32px;
}
.form-control-icon .form-control.input-lg {
  padding-left: 42px;
}
.form-control-icon .form-control.input-lg + .the-icon {
  font-size: 16px;
  line-height: 42px;
  width: 42px;
}
.form-control-icon .form-control.input-sm {
  padding-left: 28px;
}
.form-control-icon .form-control.input-sm + .the-icon {
  font-size: 11px;
  line-height: 28px;
  width: 28px;
}
.form-control-icon .the-icon {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  line-height: 31px;
  width: 32px;
  text-align: center;
}
.form-control-icon.form-control-icon-right .the-icon {
  right: 0;
  left: auto;
}
.form-control-icon.form-control-icon-right .form-control {
  padding-left: 12px;
  padding-right: 32px;
}
.form-control-icon.form-control-icon-right .form-control.input-lg {
  padding-left: 16px;
  padding-right: 42px;
}
.form-control-icon.form-control-icon-right .form-control.input-sm {
  padding-left: 10px;
  padding-right: 28px;
}
.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0px;
  right: 0px;
  min-width: 100%;
  min-height: 100%;
  font-size: 999px;
  text-align: right;
  opacity: 0;
  background: red;
  cursor: inherit;
  display: block;
}
.checkbox label,
.radio label,
.checkbox-inline label,
.radio-inline label {
  font-weight: normal;
}
.checkbox[class*=\" custom\"],
.radio[class*=\" custom\"],
.checkbox-inline[class*=\" custom\"],
.radio-inline[class*=\" custom\"],
.checkbox[class^=\"custom\"],
.radio[class^=\"custom\"],
.checkbox-inline[class^=\"custom\"],
.radio-inline[class^=\"custom\"] {
  position: relative;
}
.checkbox[class*=\" custom\"] label,
.radio[class*=\" custom\"] label,
.checkbox-inline[class*=\" custom\"] label,
.radio-inline[class*=\" custom\"] label,
.checkbox[class^=\"custom\"] label,
.radio[class^=\"custom\"] label,
.checkbox-inline[class^=\"custom\"] label,
.radio-inline[class^=\"custom\"] label {
  padding-left: 24px;
}
.checkbox[class*=\" custom\"] label input,
.radio[class*=\" custom\"] label input,
.checkbox-inline[class*=\" custom\"] label input,
.radio-inline[class*=\" custom\"] label input,
.checkbox[class^=\"custom\"] label input,
.radio[class^=\"custom\"] label input,
.checkbox-inline[class^=\"custom\"] label input,
.radio-inline[class^=\"custom\"] label input {
  position: absolute;
  opacity: 0;
}
.checkbox[class*=\" custom\"] label input + span,
.radio[class*=\" custom\"] label input + span,
.checkbox-inline[class*=\" custom\"] label input + span,
.radio-inline[class*=\" custom\"] label input + span,
.checkbox[class^=\"custom\"] label input + span,
.radio[class^=\"custom\"] label input + span,
.checkbox-inline[class^=\"custom\"] label input + span,
.radio-inline[class^=\"custom\"] label input + span {
  display: inline-block;
  vertical-align: top;
  position: relative;
  width: 16px;
  height: 16px;
  margin-left: -25px;
  margin-right: 4px;
  margin-top: 1px;
  background-color: transparent;
  border-radius: 3px;
  border: 1px solid rgba(0, 0, 0, 0.2);
}
.checkbox[class*=\" custom\"] label input + span:after,
.radio[class*=\" custom\"] label input + span:after,
.checkbox-inline[class*=\" custom\"] label input + span:after,
.radio-inline[class*=\" custom\"] label input + span:after,
.checkbox[class^=\"custom\"] label input + span:after,
.radio[class^=\"custom\"] label input + span:after,
.checkbox-inline[class^=\"custom\"] label input + span:after,
.radio-inline[class^=\"custom\"] label input + span:after {
  content: \"\";
  display: block;
  position: absolute;
  top: 2px;
  left: 2px;
  background-color: #3c4650;
  height: 10px;
  width: 10px;
  border-radius: 2px;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.1s ease;
  -o-transition: all 0.1s ease;
  transition: all 0.1s ease;
}
.checkbox[class*=\" custom\"] label input:disabled + span,
.radio[class*=\" custom\"] label input:disabled + span,
.checkbox-inline[class*=\" custom\"] label input:disabled + span,
.radio-inline[class*=\" custom\"] label input:disabled + span,
.checkbox[class^=\"custom\"] label input:disabled + span,
.radio[class^=\"custom\"] label input:disabled + span,
.checkbox-inline[class^=\"custom\"] label input:disabled + span,
.radio-inline[class^=\"custom\"] label input:disabled + span {
  opacity: 0.4;
}
.checkbox[class*=\" custom\"] label input:disabled + span:hover,
.radio[class*=\" custom\"] label input:disabled + span:hover,
.checkbox-inline[class*=\" custom\"] label input:disabled + span:hover,
.radio-inline[class*=\" custom\"] label input:disabled + span:hover,
.checkbox[class^=\"custom\"] label input:disabled + span:hover,
.radio[class^=\"custom\"] label input:disabled + span:hover,
.checkbox-inline[class^=\"custom\"] label input:disabled + span:hover,
.radio-inline[class^=\"custom\"] label input:disabled + span:hover {
  cursor: not-allowed;
}
.checkbox[class*=\" custom\"] label input:checked + span,
.radio[class*=\" custom\"] label input:checked + span,
.checkbox-inline[class*=\" custom\"] label input:checked + span,
.radio-inline[class*=\" custom\"] label input:checked + span,
.checkbox[class^=\"custom\"] label input:checked + span,
.radio[class^=\"custom\"] label input:checked + span,
.checkbox-inline[class^=\"custom\"] label input:checked + span,
.radio-inline[class^=\"custom\"] label input:checked + span {
  border: 1px solid #3c4650;
}
.checkbox[class*=\" custom\"] label input:checked + span:after,
.radio[class*=\" custom\"] label input:checked + span:after,
.checkbox-inline[class*=\" custom\"] label input:checked + span:after,
.radio-inline[class*=\" custom\"] label input:checked + span:after,
.checkbox[class^=\"custom\"] label input:checked + span:after,
.radio[class^=\"custom\"] label input:checked + span:after,
.checkbox-inline[class^=\"custom\"] label input:checked + span:after,
.radio-inline[class^=\"custom\"] label input:checked + span:after {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.1s ease;
  -o-transition: all 0.1s ease;
  transition: all 0.1s ease;
}
.checkbox[class*=\" custom\"] label:hover input + span,
.radio[class*=\" custom\"] label:hover input + span,
.checkbox-inline[class*=\" custom\"] label:hover input + span,
.radio-inline[class*=\" custom\"] label:hover input + span,
.checkbox[class^=\"custom\"] label:hover input + span,
.radio[class^=\"custom\"] label:hover input + span,
.checkbox-inline[class^=\"custom\"] label:hover input + span,
.radio-inline[class^=\"custom\"] label:hover input + span {
  border: 1px solid rgba(0, 0, 0, 0.3);
}
.checkbox[class*=\" custom\"] label:hover input:checked + span,
.radio[class*=\" custom\"] label:hover input:checked + span,
.checkbox-inline[class*=\" custom\"] label:hover input:checked + span,
.radio-inline[class*=\" custom\"] label:hover input:checked + span,
.checkbox[class^=\"custom\"] label:hover input:checked + span,
.radio[class^=\"custom\"] label:hover input:checked + span,
.checkbox-inline[class^=\"custom\"] label:hover input:checked + span,
.radio-inline[class^=\"custom\"] label:hover input:checked + span {
  border: 1px solid #3c4650;
}
.checkbox.custom-primary label input + span:after,
.radio.custom-primary label input + span:after,
.checkbox-inline.custom-primary label input + span:after,
.radio-inline.custom-primary label input + span:after {
  background-color: #4E5D9D;
}
.checkbox.custom-primary label input:checked + span,
.radio.custom-primary label input:checked + span,
.checkbox-inline.custom-primary label input:checked + span,
.radio-inline.custom-primary label input:checked + span {
  border: 1px solid #4E5D9D;
}
.checkbox.custom-primary label:hover input + span,
.radio.custom-primary label:hover input + span,
.checkbox-inline.custom-primary label:hover input + span,
.radio-inline.custom-primary label:hover input + span {
  border: 1px solid rgba(0, 0, 0, 0.3);
}
.checkbox.custom-primary label:hover input:checked + span,
.radio.custom-primary label:hover input:checked + span,
.checkbox-inline.custom-primary label:hover input:checked + span,
.radio-inline.custom-primary label:hover input:checked + span {
  border: 1px solid #4E5D9D;
}
.checkbox.custom-info label input + span:after,
.radio.custom-info label input + span:after,
.checkbox-inline.custom-info label input + span:after,
.radio-inline.custom-info label input + span:after {
  background-color: #35B4B9;
}
.checkbox.custom-info label input:checked + span,
.radio.custom-info label input:checked + span,
.checkbox-inline.custom-info label input:checked + span,
.radio-inline.custom-info label input:checked + span {
  border: 1px solid #35B4B9;
}
.checkbox.custom-info label:hover input + span,
.radio.custom-info label:hover input + span,
.checkbox-inline.custom-info label:hover input + span,
.radio-inline.custom-info label:hover input + span {
  border: 1px solid rgba(0, 0, 0, 0.3);
}
.checkbox.custom-info label:hover input:checked + span,
.radio.custom-info label:hover input:checked + span,
.checkbox-inline.custom-info label:hover input:checked + span,
.radio-inline.custom-info label:hover input:checked + span {
  border: 1px solid #35B4B9;
}
.checkbox.custom-success label input + span:after,
.radio.custom-success label input + span:after,
.checkbox-inline.custom-success label input + span:after,
.radio-inline.custom-success label input + span:after {
  background-color: #00B49C;
}
.checkbox.custom-success label input:checked + span,
.radio.custom-success label input:checked + span,
.checkbox-inline.custom-success label input:checked + span,
.radio-inline.custom-success label input:checked + span {
  border: 1px solid #00B49C;
}
.checkbox.custom-success label:hover input + span,
.radio.custom-success label:hover input + span,
.checkbox-inline.custom-success label:hover input + span,
.radio-inline.custom-success label:hover input + span {
  border: 1px solid rgba(0, 0, 0, 0.3);
}
.checkbox.custom-success label:hover input:checked + span,
.radio.custom-success label:hover input:checked + span,
.checkbox-inline.custom-success label:hover input:checked + span,
.radio-inline.custom-success label:hover input:checked + span {
  border: 1px solid #00B49C;
}
.checkbox.custom-warning label input + span:after,
.radio.custom-warning label input + span:after,
.checkbox-inline.custom-warning label input + span:after,
.radio-inline.custom-warning label input + span:after {
  background-color: #FDB933;
}
.checkbox.custom-warning label input:checked + span,
.radio.custom-warning label input:checked + span,
.checkbox-inline.custom-warning label input:checked + span,
.radio-inline.custom-warning label input:checked + span {
  border: 1px solid #FDB933;
}
.checkbox.custom-warning label:hover input + span,
.radio.custom-warning label:hover input + span,
.checkbox-inline.custom-warning label:hover input + span,
.radio-inline.custom-warning label:hover input + span {
  border: 1px solid rgba(0, 0, 0, 0.3);
}
.checkbox.custom-warning label:hover input:checked + span,
.radio.custom-warning label:hover input:checked + span,
.checkbox-inline.custom-warning label:hover input:checked + span,
.radio-inline.custom-warning label:hover input:checked + span {
  border: 1px solid #FDB933;
}
.checkbox.custom-danger label input + span:after,
.radio.custom-danger label input + span:after,
.checkbox-inline.custom-danger label input + span:after,
.radio-inline.custom-danger label input + span:after {
  background-color: #F86B4F;
}
.checkbox.custom-danger label input:checked + span,
.radio.custom-danger label input:checked + span,
.checkbox-inline.custom-danger label input:checked + span,
.radio-inline.custom-danger label input:checked + span {
  border: 1px solid #F86B4F;
}
.checkbox.custom-danger label:hover input + span,
.radio.custom-danger label:hover input + span,
.checkbox-inline.custom-danger label:hover input + span,
.radio-inline.custom-danger label:hover input + span {
  border: 1px solid rgba(0, 0, 0, 0.3);
}
.checkbox.custom-danger label:hover input:checked + span,
.radio.custom-danger label:hover input:checked + span,
.checkbox-inline.custom-danger label:hover input:checked + span,
.radio-inline.custom-danger label:hover input:checked + span {
  border: 1px solid #F86B4F;
}
.radio-inline[class*=\" custom\"] label input + span,
.radio[class*=\" custom\"] label input + span,
.radio-inline[class^=\"custom\"] label input + span,
.radio[class^=\"custom\"] label input + span,
.radio-inline[class*=\" custom\"] label input + span:after,
.radio[class*=\" custom\"] label input + span:after,
.radio-inline[class^=\"custom\"] label input + span:after,
.radio[class^=\"custom\"] label input + span:after {
  border-radius: 50%;
}
.checkbox-inline[class*=\" custom\"] label,
.radio-inline[class*=\" custom\"] label,
.checkbox-inline[class^=\"custom\"] label,
.radio-inline[class^=\"custom\"] label {
  padding-left: 4px;
}
.time-input select {
  margin: 0 3px 0 3px;
}
.legend-container {
  position: relative;
}
.bar-legend,
.line-legend {
  list-style: none;
  position: absolute;
  top: 0;
}
.bar-legend li,
.line-legend li {
  display: block;
  position: relative;
  margin-bottom: 4px;
  border-radius: 5px;
  padding: 0px 8px 2px 18px;
  font-size: 11px;
  cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}
.bar-legend li:hover,
.line-legend li:hover {
  background-color: #fafafa;
}
.bar-legend li span,
.line-legend li span {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 15px;
  height: 15px;
  border-radius: 5px;
}
ul.line-legend {
  margin: 0;
  padding: 0;
  position: relative;
}
ul.line-legend li {
  display: inline;
}
.input-group .input-group-btn + .form-control {
  margin-left: -1px;
}
.img-wrapper {
  display: inline-block;
  position: relative;
}
.img-wrapper + .img-wrapper {
  margin-left: 3px;
}
.img-wrapper.pull-right + .img-wrapper {
  margin-right: 3px;
  margin-left: 0;
}
.img-wrapper:after {
  position: absolute;
  content: \"\";
  z-index: 1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-radius: inherit;
  -webkit-box-shadow: inset 0 0 3px 0 rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 3px 0 rgba(0, 0, 0, 0.3);
}
.img-wrapper img {
  border-radius: inherit;
  display: block;
  max-width: 100%;
  height: auto;
}
.img-wrapper > .label,
.img-wrapper > .badge {
  position: absolute;
  z-index: 5;
  top: -10px;
  right: -10px;
}
.img-rounded {
  border-radius: 3px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  vertical-align: middle;
}
.table > thead > tr > th {
  vertical-align: middle;
  border-bottom: 1px solid #ebedf0;
}
.table-responsive-force {
  width: 100%;
  margin-bottom: 13.5px;
  overflow-y: hidden;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  border: 1px solid #ebedf0;
  -webkit-overflow-scrolling: touch;
}
.table-responsive-force > .table {
  margin-bottom: 0;
}
.table-responsive-force > .table > thead > tr > th,
.table-responsive-force > .table > tbody > tr > th,
.table-responsive-force > .table > tfoot > tr > th,
.table-responsive-force > .table > thead > tr > td,
.table-responsive-force > .table > tbody > tr > td,
.table-responsive-force > .table > tfoot > tr > td {
  white-space: nowrap;
}
.table-responsive-force > .table-bordered {
  border: 0;
}
.table-responsive-force > .table-bordered > thead > tr > th:first-child,
.table-responsive-force > .table-bordered > tbody > tr > th:first-child,
.table-responsive-force > .table-bordered > tfoot > tr > th:first-child,
.table-responsive-force > .table-bordered > thead > tr > td:first-child,
.table-responsive-force > .table-bordered > tbody > tr > td:first-child,
.table-responsive-force > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.table-responsive-force > .table-bordered > thead > tr > th:last-child,
.table-responsive-force > .table-bordered > tbody > tr > th:last-child,
.table-responsive-force > .table-bordered > tfoot > tr > th:last-child,
.table-responsive-force > .table-bordered > thead > tr > td:last-child,
.table-responsive-force > .table-bordered > tbody > tr > td:last-child,
.table-responsive-force > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.table-responsive-force > .table-bordered > tbody > tr:last-child > th,
.table-responsive-force > .table-bordered > tfoot > tr:last-child > th,
.table-responsive-force > .table-bordered > tbody > tr:last-child > td,
.table-responsive-force > .table-bordered > tfoot > tr:last-child > td {
  border-bottom: 0;
}
.progress {
  background-color: #ebedf0;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.progress.progress-md {
  height: 12px;
  border-radius: 2px;
}
.progress.progress-sm {
  height: 8px;
  border-radius: 2px;
  margin-top: 2px;
}
.progress.progress-xs {
  height: 4px;
  border-radius: 2px;
}
.progress-bar {
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: width 4s ease;
  -o-transition: width 4s ease;
  transition: width 4s ease;
}
.progress-bar-success {
  background-color: #00B49C;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #35B4B9;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #FDB933;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #F86B4F;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.app-sidebar .progress {
  background-color: #232b34;
}
.panel {
  border: 1px solid #ebedf0;
  -webkit-box-shadow: 0px 1px 1px #f3f3f3;
  box-shadow: 0px 1px 1px #f3f3f3;
}
.panel-heading {
  padding: 0 15px;
}
.panel-heading:before,
.panel-heading:after {
  content: \" \";
  display: table;
}
.panel-heading:after {
  clear: both;
}
.panel-heading .panel-title {
  padding: 10px 0;
  display: table-cell;
  width: 1%;
  vertical-align: middle;
  font-weight: 600;
}
.panel-heading .panel-toolbar {
  display: table-cell;
  width: 1%;
  vertical-align: middle;
}
.panel-group .panel {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.panel-footer {
  overflow: hidden;
  background-color: #fbfbfb;
}
.panel-toolbar-wrapper {
  display: block;
  background-color: #fbfbfb;
  border-bottom: 1px solid #cfd9db;
  padding: 0px 15px;
}
.box-layout {
  display: table !important;
  width: 100%;
  table-layout: fixed;
  border-spacing: 0;
}
.box-layout > [class*=\" col-\"],
.box-layout > [class^=\"col-\"] {
  position: static;
  padding: 0;
}
.box-layout > [class*=\" col-\"].height-auto:before,
.box-layout > [class^=\"col-\"].height-auto:before {
  content: \"\";
  position: absolute;
  width: inherit;
  top: 60px;
  bottom: 0;
  z-index: -1;
  background-color: inherit;
  border: inherit;
}
.box-layout > [class*=\" col-\"] > .panel-body,
.box-layout > [class^=\"col-\"] > .panel-body {
  white-space: nowrap;
  overflow: hidden;
}
.box-layout > [class*=\" col-\"].bdr-l.height-auto:before,
.box-layout > [class^=\"col-\"].bdr-l.height-auto:before {
  margin-left: -1px;
}
.box-layout > [class*=\" col-\"].bdr-r.height-auto:before,
.box-layout > [class^=\"col-\"].bdr-r.height-auto:before {
  margin-right: -1px;
}
.box-layout > .col-xs-1,
.box-layout > .col-xs-2,
.box-layout > .col-xs-3,
.box-layout > .col-xs-4,
.box-layout > .col-xs-5,
.box-layout > .col-xs-6,
.box-layout > .col-xs-7,
.box-layout > .col-xs-8,
.box-layout > .col-xs-9,
.box-layout > .col-xs-10,
.box-layout > .col-xs-11,
.box-layout > .cell {
  display: table-cell;
  vertical-align: top;
  height: 100%;
  float: none;
}
.box-layout > .cell {
  width: 100%;
}
@media (min-width: 768px) {
  .box-layout > .col-sm-1,
  .box-layout > .col-sm-2,
  .box-layout > .col-sm-3,
  .box-layout > .col-sm-4,
  .box-layout > .col-sm-5,
  .box-layout > .col-sm-6,
  .box-layout > .col-sm-7,
  .box-layout > .col-sm-8,
  .box-layout > .col-sm-9,
  .box-layout > .col-sm-10,
  .box-layout > .col-sm-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
@media (min-width: 992px) {
  .box-layout > .col-md-1,
  .box-layout > .col-md-2,
  .box-layout > .col-md-3,
  .box-layout > .col-md-4,
  .box-layout > .col-md-5,
  .box-layout > .col-md-6,
  .box-layout > .col-md-7,
  .box-layout > .col-md-8,
  .box-layout > .col-md-9,
  .box-layout > .col-md-10,
  .box-layout > .col-md-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
@media (min-width: 1200px) {
  .box-layout > .col-lg-1,
  .box-layout > .col-lg-2,
  .box-layout > .col-lg-3,
  .box-layout > .col-lg-4,
  .box-layout > .col-lg-5,
  .box-layout > .col-lg-6,
  .box-layout > .col-lg-7,
  .box-layout > .col-lg-8,
  .box-layout > .col-lg-9,
  .box-layout > .col-lg-10,
  .box-layout > .col-lg-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
.tab-pane .box-layout > [class*=\" col-\"].height-auto:before,
.tab-pane .box-layout > [class^=\"col-\"].height-auto:before {
  top: auto;
}
.modal .box-layout > [class*=\" col-\"].height-auto:before,
.modal .box-layout > [class^=\"col-\"].height-auto:before {
  width: auto;
}
.modal .box-layout .bg-auto {
  background-color: #f8f8f8 !important;
}
.switch {
  vertical-align: middle;
  margin-bottom: 0;
  line-height: 0;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  tap-highlight-color: transparent;
}
.switch input {
  position: absolute;
  opacity: 0;
}
.switch input ~ .text {
  display: inline-block;
  font-weight: 400;
  line-height: 24px;
  vertical-align: middle;
}
.switch input ~ .switch {
  font-size: 24px;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  background-color: #fafafa;
  box-shadow: inset 0 0 0 1px #e5e5e5;
  cursor: pointer;
  height: 24px;
  width: 38.4px;
  border-radius: 28px;
  transition: border 0.25s 0.15s, box-shadow 0.25s 0.3s, padding 0.25s;
}
.switch input ~ .switch:after {
  position: absolute;
  background-color: #fff;
  border: 1px solid #e5e5e5;
  border-radius: 24px;
  box-shadow: 0 1px 4px hsla(0, 0%, 0%, 0.01), 0 2px 4px hsla(0, 0%, 0%, 0.05);
  content: '';
  display: block;
  height: 24px;
  width: 24px;
  left: 0;
  top: 0;
  transition: border 0.25s 0.15s, left 0.25s 0.1s, right 0.15s 0.175s;
}
.switch input:checked + .switch {
  border-color: #00B49C;
  box-shadow: inset 0 0 0 0.6em #00B49C;
  transition: border 0.25s, box-shadow 0.25s, padding 0.25s 0.15s;
}
.switch input:checked + .switch:after {
  border-color: #00B49C;
  left: 0.6em;
  right: 0;
  transition: border 0.25s, left 0.15s 0.25s, right 0.25s 0.175s;
}
.switch.switch-primary input:checked + .switch {
  border-color: #4E5D9D;
  box-shadow: inset 0 0 0 0.6em #4E5D9D;
}
.switch.switch-primary input:checked + .switch:after {
  border-color: #4E5D9D;
}
.switch.switch-info input:checked + .switch {
  border-color: #35B4B9;
  box-shadow: inset 0 0 0 0.6em #35B4B9;
}
.switch.switch-info input:checked + .switch:after {
  border-color: #35B4B9;
}
.switch.switch-success input:checked + .switch {
  border-color: #00B49C;
  box-shadow: inset 0 0 0 0.6em #00B49C;
}
.switch.switch-success input:checked + .switch:after {
  border-color: #00B49C;
}
.switch.switch-warning input:checked + .switch {
  border-color: #FDB933;
  box-shadow: inset 0 0 0 0.6em #FDB933;
}
.switch.switch-warning input:checked + .switch:after {
  border-color: #FDB933;
}
.switch.switch-danger input:checked + .switch {
  border-color: #F86B4F;
  box-shadow: inset 0 0 0 0.6em #F86B4F;
}
.switch.switch-danger input:checked + .switch:after {
  border-color: #F86B4F;
}
.switch.switch-lg input ~ .text {
  line-height: 28px;
}
.switch.switch-lg input ~ .switch {
  font-size: 28px;
  height: 28px;
  width: 44.8px;
  border-radius: 28px;
}
.switch.switch-lg input ~ .switch:after {
  border-radius: 28px;
  height: 28px;
  width: 28px;
}
.switch.switch-sm input ~ .text {
  line-height: 20px;
}
.switch.switch-sm input ~ .switch {
  font-size: 20px;
  height: 20px;
  width: 32px;
  border-radius: 20px;
}
.switch.switch-sm input ~ .switch:after {
  border-radius: 20px;
  height: 20px;
  width: 20px;
}
.switch.switch-xs input ~ .text {
  line-height: 16px;
}
.switch.switch-xs input ~ .switch {
  font-size: 16px;
  height: 16px;
  width: 25.6px;
  border-radius: 16px;
}
.switch.switch-xs input ~ .switch:after {
  border-radius: 16px;
  height: 16px;
  width: 16px;
}
.step {
  padding: 0;
  margin: 0;
}
.step > li {
  list-style: none;
}
.step > li + li {
  margin-top: 15px;
}
.step > li + li .steps:after {
  content: \"\";
  position: absolute;
  left: 32px / 2;
  top: -15px;
  height: 15px;
  width: 1px;
  background-color: #a0acb8;
}
.step > li.active .steps {
  color: #47535f;
}
.step > li.active .steps > .steps-figure {
  border-color: #47535f;
}
.step > li.active a.steps:hover,
.step > li.active a.steps:focus {
  color: #47535f;
}
.step > li.active a.steps:hover > .steps-figure,
.step > li.active a.steps:focus > .steps-figure {
  border-color: #47535f;
}
.step > li a.steps:hover,
.step > li a.steps:focus {
  color: #8392a2;
}
.step > li a.steps:hover > .steps-figure,
.step > li a.steps:focus > .steps-figure {
  border-color: #8392a2;
}
.step .steps {
  position: relative;
  display: inline-block;
  color: #a0acb8;
}
.step .steps > .steps-figure {
  display: inline-block;
  width: 32px;
  height: 32px;
  text-align: center;
  font-size: 14px;
  line-height: 28px;
  border-radius: 50%;
  border: 2px solid #a0acb8;
}
.step .steps > .steps-figure + .steps-text {
  margin-left: 5px;
}
.step .steps > .steps-text + .steps-figure {
  margin-left: 5px;
}
.horizontal-step {
  padding: 0;
  margin: 0;
}
.horizontal-step > li {
  list-style: none;
  display: inline;
}
.horizontal-step > li + li {
  margin-left: 15px;
}
.horizontal-step > li + li .steps:after {
  content: \"\";
  position: absolute;
  left: -18px;
  top: 32px / 2;
  height: 1px;
  width: 18px;
  background-color: #a0acb8;
}
.horizontal-step > li.active .steps {
  color: #47535f;
}
.horizontal-step > li.active .steps > .steps-figure {
  border-color: #47535f;
}
.horizontal-step > li.active a.steps:hover,
.horizontal-step > li.active a.steps:focus {
  color: #47535f;
}
.horizontal-step > li.active a.steps:hover > .steps-figure,
.horizontal-step > li.active a.steps:focus > .steps-figure {
  border-color: #47535f;
}
.horizontal-step > li a.steps:hover,
.horizontal-step > li a.steps:focus {
  color: #8392a2;
}
.horizontal-step > li a.steps:hover > .steps-figure,
.horizontal-step > li a.steps:focus > .steps-figure {
  border-color: #8392a2;
}
.horizontal-step > li a.steps.disabled {
  color: #bdc5cd;
}
.horizontal-step > li a.steps.disabled > .steps-figure {
  border-color: #bdc5cd;
}
.horizontal-step > li a.steps.disabled:hover {
  color: #bdc5cd;
  cursor: not-allowed;
}
.horizontal-step > li a.steps.disabled:hover > .steps-figure {
  border-color: #bdc5cd;
}
.horizontal-step .steps {
  position: relative;
  display: inline-block;
  color: #a0acb8;
}
.horizontal-step .steps > .steps-figure {
  display: inline-block;
  width: 32px;
  height: 32px;
  text-align: center;
  font-size: 14px;
  line-height: 28px;
  border-radius: 50%;
  border: 2px solid #a0acb8;
}
.horizontal-step .steps > .steps-figure + .steps-text {
  margin-left: 5px;
}
.horizontal-step .steps > .steps-text + .steps-figure {
  margin-left: 5px;
}
.bg-white {
  background-color: #fff !important;
  border-color: #f7f7f7 !important;
  color: #47535f !important;
}
.bg-white.bg-light-xs,
.bg-white .bg-light-xs {
  background-color: #ffffff !important;
  border-color: #f7f7f7 !important;
}
.bg-white.bg-light-sm,
.bg-white .bg-light-sm {
  background-color: #ffffff !important;
  border-color: #f7f7f7 !important;
}
.bg-white.bg-light-md,
.bg-white .bg-light-md {
  background-color: #ffffff !important;
  border-color: #f7f7f7 !important;
}
.bg-white.bg-light-lg,
.bg-white .bg-light-lg {
  background-color: #ffffff !important;
  border-color: #f7f7f7 !important;
}
.bg-white.bg-dark-xs,
.bg-white .bg-dark-xs {
  background-color: #fcfcfc !important;
  border-color: #f7f7f7 !important;
}
.bg-white.bg-dark-sm,
.bg-white .bg-dark-sm {
  background-color: #f7f7f7 !important;
  border-color: #f0f0f0 !important;
}
.bg-white.bg-dark-md,
.bg-white .bg-dark-md {
  background-color: #f2f2f2 !important;
  border-color: #e8e8e8 !important;
}
.bg-white.bg-dark-lg,
.bg-white .bg-dark-lg {
  background-color: #ededed !important;
  border-color: #e0e0e0 !important;
}
.bg-auto {
  background-color: #f8f8f8 !important;
  border-color: #f0f0f0 !important;
  color: #47535f !important;
}
.bg-auto.bg-light-xs,
.bg-auto .bg-light-xs {
  background-color: #fbfbfb !important;
  border-color: #f0f0f0 !important;
}
.bg-auto.bg-light-sm,
.bg-auto .bg-light-sm {
  background-color: #ffffff !important;
  border-color: #f0f0f0 !important;
}
.bg-auto.bg-light-md,
.bg-auto .bg-light-md {
  background-color: #ffffff !important;
  border-color: #f0f0f0 !important;
}
.bg-auto.bg-light-lg,
.bg-auto .bg-light-lg {
  background-color: #ffffff !important;
  border-color: #f0f0f0 !important;
}
.bg-auto.bg-dark-xs,
.bg-auto .bg-dark-xs {
  background-color: #f5f5f5 !important;
  border-color: #f0f0f0 !important;
}
.bg-auto.bg-dark-sm,
.bg-auto .bg-dark-sm {
  background-color: #f0f0f0 !important;
  border-color: #e9e9e9 !important;
}
.bg-auto.bg-dark-md,
.bg-auto .bg-dark-md {
  background-color: #ebebeb !important;
  border-color: #e1e1e1 !important;
}
.bg-auto.bg-dark-lg,
.bg-auto .bg-dark-lg {
  background-color: #e6e6e6 !important;
  border-color: #d9d9d9 !important;
}
.bg-transparent {
  background-color: transparent !important;
  color: #47535f;
}
.bg-primary {
  background-color: #4E5D9D !important;
  border-color: #495793 !important;
  color: #fff !important;
}
.bg-primary.bg-light-xs,
.bg-primary .bg-light-xs {
  background-color: #505fa0 !important;
  border-color: #495793 !important;
}
.bg-primary.bg-light-sm,
.bg-primary .bg-light-sm {
  background-color: #5363a7 !important;
  border-color: #495793 !important;
}
.bg-primary.bg-light-md,
.bg-primary .bg-light-md {
  background-color: #5868ac !important;
  border-color: #495793 !important;
}
.bg-primary.bg-light-lg,
.bg-primary .bg-light-lg {
  background-color: #5f6eb0 !important;
  border-color: #495793 !important;
}
.bg-primary.bg-dark-xs,
.bg-primary .bg-dark-xs {
  background-color: #4c5b9a !important;
  border-color: #495793 !important;
}
.bg-primary.bg-dark-sm,
.bg-primary .bg-dark-sm {
  background-color: #495793 !important;
  border-color: #445189 !important;
}
.bg-primary.bg-dark-md,
.bg-primary .bg-dark-md {
  background-color: #46538c !important;
  border-color: #3f4b7e !important;
}
.bg-primary.bg-dark-lg,
.bg-primary .bg-dark-lg {
  background-color: #424f85 !important;
  border-color: #3a4574 !important;
}
.bg-success {
  background-color: #00B49C !important;
  border-color: #00a58f !important;
  color: #fff !important;
}
.bg-success.bg-light-xs,
.bg-success .bg-light-xs {
  background-color: #00b9a0 !important;
  border-color: #00a58f !important;
}
.bg-success.bg-light-sm,
.bg-success .bg-light-sm {
  background-color: #00c3a9 !important;
  border-color: #00a58f !important;
}
.bg-success.bg-light-md,
.bg-success .bg-light-md {
  background-color: #00ceb2 !important;
  border-color: #00a58f !important;
}
.bg-success.bg-light-lg,
.bg-success .bg-light-lg {
  background-color: #00d8bb !important;
  border-color: #00a58f !important;
}
.bg-success.bg-dark-xs,
.bg-success .bg-dark-xs {
  background-color: #00af98 !important;
  border-color: #00a58f !important;
}
.bg-success.bg-dark-sm,
.bg-success .bg-dark-sm {
  background-color: #00a58f !important;
  border-color: #009581 !important;
}
.bg-success.bg-dark-md,
.bg-success .bg-dark-md {
  background-color: #009b86 !important;
  border-color: #008674 !important;
}
.bg-success.bg-dark-lg,
.bg-success .bg-dark-lg {
  background-color: #00907d !important;
  border-color: #007767 !important;
}
.bg-info {
  background-color: #35B4B9 !important;
  border-color: #32a8ad !important;
  color: #fff !important;
}
.bg-info.bg-light-xs,
.bg-info .bg-light-xs {
  background-color: #36b8bd !important;
  border-color: #32a8ad !important;
}
.bg-info.bg-light-sm,
.bg-info .bg-light-sm {
  background-color: #38c0c5 !important;
  border-color: #32a8ad !important;
}
.bg-info.bg-light-md,
.bg-info .bg-light-md {
  background-color: #3fc3c8 !important;
  border-color: #32a8ad !important;
}
.bg-info.bg-light-lg,
.bg-info .bg-light-lg {
  background-color: #47c5ca !important;
  border-color: #32a8ad !important;
}
.bg-info.bg-dark-xs,
.bg-info .bg-dark-xs {
  background-color: #34b0b5 !important;
  border-color: #32a8ad !important;
}
.bg-info.bg-dark-sm,
.bg-info .bg-dark-sm {
  background-color: #32a8ad !important;
  border-color: #2e9da1 !important;
}
.bg-info.bg-dark-md,
.bg-info .bg-dark-md {
  background-color: #2fa1a5 !important;
  border-color: #2b9195 !important;
}
.bg-info.bg-dark-lg,
.bg-info .bg-dark-lg {
  background-color: #2d999d !important;
  border-color: #278689 !important;
}
.bg-warning {
  background-color: #FDB933 !important;
  border-color: #fdb424 !important;
  color: #fff !important;
}
.bg-warning.bg-light-xs,
.bg-warning .bg-light-xs {
  background-color: #fdbb38 !important;
  border-color: #fdb424 !important;
}
.bg-warning.bg-light-sm,
.bg-warning .bg-light-sm {
  background-color: #fdbe42 !important;
  border-color: #fdb424 !important;
}
.bg-warning.bg-light-md,
.bg-warning .bg-light-md {
  background-color: #fdc24c !important;
  border-color: #fdb424 !important;
}
.bg-warning.bg-light-lg,
.bg-warning .bg-light-lg {
  background-color: #fdc556 !important;
  border-color: #fdb424 !important;
}
.bg-warning.bg-dark-xs,
.bg-warning .bg-dark-xs {
  background-color: #fdb72e !important;
  border-color: #fdb424 !important;
}
.bg-warning.bg-dark-sm,
.bg-warning .bg-dark-sm {
  background-color: #fdb424 !important;
  border-color: #fdaf15 !important;
}
.bg-warning.bg-dark-md,
.bg-warning .bg-dark-md {
  background-color: #fdb01a !important;
  border-color: #fda906 !important;
}
.bg-warning.bg-dark-lg,
.bg-warning .bg-dark-lg {
  background-color: #fdad10 !important;
  border-color: #f0a002 !important;
}
.bg-danger {
  background-color: #F86B4F !important;
  border-color: #f75f40 !important;
  color: #fff !important;
}
.bg-danger.bg-light-xs,
.bg-danger .bg-light-xs {
  background-color: #f86f54 !important;
  border-color: #f75f40 !important;
}
.bg-danger.bg-light-sm,
.bg-danger .bg-light-sm {
  background-color: #f9775e !important;
  border-color: #f75f40 !important;
}
.bg-danger.bg-light-md,
.bg-danger .bg-light-md {
  background-color: #f98068 !important;
  border-color: #f75f40 !important;
}
.bg-danger.bg-light-lg,
.bg-danger .bg-light-lg {
  background-color: #f98871 !important;
  border-color: #f75f40 !important;
}
.bg-danger.bg-dark-xs,
.bg-danger .bg-dark-xs {
  background-color: #f8674a !important;
  border-color: #f75f40 !important;
}
.bg-danger.bg-dark-sm,
.bg-danger .bg-dark-sm {
  background-color: #f75f40 !important;
  border-color: #f75232 !important;
}
.bg-danger.bg-dark-md,
.bg-danger .bg-dark-md {
  background-color: #f75636 !important;
  border-color: #f64623 !important;
}
.bg-danger.bg-dark-lg,
.bg-danger .bg-dark-lg {
  background-color: #f74e2d !important;
  border-color: #f63a14 !important;
}
.pagination,
.pager {
  margin: 0 0 15px 0;
}
lesshat-selector {
  -lh-property: 0; } 
@-webkit-keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }}
@-moz-keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }}
@-o-keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }}
@keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }} 
lesshat-selector { -lh-property: 0 ;
}
lesshat-selector {
  -lh-property: 0; } 
@-webkit-keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }}
@-moz-keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }}
@-o-keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }}
@keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }} 
lesshat-selector { -lh-property: 0 ;
}
.loading-bar,
.canvas-loading-bar,
.modal-loading-bar {
  opacity: 0;
  position: absolute;
  bottom: -1px;
  z-index: 1;
  left: 0;
  right: 0;
  height: 2px;
  background-color: #adb5d7;
  overflow: hidden;
  -webkit-transition: opacity 0.3s ease;
  -moz-transition: opacity 0.3s ease;
  -o-transition: opacity 0.3s ease;
  transition: opacity 0.3s ease;
}
.loading-bar:after,
.canvas-loading-bar:after,
.modal-loading-bar:after,
.loading-bar:before,
.canvas-loading-bar:before,
.modal-loading-bar:before {
  content: '';
  position: absolute;
  height: 2px;
  background-color: #4E5D9D;
}
.loading-bar.active,
.canvas-loading-bar.active,
.modal-loading-bar.active {
  opacity: 1;
  -webkit-transition: opacity 0.3s ease;
  -moz-transition: opacity 0.3s ease;
  -o-transition: opacity 0.3s ease;
  transition: opacity 0.3s ease;
}
.loading-bar.active:after,
.canvas-loading-bar.active:after,
.modal-loading-bar.active:after {
  left: 50%;
  width: 10%;
  -webkit-animation: after-anim 2.5s infinite linear;
  -moz-animation: after-anim 2.5s infinite linear;
  -o-animation: after-anim 2.5s infinite linear;
  animation: after-anim 2.5s infinite linear;
}
.loading-bar.active:before,
.canvas-loading-bar.active:before,
.modal-loading-bar.active:before {
  left: 0%;
  width: 0%;
  -webkit-animation: before-anim 2.5s infinite linear;
  -moz-animation: before-anim 2.5s infinite linear;
  -o-animation: before-anim 2.5s infinite linear;
  animation: before-anim 2.5s infinite linear;
}
.modal-loading-bar {
  bottom: auto;
  top: 0;
}
.offcanvas-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.offcanvas-container .offcanvas-wrapper {
  position: absolute;
  z-index: 1;
  left: 0px;
  width: 100%;
  height: 100%;
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.offcanvas-container .offcanvas-main {
  position: absolute;
  top: 0px;
  width: 100%;
  height: 100%;
}
.offcanvas-container .offcanvas-left {
  position: absolute;
  z-index: 2;
  top: 0px;
  left: -100%;
  width: 100%;
  height: 100%;
}
.offcanvas-container .offcanvas-right {
  position: absolute;
  z-index: 2;
  top: 0px;
  left: 100%;
  width: 100%;
  height: 100%;
}
.offcanvas-container.offcanvas-open-rtl .offcanvas-wrapper {
  left: 100%;
  -webkit-transition: left 0.2s ease;
  -o-transition: left 0.2s ease;
  transition: left 0.2s ease;
}
.offcanvas-container.offcanvas-open-ltr .offcanvas-wrapper {
  left: -100%;
  -webkit-transition: left 0.2s ease;
  -o-transition: left 0.2s ease;
  transition: left 0.2s ease;
}
.csstransforms3d .offcanvas-container.offcanvas-open-ltr .offcanvas-wrapper {
  left: auto;
  -webkit-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.csstransforms3d .offcanvas-container.offcanvas-open-rtl .offcanvas-wrapper {
  left: auto;
  -webkit-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.timeline {
  overflow: hidden;
  height: auto;
  position: relative;
  padding: 0px;
  list-style-type: none;
}
.timeline:after {
  position: absolute;
  width: 1px;
  left: 50%;
  margin-left: -1px;
  top: 20px;
  bottom: 0px;
  content: \"\";
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9InJnYigyNTUsIDI1NSwgMjU1KSIgc3RvcC1vcGFjaXR5PSIwIi8+PHN0b3Agb2Zmc2V0PSIxMCUiIHN0b3AtY29sb3I9IiNlNWU1ZTUiIHN0b3Atb3BhY2l0eT0iMSIvPjxzdG9wIG9mZnNldD0iOTAlIiBzdG9wLWNvbG9yPSIjZTVlNWU1IiBzdG9wLW9wYWNpdHk9IjEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9InJnYigyMjksIDIyOSwgMjI5KSIgc3RvcC1vcGFjaXR5PSIwIi8+PC9saW5lYXJHcmFkaWVudD48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
}
.timeline .panel {
  position: relative;
  z-index: 1;
}
.timeline .header {
  position: relative;
  z-index: 10;
  clear: both;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 20px;
  margin-left: auto;
  background-color: inherit;
  font-size: 14px;
  font-weight: 600;
  max-width: 120px;
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: center;
  color: #4E5D9D;
}
.timeline .events {
  padding-left: 0px;
  overflow: auto;
}
.timeline .events .figure {
  position: absolute;
  z-index: 5;
  left: 50%;
  margin-top: 10px;
  margin-left: -10px;
  width: 20px;
  height: 20px;
  line-height: 18px;
  text-align: center;
  border-radius: 50%;
  background-color: #fff;
  border: 1px solid #dce0e5;
  font-size: 12px;
  color: #dce0e5;
}
.timeline .events > .featured {
  list-style: none;
  width: 45%;
  clear: both;
  float: none !important;
  margin-bottom: 50px;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
}
.timeline .events > .featured > .panel:after,
.timeline .events > .featured > .panel:before {
  display: none;
}
.timeline .events > .featured .figure {
  margin-top: -30px;
}
.timeline .events > .wrapper {
  list-style: none;
  width: 46%;
  clear: both;
}
.timeline .events > .wrapper:first-child {
  margin-top: 0 !important;
}
.timeline .events > .wrapper:nth-of-type(odd) {
  float: left;
  margin-top: -30px;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel {
  z-index: 5;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel:after,
.timeline .events > .wrapper:nth-of-type(odd) > .panel:before {
  content: \"\";
  position: absolute;
  width: 0px;
  height: 0px;
  border-style: solid;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel:after {
  right: -10px;
  top: 10px;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #fff;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel:before {
  right: -11px;
  top: 10px;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #ebedf0;
}
.timeline .events > .wrapper:nth-of-type(even) {
  float: right;
  margin-top: -30px;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel {
  z-index: 5;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel:after,
.timeline .events > .wrapper:nth-of-type(even) > .panel:before {
  content: \"\";
  position: absolute;
  width: 0px;
  height: 0px;
  border-style: solid;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel:after {
  left: -10px;
  top: 10px;
  border-width: 10px 10px 10px 0;
  border-color: transparent #fff transparent transparent;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel:before {
  left: -11px;
  top: 10px;
  border-width: 10px 10px 10px 0;
  border-color: transparent #ebedf0 transparent transparent;
}
@media (max-width: 767px) {
  .timeline .events {
    padding-left: 0px;
  }
  .timeline .events > .wrapper {
    width: auto;
  }
  .timeline .events > .wrapper:nth-of-type(odd),
  .timeline .events > .wrapper:nth-of-type(even) {
    float: none;
    clear: both;
    margin-top: 48px;
  }
  .timeline .events > .wrapper:nth-of-type(odd) > .panel:after,
  .timeline .events > .wrapper:nth-of-type(even) > .panel:after,
  .timeline .events > .wrapper:nth-of-type(odd) > .panel:before,
  .timeline .events > .wrapper:nth-of-type(even) > .panel:before {
    display: none;
  }
  .timeline .events > .wrapper > .figure {
    margin-top: -41px;
  }
}
.va-t {
  vertical-align: top !important;
}
.va-m {
  vertical-align: middle !important;
}
.va-b {
  vertical-align: bottom !important;
}
.pull-right-xs {
  float: right;
}
.pull-left-xs {
  float: left;
}
@media (min-width: 768px) {
  .pull-right-sm {
    float: right;
  }
  .pull-left-sm {
    float: left;
  }
  .text-right-sm {
    text-align: right;
  }
  .text-left-sm {
    text-align: left;
  }
  .pull-right-xs {
    float: none;
  }
  .pull-left-xs {
    float: none;
  }
}
@media (min-width: 992px) {
  .pull-right-md {
    float: right;
  }
  .pull-left-md {
    float: left;
  }
  .text-right-md {
    text-align: right;
  }
  .text-left-md {
    text-align: left;
  }
  .pull-right-xs {
    float: none;
  }
  .pull-left-xs {
    float: none;
  }
}
@media (min-width: 1200px) {
  .pull-right-lg {
    float: right;
  }
  .pull-left-lg {
    float: left;
  }
  .text-right-lg {
    text-align: right;
  }
  .text-left-lg {
    text-align: left;
  }
  .pull-right-xs {
    float: none;
  }
  .pull-left-xs {
    float: none;
  }
}
.bdr-a {
  border: 1px solid #ebedf0 !important;
}
.bdr-l {
  border-left: 1px solid #ebedf0 !important;
}
.bdr-r {
  border-right: 1px solid #ebedf0 !important;
}
.bdr-t {
  border-top: 1px solid #ebedf0 !important;
}
.bdr-b {
  border-bottom: 1px solid #ebedf0 !important;
}
.bdr-c-t {
  border-color: transparent !important;
}
.bdr-w-0 {
  border-width: 0 !important;
}
.bdr-l-wdh-0 {
  border-left-width: 0 !important;
}
.bdr-r-wdh-0 {
  border-right-width: 0 !important;
}
.bdr-t-wdh-0 {
  border-top-width: 0 !important;
}
.bdr-b-wdh-0 {
  border-bottom-width: 0 !important;
}
.bdr-rds-0 {
  border-radius: 0 !important;
}
.bdr-rds {
  border-radius: 3px !important;
}
.bdr-rds-lg {
  border-radius: 4px !important;
}
.bdr-rds-sm {
  border-radius: 2px !important;
}
@media (max-width: 767px) {
  .bdr-l-xs {
    border-left: 1px solid #ebedf0;
  }
  .bdr-r-xs {
    border-right: 1px solid #ebedf0;
  }
  .bdr-t-xs {
    border-top: 1px solid #ebedf0;
  }
  .bdr-b-xs {
    border-bottom: 1px solid #ebedf0;
  }
}
@media (min-width: 768px) {
  .bdr-l-sm {
    border-left: 1px solid #ebedf0;
  }
  .bdr-r-sm {
    border-right: 1px solid #ebedf0;
  }
  .bdr-t-sm {
    border-top: 1px solid #ebedf0;
  }
  .bdr-b-sm {
    border-bottom: 1px solid #ebedf0;
  }
}
@media (min-width: 992px) {
  .bdr-l-md {
    border-left: 1px solid #ebedf0;
  }
  .bdr-r-md {
    border-right: 1px solid #ebedf0;
  }
  .bdr-t-md {
    border-top: 1px solid #ebedf0;
  }
  .bdr-b-md {
    border-bottom: 1px solid #ebedf0;
  }
}
@media (min-width: 1200px) {
  .bdr-l-lg {
    border-left: 1px solid #ebedf0;
  }
  .bdr-r-lg {
    border-right: 1px solid #ebedf0;
  }
  .bdr-t-lg {
    border-top: 1px solid #ebedf0;
  }
  .bdr-b-lg {
    border-bottom: 1px solid #ebedf0;
  }
}
.bg-picture {
  position: relative;
  min-height: 260px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.bg-picture > .bg-picture-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
}
.bg-picture > .meta {
  position: absolute;
  left: 0;
  right: 0;
}
.bg-picture > .meta.top {
  top: 0;
}
.bg-picture > .meta.bottom {
  bottom: 0;
}
.shd-0,
.shd-none {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.csr-move {
  cursor: move !important;
}
.ma-20,
.ma-lg {
  margin: 20px !important;
}
.ma-15,
.ma-md {
  margin: 15px !important;
}
.ma-10,
.ma-sm {
  margin: 10px !important;
}
.ma-5,
.ma-xs {
  margin: 5px !important;
}
.ma-4 {
  margin: 4px !important;
}
.ma-3 {
  margin: 3px !important;
}
.ma-2 {
  margin: 2px !important;
}
.ma-1 {
  margin: 1px !important;
}
.nm {
  margin: 0px !important;
}
.mna-20,
.mna-lg {
  margin: -20px !important;
}
.mna-15,
.mna-md {
  margin: -15px !important;
}
.mna-10,
.mna-sm {
  margin: -10px !important;
}
.mna-5,
.mna-xs {
  margin: -5px !important;
}
.mna-4 {
  margin: -4px !important;
}
.mna-3 {
  margin: -3px !important;
}
.mna-2 {
  margin: -2px !important;
}
.mna-1 {
  margin: -1px !important;
}
.mt-20,
.mt-lg {
  margin-top: 20px !important;
}
.mt-15,
.mt-md {
  margin-top: 15px !important;
}
.mt-10,
.mt-sm {
  margin-top: 10px !important;
}
.mt-5,
.mt-xs {
  margin-top: 5px !important;
}
.mt-4 {
  margin-top: 4px !important;
}
.mt-3 {
  margin-top: 3px !important;
}
.mt-2 {
  margin-top: 2px !important;
}
.mt-1 {
  margin-top: 1px !important;
}
.mt-0 {
  margin-top: 0px !important;
}
.mnt-20,
.mnt-lg {
  margin-top: -20px !important;
}
.mnt-15,
.mnt-md {
  margin-top: -15px !important;
}
.mnt-10,
.mnt-sm {
  margin-top: -10px !important;
}
.mnt-5,
.mnt-xs {
  margin-top: -5px !important;
}
.mnt-4 {
  margin-top: -4px !important;
}
.mnt-3 {
  margin-top: -3px !important;
}
.mnt-2 {
  margin-top: -2px !important;
}
.mnt-1 {
  margin-top: -1px !important;
}
.mr-20,
.mr-lg {
  margin-right: 20px !important;
}
.mr-15,
.mr-md {
  margin-right: 15px !important;
}
.mr-10,
.mr-sm {
  margin-right: 10px !important;
}
.mr-5,
.mr-xs {
  margin-right: 5px !important;
}
.mr-4 {
  margin-right: 4px !important;
}
.mr-3 {
  margin-right: 3px !important;
}
.mr-2 {
  margin-right: 2px !important;
}
.mr-1 {
  margin-right: 1px !important;
}
.mr-0 {
  margin-right: 0px !important;
}
.mnr-20,
.mnr-lg {
  margin-right: -20px !important;
}
.mnr-15,
.mnr-md {
  margin-right: -15px !important;
}
.mnr-10,
.mnr-sm {
  margin-right: -10px !important;
}
.mnr-5,
.mnr-xs {
  margin-right: -5px !important;
}
.mnr-4 {
  margin-right: -4px !important;
}
.mnr-3 {
  margin-right: -3px !important;
}
.mnr-2 {
  margin-right: -2px !important;
}
.mnr-1 {
  margin-right: -1px !important;
}
.mb-20,
.mb-lg {
  margin-bottom: 20px !important;
}
.mb-15,
.mb-md {
  margin-bottom: 15px !important;
}
.mb-10,
.mb-sm {
  margin-bottom: 10px !important;
}
.mb-5,
.mb-xs {
  margin-bottom: 5px !important;
}
.mb-4 {
  margin-bottom: 4px !important;
}
.mb-3 {
  margin-bottom: 3px !important;
}
.mb-2 {
  margin-bottom: 2px !important;
}
.mb-1 {
  margin-bottom: 1px !important;
}
.mb-0 {
  margin-bottom: 0px !important;
}
.mnb-20,
.mnb-lg {
  margin-bottom: -20px !important;
}
.mnb-15,
.mnb-md {
  margin-bottom: -15px !important;
}
.mnb-10,
.mnb-sm {
  margin-bottom: -10px !important;
}
.mnb-5,
.mnb-xs {
  margin-bottom: -5px !important;
}
.mnb-4 {
  margin-bottom: -4px !important;
}
.mnb-3 {
  margin-bottom: -3px !important;
}
.mnb-2 {
  margin-bottom: -2px !important;
}
.mnb-1 {
  margin-bottom: -1px !important;
}
.ml-20,
.ml-lg {
  margin-left: 20px !important;
}
.ml-15,
.ml-md {
  margin-left: 15px !important;
}
.ml-10,
.ml-sm {
  margin-left: 10px !important;
}
.ml-5,
.ml-xs {
  margin-left: 5px !important;
}
.ml-4 {
  margin-left: 4px !important;
}
.ml-3 {
  margin-left: 3px !important;
}
.ml-2 {
  margin-left: 2px !important;
}
.ml-1 {
  margin-left: 1px !important;
}
.ml-0 {
  margin-left: 0px !important;
}
.mnl-20,
.mnl-lg {
  margin-left: -20px !important;
}
.mnl-15,
.mnl-md {
  margin-left: -15px !important;
}
.mnl-10,
.mnl-sm {
  margin-left: -10px !important;
}
.mnl-5,
.mnl-xs {
  margin-left: -5px !important;
}
.mnl-4 {
  margin-left: -4px !important;
}
.mnl-3 {
  margin-left: -3px !important;
}
.mnl-2 {
  margin-left: -2px !important;
}
.mnl-1 {
  margin-left: -1px !important;
}
.pa-20,
.pa-lg {
  padding: 20px !important;
}
.pa-15,
.pa-md {
  padding: 15px !important;
}
.pa-10,
.pa-sm {
  padding: 10px !important;
}
.pa-5,
.pa-xs {
  padding: 5px !important;
}
.pa-4 {
  padding: 4px !important;
}
.pa-3 {
  padding: 3px !important;
}
.pa-2 {
  padding: 2px !important;
}
.pa-1 {
  padding: 1px !important;
}
.np {
  padding: 0px !important;
}
.pt-20,
.pt-lg {
  padding-top: 20px !important;
}
.pt-15,
.pt-md {
  padding-top: 15px !important;
}
.pt-10,
.pt-sm {
  padding-top: 10px !important;
}
.pt-5,
.pt-xs {
  padding-top: 5px !important;
}
.pt-4 {
  padding-top: 4px !important;
}
.pt-3 {
  padding-top: 3px !important;
}
.pt-2 {
  padding-top: 2px !important;
}
.pt-1 {
  padding-top: 1px !important;
}
.pt-0 {
  padding-top: 0px !important;
}
.pr-20,
.pr-lg {
  padding-right: 20px !important;
}
.pr-15,
.pr-md {
  padding-right: 15px !important;
}
.pr-10,
.pr-sm {
  padding-right: 10px !important;
}
.pr-5,
.pr-xs {
  padding-right: 5px !important;
}
.pr-4 {
  padding-right: 4px !important;
}
.pr-3 {
  padding-right: 3px !important;
}
.pr-2 {
  padding-right: 2px !important;
}
.pr-1 {
  padding-right: 1px !important;
}
.pr-0 {
  padding-right: 0px !important;
}
.pb-20,
.pb-lg {
  padding-bottom: 20px !important;
}
.pb-15,
.pb-md {
  padding-bottom: 15px !important;
}
.pb-10,
.pb-sm {
  padding-bottom: 10px !important;
}
.pb-5,
.pb-xs {
  padding-bottom: 5px !important;
}
.pb-4 {
  padding-bottom: 4px !important;
}
.pb-3 {
  padding-bottom: 3px !important;
}
.pb-2 {
  padding-bottom: 2px !important;
}
.pb-1 {
  padding-bottom: 1px !important;
}
.pb-0 {
  padding-bottom: 0px !important;
}
.pl-20,
.pl-lg {
  padding-left: 20px !important;
}
.pl-15,
.pl-md {
  padding-left: 15px !important;
}
.pl-10,
.pl-sm {
  padding-left: 10px !important;
}
.pl-5,
.pl-xs {
  padding-left: 5px !important;
}
.pl-4 {
  padding-left: 4px !important;
}
.pl-3 {
  padding-left: 3px !important;
}
.pl-2 {
  padding-left: 2px !important;
}
.pl-1 {
  padding-left: 1px !important;
}
.pl-0 {
  padding-left: 0px !important;
}
.w-44 {
  width: 44px;
}
.no-focus.form-control,
.form-control .no-focus {
  border-color: transparent;
}
.no-focus.form-control:focus,
.form-control .no-focus:focus {
  outline: 0;
}
.ovf-h {
  overflow: hidden;
}
.break-word {
  -ms-word-break: break-all;
  word-break: break-all;
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
}
.builder,
.builder-slot {
  position: relative;
}
.builder [data-token],
.builder-slot [data-token] {
  cursor: pointer;
}
.builder .btn-block.ui-draggable-dragging,
.builder-slot .btn-block.ui-draggable-dragging {
  width: 104px;
  height: 68px;
  margin: 6px 12px;
  white-space: normal;
}
.builder .builder-panel-top,
.builder-slot .builder-panel-top {
  margin-bottom: 10px;
}
.builder .template-dnd-help,
.builder-slot .template-dnd-help,
.builder .custom-dnd-help,
.builder-slot .custom-dnd-help {
  display: table-cell;
  vertical-align: middle;
  width: 100%;
}
.builder-active {
  background-color: #fff;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1030;
}
.builder-panel {
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  width: 30%;
  height: 100%;
  padding: 15px;
  background-color: #d5d4d4;
  overflow-y: auto;
}
.builder-content {
  position: fixed;
  left: 0;
  top: 0;
  width: 70%;
  height: 100%;
}
.code-mode .builder-panel {
  width: 50%;
  position: fixed;
}
.code-mode .builder-content {
  width: 50%;
}
.builder-panel .panel a.btn {
  white-space: normal;
}
/********** SLOT ************/
.builder-active-slot {
  background-color: #fff;
  z-index: 1030;
}
.builder-panel-slot {
  width: 50%;
  padding: 15px;
  background-color: #d5d4d4;
  overflow-y: auto;
}
.builder-content-slot {
  left: 50%;
  width: 50%;
}
.code-mode .builder-panel-slot {
  width: 50%;
}
.code-mode .builder-content-slot {
  width: 50%;
}
.builder-panel-slot .panel a.btn {
  white-space: normal;
}
/************* END SLOT ******************/
.ui-draggable-iframeFix {
  z-index: 9999 !important;
}
.CodeMirror {
  border: 1px solid #eee;
  height: auto;
}
.CodeMirror-hints {
  position: absolute;
  z-index: 9999 !important;
  overflow: hidden;
  list-style: none;
  margin: 0;
  padding: 2px;
  -webkit-box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  border: 1px solid silver;
  background: white;
  font-size: 90%;
  font-family: monospace;
  max-height: 20em;
  overflow-y: auto;
}
.CodeMirror-hint {
  margin: 0;
  padding: 0 4px;
  border-radius: 2px;
  white-space: pre;
  color: black;
  cursor: pointer;
}
li.CodeMirror-hint-active {
  background: #08f;
  color: white;
}
@media (max-width: 767px) {
  .builder .builder-panel {
    width: 100%;
    bottom: 0;
    top: auto;
    height: 35%;
    padding-left: 30px !important;
    padding-right: 30px !important;
    border-top: 1px solid #757575;
    position: fixed;
  }
  .builder .builder-content {
    right: 0;
    width: 100%;
  }
  .builder .builder-panel-top {
    position: relative;
    width: 100%;
  }
  .builder .builder-tokens {
    margin-top: 10px;
  }
}
.mautic-editable {
  min-height: 75px;
  width: 100%;
  border: dashed 1px #000;
  margin-top: 3px;
  margin-bottom: 3px;
}
.mautic-editable.over-droppable {
  border: dashed 2px #4e5e9e;
  -webkit-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
}
.mautic-editable-placeholder {
  height: 100%;
  width: 100%;
  text-align: center;
  margin-top: 25px;
}
div[contentEditable=true]:empty:not(:focus):before {
  content: attr(data-placeholder);
  padding: 5px;
  display: table-cell;
}
.inline-token-list {
  max-height: 200px;
  overflow-y: auto;
  overflow-x: hidden;
  margin-bottom: 20px;
  padding-left: 0;
  width: 240px;
}
.inline-token {
  position: relative;
  display: block;
  padding: 5px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #f7f7f7;
  color: #f7f7f7;
  font-size: 12px;
}
.inline-token:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.inline-token:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.inline-token {
  color: #000000;
  text-decoration: none;
  font-family: \"Open Sans\", Helvetica, Arial, sans-serif;
  line-height: 1.3856;
}
a.inline-token:hover,
a.inline-token:focus {
  background-color: #DBDFEC;
}
a.inline-token .text-muted {
  color: #8393a2;
}
.sortable-panels .panel {
  position: relative;
}
.sortable-panels .panel.sortable-has-error {
  border-color: #F86B4F;
}
.sortable-panels .panel .sortable-panel-label {
  font-weight: bold;
}
.sortable-panels .panel .sortable-panel-buttons {
  position: absolute;
  right: 8px;
  top: 8px;
}
.sortable-panels .panel .sortable-panel-content {
  min-height: 50px;
  padding: 10px;
}
.sortable-panels .panel.new-panel {
  border: none;
}
.sortable-panels .panel.new-panel .sortable-panel-wrapper {
  display: none;
}
@media (min-width: 992px) {
  .modal-xl {
    width: 1140px;
  }
}
.bg-auto .tabs-left > li.active > a,
.bg-auto .tabs-left > li.active > a:hover,
.bg-auto .tabs-left > li.active > a:focus {
  border-left-width: 0;
}
.bg-auto .tabs-left,
.bg-auto .tabs-right {
  -webkit-box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);
}
.bg-auto .tabs-left li:last-child,
.bg-auto .tabs-right li:last-child {
  margin-bottom: -2px;
}
.bg-auto .tabs-right > li.active > a,
.bg-auto .tabs-right > li.active > a:hover,
.bg-auto .tabs-right > li.active > a:focus {
  border-right-width: 0;
}
.tab-button {
  border-bottom: 1px solid #ebedf0 !important;
}
.modal-body.np .tabs-horizontal {
  margin-top: -1px;
}
.modal-body.np .tabs-left li > a,
.modal-body.np .tabs-right li > a {
  border-radius: 0;
}
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
.stat-boxes .panel {
  height: 164px;
}
.has-click-event {
  cursor: pointer;
}
.mautibot-error {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
}
label.required:after {
  content: \" *\";
  color: #F86B4F;
}
#app-header .nav > li > a {
  padding: 10px 12px;
}
.search-container {
  position: relative;
  line-height: 60px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.search-container .search {
  border: 1px solid #fff;
  position: absolute;
  left: 0px;
  width: 24px;
  height: 34px;
  padding: 0 0 0 24px;
  margin: 12px 0 0 5px;
  z-index: 1;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.search-container a.search-button {
  color: rgba(0, 0, 0, 0.6);
  position: absolute;
  left: 12px;
  z-index: 5;
}
.search-container.active .search {
  width: 225px;
  border: 1px solid #d5d5d5;
}
.search-container.active i {
  color: #4E5D9D;
}
.col-actions {
  width: 100px;
}
/* Shuffle */
.shuffle-item .card {
  height: 150px;
}
.equal,
.equal > div[class*='col-'] {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex: 1 1 auto;
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
@media (max-width: 768px) {
  .form-select-modal .panel-body {
    min-height: 0;
  }
}
.table .input-group-sm > .input-group-addon {
  font-size: 10px;
  line-height: 1em;
}
.table .input-group-sm .dropdown-toggle {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group .input-group-btn button {
  height: 32px;
}
.theme-selected {
  border: 1px solid #4e5e9e;
  -webkit-box-shadow: 0px 0px 40px #f3f3f3;
  box-shadow: 0px 0px 40px #f3f3f3;
}
#app-content.content-only .toolbar-form-buttons.pull-right {
  padding-right: 20px;
}
.fr-toolbar {
  border-top: 2px solid #4e5d9d;
}
.modal-body-content iframe.fr-iframe {
  min-height: 300px;
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
  color: #5d6c7c;
}
#dynamicContentContainer .remove-item {
  display: block;
}
#dynamicContentContainer > .tab-pane > .panel > ul {
  white-space: nowrap;
  overflow: auto;
  overflow-y: hidden;
  max-width: 100%;
}
#dynamicContentContainer > .tab-pane > .panel > ul li {
  display: inline-block;
  vertical-align: top;
  float: none;
}
div[data-filter-container] .in-group {
  margin-left: 20px;
}
div[data-filter-container] .panel {
  margin-bottom: 0;
  margin-top: 20px;
}
div[data-filter-container] .panel.in-group {
  margin-top: 0;
  border-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
td.col-id,
th.col-id {
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
.imagecard-caption,
figcaption {
  font-size: 16px;
}
.imagecard {
  background-color: #ddd !important;
}
.imagecard .imagecard-caption {
  background-color: #bbb !important;
}
ul.media-list.media-list-feed div.media-body {
  width: auto;
}
ul.media-list.media-list-feed div.media-object {
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
#globalSearchDropdown .list-group-item > a {
  padding-top: 10px;
}
.characters-count {
  z-index: 100;
  top: 20px;
  float: right;
  position: relative;
  right: 10px;
}
/*# sourceMappingURL=app.css.map */";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app.css");
    }
}
