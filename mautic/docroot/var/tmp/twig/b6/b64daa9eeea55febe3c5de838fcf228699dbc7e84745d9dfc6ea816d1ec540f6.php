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

/* @bundles/LeadBundle/Controller/Api/NoteApiController.php */
class __TwigTemplate_37d4978b7488984814bfe7080c4843f99084ba9c4eefe499c8dbe5435c543656 extends Template
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
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Mautic\\LeadBundle\\Entity\\LeadNote;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class NoteApiController.
 */
class NoteApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('lead.note');
        \$this->entityClass      = LeadNote::class;
        \$this->entityNameOne    = 'note';
        \$this->entityNameMulti  = 'notes';
        \$this->serializerGroups = ['leadNoteDetails', 'leadList'];

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
        if (!empty(\$parameters['lead'])) {
            \$lead = \$this->checkLeadAccess(\$parameters['lead'], \$action);

            if (\$lead instanceof Response) {
                return \$lead;
            }

            \$entity->setLead(\$lead);
            unset(\$parameters['lead']);
        } elseif ('new' === \$action) {
            return \$this->returnError('lead ID is mandatory', Response::HTTP_BAD_REQUEST);
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
        return "@bundles/LeadBundle/Controller/Api/NoteApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/NoteApiController.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/Api/NoteApiController.php");
    }
}
