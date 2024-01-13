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

/* @bundles/FormBundle/Crate/FileFieldCrate.php */
class __TwigTemplate_1eb1faa5bbc72a72b416f3254b01fcac0c93398b1b21b3cf99fd2e9a105f0365 extends Template
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

namespace Mautic\\FormBundle\\Crate;

use Mautic\\FormBundle\\Entity\\Field;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FileFieldCrate
{
    /**
     * @var UploadedFile
     */
    private \$uploadedFile;

    /**
     * @var Field
     */
    private \$field;

    public function __construct(UploadedFile \$uploadedFile, Field \$field)
    {
        \$this->uploadedFile = \$uploadedFile;
        \$this->field        = \$field;
    }

    /**
     * @return UploadedFile
     */
    public function getUploadedFile()
    {
        return \$this->uploadedFile;
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return \$this->field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Crate/FileFieldCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/FileFieldCrate.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Crate/FileFieldCrate.php");
    }
}
