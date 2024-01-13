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

/* @bundles/CoreBundle/Views/Slots/saveprefsbutton.html.php */
class __TwigTemplate_4cce834dc6e19528b8ca116c55fd61836e3c67c130228481373b6d351cbd35f5 extends Template
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

\$style      = isset(\$saveprefsbutton['style']) ? \$saveprefsbutton['style'] : 'display:inline-block;text-decoration:none;border-color:#4e5d9d;border-width: 10px 20px;border-style:solid; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background-color: #4e5d9d; display: inline-block;font-size: 16px; color: #ffffff;';
\$background = isset(\$saveprefsbutton['background']) ? \$saveprefsbutton['background'] : '';

if (isset(\$form)) {
    // add form tag
    echo '<script src=\"'.\$view['assets']->getUrl('app/bundles/PageBundle/Assets/js/prefcenter.js').'\"></script>';
}
?>
    <a href=\"javascript:void(null)\"
        class=\"button btn btn-default btn-save\"
        <?php if (isset(\$form)) : ?>onclick=\"saveUnsubscribePreferences('<?php echo \$form->vars['id']; ?>')\"<?php endif; ?>
        style=\"<?php echo \$style; ?>\"
        background=\"<?php echo \$background; ?>\">
        <?php echo \$view['translator']->trans('mautic.page.form.saveprefs'); ?>
    </a>
    <div style=\"clear:both\"></div>
<?php
if (isset(\$form)) {
    unset(\$form['subscribed_channels'], \$form['buttons']['save'], \$form['buttons']['cancel']);
    if (!\$showContactCategories) {
        unset(\$form['global_categories']);
    }
    if (!\$showContactSegments) {
        unset(\$form['lead_lists']);
    }
    if (!\$showContactPauseDates) {
        unset(\$form['lead_channels']['contact_pause_start_date_email'], \$form['lead_channels']['contact_pause_end_date_email']);
    }
    if (!\$showContactFrequency) {
        unset(\$form['lead_channels']['frequency_number_email'], \$form['lead_channels']['frequency_time_email']);
    }
    if (!\$showContactPreferredChannels) {
        unset(\$form['lead_channels']['preferred_channel']);
    }
    unset(\$form['lead_channels']);
    // add close form tag before the custom tag to prevent cascading forms
    // in case there is already an unsubscribe form on the page
    // that's why we can't use the bodyclose customdeclaration
    if (isset(\$custom_tag)) {
        echo \$custom_tag;
        \$view['assets']->addCustomDeclaration(\$view['form']->end(\$form), 'customTag');
    } else {
        \$view['assets']->addCustomDeclaration(\$view['form']->end(\$form), 'bodyClose');
    }
}
?>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Slots/saveprefsbutton.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Slots/saveprefsbutton.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Slots/saveprefsbutton.html.php");
    }
}
