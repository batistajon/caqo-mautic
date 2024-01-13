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

/* @bundles/CoreBundle/Helper/FileUploader.php */
class __TwigTemplate_d4710a6165dc210a4459427d1c2223fd19b16947c3643001460f9f931c55d5cd extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Exception\\FileUploadException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FileUploader
{
    /**
     * @var FilePathResolver
     */
    private \$filePathResolver;

    public function __construct(FilePathResolver \$filePathResolver)
    {
        \$this->filePathResolver = \$filePathResolver;
    }

    /**
     * @param string \$uploadDir
     *
     * @return string
     *
     * @throws FileUploadException
     */
    public function upload(\$uploadDir, UploadedFile \$file)
    {
        try {
            \$fileName = \$this->filePathResolver->getUniqueFileName(\$uploadDir, \$file);
            \$this->filePathResolver->createDirectory(\$uploadDir);

            try {
                \$file->move(\$uploadDir, \$fileName);

                return \$fileName;
            } catch (FileException \$e) {
                throw new FileUploadException('Could not upload file');
            }
        } catch (FilePathException \$e) {
            throw new FileUploadException(\$e->getMessage());
        }
    }

    /**
     * @param string \$path
     */
    public function delete(\$path)
    {
        \$this->filePathResolver->delete(\$path);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/FileUploader.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/FileUploader.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/FileUploader.php");
    }
}
