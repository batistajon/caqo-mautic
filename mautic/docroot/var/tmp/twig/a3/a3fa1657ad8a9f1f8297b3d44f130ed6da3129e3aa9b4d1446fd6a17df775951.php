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

/* @bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php */
class __TwigTemplate_3e9b62b92ee57245db5f2fdca75307af7440043cce28d013d69ca253cbbc6919 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Validator\\Constraints;

use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddress;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddressValidator;

class EmailAddressTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testValidateBy(): void
    {
        \$constraint = new EmailAddress();
        \$this->assertEquals(EmailAddressValidator::class, \$constraint->validatedBy());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php");
    }
}
