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

/* @bundles/CoreBundle/Views/Slots/preferredchannel.html.php */
class __TwigTemplate_bcc57641da89063aab73ced1edd8cdb70db6a00d6acb8410b913293a7677fe8d extends Template
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
<?php if (isset(\$form)) : ?>
    <?php if (\$showContactPreferredChannels):?>
        <div class=\"preferred_channel text-left\"><?php echo \$view['form']->row(\$form['lead_channels']['preferred_channel']); ?></div>
        <?php
    else:
        unset(\$form['lead_channels']['preferred_channel']);
    endif;
else :
?>
<div class=\"preferred_channel text-left\">
    <div class=\"row\">
        <div class=\"form-group col-xs-12 \">
            <label class=\"control-label\">
                <?php echo \$view['translator']->trans('mautic.lead.list.frequency.preferred.channel'); ?>
            </label>
            <div class=\"choice-wrapper\">
                <select class=\"form-control\">
                    <option value=\"email\" selected=\"selected\"><?php echo \$view['translator']->trans('mautic.email.email'); ?></option>
                </select></div>
        </div>
    </div>
</div>
<?php endif; ?>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Slots/preferredchannel.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Slots/preferredchannel.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Slots/preferredchannel.html.php");
    }
}
