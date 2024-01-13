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

/* @bundles/MarketplaceBundle/Service/RouteProvider.php */
class __TwigTemplate_ec804adedfc13e1ef5bd738175b5b69f420caa1c5bf6d6b0fd42a799efcf4756 extends Template
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

use Symfony\\Component\\Routing\\RouterInterface;

class RouteProvider
{
    public const ROUTE_LIST = 'mautic_marketplace_list';

    public const ROUTE_DETAIL = 'mautic_marketplace_detail';

    public const ROUTE_INSTALL = 'mautic_marketplace_install';

    public const ROUTE_REMOVE = 'mautic_marketplace_remove';

    public const ROUTE_CLEAR_CACHE = 'mautic_marketplace_clear_cache';

    private RouterInterface \$router;

    public function __construct(RouterInterface \$router)
    {
        \$this->router = \$router;
    }

    public function buildListRoute(int \$page = 1): string
    {
        return \$this->router->generate(static::ROUTE_LIST, ['page' => \$page]);
    }

    public function buildDetailRoute(string \$vendor, string \$package): string
    {
        return \$this->router->generate(
            static::ROUTE_DETAIL,
            ['vendor' => \$vendor, 'package' => \$package]
        );
    }

    public function buildInstallRoute(string \$vendor, string \$package): string
    {
        return \$this->router->generate(
            static::ROUTE_DETAIL,
            ['vendor' => \$vendor, 'package' => \$package]
        );
    }

    public function buildRemoveRoute(string \$vendor, string \$package): string
    {
        return \$this->router->generate(
            static::ROUTE_REMOVE,
            ['vendor' => \$vendor, 'package' => \$package]
        );
    }

    public function buildClearCacheRoute(): string
    {
        return \$this->router->generate(
            static::ROUTE_CLEAR_CACHE
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Service/RouteProvider.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Service/RouteProvider.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Service/RouteProvider.php");
    }
}
