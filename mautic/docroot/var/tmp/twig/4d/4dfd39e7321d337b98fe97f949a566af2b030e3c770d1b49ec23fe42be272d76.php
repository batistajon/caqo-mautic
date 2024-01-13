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

/* @bundles/PluginBundle/Integration/IntegrationObject.php */
class __TwigTemplate_aa96696ea501507067aa5d0797a74e7808192256df1816e493b10fdd33364a70 extends Template
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

namespace Mautic\\PluginBundle\\Integration;

class IntegrationObject
{
    /**
     * @var string
     */
    private \$type;

    /**
     * @var string
     */
    private \$internalType;

    /**
     * Constructor.
     */
    public function __construct(\$type, \$internalType)
    {
        \$this->type         = \$type;
        \$this->internalType = \$internalType;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getInternalType()
    {
        return \$this->internalType;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Integration/IntegrationObject.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/IntegrationObject.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Integration/IntegrationObject.php");
    }
}
