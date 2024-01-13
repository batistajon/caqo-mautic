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

/* @bundles/FormBundle/Controller/AjaxController.php */
class __TwigTemplate_138c90532d35adb694d3241bfbbe5c6a7d3027f5f372f5d6af1fc3b2d9cbd492 extends Template
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

namespace Mautic\\FormBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * @param string \$name
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function reorderFieldsAction(Request \$request, \$bundle, \$name = 'fields')
    {
        if ('form' === \$name) {
            \$name = 'fields';
        }
        \$dataArray   = ['success' => 0];
        \$sessionId   = InputHelper::clean(\$request->request->get('formId'));
        \$sessionName = 'mautic.form.'.\$sessionId.'.'.\$name.'.modified';
        \$session     = \$this->get('session');
        \$orderName   = ('fields' == \$name) ? 'mauticform' : 'mauticform_action';
        \$order       = InputHelper::clean(\$request->request->get(\$orderName));
        \$components  = \$session->get(\$sessionName);

        if (!empty(\$order) && !empty(\$components)) {
            \$components = array_replace(array_flip(\$order), \$components);
            \$session->set(\$sessionName, \$components);
            \$dataArray['success'] = 1;
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function reorderActionsAction(Request \$request)
    {
        return \$this->reorderFieldsAction(\$request, 'actions');
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function updateFormFieldsAction(Request \$request)
    {
        \$formId     = (int) \$request->request->get('formId');
        \$dataArray  = ['success' => 0];
        \$model      = \$this->getModel('form');
        \$entity     = \$model->getEntity(\$formId);
        \$formFields = empty(\$entity) ? [] : \$entity->getFields();
        \$fields     = [];

        foreach (\$formFields as \$field) {
            if ('button' != \$field->getType()) {
                \$properties = \$field->getProperties();
                \$options    = [];

                if (!empty(\$properties['list']['list'])) {
                    //If the field is a SELECT field then the data gets stored in [list][list]
                    \$optionList = \$properties['list']['list'];
                } elseif (!empty(\$properties['optionlist']['list'])) {
                    //If the field is a radio or a checkbox then it will be stored in [optionlist][list]
                    \$optionList = \$properties['optionlist']['list'];
                }
                if (!empty(\$optionList)) {
                    foreach (\$optionList as \$listItem) {
                        if (is_array(\$listItem) && isset(\$listItem['value']) && isset(\$listItem['label'])) {
                            //The select box needs values to be [value] => label format so make sure we have that style then put it in
                            \$options[\$listItem['value']] = \$listItem['label'];
                        } elseif (!is_array(\$listItem)) {
                            //Keeping for BC
                            \$options[] = \$listItem;
                        }
                    }
                }

                \$fields[] = [
                    'id'      => \$field->getId(),
                    'label'   => \$field->getLabel(),
                    'alias'   => \$field->getAlias(),
                    'type'    => \$field->getType(),
                    'options' => \$options,
                ];

                // Be sure to not pollute the symbol table.
                unset(\$optionList);
            }
        }

        \$dataArray['fields']  = \$fields;
        \$dataArray['success'] = 1;

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Ajax submit for forms.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function submitAction()
    {
        \$response     = \$this->forwardWithPost('MauticFormBundle:Public:submit', \$this->request->request->all(), [], ['ajax' => true]);
        \$responseData = json_decode(\$response->getContent(), true);
        \$success      = (!in_array(\$response->getStatusCode(), [404, 500]) && empty(\$responseData['errorMessage'])
            && empty(\$responseData['validationErrors']));

        \$message = '';
        \$type    = '';
        if (isset(\$responseData['successMessage'])) {
            \$message = \$responseData['successMessage'];
            \$type    = 'notice';
        } elseif (isset(\$responseData['errorMessage'])) {
            \$message = \$responseData['errorMessage'];
            \$type    = 'error';
        }

        \$data = array_merge(\$responseData, ['message' => \$message, 'type' => \$type, 'success' => \$success]);

        return \$this->sendJsonResponse(\$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/FormBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Controller/AjaxController.php");
    }
}
