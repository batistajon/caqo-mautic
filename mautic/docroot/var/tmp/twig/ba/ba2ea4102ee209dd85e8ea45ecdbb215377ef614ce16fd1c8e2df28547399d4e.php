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

/* @bundles/CampaignBundle/Views/Source/form.html.php */
class __TwigTemplate_08ff7842d5411beccf75b6c21b82de8f0d25a0fa9a71853cb0447b4da8df2587 extends Template
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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class=\"bundle-form\">
    <div class=\"bundle-form-header mb-15\">
        <h3><?php echo \$view['translator']->trans('mautic.campaign.leadsource.header.singular'); ?></h3>
        <h6 class=\"text-muted\"><?php echo \$view['translator']->trans('mautic.campaign.leadsource.'.\$sourceType.'.tooltip'); ?></h6>
    </div>

    <?php echo \$view['form']->start(\$form); ?>


    <?php echo \$view['form']->end(\$form); ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Source/form.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Source/form.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Source/form.html.php");
    }
}
