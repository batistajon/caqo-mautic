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

/* @bundles/ApiBundle/Event/ApiEntityEvent.php */
class __TwigTemplate_e6a5d2bcb97a455e4bbcff9db3643b7ac5173ee3a48dd7f62f424c4af753c72b extends Template
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

namespace Mautic\\ApiBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Component\\HttpFoundation\\Request;

class ApiEntityEvent extends CommonEvent
{
    /**
     * @var object
     */
    protected \$entity;

    /**
     * @var array
     */
    protected \$entityRequestParameters;

    /**
     * @var Request
     */
    private \$request;

    /**
     * @param object \$entity
     */
    public function __construct(\$entity, array \$entityRequestParameters, Request \$request)
    {
        \$this->entity                  = \$entity;
        \$this->entityRequestParameters = \$entityRequestParameters;
        \$this->request                 = \$request;
    }

    /**
     * @return object
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    /**
     * @return array
     */
    public function getEntityRequestParameters()
    {
        return \$this->entityRequestParameters;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Event/ApiEntityEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ApiEntityEvent.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Event/ApiEntityEvent.php");
    }
}
