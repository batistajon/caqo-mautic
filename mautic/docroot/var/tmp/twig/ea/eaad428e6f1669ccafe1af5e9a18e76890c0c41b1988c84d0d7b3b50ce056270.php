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

/* @bundles/CoreBundle/Loader/EnvVars/SiteUrlEnvVars.php */
class __TwigTemplate_6ade5897e7667d397edb84366a0f67603f7a86d30f15ef7c60bbe95af9e66cb4 extends Template
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

namespace Mautic\\CoreBundle\\Loader\\EnvVars;

use Symfony\\Component\\HttpFoundation\\ParameterBag;

class SiteUrlEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        // Default all to null so that they are defined
        self::setNull(\$envVars);

        if (!\$siteUrl = \$config->get('site_url')) {
            return;
        }

        \$parts = parse_url(\$siteUrl);

        // Host
        if (empty(\$parts['host'])) {
            return;
        }
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_HOST', \$parts['host']);

        // Scheme
        \$scheme = !empty(\$parts['scheme']) ? \$parts['scheme'] : 'http';
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_SCHEME', \$scheme);

        // Path
        if (!empty(\$parts['path'])) {
            \$path = str_replace(['index_dev.php', 'index.php'], '', \$parts['path']);

            // Check and remove trailing slash to prevent double // in Symfony cli generated URLs
            if ('/' == substr(\$path, -1)) {
                \$path = substr(\$path, 0, -1);
            }

            \$envVars->set('MAUTIC_REQUEST_CONTEXT_BASE_URL', \$path);
        }

        // Port
        if (!empty(\$parts['port'])) {
            \$portKey = ('http' === \$scheme) ? 'MAUTIC_REQUEST_CONTEXT_HTTP_PORT' : 'MAUTIC_REQUEST_CONTEXT_HTTPS_PORT';
            \$envVars->set(\$portKey, \$parts['port']);
        }
    }

    private static function setNull(ParameterBag \$envVars): void
    {
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_HOST', null);
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_SCHEME', null);
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_BASE_URL', null);
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_HTTP_PORT', 80);
        \$envVars->set('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT', 443);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/EnvVars/SiteUrlEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/SiteUrlEnvVars.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Loader/EnvVars/SiteUrlEnvVars.php");
    }
}
