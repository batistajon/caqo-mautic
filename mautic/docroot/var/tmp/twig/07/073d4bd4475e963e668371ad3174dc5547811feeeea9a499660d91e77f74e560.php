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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/ciframe.html */
class __TwigTemplate_8ae7945a2085b4874c6716f4890660c933c7b881450866f7672e274f9dbaa28b extends Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<!--
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html>
<head>
\t<title></title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t<script type=\"text/javascript\">

function gup( name )
{
\tname = name.replace( /[\\[]/, '\\\\\\[' ).replace( /[\\]]/, '\\\\\\]' ) ;
\tvar regexS = '[\\\\?&]' + name + '=([^&#]*)' ;
\tvar regex = new RegExp( regexS ) ;
\tvar results = regex.exec( window.location.href ) ;

\tif ( results )
\t\treturn results[ 1 ] ;
\telse
\t\treturn '' ;
}

var interval;

function sendData2Master()
{
\tvar destination = window.parent.parent ;
\ttry
\t{
\t\tif ( destination.XDTMaster )
\t\t{
\t\t\tvar t = destination.XDTMaster.read( [ gup( 'cmd' ), gup( 'data' ) ] ) ;
\t\t\twindow.clearInterval( interval ) ;
\t\t}
\t}
\tcatch (e) {}
}

function OnMessage (event) {
\t        var message = event.data;
\t        var destination = window.parent.parent;
\t        destination.XDTMaster.read( [ 'end', message, 'fpm' ] ) ;
}

function listenPostMessage() {
    if (window.addEventListener) { // all browsers except IE before version 9
            window.addEventListener (\"message\", OnMessage, false);
    }else {
            if (window.attachEvent) { // IE before version 9
                        window.attachEvent(\"onmessage\", OnMessage);
                }
        }
}

function onLoad()
{
\tinterval = window.setInterval( sendData2Master, 100 );
\tlistenPostMessage();
}

</script>
</head>
<body onload=\"onLoad()\"><p></p></body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/ciframe.html";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/ciframe.html", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/dialogs/ciframe.html");
    }
}
