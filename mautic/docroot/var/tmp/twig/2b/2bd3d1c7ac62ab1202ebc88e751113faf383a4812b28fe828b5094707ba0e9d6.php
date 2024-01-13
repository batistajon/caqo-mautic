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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/ArrayTypeTest.php */
class __TwigTemplate_5fcaa676252779a1886a4791e9d33d9199f29cf78354d4cf1cc56bedb313c3ae extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Types\\Type;
use Mautic\\CoreBundle\\Doctrine\\Type\\ArrayType;

class ExampleClassWithPrivateProperty
{
    /** @noinspection PhpUnusedPrivateFieldInspection */
    private \$test = 'value';
}

class ExampleClassWithProtectedProperty
{
    protected \$test = 'value';
}

class ExampleClassWithPublicProperty
{
    public \$test = 'value';
}

class ArrayTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    const MAUTIC_ARRAY_TYPE_NAME = 'mautic-array-type';

    /** @var ArrayType */
    private \$arrayType;

    /** @var AbstractPlatform */
    private \$platform;

    protected function setUp(): void
    {
        parent::setUp();

        if (!Type::hasType(self::MAUTIC_ARRAY_TYPE_NAME)) {
            Type::addType(self::MAUTIC_ARRAY_TYPE_NAME, 'Mautic\\CoreBundle\\Doctrine\\Type\\ArrayType');
        }

        \$this->arrayType = Type::getType(self::MAUTIC_ARRAY_TYPE_NAME);

        \$this->platform = new MySqlPlatform();
    }

    public function testGivenSimpleArrayWhenConvertsToDatabaseValueThenGetEncodedData()
    {
        \$stringWithUtf8Characters = '--ěš--';
        \$result                   = \$this->arrayType->convertToDatabaseValue([\$stringWithUtf8Characters], \$this->platform);
        \$this->assertEquals('a:1:{i:0;s:8:\"--ěš--\";}', \$result);
    }

    public function testGivenNullPoisonedStringWhenConvertsToDatabaseValueThenError()
    {
        \$this->expectException('Doctrine\\DBAL\\Types\\ConversionException');

        \$this->arrayType->convertToDatabaseValue([\"abcd\\0efgh\"], \$this->platform);
    }

    public function testGivenObjectWithPrivatePropertyWhenConvertsToDatabaseValueThenError()
    {
        \$this->expectException('Doctrine\\DBAL\\Types\\ConversionException');

        \$this->arrayType->convertToDatabaseValue([new ExampleClassWithPrivateProperty()], \$this->platform);
    }

    public function testGivenObjectWithProtectedPropertyWhenConvertsToDatabaseValueThenError()
    {
        \$this->expectException('Doctrine\\DBAL\\Types\\ConversionException');

        \$this->arrayType->convertToDatabaseValue([new ExampleClassWithProtectedProperty()], \$this->platform);
    }

    public function testGivenObjectWithPublicPropertyWhenConvertsToDatabaseValueThenGetEncodedData()
    {
        \$result = \$this->arrayType->convertToDatabaseValue([new ExampleClassWithPublicProperty()], \$this->platform);
        \$this->assertEquals(
            'a:1:{i:0;O:68:\"Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\ExampleClassWithPublicProperty\":1:{s:4:\"test\";s:5:\"value\";}}',
            \$result
        );
    }

    public function testGivenStdClassWhenConvertsToDatabaseValueThenGetEncodedData()
    {
        \$object       = new \\stdClass();
        \$object->test = 'value';

        \$result = \$this->arrayType->convertToDatabaseValue([\$object], \$this->platform);
        \$this->assertEquals(
            'a:1:{i:0;O:8:\"stdClass\":1:{s:4:\"test\";s:5:\"value\";}}',
            \$result
        );
    }

    public function testGivenObjectWithPrivatePropertyWhenConvertsToPHPValueThenGetsArrayWithoutObject()
    {
        \$array = [
            0,
            new ExampleClassWithPrivateProperty(),
        ];

        \$array = serialize(\$array);

        \$result = \$this->arrayType->convertToPHPValue(\$array, \$this->platform);
        \$this->assertEquals(
            [0],
            \$result
        );
    }

    public function testGivenObjectWithProtectedPropertyWhenConvertsToPHPValueThenGetsArrayWithoutObject()
    {
        \$array = [
            0,
            new ExampleClassWithProtectedProperty(),
        ];

        \$array = serialize(\$array);

        \$result = \$this->arrayType->convertToPHPValue(\$array, \$this->platform);
        \$this->assertEquals(
            [0],
            \$result
        );
    }

    public function testGivenObjectWithPublicPropertyWhenConvertsToPHPValueThenGetsArrayWithObject()
    {
        \$array = [
            0,
            new ExampleClassWithPublicProperty(),
        ];

        \$array = serialize(\$array);

        \$result = \$this->arrayType->convertToPHPValue(\$array, \$this->platform);
        \$this->assertEquals(
            [
                0,
                new ExampleClassWithPublicProperty(),
            ],
            \$result
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
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/ArrayTypeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/ArrayTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/ArrayTypeTest.php");
    }
}
