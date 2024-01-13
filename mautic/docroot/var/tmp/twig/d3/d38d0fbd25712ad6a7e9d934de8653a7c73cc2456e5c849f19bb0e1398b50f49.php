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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less */
class __TwigTemplate_93902f37906eaef7393c1803fd8f80783c0917e26e72b878325a80d66c9541a9 extends Template
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
        echo "// List Icons
// -------------------------

.@{fa-css-prefix}-ul {
  padding-left: 0;
  margin-left: @fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.@{fa-css-prefix}-li {
  position: absolute;
  left: -@fa-li-width;
  width: @fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.@{fa-css-prefix}-lg {
    left: (-@fa-li-width + (4em / 14));
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less");
    }
}
