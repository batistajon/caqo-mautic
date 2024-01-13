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

/* @bundles/CoreBundle/Views/Helper/list_filters.html.php */
class __TwigTemplate_ebd44e2846b3f7c612196039afd36997fd2f6c207294a1e2a00120e9366d58d8 extends Template
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
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php if (!empty(\$filters)) : ?>
    <div class=\"form-group\">
        <?php
        foreach (\$filters as \$filterName => \$filter):

        \$filterName = \$view['translator']->trans(\$filterName);
        \$attr       = [
                'id=\"'.\$filterName.'\"',
                'name=\"'.\$filterName.'\"',
            ];
        if (!empty(\$filter['multiple'])) {
            \$attr[] = 'multiple';
        }

        if (!empty(\$filter['placeholder'])) {
            \$attr[] = 'data-placeholder=\"'.\$filter['placeholder'].'\"';
        } else {
            \$attr[] = 'data-placeholder=\"'.\$view['translator']->trans('mautic.core.list.filter').'\"';
        }

        if (!empty(\$filter['onchange'])) {
            \$attr[] = 'onchange=\"'.\$filter['onchange'].'\"';
        } else {
            \$attr[] = 'data-toggle=\"listfilter\"';
            \$attr[] = 'data-target=\"'.(!empty(\$target) ? \$target : '.page-list').'\"';
        }

        \$attr[] = 'data-tmpl=\"'.(!empty(\$tmpl) ? \$tmpl : 'list').'\"';

        if (!empty(\$filter['prefix-exceptions'])) {
            \$attr[] = 'data-prefix-exceptions=\"'.implode(',', \$filter['prefix-exceptions']).'\"';
        }
        ?>
        <select <?php echo implode(' ', \$attr); ?>>
            <?php if (isset(\$filter['groups'])): ?>
            <?php foreach (\$filter['groups'] as \$groupLabel => \$groupFilter): ?>
            <optgroup label=\"<?php echo \$view['translator']->trans(\$groupLabel); ?>\"<?php if (isset(\$groupFilter['prefix'])) {
            echo ' data-prefix=\"'.\$groupFilter['prefix'].'\"';
        } ?>>
                <?php if (isset(\$groupFilter['options'])): ?>
                <?php foreach (\$groupFilter['options'] as \$value => \$label):
                    if (is_array(\$label)):
                        \$value = (!empty(\$label['value'])) ? \$label['value'] : \$label['id'];
                        \$label = (!empty(\$label['label'])) ? \$label['label'] : (!empty(\$label['title']) ? \$label['title'] : \$label['name']);
                    endif;

                    \$selected = (isset(\$groupFilter['values']) && in_array(\$value, \$groupFilter['values'])) ? ' selected' : '';

                    if (isset(\$groupFilter['prefix'])) {
                        \$value = \$groupFilter['prefix'].':'.\$value;
                    }

                ?>
                <option value=\"<?php echo \$view->escape(\$value); ?>\"<?php echo \$selected; ?>><?php echo \$label; ?></option>
                <?php endforeach; ?>
                <?php endif; ?>
            </optgroup>
            <?php endforeach; ?>

            <?php elseif (isset(\$filter['options'])): ?>
            <?php foreach (\$filter['options'] as \$value => \$label):
                if (is_array(\$label)):
                    \$value = (!empty(\$label['value'])) ? \$label['value'] : \$label['id'];
                    \$label = (!empty(\$label['label'])) ? \$label['label'] : (!empty(\$label['title']) ? \$label['title'] : \$label['name']);
                endif;

                \$selected = (isset(\$filter['values']) && in_array(\$value, \$filter['values'])) ? ' selected' : '';
                ?>
                <option value=\"<?php echo \$view->escape(\$value); ?>\"<?php echo \$selected; ?>>
                    <?php echo empty(\$filter['translateLabels']) ? \$label : \$view['translator']->trans(\$label); ?>
                </option>
            <?php endforeach; ?>
            <?php endif; ?>
        </select>
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
        return "@bundles/CoreBundle/Views/Helper/list_filters.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/list_filters.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/list_filters.html.php");
    }
}
