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

/* @bundles/LeadBundle/Views/Field/properties_number.html.php */
class __TwigTemplate_f87fe74d678e568c2a050adb373bdbc50bf8ed4597b951348e5cfd1ab08b6ae4 extends Template
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

use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\NumberToLocalizedStringTransformer;

\$roundMode = (isset(\$roundMode)) ? \$roundMode : '';
\$scale     = (isset(\$scale)) ? \$scale : '';

\$options = [
    NumberToLocalizedStringTransformer::ROUND_UP        => 'mautic.lead.field.form.number.roundup',
    NumberToLocalizedStringTransformer::ROUND_DOWN      => 'mautic.lead.field.form.number.rounddown',
    NumberToLocalizedStringTransformer::ROUND_HALF_UP   => 'mautic.lead.field.form.number.roundhalfup',
    NumberToLocalizedStringTransformer::ROUND_HALF_EVEN => 'mautic.lead.field.form.number.roundhalfeven',
    NumberToLocalizedStringTransformer::ROUND_HALF_DOWN => 'mautic.lead.field.form.number.roundhalfdown',
];
?>

<div class=\"number\">
    <div class=\"row\">
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <label class=\"control-label\"><?php echo \$view['translator']->trans('mautic.lead.field.form.properties.numberrounding'); ?></label>
            <div class=\"input-group\">
                <select class=\"form-control not-chosen\" autocomplete=\"false\" name=\"leadfield[properties][roundmode]\">
                    <?php foreach (\$options as \$v => \$l): ?>
                    <option value=\"<?php echo \$view->escape(\$v); ?>\"<?php if (\$roundMode == \$v) {
    echo ' selected=\"selected\"';
} ?>>
                        <?php echo \$view['translator']->trans(\$l); ?>
                    </option>
                    <?php endforeach; ?>
                </select>

                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-container=\"body\"
                      data-placement=\"top\" data-original-title=\"<?php echo \$view['translator']->trans('mautic.lead.field.help.numberrounding'); ?>\">
                    <i class=\"fa fa-question-circle\"></i>
                </span>
            </div>
        </div>
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <label class=\"control-label\"><?php echo \$view['translator']->trans('mautic.lead.field.form.properties.numberprecision'); ?></label>
            <div class=\"input-group\">
                <input autocomplete=\"false\" name=\"leadfield[properties][scale]\" class=\"form-control\" value=\"<?php echo \$view->escape(\$scale); ?>\" type=\"number\" />
                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-container=\"body\"
                      data-placement=\"top\" data-original-title=\"<?php echo \$view['translator']->trans('mautic.lead.field.help.numberprecision'); ?>\">
                    <i class=\"fa fa-question-circle\"></i>
                </span>
            </div>
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
        return "@bundles/LeadBundle/Views/Field/properties_number.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Field/properties_number.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Field/properties_number.html.php");
    }
}
