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

/* @bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php */
class __TwigTemplate_f3e811e234f6f681ecc24b438709779199365f2f9fd9f0d8cbf1127fcf402d07 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Validator\\Constraints;

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddress;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddressValidator;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Validator\\Context\\ExecutionContext;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class EmailAddressValidatorTest extends AbstractMauticTestCase
{
    /**
     * @dataProvider provider
     */
    public function testValidate(?string \$value, int \$expectedViolationCount): void
    {
        /** @var EmailAddressValidator \$emailAddressValidator */
        \$emailAddressValidator = self::\$container->get('mautic.validator.emailaddress');

        \$context = new ExecutionContext(
            \$this->createMock(ValidatorInterface::class),
            null,
            \$this->createMock(TranslatorInterface::class)
        );

        \$emailAddressValidator->initialize(\$context);
        \$emailAddressValidator->validate(\$value, new EmailAddress());

        Assert::assertSame(\$expectedViolationCount, \$context->getViolations()->count());
    }

    /**
     * @return iterable<mixed[]>
     */
    public function provider(): iterable
    {
        yield [null, 0];
        yield ['', 0];
        yield ['test@test.com', 0];
        yield ['testtest.com', 1];
        yield ['test@testcom', 1];
        yield ['test@test@.com', 1];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php");
    }
}
