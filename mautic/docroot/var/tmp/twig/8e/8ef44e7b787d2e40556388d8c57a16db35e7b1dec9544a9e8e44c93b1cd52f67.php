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

/* @bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php */
class __TwigTemplate_cd682b14fbaa0c24ac0ec0edc62a7b1ce5d176df0b8a61a8bd98efbb66505eb2 extends Template
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

use Mautic\\CoreBundle\\Helper\\FileHelper;

class FileHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Conversion of Bytes to Megebytes
     *
     * @covers       \\Mautic\\CoreBundle\\Helper\\FileHelper::convertBytesToMegabytes
     *
     * @dataProvider bytesToMegabytesProvider
     */
    public function testConversionFromBytesToMegabytes(int \$byte, float \$megabyte)
    {
        \$fileHelper = new FileHelper();

        \$this->assertSame(\$megabyte, \$fileHelper::convertBytesToMegabytes(\$byte));
    }

    public function bytesToMegabytesProvider()
    {
        return [
            [0, 0.0],
            [1048576, 1.0],
            [10485760, 10.0],
            [-10485760, -10.0],
        ];
    }

    /**
     * @testdox Conversion of Megebytes to Bytes
     *
     * @covers       \\Mautic\\CoreBundle\\Helper\\FileHelper::convertMegabytesToBytes
     *
     * @dataProvider megabytesToBytesProvider
     */
    public function testConversionFromMegabytesToBytes(int \$megabyte, int \$byte)
    {
        \$fileHelper = new FileHelper();

        \$this->assertSame(\$byte, \$fileHelper::convertMegabytesToBytes(\$megabyte));
    }

    public function megabytesToBytesProvider()
    {
        return [
            [0, 0],
            [1, 1048576],
            [5, 5242880],
        ];
    }

    /**
     * @testdox Conversion of PHP size to Bytes
     *
     * @covers       \\Mautic\\CoreBundle\\Helper\\FileHelper::convertPHPSizeToBytes
     *
     * @dataProvider phpSizeToBytesProvider
     */
    public function testConvertPHPSizeToBytes(string \$phpSize, int \$bytes)
    {
        \$fileHelper = new FileHelper();

        \$this->assertSame(\$bytes, \$fileHelper::convertPHPSizeToBytes(\$phpSize));
    }

    public function phpSizeToBytesProvider()
    {
        return [
            ['3048M', 3196059648],
            ['127M', 133169152],
            ['1k', 1024],
            ['1K ', 1024],
            ['1M', 1048576],
            ['1G', 1073741824],
            ['1P', 1125899906842624],
            ['1024', 1024],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php");
    }
}
