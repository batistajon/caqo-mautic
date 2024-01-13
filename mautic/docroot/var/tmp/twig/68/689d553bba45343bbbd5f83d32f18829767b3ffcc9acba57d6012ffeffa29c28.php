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

/* @bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php */
class __TwigTemplate_3ec5cb3a15f887b0da076d0db176a194f398cf001a33210c7383f3b5c9f09f2b extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Helper\\FieldAliasHelper;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

/**
 * Throws an exception if the field alias is equal some segment filter keyword.
 * It would cause odd behavior with segment filters otherwise.
 */
class FieldAliasKeywordValidator extends ConstraintValidator
{
    const RESTRICTED_ALIASES = [
        'contact_id',
        'company_id',
    ];

    private ContactSegmentFilterDictionary \$contactSegmentFilterDictionary;

    /**
     * @var ListModel
     */
    private \$listModel;

    /**
     * @var FieldAliasHelper
     */
    private \$aliasHelper;

    /**
     * @var EntityManager
     */
    private \$em;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(ListModel \$listModel, FieldAliasHelper \$aliasHelper, EntityManager \$em, TranslatorInterface \$translator, ContactSegmentFilterDictionary \$contactSegmentFilterDictionary)
    {
        \$this->listModel                      = \$listModel;
        \$this->aliasHelper                    = \$aliasHelper;
        \$this->em                             = \$em;
        \$this->translator                     = \$translator;
        \$this->contactSegmentFilterDictionary = \$contactSegmentFilterDictionary;
    }

    /**
     * @param LeadField \$field
     */
    public function validate(\$field, Constraint \$constraint)
    {
        \$oldValue = \$this->em->getUnitOfWork()->getOriginalEntityData(\$field);
        \$this->aliasHelper->makeAliasUnique(\$field);

        //If empty it's a new object else it's an edit
        if (empty(\$oldValue) || (!empty(\$oldValue) && is_array(\$oldValue) && \$oldValue['alias'] != \$field->getAlias())) {
            if (in_array(\$field->getAlias(), self::RESTRICTED_ALIASES)) {
                \$this->context->addViolation(
                    \$this->translator->trans(
                        'mautic.lead.field.keyword.restricted',
                        ['%alias%' => \$field->getAlias()],
                        'validators'
                    )
                );

                return;
            }
            \$choices = array_merge(\$this->listModel->getChoiceFields()[\$field->getObject()] ?? [], \$this->contactSegmentFilterDictionary->getFilters());

            if (isset(\$choices[\$field->getAlias()])) {
                \$this->context->addViolation(\$constraint->message, ['%keyword%' => \$field->getAlias()]);
            }
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php");
    }
}
