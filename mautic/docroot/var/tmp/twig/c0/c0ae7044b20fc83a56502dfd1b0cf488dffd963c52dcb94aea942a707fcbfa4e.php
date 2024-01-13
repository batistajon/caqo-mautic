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

/* @bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php */
class __TwigTemplate_0b9e21db28349540f9f37d589f0987dd6e911f3f6621185a4e52580b108f9420 extends Template
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

class SAMLEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        if (\$entityId = \$config->get('saml_idp_entity_id')) {
            \$envVars->set('MAUTIC_SAML_ENTITY_ID', \$entityId);
        } elseif (\$siteUrl = \$config->get('site_url')) {
            \$parts  = parse_url(\$siteUrl);
            \$scheme = !empty(\$parts['scheme']) ? \$parts['scheme'] : 'http';
            \$envVars->set('MAUTIC_SAML_ENTITY_ID', \$scheme.'://'.\$parts['host']);
        } else {
            \$envVars->set('MAUTIC_SAML_ENTITY_ID', 'mautic');
        }

        \$samlEnabled = (bool) \$config->get('saml_idp_metadata');

        \$envVars->set('MAUTIC_SAML_LOGIN_PATH', \$samlEnabled ? '/s/saml/login' : '/s/login');
        \$envVars->set('MAUTIC_SAML_LOGIN_CHECK_PATH', \$samlEnabled ? '/s/saml/login_check' : '/s/login_check');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php");
    }
}
