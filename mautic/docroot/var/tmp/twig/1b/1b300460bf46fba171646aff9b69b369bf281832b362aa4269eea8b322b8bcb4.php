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

/* @bundles/UserBundle/Controller/Api/RoleApiController.php */
class __TwigTemplate_8d539aea63ffba94a4a6823bbf3172481fb8650d674b11f6edc2cc1fa60f4ca2 extends Template
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

namespace Mautic\\UserBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class RoleApiController.
 */
class RoleApiController extends CommonApiController
{
    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('user.role');
        \$this->entityClass      = 'Mautic\\UserBundle\\Entity\\Role';
        \$this->entityNameOne    = 'role';
        \$this->entityNameMulti  = 'roles';
        \$this->serializerGroups = ['roleDetails', 'publishDetails'];

        parent::initialize(\$event);
    }

    /**
     * {@inheritdoc}
     *
     * @param \\Mautic\\LeadBundle\\Entity\\Lead &\$entity
     * @param                                \$parameters
     * @param                                \$form
     * @param string                         \$action
     */
    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        if (isset(\$parameters['rawPermissions'])) {
            \$this->model->setRolePermissions(\$entity, \$parameters['rawPermissions']);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Controller/Api/RoleApiController.php";
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
        return new Source("", "@bundles/UserBundle/Controller/Api/RoleApiController.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Controller/Api/RoleApiController.php");
    }
}
