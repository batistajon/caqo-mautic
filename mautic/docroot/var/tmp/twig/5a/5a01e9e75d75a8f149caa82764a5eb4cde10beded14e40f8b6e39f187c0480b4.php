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

/* @bundles/CoreBundle/Assets/js/libraries/2d.jquery.custom.js */
class __TwigTemplate_148c87b5c1ff5a3f8c481056de449fa0178aa2449d8468d28c2fc4c5b46d0572 extends Template
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
        echo "jQuery.fn.extend({
    jQuery2Offset: function (options) {
        if (arguments.length) {
            return options === undefined ?
                this :
                this.each(function (i) {
                    jQuery.offset.setOffset(this, options, i);
                });
        }

        var docElem, win,
            elem = this[ 0 ],
            box = { top: 0, left: 0 },
            doc = elem && elem.ownerDocument;

        if (!doc) {
            return;
        }

        docElem = doc.documentElement;

        // Make sure it's not a disconnected DOM node
        if (!jQuery.contains(docElem, elem)) {
            return box;
        }

        // If we don't have gBCR, just use 0,0 rather than error
        // BlackBerry 5, iOS 3 (original iPhone)
        if (typeof elem.getBoundingClientRect !== strundefined) {
            box = elem.getBoundingClientRect();
        }
        win = getWindow(doc);
        var pageYOffset = win ? win.pageYOffset : 0;
        var pageXOffset = win ? win.pageXOffset : 0;
        return {
            top: box.top + pageYOffset - docElem.clientTop,
            left: box.left + pageXOffset - docElem.clientLeft
        };
    },
});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/2d.jquery.custom.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/2d.jquery.custom.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/2d.jquery.custom.js");
    }
}
