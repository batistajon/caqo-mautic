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

/* @bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php */
class __TwigTemplate_8530099c79a9ef7cec228853fbbf0caf155ad0accb8c0bd436dbfdf1dbd91ed4 extends Template
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

use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class LeadListAccessValidator extends ConstraintValidator
{
    /**
     * @var ListModel
     */
    private \$segmentModel;

    public function __construct(ListModel \$segmentModel)
    {
        \$this->segmentModel = \$segmentModel;
    }

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (count(\$value)) {
            \$lists = \$this->segmentModel->getUserLists();
            foreach (\$value as \$l) {
                if (!isset(\$lists[\$l->getId()])) {
                    \$this->context->addViolation(
                        \$constraint->message,
                        ['%string%' => \$l->getName()]
                    );
                    break;
                }
            }
        } else {
            \$this->context->addViolation(\$constraint->message);
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php");
    }
}
