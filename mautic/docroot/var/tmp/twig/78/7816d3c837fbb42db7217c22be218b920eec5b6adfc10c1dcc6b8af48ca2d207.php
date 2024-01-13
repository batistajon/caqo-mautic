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

/* @bundles/MarketplaceBundle/Views/Package/install.html.php */
class __TwigTemplate_7aa7bbeed945b67705eb480bf331488657ddceec3b1d89c173998f3590d6edd9 extends Template
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

use Mautic\\MarketplaceBundle\\DTO\\PackageDetail;

/** @var PackageDetail \$packageDetail */
\$packageDetail = \$packageDetail;

?>
<div class=\"text-center\" id=\"marketplace-installation-in-progress\">
    <p><?php echo \$view['translator']->trans(
        'marketplace.package.install.html.in.progress',
        ['%packagename%' => \$view->escape(\$packageDetail->packageBase->getHumanPackageName())]
        ); ?></p>
    <div class=\"spinner\">
        <i class=\"fa fa-spin fa-spinner\"></i>
    </div>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-installation-failed\">
    <p><?php echo \$view['translator']->trans(
        'marketplace.package.install.html.failed',
        ['%packagename%' => \$view->escape(\$packageDetail->packageBase->getHumanPackageName())]
        ); ?></p>
    <textarea class=\"form-control\" readonly id=\"marketplace-installation-failed-details\"></textarea>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-installation-success\">
    <p><?php echo \$view['translator']->trans(
        'marketplace.package.install.html.success',
        ['%packagename%' => \$view->escape(\$packageDetail->packageBase->getHumanPackageName())]
        ); ?></p>
    <p><a class=\"btn btn-primary\" href=\"<?php echo \$view['router']->path('mautic_plugin_reload'); ?>\"><?php echo \$view['translator']->trans(
        'marketplace.package.install.html.success.continue'); ?></a></p>
</div>

<script>
    const installPackageResetView = () => {
        mQuery('#marketplace-installation-in-progress').show();
        mQuery('#marketplace-installation-success').hide();
        mQuery('#marketplace-installation-failed').hide();
    }

    installPackageResetView();

    Mautic.Marketplace.installPackage(
        '<?php echo htmlspecialchars(\$packageDetail->packageBase->getVendorName(), ENT_QUOTES); ?>',
        '<?php echo htmlspecialchars(\$packageDetail->packageBase->getPackageName(), ENT_QUOTES); ?>',
        (response) => {
            if (response.success) {
                mQuery('#marketplace-installation-in-progress').hide();
                mQuery('#marketplace-installation-success').show();
            } else if (response.redirect) {
                window.location = response.redirect;
            }
        },
        (request, textStatus, errorThrown) => {
            let error;

            try {
                const res = JSON.parse(request.responseText);
                if (res.error) {
                    error = res.error;
                } else {
                    error = res.errors[0].message ?? 'Unknown error';
                }
            } catch (e) {
                error = 'An unknown error occurred. Please check the logs for more details.';
                console.error(request.responseText);
                console.error(e);
            }

            mQuery('#marketplace-installation-in-progress').hide();
            mQuery('#marketplace-installation-failed').show();
            mQuery('#marketplace-installation-failed-details').text(error);
        }
    );
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Views/Package/install.html.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Views/Package/install.html.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Views/Package/install.html.php");
    }
}
