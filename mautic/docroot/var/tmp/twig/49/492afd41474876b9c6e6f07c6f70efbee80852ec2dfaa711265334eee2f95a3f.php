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

/* @bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php */
class __TwigTemplate_621fecb5d16b9985fea0ce62fdf3e0730e7fe26454b66195839b71c4393da655 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\FormAdjustmentEvent;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&FormInterface<FormInterface>
     */
    private \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->form = \$this->createMock(FormInterface::class);
    }

    public function testConstructGettersSetters(): void
    {
        \$alias        = 'email';
        \$object       = 'lead';
        \$operator     = OperatorOptions::EQUAL_TO;
        \$fieldDetails = [
            'properties' => [
                'type' => 'text',
                'list' => ['one', 'two'],
            ],
        ];
        \$event = new FormAdjustmentEvent(\$this->form, \$alias, \$object, \$operator, \$fieldDetails);

        \$this->assertSame(\$this->form, \$event->getForm());
        \$this->assertSame(\$alias, \$event->getFieldAlias());
        \$this->assertSame(\$object, \$event->getFieldObject());
        \$this->assertSame(\$operator, \$event->getOperator());
        \$this->assertSame(\$fieldDetails, \$event->getFieldDetails());
        \$this->assertSame('text', \$event->getFieldType());
        \$this->assertSame(['one', 'two'], \$event->getFieldChoices());
        \$this->assertFalse(\$event->filterShouldBeDisabled());
        \$this->assertFalse(\$event->operatorIsOneOf(OperatorOptions::LESS_THAN));
        \$this->assertFalse(\$event->operatorIsOneOf(OperatorOptions::LESS_THAN, OperatorOptions::NOT_EQUAL_TO));
        \$this->assertTrue(\$event->operatorIsOneOf(OperatorOptions::LESS_THAN, OperatorOptions::EQUAL_TO));
        \$this->assertFalse(\$event->fieldTypeIsOneOf('select'));
        \$this->assertTrue(\$event->fieldTypeIsOneOf('select', 'text'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php");
    }
}
