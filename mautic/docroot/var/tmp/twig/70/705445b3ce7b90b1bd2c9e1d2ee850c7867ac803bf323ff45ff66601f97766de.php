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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/dialog.js */
class __TwigTemplate_a422a2244d35e9dce302307a5910329196e3fafcde51e5357d22ca922bc8b225 extends Template
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
 * jQuery UI Dialog 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Dialog
//>>group: Widgets
//>>description: Displays customizable dialog windows.
//>>docs: http://api.jqueryui.com/dialog/
//>>demos: http://jqueryui.com/dialog/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/dialog.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./button\",
\t\t\t\"./draggable\",
\t\t\t\"./mouse\",
\t\t\t\"./resizable\",
\t\t\t\"../focusable\",
\t\t\t\"../keycode\",
\t\t\t\"../position\",
\t\t\t\"../safe-active-element\",
\t\t\t\"../safe-blur\",
\t\t\t\"../tabbable\",
\t\t\t\"../unique-id\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

\$.widget( \"ui.dialog\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tappendTo: \"body\",
\t\tautoOpen: true,
\t\tbuttons: [],
\t\tclasses: {
\t\t\t\"ui-dialog\": \"ui-corner-all\",
\t\t\t\"ui-dialog-titlebar\": \"ui-corner-all\"
\t\t},
\t\tcloseOnEscape: true,
\t\tcloseText: \"Close\",
\t\tdraggable: true,
\t\thide: null,
\t\theight: \"auto\",
\t\tmaxHeight: null,
\t\tmaxWidth: null,
\t\tminHeight: 150,
\t\tminWidth: 150,
\t\tmodal: false,
\t\tposition: {
\t\t\tmy: \"center\",
\t\t\tat: \"center\",
\t\t\tof: window,
\t\t\tcollision: \"fit\",

\t\t\t// Ensure the titlebar is always visible
\t\t\tusing: function( pos ) {
\t\t\t\tvar topOffset = \$( this ).css( pos ).offset().top;
\t\t\t\tif ( topOffset < 0 ) {
\t\t\t\t\t\$( this ).css( \"top\", pos.top - topOffset );
\t\t\t\t}
\t\t\t}
\t\t},
\t\tresizable: true,
\t\tshow: null,
\t\ttitle: null,
\t\twidth: 300,

\t\t// Callbacks
\t\tbeforeClose: null,
\t\tclose: null,
\t\tdrag: null,
\t\tdragStart: null,
\t\tdragStop: null,
\t\tfocus: null,
\t\topen: null,
\t\tresize: null,
\t\tresizeStart: null,
\t\tresizeStop: null
\t},

\tsizeRelatedOptions: {
\t\tbuttons: true,
\t\theight: true,
\t\tmaxHeight: true,
\t\tmaxWidth: true,
\t\tminHeight: true,
\t\tminWidth: true,
\t\twidth: true
\t},

\tresizableRelatedOptions: {
\t\tmaxHeight: true,
\t\tmaxWidth: true,
\t\tminHeight: true,
\t\tminWidth: true
\t},

\t_create: function() {
\t\tthis.originalCss = {
\t\t\tdisplay: this.element[ 0 ].style.display,
\t\t\twidth: this.element[ 0 ].style.width,
\t\t\tminHeight: this.element[ 0 ].style.minHeight,
\t\t\tmaxHeight: this.element[ 0 ].style.maxHeight,
\t\t\theight: this.element[ 0 ].style.height
\t\t};
\t\tthis.originalPosition = {
\t\t\tparent: this.element.parent(),
\t\t\tindex: this.element.parent().children().index( this.element )
\t\t};
\t\tthis.originalTitle = this.element.attr( \"title\" );
\t\tif ( this.options.title == null && this.originalTitle != null ) {
\t\t\tthis.options.title = this.originalTitle;
\t\t}

\t\t// Dialogs can't be disabled
\t\tif ( this.options.disabled ) {
\t\t\tthis.options.disabled = false;
\t\t}

\t\tthis._createWrapper();

\t\tthis.element
\t\t\t.show()
\t\t\t.removeAttr( \"title\" )
\t\t\t.appendTo( this.uiDialog );

\t\tthis._addClass( \"ui-dialog-content\", \"ui-widget-content\" );

\t\tthis._createTitlebar();
\t\tthis._createButtonPane();

\t\tif ( this.options.draggable && \$.fn.draggable ) {
\t\t\tthis._makeDraggable();
\t\t}
\t\tif ( this.options.resizable && \$.fn.resizable ) {
\t\t\tthis._makeResizable();
\t\t}

\t\tthis._isOpen = false;

\t\tthis._trackFocus();
\t},

\t_init: function() {
\t\tif ( this.options.autoOpen ) {
\t\t\tthis.open();
\t\t}
\t},

\t_appendTo: function() {
\t\tvar element = this.options.appendTo;
\t\tif ( element && ( element.jquery || element.nodeType ) ) {
\t\t\treturn \$( element );
\t\t}
\t\treturn this.document.find( element || \"body\" ).eq( 0 );
\t},

\t_destroy: function() {
\t\tvar next,
\t\t\toriginalPosition = this.originalPosition;

\t\tthis._untrackInstance();
\t\tthis._destroyOverlay();

\t\tthis.element
\t\t\t.removeUniqueId()
\t\t\t.css( this.originalCss )

\t\t\t// Without detaching first, the following becomes really slow
\t\t\t.detach();

\t\tthis.uiDialog.remove();

\t\tif ( this.originalTitle ) {
\t\t\tthis.element.attr( \"title\", this.originalTitle );
\t\t}

\t\tnext = originalPosition.parent.children().eq( originalPosition.index );

\t\t// Don't try to place the dialog next to itself (#8613)
\t\tif ( next.length && next[ 0 ] !== this.element[ 0 ] ) {
\t\t\tnext.before( this.element );
\t\t} else {
\t\t\toriginalPosition.parent.append( this.element );
\t\t}
\t},

\twidget: function() {
\t\treturn this.uiDialog;
\t},

\tdisable: \$.noop,
\tenable: \$.noop,

\tclose: function( event ) {
\t\tvar that = this;

\t\tif ( !this._isOpen || this._trigger( \"beforeClose\", event ) === false ) {
\t\t\treturn;
\t\t}

\t\tthis._isOpen = false;
\t\tthis._focusedElement = null;
\t\tthis._destroyOverlay();
\t\tthis._untrackInstance();

\t\tif ( !this.opener.filter( \":focusable\" ).trigger( \"focus\" ).length ) {

\t\t\t// Hiding a focused element doesn't trigger blur in WebKit
\t\t\t// so in case we have nothing to focus on, explicitly blur the active element
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=47182
\t\t\t\$.ui.safeBlur( \$.ui.safeActiveElement( this.document[ 0 ] ) );
\t\t}

\t\tthis._hide( this.uiDialog, this.options.hide, function() {
\t\t\tthat._trigger( \"close\", event );
\t\t} );
\t},

\tisOpen: function() {
\t\treturn this._isOpen;
\t},

\tmoveToTop: function() {
\t\tthis._moveToTop();
\t},

\t_moveToTop: function( event, silent ) {
\t\tvar moved = false,
\t\t\tzIndices = this.uiDialog.siblings( \".ui-front:visible\" ).map( function() {
\t\t\t\treturn +\$( this ).css( \"z-index\" );
\t\t\t} ).get(),
\t\t\tzIndexMax = Math.max.apply( null, zIndices );

\t\tif ( zIndexMax >= +this.uiDialog.css( \"z-index\" ) ) {
\t\t\tthis.uiDialog.css( \"z-index\", zIndexMax + 1 );
\t\t\tmoved = true;
\t\t}

\t\tif ( moved && !silent ) {
\t\t\tthis._trigger( \"focus\", event );
\t\t}
\t\treturn moved;
\t},

\topen: function() {
\t\tvar that = this;
\t\tif ( this._isOpen ) {
\t\t\tif ( this._moveToTop() ) {
\t\t\t\tthis._focusTabbable();
\t\t\t}
\t\t\treturn;
\t\t}

\t\tthis._isOpen = true;
\t\tthis.opener = \$( \$.ui.safeActiveElement( this.document[ 0 ] ) );

\t\tthis._size();
\t\tthis._position();
\t\tthis._createOverlay();
\t\tthis._moveToTop( null, true );

\t\t// Ensure the overlay is moved to the top with the dialog, but only when
\t\t// opening. The overlay shouldn't move after the dialog is open so that
\t\t// modeless dialogs opened after the modal dialog stack properly.
\t\tif ( this.overlay ) {
\t\t\tthis.overlay.css( \"z-index\", this.uiDialog.css( \"z-index\" ) - 1 );
\t\t}

\t\tthis._show( this.uiDialog, this.options.show, function() {
\t\t\tthat._focusTabbable();
\t\t\tthat._trigger( \"focus\" );
\t\t} );

\t\t// Track the dialog immediately upon openening in case a focus event
\t\t// somehow occurs outside of the dialog before an element inside the
\t\t// dialog is focused (#10152)
\t\tthis._makeFocusTarget();

\t\tthis._trigger( \"open\" );
\t},

\t_focusTabbable: function() {

\t\t// Set focus to the first match:
\t\t// 1. An element that was focused previously
\t\t// 2. First element inside the dialog matching [autofocus]
\t\t// 3. Tabbable element inside the content element
\t\t// 4. Tabbable element inside the buttonpane
\t\t// 5. The close button
\t\t// 6. The dialog itself
\t\tvar hasFocus = this._focusedElement;
\t\tif ( !hasFocus ) {
\t\t\thasFocus = this.element.find( \"[autofocus]\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.element.find( \":tabbable\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.uiDialogButtonPane.find( \":tabbable\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.uiDialogTitlebarClose.filter( \":tabbable\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.uiDialog;
\t\t}
\t\thasFocus.eq( 0 ).trigger( \"focus\" );
\t},

\t_keepFocus: function( event ) {
\t\tfunction checkFocus() {
\t\t\tvar activeElement = \$.ui.safeActiveElement( this.document[ 0 ] ),
\t\t\t\tisActive = this.uiDialog[ 0 ] === activeElement ||
\t\t\t\t\t\$.contains( this.uiDialog[ 0 ], activeElement );
\t\t\tif ( !isActive ) {
\t\t\t\tthis._focusTabbable();
\t\t\t}
\t\t}
\t\tevent.preventDefault();
\t\tcheckFocus.call( this );

\t\t// support: IE
\t\t// IE <= 8 doesn't prevent moving focus even with event.preventDefault()
\t\t// so we check again later
\t\tthis._delay( checkFocus );
\t},

\t_createWrapper: function() {
\t\tthis.uiDialog = \$( \"<div>\" )
\t\t\t.hide()
\t\t\t.attr( {

\t\t\t\t// Setting tabIndex makes the div focusable
\t\t\t\ttabIndex: -1,
\t\t\t\trole: \"dialog\"
\t\t\t} )
\t\t\t.appendTo( this._appendTo() );

\t\tthis._addClass( this.uiDialog, \"ui-dialog\", \"ui-widget ui-widget-content ui-front\" );
\t\tthis._on( this.uiDialog, {
\t\t\tkeydown: function( event ) {
\t\t\t\tif ( this.options.closeOnEscape && !event.isDefaultPrevented() && event.keyCode &&
\t\t\t\t\t\tevent.keyCode === \$.ui.keyCode.ESCAPE ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\tthis.close( event );
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Prevent tabbing out of dialogs
\t\t\t\tif ( event.keyCode !== \$.ui.keyCode.TAB || event.isDefaultPrevented() ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar tabbables = this.uiDialog.find( \":tabbable\" ),
\t\t\t\t\tfirst = tabbables.filter( \":first\" ),
\t\t\t\t\tlast = tabbables.filter( \":last\" );

\t\t\t\tif ( ( event.target === last[ 0 ] || event.target === this.uiDialog[ 0 ] ) &&
\t\t\t\t\t\t!event.shiftKey ) {
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tfirst.trigger( \"focus\" );
\t\t\t\t\t} );
\t\t\t\t\tevent.preventDefault();
\t\t\t\t} else if ( ( event.target === first[ 0 ] ||
\t\t\t\t\t\tevent.target === this.uiDialog[ 0 ] ) && event.shiftKey ) {
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tlast.trigger( \"focus\" );
\t\t\t\t\t} );
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t},
\t\t\tmousedown: function( event ) {
\t\t\t\tif ( this._moveToTop( event ) ) {
\t\t\t\t\tthis._focusTabbable();
\t\t\t\t}
\t\t\t}
\t\t} );

\t\t// We assume that any existing aria-describedby attribute means
\t\t// that the dialog content is marked up properly
\t\t// otherwise we brute force the content as the description
\t\tif ( !this.element.find( \"[aria-describedby]\" ).length ) {
\t\t\tthis.uiDialog.attr( {
\t\t\t\t\"aria-describedby\": this.element.uniqueId().attr( \"id\" )
\t\t\t} );
\t\t}
\t},

\t_createTitlebar: function() {
\t\tvar uiDialogTitle;

\t\tthis.uiDialogTitlebar = \$( \"<div>\" );
\t\tthis._addClass( this.uiDialogTitlebar,
\t\t\t\"ui-dialog-titlebar\", \"ui-widget-header ui-helper-clearfix\" );
\t\tthis._on( this.uiDialogTitlebar, {
\t\t\tmousedown: function( event ) {

\t\t\t\t// Don't prevent click on close button (#8838)
\t\t\t\t// Focusing a dialog that is partially scrolled out of view
\t\t\t\t// causes the browser to scroll it into view, preventing the click event
\t\t\t\tif ( !\$( event.target ).closest( \".ui-dialog-titlebar-close\" ) ) {

\t\t\t\t\t// Dialog isn't getting focus when dragging (#8063)
\t\t\t\t\tthis.uiDialog.trigger( \"focus\" );
\t\t\t\t}
\t\t\t}
\t\t} );

\t\t// Support: IE
\t\t// Use type=\"button\" to prevent enter keypresses in textboxes from closing the
\t\t// dialog in IE (#9312)
\t\tthis.uiDialogTitlebarClose = \$( \"<button type='button'></button>\" )
\t\t\t.button( {
\t\t\t\tlabel: \$( \"<a>\" ).text( this.options.closeText ).html(),
\t\t\t\ticon: \"ui-icon-closethick\",
\t\t\t\tshowLabel: false
\t\t\t} )
\t\t\t.appendTo( this.uiDialogTitlebar );

\t\tthis._addClass( this.uiDialogTitlebarClose, \"ui-dialog-titlebar-close\" );
\t\tthis._on( this.uiDialogTitlebarClose, {
\t\t\tclick: function( event ) {
\t\t\t\tevent.preventDefault();
\t\t\t\tthis.close( event );
\t\t\t}
\t\t} );

\t\tuiDialogTitle = \$( \"<span>\" ).uniqueId().prependTo( this.uiDialogTitlebar );
\t\tthis._addClass( uiDialogTitle, \"ui-dialog-title\" );
\t\tthis._title( uiDialogTitle );

\t\tthis.uiDialogTitlebar.prependTo( this.uiDialog );

\t\tthis.uiDialog.attr( {
\t\t\t\"aria-labelledby\": uiDialogTitle.attr( \"id\" )
\t\t} );
\t},

\t_title: function( title ) {
\t\tif ( this.options.title ) {
\t\t\ttitle.text( this.options.title );
\t\t} else {
\t\t\ttitle.html( \"&#160;\" );
\t\t}
\t},

\t_createButtonPane: function() {
\t\tthis.uiDialogButtonPane = \$( \"<div>\" );
\t\tthis._addClass( this.uiDialogButtonPane, \"ui-dialog-buttonpane\",
\t\t\t\"ui-widget-content ui-helper-clearfix\" );

\t\tthis.uiButtonSet = \$( \"<div>\" )
\t\t\t.appendTo( this.uiDialogButtonPane );
\t\tthis._addClass( this.uiButtonSet, \"ui-dialog-buttonset\" );

\t\tthis._createButtons();
\t},

\t_createButtons: function() {
\t\tvar that = this,
\t\t\tbuttons = this.options.buttons;

\t\t// If we already have a button pane, remove it
\t\tthis.uiDialogButtonPane.remove();
\t\tthis.uiButtonSet.empty();

\t\tif ( \$.isEmptyObject( buttons ) || ( \$.isArray( buttons ) && !buttons.length ) ) {
\t\t\tthis._removeClass( this.uiDialog, \"ui-dialog-buttons\" );
\t\t\treturn;
\t\t}

\t\t\$.each( buttons, function( name, props ) {
\t\t\tvar click, buttonOptions;
\t\t\tprops = \$.isFunction( props ) ?
\t\t\t\t{ click: props, text: name } :
\t\t\t\tprops;

\t\t\t// Default to a non-submitting button
\t\t\tprops = \$.extend( { type: \"button\" }, props );

\t\t\t// Change the context for the click callback to be the main element
\t\t\tclick = props.click;
\t\t\tbuttonOptions = {
\t\t\t\ticon: props.icon,
\t\t\t\ticonPosition: props.iconPosition,
\t\t\t\tshowLabel: props.showLabel,

\t\t\t\t// Deprecated options
\t\t\t\ticons: props.icons,
\t\t\t\ttext: props.text
\t\t\t};

\t\t\tdelete props.click;
\t\t\tdelete props.icon;
\t\t\tdelete props.iconPosition;
\t\t\tdelete props.showLabel;

\t\t\t// Deprecated options
\t\t\tdelete props.icons;
\t\t\tif ( typeof props.text === \"boolean\" ) {
\t\t\t\tdelete props.text;
\t\t\t}

\t\t\t\$( \"<button></button>\", props )
\t\t\t\t.button( buttonOptions )
\t\t\t\t.appendTo( that.uiButtonSet )
\t\t\t\t.on( \"click\", function() {
\t\t\t\t\tclick.apply( that.element[ 0 ], arguments );
\t\t\t\t} );
\t\t} );
\t\tthis._addClass( this.uiDialog, \"ui-dialog-buttons\" );
\t\tthis.uiDialogButtonPane.appendTo( this.uiDialog );
\t},

\t_makeDraggable: function() {
\t\tvar that = this,
\t\t\toptions = this.options;

\t\tfunction filteredUi( ui ) {
\t\t\treturn {
\t\t\t\tposition: ui.position,
\t\t\t\toffset: ui.offset
\t\t\t};
\t\t}

\t\tthis.uiDialog.draggable( {
\t\t\tcancel: \".ui-dialog-content, .ui-dialog-titlebar-close\",
\t\t\thandle: \".ui-dialog-titlebar\",
\t\t\tcontainment: \"document\",
\t\t\tstart: function( event, ui ) {
\t\t\t\tthat._addClass( \$( this ), \"ui-dialog-dragging\" );
\t\t\t\tthat._blockFrames();
\t\t\t\tthat._trigger( \"dragStart\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tdrag: function( event, ui ) {
\t\t\t\tthat._trigger( \"drag\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tstop: function( event, ui ) {
\t\t\t\tvar left = ui.offset.left - that.document.scrollLeft(),
\t\t\t\t\ttop = ui.offset.top - that.document.scrollTop();

\t\t\t\toptions.position = {
\t\t\t\t\tmy: \"left top\",
\t\t\t\t\tat: \"left\" + ( left >= 0 ? \"+\" : \"\" ) + left + \" \" +
\t\t\t\t\t\t\"top\" + ( top >= 0 ? \"+\" : \"\" ) + top,
\t\t\t\t\tof: that.window
\t\t\t\t};
\t\t\t\tthat._removeClass( \$( this ), \"ui-dialog-dragging\" );
\t\t\t\tthat._unblockFrames();
\t\t\t\tthat._trigger( \"dragStop\", event, filteredUi( ui ) );
\t\t\t}
\t\t} );
\t},

\t_makeResizable: function() {
\t\tvar that = this,
\t\t\toptions = this.options,
\t\t\thandles = options.resizable,

\t\t\t// .ui-resizable has position: relative defined in the stylesheet
\t\t\t// but dialogs have to use absolute or fixed positioning
\t\t\tposition = this.uiDialog.css( \"position\" ),
\t\t\tresizeHandles = typeof handles === \"string\" ?
\t\t\t\thandles :
\t\t\t\t\"n,e,s,w,se,sw,ne,nw\";

\t\tfunction filteredUi( ui ) {
\t\t\treturn {
\t\t\t\toriginalPosition: ui.originalPosition,
\t\t\t\toriginalSize: ui.originalSize,
\t\t\t\tposition: ui.position,
\t\t\t\tsize: ui.size
\t\t\t};
\t\t}

\t\tthis.uiDialog.resizable( {
\t\t\tcancel: \".ui-dialog-content\",
\t\t\tcontainment: \"document\",
\t\t\talsoResize: this.element,
\t\t\tmaxWidth: options.maxWidth,
\t\t\tmaxHeight: options.maxHeight,
\t\t\tminWidth: options.minWidth,
\t\t\tminHeight: this._minHeight(),
\t\t\thandles: resizeHandles,
\t\t\tstart: function( event, ui ) {
\t\t\t\tthat._addClass( \$( this ), \"ui-dialog-resizing\" );
\t\t\t\tthat._blockFrames();
\t\t\t\tthat._trigger( \"resizeStart\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tresize: function( event, ui ) {
\t\t\t\tthat._trigger( \"resize\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tstop: function( event, ui ) {
\t\t\t\tvar offset = that.uiDialog.offset(),
\t\t\t\t\tleft = offset.left - that.document.scrollLeft(),
\t\t\t\t\ttop = offset.top - that.document.scrollTop();

\t\t\t\toptions.height = that.uiDialog.height();
\t\t\t\toptions.width = that.uiDialog.width();
\t\t\t\toptions.position = {
\t\t\t\t\tmy: \"left top\",
\t\t\t\t\tat: \"left\" + ( left >= 0 ? \"+\" : \"\" ) + left + \" \" +
\t\t\t\t\t\t\"top\" + ( top >= 0 ? \"+\" : \"\" ) + top,
\t\t\t\t\tof: that.window
\t\t\t\t};
\t\t\t\tthat._removeClass( \$( this ), \"ui-dialog-resizing\" );
\t\t\t\tthat._unblockFrames();
\t\t\t\tthat._trigger( \"resizeStop\", event, filteredUi( ui ) );
\t\t\t}
\t\t} )
\t\t\t.css( \"position\", position );
\t},

\t_trackFocus: function() {
\t\tthis._on( this.widget(), {
\t\t\tfocusin: function( event ) {
\t\t\t\tthis._makeFocusTarget();
\t\t\t\tthis._focusedElement = \$( event.target );
\t\t\t}
\t\t} );
\t},

\t_makeFocusTarget: function() {
\t\tthis._untrackInstance();
\t\tthis._trackingInstances().unshift( this );
\t},

\t_untrackInstance: function() {
\t\tvar instances = this._trackingInstances(),
\t\t\texists = \$.inArray( this, instances );
\t\tif ( exists !== -1 ) {
\t\t\tinstances.splice( exists, 1 );
\t\t}
\t},

\t_trackingInstances: function() {
\t\tvar instances = this.document.data( \"ui-dialog-instances\" );
\t\tif ( !instances ) {
\t\t\tinstances = [];
\t\t\tthis.document.data( \"ui-dialog-instances\", instances );
\t\t}
\t\treturn instances;
\t},

\t_minHeight: function() {
\t\tvar options = this.options;

\t\treturn options.height === \"auto\" ?
\t\t\toptions.minHeight :
\t\t\tMath.min( options.minHeight, options.height );
\t},

\t_position: function() {

\t\t// Need to show the dialog to get the actual offset in the position plugin
\t\tvar isVisible = this.uiDialog.is( \":visible\" );
\t\tif ( !isVisible ) {
\t\t\tthis.uiDialog.show();
\t\t}
\t\tthis.uiDialog.position( this.options.position );
\t\tif ( !isVisible ) {
\t\t\tthis.uiDialog.hide();
\t\t}
\t},

\t_setOptions: function( options ) {
\t\tvar that = this,
\t\t\tresize = false,
\t\t\tresizableOptions = {};

\t\t\$.each( options, function( key, value ) {
\t\t\tthat._setOption( key, value );

\t\t\tif ( key in that.sizeRelatedOptions ) {
\t\t\t\tresize = true;
\t\t\t}
\t\t\tif ( key in that.resizableRelatedOptions ) {
\t\t\t\tresizableOptions[ key ] = value;
\t\t\t}
\t\t} );

\t\tif ( resize ) {
\t\t\tthis._size();
\t\t\tthis._position();
\t\t}
\t\tif ( this.uiDialog.is( \":data(ui-resizable)\" ) ) {
\t\t\tthis.uiDialog.resizable( \"option\", resizableOptions );
\t\t}
\t},

\t_setOption: function( key, value ) {
\t\tvar isDraggable, isResizable,
\t\t\tuiDialog = this.uiDialog;

\t\tif ( key === \"disabled\" ) {
\t\t\treturn;
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"appendTo\" ) {
\t\t\tthis.uiDialog.appendTo( this._appendTo() );
\t\t}

\t\tif ( key === \"buttons\" ) {
\t\t\tthis._createButtons();
\t\t}

\t\tif ( key === \"closeText\" ) {
\t\t\tthis.uiDialogTitlebarClose.button( {

\t\t\t\t// Ensure that we always pass a string
\t\t\t\tlabel: \$( \"<a>\" ).text( \"\" + this.options.closeText ).html()
\t\t\t} );
\t\t}

\t\tif ( key === \"draggable\" ) {
\t\t\tisDraggable = uiDialog.is( \":data(ui-draggable)\" );
\t\t\tif ( isDraggable && !value ) {
\t\t\t\tuiDialog.draggable( \"destroy\" );
\t\t\t}

\t\t\tif ( !isDraggable && value ) {
\t\t\t\tthis._makeDraggable();
\t\t\t}
\t\t}

\t\tif ( key === \"position\" ) {
\t\t\tthis._position();
\t\t}

\t\tif ( key === \"resizable\" ) {

\t\t\t// currently resizable, becoming non-resizable
\t\t\tisResizable = uiDialog.is( \":data(ui-resizable)\" );
\t\t\tif ( isResizable && !value ) {
\t\t\t\tuiDialog.resizable( \"destroy\" );
\t\t\t}

\t\t\t// Currently resizable, changing handles
\t\t\tif ( isResizable && typeof value === \"string\" ) {
\t\t\t\tuiDialog.resizable( \"option\", \"handles\", value );
\t\t\t}

\t\t\t// Currently non-resizable, becoming resizable
\t\t\tif ( !isResizable && value !== false ) {
\t\t\t\tthis._makeResizable();
\t\t\t}
\t\t}

\t\tif ( key === \"title\" ) {
\t\t\tthis._title( this.uiDialogTitlebar.find( \".ui-dialog-title\" ) );
\t\t}
\t},

\t_size: function() {

\t\t// If the user has resized the dialog, the .ui-dialog and .ui-dialog-content
\t\t// divs will both have width and height set, so we need to reset them
\t\tvar nonContentHeight, minContentHeight, maxContentHeight,
\t\t\toptions = this.options;

\t\t// Reset content sizing
\t\tthis.element.show().css( {
\t\t\twidth: \"auto\",
\t\t\tminHeight: 0,
\t\t\tmaxHeight: \"none\",
\t\t\theight: 0
\t\t} );

\t\tif ( options.minWidth > options.width ) {
\t\t\toptions.width = options.minWidth;
\t\t}

\t\t// Reset wrapper sizing
\t\t// determine the height of all the non-content elements
\t\tnonContentHeight = this.uiDialog.css( {
\t\t\theight: \"auto\",
\t\t\twidth: options.width
\t\t} )
\t\t\t.outerHeight();
\t\tminContentHeight = Math.max( 0, options.minHeight - nonContentHeight );
\t\tmaxContentHeight = typeof options.maxHeight === \"number\" ?
\t\t\tMath.max( 0, options.maxHeight - nonContentHeight ) :
\t\t\t\"none\";

\t\tif ( options.height === \"auto\" ) {
\t\t\tthis.element.css( {
\t\t\t\tminHeight: minContentHeight,
\t\t\t\tmaxHeight: maxContentHeight,
\t\t\t\theight: \"auto\"
\t\t\t} );
\t\t} else {
\t\t\tthis.element.height( Math.max( 0, options.height - nonContentHeight ) );
\t\t}

\t\tif ( this.uiDialog.is( \":data(ui-resizable)\" ) ) {
\t\t\tthis.uiDialog.resizable( \"option\", \"minHeight\", this._minHeight() );
\t\t}
\t},

\t_blockFrames: function() {
\t\tthis.iframeBlocks = this.document.find( \"iframe\" ).map( function() {
\t\t\tvar iframe = \$( this );

\t\t\treturn \$( \"<div>\" )
\t\t\t\t.css( {
\t\t\t\t\tposition: \"absolute\",
\t\t\t\t\twidth: iframe.outerWidth(),
\t\t\t\t\theight: iframe.outerHeight()
\t\t\t\t} )
\t\t\t\t.appendTo( iframe.parent() )
\t\t\t\t.offset( iframe.offset() )[ 0 ];
\t\t} );
\t},

\t_unblockFrames: function() {
\t\tif ( this.iframeBlocks ) {
\t\t\tthis.iframeBlocks.remove();
\t\t\tdelete this.iframeBlocks;
\t\t}
\t},

\t_allowInteraction: function( event ) {
\t\tif ( \$( event.target ).closest( \".ui-dialog\" ).length ) {
\t\t\treturn true;
\t\t}

\t\t// TODO: Remove hack when datepicker implements
\t\t// the .ui-front logic (#8989)
\t\treturn !!\$( event.target ).closest( \".ui-datepicker\" ).length;
\t},

\t_createOverlay: function() {
\t\tif ( !this.options.modal ) {
\t\t\treturn;
\t\t}

\t\t// We use a delay in case the overlay is created from an
\t\t// event that we're going to be cancelling (#2804)
\t\tvar isOpening = true;
\t\tthis._delay( function() {
\t\t\tisOpening = false;
\t\t} );

\t\tif ( !this.document.data( \"ui-dialog-overlays\" ) ) {

\t\t\t// Prevent use of anchors and inputs
\t\t\t// Using _on() for an event handler shared across many instances is
\t\t\t// safe because the dialogs stack and must be closed in reverse order
\t\t\tthis._on( this.document, {
\t\t\t\tfocusin: function( event ) {
\t\t\t\t\tif ( isOpening ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tif ( !this._allowInteraction( event ) ) {
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\tthis._trackingInstances()[ 0 ]._focusTabbable();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t\t}

\t\tthis.overlay = \$( \"<div>\" )
\t\t\t.appendTo( this._appendTo() );

\t\tthis._addClass( this.overlay, null, \"ui-widget-overlay ui-front\" );
\t\tthis._on( this.overlay, {
\t\t\tmousedown: \"_keepFocus\"
\t\t} );
\t\tthis.document.data( \"ui-dialog-overlays\",
\t\t\t( this.document.data( \"ui-dialog-overlays\" ) || 0 ) + 1 );
\t},

\t_destroyOverlay: function() {
\t\tif ( !this.options.modal ) {
\t\t\treturn;
\t\t}

\t\tif ( this.overlay ) {
\t\t\tvar overlays = this.document.data( \"ui-dialog-overlays\" ) - 1;

\t\t\tif ( !overlays ) {
\t\t\t\tthis._off( this.document, \"focusin\" );
\t\t\t\tthis.document.removeData( \"ui-dialog-overlays\" );
\t\t\t} else {
\t\t\t\tthis.document.data( \"ui-dialog-overlays\", overlays );
\t\t\t}

\t\t\tthis.overlay.remove();
\t\t\tthis.overlay = null;
\t\t}
\t}
} );

// DEPRECATED
// TODO: switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for dialogClass option
\t\$.widget( \"ui.dialog\", \$.ui.dialog, {
\t\toptions: {
\t\t\tdialogClass: \"\"
\t\t},
\t\t_createWrapper: function() {
\t\t\tthis._super();
\t\t\tthis.uiDialog.addClass( this.options.dialogClass );
\t\t},
\t\t_setOption: function( key, value ) {
\t\t\tif ( key === \"dialogClass\" ) {
\t\t\t\tthis.uiDialog
\t\t\t\t\t.removeClass( this.options.dialogClass )
\t\t\t\t\t.addClass( value );
\t\t\t}
\t\t\tthis._superApply( arguments );
\t\t}
\t} );
}

return \$.ui.dialog;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/dialog.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/dialog.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/dialog.js");
    }
}
