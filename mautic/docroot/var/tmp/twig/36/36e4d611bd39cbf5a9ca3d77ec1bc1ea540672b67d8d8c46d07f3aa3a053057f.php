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

/* @bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php */
class __TwigTemplate_e86ac0751698dc94d926102b31fb58119aac5ad21e494930fb36f471c895b8ec extends Template
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

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

class UniqueUserAliasValidator extends ConstraintValidator
{
    /**
     * @var LeadListRepository
     */
    public \$segmentRepository;

    /**
     * @var UserHelper
     */
    public \$userHelper;

    public function __construct(LeadListRepository \$segmentRepository, UserHelper \$userHelper)
    {
        \$this->segmentRepository = \$segmentRepository;
        \$this->userHelper        = \$userHelper;
    }

    public function validate(\$list, Constraint \$constraint)
    {
        \$field = \$constraint->field;

        if (empty(\$field)) {
            throw new ConstraintDefinitionException('A field has to be specified.');
        }

        if (\$list->getAlias()) {
            \$lists = \$this->segmentRepository->getLists(
                \$this->userHelper->getUser(),
                \$list->getAlias(),
                \$list->getId()
            );

            if (count(\$lists)) {
                \$this->context->buildViolation(\$constraint->message)
                    ->atPath(\$field)
                    ->setParameter('%alias%', \$list->getAlias())
                    ->addViolation();
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php");
    }
}
