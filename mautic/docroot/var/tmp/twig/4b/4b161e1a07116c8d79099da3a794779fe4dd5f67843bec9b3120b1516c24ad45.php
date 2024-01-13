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

/* @bundles/PluginBundle/Entity/IntegrationRepository.php */
class __TwigTemplate_c314b8d719c00b05a196904ceb580d99173303e4eae09a02012750b06431307a extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * IntegrationRepository.
 */
class IntegrationRepository extends CommonRepository
{
    public function getIntegrations()
    {
        \$services = \$this->createQueryBuilder('i')
            ->join('i.plugin', 'p')
            ->getQuery()
            ->getResult();

        \$results = [];
        foreach (\$services as \$s) {
            \$results[\$s->getName()] = \$s;
        }

        return \$results;
    }

    /**
     * Get core (no plugin) integrations.
     */
    public function getCoreIntegrations()
    {
        \$services = \$this->createQueryBuilder('i')
            ->getQuery()
            ->getResult();

        \$results = [];
        foreach (\$services as \$s) {
            \$results[\$s->getName()] = \$s;
        }

        return \$results;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Entity/IntegrationRepository.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/IntegrationRepository.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Entity/IntegrationRepository.php");
    }
}
