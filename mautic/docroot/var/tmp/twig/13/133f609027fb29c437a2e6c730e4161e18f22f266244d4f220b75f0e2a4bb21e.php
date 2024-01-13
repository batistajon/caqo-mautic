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

/* @bundles/CoreBundle/Helper/CoreParametersHelper.php */
class __TwigTemplate_f467e626a81688ac6a04c2e2619e2faecbc771c55d81a25ed0153b6c2539d383 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Loader\\ParameterLoader;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

/**
 * Class CoreParametersHelper.
 */
class CoreParametersHelper
{
    /**
     * @var ParameterBag
     */
    private \$parameters;

    /**
     * @var ContainerInterface
     */
    private \$container;

    /**
     * @var array
     */
    private \$resolvedParameters;

    public function __construct(ContainerInterface \$container)
    {
        \$loader = new ParameterLoader();

        \$this->parameters = \$loader->getParameterBag();
        \$this->container  = \$container;

        \$this->resolveParameters();
    }

    /**
     * @param string \$name
     * @param mixed  \$default
     *
     * @return mixed
     */
    public function get(\$name, \$default = null)
    {
        \$name = \$this->stripMauticPrefix(\$name);

        if ('db_table_prefix' === \$name && defined('MAUTIC_TABLE_PREFIX')) {
            //use the constant in case in the installer
            return MAUTIC_TABLE_PREFIX;
        }

        // First check the container so that Symfony will resolve container parameters within Mautic config values
        \$containerName = sprintf('mautic.%s', \$name);
        if (\$this->container->hasParameter(\$containerName)) {
            return \$this->container->getParameter(\$containerName);
        }

        return \$this->parameters->get(\$name, \$default);
    }

    /**
     * @param string \$name
     */
    public function has(\$name): bool
    {
        return \$this->parameters->has(\$this->stripMauticPrefix(\$name));
    }

    public function all(): array
    {
        return \$this->resolvedParameters;
    }

    /**
     * @deprecated 3.0.0 to be removed in 4.0; use get() instead
     */
    public function getParameter(\$name, \$default = null)
    {
        return \$this->get(\$name, \$default);
    }

    private function stripMauticPrefix(string \$name): string
    {
        return str_replace('mautic.', '', \$name);
    }

    private function resolveParameters(): void
    {
        \$all = \$this->parameters->all();

        foreach (\$all as \$key => \$value) {
            \$this->resolvedParameters[\$key] = \$this->get(\$key, \$value);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CoreParametersHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CoreParametersHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/CoreParametersHelper.php");
    }
}
