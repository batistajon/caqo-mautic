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

/* @bundles/FormBundle/Validator/UploadFieldValidator.php */
class __TwigTemplate_41fbf32e7bcfb58e184df94a691321655fed29927ca34c3fb20b085ac198d28b extends Template
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

namespace Mautic\\FormBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Validator\\FileUploadValidator;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Exception\\FileValidationException;
use Mautic\\FormBundle\\Exception\\NoFileGivenException;
use Mautic\\FormBundle\\Form\\Type\\FormFieldFileType;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

class UploadFieldValidator
{
    /**
     * @var FileUploadValidator
     */
    private \$fileUploadValidator;

    public function __construct(FileUploadValidator \$fileUploadValidator)
    {
        \$this->fileUploadValidator = \$fileUploadValidator;
    }

    /**
     * @return UploadedFile
     *
     * @throws FileValidationException
     * @throws NoFileGivenException
     */
    public function processFileValidation(Field \$field, Request \$request)
    {
        \$files = \$request->files->get('mauticform');

        if (!\$files || !array_key_exists(\$field->getAlias(), \$files)) {
            throw new NoFileGivenException();
        }

        /** @var UploadedFile \$file */
        \$file = \$files[\$field->getAlias()];

        if (!\$file instanceof UploadedFile) {
            throw new NoFileGivenException();
        }

        \$properties = \$field->getProperties();

        \$maxUploadSize     = \$properties[FormFieldFileType::PROPERTY_ALLOWED_FILE_SIZE];
        \$allowedExtensions = \$properties[FormFieldFileType::PROPERTY_ALLOWED_FILE_EXTENSIONS];

        try {
            \$this->fileUploadValidator->validate(\$file->getSize(), \$file->getClientOriginalExtension(), \$maxUploadSize, \$allowedExtensions, 'mautic.form.submission.error.file.extension', 'mautic.form.submission.error.file.size');

            return \$file;
        } catch (FileInvalidException \$e) {
            throw new FileValidationException(\$e->getMessage());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Validator/UploadFieldValidator.php";
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
        return new Source("", "@bundles/FormBundle/Validator/UploadFieldValidator.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Validator/UploadFieldValidator.php");
    }
}
