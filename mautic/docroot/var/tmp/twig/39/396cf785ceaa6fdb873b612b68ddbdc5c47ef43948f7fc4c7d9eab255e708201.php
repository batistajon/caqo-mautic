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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php */
class __TwigTemplate_ce672a5f615dcca11c1f6a47d27980721e19a58886c2c34f0b1f081261ab1a2c extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Support\\Oauth2\\Token;

use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\IntegrationToken;
use PHPUnit\\Framework\\TestCase;

class IntegrationTokenTest extends TestCase
{
    public function testGetters(): void
    {
        \$expires   = time() + 100;
        \$extraData = ['foo' => 'bar'];
        \$token     = new IntegrationToken('accessToken', 'refreshToken', \$expires, \$extraData);

        \$this->assertEquals('accessToken', \$token->getAccessToken());
        \$this->assertEquals('refreshToken', \$token->getRefreshToken());
        \$this->assertEquals(\$expires, \$token->getExpiresAt());
        \$this->assertEquals(\$extraData, \$token->getExtraData());
    }

    public function testIsExpired(): void
    {
        \$token = new IntegrationToken('accessToken', 'refreshToken', time() - 100);

        \$this->assertTrue(\$token->isExpired());
    }

    public function testIsNotExpired(): void
    {
        \$token = new IntegrationToken('accessToken', 'refreshToken', time() + 100);

        \$this->assertFalse(\$token->isExpired());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php");
    }
}
