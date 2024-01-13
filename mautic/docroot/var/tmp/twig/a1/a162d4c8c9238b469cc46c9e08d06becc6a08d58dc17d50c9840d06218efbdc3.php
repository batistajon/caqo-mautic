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

/* @bundles/LeadBundle/Tests/Entity/CompanyTest.php */
class __TwigTemplate_480a0cb3344e93cf7bb0b9ac8bf61491fc864536958e39141e0aca9b30250620 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\Company;

class CompanyTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testChangingPropertiesHydratesFieldChanges()
    {
        \$email    = 'foo@bar.com';
        \$company  = new Company();
        \$company->addUpdatedField('email', \$email);
        \$changes = \$company->getChanges();

        \$this->assertFalse(empty(\$changes['fields']['email']));

        \$this->assertEquals(\$email, \$changes['fields']['email'][1]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/CompanyTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/CompanyTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/CompanyTest.php");
    }
}
