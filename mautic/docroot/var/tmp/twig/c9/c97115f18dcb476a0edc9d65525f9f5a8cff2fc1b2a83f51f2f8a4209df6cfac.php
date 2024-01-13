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

/* @bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php */
class __TwigTemplate_8c72871f89da343b34db65d6fec6b1aa5b5cced97359de91f94a9feb50a8186e extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Validator;

use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Mautic\\EmailBundle\\Validator\\MultipleEmailsValidValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface;

class MultipleEmailsValidValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoEmailsProvided(): void
    {
        \$emailValidatorMock = \$this->createMock(EmailValidator::class);
        \$constraintMock     = \$this->createMock(Constraint::class);

        \$emailValidatorMock->expects(\$this->never())
            ->method('validate');

        \$multipleEmailsValidValidator = new MultipleEmailsValidValidator(\$emailValidatorMock);

        \$multipleEmailsValidValidator->validate(null, \$constraintMock);
    }

    public function testValidEmails(): void
    {
        \$emailValidatorMock = \$this->createMock(EmailValidator::class);
        \$constraintMock     = \$this->createMock(Constraint::class);

        \$emailValidatorMock->expects(\$this->exactly(2))
            ->method('validate')
            ->withConsecutive(['john@don.com'], ['don@john.com']);

        \$multipleEmailsValidValidator = new MultipleEmailsValidValidator(\$emailValidatorMock);

        \$emails = 'john@don.com, don@john.com';
        \$multipleEmailsValidValidator->validate(\$emails, \$constraintMock);
    }

    public function testNotValidEmails(): void
    {
        \$emailValidatorMock                      = \$this->createMock(EmailValidator::class);
        \$constraintMock                          = \$this->createMock(Constraint::class);
        \$executionContextInterfaceMock           = \$this->createMock(ExecutionContextInterface::class);
        \$constraintViolationBuilderInterfaceMock = \$this->createMock(ConstraintViolationBuilderInterface::class);

        \$emailValidatorMock->expects(\$this->exactly(2))
            ->method('validate')
            ->withConsecutive(['john@don.com'], ['xxx'])
            ->willReturn(null, \$this->throwException(new InvalidEmailException('xxx')));

        \$executionContextInterfaceMock->expects(\$this->once())
            ->method('buildViolation')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('addViolation')
            ->with();

        \$multipleEmailsValidValidator = new MultipleEmailsValidValidator(\$emailValidatorMock);
        \$multipleEmailsValidValidator->initialize(\$executionContextInterfaceMock);

        \$emails = 'john@don.com, xxx';
        \$multipleEmailsValidValidator->validate(\$emails, \$constraintMock);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php");
    }
}
