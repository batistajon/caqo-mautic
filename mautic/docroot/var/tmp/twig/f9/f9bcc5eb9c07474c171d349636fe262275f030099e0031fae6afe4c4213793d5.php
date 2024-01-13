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

/* @bundles/MarketplaceBundle/Views/Package/remove.html.php */
class __TwigTemplate_5ae4d166a12d691b8059fa6a515975c33c7437d7966d678f341b95be38b3a22e extends Template
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
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;

/** @var PackageDetail \$packageDetail */
\$packageDetail = \$packageDetail;
?>
<div class=\"text-center\" id=\"marketplace-removal-in-progress\">
    <p><?php echo \$view['translator']->trans(
        'marketplace.package.remove.html.in.progress',
        ['%packagename%' => \$view->escape(\$packageDetail->packageBase->getHumanPackageName())]
        ); ?></p>
    <div class=\"spinner\">
        <i class=\"fa fa-spin fa-spinner\"></i>
    </div>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-removal-failed\">
    <p><?php echo \$view['translator']->trans(
        'marketplace.package.remove.html.failed',
        ['%packagename%' => \$view->escape(\$packageDetail->packageBase->getHumanPackageName())]
        ); ?></p>
    <textarea class=\"form-control\" readonly id=\"marketplace-removal-failed-details\"></textarea>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-removal-success\">
    <p><?php echo \$view['translator']->trans(
        'marketplace.package.remove.html.success',
        ['%packagename%' => \$view->escape(\$packageDetail->packageBase->getHumanPackageName())]
        ); ?></p>
    <p><a class=\"btn btn-primary\" href=\"<?php echo \$view['router']->path(RouteProvider::ROUTE_LIST); ?>\"><?php echo \$view['translator']->trans(
        'marketplace.package.remove.html.success.continue'); ?></a></p>
</div>

<script>
    const removePackageResetView = () => {
        mQuery('#marketplace-removal-in-progress').show();
        mQuery('#marketplace-removal-success').hide();
        mQuery('#marketplace-removal-failed').hide();
    }

    removePackageResetView();

    Mautic.Marketplace.removePackage(
        '<?php echo htmlspecialchars(\$packageDetail->packageBase->getVendorName(), ENT_QUOTES); ?>',
        '<?php echo htmlspecialchars(\$packageDetail->packageBase->getPackageName(), ENT_QUOTES); ?>',
        (response) => {
            if (response.success) {
                mQuery('#marketplace-removal-in-progress').hide();
                mQuery('#marketplace-removal-success').show();
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
            
            mQuery('#marketplace-removal-in-progress').hide();
            mQuery('#marketplace-removal-failed').show();
            mQuery('#marketplace-removal-failed-details').text(error);
        }
    );
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Views/Package/remove.html.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Views/Package/remove.html.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Views/Package/remove.html.php");
    }
}
