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

/* @bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php */
class __TwigTemplate_97feece9d828e1d01e432e4d39138027218311f6a932984253cf0122a1ae7a6f extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

trait VariantAjaxControllerTrait
{
    /**
     * @param string \$modelName
     * @param string \$abSettingsFormName
     * @param string \$abSettingsFormBlockPrefix
     * @param string \$parentFormName
     * @param string \$abFormTemplate
     * @param array  \$formThemes
     *
     * @return mixed
     */
    private function getAbTestForm(Request \$request, \$modelName, \$abSettingsFormName, \$abSettingsFormBlockPrefix, \$parentFormName, \$abFormTemplate, \$formThemes = [])
    {
        \$dataArray = [
            'success' => 0,
            'html'    => '',
        ];
        \$type = InputHelper::clean(\$request->request->get('abKey'));
        \$id   = (int) \$request->request->get('id');

        if (!empty(\$type)) {
            //get the HTML for the form
            \$model  = \$this->getModel(\$modelName);
            \$entity = \$model->getEntity(\$id);

            \$abTestComponents = \$model->getBuilderComponents(\$entity, 'abTestWinnerCriteria');
            \$abTestSettings   = \$abTestComponents['criteria'];

            if (isset(\$abTestSettings[\$type])) {
                \$html     = '';
                \$formType = (!empty(\$abTestSettings[\$type]['formType'])) ? \$abTestSettings[\$type]['formType'] : '';
                if (!empty(\$formType)) {
                    \$formOptions = (!empty(\$abTestSettings[\$type]['formTypeOptions'])) ? \$abTestSettings[\$type]['formTypeOptions'] : [];
                    \$form        = \$this->get('form.factory')->create(
                        \$abSettingsFormName,
                        [],
                        ['formType' => \$formType, 'formTypeOptions' => \$formOptions]
                    );
                    \$html = \$this->renderView(
                        \$abFormTemplate,
                        [
                            'form' => \$this->setFormTheme(\$form, \$formThemes),
                        ]
                    );
                }

                \$html = str_replace(
                    [
                        \"{\$abSettingsFormBlockPrefix}[\",
                        \"{\$abSettingsFormBlockPrefix}_\",
                        \$abSettingsFormBlockPrefix,
                    ],
                    [
                        \"{\$parentFormName}[variantSettings][\",
                        \"{\$parentFormName}_variantSettings_\",
                        \$parentFormName,
                    ],
                    \$html
                );
                \$dataArray['html']    = \$html;
                \$dataArray['success'] = 1;
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php");
    }
}
