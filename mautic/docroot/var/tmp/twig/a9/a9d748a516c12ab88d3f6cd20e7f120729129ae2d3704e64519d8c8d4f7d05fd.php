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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/position.js */
class __TwigTemplate_048a93a5674524245d45a9a5207a5c62f1659e9068be6a0aea925ff6dd5d3923 extends Template
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
 * jQuery UI Position 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/position/
 */

//>>label: Position
//>>group: Core
//>>description: Positions elements relative to other elements.
//>>docs: http://api.jqueryui.com/position/
//>>demos: http://jqueryui.com/position/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {
( function() {
var cachedScrollbarWidth,
\tmax = Math.max,
\tabs = Math.abs,
\trhorizontal = /left|center|right/,
\trvertical = /top|center|bottom/,
\troffset = /[\\+\\-]\\d+(\\.[\\d]+)?%?/,
\trposition = /^\\w+/,
\trpercent = /%\$/,
\t_position = \$.fn.position;

function getOffsets( offsets, width, height ) {
\treturn [
\t\tparseFloat( offsets[ 0 ] ) * ( rpercent.test( offsets[ 0 ] ) ? width / 100 : 1 ),
\t\tparseFloat( offsets[ 1 ] ) * ( rpercent.test( offsets[ 1 ] ) ? height / 100 : 1 )
\t];
}

function parseCss( element, property ) {
\treturn parseInt( \$.css( element, property ), 10 ) || 0;
}

function getDimensions( elem ) {
\tvar raw = elem[ 0 ];
\tif ( raw.nodeType === 9 ) {
\t\treturn {
\t\t\twidth: elem.width(),
\t\t\theight: elem.height(),
\t\t\toffset: { top: 0, left: 0 }
\t\t};
\t}
\tif ( \$.isWindow( raw ) ) {
\t\treturn {
\t\t\twidth: elem.width(),
\t\t\theight: elem.height(),
\t\t\toffset: { top: elem.scrollTop(), left: elem.scrollLeft() }
\t\t};
\t}
\tif ( raw.preventDefault ) {
\t\treturn {
\t\t\twidth: 0,
\t\t\theight: 0,
\t\t\toffset: { top: raw.pageY, left: raw.pageX }
\t\t};
\t}
\treturn {
\t\twidth: elem.outerWidth(),
\t\theight: elem.outerHeight(),
\t\toffset: elem.offset()
\t};
}

\$.position = {
\tscrollbarWidth: function() {
\t\tif ( cachedScrollbarWidth !== undefined ) {
\t\t\treturn cachedScrollbarWidth;
\t\t}
\t\tvar w1, w2,
\t\t\tdiv = \$( \"<div \" +
\t\t\t\t\"style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'>\" +
\t\t\t\t\"<div style='height:100px;width:auto;'></div></div>\" ),
\t\t\tinnerDiv = div.children()[ 0 ];

\t\t\$( \"body\" ).append( div );
\t\tw1 = innerDiv.offsetWidth;
\t\tdiv.css( \"overflow\", \"scroll\" );

\t\tw2 = innerDiv.offsetWidth;

\t\tif ( w1 === w2 ) {
\t\t\tw2 = div[ 0 ].clientWidth;
\t\t}

\t\tdiv.remove();

\t\treturn ( cachedScrollbarWidth = w1 - w2 );
\t},
\tgetScrollInfo: function( within ) {
\t\tvar overflowX = within.isWindow || within.isDocument ? \"\" :
\t\t\t\twithin.element.css( \"overflow-x\" ),
\t\t\toverflowY = within.isWindow || within.isDocument ? \"\" :
\t\t\t\twithin.element.css( \"overflow-y\" ),
\t\t\thasOverflowX = overflowX === \"scroll\" ||
\t\t\t\t( overflowX === \"auto\" && within.width < within.element[ 0 ].scrollWidth ),
\t\t\thasOverflowY = overflowY === \"scroll\" ||
\t\t\t\t( overflowY === \"auto\" && within.height < within.element[ 0 ].scrollHeight );
\t\treturn {
\t\t\twidth: hasOverflowY ? \$.position.scrollbarWidth() : 0,
\t\t\theight: hasOverflowX ? \$.position.scrollbarWidth() : 0
\t\t};
\t},
\tgetWithinInfo: function( element ) {
\t\tvar withinElement = \$( element || window ),
\t\t\tisWindow = \$.isWindow( withinElement[ 0 ] ),
\t\t\tisDocument = !!withinElement[ 0 ] && withinElement[ 0 ].nodeType === 9,
\t\t\thasOffset = !isWindow && !isDocument;
\t\treturn {
\t\t\telement: withinElement,
\t\t\tisWindow: isWindow,
\t\t\tisDocument: isDocument,
\t\t\toffset: hasOffset ? \$( element ).offset() : { left: 0, top: 0 },
\t\t\tscrollLeft: withinElement.scrollLeft(),
\t\t\tscrollTop: withinElement.scrollTop(),
\t\t\twidth: withinElement.outerWidth(),
\t\t\theight: withinElement.outerHeight()
\t\t};
\t}
};

\$.fn.position = function( options ) {
\tif ( !options || !options.of ) {
\t\treturn _position.apply( this, arguments );
\t}

\t// Make a copy, we don't want to modify arguments
\toptions = \$.extend( {}, options );

\tvar atOffset, targetWidth, targetHeight, targetOffset, basePosition, dimensions,
\t\ttarget = \$( options.of ),
\t\twithin = \$.position.getWithinInfo( options.within ),
\t\tscrollInfo = \$.position.getScrollInfo( within ),
\t\tcollision = ( options.collision || \"flip\" ).split( \" \" ),
\t\toffsets = {};

\tdimensions = getDimensions( target );
\tif ( target[ 0 ].preventDefault ) {

\t\t// Force left top to allow flipping
\t\toptions.at = \"left top\";
\t}
\ttargetWidth = dimensions.width;
\ttargetHeight = dimensions.height;
\ttargetOffset = dimensions.offset;

\t// Clone to reuse original targetOffset later
\tbasePosition = \$.extend( {}, targetOffset );

\t// Force my and at to have valid horizontal and vertical positions
\t// if a value is missing or invalid, it will be converted to center
\t\$.each( [ \"my\", \"at\" ], function() {
\t\tvar pos = ( options[ this ] || \"\" ).split( \" \" ),
\t\t\thorizontalOffset,
\t\t\tverticalOffset;

\t\tif ( pos.length === 1 ) {
\t\t\tpos = rhorizontal.test( pos[ 0 ] ) ?
\t\t\t\tpos.concat( [ \"center\" ] ) :
\t\t\t\trvertical.test( pos[ 0 ] ) ?
\t\t\t\t\t[ \"center\" ].concat( pos ) :
\t\t\t\t\t[ \"center\", \"center\" ];
\t\t}
\t\tpos[ 0 ] = rhorizontal.test( pos[ 0 ] ) ? pos[ 0 ] : \"center\";
\t\tpos[ 1 ] = rvertical.test( pos[ 1 ] ) ? pos[ 1 ] : \"center\";

\t\t// Calculate offsets
\t\thorizontalOffset = roffset.exec( pos[ 0 ] );
\t\tverticalOffset = roffset.exec( pos[ 1 ] );
\t\toffsets[ this ] = [
\t\t\thorizontalOffset ? horizontalOffset[ 0 ] : 0,
\t\t\tverticalOffset ? verticalOffset[ 0 ] : 0
\t\t];

\t\t// Reduce to just the positions without the offsets
\t\toptions[ this ] = [
\t\t\trposition.exec( pos[ 0 ] )[ 0 ],
\t\t\trposition.exec( pos[ 1 ] )[ 0 ]
\t\t];
\t} );

\t// Normalize collision option
\tif ( collision.length === 1 ) {
\t\tcollision[ 1 ] = collision[ 0 ];
\t}

\tif ( options.at[ 0 ] === \"right\" ) {
\t\tbasePosition.left += targetWidth;
\t} else if ( options.at[ 0 ] === \"center\" ) {
\t\tbasePosition.left += targetWidth / 2;
\t}

\tif ( options.at[ 1 ] === \"bottom\" ) {
\t\tbasePosition.top += targetHeight;
\t} else if ( options.at[ 1 ] === \"center\" ) {
\t\tbasePosition.top += targetHeight / 2;
\t}

\tatOffset = getOffsets( offsets.at, targetWidth, targetHeight );
\tbasePosition.left += atOffset[ 0 ];
\tbasePosition.top += atOffset[ 1 ];

\treturn this.each( function() {
\t\tvar collisionPosition, using,
\t\t\telem = \$( this ),
\t\t\telemWidth = elem.outerWidth(),
\t\t\telemHeight = elem.outerHeight(),
\t\t\tmarginLeft = parseCss( this, \"marginLeft\" ),
\t\t\tmarginTop = parseCss( this, \"marginTop\" ),
\t\t\tcollisionWidth = elemWidth + marginLeft + parseCss( this, \"marginRight\" ) +
\t\t\t\tscrollInfo.width,
\t\t\tcollisionHeight = elemHeight + marginTop + parseCss( this, \"marginBottom\" ) +
\t\t\t\tscrollInfo.height,
\t\t\tposition = \$.extend( {}, basePosition ),
\t\t\tmyOffset = getOffsets( offsets.my, elem.outerWidth(), elem.outerHeight() );

\t\tif ( options.my[ 0 ] === \"right\" ) {
\t\t\tposition.left -= elemWidth;
\t\t} else if ( options.my[ 0 ] === \"center\" ) {
\t\t\tposition.left -= elemWidth / 2;
\t\t}

\t\tif ( options.my[ 1 ] === \"bottom\" ) {
\t\t\tposition.top -= elemHeight;
\t\t} else if ( options.my[ 1 ] === \"center\" ) {
\t\t\tposition.top -= elemHeight / 2;
\t\t}

\t\tposition.left += myOffset[ 0 ];
\t\tposition.top += myOffset[ 1 ];

\t\tcollisionPosition = {
\t\t\tmarginLeft: marginLeft,
\t\t\tmarginTop: marginTop
\t\t};

\t\t\$.each( [ \"left\", \"top\" ], function( i, dir ) {
\t\t\tif ( \$.ui.position[ collision[ i ] ] ) {
\t\t\t\t\$.ui.position[ collision[ i ] ][ dir ]( position, {
\t\t\t\t\ttargetWidth: targetWidth,
\t\t\t\t\ttargetHeight: targetHeight,
\t\t\t\t\telemWidth: elemWidth,
\t\t\t\t\telemHeight: elemHeight,
\t\t\t\t\tcollisionPosition: collisionPosition,
\t\t\t\t\tcollisionWidth: collisionWidth,
\t\t\t\t\tcollisionHeight: collisionHeight,
\t\t\t\t\toffset: [ atOffset[ 0 ] + myOffset[ 0 ], atOffset [ 1 ] + myOffset[ 1 ] ],
\t\t\t\t\tmy: options.my,
\t\t\t\t\tat: options.at,
\t\t\t\t\twithin: within,
\t\t\t\t\telem: elem
\t\t\t\t} );
\t\t\t}
\t\t} );

\t\tif ( options.using ) {

\t\t\t// Adds feedback as second argument to using callback, if present
\t\t\tusing = function( props ) {
\t\t\t\tvar left = targetOffset.left - position.left,
\t\t\t\t\tright = left + targetWidth - elemWidth,
\t\t\t\t\ttop = targetOffset.top - position.top,
\t\t\t\t\tbottom = top + targetHeight - elemHeight,
\t\t\t\t\tfeedback = {
\t\t\t\t\t\ttarget: {
\t\t\t\t\t\t\telement: target,
\t\t\t\t\t\t\tleft: targetOffset.left,
\t\t\t\t\t\t\ttop: targetOffset.top,
\t\t\t\t\t\t\twidth: targetWidth,
\t\t\t\t\t\t\theight: targetHeight
\t\t\t\t\t\t},
\t\t\t\t\t\telement: {
\t\t\t\t\t\t\telement: elem,
\t\t\t\t\t\t\tleft: position.left,
\t\t\t\t\t\t\ttop: position.top,
\t\t\t\t\t\t\twidth: elemWidth,
\t\t\t\t\t\t\theight: elemHeight
\t\t\t\t\t\t},
\t\t\t\t\t\thorizontal: right < 0 ? \"left\" : left > 0 ? \"right\" : \"center\",
\t\t\t\t\t\tvertical: bottom < 0 ? \"top\" : top > 0 ? \"bottom\" : \"middle\"
\t\t\t\t\t};
\t\t\t\tif ( targetWidth < elemWidth && abs( left + right ) < targetWidth ) {
\t\t\t\t\tfeedback.horizontal = \"center\";
\t\t\t\t}
\t\t\t\tif ( targetHeight < elemHeight && abs( top + bottom ) < targetHeight ) {
\t\t\t\t\tfeedback.vertical = \"middle\";
\t\t\t\t}
\t\t\t\tif ( max( abs( left ), abs( right ) ) > max( abs( top ), abs( bottom ) ) ) {
\t\t\t\t\tfeedback.important = \"horizontal\";
\t\t\t\t} else {
\t\t\t\t\tfeedback.important = \"vertical\";
\t\t\t\t}
\t\t\t\toptions.using.call( this, props, feedback );
\t\t\t};
\t\t}

\t\telem.offset( \$.extend( position, { using: using } ) );
\t} );
};

\$.ui.position = {
\tfit: {
\t\tleft: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.isWindow ? within.scrollLeft : within.offset.left,
\t\t\t\touterWidth = within.width,
\t\t\t\tcollisionPosLeft = position.left - data.collisionPosition.marginLeft,
\t\t\t\toverLeft = withinOffset - collisionPosLeft,
\t\t\t\toverRight = collisionPosLeft + data.collisionWidth - outerWidth - withinOffset,
\t\t\t\tnewOverRight;

\t\t\t// Element is wider than within
\t\t\tif ( data.collisionWidth > outerWidth ) {

\t\t\t\t// Element is initially over the left side of within
\t\t\t\tif ( overLeft > 0 && overRight <= 0 ) {
\t\t\t\t\tnewOverRight = position.left + overLeft + data.collisionWidth - outerWidth -
\t\t\t\t\t\twithinOffset;
\t\t\t\t\tposition.left += overLeft - newOverRight;

\t\t\t\t// Element is initially over right side of within
\t\t\t\t} else if ( overRight > 0 && overLeft <= 0 ) {
\t\t\t\t\tposition.left = withinOffset;

\t\t\t\t// Element is initially over both left and right sides of within
\t\t\t\t} else {
\t\t\t\t\tif ( overLeft > overRight ) {
\t\t\t\t\t\tposition.left = withinOffset + outerWidth - data.collisionWidth;
\t\t\t\t\t} else {
\t\t\t\t\t\tposition.left = withinOffset;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Too far left -> align with left edge
\t\t\t} else if ( overLeft > 0 ) {
\t\t\t\tposition.left += overLeft;

\t\t\t// Too far right -> align with right edge
\t\t\t} else if ( overRight > 0 ) {
\t\t\t\tposition.left -= overRight;

\t\t\t// Adjust based on position and margin
\t\t\t} else {
\t\t\t\tposition.left = max( position.left - collisionPosLeft, position.left );
\t\t\t}
\t\t},
\t\ttop: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.isWindow ? within.scrollTop : within.offset.top,
\t\t\t\touterHeight = data.within.height,
\t\t\t\tcollisionPosTop = position.top - data.collisionPosition.marginTop,
\t\t\t\toverTop = withinOffset - collisionPosTop,
\t\t\t\toverBottom = collisionPosTop + data.collisionHeight - outerHeight - withinOffset,
\t\t\t\tnewOverBottom;

\t\t\t// Element is taller than within
\t\t\tif ( data.collisionHeight > outerHeight ) {

\t\t\t\t// Element is initially over the top of within
\t\t\t\tif ( overTop > 0 && overBottom <= 0 ) {
\t\t\t\t\tnewOverBottom = position.top + overTop + data.collisionHeight - outerHeight -
\t\t\t\t\t\twithinOffset;
\t\t\t\t\tposition.top += overTop - newOverBottom;

\t\t\t\t// Element is initially over bottom of within
\t\t\t\t} else if ( overBottom > 0 && overTop <= 0 ) {
\t\t\t\t\tposition.top = withinOffset;

\t\t\t\t// Element is initially over both top and bottom of within
\t\t\t\t} else {
\t\t\t\t\tif ( overTop > overBottom ) {
\t\t\t\t\t\tposition.top = withinOffset + outerHeight - data.collisionHeight;
\t\t\t\t\t} else {
\t\t\t\t\t\tposition.top = withinOffset;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Too far up -> align with top
\t\t\t} else if ( overTop > 0 ) {
\t\t\t\tposition.top += overTop;

\t\t\t// Too far down -> align with bottom edge
\t\t\t} else if ( overBottom > 0 ) {
\t\t\t\tposition.top -= overBottom;

\t\t\t// Adjust based on position and margin
\t\t\t} else {
\t\t\t\tposition.top = max( position.top - collisionPosTop, position.top );
\t\t\t}
\t\t}
\t},
\tflip: {
\t\tleft: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.offset.left + within.scrollLeft,
\t\t\t\touterWidth = within.width,
\t\t\t\toffsetLeft = within.isWindow ? within.scrollLeft : within.offset.left,
\t\t\t\tcollisionPosLeft = position.left - data.collisionPosition.marginLeft,
\t\t\t\toverLeft = collisionPosLeft - offsetLeft,
\t\t\t\toverRight = collisionPosLeft + data.collisionWidth - outerWidth - offsetLeft,
\t\t\t\tmyOffset = data.my[ 0 ] === \"left\" ?
\t\t\t\t\t-data.elemWidth :
\t\t\t\t\tdata.my[ 0 ] === \"right\" ?
\t\t\t\t\t\tdata.elemWidth :
\t\t\t\t\t\t0,
\t\t\t\tatOffset = data.at[ 0 ] === \"left\" ?
\t\t\t\t\tdata.targetWidth :
\t\t\t\t\tdata.at[ 0 ] === \"right\" ?
\t\t\t\t\t\t-data.targetWidth :
\t\t\t\t\t\t0,
\t\t\t\toffset = -2 * data.offset[ 0 ],
\t\t\t\tnewOverRight,
\t\t\t\tnewOverLeft;

\t\t\tif ( overLeft < 0 ) {
\t\t\t\tnewOverRight = position.left + myOffset + atOffset + offset + data.collisionWidth -
\t\t\t\t\touterWidth - withinOffset;
\t\t\t\tif ( newOverRight < 0 || newOverRight < abs( overLeft ) ) {
\t\t\t\t\tposition.left += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t} else if ( overRight > 0 ) {
\t\t\t\tnewOverLeft = position.left - data.collisionPosition.marginLeft + myOffset +
\t\t\t\t\tatOffset + offset - offsetLeft;
\t\t\t\tif ( newOverLeft > 0 || abs( newOverLeft ) < overRight ) {
\t\t\t\t\tposition.left += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t}
\t\t},
\t\ttop: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.offset.top + within.scrollTop,
\t\t\t\touterHeight = within.height,
\t\t\t\toffsetTop = within.isWindow ? within.scrollTop : within.offset.top,
\t\t\t\tcollisionPosTop = position.top - data.collisionPosition.marginTop,
\t\t\t\toverTop = collisionPosTop - offsetTop,
\t\t\t\toverBottom = collisionPosTop + data.collisionHeight - outerHeight - offsetTop,
\t\t\t\ttop = data.my[ 1 ] === \"top\",
\t\t\t\tmyOffset = top ?
\t\t\t\t\t-data.elemHeight :
\t\t\t\t\tdata.my[ 1 ] === \"bottom\" ?
\t\t\t\t\t\tdata.elemHeight :
\t\t\t\t\t\t0,
\t\t\t\tatOffset = data.at[ 1 ] === \"top\" ?
\t\t\t\t\tdata.targetHeight :
\t\t\t\t\tdata.at[ 1 ] === \"bottom\" ?
\t\t\t\t\t\t-data.targetHeight :
\t\t\t\t\t\t0,
\t\t\t\toffset = -2 * data.offset[ 1 ],
\t\t\t\tnewOverTop,
\t\t\t\tnewOverBottom;
\t\t\tif ( overTop < 0 ) {
\t\t\t\tnewOverBottom = position.top + myOffset + atOffset + offset + data.collisionHeight -
\t\t\t\t\touterHeight - withinOffset;
\t\t\t\tif ( newOverBottom < 0 || newOverBottom < abs( overTop ) ) {
\t\t\t\t\tposition.top += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t} else if ( overBottom > 0 ) {
\t\t\t\tnewOverTop = position.top - data.collisionPosition.marginTop + myOffset + atOffset +
\t\t\t\t\toffset - offsetTop;
\t\t\t\tif ( newOverTop > 0 || abs( newOverTop ) < overBottom ) {
\t\t\t\t\tposition.top += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t}
\t\t}
\t},
\tflipfit: {
\t\tleft: function() {
\t\t\t\$.ui.position.flip.left.apply( this, arguments );
\t\t\t\$.ui.position.fit.left.apply( this, arguments );
\t\t},
\t\ttop: function() {
\t\t\t\$.ui.position.flip.top.apply( this, arguments );
\t\t\t\$.ui.position.fit.top.apply( this, arguments );
\t\t}
\t}
};

} )();

return \$.ui.position;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/position.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/position.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/position.js");
    }
}
