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

/* @bundles/CoreBundle/Assets/css/app/less/components/bullet.less */
class __TwigTemplate_c7a07c2db8db5728b31457910dab8b9e8669018fa17f68c8fd3a7a4b526d496a extends Template
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
        echo "//
// bullet
// --------------------------------------------------

.bullet {
  display: inline-block;
  vertical-align: middle;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: @gray-light;

  // contextual
  &.bullet-primary { background-color: @brand-primary; }
  &.bullet-success { background-color: @brand-success; }
  &.bullet-info { background-color: @brand-info; }
  &.bullet-warning { background-color: @brand-warning; }
  &.bullet-danger { background-color: @brand-danger; }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/bullet.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/bullet.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/bullet.less");
    }
}
