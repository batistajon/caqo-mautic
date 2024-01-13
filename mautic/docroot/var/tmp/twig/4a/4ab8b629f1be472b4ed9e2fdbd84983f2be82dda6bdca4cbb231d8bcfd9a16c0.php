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

/* @bundles/StageBundle/Controller/AjaxController.php */
class __TwigTemplate_cf1afa37741d77fc1882dc2ec7328609672a239634a722754eb993c420cbc939 extends Template
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

namespace Mautic\\StageBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\StageBundle\\Form\\Type\\StageActionType;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function getActionFormAction(Request \$request)
    {
        \$dataArray = [
            'success' => 0,
            'html'    => '',
        ];
        \$type = InputHelper::clean(\$request->request->get('actionType'));

        if (!empty(\$type)) {
            //get the HTML for the form
            /** @var \\Mautic\\StageBundle\\Model\\StageModel \$model */
            \$model   = \$this->getModel('stage');
            \$actions = \$model->getStageActions();

            if (isset(\$actions['actions'][\$type])) {
                \$themes = ['MauticStageBundle:FormTheme\\Action'];
                if (!empty(\$actions['actions'][\$type]['formTheme'])) {
                    \$themes[] = \$actions['actions'][\$type]['formTheme'];
                }
                \$formType        = (!empty(\$actions['actions'][\$type]['formType'])) ? \$actions['actions'][\$type]['formType'] : 'genericstage_settings';
                \$formTypeOptions = (!empty(\$actions['actions'][\$type]['formTypeOptions'])) ? \$actions['actions'][\$type]['formTypeOptions'] : [];

                \$form = \$this->get('form.factory')->create(StageActionType::class, [], ['formType' => \$formType, 'formTypeOptions' => \$formTypeOptions]);
                \$html = \$this->renderView('MauticStageBundle:Stage:actionform.html.php', [
                    'form' => \$this->setFormTheme(\$form, 'MauticStageBundle:Stage:actionform.html.php', \$themes),
                ]);

                \$html                 = str_replace('stageaction', 'stage', \$html);
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
        return "@bundles/StageBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/StageBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Controller/AjaxController.php");
    }
}
