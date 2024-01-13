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

/* @bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php */
class __TwigTemplate_50588b2f4e457a1e32b2d8a605fe3c8be3647b7ca8d0fa532a97376a38c5ee52 extends Template
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

namespace Mautic\\FormBundle\\Validator\\Constraint;

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumber;
use libphonenumber\\PhoneNumberUtil;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Phone number validator.
 */
class PhoneNumberConstraintValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        \$phoneUtil = PhoneNumberUtil::getInstance();

        if (false === \$value instanceof PhoneNumber) {
            \$value = (string) \$value;
            try {
                \$phoneNumber = \$phoneUtil->parse(\$value, PhoneNumberUtil::UNKNOWN_REGION);
            } catch (NumberParseException \$e) {
                \$this->addViolation(\$value, \$constraint);

                return;
            }
        }

        if (false === \$phoneUtil->isValidNumber(\$phoneNumber)) {
            \$this->addViolation(\$value, \$constraint);

            return;
        }
    }

    /**
     * Add a violation.
     *
     * @param mixed      \$value      the value that should be validated
     * @param Constraint \$constraint the constraint for the validation
     */
    private function addViolation(\$value, Constraint \$constraint)
    {
        \$this->context->addViolation(
            \$constraint->getMessage(),
            ['";
        // line 60
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "' => \$value]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php");
    }
}
