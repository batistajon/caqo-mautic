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

/* @bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php */
class __TwigTemplate_f5606f102456147a95399206c451dfa46b095127dd3d91b01c98189c478cdf5b extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field\\DTO;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Exception\\InvalidObjectTypeException;
use Mautic\\LeadBundle\\Field\\DTO\\CustomFieldObject;

class CustomFieldObjectTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testLeadObject(): void
    {
        \$leadField = new LeadField();

        \$customFieldObject = new CustomFieldObject(\$leadField);

        \$this->assertSame('leads', \$customFieldObject->getObject());
    }

    public function testCompanyObject(): void
    {
        \$leadField = new LeadField();
        \$leadField->setObject('company');

        \$customFieldObject = new CustomFieldObject(\$leadField);

        \$this->assertSame('companies', \$customFieldObject->getObject());
    }

    public function testInvalidObject(): void
    {
        \$leadField = new LeadField();
        \$leadField->setObject('xxx');

        \$this->expectException(InvalidObjectTypeException::class);
        \$this->expectExceptionMessage('xxx has no associated object');

        new CustomFieldObject(\$leadField);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php");
    }
}
