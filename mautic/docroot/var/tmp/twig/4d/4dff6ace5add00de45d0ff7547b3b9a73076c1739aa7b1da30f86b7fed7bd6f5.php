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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/tmpFrameset.html */
class __TwigTemplate_0c4fc5b33aef8c52957c8b1f93d6c429c63fada1126ad1ce7503dbbf7fd24270 extends Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Frameset//EN\" \"http://www.w3.org/TR/html4/frameset.dtd\">
<!--
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html>
<head>
\t<title></title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t<script type=\"text/javascript\">

function doLoadScript( url )
{
\tif ( !url || typeof url !== 'string' )
\t\treturn false ;

\tvar s = document.createElement( \"script\" ) ;
\ts.type = \"text/javascript\" ;
\ts.src = url ;
\tdocument.getElementsByTagName( \"head\" )[ 0 ].appendChild( s ) ;

\treturn true ;
}

var opener;
function tryLoad()
{
\topener = window.parent;

\t// get access to global parameters
\tvar oParams = window.opener.oldFramesetPageParams;

\t// make frameset rows string prepare
\tvar sFramesetRows = ( parseInt( oParams.firstframeh, 10 ) || '30') + \",*,\" + ( parseInt( oParams.thirdframeh, 10 ) || '150' ) + ',0' ;
\tdocument.getElementById( 'itFrameset' ).rows = sFramesetRows ;

\t// dynamic including init frames and crossdomain transport code
\t// from config sproxy_js_frameset url
\tvar addScriptUrl = oParams.sproxy_js_frameset ;
\tdoLoadScript( addScriptUrl ) ;
}

\t</script>
</head>

<frameset id=\"itFrameset\" onload=\"tryLoad();\" border=\"0\" rows=\"30,*,*,0\">
    <frame scrolling=\"no\" framespacing=\"0\" frameborder=\"0\" noresize=\"noresize\" marginheight=\"0\" marginwidth=\"2\" src=\"\" name=\"navbar\"></frame>
    <frame scrolling=\"auto\" framespacing=\"0\" frameborder=\"0\" noresize=\"noresize\" marginheight=\"0\" marginwidth=\"0\" src=\"\" name=\"mid\"></frame>
    <frame scrolling=\"no\" framespacing=\"0\" frameborder=\"0\" noresize=\"noresize\" marginheight=\"1\" marginwidth=\"1\" src=\"\" name=\"bot\"></frame>
    <frame scrolling=\"no\" framespacing=\"0\" frameborder=\"0\" noresize=\"noresize\" marginheight=\"1\" marginwidth=\"1\" src=\"\" name=\"spellsuggestall\"></frame>
</frameset>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/tmpFrameset.html";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/tmpFrameset.html", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/tmpFrameset.html");
    }
}
