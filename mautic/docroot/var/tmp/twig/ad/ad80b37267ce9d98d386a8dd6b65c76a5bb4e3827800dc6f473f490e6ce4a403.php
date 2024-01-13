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

/* @bundles/MarketplaceBundle/Controller/CacheController.php */
class __TwigTemplate_8f442e3c51a3915d3e8394f823739d859c49f22f2665df5d5b46cb8f952811f0 extends Template
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

namespace Mautic\\MarketplaceBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Allowlist;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Symfony\\Component\\HttpFoundation\\Response;

class CacheController extends CommonController
{
    private CorePermissions \$corePermissions;
    private Config \$config;
    private Allowlist \$allowlist;

    public function __construct(
        CorePermissions \$corePermissions,
        Config \$config,
        Allowlist \$allowlist
    ) {
        \$this->corePermissions = \$corePermissions;
        \$this->config          = \$config;
        \$this->allowlist       = \$allowlist;
    }

    public function ClearAction(): Response
    {
        if (!\$this->config->marketplaceIsEnabled()) {
            return \$this->notFound();
        }

        if (!\$this->corePermissions->isGranted(MarketplacePermissions::CAN_VIEW_PACKAGES)) {
            return \$this->accessDenied();
        }

        \$this->allowlist->clearCache();

        return \$this->forward(
            'MarketplaceBundle:Package\\List:list'
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
        return "@bundles/MarketplaceBundle/Controller/CacheController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/CacheController.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Controller/CacheController.php");
    }
}
