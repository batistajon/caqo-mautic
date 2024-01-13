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

/* @bundles/CoreBundle/Helper/FileProperties.php */
class __TwigTemplate_a2117d183d2e089021a6adb298e11ad873b9b47b812dda080448cdd64b525808 extends Template
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

use Mautic\\CoreBundle\\Exception\\FileInvalidException;

class FileProperties
{
    /**
     * @param string \$filename
     *
     * @return int
     *
     * @throws FileInvalidException
     */
    public function getFileSize(\$filename)
    {
        if (!file_exists(\$filename) || !is_readable(\$filename)) {
            throw new FileInvalidException();
        }

        return filesize(\$filename);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/FileProperties.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/FileProperties.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/FileProperties.php");
    }
}
