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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectable.js */
class __TwigTemplate_0750683573e4c3c70733fcb0d105be9822d0e39962b6bd51823d7164ba83efbb extends Template
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
 * jQuery UI Selectable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Selectable
//>>group: Interactions
//>>description: Allows groups of elements to be selected with the mouse.
//>>docs: http://api.jqueryui.com/selectable/
//>>demos: http://jqueryui.com/selectable/
//>>css.structure: ../../themes/base/selectable.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./mouse\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.selectable\", \$.ui.mouse, {
\tversion: \"1.12.1\",
\toptions: {
\t\tappendTo: \"body\",
\t\tautoRefresh: true,
\t\tdistance: 0,
\t\tfilter: \"*\",
\t\ttolerance: \"touch\",

\t\t// Callbacks
\t\tselected: null,
\t\tselecting: null,
\t\tstart: null,
\t\tstop: null,
\t\tunselected: null,
\t\tunselecting: null
\t},
\t_create: function() {
\t\tvar that = this;

\t\tthis._addClass( \"ui-selectable\" );

\t\tthis.dragged = false;

\t\t// Cache selectee children based on filter
\t\tthis.refresh = function() {
\t\t\tthat.elementPos = \$( that.element[ 0 ] ).offset();
\t\t\tthat.selectees = \$( that.options.filter, that.element[ 0 ] );
\t\t\tthat._addClass( that.selectees, \"ui-selectee\" );
\t\t\tthat.selectees.each( function() {
\t\t\t\tvar \$this = \$( this ),
\t\t\t\t\tselecteeOffset = \$this.offset(),
\t\t\t\t\tpos = {
\t\t\t\t\t\tleft: selecteeOffset.left - that.elementPos.left,
\t\t\t\t\t\ttop: selecteeOffset.top - that.elementPos.top
\t\t\t\t\t};
\t\t\t\t\$.data( this, \"selectable-item\", {
\t\t\t\t\telement: this,
\t\t\t\t\t\$element: \$this,
\t\t\t\t\tleft: pos.left,
\t\t\t\t\ttop: pos.top,
\t\t\t\t\tright: pos.left + \$this.outerWidth(),
\t\t\t\t\tbottom: pos.top + \$this.outerHeight(),
\t\t\t\t\tstartselected: false,
\t\t\t\t\tselected: \$this.hasClass( \"ui-selected\" ),
\t\t\t\t\tselecting: \$this.hasClass( \"ui-selecting\" ),
\t\t\t\t\tunselecting: \$this.hasClass( \"ui-unselecting\" )
\t\t\t\t} );
\t\t\t} );
\t\t};
\t\tthis.refresh();

\t\tthis._mouseInit();

\t\tthis.helper = \$( \"<div>\" );
\t\tthis._addClass( this.helper, \"ui-selectable-helper\" );
\t},

\t_destroy: function() {
\t\tthis.selectees.removeData( \"selectable-item\" );
\t\tthis._mouseDestroy();
\t},

\t_mouseStart: function( event ) {
\t\tvar that = this,
\t\t\toptions = this.options;

\t\tthis.opos = [ event.pageX, event.pageY ];
\t\tthis.elementPos = \$( this.element[ 0 ] ).offset();

\t\tif ( this.options.disabled ) {
\t\t\treturn;
\t\t}

\t\tthis.selectees = \$( options.filter, this.element[ 0 ] );

\t\tthis._trigger( \"start\", event );

\t\t\$( options.appendTo ).append( this.helper );

\t\t// position helper (lasso)
\t\tthis.helper.css( {
\t\t\t\"left\": event.pageX,
\t\t\t\"top\": event.pageY,
\t\t\t\"width\": 0,
\t\t\t\"height\": 0
\t\t} );

\t\tif ( options.autoRefresh ) {
\t\t\tthis.refresh();
\t\t}

\t\tthis.selectees.filter( \".ui-selected\" ).each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" );
\t\t\tselectee.startselected = true;
\t\t\tif ( !event.metaKey && !event.ctrlKey ) {
\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selected\" );
\t\t\t\tselectee.selected = false;
\t\t\t\tthat._addClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\tselectee.unselecting = true;

\t\t\t\t// selectable UNSELECTING callback
\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\tunselecting: selectee.element
\t\t\t\t} );
\t\t\t}
\t\t} );

\t\t\$( event.target ).parents().addBack().each( function() {
\t\t\tvar doSelect,
\t\t\t\tselectee = \$.data( this, \"selectable-item\" );
\t\t\tif ( selectee ) {
\t\t\t\tdoSelect = ( !event.metaKey && !event.ctrlKey ) ||
\t\t\t\t\t!selectee.\$element.hasClass( \"ui-selected\" );
\t\t\t\tthat._removeClass( selectee.\$element, doSelect ? \"ui-unselecting\" : \"ui-selected\" )
\t\t\t\t\t._addClass( selectee.\$element, doSelect ? \"ui-selecting\" : \"ui-unselecting\" );
\t\t\t\tselectee.unselecting = !doSelect;
\t\t\t\tselectee.selecting = doSelect;
\t\t\t\tselectee.selected = doSelect;

\t\t\t\t// selectable (UN)SELECTING callback
\t\t\t\tif ( doSelect ) {
\t\t\t\t\tthat._trigger( \"selecting\", event, {
\t\t\t\t\t\tselecting: selectee.element
\t\t\t\t\t} );
\t\t\t\t} else {
\t\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\t\tunselecting: selectee.element
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t}
\t\t} );

\t},

\t_mouseDrag: function( event ) {

\t\tthis.dragged = true;

\t\tif ( this.options.disabled ) {
\t\t\treturn;
\t\t}

\t\tvar tmp,
\t\t\tthat = this,
\t\t\toptions = this.options,
\t\t\tx1 = this.opos[ 0 ],
\t\t\ty1 = this.opos[ 1 ],
\t\t\tx2 = event.pageX,
\t\t\ty2 = event.pageY;

\t\tif ( x1 > x2 ) { tmp = x2; x2 = x1; x1 = tmp; }
\t\tif ( y1 > y2 ) { tmp = y2; y2 = y1; y1 = tmp; }
\t\tthis.helper.css( { left: x1, top: y1, width: x2 - x1, height: y2 - y1 } );

\t\tthis.selectees.each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" ),
\t\t\t\thit = false,
\t\t\t\toffset = {};

\t\t\t//prevent helper from being selected if appendTo: selectable
\t\t\tif ( !selectee || selectee.element === that.element[ 0 ] ) {
\t\t\t\treturn;
\t\t\t}

\t\t\toffset.left   = selectee.left   + that.elementPos.left;
\t\t\toffset.right  = selectee.right  + that.elementPos.left;
\t\t\toffset.top    = selectee.top    + that.elementPos.top;
\t\t\toffset.bottom = selectee.bottom + that.elementPos.top;

\t\t\tif ( options.tolerance === \"touch\" ) {
\t\t\t\thit = ( !( offset.left > x2 || offset.right < x1 || offset.top > y2 ||
                    offset.bottom < y1 ) );
\t\t\t} else if ( options.tolerance === \"fit\" ) {
\t\t\t\thit = ( offset.left > x1 && offset.right < x2 && offset.top > y1 &&
                    offset.bottom < y2 );
\t\t\t}

\t\t\tif ( hit ) {

\t\t\t\t// SELECT
\t\t\t\tif ( selectee.selected ) {
\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selected\" );
\t\t\t\t\tselectee.selected = false;
\t\t\t\t}
\t\t\t\tif ( selectee.unselecting ) {
\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\t\tselectee.unselecting = false;
\t\t\t\t}
\t\t\t\tif ( !selectee.selecting ) {
\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-selecting\" );
\t\t\t\t\tselectee.selecting = true;

\t\t\t\t\t// selectable SELECTING callback
\t\t\t\t\tthat._trigger( \"selecting\", event, {
\t\t\t\t\t\tselecting: selectee.element
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// UNSELECT
\t\t\t\tif ( selectee.selecting ) {
\t\t\t\t\tif ( ( event.metaKey || event.ctrlKey ) && selectee.startselected ) {
\t\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selecting\" );
\t\t\t\t\t\tselectee.selecting = false;
\t\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-selected\" );
\t\t\t\t\t\tselectee.selected = true;
\t\t\t\t\t} else {
\t\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selecting\" );
\t\t\t\t\t\tselectee.selecting = false;
\t\t\t\t\t\tif ( selectee.startselected ) {
\t\t\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\t\t\t\tselectee.unselecting = true;
\t\t\t\t\t\t}

\t\t\t\t\t\t// selectable UNSELECTING callback
\t\t\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\t\t\tunselecting: selectee.element
\t\t\t\t\t\t} );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif ( selectee.selected ) {
\t\t\t\t\tif ( !event.metaKey && !event.ctrlKey && !selectee.startselected ) {
\t\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selected\" );
\t\t\t\t\t\tselectee.selected = false;

\t\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\t\t\tselectee.unselecting = true;

\t\t\t\t\t\t// selectable UNSELECTING callback
\t\t\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\t\t\tunselecting: selectee.element
\t\t\t\t\t\t} );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t} );

\t\treturn false;
\t},

\t_mouseStop: function( event ) {
\t\tvar that = this;

\t\tthis.dragged = false;

\t\t\$( \".ui-unselecting\", this.element[ 0 ] ).each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" );
\t\t\tthat._removeClass( selectee.\$element, \"ui-unselecting\" );
\t\t\tselectee.unselecting = false;
\t\t\tselectee.startselected = false;
\t\t\tthat._trigger( \"unselected\", event, {
\t\t\t\tunselected: selectee.element
\t\t\t} );
\t\t} );
\t\t\$( \".ui-selecting\", this.element[ 0 ] ).each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" );
\t\t\tthat._removeClass( selectee.\$element, \"ui-selecting\" )
\t\t\t\t._addClass( selectee.\$element, \"ui-selected\" );
\t\t\tselectee.selecting = false;
\t\t\tselectee.selected = true;
\t\t\tselectee.startselected = true;
\t\t\tthat._trigger( \"selected\", event, {
\t\t\t\tselected: selectee.element
\t\t\t} );
\t\t} );
\t\tthis._trigger( \"stop\", event );

\t\tthis.helper.remove();

\t\treturn false;
\t}

} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectable.js");
    }
}
