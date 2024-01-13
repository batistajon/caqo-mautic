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

/* @bundles/FormBundle/Crate/UploadFileCrate.php */
class __TwigTemplate_04f790e6e2f3aa7ee5e30278fc368ab86f326d380fbb4c72fd22359b1d3950d6 extends Template
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

class UploadFileCrate implements \\Iterator
{
    /**
     * @var array|FileFieldCrate[]
     */
    private \$fileFieldCrate = [];

    /**
     * @var int
     */
    private \$position = 0;

    public function addFile(UploadedFile \$file, Field \$field)
    {
        \$this->fileFieldCrate[] = new FileFieldCrate(\$file, \$field);
    }

    public function rewind()
    {
        \$this->position = 0;
    }

    public function current()
    {
        return \$this->fileFieldCrate[\$this->position];
    }

    public function key()
    {
        return \$this->position;
    }

    public function next()
    {
        ++\$this->position;
    }

    public function valid()
    {
        return isset(\$this->fileFieldCrate[\$this->position]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Crate/UploadFileCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/UploadFileCrate.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Crate/UploadFileCrate.php");
    }
}
