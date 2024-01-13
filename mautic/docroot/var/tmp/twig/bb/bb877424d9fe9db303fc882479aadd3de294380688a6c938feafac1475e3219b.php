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

/* @bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php */
class __TwigTemplate_9d9cf530d3498d28c96dfed83bdc1e320b54054d38f403e8ddcdc4a58ea2ce07 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Helper;

use Mautic\\FormBundle\\Helper\\PropertiesAccessor;
use Mautic\\FormBundle\\Model\\FormModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class PropertiesAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FormModel
     */
    private \$formModel;

    /**
     * @var PropertiesAccessor
     */
    private \$propertiesAccessor;

    protected function setUp(): void
    {
        \$this->formModel          = \$this->createMock(FormModel::class);
        \$this->propertiesAccessor = new PropertiesAccessor(
            \$this->formModel
        );
    }

    public function testGetPropertiesForCountryField(): void
    {
        \$field = [
            'type'      => 'country',
            'leadField' => 'country',
        ];

        \$this->formModel->expects(\$this->once())
            ->method('getContactFieldPropertiesList')
            ->with('country')
            ->willReturn(['some_props_here']);

        \$this->assertSame(
            ['some_props_here'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForSyncList(): void
    {
        \$field = [
            'type'       => 'custom_select_a',
            'leadField'  => 'contact_field_a',
            'properties' => ['syncList' => true],
        ];

        \$this->formModel->expects(\$this->once())
            ->method('getContactFieldPropertiesList')
            ->with('contact_field_a')
            ->willReturn(['some_props_here']);

        \$this->assertSame(
            ['some_props_here'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForTextField(): void
    {
        \$field = [
            'type'       => 'custom_text_a',
            'leadField'  => 'contact_field_a',
            'properties' => ['syncList' => false],
        ];

        \$this->formModel->expects(\$this->never())
            ->method('getContactFieldPropertiesList');

        \$this->assertSame(
            [],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForListField(): void
    {
        \$field = [
            'type'       => 'custom_select_a',
            'properties' => [
                'syncList' => false,
                'list'     => ['list' => ['option_a' => 'Option A']],
            ],
        ];

        \$this->formModel->expects(\$this->never())
            ->method('getContactFieldPropertiesList');

        \$this->assertSame(
            ['option_a' => 'Option A'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForOptionlistField(): void
    {
        \$field = [
            'type'       => 'custom_select_a',
            'properties' => [
                'syncList'   => false,
                'optionlist' => ['list' => ['option_a' => 'Option A']],
            ],
        ];

        \$this->formModel->expects(\$this->never())
            ->method('getContactFieldPropertiesList');

        \$this->assertSame(
            ['option_a' => 'Option A'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetChoicesForWellFormattedChoices(): void
    {
        \$options = ['choice_a' => 'Choice A'];

        \$this->assertSame(
            array_flip(\$options),
            \$this->propertiesAccessor->getChoices(\$options)
        );
    }

    public function testGetChoicesForPipeFormattedChoices(): void
    {
        \$options = 'Choice A|Choice B';

        \$this->assertSame(
            ['Choice A' => 'Choice A', 'Choice B' => 'Choice B'],
            \$this->propertiesAccessor->getChoices(\$options)
        );
    }

    public function testGetChoicesForLabelValueArrayChoices(): void
    {
        \$options = [
            [
                'label' => 'Choice A',
                'value' => 'Value A',
            ],
        ];

        \$this->assertSame(
            ['Choice A' => 'Value A'],
            \$this->propertiesAccessor->getChoices(\$options)
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
        return "@bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php");
    }
}
