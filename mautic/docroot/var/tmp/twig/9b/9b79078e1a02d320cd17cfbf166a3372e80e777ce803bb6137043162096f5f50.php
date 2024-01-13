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

/* @bundles/MarketplaceBundle/Controller/Package/DetailController.php */
class __TwigTemplate_7eeb61fc4f2a6174e8f2e09f7709b0a7392638cae3da6d97c549d9d58c0f8017 extends Template
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

namespace Mautic\\MarketplaceBundle\\Controller\\Package;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\MarketplaceBundle\\Exception\\RecordNotFoundException;
use Mautic\\MarketplaceBundle\\Model\\PackageModel;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;
use Symfony\\Component\\HttpFoundation\\Response;

class DetailController extends CommonController
{
    private PackageModel \$packageModel;
    private RouteProvider \$routeProvider;
    private CorePermissions \$corePermissions;
    private Config \$config;
    private ComposerHelper \$composer;

    public function __construct(
        PackageModel \$packageModel,
        RouteProvider \$routeProvider,
        CorePermissions \$corePermissions,
        Config \$config,
        ComposerHelper \$composer
    ) {
        \$this->packageModel    = \$packageModel;
        \$this->routeProvider   = \$routeProvider;
        \$this->corePermissions = \$corePermissions;
        \$this->config          = \$config;
        \$this->composer        = \$composer;
    }

    public function ViewAction(string \$vendor, string \$package): Response
    {
        if (!\$this->config->marketplaceIsEnabled()) {
            return \$this->notFound();
        }

        if (!\$this->corePermissions->isGranted(MarketplacePermissions::CAN_VIEW_PACKAGES)) {
            return \$this->accessDenied();
        }

        \$isInstalled = \$this->composer->isInstalled(\"{\$vendor}/{\$package}\");

        try {
            \$packageDetail = \$this->packageModel->getPackageDetail(\"{\$vendor}/{\$package}\");
        } catch (RecordNotFoundException \$e) {
            return \$this->notFound(\$e->getMessage());
        }

        return \$this->delegateView(
            [
                'returnUrl'      => \$this->routeProvider->buildListRoute(),
                'viewParameters' => [
                    'packageDetail'     => \$packageDetail,
                    'isInstalled'       => \$isInstalled,
                    'isComposerEnabled' => \$this->config->isComposerEnabled(),
                ],
                'contentTemplate' => 'MarketplaceBundle:Package:detail.html.php',
                'passthroughVars' => [
                    'mauticContent' => 'package',
                    'activeLink'    => '#mautic_marketplace',
                    'route'         => \$this->routeProvider->buildDetailRoute(\$vendor, \$package),
                ],
            ]
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
        return "@bundles/MarketplaceBundle/Controller/Package/DetailController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/Package/DetailController.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Controller/Package/DetailController.php");
    }
}
