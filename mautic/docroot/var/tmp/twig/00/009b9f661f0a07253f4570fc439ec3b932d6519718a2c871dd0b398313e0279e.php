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

/* @bundles/CoreBundle/Validator/FileUploadValidator.php */
class __TwigTemplate_de9f83cd1e297f5b30184bf448a1aea7536ff0600513217e18e2eba985e3470b extends Template
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

namespace Mautic\\CoreBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Helper\\FileHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FileUploadValidator
{
    /**
     * @param TranslatorInterface \$translator
     */
    protected \$translator;

    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * @param int    \$fileSize          In bytes
     * @param string \$fileExtension
     * @param int    \$maxUploadSize     In bytes
     * @param string \$extensionErrorMsg
     * @param string \$sizeErrorMsg
     *
     * @throws FileInvalidException
     */
    public function validate(\$fileSize, \$fileExtension, \$maxUploadSize, array \$allowedExtensions, \$extensionErrorMsg, \$sizeErrorMsg)
    {
        \$errors = [];

        try {
            \$this->checkExtension(\$fileExtension, \$allowedExtensions, \$extensionErrorMsg);
        } catch (FileInvalidException \$e) {
            \$errors[] = \$e->getMessage();
        }

        try {
            \$this->checkFileSize(\$fileSize, \$maxUploadSize, \$sizeErrorMsg);
        } catch (FileInvalidException \$e) {
            \$errors[] = \$e->getMessage();
        }

        if (\$errors) {
            \$message = implode('<br />', \$errors);
            throw new FileInvalidException(\$message);
        }
    }

    /**
     * @param string \$extension
     * @param string \$extensionErrorMsg
     *
     * @throws FileInvalidException
     */
    public function checkExtension(\$extension, array \$allowedExtensions, \$extensionErrorMsg)
    {
        if (!in_array(strtolower(\$extension), array_map('strtolower', \$allowedExtensions), true)) {
            \$error = \$this->translator->trans(\$extensionErrorMsg, [
                '%fileExtension%' => \$extension,
                '%extensions%'    => implode(', ', \$allowedExtensions),
            ], 'validators');

            throw new FileInvalidException(\$error);
        }
    }

    /**
     * @param int    \$fileSize
     * @param string \$maxUploadSizeMB Max file size in MB
     * @param string \$sizeErrorMsg
     *
     * @throws FileInvalidException
     */
    public function checkFileSize(\$fileSize, \$maxUploadSizeMB, \$sizeErrorMsg)
    {
        if (!\$maxUploadSizeMB) {
            return;
        }

        \$maxUploadSize = FileHelper::convertMegabytesToBytes(\$maxUploadSizeMB);

        if (\$fileSize > \$maxUploadSize) {
            \$message = \$this->translator->trans(\$sizeErrorMsg, [
                '%fileSize%' => FileHelper::convertBytesToMegabytes(\$fileSize),
                '%maxSize%'  => FileHelper::convertBytesToMegabytes(\$maxUploadSize),
            ], 'validators');

            throw new FileInvalidException(\$message);
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
        return "@bundles/CoreBundle/Validator/FileUploadValidator.php";
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
        return new Source("", "@bundles/CoreBundle/Validator/FileUploadValidator.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Validator/FileUploadValidator.php");
    }
}
