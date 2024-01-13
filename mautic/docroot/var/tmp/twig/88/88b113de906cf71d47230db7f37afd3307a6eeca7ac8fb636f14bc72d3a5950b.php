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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/mouse.js */
class __TwigTemplate_9e24462e35ee7c6eba8f0ce99aa038109bcc18531f2c3c1df0d11c8af094142a extends Template
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
 * jQuery UI Mouse 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Mouse
//>>group: Widgets
//>>description: Abstracts mouse-based interactions to assist in creating certain widgets.
//>>docs: http://api.jqueryui.com/mouse/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../ie\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

var mouseHandled = false;
\$( document ).on( \"mouseup\", function() {
\tmouseHandled = false;
} );

return \$.widget( \"ui.mouse\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tcancel: \"input, textarea, button, select, option\",
\t\tdistance: 1,
\t\tdelay: 0
\t},
\t_mouseInit: function() {
\t\tvar that = this;

\t\tthis.element
\t\t\t.on( \"mousedown.\" + this.widgetName, function( event ) {
\t\t\t\treturn that._mouseDown( event );
\t\t\t} )
\t\t\t.on( \"click.\" + this.widgetName, function( event ) {
\t\t\t\tif ( true === \$.data( event.target, that.widgetName + \".preventClickEvent\" ) ) {
\t\t\t\t\t\$.removeData( event.target, that.widgetName + \".preventClickEvent\" );
\t\t\t\t\tevent.stopImmediatePropagation();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t} );

\t\tthis.started = false;
\t},

\t// TODO: make sure destroying one instance of mouse doesn't mess with
\t// other instances of mouse
\t_mouseDestroy: function() {
\t\tthis.element.off( \".\" + this.widgetName );
\t\tif ( this._mouseMoveDelegate ) {
\t\t\tthis.document
\t\t\t\t.off( \"mousemove.\" + this.widgetName, this._mouseMoveDelegate )
\t\t\t\t.off( \"mouseup.\" + this.widgetName, this._mouseUpDelegate );
\t\t}
\t},

\t_mouseDown: function( event ) {

\t\t// don't let more than one widget handle mouseStart
\t\tif ( mouseHandled ) {
\t\t\treturn;
\t\t}

\t\tthis._mouseMoved = false;

\t\t// We may have missed mouseup (out of window)
\t\t( this._mouseStarted && this._mouseUp( event ) );

\t\tthis._mouseDownEvent = event;

\t\tvar that = this,
\t\t\tbtnIsLeft = ( event.which === 1 ),

\t\t\t// event.target.nodeName works around a bug in IE 8 with
\t\t\t// disabled inputs (#7620)
\t\t\telIsCancel = ( typeof this.options.cancel === \"string\" && event.target.nodeName ?
\t\t\t\t\$( event.target ).closest( this.options.cancel ).length : false );
\t\tif ( !btnIsLeft || elIsCancel || !this._mouseCapture( event ) ) {
\t\t\treturn true;
\t\t}

\t\tthis.mouseDelayMet = !this.options.delay;
\t\tif ( !this.mouseDelayMet ) {
\t\t\tthis._mouseDelayTimer = setTimeout( function() {
\t\t\t\tthat.mouseDelayMet = true;
\t\t\t}, this.options.delay );
\t\t}

\t\tif ( this._mouseDistanceMet( event ) && this._mouseDelayMet( event ) ) {
\t\t\tthis._mouseStarted = ( this._mouseStart( event ) !== false );
\t\t\tif ( !this._mouseStarted ) {
\t\t\t\tevent.preventDefault();
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\t// Click event may never have fired (Gecko & Opera)
\t\tif ( true === \$.data( event.target, this.widgetName + \".preventClickEvent\" ) ) {
\t\t\t\$.removeData( event.target, this.widgetName + \".preventClickEvent\" );
\t\t}

\t\t// These delegates are required to keep context
\t\tthis._mouseMoveDelegate = function( event ) {
\t\t\treturn that._mouseMove( event );
\t\t};
\t\tthis._mouseUpDelegate = function( event ) {
\t\t\treturn that._mouseUp( event );
\t\t};

\t\tthis.document
\t\t\t.on( \"mousemove.\" + this.widgetName, this._mouseMoveDelegate )
\t\t\t.on( \"mouseup.\" + this.widgetName, this._mouseUpDelegate );

\t\tevent.preventDefault();

\t\tmouseHandled = true;
\t\treturn true;
\t},

\t_mouseMove: function( event ) {

\t\t// Only check for mouseups outside the document if you've moved inside the document
\t\t// at least once. This prevents the firing of mouseup in the case of IE<9, which will
\t\t// fire a mousemove event if content is placed under the cursor. See #7778
\t\t// Support: IE <9
\t\tif ( this._mouseMoved ) {

\t\t\t// IE mouseup check - mouseup happened when mouse was out of window
\t\t\tif ( \$.ui.ie && ( !document.documentMode || document.documentMode < 9 ) &&
\t\t\t\t\t!event.button ) {
\t\t\t\treturn this._mouseUp( event );

\t\t\t// Iframe mouseup check - mouseup occurred in another document
\t\t\t} else if ( !event.which ) {

\t\t\t\t// Support: Safari <=8 - 9
\t\t\t\t// Safari sets which to 0 if you press any of the following keys
\t\t\t\t// during a drag (#14461)
\t\t\t\tif ( event.originalEvent.altKey || event.originalEvent.ctrlKey ||
\t\t\t\t\t\tevent.originalEvent.metaKey || event.originalEvent.shiftKey ) {
\t\t\t\t\tthis.ignoreMissingWhich = true;
\t\t\t\t} else if ( !this.ignoreMissingWhich ) {
\t\t\t\t\treturn this._mouseUp( event );
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( event.which || event.button ) {
\t\t\tthis._mouseMoved = true;
\t\t}

\t\tif ( this._mouseStarted ) {
\t\t\tthis._mouseDrag( event );
\t\t\treturn event.preventDefault();
\t\t}

\t\tif ( this._mouseDistanceMet( event ) && this._mouseDelayMet( event ) ) {
\t\t\tthis._mouseStarted =
\t\t\t\t( this._mouseStart( this._mouseDownEvent, event ) !== false );
\t\t\t( this._mouseStarted ? this._mouseDrag( event ) : this._mouseUp( event ) );
\t\t}

\t\treturn !this._mouseStarted;
\t},

\t_mouseUp: function( event ) {
\t\tthis.document
\t\t\t.off( \"mousemove.\" + this.widgetName, this._mouseMoveDelegate )
\t\t\t.off( \"mouseup.\" + this.widgetName, this._mouseUpDelegate );

\t\tif ( this._mouseStarted ) {
\t\t\tthis._mouseStarted = false;

\t\t\tif ( event.target === this._mouseDownEvent.target ) {
\t\t\t\t\$.data( event.target, this.widgetName + \".preventClickEvent\", true );
\t\t\t}

\t\t\tthis._mouseStop( event );
\t\t}

\t\tif ( this._mouseDelayTimer ) {
\t\t\tclearTimeout( this._mouseDelayTimer );
\t\t\tdelete this._mouseDelayTimer;
\t\t}

\t\tthis.ignoreMissingWhich = false;
\t\tmouseHandled = false;
\t\tevent.preventDefault();
\t},

\t_mouseDistanceMet: function( event ) {
\t\treturn ( Math.max(
\t\t\t\tMath.abs( this._mouseDownEvent.pageX - event.pageX ),
\t\t\t\tMath.abs( this._mouseDownEvent.pageY - event.pageY )
\t\t\t) >= this.options.distance
\t\t);
\t},

\t_mouseDelayMet: function( /* event */ ) {
\t\treturn this.mouseDelayMet;
\t},

\t// These are placeholder methods, to be overriden by extending plugin
\t_mouseStart: function( /* event */ ) {},
\t_mouseDrag: function( /* event */ ) {},
\t_mouseStop: function( /* event */ ) {},
\t_mouseCapture: function( /* event */ ) { return true; }
} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/mouse.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/mouse.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/mouse.js");
    }
}
