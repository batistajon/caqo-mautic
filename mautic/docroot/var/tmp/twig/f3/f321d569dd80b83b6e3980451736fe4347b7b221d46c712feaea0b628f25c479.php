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

/* @bundles/CoreBundle/Tests/Unit/Form/Type/DynamicContentTraitTest.php */
class __TwigTemplate_d873ed1f1ac6552be5ba7510b87e649395851f0e0524c7f066f4ac4c007089ff extends Template
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

use Mautic\\CoreBundle\\Entity\\DynamicContentEntityTrait;
use Mautic\\CoreBundle\\Form\\Type\\DynamicContentTrait;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\Test\\FormInterface;

final class DynamicContentTraitTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&FormBuilderInterface<FormBuilderInterface>
     */
    private \$formBuilder;

    /**
     * @var MockObject&FormEvent
     */
    private \$formEvent;

    /**
     * @var MockObject&FormInterface<FormInterface>
     */
    private \$form;

    /**
     * @var MockObject (use DynamicContentEntityTrait)
     */
    private \$entity;

    /**
     * @var MockObject (use DynamicContentTrait)
     */
    private \$trait;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder = \$this->createMock(FormBuilderInterface::class);
        \$this->formEvent   = \$this->createMock(FormEvent::class);
        \$this->form        = \$this->createMock(FormInterface::class);
        \$this->entity      = \$this->getMockForTrait(DynamicContentEntityTrait::class);
        \$this->trait       = \$this->getMockForTrait(DynamicContentTrait::class);
    }

    /**
     * There is a problem when a user just grags&drop the Dynamic Content slot
     * without configuring it. New email won't save with no error. We must ensure
     * each dynamic content slot has its full structure.
     */
    public function testAddDynamicContentFieldWithDecWithoutFiltersAndContent(): void
    {
        \$this->formBuilder->expects(\$this->once())
            ->method('addEventListener')
            ->with(
                FormEvents::PRE_SUBMIT,
                \$this->callback(function (\$formModifier) {
                    \$inputData = [
                        'dynamicContent' => [
                            [
                                'content' => '',
                            ],
                        ],
                    ];

                    \$outputData = [
                        'dynamicContent' => [
                            [
                                'content' => '',
                                'filters' => [
                                    [
                                        'content' => null,
                                        'filters' => [
                                            [
                                                'glue'     => null,
                                                'field'    => null,
                                                'object'   => null,
                                                'type'     => null,
                                                'operator' => null,
                                                'display'  => null,
                                                'filter'   => null,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ];

                    \$this->formEvent->expects(\$this->once())
                        ->method('getForm')
                        ->willReturn(\$this->form);

                    \$this->form->expects(\$this->once())
                        ->method('getData')
                        ->willReturn(\$this->entity);

                    \$this->formEvent->expects(\$this->once())
                        ->method('getData')
                        ->willReturn(\$inputData);

                    \$this->formEvent->expects(\$this->once())
                        ->method('setData')
                        ->with(\$outputData);

                    \$formModifier(\$this->formEvent);

                    return true;
                })
            );

        \$this->invokeMethod(\$this->trait, 'addDynamicContentField', [\$this->formBuilder]);
    }

    /**
     * @param mixed[] \$args
     *
     * @return mixed
     */
    private function invokeMethod(object \$object, string \$methodName, array \$args = [])
    {
        \$reflection = new \\ReflectionClass(get_class(\$object));
        \$method     = \$reflection->getMethod(\$methodName);
        \$method->setAccessible(true);

        return \$method->invokeArgs(\$object, \$args);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Form/Type/DynamicContentTraitTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Form/Type/DynamicContentTraitTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Form/Type/DynamicContentTraitTest.php");
    }
}
