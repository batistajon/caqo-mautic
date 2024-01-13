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

/* @bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php */
class __TwigTemplate_31e5ea6d7102bd59156d4661ed911a0dea16e30acd2f57b843f96122a9736d99 extends Template
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

namespace Mautic\\AssetBundle\\ErrorHandler;

use Exception;
use Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\ErrorHandlerInterface;
use Oneup\\UploaderBundle\\Uploader\\Response\\AbstractResponse;

class DropzoneErrorHandler implements ErrorHandlerInterface
{
    public function addException(AbstractResponse \$response, Exception \$exception): void
    {
        // HTTP status between 400 and 500 should be set here.
        // Dropzone will handle error messages itself then.
        // Unfortunatelly UploaderBundle will have this option in v 3.
        \$response['error'] = \$exception->getMessage();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php";
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
        return new Source("", "@bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php");
    }
}
