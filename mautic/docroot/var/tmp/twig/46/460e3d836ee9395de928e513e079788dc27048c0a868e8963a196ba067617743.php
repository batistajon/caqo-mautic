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

/* @bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php */
class __TwigTemplate_49fca242307f02b45b5fc6100583bec17645f5330a67f7104b566226abee6a48 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Provider;

use Mautic\\LeadBundle\\Event\\FormAdjustmentEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Provider\\FormAdjustmentsProvider;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentsProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var MockObject&FormInterface<FormInterface>
     */
    private \$form;

    /**
     * @var FormAdjustmentsProvider
     */
    private \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->form       = \$this->createMock(FormInterface::class);
        \$this->provider   = new FormAdjustmentsProvider(\$this->dispatcher);
    }

    public function testAdjustForm(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                LeadEvents::ADJUST_FILTER_FORM_TYPE_FOR_FIELD,
                \$this->callback(function (FormAdjustmentEvent \$event) {
                    \$this->assertSame(\$this->form, \$event->getForm());
                    \$this->assertSame('email', \$event->getFieldAlias());
                    \$this->assertSame('lead', \$event->getFieldObject());
                    \$this->assertSame(OperatorOptions::EQUAL_TO, \$event->getOperator());
                    \$this->assertSame('text', \$event->getFieldType());

                    return true;
                })
            );

        \$this->provider->adjustForm(
            \$this->form,
            'email',
            'lead',
            OperatorOptions::EQUAL_TO,
            ['properties' => ['type' => 'text']]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php");
    }
}
