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

/* @bundles/CoreBundle/Assets/css/app/less/components/sortable-panels.less */
class __TwigTemplate_b069656d5942f4be72cdb37a0282b9d9accbb3dcc1ccfbdbc370ae4d0c13e2f6 extends Template
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
        echo "@import \"../../../libraries/bootstrap/less/variables\";

.sortable-panels .panel  {
  position: relative;

  &.sortable-has-error {
    border-color: @brand-danger;
  }

  .sortable-panel-label {
    font-weight: bold;
  }

  .sortable-panel-buttons {
    position: absolute;
    right: 8px;
    top: 8px;
  }

  .sortable-panel-content {
    min-height: 50px;
    padding: 10px;
  }

  &.new-panel {
    border: none;

    .sortable-panel-wrapper {
      display: none;
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/sortable-panels.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/sortable-panels.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/sortable-panels.less");
    }
}
