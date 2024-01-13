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

/* @bundles/PageBundle/Assets/builder/builder.less */
class __TwigTemplate_ce4efa5120892698842bfecc91f3dbd9609401a3b76ddef050fb9c9f3eb1b5f9 extends Template
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
        echo "@import \"../../../CoreBundle/Assets/builder/builder.less\";

.dropdown.slideshow-options {
  position: absolute;
  top: 0;
  left: 0;
}

#slideshow-options {
  opacity: 0.7;
}

#filemanager_iframe {
  width: 100%;
  height: 500px;
}

.file-manager-toggle {
  margin-top: 24px;
}

.stroked, .stroked:hover, .stroked:focus {
  text-decoration: line-through;
}

.ui-placeholder-highlight {
  border: 2px dashed #999;
  background: #ccc;
}
.ui-placeholder-highlight .fa-arrow-right {
  position: relative;
  left: -30px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Assets/builder/builder.less";
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
        return new Source("", "@bundles/PageBundle/Assets/builder/builder.less", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Assets/builder/builder.less");
    }
}
