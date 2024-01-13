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

/* @bundles/CoreBundle/Tests/Unit/Helper/ArrayHelperTest.php */
class __TwigTemplate_cf3cda2c4ed9f51b505e9170e36d6e0c39a5745bcdb36af5599404787bb4f60b extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use PHPUnit\\Framework\\Assert;

class ArrayHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetValue(): void
    {
        \$origin = ['one', 'two' => 'three'];

        \$this->assertSame('one', ArrayHelper::getValue(0, \$origin));
        \$this->assertSame('three', ArrayHelper::getValue('two', \$origin));
        \$this->assertNull(ArrayHelper::getValue('five', \$origin));
        \$this->assertSame('default', ArrayHelper::getValue('five', \$origin, 'default'));
    }

    public function testPickValue(): void
    {
        \$origin = ['one', 'two' => 'three', 'four' => null];

        \$this->assertSame('one', ArrayHelper::pickValue(0, \$origin));
        \$this->assertSame(['two' => 'three', 'four' => null], \$origin);
        \$this->assertSame('three', ArrayHelper::pickValue('two', \$origin));
        \$this->assertSame(['four' => null], \$origin);
        \$this->assertNull(ArrayHelper::pickValue('five', \$origin));
        \$this->assertSame('default', ArrayHelper::pickValue('five', \$origin, 'default'));
        \$this->assertNull(ArrayHelper::pickValue('four', \$origin, 'default'));
        \$this->assertSame([], \$origin);
    }

    public function testSelect(): void
    {
        \$origin = ['one', 'two' => 'three', 'four' => 'five'];

        \$this->assertSame(['two' => 'three'], ArrayHelper::select(['two'], \$origin));
        \$this->assertSame(['two' => 'three', 'four' => 'five'], ArrayHelper::select(['two', 'four'], \$origin));
        \$this->assertSame(['one', 'two' => 'three'], ArrayHelper::select(['two', 0], \$origin));
    }

    /**
     * @dataProvider removeEmptyValuesProvider
     *
     * @param mixed[] \$value
     * @param mixed[] \$expected
     */
    public function testRemoveEmptyValues(array \$value, array \$expected): void
    {
        Assert::assertSame(\$expected, ArrayHelper::removeEmptyValues(\$value));
    }

    /**
     * @return \\Generator<mixed[]>
     */
    public function removeEmptyValuesProvider(): \\Generator
    {
        \$object = new \\StdClass();
        yield [[null], []];
        yield [[], []];
        yield [[123], [123]];
        yield [[\$object], [\$object]];
        yield [[''], []];
        yield [['value A', ''], ['value A']];
    }

    public function testflipArray(): void
    {
        \$array = [
            'first' => 'Custom first',
            'second'=> 'Custom second',
        ];

        \$this->assertSame(array_flip(\$array), ArrayHelper::flipArray(\$array));

        \$array = [
            'group1' => [
                'first' => 'Custom first',
            ],
            'group2' => [
                'second' => 'Custom second',
            ],
        ];

        \$flippedArray = ArrayHelper::flipArray(\$array);

        \$this->assertEquals('Custom first', key(\$flippedArray['group1']));
        \$this->assertEquals('first', end(\$flippedArray['group1']));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/ArrayHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/ArrayHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/ArrayHelperTest.php");
    }
}
