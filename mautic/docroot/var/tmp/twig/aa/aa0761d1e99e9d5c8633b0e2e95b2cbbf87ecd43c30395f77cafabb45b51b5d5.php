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

/* @bundles/LeadBundle/Views/Integration/index.html.php */
class __TwigTemplate_d04b7ba1c16dc377f548d0d131ecf69e3298fa25c1b1727e0e08687f05c890a6 extends Template
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
<?php if (empty(\$integrations)): ?>
<div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
    <h4><?php echo \$view['translator']->trans('mautic.lead.integrations.header'); ?></h4>
</div>
<?php else: ?>
<?php \$count = 0; ?>
<div class=\"row\">
<?php foreach (\$integrations as \$details): ?>
    <?php if (\$count > 0 && 0 == \$count % 2): echo '</div><div class=\"row\">'; endif; ?>
    <div class=\"col-md-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <?php if (isset(\$details['link'])): ?>
                        <a href=\"<?php echo \$details['link']; ?>\" class=\"pull-right\"><i class=\"fa fa-external-link\"></i></a>
                    <?php endif; ?>
                    <?php echo \$details['integration']; ?>
                </h3>
            </div>
            <div class=\"panel-body\">
                <dl class=\"dl-horizontal\">
                    <dt><?php echo \$view['translator']->trans('mautic.integration.object'); ?></dt>
                    <dd><?php echo \$details['integration_entity']; ?></dd>
                    <dt><?php echo \$view['translator']->trans('mautic.integration.object_id'); ?></dt>
                    <dd><?php echo \$details['integration_entity_id']; ?></dd>
                    <dt><?php echo \$view['translator']->trans('mautic.core.date.added'); ?></dt>
                    <dd><?php echo \$view['date']->toText(\$details['date_added'], 'UTC', 'Y-m-d H:i:s', true); ?></dd>
                    <dt><?php echo \$view['translator']->trans('mautic.integration.last_sync_date'); ?></dt>
                    <dd><?php echo \$view['date']->toText(\$details['last_sync_date'], 'UTC', 'Y-m-d H:i:s', true); ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <?php ++\$count; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Integration/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Integration/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Integration/index.html.php");
    }
}
