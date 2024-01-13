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

/* @bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php */
class __TwigTemplate_d373c1454e6efd79a6fa7e889aa4babae5644875678f126aa04883c5f64d41a3 extends Template
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

use Mautic\\LeadBundle\\Validator\\Constraints\\Length;
use Mautic\\LeadBundle\\Validator\\Constraints\\LengthValidator;

class LengthValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testValidate()
    {
        \$constraint = new Length(['min' => 3]);
        \$validator  = new LengthValidator();
        \$this->assertNull(\$validator->validate('valid', \$constraint));
        // Not thrownig Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException
        \$this->assertNull(\$validator->validate(['0', '1'], \$constraint));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php");
    }
}
