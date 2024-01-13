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

/* @bundles/CoreBundle/Views/Helper/list_actions.html.php */
class __TwigTemplate_46cea42439ee0a33df739622e48ad78ad1d52590fb5d82dc5b12c45152e2a966 extends Template
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

\$view['buttons']->reset(\$app->getRequest(), ButtonHelper::LOCATION_LIST_ACTIONS, ButtonHelper::TYPE_DROPDOWN, \$item);
include 'action_button_helper.php';

if (is_array(\$item)) {
    \$id   = \$item['id'];
    \$name = \$item['name'];
} else {
    \$id   = \$item->getId();
    \$name = \$item->\$nameGetter();
}

?>
<div class=\"input-group input-group-sm\">
    <span class=\"input-group-addon\">
        <input type=\"checkbox\" data-target=\"tbody\" data-toggle=\"selectrow\" class=\"list-checkbox\" name=\"cb<?php echo \$id; ?>\" value=\"<?php echo \$view->escape(\$id); ?>\"/>
    </span>

    <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle btn-nospin\" data-toggle=\"dropdown\">
            <i class=\"fa fa-angle-down \"></i>
        </button>
        <?php if (!empty(\$tooltip)): ?> <i class=\"fa fa-question-circle\"></i><?php endif; ?>
        <ul class=\"pull-<?php echo \$pull; ?> page-list-actions dropdown-menu\" role=\"menu\">
            <?php
            if (!empty(\$templateButtons['edit'])):
                \$view['buttons']->addButton(
                    [
                        'attr' => array_merge(
                            [
                                'class' => 'hidden-xs btn btn-default btn-sm btn-nospin',
                                'href'  => \$view['router']->path(
                                    \$actionRoute,
                                    array_merge(['objectAction' => 'edit', 'objectId' => \$id], \$query)
                                ),
                                'data-toggle' => \$editMode,
                            ],
                            \$editAttr
                        ),
                        'iconClass' => 'fa fa-pencil-square-o',
                        'btnText'   => \$view['translator']->trans('mautic.core.form.edit'),
                        'primary'   => true,
                    ]
                );
            endif;
            if (!empty(\$templateButtons['clone'])):
                \$view['buttons']->addButton(
                    [
                        'attr' => array_merge(
                            [
                                'class' => 'hidden-xs btn btn-default btn-sm btn-nospin',
                                'href'  => \$view['router']->path(
                                    \$actionRoute,
                                    array_merge(['objectAction' => 'clone', 'objectId' => \$id], \$query)
                                ),
                                'data-toggle' => 'ajax',
                            ],
                            \$editAttr
                        ),
                        'iconClass' => 'fa fa-copy',
                        'btnText'   => \$view['translator']->trans('mautic.core.form.clone'),
                        'priority'  => 200,
                    ]
                );
            endif;
            if (!empty(\$templateButtons['delete'])):
                \$view['buttons']->addButton(
                    [
                        'confirm' => [
                            'btnClass'      => false,
                            'btnText'       => \$view['translator']->trans('mautic.core.form.delete'),
                            'message'       => \$view['translator']->trans(\$translationBase.'.form.confirmdelete', ['%name%' => \$name.' ('.\$id.')']),
                            'confirmAction' => \$view['router']->path(
                                \$actionRoute,
                                array_merge(['objectAction' => 'delete', 'objectId' => \$id], \$query)
                            ),
                            'template' => 'delete',
                        ],
                        'priority' => -1,
                    ]
                );
            endif;

            echo \$view['buttons']->renderButtons();
            ?>
        </ul>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/list_actions.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/list_actions.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/list_actions.html.php");
    }
}
