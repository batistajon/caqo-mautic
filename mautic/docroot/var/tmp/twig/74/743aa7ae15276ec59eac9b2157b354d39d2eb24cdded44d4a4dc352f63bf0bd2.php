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

/* @bundles/PageBundle/Views/Page/form.html.php */
class __TwigTemplate_42830acc5f18f7cb7b97af29273755492cb3a94a996ae7f0567a4ef5ddc4fe50 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'page');
\$isExisting = \$activePage->getId();

\$variantParent = \$activePage->getVariantParent();
\$subheader     = '';
if (\$variantParent) {
    \$subheader = '<div><span class=\"small\">'.\$view['translator']->trans('mautic.core.variant_of', [
                    '%name%'   => \$activePage->getTitle(),
                    '%parent%' => \$variantParent->getTitle(),
                ]).'</span></div>';
} elseif (\$activePage->isVariant(false)) {
    \$subheader = '<div><span class=\"small\">'.\$view['translator']->trans('mautic.page.form.has_variants').'</span></div>';
}

\$header = \$isExisting ?
    \$view['translator']->trans('mautic.page.header.edit',
        ['%name%' => \$activePage->getTitle()]) :
    \$view['translator']->trans('mautic.page.header.new');

\$view['slots']->set('headerTitle', \$header.\$subheader);

\$template = \$form['template']->vars['data'];

\$attr                               = \$form->vars['attr'];
\$attr['data-submit-callback-async'] = 'clearThemeHtmlBeforeSave';

\$isCodeMode = ('mautic_code_mode' === \$activePage->getTemplate());

if (!isset(\$previewUrl)) {
    \$previewUrl = '';
}

?>

<?php echo \$view['form']->start(\$form, ['attr' => \$attr]); ?>
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 bg-white height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- tabs controls -->
                <ul class=\"bg-auto nav nav-tabs pr-md pl-md\">
                    <li class=\"active\">
                        <a href=\"#theme-container\" role=\"tab\" data-toggle=\"tab\">
                            <?php echo \$view['translator']->trans('mautic.core.form.theme'); ?>
                        </a>
                    </li>
                    <li id=\"advanced-tab\" class=\"hidden\">
                        <a href=\"#advanced-container\" role=\"tab\" data-toggle=\"tab\">
                            <?php echo \$view['translator']->trans('mautic.core.advanced'); ?>
                        </a>
                    </li>
                </ul>

                <!--/ tabs controls -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"theme-container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <?php echo \$view['form']->row(\$form['template']); ?>
                            </div>
                        </div>

                        <?php echo \$view->render('MauticCoreBundle:Helper:theme_select.html.php', [
                            'type'   => 'page',
                            'themes' => \$themes,
                            'active' => \$form['template']->vars['value'],
                        ]); ?>
                    </div>

                    <div class=\"tab-pane fade bdr-w-0\" id=\"advanced-container\">
                        <br>
                        <div class=\"row hidden\" id=\"custom-html-row\">
                            <div class=\"col-md-12\">
                                <?php echo \$view['form']->label(\$form['customHtml']); ?>
                                <?php echo \$view['form']->widget(\$form['customHtml']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 bg-white height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <?php echo \$view['form']->row(\$form['title']); ?>
            <?php if (!\$isVariant): ?>
            <?php echo \$view['form']->row(\$form['alias']); ?>
            <?php else: ?>
            <?php echo \$view['form']->row(\$form['template']); ?>
            <?php endif; ?>
            <?php
            if (\$isVariant):
            echo \$view['form']->row(\$form['variantSettings']);

            else:
            echo \$view['form']->row(\$form['category']);
            echo \$view['form']->row(\$form['language']);
            echo \$view['form']->row(\$form['translationParent']);
            endif;

            echo \$view['form']->row(\$form['isPublished']);
            if ((\$permissions['page:preference_center:editown'] ||
                    \$permissions['page:preference_center:editother']) &&
                        !\$activePage->isVariant()) {
                echo \$view['form']->row(\$form['isPreferenceCenter']);
            }
            echo \$view['form']->row(\$form['publishUp']);
            echo \$view['form']->row(\$form['publishDown']);

            if (!\$isVariant):
            echo \$view['form']->row(\$form['redirectType']);
            echo \$view['form']->row(\$form['redirectUrl']);
            endif;
            echo \$view['form']->row(\$form['noIndex']);
            ?>
            <div class=\"template-fields<?php echo (!\$template) ? ' hide\"' : ''; ?>\">
                <?php echo \$view['form']->row(\$form['metaDescription']); ?>
            </div>
            <div class=\"template-fields<?php echo (!\$template) ? ' hide\"' : ''; ?>\">
                <?php echo \$view['form']->row(\$form['headScript']); ?>
            </div>
            <div class=\"template-fields<?php echo (!\$template) ? ' hide\"' : ''; ?>\">
                <?php echo \$view['form']->row(\$form['footerScript']); ?>
            </div>
            <div class=\"hide\">
                <?php echo \$view['form']->rest(\$form); ?>
            </div>
        </div>
    </div>
</div>
<?php echo \$view['form']->end(\$form); ?>

<?php echo \$view->render('MauticCoreBundle:Helper:builder.html.php', [
    'type'          => 'page',
    'isCodeMode'    => \$isCodeMode,
    'sectionForm'   => \$sectionForm,
    'builderAssets' => \$builderAssets,
    'slots'         => \$slots,
    'sections'      => \$sections,
    'objectId'      => \$activePage->getSessionId(),
    'previewUrl'    => \$previewUrl,
]); ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/Page/form.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/Page/form.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/Page/form.html.php");
    }
}
