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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/token.js */
class __TwigTemplate_b1959c3ccc1fafbc829ac79ad68236d2e4e71cfa0894b4b775b2b77025d4e612 extends Template
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
 * froala_editor v2.3.3 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2016 Mautic team
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

    \$.extend(\$.FE.DEFAULTS, {
        tokenSelection: false,
        tokenDefaultSelection: 'Token'
    });

    \$.FE.PLUGINS.token = function (editor) {

        function apply (val) {
            editor.html.insert(val);
        }

        function _init() {
            var method = location.href.match(/(email|dwc)/i)? 'email:getBuilderTokens' : 'page:getBuilderTokens';
            Mautic.getTokens(method, function(tokens) {
                mQuery.each(tokens, function(k,v){
                    if (k.match(/assetlink=/i) && v.match(/a:/)){
                        delete tokens[k];
                        var nv = v.replace('a:', '');
                        k = '<a title=\"Asset Link\" href=\"' + k + '\">' + nv + '</a>';
                        tokens[k] = nv;
                    } else if (k.match(/pagelink=/i) && v.match(/a:/)){
                        delete tokens[k];
                        nv = v.replace('a:', '');
                        k = '<a title=\"Page Link\" href=\"' + k + '\">' + nv + '</a>';
                        tokens[k] = nv;
                    } else if (k.match(/dwc=/i)){
                        var tn = k.substr(5, k.length - 6);
                        tokens[k] = v + ' (' + tn + ')';
                    } else if (k.match(/contactfield=company/i) && !v.match(/company/i)){
                        tokens[k] = 'Company ' + v;
                    }
                });
                var k, keys = [];
                for (k in tokens) {
                    if (tokens.hasOwnProperty(k)) {
                        keys.push(k);
                    }
                }
                keys.sort();
                var options = [];
                for (var i = 0; i < keys.length; i++) {
                    var val = keys[i];
                    var str = ' <div class=\\'badge-wrapper\\'><span class=\\'badge\\'>_BADGE_</span></div>';
                    var badge = (val.match(/page link/i))?
                        str.replace(/_BADGE_/, 'page') :
                            (val.match(/asset link/i))?
                                str.replace(/_BADGE_/, 'asset') :
                                    (val.match(/form=/i))?
                                        str.replace(/_BADGE_/,'form') :
                                            (val.match(/focus=/i))?
                                                str.replace(/_BADGE_/,'focus') :
                                                    (val.match(/dynamiccontent=/i))?
                                                        str.replace(/_BADGE_/,'dynamic') :
                                                            (val.match(/dwc=/i))?
                                                                str.replace(/_BADGE_/,'dwc') : '';
                    var title = tokens[val];
                    if (title.length>24) title = title.substr(0, 24) + '...';
                    var normalizedValue = val.replace(new RegExp('\"', 'g'), \"'\");
                    var newOption = '<li role=\"presentation\"><a class=\"fr-command\" tabIndex=\"-1\" role=\"option\"' +
                        ' data-cmd=\"token\" data-param1=\"' + normalizedValue + '\" title=\"' + title + '\">' + title + badge + '</a></li>';
                    options.push(newOption);
                }

                mQuery('button[data-cmd=\"token\"]').next().find('ul').html(options.join(''));
            });
        }

        return  {
            _init: _init,
            apply: apply
        }
    };

    // Register the token command.
    \$.FE.RegisterCommand('token', {
        type: 'dropdown',
        forcedRefresh: true,
        displaySelection: function (editor) {
            return editor.opts.tokenSelection;
        },
        defaultSelection: function (editor) {
            return editor.opts.tokenDefaultSelection;
        },
        displaySelectionWidth: 120,
        title: 'Insert token',
        callback: function (cmd, val) {
            this.token.apply(val);
        },
        plugin: 'token'
    });

    // Add the token icon.
    \$.FE.DefineIcon('token', {
        NAME: 'tag'
    });

}));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/token.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/token.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/token.js");
    }
}
