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

/* @bundles/MarketplaceBundle/Controller/Package/InstallController.php */
class __TwigTemplate_371a7935601ef55cc9ecc826aeca972155832a9fa48dd3185f6f3f5cf773719a extends Template
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
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\MarketplaceBundle\\Model\\PackageModel;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;
use Symfony\\Component\\HttpFoundation\\Response;

class InstallController extends CommonController
{
    private PackageModel \$packageModel;

    private RouteProvider \$routeProvider;

    private CorePermissions \$corePermissions;

    private Config \$config;

    public function __construct(
        PackageModel \$packageModel,
        RouteProvider \$routeProvider,
        CorePermissions \$corePermissions,
        Config \$config
    ) {
        \$this->packageModel    = \$packageModel;
        \$this->routeProvider   = \$routeProvider;
        \$this->corePermissions = \$corePermissions;
        \$this->config          = \$config;
    }

    public function viewAction(string \$vendor, string \$package): Response
    {
        if (!\$this->config->marketplaceIsEnabled()) {
            return \$this->notFound();
        }

        if (!\$this->corePermissions->isGranted(MarketplacePermissions::CAN_INSTALL_PACKAGES)
            || !\$this->config->isComposerEnabled()) {
            return \$this->accessDenied();
        }

        return \$this->delegateView(
            [
                'returnUrl'      => \$this->routeProvider->buildListRoute(),
                'viewParameters' => [
                    'packageDetail'  => \$this->packageModel->getPackageDetail(\"{\$vendor}/{\$package}\"),
                ],
                'contentTemplate' => 'MarketplaceBundle:Package:install.html.php',
                'passthroughVars' => [
                    'mauticContent' => 'package',
                    'activeLink'    => '#mautic_marketplace',
                    'route'         => \$this->routeProvider->buildInstallRoute(\$vendor, \$package),
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
        return "@bundles/MarketplaceBundle/Controller/Package/InstallController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/Package/InstallController.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Controller/Package/InstallController.php");
    }
}
