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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php */
class __TwigTemplate_d34db94dda572c392acbf885ac352f5aa83b16b4fefdd705db1384e104ec8bd8 extends Template
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

class IntegrationTokenFactory implements TokenFactoryInterface
{
    private \$extraKeysToStore = [];

    public function __construct(array \$extraKeysToStore = [])
    {
        \$this->extraKeysToStore = \$extraKeysToStore;
    }

    public function __invoke(array \$data, ?TokenInterface \$previousToken = null): IntegrationToken
    {
        \$accessToken  = null;
        \$refreshToken = null;
        \$expiresAt    = null;

        // Read \"access_token\" attribute
        if (isset(\$data['access_token'])) {
            \$accessToken = \$data['access_token'];
        }

        // Read \"refresh_token\" attribute
        if (isset(\$data['refresh_token'])) {
            \$refreshToken = \$data['refresh_token'];
        } elseif (null !== \$previousToken) {
            // When requesting a new access token with a refresh token, the
            // server may not resend a new refresh token. In that case we
            // should keep the previous refresh token as valid.
            //
            // See http://tools.ietf.org/html/rfc6749#section-6
            \$refreshToken = \$previousToken->getRefreshToken();
        }

        // Read the \"expires_in\" attribute
        \$expiresIn = isset(\$data['expires_in']) ? (int) \$data['expires_in'] : null;

        // Facebook unfortunately breaks the spec by using 'expires' instead of 'expires_in'
        if (!\$expiresIn && isset(\$data['expires'])) {
            \$expiresIn = (int) \$data['expires'];
        }

        // Set the absolute expiration if a relative expiration was provided
        if (\$expiresIn) {
            \$expiresAt = time() + \$expiresIn;
        }

        return new IntegrationToken(\$accessToken, \$refreshToken, \$expiresAt, \$this->getExtraData(\$data));
    }

    private function getExtraData(array \$data): array
    {
        \$extraData = [];
        foreach (\$this->extraKeysToStore as \$key) {
            \$extraData[\$key] = \$data[\$key] ?? null;
        }

        return \$extraData;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php");
    }
}
