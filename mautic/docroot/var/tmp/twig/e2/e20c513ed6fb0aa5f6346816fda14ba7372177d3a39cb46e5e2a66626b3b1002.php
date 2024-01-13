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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less */
class __TwigTemplate_4867e5e0cef3c91faf21d46acae24f95b80544df0e0f1626bc3b6b213fed1747 extends Template
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
        echo "// Rotated & Flipped Icons
// -------------------------

.@{fa-css-prefix}-rotate-90  { .fa-icon-rotate(90deg, 1);  }
.@{fa-css-prefix}-rotate-180 { .fa-icon-rotate(180deg, 2); }
.@{fa-css-prefix}-rotate-270 { .fa-icon-rotate(270deg, 3); }

.@{fa-css-prefix}-flip-horizontal { .fa-icon-flip(-1, 1, 0); }
.@{fa-css-prefix}-flip-vertical   { .fa-icon-flip(1, -1, 2); }

// Hook for IE8-9
// -------------------------

:root .@{fa-css-prefix}-rotate-90,
:root .@{fa-css-prefix}-rotate-180,
:root .@{fa-css-prefix}-rotate-270,
:root .@{fa-css-prefix}-flip-horizontal,
:root .@{fa-css-prefix}-flip-vertical {
  filter: none;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less");
    }
}
