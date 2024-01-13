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

/* @bundles/LeadBundle/Views/SubscribedEvents/Search/global.html.php */
class __TwigTemplate_07337ffacb823e969f98d6698eacae0ee2e62f4063b1912b7cc49bd411037d5a extends Template
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
<?php if (!empty(\$showMore)): ?>
    <a href=\"<?php echo \$view['router']->url('mautic_contact_index', ['search' => \$searchString]); ?>\" data-toggle=\"ajax\">
        <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
    </a>
<?php else: ?>
    <?php \$fields = \$lead->getFields(); ?>
    <span class=\"pull-left pr-xs pt-xs\" style=\"width:36px\">
        <span class=\"img-wrapper img-rounded\"><img src=\"<?php echo \$view['gravatar']->getImage(\$fields['core']['email']['value'], '100'); ?>\" /></span>
    </span>
    <a href=\"<?php echo \$view['router']->url('mautic_contact_action', ['objectAction' => 'view', 'objectId' => \$lead->getId()]); ?>\" data-toggle=\"ajax\">
        <span><?php echo \$lead->getPrimaryIdentifier(true); ?></span>
        <?php
        \$color = \$lead->getColor();
        \$style = !empty(\$color) ? ' style=\"background-color: '.\$color.';\"' : '';
        ?>
        <span class=\"label label-default pull-right\"<?php echo \$style; ?> data-toggle=\"tooltip\" data-placement=\"left\" title=\"<?php echo \$view['translator']->trans('mautic.lead.lead.pointscount'); ?>\"><?php echo \$lead->getPoints(); ?></span>
    </a>
    <div class=\"clearfix\"></div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/SubscribedEvents/Search/global.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/SubscribedEvents/Search/global.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/SubscribedEvents/Search/global.html.php");
    }
}
