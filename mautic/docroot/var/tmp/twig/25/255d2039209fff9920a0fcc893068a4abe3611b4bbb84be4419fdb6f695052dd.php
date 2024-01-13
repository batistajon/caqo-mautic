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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/droppable.js */
class __TwigTemplate_854aff355e5e2859d419a27b03478ad815a271ded12e499656895b41545811ea extends Template
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
 * jQuery UI Droppable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Droppable
//>>group: Interactions
//>>description: Enables drop targets for draggable elements.
//>>docs: http://api.jqueryui.com/droppable/
//>>demos: http://jqueryui.com/droppable/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./draggable\",
\t\t\t\"./mouse\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

\$.widget( \"ui.droppable\", {
\tversion: \"1.12.1\",
\twidgetEventPrefix: \"drop\",
\toptions: {
\t\taccept: \"*\",
\t\taddClasses: true,
\t\tgreedy: false,
\t\tscope: \"default\",
\t\ttolerance: \"intersect\",

\t\t// Callbacks
\t\tactivate: null,
\t\tdeactivate: null,
\t\tdrop: null,
\t\tout: null,
\t\tover: null
\t},
\t_create: function() {

\t\tvar proportions,
\t\t\to = this.options,
\t\t\taccept = o.accept;

\t\tthis.isover = false;
\t\tthis.isout = true;

\t\tthis.accept = \$.isFunction( accept ) ? accept : function( d ) {
\t\t\treturn d.is( accept );
\t\t};

\t\tthis.proportions = function( /* valueToWrite */ ) {
\t\t\tif ( arguments.length ) {

\t\t\t\t// Store the droppable's proportions
\t\t\t\tproportions = arguments[ 0 ];
\t\t\t} else {

\t\t\t\t// Retrieve or derive the droppable's proportions
\t\t\t\treturn proportions ?
\t\t\t\t\tproportions :
\t\t\t\t\tproportions = {
\t\t\t\t\t\twidth: this.element[ 0 ].offsetWidth,
\t\t\t\t\t\theight: this.element[ 0 ].offsetHeight
\t\t\t\t\t};
\t\t\t}
\t\t};

\t\tthis._addToManager( o.scope );

\t\to.addClasses && this._addClass( \"ui-droppable\" );

\t},

\t_addToManager: function( scope ) {

\t\t// Add the reference and positions to the manager
\t\t\$.ui.ddmanager.droppables[ scope ] = \$.ui.ddmanager.droppables[ scope ] || [];
\t\t\$.ui.ddmanager.droppables[ scope ].push( this );
\t},

\t_splice: function( drop ) {
\t\tvar i = 0;
\t\tfor ( ; i < drop.length; i++ ) {
\t\t\tif ( drop[ i ] === this ) {
\t\t\t\tdrop.splice( i, 1 );
\t\t\t}
\t\t}
\t},

\t_destroy: function() {
\t\tvar drop = \$.ui.ddmanager.droppables[ this.options.scope ];

\t\tthis._splice( drop );
\t},

\t_setOption: function( key, value ) {

\t\tif ( key === \"accept\" ) {
\t\t\tthis.accept = \$.isFunction( value ) ? value : function( d ) {
\t\t\t\treturn d.is( value );
\t\t\t};
\t\t} else if ( key === \"scope\" ) {
\t\t\tvar drop = \$.ui.ddmanager.droppables[ this.options.scope ];

\t\t\tthis._splice( drop );
\t\t\tthis._addToManager( value );
\t\t}

\t\tthis._super( key, value );
\t},

\t_activate: function( event ) {
\t\tvar draggable = \$.ui.ddmanager.current;

\t\tthis._addActiveClass();
\t\tif ( draggable ) {
\t\t\tthis._trigger( \"activate\", event, this.ui( draggable ) );
\t\t}
\t},

\t_deactivate: function( event ) {
\t\tvar draggable = \$.ui.ddmanager.current;

\t\tthis._removeActiveClass();
\t\tif ( draggable ) {
\t\t\tthis._trigger( \"deactivate\", event, this.ui( draggable ) );
\t\t}
\t},

\t_over: function( event ) {

\t\tvar draggable = \$.ui.ddmanager.current;

\t\t// Bail if draggable and droppable are same element
\t\tif ( !draggable || ( draggable.currentItem ||
\t\t\t\tdraggable.element )[ 0 ] === this.element[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tif ( this.accept.call( this.element[ 0 ], ( draggable.currentItem ||
\t\t\t\tdraggable.element ) ) ) {
\t\t\tthis._addHoverClass();
\t\t\tthis._trigger( \"over\", event, this.ui( draggable ) );
\t\t}

\t},

\t_out: function( event ) {

\t\tvar draggable = \$.ui.ddmanager.current;

\t\t// Bail if draggable and droppable are same element
\t\tif ( !draggable || ( draggable.currentItem ||
\t\t\t\tdraggable.element )[ 0 ] === this.element[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tif ( this.accept.call( this.element[ 0 ], ( draggable.currentItem ||
\t\t\t\tdraggable.element ) ) ) {
\t\t\tthis._removeHoverClass();
\t\t\tthis._trigger( \"out\", event, this.ui( draggable ) );
\t\t}

\t},

\t_drop: function( event, custom ) {

\t\tvar draggable = custom || \$.ui.ddmanager.current,
\t\t\tchildrenIntersection = false;

\t\t// Bail if draggable and droppable are same element
\t\tif ( !draggable || ( draggable.currentItem ||
\t\t\t\tdraggable.element )[ 0 ] === this.element[ 0 ] ) {
\t\t\treturn false;
\t\t}

\t\tthis.element
\t\t\t.find( \":data(ui-droppable)\" )
\t\t\t.not( \".ui-draggable-dragging\" )
\t\t\t.each( function() {
\t\t\t\tvar inst = \$( this ).droppable( \"instance\" );
\t\t\t\tif (
\t\t\t\t\tinst.options.greedy &&
\t\t\t\t\t!inst.options.disabled &&
\t\t\t\t\tinst.options.scope === draggable.options.scope &&
\t\t\t\t\tinst.accept.call(
\t\t\t\t\t\tinst.element[ 0 ], ( draggable.currentItem || draggable.element )
\t\t\t\t\t) &&
\t\t\t\t\tintersect(
\t\t\t\t\t\tdraggable,
\t\t\t\t\t\t\$.extend( inst, { offset: inst.element.offset() } ),
\t\t\t\t\t\tinst.options.tolerance, event
\t\t\t\t\t)
\t\t\t\t) {
\t\t\t\t\tchildrenIntersection = true;
\t\t\t\t\treturn false; }
\t\t\t} );
\t\tif ( childrenIntersection ) {
\t\t\treturn false;
\t\t}

\t\tif ( this.accept.call( this.element[ 0 ],
\t\t\t\t( draggable.currentItem || draggable.element ) ) ) {
\t\t\tthis._removeActiveClass();
\t\t\tthis._removeHoverClass();

\t\t\tthis._trigger( \"drop\", event, this.ui( draggable ) );
\t\t\treturn this.element;
\t\t}

\t\treturn false;

\t},

\tui: function( c ) {
\t\treturn {
\t\t\tdraggable: ( c.currentItem || c.element ),
\t\t\thelper: c.helper,
\t\t\tposition: c.position,
\t\t\toffset: c.positionAbs
\t\t};
\t},

\t// Extension points just to make backcompat sane and avoid duplicating logic
\t// TODO: Remove in 1.13 along with call to it below
\t_addHoverClass: function() {
\t\tthis._addClass( \"ui-droppable-hover\" );
\t},

\t_removeHoverClass: function() {
\t\tthis._removeClass( \"ui-droppable-hover\" );
\t},

\t_addActiveClass: function() {
\t\tthis._addClass( \"ui-droppable-active\" );
\t},

\t_removeActiveClass: function() {
\t\tthis._removeClass( \"ui-droppable-active\" );
\t}
} );

var intersect = \$.ui.intersect = ( function() {
\tfunction isOverAxis( x, reference, size ) {
\t\treturn ( x >= reference ) && ( x < ( reference + size ) );
\t}

\treturn function( draggable, droppable, toleranceMode, event ) {

\t\tif ( !droppable.offset ) {
\t\t\treturn false;
\t\t}

\t\tvar x1 = ( draggable.positionAbs ||
\t\t\t\tdraggable.position.absolute ).left + draggable.margins.left,
\t\t\ty1 = ( draggable.positionAbs ||
\t\t\t\tdraggable.position.absolute ).top + draggable.margins.top,
\t\t\tx2 = x1 + draggable.helperProportions.width,
\t\t\ty2 = y1 + draggable.helperProportions.height,
\t\t\tl = droppable.offset.left,
\t\t\tt = droppable.offset.top,
\t\t\tr = l + droppable.proportions().width,
\t\t\tb = t + droppable.proportions().height;

\t\tswitch ( toleranceMode ) {
\t\tcase \"fit\":
\t\t\treturn ( l <= x1 && x2 <= r && t <= y1 && y2 <= b );
\t\tcase \"intersect\":
\t\t\treturn ( l < x1 + ( draggable.helperProportions.width / 2 ) && // Right Half
\t\t\t\tx2 - ( draggable.helperProportions.width / 2 ) < r && // Left Half
\t\t\t\tt < y1 + ( draggable.helperProportions.height / 2 ) && // Bottom Half
\t\t\t\ty2 - ( draggable.helperProportions.height / 2 ) < b ); // Top Half
\t\tcase \"pointer\":
\t\t\treturn isOverAxis( event.pageY, t, droppable.proportions().height ) &&
\t\t\t\tisOverAxis( event.pageX, l, droppable.proportions().width );
\t\tcase \"touch\":
\t\t\treturn (
\t\t\t\t( y1 >= t && y1 <= b ) || // Top edge touching
\t\t\t\t( y2 >= t && y2 <= b ) || // Bottom edge touching
\t\t\t\t( y1 < t && y2 > b ) // Surrounded vertically
\t\t\t) && (
\t\t\t\t( x1 >= l && x1 <= r ) || // Left edge touching
\t\t\t\t( x2 >= l && x2 <= r ) || // Right edge touching
\t\t\t\t( x1 < l && x2 > r ) // Surrounded horizontally
\t\t\t);
\t\tdefault:
\t\t\treturn false;
\t\t}
\t};
} )();

/*
\tThis manager tracks offsets of draggables and droppables
*/
\$.ui.ddmanager = {
\tcurrent: null,
\tdroppables: { \"default\": [] },
\tprepareOffsets: function( t, event ) {

\t\tvar i, j,
\t\t\tm = \$.ui.ddmanager.droppables[ t.options.scope ] || [],
\t\t\ttype = event ? event.type : null, // workaround for #2317
\t\t\tlist = ( t.currentItem || t.element ).find( \":data(ui-droppable)\" ).addBack();

\t\tdroppablesLoop: for ( i = 0; i < m.length; i++ ) {

\t\t\t// No disabled and non-accepted
\t\t\tif ( m[ i ].options.disabled || ( t && !m[ i ].accept.call( m[ i ].element[ 0 ],
\t\t\t\t\t( t.currentItem || t.element ) ) ) ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Filter out elements in the current dragged item
\t\t\tfor ( j = 0; j < list.length; j++ ) {
\t\t\t\tif ( list[ j ] === m[ i ].element[ 0 ] ) {
\t\t\t\t\tm[ i ].proportions().height = 0;
\t\t\t\t\tcontinue droppablesLoop;
\t\t\t\t}
\t\t\t}

\t\t\tm[ i ].visible = m[ i ].element.css( \"display\" ) !== \"none\";
\t\t\tif ( !m[ i ].visible ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Activate the droppable if used directly from draggables
\t\t\tif ( type === \"mousedown\" ) {
\t\t\t\tm[ i ]._activate.call( m[ i ], event );
\t\t\t}

\t\t\tm[ i ].offset = m[ i ].element.offset();
\t\t\tm[ i ].proportions( {
\t\t\t\twidth: m[ i ].element[ 0 ].offsetWidth,
\t\t\t\theight: m[ i ].element[ 0 ].offsetHeight
\t\t\t} );

\t\t}

\t},
\tdrop: function( draggable, event ) {

\t\tvar dropped = false;

\t\t// Create a copy of the droppables in case the list changes during the drop (#9116)
\t\t\$.each( ( \$.ui.ddmanager.droppables[ draggable.options.scope ] || [] ).slice(), function() {

\t\t\tif ( !this.options ) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif ( !this.options.disabled && this.visible &&
\t\t\t\t\tintersect( draggable, this, this.options.tolerance, event ) ) {
\t\t\t\tdropped = this._drop.call( this, event ) || dropped;
\t\t\t}

\t\t\tif ( !this.options.disabled && this.visible && this.accept.call( this.element[ 0 ],
\t\t\t\t\t( draggable.currentItem || draggable.element ) ) ) {
\t\t\t\tthis.isout = true;
\t\t\t\tthis.isover = false;
\t\t\t\tthis._deactivate.call( this, event );
\t\t\t}

\t\t} );
\t\treturn dropped;

\t},
\tdragStart: function( draggable, event ) {

\t\t// Listen for scrolling so that if the dragging causes scrolling the position of the
\t\t// droppables can be recalculated (see #5003)
\t\tdraggable.element.parentsUntil( \"body\" ).on( \"scroll.droppable\", function() {
\t\t\tif ( !draggable.options.refreshPositions ) {
\t\t\t\t\$.ui.ddmanager.prepareOffsets( draggable, event );
\t\t\t}
\t\t} );
\t},
\tdrag: function( draggable, event ) {

\t\t// If you have a highly dynamic page, you might try this option. It renders positions
\t\t// every time you move the mouse.
\t\tif ( draggable.options.refreshPositions ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( draggable, event );
\t\t}

\t\t// Run through all droppables and check their positions based on specific tolerance options
\t\t\$.each( \$.ui.ddmanager.droppables[ draggable.options.scope ] || [], function() {

\t\t\tif ( this.options.disabled || this.greedyChild || !this.visible ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar parentInstance, scope, parent,
\t\t\t\tintersects = intersect( draggable, this, this.options.tolerance, event ),
\t\t\t\tc = !intersects && this.isover ?
\t\t\t\t\t\"isout\" :
\t\t\t\t\t( intersects && !this.isover ? \"isover\" : null );
\t\t\tif ( !c ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( this.options.greedy ) {

\t\t\t\t// find droppable parents with same scope
\t\t\t\tscope = this.options.scope;
\t\t\t\tparent = this.element.parents( \":data(ui-droppable)\" ).filter( function() {
\t\t\t\t\treturn \$( this ).droppable( \"instance\" ).options.scope === scope;
\t\t\t\t} );

\t\t\t\tif ( parent.length ) {
\t\t\t\t\tparentInstance = \$( parent[ 0 ] ).droppable( \"instance\" );
\t\t\t\t\tparentInstance.greedyChild = ( c === \"isover\" );
\t\t\t\t}
\t\t\t}

\t\t\t// We just moved into a greedy child
\t\t\tif ( parentInstance && c === \"isover\" ) {
\t\t\t\tparentInstance.isover = false;
\t\t\t\tparentInstance.isout = true;
\t\t\t\tparentInstance._out.call( parentInstance, event );
\t\t\t}

\t\t\tthis[ c ] = true;
\t\t\tthis[ c === \"isout\" ? \"isover\" : \"isout\" ] = false;
\t\t\tthis[ c === \"isover\" ? \"_over\" : \"_out\" ].call( this, event );

\t\t\t// We just moved out of a greedy child
\t\t\tif ( parentInstance && c === \"isout\" ) {
\t\t\t\tparentInstance.isout = false;
\t\t\t\tparentInstance.isover = true;
\t\t\t\tparentInstance._over.call( parentInstance, event );
\t\t\t}
\t\t} );

\t},
\tdragStop: function( draggable, event ) {
\t\tdraggable.element.parentsUntil( \"body\" ).off( \"scroll.droppable\" );

\t\t// Call prepareOffsets one final time since IE does not fire return scroll events when
\t\t// overflow was caused by drag (see #5003)
\t\tif ( !draggable.options.refreshPositions ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( draggable, event );
\t\t}
\t}
};

// DEPRECATED
// TODO: switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for activeClass and hoverClass options
\t\$.widget( \"ui.droppable\", \$.ui.droppable, {
\t\toptions: {
\t\t\thoverClass: false,
\t\t\tactiveClass: false
\t\t},
\t\t_addActiveClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.activeClass ) {
\t\t\t\tthis.element.addClass( this.options.activeClass );
\t\t\t}
\t\t},
\t\t_removeActiveClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.activeClass ) {
\t\t\t\tthis.element.removeClass( this.options.activeClass );
\t\t\t}
\t\t},
\t\t_addHoverClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.hoverClass ) {
\t\t\t\tthis.element.addClass( this.options.hoverClass );
\t\t\t}
\t\t},
\t\t_removeHoverClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.hoverClass ) {
\t\t\t\tthis.element.removeClass( this.options.hoverClass );
\t\t\t}
\t\t}
\t} );
}

return \$.ui.droppable;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/droppable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/droppable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/droppable.js");
    }
}
