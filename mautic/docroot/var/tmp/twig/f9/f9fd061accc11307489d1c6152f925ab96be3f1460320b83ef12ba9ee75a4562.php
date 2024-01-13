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

/* @bundles/PointBundle/Controller/AjaxController.php */
class __TwigTemplate_ee539b987584c8de7142644b9249570e967649f5a453e7ab3af0a6f8b3410922 extends Template
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

namespace Mautic\\PointBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\PointBundle\\Form\\Type\\GenericPointSettingsType;
use Mautic\\PointBundle\\Form\\Type\\PointActionType;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function reorderTriggerEventsAction(Request \$request)
    {
        \$dataArray   = ['success' => 0];
        \$session     = \$this->get('session');
        \$triggerId   = InputHelper::clean(\$request->request->get('triggerId'));
        \$sessionName = 'mautic.point.'.\$triggerId.'.triggerevents.modified';
        \$order       = InputHelper::clean(\$request->request->get('triggerEvent'));
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
    protected function getActionFormAction(Request \$request)
    {
        \$dataArray = [
            'success' => 0,
            'html'    => '',
        ];
        \$type = InputHelper::clean(\$request->request->get('actionType'));

        if (!empty(\$type)) {
            //get the HTML for the form
            /** @var \\Mautic\\PointBundle\\Model\\PointModel \$model */
            \$model   = \$this->getModel('point');
            \$actions = \$model->getPointActions();

            if (isset(\$actions['actions'][\$type])) {
                \$themes = ['MauticPointBundle:FormTheme\\Action'];
                if (!empty(\$actions['actions'][\$type]['formTheme'])) {
                    \$themes[] = \$actions['actions'][\$type]['formTheme'];
                }

                \$formType        = (!empty(\$actions['actions'][\$type]['formType'])) ? \$actions['actions'][\$type]['formType'] : GenericPointSettingsType::class;
                \$formTypeOptions = (!empty(\$actions['actions'][\$type]['formTypeOptions'])) ? \$actions['actions'][\$type]['formTypeOptions'] : [];
                \$form            = \$this->get('form.factory')->create(PointActionType::class, [], ['formType' => \$formType, 'formTypeOptions' => \$formTypeOptions]);
                \$html            = \$this->renderView('MauticPointBundle:Point:actionform.html.php', [
                    'form' => \$this->setFormTheme(\$form, 'MauticPointBundle:Point:actionform.html.php', \$themes),
                ]);

                //replace pointaction with point
                \$html                 = str_replace('pointaction', 'point', \$html);
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
        return "@bundles/PointBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/PointBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Controller/AjaxController.php");
    }
}
