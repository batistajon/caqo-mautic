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

/* @bundles/PluginBundle/Assets/css/plugin.css */
class __TwigTemplate_a7f16b5e6f73101b2069ec935410656128856f0fcbf9b2e650a09acc9d57841f extends Template
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
        echo "/* Social Media */
.symbol-hashtag:before {
    content: '#';
}

.shuffle-item.integration {
\twidth: 100px;
}

.integration-disabled img {
    filter: url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\\'/></filter></svg>#grayscale\"); /* Firefox 10+ */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
    -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */
    -webkit-backface-visibility: hidden; /* Fix for transition flickering */
}

.integration-disabled img:hover {
    filter: url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\\'/></filter></svg>#grayscale\");
    -webkit-filter: grayscale(0%);
}
.field-selector {
    width: 500px;
}
.col-centered{
    margin: 0 auto;
    float: none;
}

.placeholder
{
    position: relative;
}

.placeholder::after
{
    position: absolute;
    right: 3px;
    top: 19px;
    content: attr(data-placeholder);
    pointer-events: none;
    opacity: 0.3;
    font-size: 9px
}

.integration-fields{
    font-size: 12px;
    padding-left: 7px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Assets/css/plugin.css";
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
        return new Source("", "@bundles/PluginBundle/Assets/css/plugin.css", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Assets/css/plugin.css");
    }
}
