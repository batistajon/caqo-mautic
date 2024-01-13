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

/* @bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php */
class __TwigTemplate_3f88f799410cb73e8ed1ef6e6caeae209f56ee1053c3877f9d17fb788880737f extends Template
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

class LengthTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testValidateBy()
    {
        \$constraint = new Length(['min' => 3]);
        \$this->assertEquals(LengthValidator::class, \$constraint->validatedBy());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php");
    }
}
