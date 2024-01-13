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

/* @bundles/CategoryBundle/Controller/Api/CategoryApiController.php */
class __TwigTemplate_a90927180482882d620ba1c8bfaa781a54d82c7a60c9685ad175ba030c6fdbac extends Template
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

namespace Mautic\\CategoryBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\CategoryBundle\\Entity\\Category;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class CategoryApiController.
 */
class CategoryApiController extends CommonApiController
{
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('category');
        \$this->entityClass      = 'Mautic\\CategoryBundle\\Entity\\Category';
        \$this->entityNameOne    = 'category';
        \$this->entityNameMulti  = 'categories';
        \$this->serializerGroups = ['categoryDetails'];

        parent::initialize(\$event);
    }

    /**
     * Checks if user has permission to access retrieved entity.
     *
     * @param Category \$entity
     * @param string   \$action view|create|edit|publish|delete
     *
     * @return bool
     */
    protected function checkEntityAccess(\$entity, \$action = 'view')
    {
        if (!\$bundle = \$entity->getBundle()) {
            \$bundle = 'category';
        }

        \$permissionBase = \$this->permissionBase;

        if (\$this->security->checkPermissionExists(\$bundle.':categories:'.\$action)) {
            // An entity specific category permission rule exists
            \$permissionBase = \$bundle.':categories';
        }

        if ('create' != \$action) {
            \$ownPerm   = \"\$permissionBase:{\$action}own\";
            \$otherPerm = \"\$permissionBase:{\$action}other\";

            return \$this->security->hasEntityAccess(\$ownPerm, \$otherPerm, \$entity->getCreatedBy());
        }

        return \$this->security->isGranted(\"\$permissionBase:create\");
    }

    /**
     * @return array
     */
    protected function getEntityFormOptions()
    {
        return ['show_bundle_select' => true];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Controller/Api/CategoryApiController.php";
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
        return new Source("", "@bundles/CategoryBundle/Controller/Api/CategoryApiController.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Controller/Api/CategoryApiController.php");
    }
}
