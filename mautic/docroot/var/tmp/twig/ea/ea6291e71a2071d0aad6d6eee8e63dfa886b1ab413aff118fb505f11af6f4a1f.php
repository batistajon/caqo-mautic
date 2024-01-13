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

/* @bundles/EmailBundle/Tests/Helper/EmailValidatorTest.php */
class __TwigTemplate_4442b9a810053cc5447d688319143038d70cf434763375394e4f3e010b7098aa extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailValidationEvent;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Mautic\\EmailBundle\\Tests\\Helper\\EventListener\\EmailValidationSubscriber;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Translation\\Translator;

class EmailValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$translator;
    private \$dispatcher;
    private \$event;
    private \$emailValidator;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator = \$this->createMock(Translator::class);
        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->event      = \$this->createMock(EmailValidationEvent::class);

        \$this->emailValidator = new EmailValidator(\$this->translator, \$this->dispatcher);
    }

    public function testValidGmailEmail()
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(EmailEvents::ON_EMAIL_VALIDATION)
            ->willReturn(\$this->event);

        \$this->event->expects(\$this->once())
            ->method('isValid')
            ->willReturn(true);

        \$this->emailValidator->validate('john@gmail.com');
    }

    public function testValidGmailEmailWithPeriod()
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(EmailEvents::ON_EMAIL_VALIDATION)
            ->willReturn(\$this->event);

        \$this->event->expects(\$this->once())
            ->method('isValid')
            ->willReturn(true);

        \$this->emailValidator->validate('john.doe@gmail.com');
    }

    public function testValidGmailEmailWithPlus()
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(EmailEvents::ON_EMAIL_VALIDATION)
            ->willReturn(\$this->event);

        \$this->event->expects(\$this->once())
            ->method('isValid')
            ->willReturn(true);

        \$this->emailValidator->validate('john+doe@gmail.com');
    }

    public function testValidGmailEmailWithNonStandardTld()
    {
        \$this->dispatcher->expects(\$this->once())
        ->method('dispatch')
        ->with(EmailEvents::ON_EMAIL_VALIDATION)
        ->willReturn(\$this->event);

        \$this->event->expects(\$this->once())
        ->method('isValid')
        ->willReturn(true);

        // hopefully this domain remains intact
        \$this->emailValidator->validate('john@mail.email');
    }

    public function testValidateEmailWithoutTld()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('john@doe');
    }

    public function testValidateEmailWithSpaceInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo hn@gmail.com');
    }

    public function testValidateEmailWithCaretInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo^hn@gmail.com');
    }

    public function testValidateEmailWithApostropheInTheDomainPortion()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('john@gm\\'ail.com');
    }

    public function testValidateEmailWithSemicolonInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo;hn@gmail.com');
    }

    public function testValidateEmailWithAmpersandInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo&hn@gmail.com');
    }

    public function testValidateEmailWithStarInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo*hn@gmail.com');
    }

    public function testValidateEmailWithPercentInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo%hn@gmail.com');
    }

    public function testValidateEmailWithDoublePeriodInIt()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('jo..hn@gmail.com');
    }

    public function testValidateEmailWithBadDNS()
    {
        \$this->expectException(InvalidEmailException::class);
        \$this->emailValidator->validate('john@doe.shouldneverexist', true);
    }

    public function testIntegrationInvalidatesEmail()
    {
        \$dispatcher = new EventDispatcher();
        \$dispatcher->addSubscriber(new EmailValidationSubscriber());

        \$emailValidator = new EmailValidator(\$this->translator, \$dispatcher);

        \$this->expectException(InvalidEmailException::class);
        \$this->expectExceptionMessage('bad email');

        \$emailValidator->doPluginValidation('bad@gmail.com');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Helper/EmailValidatorTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/EmailValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/EmailValidatorTest.php");
    }
}
