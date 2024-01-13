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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textmatch/plugin.js */
class __TwigTemplate_eefdd83ae4f49567770ecc1f79c6b6247b6417b209f18db059a21009aac57a4f extends Template
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
        echo "/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

'use strict';

( function() {

\tCKEDITOR.plugins.add( 'textmatch', {} );

\t/**
\t * A global namespace for methods exposed by the [Text Match](https://ckeditor.com/cke4/addon/textmatch) plugin.
\t *
\t * The most important function is {@link #match} which performs a text
\t * search in the DOM.
\t *
\t * @singleton
\t * @class
\t * @since 4.10.0
\t */
\tCKEDITOR.plugins.textMatch = {};

\t/**
\t * Allows to search in the DOM for matching text using a callback which operates on strings instead of text nodes.
\t * Returns {@link CKEDITOR.dom.range} and the matching text.
\t *
\t * ```javascript
\t *\tvar range = editor.getSelection().getRanges()[ 0 ];
\t *
\t *\tCKEDITOR.plugins.textMatch.match( range, function( text, offset ) {
\t *\t\t// Let's assume that text is 'Special thanks to #jo.' and offset is 21.
\t *\t\t// The offset \"21\" means that the caret is between '#jo' and '.'.
\t *
\t *\t\t// Get the text before the caret.
\t *\t\tvar left = text.slice( 0, offset ),
\t *\t\t\t// Will look for a literal '#' character and at least two word characters.
\t *\t\t\tmatch = left.match( /#\\w{2,}\$/ );
\t *
\t *\t\tif ( !match ) {
\t *\t\t\treturn null;
\t *\t\t}
\t *
\t *\t\t// The matching fragment is the '#jo', which can
\t *\t\t// be identified by the following offsets: { start: 18, end: 21 }.
\t *\t\treturn { start: match.index, end: offset };
\t *\t} );
\t * ```
\t *
\t * @member CKEDITOR.plugins.textMatch
\t * @param {CKEDITOR.dom.range} range A collapsed range &mdash; the position from which the scanning starts.
\t * Usually the caret position.
\t * @param {Function} testCallback A callback executed to check if the text matches.
\t * @param {String} testCallback.text The full text to check.
\t * @param {Number} testCallback.rangeOffset An offset of the `range` in the `text` to be checked.
\t * @param {Object} [testCallback.return] The position of the matching fragment (`null` if nothing matches).
\t * @param {Number} testCallback.return.start The offset of the start of the matching fragment.
\t * @param {Number} testCallback.return.end The offset of the end of the matching fragment.
\t *
\t * @returns {Object/null} An object with information about the matching text or `null`.
\t * @returns {String} return.text The matching text.
\t * The text does not reflect the range offsets. The range could contain additional,
\t * browser-related characters like {@link CKEDITOR.dom.selection#FILLING_CHAR_SEQUENCE}.
\t * @returns {CKEDITOR.dom.range} return.range A range in the DOM for the text that matches.
\t */
\tCKEDITOR.plugins.textMatch.match = function( range, callback ) {
\t\tvar textAndOffset = CKEDITOR.plugins.textMatch.getTextAndOffset( range ),
\t\t\tfillingCharSequence = CKEDITOR.dom.selection.FILLING_CHAR_SEQUENCE,
\t\t\tfillingSequenceOffset = 0;

\t\tif ( !textAndOffset ) {
\t\t\treturn;
\t\t}

\t\t// Remove filling char sequence for clean query (#2038).
\t\tif ( textAndOffset.text.indexOf( fillingCharSequence ) == 0 ) {
\t\t\tfillingSequenceOffset = fillingCharSequence.length;

\t\t\ttextAndOffset.text = textAndOffset.text.replace( fillingCharSequence, '' );
\t\t\ttextAndOffset.offset -= fillingSequenceOffset;
\t\t}

\t\tvar result = callback( textAndOffset.text, textAndOffset.offset );

\t\tif ( !result ) {
\t\t\treturn null;
\t\t}

\t\treturn {
\t\t\trange: CKEDITOR.plugins.textMatch.getRangeInText( range, result.start, result.end + fillingSequenceOffset ),
\t\t\ttext: textAndOffset.text.slice( result.start, result.end )
\t\t};
\t};

\t/**
\t * Returns a text (as a string) in which the DOM range is located (the function scans for adjacent text nodes)
\t * and the offset of the caret in that text.
\t *
\t * ## Examples
\t *
\t * * `{}` is the range position in the text node (it means that the text node is **not** split at that position).
\t * * `[]` is the range position in the element (it means that the text node is split at that position).
\t * * `.` is a separator for text nodes (it means that the text node is split at that position).
\t *
\t * Examples:
\t *
\t * ```
\t *\tInput: <p>he[]llo</p>
\t *\tResult: { text: 'hello', offset: 2 }
\t *
\t *\tInput: <p>he.llo{}</p>
\t *\tResult: { text: 'hello', offset: 5 }
\t *
\t *\tInput: <p>{}he.ll<i>o</i></p>
\t *\tResult: { text: 'hell', offset: 0 }
\t *
\t *\tInput: <p>he{}<i>ll</i>o</p>
\t *\tResult: { text: 'he', offset: 2 }
\t *
\t *\tInput: <p>he<i>ll</i>o.m{}y.friend</p>
\t *\tResult: { text: 'omyfriend', offset: 2 }
\t * ```
\t *
\t * @member CKEDITOR.plugins.textMatch
\t * @param {CKEDITOR.dom.range} range
\t * @returns {Object/null}
\t * @returns {String} return.text The text in which the DOM range is located.
\t * @returns {Number} return.offset An offset of the caret.
\t */
\tCKEDITOR.plugins.textMatch.getTextAndOffset = function( range ) {
\t\tif ( !range.collapsed ) {
\t\t\treturn null;
\t\t}

\t\tvar text = '', offset = 0,
\t\t\ttextNodes = CKEDITOR.plugins.textMatch.getAdjacentTextNodes( range ),
\t\t\tnodeReached = false,
\t\t\telementIndex,
\t\t\tstartContainerIsText = ( range.startContainer.type != CKEDITOR.NODE_ELEMENT );

\t\tif ( startContainerIsText ) {
\t\t\t// Determining element index in textNodes array.
\t\t\telementIndex = indexOf( textNodes, function( current ) {
\t\t\t\treturn range.startContainer.equals( current );
\t\t\t} );
\t\t} else {
\t\t\t// Based on range startOffset decreased by first text node index.
\t\t\telementIndex = range.startOffset - ( textNodes[ 0 ] ? textNodes[ 0 ].getIndex() : 0 );
\t\t}

\t\tvar max = textNodes.length;
\t\tfor ( var i = 0; i < max; i += 1 ) {
\t\t\tvar currentNode = textNodes[ i ];
\t\t\ttext += currentNode.getText();

\t\t\t// We want to increase text offset only when startContainer is not reached.
\t\t\tif ( !nodeReached ) {
\t\t\t\tif ( startContainerIsText ) {
\t\t\t\t\tif ( i == elementIndex ) {
\t\t\t\t\t\tnodeReached = true;
\t\t\t\t\t\toffset += range.startOffset;
\t\t\t\t\t} else {
\t\t\t\t\t\toffset += currentNode.getText().length;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tif ( i == elementIndex ) {
\t\t\t\t\t\tnodeReached = true;
\t\t\t\t\t}

\t\t\t\t\t// In below example there are three text nodes in p element and four possible offsets ( 0, 1, 2, 3 )
\t\t\t\t\t// We are going to increase offset while iteration:
\t\t\t\t\t// index 0 ==> 0
\t\t\t\t\t// index 1 ==> 3
\t\t\t\t\t// index 2 ==> 3 + 3
\t\t\t\t\t// index 3 ==> 3 + 3 + 2

\t\t\t\t\t// <p> foo bar ba </p>
\t\t\t\t\t//    0^^^1^^^2^^3
\t\t\t\t\tif ( i > 0 ) {
\t\t\t\t\t\toffset += textNodes[ i - 1 ].getText().length;
\t\t\t\t\t}

\t\t\t\t\t// If element index at last element we also want to increase offset.
\t\t\t\t\tif ( max == elementIndex && i + 1 == max ) {
\t\t\t\t\t\toffset += currentNode.getText().length;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn {
\t\t\ttext: text,
\t\t\toffset: offset
\t\t};
\t};

\t/**
\t * Transforms the `start` and `end` offsets in the text generated by the {@link #getTextAndOffset}
\t * method into a DOM range.
\t *
\t * ## Examples
\t *
\t * * `{}` is the range position in the text node (it means that the text node is **not** split at that position).
\t * * `.` is a separator for text nodes (it means that the text node is split at that position).
\t *
\t * Examples:
\t *
\t * ```
\t *\tInput: <p>f{}oo.bar</p>, 0, 3
\t *\tResult: <p>{foo}.bar</p>
\t *
\t *\tInput: <p>f{}oo.bar</p>, 1, 5
\t *\tResult: <p>f{oo.ba}r</p>
\t * ```
\t *
\t * @member CKEDITOR.plugins.textMatch
\t * @param {CKEDITOR.dom.range} range
\t * @param {Number} start A start offset.
\t * @param {Number} end An end offset.
\t * @returns {CKEDITOR.dom.range} Transformed range.
\t */
\tCKEDITOR.plugins.textMatch.getRangeInText = function( range, start, end ) {
\t\tvar resultRange = new CKEDITOR.dom.range( range.root ),
\t\t\telements = CKEDITOR.plugins.textMatch.getAdjacentTextNodes( range ),
\t\t\tstartData = findElementAtOffset( elements, start ),
\t\t\tendData = findElementAtOffset( elements, end );

\t\tresultRange.setStart( startData.element, startData.offset );
\t\tresultRange.setEnd( endData.element, endData.offset );

\t\treturn resultRange;
\t};

\t/**
\t * Creates a collection of adjacent text nodes which are between DOM elements, starting from the given range.
\t * This function works only for collapsed ranges.
\t *
\t * ## Examples
\t *
\t * * `{}` is the range position in the text node (it means that the text node is **not** split at that position).
\t * * `.` is a separator for text nodes (it means that the text node is split at that position).
\t *
\t * Examples:
\t *
\t * ```
\t *\tInput: <p>he.llo{}</p>
\t *\tResult: [ 'he', 'llo' ]
\t *
\t *\tInput: <p>{}he.ll<i>o</i></p>
\t *\tResult:  [ 'he', 'll' ]
\t *
\t *\tInput: <p>he{}<i>ll</i>o.</p>
\t *\tResult:  [ 'he' ]
\t *
\t *\tInput: <p>he<i>ll</i>{}o.my.friend</p>
\t *\tResult: [ 'o', 'my', 'friend' ]
\t * ```
\t *
\t * @member CKEDITOR.plugins.textMatch
\t * @param {CKEDITOR.dom.range} range
\t * @return {CKEDITOR.dom.text[]} An array of text nodes.
\t */
\tCKEDITOR.plugins.textMatch.getAdjacentTextNodes = function( range ) {
\t\tif ( !range.collapsed ) {
\t\t\tthrow new Error( 'Range must be collapsed.' ); // %REMOVE_LINE%
\t\t\t// Reachable in prod mode.
\t\t\treturn []; // jshint ignore:line
\t\t}

\t\tvar collection = [],
\t\t\tsiblings,
\t\t\telementIndex,
\t\t\tnode, i;

\t\tif ( range.startContainer.type != CKEDITOR.NODE_ELEMENT ) {
\t\t\tsiblings = range.startContainer.getParent().getChildren();
\t\t\telementIndex = range.startContainer.getIndex();
\t\t} else {
\t\t\tsiblings = range.startContainer.getChildren();
\t\t\telementIndex = range.startOffset;
\t\t}

\t\ti = elementIndex;
\t\twhile ( node = siblings.getItem( --i ) ) {
\t\t\tif ( node.type == CKEDITOR.NODE_TEXT ) {
\t\t\t\tcollection.unshift( node );
\t\t\t} else {
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\ti = elementIndex;
\t\twhile ( node = siblings.getItem( i++ ) ) {
\t\t\tif ( node.type == CKEDITOR.NODE_TEXT ) {
\t\t\t\tcollection.push( node );
\t\t\t} else {
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\treturn collection;
\t};

\tfunction findElementAtOffset( elements, offset ) {
\t\tvar max = elements.length,
\t\t\tcurrentOffset = 0;
\t\tfor ( var i = 0; i < max; i += 1 ) {
\t\t\tvar current = elements[ i ];
\t\t\tif ( offset >= currentOffset && currentOffset + current.getText().length >= offset ) {
\t\t\t\treturn {
\t\t\t\t\telement: current,
\t\t\t\t\toffset: offset - currentOffset
\t\t\t\t};
\t\t\t}

\t\t\tcurrentOffset += current.getText().length;
\t\t}

\t\treturn null;
\t}

\tfunction indexOf( arr, checker ) {
\t\tfor ( var i = 0; i < arr.length; i++ ) {
\t\t\tif ( checker( arr[ i ] ) ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}

\t\treturn -1;
\t}
} )();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textmatch/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textmatch/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textmatch/plugin.js");
    }
}
