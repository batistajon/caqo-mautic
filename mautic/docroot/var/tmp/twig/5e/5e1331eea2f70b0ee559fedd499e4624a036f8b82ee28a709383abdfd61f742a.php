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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less */
class __TwigTemplate_99a4e866ecc953c44140b61879531edd3d3a949e467dc11b04671d2b5319938c extends Template
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
        echo "// Bordered & Pulled
// -------------------------

.@{fa-css-prefix}-border {
  padding: .2em .25em .15em;
  border: solid .08em @fa-border-color;
  border-radius: .1em;
}

.@{fa-css-prefix}-pull-left { float: left; }
.@{fa-css-prefix}-pull-right { float: right; }

.@{fa-css-prefix} {
  &.@{fa-css-prefix}-pull-left { margin-right: .3em; }
  &.@{fa-css-prefix}-pull-right { margin-left: .3em; }
}

/* Deprecated as of 4.4.0 */
.pull-right { float: right; }
.pull-left { float: left; }

.@{fa-css-prefix} {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less");
    }
}
