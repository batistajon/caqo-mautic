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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php */
class __TwigTemplate_fe2ba4ee0c0dd59723f6ebbc7f1471daf4e3085ab476d347269fb1777b41e97f extends Template
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

use Mautic\\CoreBundle\\Loader\\EnvVars\\ApiEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ApiEnvVarsTest extends TestCase
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

    public function testOauth2TokenLifetimesAreCalculatedWhenSet(): void
    {
        \$this->config->set('api_oauth2_access_token_lifetime', 2);
        \$this->config->set('api_oauth2_refresh_token_lifetime', 2);

        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals(120, \$this->envVars->get('MAUTIC_API_OAUTH2_ACCESS_TOKEN_LIFETIME'));
        \$this->assertEquals(172800, \$this->envVars->get('MAUTIC_API_OAUTH2_REFRESH_TOKEN_LIFETIME'));
    }

    public function testOauth2TokenLifetimesAreDefaultWhenNotSet(): void
    {
        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals(3600, \$this->envVars->get('MAUTIC_API_OAUTH2_ACCESS_TOKEN_LIFETIME'));
        \$this->assertEquals(1209600, \$this->envVars->get('MAUTIC_API_OAUTH2_REFRESH_TOKEN_LIFETIME'));
    }

    public function testRateLimitIsEnabled(): void
    {
        \$this->config->set('api_rate_limiter_limit', 100);

        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertTrue(\$this->envVars->get('MAUTIC_API_RATE_LIMIT_ENABLED'));
    }

    public function testRateLimitIsDisabled(): void
    {
        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertFalse(\$this->envVars->get('MAUTIC_API_RATE_LIMIT_ENABLED'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php");
    }
}
