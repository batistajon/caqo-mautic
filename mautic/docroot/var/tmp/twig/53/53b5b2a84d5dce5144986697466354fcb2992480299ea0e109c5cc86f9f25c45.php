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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/dynamic_content.js */
class __TwigTemplate_6b96e172ece9e9b30931d8b1207df85d96d17b93a7b5f1a627861b18860b2857 extends Template
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
 * froala_editor v2.3.4 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2016 Froala Labs
 */

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = function( root, jQuery ) {
            if ( jQuery === undefined ) {
                // require('jQuery') returns a factory that requires window to
                // build a jQuery instance, we normalize how we use modules
                // that require this pattern but the window provided is a noop
                // if it's defined (how jquery works)
                if ( typeof window !== 'undefined' ) {
                    jQuery = require('jquery');
                }
                else {
                    jQuery = require('jquery')(root);
                }
            }
            factory(jQuery);
            return jQuery;
        };
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function (\$) {

  'use strict';

  \$.FE.PLUGINS.dynamicContent = function (editor) {

    /**
     * Check if fullscreen mode is active.
     */
    function isActive () {
      return true;
    }

    /**
     * Exec fullscreen.
     */
    function toggle (val) {
        editor.events.focus(true);
        editor.selection.restore();

        editor.html.insert('{dynamiccontent=\"' + val + '\"}');
    }

    function _init () {
        Mautic.updateDynamicContentDropdown();
    }

    return {
      _init: _init,
      toggle: toggle,
      isActive: isActive
    }
  };

  // Register the font size command.
  \$.FE.RegisterCommand('dynamicContent', {
    title: 'Dynamic Content',
    forcedRefresh: true,
    type: 'dropdown',
    callback: function (cmd, val) {
      this.dynamicContent.toggle(val);
    },
    plugin: 'dynamicContent'
  });

  // Add the font size icon.
  \$.FE.DefineIcon('dynamicContent', {
    NAME: 'book'
  });

}));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/dynamic_content.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/dynamic_content.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/dynamic_content.js");
    }
}
