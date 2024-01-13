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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/stacked.less */
class __TwigTemplate_a389c5a76c4e3ebfff37e526a05ebe8439808bfc0e3a96e98491ade99ea4491b extends Template
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
        echo "// Stacked Icons
// -------------------------

.@{fa-css-prefix}-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.@{fa-css-prefix}-stack-1x, .@{fa-css-prefix}-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.@{fa-css-prefix}-stack-1x { line-height: inherit; }
.@{fa-css-prefix}-stack-2x { font-size: 2em; }
.@{fa-css-prefix}-inverse { color: @fa-inverse; }
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/stacked.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/stacked.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/stacked.less");
    }
}
