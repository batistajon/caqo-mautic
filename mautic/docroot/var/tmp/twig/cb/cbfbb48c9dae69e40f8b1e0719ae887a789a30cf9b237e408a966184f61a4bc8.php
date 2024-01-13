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

/* @bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php */
class __TwigTemplate_0bc349f5fd9bac1cadfb513c83c89d76364b434c4196d5420716031785c8fd01 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\Type;

use Mautic\\LeadBundle\\Form\\Type\\SegmentConfigType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

final class SegmentConfigTypeTest extends TestCase
{
    private SegmentConfigType \$segmentConfigType;

    /**
     * @var FormBuilderInterface<FormBuilderInterface>&MockObject
     */
    private \$formBuilderInterface;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->segmentConfigType    = new SegmentConfigType();
        \$this->formBuilderInterface = \$this->createMock(FormBuilderInterface::class);
    }

    public function testThatGetBlockPrefixReturnsAValue(): void
    {
        \$blockPrefix = \$this->segmentConfigType->getBlockPrefix();
        \$this->assertNotEmpty(\$blockPrefix);
        \$this->assertTrue(is_string(\$blockPrefix));
    }

    public function testThatBuildFormMethodAddsSegmentRebuildTimeWarningOption(): void
    {
        \$parameters = [
            'label'      => 'mautic.lead.list.form.config.segment_rebuild_time_warning',
            'label_attr' => [
                    'class' => 'control-label',
                ],
            'attr' => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.list.form.config.segment_rebuild_time_warning.tooltip',
                ],
            'required' => false,
        ];

        \$this->formBuilderInterface->expects(\$this->once())
            ->method('add')
            ->with(
                'segment_rebuild_time_warning',
                NumberType::class,
                \$parameters
            );

        \$this->segmentConfigType->buildForm(\$this->formBuilderInterface, []);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php");
    }
}
