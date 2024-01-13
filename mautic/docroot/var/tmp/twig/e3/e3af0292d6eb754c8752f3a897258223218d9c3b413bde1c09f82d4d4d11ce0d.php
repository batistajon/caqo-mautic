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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php */
class __TwigTemplate_b6b4fa520128585b7596579d2a1cb6a78f51479f0febab766b7d807ca0a08484 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Loader\\EnvVars;

use Mautic\\CoreBundle\\Loader\\EnvVars\\SAMLEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class SAMLEnvVarsTest extends TestCase
{
    /**
     * @var ParameterBag
     */
    protected \$config;

    /**
     * @var ParameterBag
     */
    protected \$defaultConfig;

    /**
     * @var ParameterBag
     */
    protected \$envVars;

    protected function setUp(): void
    {
        \$this->config        = new ParameterBag();
        \$this->defaultConfig = new ParameterBag();
        \$this->envVars       = new ParameterBag();
    }

    public function testEntityIdIsSetToConfigIfNotEmpty()
    {
        \$this->config->set('saml_idp_entity_id', 'foobar');
        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('foobar', \$this->envVars->get('MAUTIC_SAML_ENTITY_ID'));
    }

    public function testEntityIdIsSetToSiteUrlIfNotEmpty()
    {
        \$this->config->set('saml_idp_entity_id', '');
        \$this->config->set('site_url', 'https://foobar.com/happydays');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('https://foobar.com', \$this->envVars->get('MAUTIC_SAML_ENTITY_ID'));
    }

    public function testEntityIdIsSetToMauticByDefault()
    {
        \$this->config->set('saml_idp_entity_id', '');
        \$this->config->set('site_url', '');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('mautic', \$this->envVars->get('MAUTIC_SAML_ENTITY_ID'));
    }

    public function testLoginPathIsDefaultIfSamlIsDisabled()
    {
        \$this->config->set('saml_idp_metadata', 'enabled');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('/s/saml/login', \$this->envVars->get('MAUTIC_SAML_LOGIN_PATH'));
        \$this->assertEquals('/s/saml/login_check', \$this->envVars->get('MAUTIC_SAML_LOGIN_CHECK_PATH'));
    }

    public function testCorrectLoginPathIfSamlIsEnabled()
    {
        \$this->config->set('saml_idp_metadata', '');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('/s/login', \$this->envVars->get('MAUTIC_SAML_LOGIN_PATH'));
        \$this->assertEquals('/s/login_check', \$this->envVars->get('MAUTIC_SAML_LOGIN_CHECK_PATH'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php");
    }
}
