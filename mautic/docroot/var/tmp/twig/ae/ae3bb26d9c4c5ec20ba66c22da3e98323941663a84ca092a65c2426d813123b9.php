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

/* @bundles/MarketplaceBundle/Service/Allowlist.php */
class __TwigTemplate_f632780d657d4794fefac80f64dbd7b85d3d8fb5e84e9f30288f44ce6daa18c9 extends Template
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

namespace Mautic\\MarketplaceBundle\\Service;

use GuzzleHttp\\ClientInterface;
use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Mautic\\MarketplaceBundle\\DTO\\Allowlist as DTOAllowlist;
use Mautic\\MarketplaceBundle\\Exception\\ApiException;

/**
 * Provides several helper functions to interact with Mautic's allowlist.
 */
class Allowlist
{
    private Config \$config;
    private CacheProvider \$cache;
    private ClientInterface \$httpClient;
    private ?DTOAllowlist \$allowlist = null;

    private const MARKETPLACE_ALLOWLIST_CACHE_KEY = 'marketplace_allowlist';

    public function __construct(Config \$config, CacheProvider \$cache, ClientInterface \$httpClient)
    {
        \$this->config     = \$config;
        \$this->cache      = \$cache;
        \$this->httpClient = \$httpClient;
    }

    public function getAllowList(): ?DTOAllowlist
    {
        if (!empty(\$this->allowlist)) {
            return \$this->allowlist;
        }

        \$cache                 = \$this->cache->getSimpleCache();
        \$cachedAllowlistString = \$cache->get(self::MARKETPLACE_ALLOWLIST_CACHE_KEY);

        if (!empty(\$cachedAllowlistString)) {
            return \$this->parseAllowlistJson(\$cachedAllowlistString);
        }

        if (!empty(\$this->config->getAllowListUrl())) {
            \$response  = \$this->httpClient->request('GET', \$this->config->getAllowlistUrl());
            \$body      = (string) \$response->getBody();

            if (\$response->getStatusCode() >= 300) {
                throw new ApiException(\$body, \$response->getStatusCode());
            }

            // Cache the allowlist for the given amount of seconds (3600 by default).
            \$cache->set(
                self::MARKETPLACE_ALLOWLIST_CACHE_KEY,
                \$body,
                \$this->config->getAllowlistCacheTtlSeconds()
            );

            return \$this->parseAllowlistJson(\$body);
        }

        return null;
    }

    public function clearCache(): void
    {
        \$this->cache->getSimpleCache()->delete(self::MARKETPLACE_ALLOWLIST_CACHE_KEY);
    }

    private function parseAllowlistJson(string \$payload): DTOAllowlist
    {
        return DTOAllowlist::fromArray(json_decode(\$payload, true));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Service/Allowlist.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Service/Allowlist.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Service/Allowlist.php");
    }
}
