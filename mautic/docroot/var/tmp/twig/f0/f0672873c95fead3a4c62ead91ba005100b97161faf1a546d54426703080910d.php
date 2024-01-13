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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/plugin.js */
class __TwigTemplate_29c109e825e3e1f84c0ad2ea1f3a6f4568e549500f0246c85842df30fa56ae12 extends Template
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
        echo "﻿/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/**
 * @fileOverview The \"colorbutton\" plugin that makes it possible to assign
 *               text and background colors to editor contents.
 *
 */

( function() {
\tvar ColorBox,
\t\tColorHistoryRow,
\t\tColorHistory;

\tCKEDITOR.plugins.add( 'colorbutton', {
\t\trequires: 'panelbutton,floatpanel',
\t\t// jscs:disable maximumLineLength
\t\tlang: 'af,ar,az,bg,bn,bs,ca,cs,cy,da,de,de-ch,el,en,en-au,en-ca,en-gb,eo,es,es-mx,et,eu,fa,fi,fo,fr,fr-ca,gl,gu,he,hi,hr,hu,id,is,it,ja,ka,km,ko,ku,lt,lv,mk,mn,ms,nb,nl,no,oc,pl,pt,pt-br,ro,ru,si,sk,sl,sq,sr,sr-latn,sv,th,tr,tt,ug,uk,vi,zh,zh-cn', // %REMOVE_LINE_CORE%
\t\t// jscs:enable maximumLineLength
\t\ticons: 'bgcolor,textcolor', // %REMOVE_LINE_CORE%
\t\thidpi: true, // %REMOVE_LINE_CORE%
\t\tinit: function( editor ) {
\t\t\tvar config = editor.config,
\t\t\t\tlang = editor.lang.colorbutton;

\t\t\tif ( !CKEDITOR.env.hc ) {
\t\t\t\taddButton( {
\t\t\t\t\tname: 'TextColor',
\t\t\t\t\ttype: 'fore',
\t\t\t\t\tcommandName: 'textColor',
\t\t\t\t\ttitle: lang.textColorTitle,
\t\t\t\t\torder: 10,
\t\t\t\t\tcontentTransformations: [
\t\t\t\t\t\t[
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\telement: 'font',
\t\t\t\t\t\t\t\tcheck: 'span{color}',
\t\t\t\t\t\t\t\tleft: function( element ) {
\t\t\t\t\t\t\t\t\treturn !!element.attributes.color;
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tright: function( element ) {
\t\t\t\t\t\t\t\t\telement.name = 'span';

\t\t\t\t\t\t\t\t\telement.attributes.color && ( element.styles.color = element.attributes.color );
\t\t\t\t\t\t\t\t\tdelete element.attributes.color;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t]
\t\t\t\t\t]
\t\t\t\t} );

\t\t\t\tvar contentTransformations,
\t\t\t\t\tnormalizeBackground = editor.config.colorButton_normalizeBackground;

\t\t\t\tif ( normalizeBackground === undefined || normalizeBackground ) {
\t\t\t\t\t// If background contains only color, then we want to convert it into background-color so that it's
\t\t\t\t\t// correctly picked by colorbutton plugin.
\t\t\t\t\tcontentTransformations = [
\t\t\t\t\t\t[
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t// Transform span that specify background with color only to background-color.
\t\t\t\t\t\t\t\telement: 'span',
\t\t\t\t\t\t\t\tleft: function( element ) {
\t\t\t\t\t\t\t\t\tvar tools = CKEDITOR.tools;
\t\t\t\t\t\t\t\t\tif ( element.name != 'span' || !element.styles || !element.styles.background ) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tvar background = tools.style.parse.background( element.styles.background );

\t\t\t\t\t\t\t\t\t// We return true only if background specifies **only** color property, and there's only one background directive.
\t\t\t\t\t\t\t\t\treturn background.color && tools.object.keys( background ).length === 1;
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tright: function( element ) {
\t\t\t\t\t\t\t\t\tvar style = new CKEDITOR.style( editor.config.colorButton_backStyle, {
\t\t\t\t\t\t\t\t\t\t\tcolor: element.styles.background
\t\t\t\t\t\t\t\t\t\t} ),
\t\t\t\t\t\t\t\t\t\tdefinition = style.getDefinition();

\t\t\t\t\t\t\t\t\t// Align the output object with the template used in config.
\t\t\t\t\t\t\t\t\telement.name = definition.element;
\t\t\t\t\t\t\t\t\telement.styles = definition.styles;
\t\t\t\t\t\t\t\t\telement.attributes = definition.attributes || {};

\t\t\t\t\t\t\t\t\treturn element;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t]
\t\t\t\t\t];
\t\t\t\t}

\t\t\t\taddButton( {
\t\t\t\t\tname: 'BGColor',
\t\t\t\t\ttype: 'back',
\t\t\t\t\tcommandName: 'bgColor',
\t\t\t\t\ttitle: lang.bgColorTitle,
\t\t\t\t\torder: 20,
\t\t\t\t\tcontentTransformations: contentTransformations
\t\t\t\t} );
\t\t\t}

\t\t\tfunction addButton( options ) {
\t\t\t\tvar name = options.name,
\t\t\t\t\ttype = options.type,
\t\t\t\t\ttitle = options.title,
\t\t\t\t\torder = options.order,
\t\t\t\t\tcommandName = options.commandName,
\t\t\t\t\tcontentTransformations = options.contentTransformations || {},
\t\t\t\t\tstyle = new CKEDITOR.style( config[ 'colorButton_' + type + 'Style' ] ),
\t\t\t\t\tcolorBoxId = CKEDITOR.tools.getNextId() + '_colorBox',
\t\t\t\t\tcolorData = { type: type },
\t\t\t\t\tdefaultColorStyle = new CKEDITOR.style( config[ 'colorButton_' + type + 'Style' ], { color: 'inherit' } ),
\t\t\t\t\tclickFn = createClickFunction(),
\t\t\t\t\thistory = ColorHistory.getRowLimit( editor ) ? new ColorHistory( editor, type == 'back' ? 'background-color' : 'color', clickFn ) : undefined,
\t\t\t\t\tpanelBlock;

\t\t\t\teditor.addCommand( commandName, {
\t\t\t\t\tcontextSensitive: true,
\t\t\t\t\texec: function( editor, data ) {
\t\t\t\t\t\tif ( editor.readOnly ) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\tvar newStyle = data.newStyle;

\t\t\t\t\t\teditor.removeStyle( defaultColorStyle );

\t\t\t\t\t\teditor.focus();

\t\t\t\t\t\tif ( newStyle ) {
\t\t\t\t\t\t\teditor.applyStyle( newStyle );
\t\t\t\t\t\t}

\t\t\t\t\t\teditor.fire( 'saveSnapshot' );
\t\t\t\t\t},

\t\t\t\t\trefresh: function( editor, path ) {
\t\t\t\t\t\tif ( !defaultColorStyle.checkApplicable( path, editor, editor.activeFilter ) ) {
\t\t\t\t\t\t\tthis.setState( CKEDITOR.TRISTATE_DISABLED );
\t\t\t\t\t\t} else if ( defaultColorStyle.checkActive( path, editor ) ) {
\t\t\t\t\t\t\tthis.setState( CKEDITOR.TRISTATE_ON );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis.setState( CKEDITOR.TRISTATE_OFF );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );

\t\t\t\teditor.ui.add( name, CKEDITOR.UI_PANELBUTTON, {
\t\t\t\t\tlabel: title,
\t\t\t\t\ttitle: title,
\t\t\t\t\tcommand: commandName,
\t\t\t\t\teditorFocus: 0,
\t\t\t\t\ttoolbar: 'colors,' + order,
\t\t\t\t\tallowedContent: style,
\t\t\t\t\trequiredContent: style,
\t\t\t\t\tcontentTransformations: contentTransformations,

\t\t\t\t\tpanel: {
\t\t\t\t\t\tcss: CKEDITOR.skin.getPath( 'editor' ),
\t\t\t\t\t\tattributes: { role: 'listbox', 'aria-label': lang.panelTitle }
\t\t\t\t\t},

\t\t\t\t\t// Selects the color based on the first matching result from the given filter function.
\t\t\t\t\t//
\t\t\t\t\t// The filter function should accept a color iterated from the
\t\t\t\t\t// {@link CKEDITOR.config#colorButton_colors} list as a parameter. If the color could not be found,
\t\t\t\t\t// this method will fall back to the first color from the panel.
\t\t\t\t\t//
\t\t\t\t\t// @since 4.14.0
\t\t\t\t\t// @private
\t\t\t\t\t// @member CKEDITOR.ui.colorButton
\t\t\t\t\t// @param {Function} callback The filter function which should return `true` if a matching color is found.
\t\t\t\t\t// @param {String} callback.color The color compared by the filter function.
\t\t\t\t\tselect: function( callback ) {
\t\t\t\t\t\tvar colors = config.colorButton_colors.split( ',' ),
\t\t\t\t\t\t\tcolor = CKEDITOR.tools.array.find( colors, callback );

\t\t\t\t\t\tcolor = ColorBox.normalizeColor( color );

\t\t\t\t\t\tselectColor( panelBlock, color );
\t\t\t\t\t\tpanelBlock._.markFirstDisplayed();
\t\t\t\t\t},

\t\t\t\t\tonBlock: function( panel, block ) {
\t\t\t\t\t\tpanelBlock = block;
\t\t\t\t\t\tblock.autoSize = true;
\t\t\t\t\t\tblock.element.addClass( 'cke_colorblock' );
\t\t\t\t\t\tblock.element.setHtml( renderColors( colorBoxId, clickFn, history ? history.getLength() : 0 ) );

\t\t\t\t\t\t// The block should not have scrollbars (https://dev.ckeditor.com/ticket/5933, https://dev.ckeditor.com/ticket/6056)
\t\t\t\t\t\tblock.element.getDocument().getBody().setStyle( 'overflow', 'hidden' );

\t\t\t\t\t\t// First render of panel have a scrollbar, but it shouldn't (#4247).
\t\t\t\t\t\tblock.element.getAscendant( { html: 1 } ).setStyle( 'overflow', 'hidden' );

\t\t\t\t\t\tCKEDITOR.ui.fire( 'ready', this );

\t\t\t\t\t\tvar keys = block.keys,
\t\t\t\t\t\t\trtl = editor.lang.dir == 'rtl';

\t\t\t\t\t\tkeys[ rtl ? 37 : 39 ] = 'next'; // ARROW-RIGHT
\t\t\t\t\t\tkeys[ 40 ] = 'next'; // ARROW-DOWN
\t\t\t\t\t\tkeys[ 9 ] = 'next'; // TAB
\t\t\t\t\t\tkeys[ rtl ? 39 : 37 ] = 'prev'; // ARROW-LEFT
\t\t\t\t\t\tkeys[ 38 ] = 'prev'; // ARROW-UP
\t\t\t\t\t\tkeys[ CKEDITOR.SHIFT + 9 ] = 'prev'; // SHIFT + TAB
\t\t\t\t\t\tkeys[ 32 ] = 'click'; // SPACE

\t\t\t\t\t\tif ( history ) {
\t\t\t\t\t\t\thistory.setContainer( block.element.findOne( '.cke_colorhistory' ) );
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\t// The automatic colorbox should represent the real color (https://dev.ckeditor.com/ticket/6010)
\t\t\t\t\tonOpen: function() {
\t\t\t\t\t\tvar selection = editor.getSelection(),
\t\t\t\t\t\t\tblock = selection && selection.getStartElement(),
\t\t\t\t\t\t\tpath = editor.elementPath( block ),
\t\t\t\t\t\t\tcssProperty = type == 'back' ? 'background-color' : 'color',
\t\t\t\t\t\t\tautomaticColor;

\t\t\t\t\t\tif ( !path ) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Find the closest block element.
\t\t\t\t\t\tblock = path.block || path.blockLimit || editor.document.getBody();

\t\t\t\t\t\t// The background color might be transparent. In that case, look up the color in the DOM tree.
\t\t\t\t\t\tdo {
\t\t\t\t\t\t\tautomaticColor = block && block.getComputedStyle( cssProperty ) || 'transparent';
\t\t\t\t\t\t}
\t\t\t\t\t\twhile ( type == 'back' && automaticColor == 'transparent' && block && ( block = block.getParent() ) );

\t\t\t\t\t\t// The box should never be transparent.
\t\t\t\t\t\tif ( !automaticColor || automaticColor == 'transparent' ) {
\t\t\t\t\t\t\tautomaticColor = '#ffffff';
\t\t\t\t\t\t}

\t\t\t\t\t\tif ( config.colorButton_enableAutomatic ) {
\t\t\t\t\t\t\tpanelBlock.element.findOne( '#' + colorBoxId ).setStyle( 'background-color', automaticColor );
\t\t\t\t\t\t}

\t\t\t\t\t\tvar range = selection && selection.getRanges()[ 0 ];

\t\t\t\t\t\tif ( range ) {
\t\t\t\t\t\t\tvar walker = new CKEDITOR.dom.walker( range ),
\t\t\t\t\t\t\t\telement = range.collapsed ? range.startContainer : walker.next(),
\t\t\t\t\t\t\t\tfinalColor = '',
\t\t\t\t\t\t\t\tcurrentColor;

\t\t\t\t\t\t\twhile ( element ) {
\t\t\t\t\t\t\t\t// (#2296)
\t\t\t\t\t\t\t\tif ( element.type !== CKEDITOR.NODE_ELEMENT ) {
\t\t\t\t\t\t\t\t\telement = element.getParent();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tcurrentColor = ColorBox.normalizeColor( element.getComputedStyle( cssProperty ) );
\t\t\t\t\t\t\t\tfinalColor = finalColor || currentColor;

\t\t\t\t\t\t\t\tif ( finalColor !== currentColor ) {
\t\t\t\t\t\t\t\t\tfinalColor = '';
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\telement = walker.next();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif ( finalColor == 'transparent' ) {
\t\t\t\t\t\t\t\tfinalColor = '';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif ( type == 'fore' ) {
\t\t\t\t\t\t\t\tcolorData.automaticTextColor = '#' + ColorBox.normalizeColor( automaticColor );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorData.selectionColor = finalColor ? '#' + finalColor : '';

\t\t\t\t\t\t\tselectColor( panelBlock, finalColor );
\t\t\t\t\t\t}

\t\t\t\t\t\treturn automaticColor;
\t\t\t\t\t}
\t\t\t\t} );

\t\t\t\tfunction createColorStyleDefinition() {
\t\t\t\t\tvar colorStyleDefinition = editor.config[ 'colorButton_' + type + 'Style' ];

\t\t\t\t\tcolorStyleDefinition.childRule = type == 'back' ?
\t\t\t\t\t\tfunction( element ) {
\t\t\t\t\t\t\t// It's better to apply background color as the innermost style. (https://dev.ckeditor.com/ticket/3599)
\t\t\t\t\t\t\t// Except for \"unstylable elements\". (https://dev.ckeditor.com/ticket/6103)
\t\t\t\t\t\t\treturn isUnstylable( element );
\t\t\t\t\t\t} : function( element ) {
\t\t\t\t\t\t\t// Fore color style must be applied inside links instead of around it. (https://dev.ckeditor.com/ticket/4772,https://dev.ckeditor.com/ticket/6908)
\t\t\t\t\t\t\treturn !( element.is( 'a' ) || element.getElementsByTag( 'a' ).count() ) || isUnstylable( element );
\t\t\t\t\t\t};

\t\t\t\t\treturn colorStyleDefinition;
\t\t\t\t}

\t\t\t\tfunction createClickFunction() {
\t\t\t\t\treturn CKEDITOR.tools.addFunction( function addClickFn( color, colorName, colorbox ) {
\t\t\t\t\t\teditor.focus();
\t\t\t\t\t\teditor.fire( 'saveSnapshot' );

\t\t\t\t\t\tif ( color == '?' ) {
\t\t\t\t\t\t\teditor.getColorFromDialog( function( color ) {
\t\t\t\t\t\t\t\tif ( color ) {
\t\t\t\t\t\t\t\t\tsetColor( color, colorName, history );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, null, colorData );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tsetColor( color && '#' + color, colorName, history );
\t\t\t\t\t\t}

\t\t\t\t\t\t// The colors may be duplicated in both default palette and color history. If user reopens panel
\t\t\t\t\t\t// after choosing color without changing selection, the box that was clicked last should be selected.
\t\t\t\t\t\t// If selection changes in the meantime, color box from the default palette has the precedence.
\t\t\t\t\t\t// See https://github.com/ckeditor/ckeditor4/pull/3784#pullrequestreview-378461341 for details.
\t\t\t\t\t\tif ( !colorbox ) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tcolorbox.setAttribute( 'cke_colorlast', true );
\t\t\t\t\t\teditor.once( 'selectionChange', function() {
\t\t\t\t\t\t\tcolorbox.removeAttribute( 'cke_colorlast' );
\t\t\t\t\t\t} );
\t\t\t\t\t} );
\t\t\t\t}

\t\t\t\tfunction setColor( color, colorName, colorHistory ) {
\t\t\t\t\tvar colorStyleVars = {};

\t\t\t\t\tif ( color ) {
\t\t\t\t\t\tcolorStyleVars.color = color;
\t\t\t\t\t}
\t\t\t\t\tif ( colorName ) {
\t\t\t\t\t\tcolorStyleVars.colorName = colorName;
\t\t\t\t\t}

\t\t\t\t\tvar colorStyle = !CKEDITOR.tools.isEmpty( colorStyleVars ) && new CKEDITOR.style( createColorStyleDefinition(), colorStyleVars );

\t\t\t\t\teditor.execCommand( commandName, { newStyle: colorStyle } );
\t\t\t\t\tif ( color && colorHistory ) {
\t\t\t\t\t\tcolorHistory.addColor( color.substr( 1 ).toUpperCase() );
\t\t\t\t\t\trenumberElements( panelBlock );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfunction renumberElements( panel ) {
\t\t\t\t\tvar panelElements = panel.element.find( '[role=option]' ).toArray();

\t\t\t\t\tfor ( var i = 0; i < panelElements.length; i++ ) {
\t\t\t\t\t\tpanelElements[ i ].setAttributes( {
\t\t\t\t\t\t\t'aria-posinset': i + 1,
\t\t\t\t\t\t\t'aria-setsize': panelElements.length
\t\t\t\t\t\t} );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfunction renderColors( colorBoxId, clickFn, historyLength ) {
\t\t\t\tvar output = [],
\t\t\t\t\tcolors = config.colorButton_colors.split( ',' ),
\t\t\t\t\t// Tells if we should include \"More Colors...\" button.
\t\t\t\t\tmoreColorsEnabled = editor.plugins.colordialog && config.colorButton_enableMore,
\t\t\t\t\t// aria-setsize and aria-posinset attributes are used to indicate size of options, because
\t\t\t\t\t// screen readers doesn't play nice with table, based layouts (https://dev.ckeditor.com/ticket/12097).
\t\t\t\t\ttotal = colors.length + historyLength + ( moreColorsEnabled ? 1 : 0 ),
\t\t\t\t\tstartingPosition = 1;

\t\t\t\tif ( config.colorButton_enableAutomatic ) {
\t\t\t\t\ttotal += 1;
\t\t\t\t\tstartingPosition += 1;
\t\t\t\t\tgenerateAutomaticButtonHtml( output );
\t\t\t\t}

\t\t\t\toutput.push( '<table role=\"presentation\" cellspacing=0 cellpadding=0 width=\"100%\"><tbody>' );

\t\t\t\t// Render the color boxes.
\t\t\t\tfor ( var i = 0; i < colors.length; i++ ) {
\t\t\t\t\tif ( ( i % editor.config.colorButton_colorsPerRow ) === 0 )
\t\t\t\t\t\toutput.push( '</tr><tr>' );

\t\t\t\t\tvar parts = colors[ i ].split( '/' ),
\t\t\t\t\t\tcolorName = parts[ 0 ],
\t\t\t\t\t\tcolorCode = parts[ 1 ] || colorName,
\t\t\t\t\t\tcolorLabel = parts[ 1 ] ? colorName : undefined,
\t\t\t\t\t\tbox = new ColorBox( editor, { color: colorCode, label: colorLabel }, clickFn );

\t\t\t\t\tbox.setPositionIndex( startingPosition + i, total );
\t\t\t\t\toutput.push( box.getHtml() );
\t\t\t\t}

\t\t\t\tif ( ColorHistory.getRowLimit( editor ) ) {
\t\t\t\t\tColorHistory.renderContainer( output, editor );
\t\t\t\t}

\t\t\t\tif ( moreColorsEnabled ) {
\t\t\t\t\tgenerateMoreColorsButtonHtml( output );
\t\t\t\t}

\t\t\t\toutput.push( '</tr></tbody></table>' );

\t\t\t\treturn output.join( '' );

\t\t\t\tfunction generateAutomaticButtonHtml( output ) {
\t\t\t\t\toutput.push( '<a class=\"cke_colorauto\" _cke_focus=1 hidefocus=true',
\t\t\t\t\t\t' title=\"', lang.auto, '\"',
\t\t\t\t\t\t' draggable=\"false\"',
\t\t\t\t\t\t' ondragstart=\"return false;\"', // Draggable attribute is buggy on Firefox.
\t\t\t\t\t\t' onclick=\"CKEDITOR.tools.callFunction(', clickFn, ',null\\);return false;\"',
\t\t\t\t\t\t' href=\"javascript:void(\\'', lang.auto, '\\')\"',
\t\t\t\t\t\t' role=\"option\" aria-posinset=\"1\" aria-setsize=\"', total, '\">',
\t\t\t\t\t\t\t'<table role=\"presentation\" cellspacing=0 cellpadding=0 width=\"100%\">',
\t\t\t\t\t\t\t\t'<tr>',
\t\t\t\t\t\t\t\t\t'<td colspan=\"', editor.config.colorButton_colorsPerRow, '\" align=\"center\">',
\t\t\t\t\t\t\t\t\t\t'<span class=\"cke_colorbox\" id=\"', colorBoxId, '\"></span>', lang.auto,
\t\t\t\t\t\t\t\t\t'</td>',
\t\t\t\t\t\t\t\t'</tr>',
\t\t\t\t\t\t\t'</table>',
\t\t\t\t\t\t'</a>' );
\t\t\t\t}

\t\t\t\tfunction generateMoreColorsButtonHtml( output ) {
\t\t\t\t\toutput.push( '</tr>',
\t\t\t\t\t\t'<tr>',
\t\t\t\t\t\t\t'<td colspan=\"', editor.config.colorButton_colorsPerRow, '\" align=\"center\">',
\t\t\t\t\t\t\t\t'<a class=\"cke_colormore\" _cke_focus=1 hidefocus=true',
\t\t\t\t\t\t\t\t\t' title=\"', lang.more, '\"',
\t\t\t\t\t\t\t\t\t' draggable=\"false\"',
\t\t\t\t\t\t\t\t\t' ondragstart=\"return false;\"', // Draggable attribute is buggy on Firefox.
\t\t\t\t\t\t\t\t\t' onclick=\"CKEDITOR.tools.callFunction(', clickFn, ',\\'?\\');return false;\"',
\t\t\t\t\t\t\t\t\t' href=\"javascript:void(\\'', lang.more, '\\')\"', ' role=\"option\" aria-posinset=\"', total,
\t\t\t\t\t\t\t\t\t'\" aria-setsize=\"', total, '\">', lang.more,
\t\t\t\t\t\t\t\t'</a>',
\t\t\t\t\t\t\t'</td>' ); // </tr> is later in the code.
\t\t\t\t}
\t\t\t}

\t\t\tfunction isUnstylable( ele ) {
\t\t\t\treturn ( ele.getAttribute( 'contentEditable' ) == 'false' ) || ele.getAttribute( 'data-nostyle' );
\t\t\t}

\t\t\t/*
\t\t\t* Selects the specified color in the specified panel block.
\t\t\t*
\t\t\t* @private
\t\t\t* @member CKEDITOR.plugins.colorbutton
\t\t\t* @param {CKEDITOR.ui.panel.block} block
\t\t\t* @param {String} color
\t\t\t*/
\t\t\tfunction selectColor( block, color ) {
\t\t\t\tvar items = block._.getItems(),
\t\t\t\t\tselected = block.element.findOne( '[aria-selected]' ),
\t\t\t\t\tlastColor = block.element.findOne( '[cke_colorlast]' );

\t\t\t\tif ( selected ) {
\t\t\t\t\tselected.removeAttribute( 'aria-selected' );
\t\t\t\t}

\t\t\t\tif ( lastColor ) {
\t\t\t\t\tlastColor.setAttribute( 'aria-selected', true );
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tfor ( var i = 0; i < items.count(); i++ ) {
\t\t\t\t\tvar item = items.getItem( i );

\t\t\t\t\tif ( color && color == ColorBox.normalizeColor( item.getAttribute( 'data-value' ) ) ) {
\t\t\t\t\t\titem.setAttribute( 'aria-selected', true );
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t} );
\tColorBox = CKEDITOR.tools.createClass( {
\t\t\$: function( editor, colorData, clickFn ) {
\t\t\tthis.\$ = new CKEDITOR.dom.element( 'td' );

\t\t\tthis.color = CKEDITOR.tools._isValidColorFormat( colorData.color ) ? colorData.color : '';
\t\t\tthis.clickFn = clickFn;
\t\t\tthis.label = colorData.label || ColorBox.colorNames( editor )[ this.color ] || this.color;

\t\t\tthis.setHtml();
\t\t},

\t\tstatics: {
\t\t\tcolorNames: function( editor ) {
\t\t\t\treturn editor.lang.colorbutton.colors;
\t\t\t},

\t\t\t/*
\t\t\t * Converts a CSS color value to an easily comparable form.
\t\t\t *
\t\t\t * The function supports most of the color formats:
\t\t\t *
\t\t\t * * named colors (e.g. `yellow`),
\t\t\t * * hex colors (e.g. `#FF0000` or `#F00`),
\t\t\t * * RGB/RGBA colors (e.g. `rgb( 255, 0, 10)` or `rgba( 100, 20, 50, .5 )`),
\t\t\t * * HSL/HSLA colors (e.g. `hsl( 100, 50%, 20%)` or `hsla( 100, 50%, 20%, 10%)`).
\t\t\t *
\t\t\t * @private
\t\t\t * @param {String} color
\t\t\t * @returns {String} Returns color in hex format, but without the hash at the beginning, e.g. `ff0000` for red.
\t\t\t */
\t\t\tnormalizeColor: function( color ) {
\t\t\t\tvar alphaRegex = /^(rgb|hsl)a\\(/g,
\t\t\t\t\ttransparentRegex = /^rgba\\((\\s*0\\s*,?){4}\\)\$/g,
\t\t\t\t\tisAlphaColor = alphaRegex.test( color ),
\t\t\t\t\t// Browsers tend to represent transparent color as rgba(0, 0, 0, 0), so we need to filter out this value.
\t\t\t\t\tisTransparentColor = transparentRegex.test( color ),
\t\t\t\t\tcolorInstance;

\t\t\t\t// For colors with alpha channel we need to use CKEDITOR.tools.color normalization (#4351).
\t\t\t\tif ( isAlphaColor && !isTransparentColor ) {
\t\t\t\t\tcolorInstance = new CKEDITOR.tools.color( color );

\t\t\t\t\treturn CKEDITOR.tools.normalizeHex( colorInstance.getHex() || '' ).replace( /#/g, '' );
\t\t\t\t}

\t\t\t\t// Replace 3-character hexadecimal notation with a 6-character hexadecimal notation (#1008).
\t\t\t\treturn CKEDITOR.tools.normalizeHex( '#' + CKEDITOR.tools.convertRgbToHex( color || '' ) ).replace( /#/g, '' );
\t\t\t}
\t\t},

\t\tproto: {
\t\t\tgetElement: function() {
\t\t\t\treturn this.\$;
\t\t\t},

\t\t\tgetHtml: function() {
\t\t\t\treturn this.getElement().getOuterHtml();
\t\t\t},

\t\t\tsetHtml: function() {
\t\t\t\tthis.getElement().setHtml( '<a class=\"cke_colorbox\" _cke_focus=1 hidefocus=true' +
\t\t\t\t\t\t' title=\"' + this.label + '\"' +
\t\t\t\t\t\t' draggable=\"false\"' +
\t\t\t\t\t\t' ondragstart=\"return false;\"' + // Draggable attribute is buggy on Firefox.
\t\t\t\t\t\t' onclick=\"CKEDITOR.tools.callFunction(' + this.clickFn + ',\\'' + this.color + '\\',\\'' + this.label +  '\\', this);' +
\t\t\t\t\t\t' return false;\"' +
\t\t\t\t\t\t' href=\"javascript:void(\\'' + this.color + '\\')\"' +
\t\t\t\t\t\t' data-value=\"' + this.color + '\"' +
\t\t\t\t\t\t' role=\"option\">' +
\t\t\t\t\t\t'<span class=\"cke_colorbox\" style=\"background-color:#' + this.color + '\"></span>' +
\t\t\t\t\t'</a>' );
\t\t\t},

\t\t\tsetPositionIndex: function( posinset, setsize ) {
\t\t\t\tthis.getElement().getChild( 0 ).setAttributes( {
\t\t\t\t\t'aria-posinset': posinset,
\t\t\t\t\t'aria-setsize': setsize
\t\t\t\t} );
\t\t\t}
\t\t}
\t} );

\tColorHistoryRow = CKEDITOR.tools.createClass( {
\t\t\$: function() {
\t\t\tthis.\$ = new CKEDITOR.dom.element( 'tr' );
\t\t\tthis.\$.addClass( 'cke_colorhistory_row' );
\t\t\tthis.boxes = [];
\t\t},

\t\tproto: {
\t\t\tgetElement: function() {
\t\t\t\treturn this.\$;
\t\t\t},

\t\t\tremoveLastColor: function() {
\t\t\t\tthis.getElement().getLast().remove();
\t\t\t\treturn this.boxes.pop();
\t\t\t},

\t\t\taddNewColor: function( colorBox ) {
\t\t\t\tthis.boxes.unshift( colorBox );
\t\t\t\tthis.getElement().append( colorBox.getElement(), true );
\t\t\t},

\t\t\textractColorBox: function( colorCode ) {
\t\t\t\tvar index = CKEDITOR.tools.getIndex( this.boxes, function( box ) {
\t\t\t\t\treturn box.color === colorCode;
\t\t\t\t} );

\t\t\t\tif ( index < 0 ) {
\t\t\t\t\treturn null;
\t\t\t\t}

\t\t\t\tthis.boxes[ index ].getElement().remove();
\t\t\t\treturn this.boxes.splice( index, 1 )[ 0 ];
\t\t\t}
\t\t}
\t} );

\tColorHistory = CKEDITOR.tools.createClass( {
\t\t\$: function( editor, cssProperty, clickFn ) {
\t\t\tthis.editor = editor;
\t\t\tthis.cssProperty = cssProperty;
\t\t\tthis.clickFn = clickFn;

\t\t\tthis.rows = [];
\t\t\tthis._.addNewRow();

\t\t\tif ( this.editor.config.colorButton_renderContentColors ) {
\t\t\t\t// It can't be done right away - we have to wait till editable is set up.
\t\t\t\tthis.editor.once( 'instanceReady', function() {
\t\t\t\t\tthis.renderContentColors();
\t\t\t\t}, this );
\t\t\t}
\t\t},

\t\tstatics: {
\t\t\trenderContainer: function( output, editor ) {
\t\t\t\toutput.push( '</tbody><tbody class=\"cke_colorhistory\" style=\"display:none;\">',
\t\t\t\t\t'<tr>',
\t\t\t\t\t\t'<td colspan=\"', editor.config.colorButton_colorsPerRow, '\" align=\"center\">',
\t\t\t\t\t\t\t'<span><hr></span>',
\t\t\t\t\t\t'</td>',
\t\t\t\t\t'</tr>',
\t\t\t\t'</tbody><tbody>' );
\t\t\t},

\t\t\tgetRowLimit: function( editor ) {
\t\t\t\treturn editor.config.colorButton_historyRowLimit;
\t\t\t},

\t\t\tgetCapacity: function( editor ) {
\t\t\t\treturn ColorHistory.getRowLimit( editor ) * editor.config.colorButton_colorsPerRow;
\t\t\t},

\t\t\tcolorList: CKEDITOR.tools.style.parse._colors
\t\t},

\t\t_: {
\t\t\tcountColors: function() {
\t\t\t\tvar spans = CKEDITOR.tools.getStyledSpans( this.cssProperty, this.editor.editable() ),
\t\t\t\t\tcolorOccurrences = CKEDITOR.tools.array.reduce( spans, function( occurrences, span ) {
\t\t\t\t\t\tvar colorCode = this._.getHexCode( span, this.cssProperty, ColorHistory.colorList );

\t\t\t\t\t\toccurrences[ colorCode ] = occurrences[ colorCode ] || 0;
\t\t\t\t\t\toccurrences[ colorCode ] += 1;

\t\t\t\t\t\treturn occurrences;
\t\t\t\t\t}, {}, this );

\t\t\t\treturn colorOccurrences;
\t\t\t},

\t\t\tgetHexCode: function( span, cssProperty, list ) {
\t\t\t\tvar color = span.getStyle( cssProperty );

\t\t\t\treturn color in list ? list[ color ].substr( 1 ) : ColorBox.normalizeColor( span.getComputedStyle( cssProperty ) ).toUpperCase();
\t\t\t},

\t\t\tsortByOccurrencesAscending: function( objectToParse, targetKeyName ) {
\t\t\t\tvar result = [];

\t\t\t\tfor ( var key in objectToParse ) {
\t\t\t\t\tvar color = {};

\t\t\t\t\tcolor[ targetKeyName ] = key;
\t\t\t\t\tcolor.frequency = objectToParse[ key ];

\t\t\t\t\tresult.push( color );
\t\t\t\t}

\t\t\t\tresult.sort( function( a, b ) {
\t\t\t\t\treturn b.frequency - a.frequency;
\t\t\t\t} );

\t\t\t\tthis._.trimToCapacity( result );

\t\t\t\treturn result.reverse();
\t\t\t},

\t\t\ttrimToCapacity: function( array ) {
\t\t\t\tarray.splice( ColorHistory.getCapacity( this.editor ) );
\t\t\t},

\t\t\taddColors: function( colorData ) {
\t\t\t\tCKEDITOR.tools.array.forEach( colorData, function( color ) {
\t\t\t\t\tthis.addColor( color.colorCode );
\t\t\t\t}, this );
\t\t\t},

\t\t\textractColorBox: function( colorCode ) {
\t\t\t\tfor ( var i = 0; i < this.rows.length; i++ ) {
\t\t\t\t\tvar box = this.rows[ i ].extractColorBox( colorCode );

\t\t\t\t\tif ( box ) {
\t\t\t\t\t\treturn box;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn null;
\t\t\t},

\t\t\tmoveToBeginning: function( colorBox ) {
\t\t\t\tthis.rows[ 0 ].addNewColor( colorBox );
\t\t\t},

\t\t\tcreateAtBeginning: function( colorCode ) {
\t\t\t\tthis._.moveToBeginning( new ColorBox( this.editor, { color: colorCode }, this.clickFn ) );
\t\t\t},

\t\t\taddNewRow: function() {
\t\t\t\tthis.rows.push( new ColorHistoryRow() );

\t\t\t\tif ( this.container ) {
\t\t\t\t\tthis.container.append( this.rows[ this.rows.length - 1 ].getElement() );
\t\t\t\t}
\t\t\t},

\t\t\talignRows: function() {
\t\t\t\tfor ( var rowIndex = 0; rowIndex < ColorHistory.getRowLimit( this.editor ); rowIndex++ ) {
\t\t\t\t\tif ( this.rows[ rowIndex ].boxes.length <= this.editor.config.colorButton_colorsPerRow ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t} else if ( this.rows[ rowIndex + 1 ] ) {
\t\t\t\t\t\tthis._.moveLastBoxToNextRow( rowIndex );
\t\t\t\t\t} else if ( rowIndex < ColorHistory.getRowLimit( this.editor ) - 1 ) {
\t\t\t\t\t\tthis._.addNewRow();
\t\t\t\t\t\tthis._.moveLastBoxToNextRow( rowIndex );
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.rows[ rowIndex ].removeLastColor();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tmoveLastBoxToNextRow: function( index ) {
\t\t\t\tthis.rows[ index + 1 ].addNewColor( this.rows[ index ].removeLastColor() );
\t\t\t},

\t\t\trefreshPositions: function() {
\t\t\t\tvar total = this._.countPanelElements(),
\t\t\t\t\tposition = this._.calculateFirstPosition( total );

\t\t\t\tCKEDITOR.tools.array.forEach( this.rows, function( row ) {
\t\t\t\t\tCKEDITOR.tools.array.forEach( row.boxes, function( colorBox ) {
\t\t\t\t\t\tcolorBox.setPositionIndex( position, total );
\t\t\t\t\t\tposition += 1;
\t\t\t\t\t} );
\t\t\t\t} );
\t\t\t},

\t\t\tcountPanelElements: function() {
\t\t\t\tvar total = this.editor.config.colorButton_colors.split( ',' ).length + this.getLength();

\t\t\t\tif ( this.editor.plugins.colordialog && this.editor.config.colorButton_enableMore ) {
\t\t\t\t\ttotal += 1;
\t\t\t\t}

\t\t\t\tif ( this.editor.config.colorButton_enableAutomatic ) {
\t\t\t\t\ttotal += 1;
\t\t\t\t}

\t\t\t\treturn total;
\t\t\t},

\t\t\tcalculateFirstPosition: function( total ) {
\t\t\t\tif ( this.editor.plugins.colordialog && this.editor.config.colorButton_enableMore ) {
\t\t\t\t\treturn total - this.getLength();
\t\t\t\t} else {
\t\t\t\t\treturn total - this.getLength() + 1;
\t\t\t\t}
\t\t\t},

\t\t\tattachRows: function() {
\t\t\t\tCKEDITOR.tools.array.forEach( this.rows, function( row ) {
\t\t\t\t\tthis.container.append( row.getElement() );
\t\t\t\t}, this );
\t\t\t}
\t\t},

\t\tproto: {
\t\t\tsetContainer: function( container ) {
\t\t\t\tthis.container = container;
\t\t\t\tthis._.attachRows();

\t\t\t\tif ( this.getLength() ) {
\t\t\t\t\tthis.show();
\t\t\t\t}
\t\t\t},

\t\t\tshow: function() {
\t\t\t\tif ( this.container ) {
\t\t\t\t\tthis.container.show();
\t\t\t\t}
\t\t\t},

\t\t\trenderContentColors: function() {
\t\t\t\tvar colorOccurrences = this._.countColors();

\t\t\t\tif ( CKEDITOR.tools.isEmpty( colorOccurrences ) ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar colorData = this._.sortByOccurrencesAscending( colorOccurrences, 'colorCode' );

\t\t\t\tthis._.addColors( colorData );
\t\t\t\tthis._.refreshPositions();
\t\t\t},

\t\t\taddColor: function( colorCode ) {
\t\t\t\tvar existingBox = this._.extractColorBox( colorCode );

\t\t\t\tif ( this.container && !this.container.isVisible() ) {
\t\t\t\t\tthis.show();
\t\t\t\t}

\t\t\t\tif ( existingBox ) {
\t\t\t\t\tthis._.moveToBeginning( existingBox );
\t\t\t\t} else {
\t\t\t\t\tthis._.createAtBeginning( colorCode );
\t\t\t\t}

\t\t\t\tthis._.alignRows();
\t\t\t},

\t\t\tgetLength: function() {
\t\t\t\treturn CKEDITOR.tools.array.reduce( this.rows, function( total, row ) {
\t\t\t\t\treturn total += row.boxes.length;
\t\t\t\t}, 0 );
\t\t\t}
\t\t}
\t} );
} )();

/**
 * Whether to enable the **More Colors** button in the color selectors.
 *
 * Read more in the {@glink features/colorbutton documentation}
 * and see the {@glink examples/colorbutton example}.
 *
 *\t\tconfig.colorButton_enableMore = false;
 *
 * @cfg {Boolean} [colorButton_enableMore=true]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_enableMore = true;

/**
 * Defines the colors to be displayed in the color selectors. This is a string
 * containing hexadecimal notation for HTML colors, without the `'#'` prefix.
 *
 * **Since 3.3:** A color name may optionally be defined by prefixing the entries with
 * a name and the slash character. For example, `'FontColor1/FF9900'` will be
 * displayed as the color `#FF9900` in the selector, but will be output as `'FontColor1'`.
 * **This behaviour was altered in version 4.12.0.**
 *
 * **Since 4.6.2:** The default color palette has changed. It contains fewer colors in more
 * pastel shades than the previous one.
 *
 * **Since 4.12.0:** Defining colors with names works in a different way. Colors names can be defined
 * by `colorName/colorCode`. The color name is only used in the tooltip. The output will now use the color code.
 * For example, `FontColor/FF9900` will be displayed as the color `#FF9900` in the selector, and will
 * be output as `#FF9900`.
 *
 * Read more in the {@glink features/colorbutton documentation}
 * and see the {@glink examples/colorbutton example}.
 *
 *\t\t// Brazil colors only.
 *\t\tconfig.colorButton_colors = '00923E,F8C100,28166F';
 *
 *\t\tconfig.colorButton_colors = 'FontColor1/FF9900,FontColor2/0066CC,FontColor3/F00';
 *
 *\t\t// CKEditor color palette available before version 4.6.2.
 *\t\tconfig.colorButton_colors =
 *\t\t\t'000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
 *\t\t\t'B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,' +
 *\t\t\t'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
 *\t\t\t'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
 *\t\t\t'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF';
 *
 * @cfg {String} [colorButton_colors]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_colors = '1ABC9C,2ECC71,3498DB,9B59B6,4E5F70,F1C40F,' +
\t'16A085,27AE60,2980B9,8E44AD,2C3E50,F39C12,' +
\t'E67E22,E74C3C,ECF0F1,95A5A6,DDD,FFF,' +
\t'D35400,C0392B,BDC3C7,7F8C8D,999,000';

/**
 * Stores the style definition that applies the text foreground color.
 *
 * **Note:** Advanced Content Filter (ACF) is not updated automatically by a custom style definition.
 * You may need to add additional ACF rules, so the customized style element is not removed.
 * Learn more how to configure ACF with {@glink guide/dev_advanced_content_filter Advanced Content Filter guide}.
 *
 * Read more in the {@glink features/colorbutton documentation}
 * and see the {@glink examples/colorbutton example}.
 *
 *\t\t// This is actually the default value.
 *\t\tconfig.colorButton_foreStyle = {
 *\t\t\telement: 'span',
 *\t\t\tstyles: { color: '#(color)' }
 *\t\t};
 *
 * **Since 4.15.0:** Added `colorName` property, which can be used instead of a `color`
 * property to customize foreground style. For example to add custom class:
 *
 *\t\tconfig.colorButton_foreStyle = {
 *\t\t\telement: 'span',
 *\t\t\tattributes: { 'class': '#(colorName)' }
 *\t\t};
 *
 * @cfg [colorButton_foreStyle]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_foreStyle = {
\telement: 'span',
\tstyles: { 'color': '#(color)' },
\toverrides: [ {
\t\telement: 'font', attributes: { 'color': null }
\t} ]
};

/**
 * Stores the style definition that applies the text background color.
 *
 * **Note:** Advanced Content Filter (ACF) is not updated automatically by a custom style definition.
 * You may need to add additional ACF rules, so the customized style element is not removed.
 * Learn more how to configure ACF with {@glink guide/dev_advanced_content_filter Advanced Content Filter guide}.
 *
 * Read more in the {@glink features/colorbutton documentation}
 * and see the {@glink examples/colorbutton example}.
 *
 *\t\t// This is actually the default value.
 *\t\tconfig.colorButton_backStyle = {
 *\t\t\telement: 'span',
 *\t\t\tstyles: { 'background-color': '#(color)' }
 *\t\t};
 *
 * **Since 4.15.0:** Added `colorName` property, which can be used instead of a `color`
 * property to customize background style. For example to add custom class:
 *
 *\t\tconfig.colorButton_backStyle = {
 *\t\t\telement: 'span',
 *\t\t\tattributes: { 'class': '#(colorName)' }
 *\t\t};
 *
 * @cfg [colorButton_backStyle]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_backStyle = {
\telement: 'span',
\tstyles: { 'background-color': '#(color)' }
};

/**
 * Whether to enable the **Automatic** button in the color selectors.
 *
 * Read more in the {@glink features/colorbutton documentation}
 * and see the {@glink examples/colorbutton example}.
 *
 *\t\tconfig.colorButton_enableAutomatic = false;
 *
 * @cfg {Boolean} [colorButton_enableAutomatic=true]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_enableAutomatic = true;

/**
 * Defines how many colors will be shown per row in the color selectors.
 *
 * Read more in the {@glink features/colorbutton documentation}
 * and see the {@glink examples/colorbutton example}.
 *
 *\t\tconfig.colorButton_colorsPerRow = 8;
 *
 * @since 4.6.2
 * @cfg {Number} [colorButton_colorsPerRow=6]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_colorsPerRow = 6;

/**
 * Whether the plugin should convert `background` CSS properties with color only, to a `background-color` property,
 * allowing the [Color Button](https://ckeditor.com/cke4/addon/colorbutton) plugin to edit these styles.
 *
 *\t\tconfig.colorButton_normalizeBackground = false;
 *
 * @since 4.6.1
 * @cfg {Boolean} [colorButton_normalizeBackground=true]
 * @member CKEDITOR.config
 */

/**
 * Defines how many color history rows can be created.
 *
 *\t\tconfig.colorButton_historyRowLimit = 2;
 *
 * @since 4.15.0
 * @cfg {Number} [colorButton_historyRowLimit=1]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_historyRowLimit = 1;

/**
 * Defines if color history should be initially filled by colors found in content.
 *
 *\t\tconfig.colorButton_renderContentColors = false;
 *
 * @since 4.15.0
 * @cfg {Number} [colorButton_renderContentColors=true]
 * @member CKEDITOR.config
 */
CKEDITOR.config.colorButton_renderContentColors = true;
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/plugin.js");
    }
}
