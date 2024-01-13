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

/* @bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php */
class __TwigTemplate_e20e418c5cabfb6b59a4750af811180319366ad4a6a5a95d656c099c81948c6a extends Template
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

namespace Mautic\\MarketplaceBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Symfony\\Component\\Form\\FormBuilderInterface;

class MarketplacePermissions extends AbstractPermissions
{
    public const BASE                 = 'marketplace';
    public const PACKAGES             = 'packages';
    public const CAN_VIEW_PACKAGES    = self::BASE.':'.self::PACKAGES.':view';
    public const CAN_INSTALL_PACKAGES = self::BASE.':'.self::PACKAGES.':create';
    public const CAN_REMOVE_PACKAGES  = self::BASE.':'.self::PACKAGES.':remove';

    private Config \$config;

    public function __construct(CoreParametersHelper \$coreParametersHelper, Config \$config)
    {
        parent::__construct(\$coreParametersHelper->all());
        \$this->config = \$config;
    }

    public function definePermissions()
    {
        \$this->addStandardPermissions(self::PACKAGES, false);
    }

    public function isEnabled()
    {
        return \$this->config->marketplaceIsEnabled();
    }

    public function getName()
    {
        return self::BASE;
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$this->addStandardFormFields(self::BASE, self::PACKAGES, \$builder, \$data, false);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php");
    }
}
