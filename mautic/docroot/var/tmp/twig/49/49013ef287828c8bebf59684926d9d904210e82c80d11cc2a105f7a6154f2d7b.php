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

/* @bundles/MarketplaceBundle/Service/Config.php */
class __TwigTemplate_35fc9eb5ab489c9826b85ce9fb3ba3eda6122dfd9afa0c0517047e4573f72991 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class Config
{
    public const MARKETPLACE_ENABLED                     = 'marketplace_enabled';
    public const MARKETPLACE_ALLOWLIST_URL               = 'marketplace_allowlist_url';
    public const MARKETPLACE_ALLOWLIST_CACHE_TTL_SECONDS = 'marketplace_allowlist_cache_ttl_seconds';

    private CoreParametersHelper \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    public function marketplaceIsEnabled(): bool
    {
        return (bool) \$this->coreParametersHelper->get(self::MARKETPLACE_ENABLED);
    }

    public function getAllowlistUrl(): string
    {
        return \$this->coreParametersHelper->get(self::MARKETPLACE_ALLOWLIST_URL);
    }

    public function getAllowlistCacheTtlSeconds(): int
    {
        return (int) \$this->coreParametersHelper->get(self::MARKETPLACE_ALLOWLIST_CACHE_TTL_SECONDS, 3600);
    }

    public function isComposerEnabled(): bool
    {
        return \$this->coreParametersHelper->get('composer_updates', false);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Service/Config.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Service/Config.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Service/Config.php");
    }
}
