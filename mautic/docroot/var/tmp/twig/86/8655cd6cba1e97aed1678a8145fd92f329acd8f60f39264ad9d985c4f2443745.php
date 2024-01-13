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

/* @bundles/CoreBundle/Entity/PublishStatusIconAttributesInterface.php */
class __TwigTemplate_098aab0dfcb66e096deb37da866bad75a728b352cfca2c0f075255cf8f791836 extends Template
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
        echo "<?php

namespace Mautic\\CoreBundle\\Entity;

interface PublishStatusIconAttributesInterface
{
    public function getOnclickMethod(): string;

    /**
     * @return array<string, string>
     */
    public function getDataAttributes(): array;

    /**
     * @return array<string, string>
     */
    public function getTranslationKeysDataAttributes(): array;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/PublishStatusIconAttributesInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/PublishStatusIconAttributesInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/PublishStatusIconAttributesInterface.php");
    }
}
