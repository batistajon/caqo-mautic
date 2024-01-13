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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php */
class __TwigTemplate_9be5912a5efe5ee4183d9353183ac7142fe65a9a91238c8a1bb95fa021e7a985 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token;

use kamermans\\OAuth2\\Token\\TokenInterface;
use kamermans\\OAuth2\\Token\\TokenSerializer;

class IntegrationToken implements TokenInterface
{
    // Pull in serialize() and unserialize() methods
    use TokenSerializer;

    private \$extraData = [];

    public function __construct(?string \$accessToken, ?string \$refreshToken, \$expiresAt = null, array \$extraData = [])
    {
        \$this->accessToken  = (string) \$accessToken;
        \$this->refreshToken = (string) \$refreshToken;
        \$this->expiresAt    = (int) \$expiresAt;
        \$this->extraData    = \$extraData;
    }

    /**
     * @return string The access token
     */
    public function getAccessToken(): string
    {
        return \$this->accessToken;
    }

    /**
     * @return string The refresh token
     */
    public function getRefreshToken(): string
    {
        return \$this->refreshToken;
    }

    /**
     * @return int The expiration timestamp
     */
    public function getExpiresAt(): int
    {
        return \$this->expiresAt;
    }

    public function isExpired(): bool
    {
        return \$this->expiresAt && \$this->expiresAt < time();
    }

    public function getExtraData(): array
    {
        return \$this->extraData;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php");
    }
}
