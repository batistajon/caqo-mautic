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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/samples/sharedspace.html */
class __TwigTemplate_2895a351780e108e45532ee425beb9956c1268375a19fdb5392e864326605996 extends Template
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
        echo "<!DOCTYPE html>
<!--
Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Shared-Space Plugin &mdash; CKEditor Sample</title>
\t<script src=\"../../../ckeditor.js\"></script>
\t<link rel=\"stylesheet\" href=\"../../../samples/old/sample.css\">
\t<meta name=\"ckeditor-sample-name\" content=\"Shared-Space plugin\">
\t<meta name=\"ckeditor-sample-group\" content=\"Plugins\">
\t<meta name=\"ckeditor-sample-description\" content=\"Having the toolbar and the bottom bar spaces shared by different editor instances.\">
\t<meta name=\"description\" content=\"Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.\">
</head>
<body>
\t<h1 class=\"samples\">
\t\t<a href=\"../../../samples/old/index.html\">CKEditor Samples</a> &raquo; Sharing Toolbar and Bottom-bar Spaces
\t</h1>
\t<div class=\"warning deprecated\">
\t\tThis sample is not maintained anymore. Check out its <a href=\"https://ckeditor.com/docs/ckeditor4/latest/examples/sharedspace.html\">brand new version in CKEditor Examples</a>.
\t</div>
\t<div class=\"description\">
\t\t<p>
\t\t\tThis sample shows several editor instances that share the very same spaces for both the toolbar and the bottom bar.
\t\t</p>
\t</div>
\t<div id=\"top\">
\t\t<!-- This div will handle all toolbars -->
\t</div>

\t<div style=\"height: 300px; overflow: auto; border: 1px solid #afafaf; padding: 20px; margin: 20px;\">

\t\t<div id=\"framed1\" style=\"width: 49%; float: left; margin-bottom: 20px;\"></div>
\t\t<div id=\"framed2\" style=\"width: 49%; float: right; margin-bottom: 20px;\"></div>

\t\t<hr style=\"clear: both; margin: 20px 0;\">

\t\t<div contenteditable=\"true\" id=\"inline1\" style=\"width: 49%; float: left;\">
\t\t\t<h3>
\t\t\t\tInteger condimentum sit amet
\t\t\t</h3>
\t\t\t<p>
\t\t\t\t<strong>Aenean nonummy a, mattis varius. Cras aliquet.</strong>
\t\t\t\tPraesent <a href=\"https://ckeditor.com/\">magna non mattis ac, rhoncus nunc</a>, rhoncus eget, cursus pulvinar mollis.</p>
\t\t\t<p>Proin id nibh. Sed eu libero posuere sed, lectus. Phasellus dui gravida gravida feugiat mattis ac, felis.</p>
\t\t\t<p>Integer condimentum sit amet, tempor elit odio, a dolor non ante at sapien. Sed ac lectus. Nulla ligula quis eleifend mi, id leo velit pede cursus arcu id nulla ac lectus. Phasellus vestibulum. Nunc viverra enim quis diam.</p>
\t\t</div>
\t\t<div contenteditable=\"true\" id=\"inline2\" style=\"width: 49%; float: right;\">
\t\t\t<h3>
\t\t\t\tPraesent wisi accumsan sit amet nibh
\t\t\t</h3>
\t\t\t<p>Donec ullamcorper, risus tortor, pretium porttitor. Morbi quam quis lectus non leo.</p>
\t\t\t<p style=\"margin-left: 40px; \">Integer faucibus scelerisque. Proin faucibus at, aliquet vulputate, odio at eros. Fusce <a href=\"https://ckeditor.com/\">gravida, erat vitae augue</a>. Fusce urna fringilla gravida.</p>
\t\t\t<p>In hac habitasse platea dictumst. Praesent wisi accumsan sit amet nibh. Maecenas orci luctus a, lacinia quam sem, posuere commodo, odio condimentum tempor, pede semper risus. Suspendisse pede. In hac habitasse platea dictumst. Nam sed laoreet sit amet erat. Integer.</p>
\t\t</div>

\t</div>

\t<div id=\"bottom\">
\t\t<!-- This div will handle all toolbars -->
\t</div>

\t<script>

\t\t// Turn off automatic editor creation first.
\t\tCKEDITOR.disableAutoInline = true;

\t\tCKEDITOR.inline( 'inline1', {
\t\t\textraPlugins: 'sharedspace',
\t\t\tremovePlugins: 'floatingspace,resize',
\t\t\tsharedSpaces: {
\t\t\t\ttop: 'top',
\t\t\t\tbottom: 'bottom'
\t\t\t}
\t\t});

\t\tCKEDITOR.inline( 'inline2', {
\t\t\textraPlugins: 'sharedspace',
\t\t\tremovePlugins: 'floatingspace,resize',
\t\t\tsharedSpaces: {
\t\t\t\ttop: 'top',
\t\t\t\tbottom: 'bottom'
\t\t\t}
\t\t});

\t\tCKEDITOR.appendTo( 'framed1', {
\t\t\t\textraPlugins: 'sharedspace',
\t\t\t\tremovePlugins: 'maximize,resize',
\t\t\t\tsharedSpaces: {
\t\t\t\t\ttop: 'top',
\t\t\t\t\tbottom: 'bottom'
\t\t\t\t}
\t\t\t},
\t\t\tdocument.getElementById( 'inline1' ).innerHTML
\t\t);

\t\tCKEDITOR.appendTo( 'framed2', {
\t\t\t\textraPlugins: 'sharedspace',
\t\t\t\tremovePlugins: 'maximize,resize',
\t\t\t\tsharedSpaces: {
\t\t\t\t\ttop: 'top',
\t\t\t\t\tbottom: 'bottom'
\t\t\t\t}
\t\t\t},
\t\t\tdocument.getElementById( 'inline2' ).innerHTML
\t\t);

\t</script>

\t<div id=\"footer\">
\t\t<hr>
\t\t<p>
\t\t\tCKEditor - The text editor for the Internet - <a class=\"samples\" href=\"https://ckeditor.com/\">https://ckeditor.com</a>
\t\t</p>
\t\t<p id=\"copy\">
\t\t\tCopyright &copy; 2003-2021, <a class=\"samples\" href=\"https://cksource.com/\">CKSource</a> - Frederico
\t\t\tKnabben. All rights reserved.
\t\t</p>
\t</div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/samples/sharedspace.html";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/samples/sharedspace.html", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/samples/sharedspace.html");
    }
}
