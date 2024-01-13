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

/* @bundles/CategoryBundle/Model/ContactActionModel.php */
class __TwigTemplate_bd4740a386a254745429a9e43a91f606891a5403126b006afc6ed63158924813 extends Template
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

namespace Mautic\\CategoryBundle\\Model;

use Mautic\\LeadBundle\\Model\\LeadModel;

class ContactActionModel
{
    /**
     * @var LeadModel
     */
    private \$contactModel;

    public function __construct(LeadModel \$contactModel)
    {
        \$this->contactModel = \$contactModel;
    }

    public function addContactsToCategories(array \$contactIds, array \$categoryIds)
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->addToCategory(\$contact, \$categoryIds);
        }
    }

    public function removeContactsFromCategories(array \$contactIds, array \$categoryIds)
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$contactCategoryRelations = \$this->contactModel->getLeadCategories(\$contact);
            \$relationsToDelete        = array_intersect(\$contactCategoryRelations, \$categoryIds);
            \$this->contactModel->removeFromCategories(\$relationsToDelete);
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
        return "@bundles/CategoryBundle/Model/ContactActionModel.php";
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
        return new Source("", "@bundles/CategoryBundle/Model/ContactActionModel.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Model/ContactActionModel.php");
    }
}
