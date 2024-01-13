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

/* @bundles/CoreBundle/Tests/Unit/Validator/FileUploadValidatorTest.php */
class __TwigTemplate_29b24373948bbc2aeb515b6a005d3c93bc4d7c560b3be1679e80884e84de03ba extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Validator\\FileUploadValidator;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FileUploadValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Check that extension is valid
     */
    public function testValidExtension(): void
    {
        \$translatorMock = \$this->createMock(TranslatorInterface::class);
        \$translatorMock->expects(\$this->never())
            ->method('trans');

        \$fileUploadValidator = new FileUploadValidator(\$translatorMock);

        \$extension         = 'jpg';
        \$allowedExtensions = [
            'jpg',
            'png',
        ];
        \$extensionErrorMsg = 'My message';

        \$fileUploadValidator->checkExtension(\$extension, \$allowedExtensions, \$extensionErrorMsg);
    }

    /**
     * @testdox Check that extension is not valid
     */
    public function testInvalidExtension(): void
    {
        \$translatorMock = \$this->createMock(TranslatorInterface::class);
        \$translatorMock->expects(\$this->once())
            ->method('trans')
            ->willReturn('Extension is not allowed');

        \$fileUploadValidator = new FileUploadValidator(\$translatorMock);

        \$extension         = 'gif';
        \$allowedExtensions = [
            'jpg',
            'png',
        ];
        \$extensionErrorMsg = 'My message';

        \$this->expectException(FileInvalidException::class);
        \$this->expectExceptionMessage('Extension is not allowed');

        \$fileUploadValidator->checkExtension(\$extension, \$allowedExtensions, \$extensionErrorMsg);
    }

    /**
     * @testdox Check file size is ok
     */
    public function testFileSizeIsOk(): void
    {
        \$translatorMock = \$this->createMock(TranslatorInterface::class);
        \$translatorMock->expects(\$this->never())
            ->method('trans');

        \$fileUploadValidator = new FileUploadValidator(\$translatorMock);

        \$fileSize        = 5242880; //5MB
        \$maxUploadSizeMB = 6;
        \$sizeErrorMsg    = 'My message';

        \$fileUploadValidator->checkFileSize(\$fileSize, \$maxUploadSizeMB, \$sizeErrorMsg);
    }

    /**
     * @testdox Check file size bigger than allowed one
     */
    public function testFileSizeIsBiggerThanAllowed(): void
    {
        \$translatorMock = \$this->createMock(TranslatorInterface::class);
        \$translatorMock->expects(\$this->once())
            ->method('trans')
            ->willReturn('File size limit exceeded');

        \$fileUploadValidator = new FileUploadValidator(\$translatorMock);

        \$fileSize        = 5242880; //5MB
        \$maxUploadSizeMB = 4;
        \$sizeErrorMsg    = 'My message';

        \$this->expectException(FileInvalidException::class);
        \$this->expectExceptionMessage('File size limit exceeded');

        \$fileUploadValidator->checkFileSize(\$fileSize, \$maxUploadSizeMB, \$sizeErrorMsg);
    }

    /**
     * @testdox Test concat message from validators
     */
    public function testBadExtensionAndBadSize(): void
    {
        \$translatorMock = \$this->createMock(TranslatorInterface::class);
        \$translatorMock->expects(\$this->exactly(2))
            ->method('trans')
            ->willReturnOnConsecutiveCalls('Extension is not allowed', 'File size limit exceeded');

        \$fileUploadValidator = new FileUploadValidator(\$translatorMock);

        \$extension         = 'gif';
        \$allowedExtensions = [
            'jpg',
            'png',
        ];
        \$extensionErrorMsg = 'My message';

        \$fileSize        = 5242880; //5MB
        \$maxUploadSizeMB = 4;
        \$sizeErrorMsg    = 'My message';

        \$this->expectException(FileInvalidException::class);
        \$this->expectExceptionMessage('Extension is not allowed<br />File size limit exceeded');

        \$fileUploadValidator->validate(\$fileSize, \$extension, \$maxUploadSizeMB, \$allowedExtensions, \$extensionErrorMsg, \$sizeErrorMsg);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Validator/FileUploadValidatorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Validator/FileUploadValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Validator/FileUploadValidatorTest.php");
    }
}
