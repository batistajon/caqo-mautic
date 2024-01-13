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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/plugin.js */
class __TwigTemplate_96a5db08ed01277f5b82d26fa1df1eb5bb61646adadd4136da4b7c6c50674e81 extends Template
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
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.plugins.add( 'sourcedialog', {
\t// jscs:disable maximumLineLength
\tlang: 'af,ar,bg,bn,bs,ca,cs,cy,da,de,el,en,en-au,en-ca,en-gb,eo,es,et,eu,fa,fi,fo,fr,fr-ca,gl,gu,he,hi,hr,hu,id,is,it,ja,ka,km,ko,ku,lt,lv,mn,ms,nb,nl,no,pl,pt,pt-br,ro,ru,si,sk,sl,sq,sr,sr-latn,sv,th,tr,tt,ug,uk,vi,zh,zh-cn', // %REMOVE_LINE_CORE%
\t// jscs:enable maximumLineLength
\ticons: 'sourcedialog,sourcedialog-rtl', // %REMOVE_LINE_CORE%
\thidpi: true, // %REMOVE_LINE_CORE%

\tinit: function( editor ) {
\t\t// Register the \"source\" command, which simply opens the \"source\" dialog.
\t\teditor.addCommand( 'sourcedialog', new CKEDITOR.dialogCommand( 'sourcedialog' ) );

\t\t// Register the \"source\" dialog.
\t\tCKEDITOR.dialog.add( 'sourcedialog', this.path + 'dialogs/sourcedialog.js' );

\t\t// If the toolbar is available, create the \"Source\" button.
\t\tif ( editor.ui.addButton ) {
\t\t\teditor.ui.addButton( 'Sourcedialog', {
\t\t\t\tlabel: editor.lang.sourcedialog.toolbar,
\t\t\t\tcommand: 'sourcedialog',
\t\t\t\ttoolbar: 'mode,10'
\t\t\t} );
\t\t}
\t}
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/plugin.js");
    }
}
