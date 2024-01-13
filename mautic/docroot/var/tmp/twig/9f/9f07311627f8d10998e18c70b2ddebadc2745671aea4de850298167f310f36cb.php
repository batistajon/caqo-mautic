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

/* @bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php */
class __TwigTemplate_72a52c36c1e13beb561fe03ca1e1bf5e9fa13dbbc9a710c41d8b951c73535492 extends Template
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

namespace Mautic\\EmailBundle\\Validator;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class MultipleEmailsValidValidator extends ConstraintValidator
{
    /**
     * @var EmailValidator
     */
    private \$emailValidator;

    public function __construct(EmailValidator \$emailValidator)
    {
        \$this->emailValidator = \$emailValidator;
    }

    /**
     * @param string \$emailsInString
     */
    public function validate(\$emailsInString, Constraint \$constraint)
    {
        if (!\$emailsInString) {
            return;
        }

        \$transformer = new ArrayStringTransformer();
        \$emails      = \$transformer->reverseTransform(\$emailsInString);

        foreach (\$emails as \$email) {
            try {
                \$this->emailValidator->validate(\$email);
            } catch (InvalidEmailException \$e) {
                \$this->context->buildViolation('mautic.email.multiple_emails.not_valid', ['%email%' => \$e->getMessage()])
                    ->addViolation();

                return;
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
        return "@bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php");
    }
}
