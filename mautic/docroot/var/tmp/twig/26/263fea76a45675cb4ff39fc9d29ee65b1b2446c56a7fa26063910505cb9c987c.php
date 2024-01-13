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

/* @bundles/LeadBundle/Model/SegmentActionModel.php */
class __TwigTemplate_2385537ae2d17cb2650895cc59ffde864dec6b28937e09aea77be34213cad898 extends Template
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

namespace Mautic\\LeadBundle\\Model;

class SegmentActionModel
{
    /**
     * @var LeadModel
     */
    private \$contactModel;

    public function __construct(LeadModel \$contactModel)
    {
        \$this->contactModel = \$contactModel;
    }

    public function addContacts(array \$contactIds, array \$segmentIds)
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->addToLists(\$contact, \$segmentIds);
        }

        \$this->contactModel->saveEntities(\$contacts);
    }

    public function removeContacts(array \$contactIds, array \$segmentIds)
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->removeFromLists(\$contact, \$segmentIds);
        }

        \$this->contactModel->saveEntities(\$contacts);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Model/SegmentActionModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/SegmentActionModel.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Model/SegmentActionModel.php");
    }
}
