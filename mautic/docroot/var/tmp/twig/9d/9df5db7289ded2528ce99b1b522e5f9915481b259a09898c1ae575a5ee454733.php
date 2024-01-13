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

/* @bundles/AssetBundle/Controller/UploadController.php */
class __TwigTemplate_ebe94fbc569cb27c71744dd3cb71c53cdd601aa164bfbc119ae68225674591f9 extends Template
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

namespace Mautic\\AssetBundle\\Controller;

use Oneup\\UploaderBundle\\Controller\\DropzoneController;
use Oneup\\UploaderBundle\\Uploader\\Response\\EmptyResponse;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class UploadController extends DropzoneController
{
    public function upload(): JsonResponse
    {
        /** @var Request \$request */
        \$request  = \$this->container->get('request_stack')->getCurrentRequest();
        \$response = new EmptyResponse();
        \$files    = \$this->getFiles(\$request->files);

        if (!empty(\$files)) {
            foreach (\$files as \$file) {
                try {
                    \$this->handleUpload(\$file, \$response, \$request);
                } catch (UploadException \$e) {
                    \$this->errorHandler->addException(\$response, \$e);
                } catch (\\Exception \$e) {
                    error_log(\$e);

                    \$error = new UploadException(\$this->container->get('translator')->trans('mautic.asset.error.file.failed'));
                    \$this->errorHandler->addException(\$response, \$error);
                }
            }
        } else {
            \$error = new UploadException(\$this->container->get('translator')->trans('mautic.asset.error.file.failed'));
            \$this->errorHandler->addException(\$response, \$error);
        }

        return \$this->createSupportedJsonResponse(\$response->assemble());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Controller/UploadController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/UploadController.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Controller/UploadController.php");
    }
}
