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

/* @bundles/CoreBundle/Templating/Helper/ConfigHelper.php */
class __TwigTemplate_e89914cbf111052908ce5c789c1f6f3f03d053474ddbe328445f486f28fd0233 extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * Allows templates access values from CoreParametersHelper.
 *
 * Example usage:
 *
 * <?php echo \$view['config']->get('default_timezone', 'UTC'); ?>
 */
class ConfigHelper extends Helper
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @param mixed \$default
     *
     * @return mixed
     */
    public function get(string \$name, \$default = null)
    {
        return \$this->coreParametersHelper->get(\$name, \$default);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'config';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/ConfigHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/ConfigHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/ConfigHelper.php");
    }
}
