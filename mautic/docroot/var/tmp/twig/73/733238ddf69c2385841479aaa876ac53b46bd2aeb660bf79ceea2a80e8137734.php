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

/* @bundles/FormBundle/Tests/Validator/UploadFieldValidatorTest.php */
class __TwigTemplate_843ffdd6da9675672d892f6210593fcabe442a08b48f5ae1ae50d0a0eb90c833 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Validator\\FileUploadValidator;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Exception\\FileValidationException;
use Mautic\\FormBundle\\Exception\\NoFileGivenException;
use Mautic\\FormBundle\\Validator\\UploadFieldValidator;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;

class UploadFieldValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox No Files given
     *
     * @covers \\Mautic\\FormBundle\\Validator\\UploadFieldValidator::processFileValidation
     */
    public function testNoFilesGiven()
    {
        \$fileUploadValidatorMock = \$this->getMockBuilder(FileUploadValidator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileUploadValidatorMock->expects(\$this->never())
            ->method('validate');

        \$parameterBagMock = \$this->getMockBuilder(ParameterBag::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$parameterBagMock->expects(\$this->once())
            ->method('get')
            ->with('mauticform')
            ->willReturn(false);

        \$request        = new Request();
        \$request->files = \$parameterBagMock;

        \$fileUploadValidator = new UploadFieldValidator(\$fileUploadValidatorMock);

        \$field = new Field();

        \$this->expectException(NoFileGivenException::class);

        \$fileUploadValidator->processFileValidation(\$field, \$request);
    }

    /**
     * @testdox Exception should be thrown when validation fails
     *
     * @covers \\Mautic\\FormBundle\\Validator\\UploadFieldValidator::processFileValidation
     */
    public function testValidationFailed()
    {
        \$fileUploadValidatorMock = \$this->getMockBuilder(FileUploadValidator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileUploadValidatorMock->expects(\$this->once())
            ->method('validate')
            ->willThrowException(new FileInvalidException('Validation failed'));

        \$parameterBagMock = \$this->getMockBuilder(ParameterBag::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$files = [
            'file' => \$fileMock,
        ];

        \$parameterBagMock->expects(\$this->once())
            ->method('get')
            ->with('mauticform')
            ->willReturn(\$files);

        \$request        = new Request();
        \$request->files = \$parameterBagMock;

        \$fileUploadValidator = new UploadFieldValidator(\$fileUploadValidatorMock);

        \$field = new Field();
        \$field->setAlias('file');
        \$field->setProperties([
            'allowed_file_size'       => 1,
            'allowed_file_extensions' => ['jpg', 'gif'],
        ]);

        \$this->expectException(FileValidationException::class);
        \$this->expectExceptionMessage('Validation failed');

        \$fileUploadValidator->processFileValidation(\$field, \$request);
    }

    /**
     * @testdox No validation error
     *
     * @covers \\Mautic\\FormBundle\\Validator\\UploadFieldValidator::processFileValidation
     */
    public function testFileIsValid()
    {
        \$fileUploadValidatorMock = \$this->getMockBuilder(FileUploadValidator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileUploadValidatorMock->expects(\$this->once())
            ->method('validate');

        \$parameterBagMock = \$this->getMockBuilder(ParameterBag::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$files = [
            'file' => \$fileMock,
        ];

        \$parameterBagMock->expects(\$this->once())
            ->method('get')
            ->with('mauticform')
            ->willReturn(\$files);

        \$request        = new Request();
        \$request->files = \$parameterBagMock;

        \$fileUploadValidator = new UploadFieldValidator(\$fileUploadValidatorMock);

        \$field = new Field();
        \$field->setAlias('file');
        \$field->setProperties([
            'allowed_file_size'       => 1,
            'allowed_file_extensions' => ['jpg', 'gif'],
        ]);

        \$file = \$fileUploadValidator->processFileValidation(\$field, \$request);

        \$this->assertSame(\$fileMock, \$file);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Validator/UploadFieldValidatorTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Validator/UploadFieldValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Validator/UploadFieldValidatorTest.php");
    }
}