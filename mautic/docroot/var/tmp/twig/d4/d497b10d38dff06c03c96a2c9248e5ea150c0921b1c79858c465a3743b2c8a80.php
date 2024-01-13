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

/* @bundles/FormBundle/Views/Builder/form.html.php */
class __TwigTemplate_20ec070f944f89f08b3b4ee695e24c312120ad866caeda52e99fbe400305b6da extends Template
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
/** @var \\Mautic\\FormBundle\\Entity\\Form \$form */
\$formName = '_'.\$form->generateFormName().(isset(\$suffix) ? \$suffix : '');
if (!isset(\$fields)) {
    \$fields = \$form->getFields();
}
\$pageCount = 1;

if (!isset(\$inBuilder)) {
    \$inBuilder = false;
}

if (!isset(\$action)) {
    \$action = \$view['router']->url('mautic_form_postresults', ['formId' => \$form->getId()]);
}

if (!isset(\$theme)) {
    \$theme = '';
}

if (!isset(\$contactFields)) {
    \$contactFields = \$companyFields = [];
}

if (!isset(\$style)) {
    \$style = '';
}

if (!isset(\$isAjax)) {
    \$isAjax = true;
}

if (!isset(\$submissions)) {
    \$submissions = null;
}

if (!isset(\$lead)) {
    \$lead = null;
}
?>

<?php echo \$style; ?>
<style type=\"text/css\" scoped>
    .mauticform-field-hidden { display:none }
</style>

<div id=\"mauticform_wrapper<?php echo \$formName; ?>\" class=\"mauticform_wrapper\">
    <form autocomplete=\"false\" role=\"form\" method=\"post\" action=\"<?php echo  \$action; ?>\" id=\"mauticform<?php echo \$formName; ?>\" <?php if (\$isAjax): ?> data-mautic-form=\"<?php echo ltrim(\$formName, '_'); ?>\"<?php endif; ?> enctype=\"multipart/form-data\" <?php echo \$form->getFormAttributes(); ?>>
        <div class=\"mauticform-error\" id=\"mauticform<?php echo \$formName; ?>_error\"></div>
        <div class=\"mauticform-message\" id=\"mauticform<?php echo \$formName; ?>_message\"></div>
        <div class=\"mauticform-innerform\">
            <?php
            \$displayManager = new \\Mautic\\FormBundle\\ProgressiveProfiling\\DisplayManager(
                \$form,
                !empty(\$viewOnlyFields) ? \$viewOnlyFields : []
            );
            /** @var \\Mautic\\FormBundle\\Entity\\Field \$f */
            foreach (\$fields as \$fieldId => \$f):
                if (isset(\$formPages['open'][\$fieldId])):
                    // Start a new page
                    \$lastFieldAttribute = (\$lastFormPage === \$fieldId) ? ' data-mautic-form-pagebreak-lastpage=\"true\"' : '';
                    echo \"\\n          <div class=\\\"mauticform-page-wrapper mauticform-page-\$pageCount\\\" data-mautic-form-page=\\\"\$pageCount\\\"\$lastFieldAttribute>\\n\";
                endif;

                if (!\$f->getParent() && \$f->showForContact(\$submissions, \$lead, \$form, \$displayManager)):
                    if (\$f->isCustom()):
                        if (!isset(\$fieldSettings[\$f->getType()])):
                            continue;
                        endif;
                        \$params = \$fieldSettings[\$f->getType()];
                        \$f->setCustomParameters(\$params);

                        \$template = \$params['template'];
                    else:
                        if (!\$f->isAlwaysDisplay() && !\$f->getShowWhenValueExists() && \$f->getLeadField() && \$f->getIsAutoFill() && \$lead && !empty(\$lead->getFieldValue(\$f->getLeadField()))) {
                            \$f->setType('hidden');
                        } else {
                            \$displayManager->increaseDisplayedFields(\$f);
                        }
                        \$template = 'MauticFormBundle:Field:'.\$f->getType().'.html.php';
                    endif;

                    echo \$view->render(
                        \$theme.\$template,
                        [
                            'field'         => \$f->convertToArray(),
                            'id'            => \$f->getAlias(),
                            'formName'      => \$formName,
                            'fieldPage'     => (\$pageCount - 1), // current page,
                            'contactFields' => \$contactFields,
                            'companyFields' => \$companyFields,
                            'inBuilder'     => \$inBuilder,
                            'fields'        => \$fields,
                        ]
                    );
                endif;
                \$parentField = \$f;
                foreach (\$fields as \$fieldId2 => \$f):
                    if ('hidden' !== \$parentField->getType() && \$f->getParent() == \$parentField->getId()):
                    if (\$f->isCustom()):
                        if (!isset(\$fieldSettings[\$f->getType()])):
                            continue;
                        endif;
                        \$params = \$fieldSettings[\$f->getType()];
                        \$f->setCustomParameters(\$params);

                        \$template = \$params['template'];
                    else:
                        \$template = 'MauticFormBundle:Field:'.\$f->getType().'.html.php';
                    endif;

                    echo \$view->render(
                        \$theme.\$template,
                        [
                            'field'         => \$f->convertToArray(),
                            'id'            => \$f->getAlias(),
                            'formName'      => \$formName,
                            'fieldPage'     => (\$pageCount - 1), // current page,
                            'contactFields' => \$contactFields,
                            'companyFields' => \$companyFields,
                            'inBuilder'     => \$inBuilder,
                            'fields'        => \$fields,
                        ]
                    );
                    endif;
                endforeach;

                if (isset(\$formPages) && isset(\$formPages['close'][\$fieldId])):
                    // Close the page
                    echo \"\\n            </div>\\n\";
                    ++\$pageCount;
                endif;

            endforeach;
            ?>
        </div>

        <input type=\"hidden\" name=\"mauticform[formId]\" id=\"mauticform<?php echo \$formName; ?>_id\" value=\"<?php echo \$view->escape(\$form->getId()); ?>\"/>
        <input type=\"hidden\" name=\"mauticform[return]\" id=\"mauticform<?php echo \$formName; ?>_return\" value=\"\"/>
        <input type=\"hidden\" name=\"mauticform[formName]\" id=\"mauticform<?php echo \$formName; ?>_name\" value=\"<?php echo \$view->escape(ltrim(\$formName, '_')); ?>\"/>

        <?php echo (isset(\$formExtra)) ? \$formExtra : ''; ?>
</form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Builder/form.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Builder/form.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Builder/form.html.php");
    }
}
