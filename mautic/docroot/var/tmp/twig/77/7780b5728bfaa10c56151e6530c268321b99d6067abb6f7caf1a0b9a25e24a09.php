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

/* @bundles/ReportBundle/Model/ExportHandler.php */
class __TwigTemplate_c41b5f1484be8b71ec509f6ae365fd032f7d58c8f957825d67186cf6cf9929dc extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\ReportBundle\\Exception\\FileIOException;

class ExportHandler
{
    /**
     * @var string
     */
    private \$dir;

    /**
     * @var FilePathResolver
     */
    private \$filePathResolver;

    public function __construct(CoreParametersHelper \$coreParametersHelper, FilePathResolver \$filePathResolver)
    {
        \$this->dir              = \$coreParametersHelper->get('report_temp_dir');
        \$this->filePathResolver = \$filePathResolver;
    }

    /**
     * @param \$fileName
     *
     * @return bool|resource
     *
     * @throws FileIOException
     */
    public function getHandler(\$fileName)
    {
        \$path = \$this->getPath(\$fileName);

        if (false === (\$handler = @fopen(\$path, 'a'))) {
            throw new FileIOException('Could not open file '.\$path);
        }

        return \$handler;
    }

    /**
     * @param resource \$handler
     */
    public function closeHandler(\$handler)
    {
        fclose(\$handler);
    }

    /**
     * @param string \$fileName
     */
    public function removeFile(\$fileName)
    {
        try {
            \$path = \$this->getPath(\$fileName);
            \$this->filePathResolver->delete(\$path);
        } catch (FileIOException \$e) {
        }
    }

    /**
     * @param \$fileName
     *
     * @return string
     *
     * @throws FileIOException
     */
    public function getPath(\$fileName)
    {
        try {
            \$this->filePathResolver->createDirectory(\$this->dir);
        } catch (FilePathException \$e) {
            throw new FileIOException('Could not create directory '.\$this->dir, 0, \$e);
        }

        return \$this->dir.'/'.\$fileName.'.csv';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ExportHandler.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ExportHandler.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Model/ExportHandler.php");
    }
}
