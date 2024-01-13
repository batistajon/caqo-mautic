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

/* @bundles/CoreBundle/Views/Helper/list_toolbar.html.php */
class __TwigTemplate_dedb338c3c05075ed23cc3c7bd1052cebee0591269a6d8022654187a9a484954 extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper;

\$wrap = true;
\$view['buttons']->reset(\$app->getRequest(), ButtonHelper::LOCATION_TOOLBAR_ACTIONS, ButtonHelper::TYPE_GROUP);
include 'action_button_helper.php';
?>
<div class=\"panel-body\">
    <div class=\"box-layout\">
        <div class=\"col-xs-6 col-lg-8 va-m form-inline\">
            <?php if (isset(\$searchValue)): ?>
            <?php echo \$view->render('MauticCoreBundle:Helper:search.html.php', [
                    'searchId'        => (empty(\$searchId)) ? null : \$searchId,
                    'searchValue'     => \$searchValue,
                    'action'          => (isset(\$action)) ? \$action : '',
                    'searchHelp'      => (isset(\$searchHelp)) ? \$searchHelp : '',
                    'target'          => (empty(\$target)) ? null : \$target,
                    'tmpl'            => (empty(\$tmpl)) ? null : \$tmpl,
                    'overlayDisabled' => (isset(\$overlayDisabled)) ? \$overlayDisabled : null,
                ]); ?>
            <?php endif; ?>

            <?php if (!empty(\$filters)): ?>
            <?php echo \$view->render('MauticCoreBundle:Helper:list_filters.html.php', [
                    'filters' => \$filters,
                    'target'  => (empty(\$target)) ? null : \$target,
                    'tmpl'    => (empty(\$tmpl)) ? null : \$tmpl,
                ]); ?>
            <?php endif; ?>
        </div>

        <div class=\"col-xs-6 col-lg-4 va-m text-right\">
            <?php if (!empty(\$buttonHelp)): ?>
                 <div class=\"input-group-btn\">
                    <button class=\"btn btn-default btn-nospin\" data-toggle=\"modal\" data-target=\"#<?php echo \$searchId; ?>-search-help\">
                        <i class=\"fa fa-question-circle\"></i>
                    </button>
                </div>
            <?php endif; ?>
            <?php echo \$view['buttons']->renderButtons(); ?>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/list_toolbar.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/list_toolbar.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/list_toolbar.html.php");
    }
}
