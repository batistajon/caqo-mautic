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

/* @bundles/CoreBundle/Helper/TemplatingHelper.php */
class __TwigTemplate_8e2f6d5006688fca9230653935ee91d07d1991116cdd014958e38899a9b0d15f extends Template
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

use Mautic\\CoreBundle\\Templating\\TemplateNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\HttpKernel\\Kernel;

class TemplatingHelper
{
    /**
     * @var Container
     */
    protected \$container;

    public function __construct(Kernel \$kernel)
    {
        \$this->container = \$kernel->getContainer();
    }

    /**
     * Retrieve the templating service.
     *
     * @return DelegatingEngine
     *
     *  @throws \\Exception
     */
    public function getTemplating()
    {
        return \$this->container->get('templating');
    }

    /**
     * @return TemplateNameParser
     */
    public function getTemplateNameParser()
    {
        return new TemplateNameParser(\$this->container->get('kernel'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/TemplatingHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/TemplatingHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/TemplatingHelper.php");
    }
}
