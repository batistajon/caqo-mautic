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

/* @bundles/LeadBundle/Views/Import/mapping_form.html.php */
class __TwigTemplate_e582ad155bbaef3e753eee7bced884b4966c23aca5a2cdfd7b0552235b8311f7 extends Template
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

<div class=\"ml-lg mr-lg mt-md pa-lg\">
    <?php echo \$view['form']->start(\$form); ?>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.lead.import.default.owner'); ?></div>
        </div>
        <div class=\"panel-body\">
            <div class=\"col-xs-4\">
                <?php echo \$view['form']->rowIfExists(\$form, 'owner'); ?>
            </div>
            <div class=\"col-xs-4\">
                <?php echo \$view['form']->rowIfExists(\$form, 'list'); ?>
            </div>
            <div class=\"col-xs-4\">
                <?php echo \$view['form']->rowIfExists(\$form, 'tags'); ?>
            </div>
            <div class=\"col-xs-4\">
                <?php echo \$view['form']->rowIfExists(\$form, 'skip_if_exists'); ?>
            </div>
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.lead.import.fields'); ?></div>
        </div>
        <div class=\"panel-body\">
            <?php echo \$view['form']->errors(\$form); ?>
            <?php \$rowCount = 2; ?>
            <?php foreach (\$form->children as \$key => \$child): ?>
                <?php if ('properties' != \$key): ?>
                    <?php if (1 == \$rowCount++ % 3): ?>
                        <div class=\"row\">
                    <?php endif; ?>
                    <div class=\"col-sm-4\">
                        <?php echo \$view['form']->row(\$child); ?>
                    </div>
                    <?php if (1 == \$rowCount++ % 3): ?>
                        </div>
                    <?php endif; ?>
                    <?php ++\$rowCount; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php echo \$view['form']->end(\$form); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Import/mapping_form.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/mapping_form.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/mapping_form.html.php");
    }
}
