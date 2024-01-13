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

/* @bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php */
class __TwigTemplate_9ae49642fcc619f35726fd0961d1f3c5a84980e2ecaea545ded4288f8d02faed extends Template
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

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Exception\\FileUploadException;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\CoreBundle\\Helper\\FileUploader;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FileUploaderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Uploader uploads files correctly
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::upload
     */
    public function testSuccessfulUpload()
    {
        \$uploadDir = 'my/upload/dir';
        \$fileName  = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock->expects(\$this->once())
            ->method('move')
            ->with(\$uploadDir, \$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('getUniqueFileName')
            ->with(\$uploadDir, \$fileMock)
            ->willReturn(\$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('createDirectory')
            ->with(\$uploadDir);

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$fileUploader->upload(\$uploadDir, \$fileMock);
    }

    /**
     * @testdox Throw an Exception if Uploader could not create directory
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::upload
     */
    public function testCouldNotCreateDirectory()
    {
        \$uploadDir = 'my/upload/dir';
        \$fileName  = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock->expects(\$this->never())
            ->method('move');

        \$filePathResolverMock->expects(\$this->once())
            ->method('getUniqueFileName')
            ->with(\$uploadDir, \$fileMock)
            ->willReturn(\$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('createDirectory')
            ->with(\$uploadDir)
            ->willThrowException(new FilePathException('Could not create directory'));

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$this->expectException(FileUploadException::class);
        \$this->expectExceptionMessage('Could not create directory');

        \$fileUploader->upload(\$uploadDir, \$fileMock);
    }

    /**
     * @testdox Throw an Exception if Uploader could not move file to givven directory
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::upload
     */
    public function testCouldNotMoveFile()
    {
        \$uploadDir = 'my/upload/dir';
        \$fileName  = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock->expects(\$this->once())
            ->method('move')
            ->with(\$uploadDir, \$fileName)
            ->willThrowException(new FileException());

        \$filePathResolverMock->expects(\$this->once())
            ->method('getUniqueFileName')
            ->with(\$uploadDir, \$fileMock)
            ->willReturn(\$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('createDirectory')
            ->with(\$uploadDir);

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$this->expectException(FileUploadException::class);
        \$this->expectExceptionMessage('Could not upload file');

        \$fileUploader->upload(\$uploadDir, \$fileMock);
    }

    /**
     * @testdox Test for file delete
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::delete
     */
    public function testDeleteFile()
    {
        \$file = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolverMock->expects(\$this->once())
            ->method('delete')
            ->with(\$file);

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$fileUploader->delete(\$file);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php");
    }
}
