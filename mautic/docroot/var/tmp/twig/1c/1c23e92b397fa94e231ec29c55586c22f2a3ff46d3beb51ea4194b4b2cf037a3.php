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

/* @bundles/FormBundle/Views/Form/details-fields-list.html.php */
class __TwigTemplate_ec25ae598415ddc142558a0ce8e78ea7bcf49133beb1d3e20f23e98c71812a2e extends Template
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
 * @copyright   2020 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

?>
<div class=\"box-layout\">
    <div class=\"col-md-1 va-m\">
        <?php \$requiredTitle = \$field->getIsRequired() ? 'mautic.core.required'
            : 'mautic.core.not_required'; ?>
        <h3><span class=\"fa fa-<?php echo \$field->getIsRequired() ? 'check'
                : 'times'; ?> text-white dark-xs\" data-toggle=\"tooltip\"
                  data-placement=\"left\"
                  title=\"<?php echo \$view['translator']->trans(\$requiredTitle); ?>\"></span>
        </h3>
    </div>
    <div class=\"col-md-7 va-m\">
        <h5 class=\"fw-sb text-primary mb-xs\"><?php echo \$field->getLabel(); ?></h5>
        <h6 class=\"text-white dark-md\"><?php echo \$view['translator']->trans(
                'mautic.form.details.field_type',
                ['%type%' => \$field->getType()]
            ); ?></h6>
    </div>
    <div class=\"col-md-4 va-m text-right\">
        <?php if (!\$field->getParent()): ?>
            <em class=\"text-white dark-sm\">
                <?php echo \$view['translator']->trans(
                    'mautic.form.details.field_order',
                    ['%order%' => \$field->getOrder()]
                ); ?></em>
        <?php endif; ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Form/details-fields-list.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Form/details-fields-list.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Form/details-fields-list.html.php");
    }
}
