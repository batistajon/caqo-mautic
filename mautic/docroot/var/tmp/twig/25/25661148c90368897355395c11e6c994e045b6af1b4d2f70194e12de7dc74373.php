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

/* @bundles/PageBundle/Controller/Api/PageApiController.php */
class __TwigTemplate_6ba78021dbdd8128c7da95f582a784b7d1c250df1f018c4c7587309a80a84513 extends Template
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

namespace Mautic\\PageBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class PageApiController.
 */
class PageApiController extends CommonApiController
{
    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('page');
        \$this->entityClass      = Page::class;
        \$this->entityNameOne    = 'page';
        \$this->entityNameMulti  = 'pages';
        \$this->serializerGroups = ['pageDetails', 'categoryList', 'publishDetails'];
        \$this->dataInputMasks   = ['customHtml' => 'html'];

        parent::initialize(\$event);
    }

    /**
     * Obtains a list of pages.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function getEntitiesAction()
    {
        //get parent level only
        \$this->listFilters[] = [
            'column' => 'p.variantParent',
            'expr'   => 'isNull',
        ];

        \$this->listFilters[] = [
            'column' => 'p.translationParent',
            'expr'   => 'isNull',
        ];

        return parent::getEntitiesAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function preSerializeEntity(&\$entity, \$action = 'view')
    {
        \$entity->url = \$this->model->generateUrl(\$entity);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Controller/Api/PageApiController.php";
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
        return new Source("", "@bundles/PageBundle/Controller/Api/PageApiController.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Controller/Api/PageApiController.php");
    }
}
