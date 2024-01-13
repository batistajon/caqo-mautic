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

/* @bundles/PageBundle/Views/FormTheme/Point/pointaction_urlhit_widget.html.php */
class __TwigTemplate_9ddee60a77a17d57eaa9c33155b1c5267f72e477ea857bb23cc36c17501fe471 extends Template
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
\$timeFrames = [
    'i' => \$view['translator']->trans('mautic.core.time.minutes'),
    'H' => \$view['translator']->trans('mautic.core.time.hours'),
    'd' => \$view['translator']->trans('mautic.core.time.days'),
];

?>

<div class=\"row\">
    <div class=\"col-xs-12\">
        <?php echo \$view['form']->row(\$form['page_url']); ?>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12\">
        <?php echo \$view['form']->row(\$form['page_hits']); ?>
    </div>
    <!-- <div class=\"col-xs-6\">
        <?php //echo \$view['form']->row(\$form['first_time']);?>
    </div> -->
</div>

<div class=\"row\">
    <div class=\"col-xs-12 form-group \">
        <?php echo \$view['form']->label(\$form['returns_within']); ?>
        <div class=\"input-group\">
            <?php echo \$view['form']->widget(\$form['returns_within']); ?>
            <?php \$default = \$form['returns_within_unit']->vars['data']; ?>
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"returns_within_label\"><?php echo \$timeFrames[\$default]; ?></span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">
                    <?php foreach (\$timeFrames as \$abbr => \$label): ?>
                    <li><a href=\"#\" data-time=\"<?php echo \$abbr; ?>\" data-field=\"returns_within\"><?php echo \$label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php echo \$view['form']->errors(\$form['returns_within']); ?>
        <?php echo \$view['form']->widget(\$form['returns_within_unit']); ?>
    </div>

    <div class=\"col-xs-12 form-group \">
        <?php echo \$view['form']->label(\$form['returns_after']); ?>
        <div class=\"input-group\">
            <?php echo \$view['form']->widget(\$form['returns_after']); ?>
            <?php \$default = \$form['returns_after_unit']->vars['data']; ?>
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"returns_after_label\"><?php echo \$timeFrames[\$default]; ?></span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">
                    <?php foreach (\$timeFrames as \$abbr => \$label): ?>
                        <li><a href=\"#\" data-time=\"<?php echo \$abbr; ?>\" data-field=\"returns_after\"><?php echo \$label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php echo \$view['form']->errors(\$form['returns_after']); ?>
        <?php echo \$view['form']->widget(\$form['returns_after_unit']); ?>
    </div>


    <div class=\"col-xs-12 form-group \">
        <?php echo \$view['form']->label(\$form['accumulative_time']); ?>
        <div class=\"input-group\">
            <?php echo \$view['form']->widget(\$form['accumulative_time']); ?>
            <?php \$default = \$form['accumulative_time_unit']->vars['data']; ?>
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"accumulative_time_label\"><?php echo \$timeFrames[\$default]; ?></span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">
                    <?php foreach (\$timeFrames as \$abbr => \$label): ?>
                        <li><a href=\"#\" data-time=\"<?php echo \$abbr; ?>\" data-field=\"accumulative_time\"><?php echo \$label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php echo \$view['form']->errors(\$form['accumulative_time']); ?>
        <?php echo \$view['form']->widget(\$form['accumulative_time_unit']); ?>
    </div>
</div>

<script>
    mQuery('.time-dropdown li a').click(function (e) {
        e.preventDefault();
        var selected = mQuery(this).data('time');
        var label    = mQuery(this).html();
        var field    = mQuery(this).data('field');

        mQuery('#point_properties_' + field + '_unit').val(selected);
        mQuery('.' + field + '_label').html(label);
    });
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/FormTheme/Point/pointaction_urlhit_widget.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/FormTheme/Point/pointaction_urlhit_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/FormTheme/Point/pointaction_urlhit_widget.html.php");
    }
}
