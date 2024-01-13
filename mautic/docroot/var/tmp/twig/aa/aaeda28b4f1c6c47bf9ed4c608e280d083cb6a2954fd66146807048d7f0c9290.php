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

/* @bundles/MarketplaceBundle/Api/Connection.php */
class __TwigTemplate_df9e6495f78c76dadfb6566d5e0b98ef4343817b4bae0b72c6320100d24243a8 extends Template
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

namespace Mautic\\MarketplaceBundle\\Api;

use GuzzleHttp\\ClientInterface;
use GuzzleHttp\\Exception\\GuzzleException;
use GuzzleHttp\\Psr7\\Request;
use Mautic\\MarketplaceBundle\\Exception\\ApiException;
use Psr\\Log\\LoggerInterface;

class Connection
{
    private ClientInterface \$httpClient;

    private LoggerInterface \$logger;

    public function __construct(ClientInterface \$httpClient, LoggerInterface \$logger)
    {
        \$this->httpClient = \$httpClient;
        \$this->logger     = \$logger;
    }

    /**
     * @throws ApiException
     */
    public function getPlugins(int \$page, int \$limit, string \$query = ''): array
    {
        return \$this->makeRequest(\"https://packagist.org/search.json?page={\$page}&per_page={\$limit}&type=mautic-plugin&q={\$query}\");
    }

    /**
     * @throws ApiException
     */
    public function getPackage(string \$pluginName): array
    {
        return \$this->makeRequest(\"https://packagist.org/packages/{\$pluginName}.json\");
    }

    public function makeRequest(string \$url): array
    {
        \$this->logger->debug('About to query the Packagist API: '.\$url);

        \$request  = new Request('GET', \$url, \$this->getHeaders());

        try {
            \$response = \$this->httpClient->send(\$request);
        } catch (GuzzleException \$e) {
            throw new ApiException(\$e->getMessage(), \$e->getCode());
        }

        \$body = (string) \$response->getBody();

        if (\$response->getStatusCode() >= 300) {
            throw new ApiException(\$body, \$response->getStatusCode());
        }

        \$payload = json_decode(\$body, true);

        \$this->logger->debug('Successful Packagist API response', ['payload' => \$payload]);

        return \$payload;
    }

    private function getHeaders(): array
    {
        return [
            'Content-Type'    => 'application/json',
            'Accept'          => 'application/json',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection'      => 'keep-alive',
            'User-Agent'      => 'Mautic Marketplace',
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Api/Connection.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Api/Connection.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Api/Connection.php");
    }
}
