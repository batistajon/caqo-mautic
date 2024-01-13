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

/* @bundles/WebhookBundle/Http/Client.php */
class __TwigTemplate_e92233c7c07b927af3ac0e13c413e7f8d3820ab6f83d6d0eb3824535b57f8b00 extends Template
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

namespace Mautic\\WebhookBundle\\Http;

use GuzzleHttp\\Psr7\\Request;
use Http\\Adapter\\Guzzle7\\Client as GuzzleClient;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Psr\\Http\\Message\\ResponseInterface;

class Client
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var GuzzleClient
     */
    private \$httpClient;

    public function __construct(
        CoreParametersHelper \$coreParametersHelper,
        \$httpClient
    ) {
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->httpClient           = \$httpClient;
    }

    /**
     * @param string      \$url
     * @param string|null \$secret
     *
     * @return ResponseInterface
     */

    /**
     * @param \$url
     * @param null \$secret
     *
     * @return mixed|ResponseInterface
     *
     * @throws \\Http\\Client\\Exception
     */
    public function post(\$url, array \$payload, \$secret = null)
    {
        \$jsonPayload = json_encode(\$payload);
        \$signature   = base64_encode(hash_hmac('sha256', \$jsonPayload, \$secret, true));
        \$headers     = [
            'Content-Type'      => 'application/json',
            'X-Origin-Base-URL' => \$this->coreParametersHelper->get('site_url'),
            'Webhook-Signature' => \$signature,
        ];

        return \$this->httpClient->sendRequest(new Request('POST', \$url, \$headers, \$jsonPayload));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Http/Client.php";
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
        return new Source("", "@bundles/WebhookBundle/Http/Client.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Http/Client.php");
    }
}
