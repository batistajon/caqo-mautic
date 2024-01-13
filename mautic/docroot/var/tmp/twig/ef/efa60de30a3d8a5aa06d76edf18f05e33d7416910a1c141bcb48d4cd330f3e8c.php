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

/* @bundles/CoreBundle/Assets/css/app/less/components/labels.less */
class __TwigTemplate_d6d682f0ba4be376842d96a25382c3fdcb5c36238f5bb78792e1996af5953ccb extends Template
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
// Labels
// --------------------------------------------------

.label {
  display: inline-block;
  //vertical-align: top;
  line-height: 1.5;
  padding: 0.25em 0.6em 0.15em 0.6em;
  //padding-top: 0.3em;
  border-radius: @border-radius-small;
  text-shadow: 0px -1px 0px rgba(0,0,0,0.1);
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/labels.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/labels.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/labels.less");
    }
}
