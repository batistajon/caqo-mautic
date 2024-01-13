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

/* @bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php */
class __TwigTemplate_540249a63d52744a766166a4555abde9e5e021d673315d7ca9cb9889cf617d8c extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\DynamicListType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

final class DynamicListTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&FormBuilderInterface<FormBuilderInterface>
     */
    private \$formBuilder;

    /**
     * @var DynamicListType
     */
    private \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder = \$this->createMock(FormBuilderInterface::class);
        \$this->form        = new DynamicListType();
    }

    public function testBuildFormWhenDataIsNull(): void
    {
        \$this->formBuilder->expects(\$this->once())
            ->method('addEventListener')
            ->with(
                FormEvents::PRE_SUBMIT,
                \$this->callback(function (\$formModifier) {
                    \$formEvent = \$this->createMock(FormEvent::class);

                    \$formEvent->expects(\$this->once())
                        ->method('getData')
                        ->willReturn(null);

                    \$formEvent->expects(\$this->never())
                        ->method('setData');

                    \$formModifier(\$formEvent);

                    return true;
                })
            );

        \$this->form->buildForm(\$this->formBuilder, []);
    }

    public function testBuildFormWhenDataIsArray(): void
    {
        \$this->formBuilder->expects(\$this->once())
            ->method('addEventListener')
            ->with(
                FormEvents::PRE_SUBMIT,
                \$this->callback(function (\$formModifier) {
                    \$formEvent = \$this->createMock(FormEvent::class);
                    \$data = [['content' => 'dynamic slot content']];

                    \$formEvent->expects(\$this->once())
                        ->method('getData')
                        ->willReturn(\$data);

                    \$formEvent->expects(\$this->once())
                        ->method('setData')
                        ->with(\$data);

                    \$formModifier(\$formEvent);

                    return true;
                })
            );

        \$this->form->buildForm(\$this->formBuilder, []);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php");
    }
}
