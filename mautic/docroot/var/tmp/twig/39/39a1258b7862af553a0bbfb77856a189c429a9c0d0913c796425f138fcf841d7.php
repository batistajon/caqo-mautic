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

/* @bundles/ReportBundle/Tests/Model/ExportHandlerTest.php */
class __TwigTemplate_db3fb3454a558b644555e41c0290075e3887c1e56fe8d9dac29c53008c0e659b extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\ReportBundle\\Exception\\FileIOException;
use Mautic\\ReportBundle\\Model\\ExportHandler;

class ExportHandlerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testHandler()
    {
        \$tmpDir = sys_get_temp_dir();

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->any())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn(\$tmpDir);

        \$filePathResolver = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolver->expects(\$this->once())
            ->method('createDirectory');

        \$exportHandler = new ExportHandler(\$coreParametersHelperMock, \$filePathResolver);

        \$handler = \$exportHandler->getHandler('myFile');

        \$this->assertTrue(is_resource(\$handler));

        \$handler = \$exportHandler->closeHandler(\$handler);

        \$this->assertFalse(is_resource(\$handler));
        \$this->assertNull(\$handler);
    }

    public function testCreateDirectoryError()
    {
        \$tmpDir = sys_get_temp_dir();

        \$this->expectException(FileIOException::class);
        \$this->expectExceptionMessage('Could not create directory '.\$tmpDir);

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->any())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn(\$tmpDir);

        \$filePathResolver = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolver->expects(\$this->once())
            ->method('createDirectory')
            ->willThrowException(new FilePathException());

        \$exportHandler = new ExportHandler(\$coreParametersHelperMock, \$filePathResolver);

        \$exportHandler->getHandler('myFile');
    }

    public function testOpenFileError()
    {
        \$tmpDir = 'xxx';

        \$this->expectException(FileIOException::class);
        \$this->expectExceptionMessage('Could not open file xxx/myFile.csv');

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->any())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn(\$tmpDir);

        \$filePathResolver = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolver->expects(\$this->once())
            ->method('createDirectory');

        \$exportHandler = new ExportHandler(\$coreParametersHelperMock, \$filePathResolver);

        \$exportHandler->getHandler('myFile');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ExportHandlerTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ExportHandlerTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ExportHandlerTest.php");
    }
}
