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

/* @bundles/DynamicContentBundle/Controller/Api/DynamicContentApiController.php */
class __TwigTemplate_8b709af0e4705db57a5c354f66de987e83f47e07f209bd3844d6eb685ad2c1e2 extends Template
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

namespace Mautic\\DynamicContentBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class DynamicContentApiController.
 */
class DynamicContentApiController extends CommonApiController
{
    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model           = \$this->getModel('dynamicContent');
        \$this->entityClass     = 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent';
        \$this->entityNameOne   = 'dynamicContent';
        \$this->entityNameMulti = 'dynamicContents';

        parent::initialize(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Controller/Api/DynamicContentApiController.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Controller/Api/DynamicContentApiController.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Controller/Api/DynamicContentApiController.php");
    }
}
