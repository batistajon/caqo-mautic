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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/lang/nb.js */
class __TwigTemplate_ecf7e6f46bf80c027759f0d502a54a55d4957158ecada8c3add2f9f0e78c2031 extends Template
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
        echo "﻿/*
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
*/

CKEDITOR.plugins.setLang( 'sourcedialog', 'nb', {
\ttoolbar: 'Kilde',
\ttitle: 'Kilde'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/lang/nb.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/lang/nb.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/lang/nb.js");
    }
}