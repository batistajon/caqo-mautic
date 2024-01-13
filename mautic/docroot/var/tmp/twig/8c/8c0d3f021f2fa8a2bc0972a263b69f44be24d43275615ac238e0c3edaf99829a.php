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

/* @bundles/CoreBundle/Assets/css/app/less/variables.less */
class __TwigTemplate_c7b242e948b246ea9ebfb4333d4f6b812c09d81fa7e35e314d2677c5c34e4279 extends Template
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
        echo "//
// Variables
// --------------------------------------------------

//== Bootstrap variable
//
//## import bootstrap variable.
@import \"../../libraries/bootstrap/less/variables.less\";

//== Logo
//
//## common logo color
@mautic-logo-figure-width:                  32px;
@mautic-logo-figure-circle-fill:            #ffffff;
@mautic-logo-figure-m-fill:                 @brand-warning;
@mautic-logo-text-width:                    98px;
@mautic-logo-text-fill:                     #ffffff;

// Brand Colors
@mautic-primary:\t\t\t\t\t\t\t#4e5e9e;
@mautic-secondary:\t\t\t\t\t\t\t#fdb933;
@mautic-tertiary:\t\t\t\t\t\t\t#35b5b9;

//== Header layout
//
//## common main header variable.
@header-bg:                                 #ffffff;
@header-height:                             60px;
@header-zindex:                             @zindex-navbar + 5; // 1005


//== Sidebar layout
//
//## common main sidebar variable.
@sidebar-zindex:                           (@header-zindex - 20 + 5);  // 990
//** left sidebar option
@sidebar-left-bg:                           darken(#27303a, 5%);
@sidebar-left-header-bg:                    @brand-primary;
@sidebar-left-width:                        230px;
@sidebar-left-collapse-width:               60px;
@sidebar-left-dark:\t\t\t\t\t\t\tdarken(@sidebar-left-bg, 8%);

//** right sidebar option - coming soon
@sidebar-right-bg:                          @sidebar-left-bg;
@sidebar-right-header-bg:                   lighten(@sidebar-right-bg, 3%);
@sidebar-right-width:                       230px;



//== Content layout
//
//## common main content variable.
@content-zindex:                            (@header-zindex - 10 + 5);  // 1000
@content-bg:                                #f8f8f8;


//== Footer layout
//
//## common footer variable.
@footer-height:                             46px;
@footer-bg:                                 lighten(@body-bg, 1%);
@footer-zindex:                             @content-zindex;  // 1000
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/variables.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/variables.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/variables.less");
    }
}
