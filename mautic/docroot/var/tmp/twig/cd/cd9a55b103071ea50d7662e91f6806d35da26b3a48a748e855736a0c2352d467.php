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

/* @bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php */
class __TwigTemplate_0529a3b050268024477ce4ebcbee21ea042f0df336af9eabd3a47852de0cced7 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class SegmentInUseValidator extends ConstraintValidator
{
    /**
     * @var ListModel
     */
    private \$listModel;

    public function __construct(ListModel \$listModel)
    {
        \$this->listModel = \$listModel;
    }

    /**
     * @param LeadList \$leadList
     */
    public function validate(\$leadList, Constraint \$constraint): void
    {
        if (!\$constraint instanceof SegmentInUse) {
            throw new UnexpectedTypeException(\$constraint, SegmentInUse::class);
        }

        if (!\$leadList->getId() || \$leadList->getIsPublished()) {
            return;
        }

        \$lists = \$this->listModel->getSegmentsWithDependenciesOnSegment(\$leadList->getId(), 'name');

        if (count(\$lists)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setCode(Response::HTTP_UNPROCESSABLE_ENTITY)
                ->setParameter('%segments%', implode(',', \$lists))
                ->addViolation();
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php");
    }
}
