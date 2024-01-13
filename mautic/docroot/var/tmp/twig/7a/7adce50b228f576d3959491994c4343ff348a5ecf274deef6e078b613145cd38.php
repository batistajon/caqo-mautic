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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/contents.css */
class __TwigTemplate_645bfe34e307589f80f6c7611595d5f4870b3330daa5791fbdf2380c744b8543 extends Template
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
        echo "/*
Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/

body
{
\t/* Font */
\t/* Emoji fonts are added to visualise them nicely in Internet Explorer. */
\tfont-family: sans-serif, Arial, Verdana, \"Trebuchet MS\", \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";
\tfont-size: 12px;

\t/* Text color */
\tcolor: #333;

\t/* Remove the background color to make it transparent. */
\tbackground-color: #fff;

\tmargin: 20px;
}

.cke_editable
{
\tfont-size: 13px;
\tline-height: 1.6;

\t/* Fix for missing scrollbars with RTL texts. (#10488) */
\tword-wrap: break-word;
}

blockquote
{
\tfont-style: italic;
\tfont-family: Georgia, Times, \"Times New Roman\", serif;
\tpadding: 2px 0;
\tborder-style: solid;
\tborder-color: #ccc;
\tborder-width: 0;
}

.cke_contents_ltr blockquote
{
\tpadding-left: 20px;
\tpadding-right: 8px;
\tborder-left-width: 5px;
}

.cke_contents_rtl blockquote
{
\tpadding-left: 8px;
\tpadding-right: 20px;
\tborder-right-width: 5px;
}

a
{
\tcolor: #0782C1;
}

ol,ul,dl
{
\t/* IE7: reset rtl list margin. (#7334) */
\t*margin-right: 0px;
\t/* Preserved spaces for list items with text direction different than the list. (#6249,#8049)*/
\tpadding: 0 40px;
}

h1,h2,h3,h4,h5,h6
{
\tfont-weight: normal;
\tline-height: 1.2;
}

hr
{
\tborder: 0px;
\tborder-top: 1px solid #ccc;
}

img.right
{
\tborder: 1px solid #ccc;
\tfloat: right;
\tmargin-left: 15px;
\tpadding: 5px;
}

img.left
{
\tborder: 1px solid #ccc;
\tfloat: left;
\tmargin-right: 15px;
\tpadding: 5px;
}

pre
{
\twhite-space: pre-wrap; /* CSS 2.1 */
\tword-wrap: break-word; /* IE7 */
\t-moz-tab-size: 4;
\ttab-size: 4;
}

.marker
{
\tbackground-color: Yellow;
}

span[lang]
{
\tfont-style: italic;
}

figure
{
\ttext-align: center;
\toutline: solid 1px #ccc;
\tbackground: rgba(0,0,0,0.05);
\tpadding: 10px;
\tmargin: 10px 20px;
\tdisplay: inline-block;
}

figure > figcaption
{
\ttext-align: center;
\tdisplay: block; /* For IE8 */
}

a > img {
\tpadding: 1px;
\tmargin: 1px;
\tborder: none;
\toutline: 1px solid #0782C1;
}

/* Widget Styles */
.code-featured
{
\tborder: 5px solid red;
}

.math-featured
{
\tpadding: 20px;
\tbox-shadow: 0 0 2px rgba(200, 0, 0, 1);
\tbackground-color: rgba(255, 0, 0, 0.05);
\tmargin: 10px;
}

.image-clean
{
\tborder: 0;
\tbackground: none;
\tpadding: 0;
}

.image-clean > figcaption
{
\tfont-size: .9em;
\ttext-align: right;
}

.image-grayscale
{
\tbackground-color: white;
\tcolor: #666;
}

.image-grayscale img, img.image-grayscale
{
\tfilter: grayscale(100%);
}

.embed-240p
{
\tmax-width: 426px;
\tmax-height: 240px;
\tmargin:0 auto;
}

.embed-360p
{
\tmax-width: 640px;
\tmax-height: 360px;
\tmargin:0 auto;
}

.embed-480p
{
\tmax-width: 854px;
\tmax-height: 480px;
\tmargin:0 auto;
}

.embed-720p
{
\tmax-width: 1280px;
\tmax-height: 720px;
\tmargin:0 auto;
}

.embed-1080p
{
\tmax-width: 1920px;
\tmax-height: 1080px;
\tmargin:0 auto;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/contents.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/contents.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/contents.css");
    }
}
