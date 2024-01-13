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

/* @bundles/LeadBundle/Controller/Api/TagApiController.php */
class __TwigTemplate_903d36606898af1b1836cc3010e158d4ba0c23c3267d05165f0b08700f6545a5 extends Template
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

namespace Mautic\\LeadBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\LeadBundle\\Entity\\Tag;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

class TagApiController extends CommonApiController
{
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model           = \$this->getModel('lead.tag');
        \$this->entityClass     = Tag::class;
        \$this->entityNameOne   = 'tag';
        \$this->entityNameMulti = 'tags';

        parent::initialize(\$event);
    }

    /**
     * Creates new entity from provided params.
     *
     * @return object
     *
     * @throws \\InvalidArgumentException
     */
    public function getNewEntity(array \$params)
    {
        if (empty(\$params[\$this->entityNameOne])) {
            throw new \\InvalidArgumentException(\$this->get('translator')->trans('mautic.lead.api.tag.required', [], 'validators'));
        }

        return \$this->model->getRepository()->getTagByNameOrCreateNewOne(\$params[\$this->entityNameOne]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Controller/Api/TagApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/TagApiController.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/Api/TagApiController.php");
    }
}
