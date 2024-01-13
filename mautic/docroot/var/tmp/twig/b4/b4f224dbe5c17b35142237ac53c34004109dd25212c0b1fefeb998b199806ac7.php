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

/* @bundles/PageBundle/Controller/AjaxController.php */
class __TwigTemplate_c46cdcf017dd04e05a33f9bce967e379d40fb7c27364f093c6b9c8b3889f7075 extends Template
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

namespace Mautic\\PageBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\VariantAjaxControllerTrait;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\PageBundle\\Form\\Type\\AbTestPropertiesType;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    use VariantAjaxControllerTrait;

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function getAbTestFormAction(Request \$request)
    {
        return \$this->getAbTestForm(
            \$request,
            'page',
            AbTestPropertiesType::class,
            'page_abtest_settings',
            'page',
            'MauticPageBundle:AbTest:form.html.php',
            ['MauticPageBundle:AbTest:form.html.php', 'MauticPageBundle:FormTheme\\Page']
        );
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function pageListAction(Request \$request)
    {
        \$filter    = InputHelper::clean(\$request->query->get('filter'));
        \$results   = \$this->getModel('page.page')->getLookupResults('page', \$filter);
        \$dataArray = [];

        foreach (\$results as \$r) {
            \$dataArray[] = [
                'label' => \$r['title'].\" ({\$r['id']}:{\$r['alias']})\",
                'value' => \$r['id'],
            ];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function setBuilderContentAction(Request \$request)
    {
        \$dataArray = ['success' => 0];
        \$entityId  = InputHelper::clean(\$request->request->get('entity'));
        \$session   = \$this->get('session');

        if (!empty(\$entityId)) {
            \$sessionVar = 'mautic.pagebuilder.'.\$entityId.'.content';

            // Check for an array of slots
            \$slots   = InputHelper::_(\$request->request->get('slots', [], true), 'html');
            \$content = \$session->get(\$sessionVar, []);

            if (!is_array(\$content)) {
                \$content = [];
            }

            if (!empty(\$slots)) {
                // Builder was closed so save each content
                foreach (\$slots as \$slot => \$newContent) {
                    \$content[\$slot] = \$newContent;
                }

                \$session->set(\$sessionVar, \$content);
                \$dataArray['success'] = 1;
            } else {
                // Check for a single slot
                \$newContent = InputHelper::html(\$request->request->get('content'));
                \$slot       = InputHelper::clean(\$request->request->get('slot'));

                if (!empty(\$slot)) {
                    \$content[\$slot] = \$newContent;
                    \$session->set(\$sessionVar, \$content);
                    \$dataArray['success'] = 1;
                }
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Called by parent::getBuilderTokensAction().
     *
     * @param \$query
     *
     * @return array
     */
    protected function getBuilderTokens(\$query)
    {
        /** @var \\Mautic\\PageBundle\\Model\\PageModel \$model */
        \$model = \$this->getModel('page');

        return \$model->getBuilderComponents(null, ['tokens'], \$query);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/PageBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Controller/AjaxController.php");
    }
}
