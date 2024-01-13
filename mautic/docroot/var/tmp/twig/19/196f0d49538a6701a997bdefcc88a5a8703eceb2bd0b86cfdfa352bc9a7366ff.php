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

/* @bundles/AssetBundle/Controller/PublicController.php */
class __TwigTemplate_125e45be89a7de5f66617d9978461ad71cd2928e57e453229ea245d339713cc3 extends Template
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

use Mautic\\CoreBundle\\Controller\\FormController as CommonFormController;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Response;

class PublicController extends CommonFormController
{
    /**
     * @param string \$slug
     *
     * @return Response
     */
    public function downloadAction(\$slug)
    {
        //find the asset
        \$security = \$this->get('mautic.security');

        /** @var \\Mautic\\AssetBundle\\Model\\AssetModel \$model */
        \$model = \$this->getModel('asset');

        /** @var \\Mautic\\AssetBundle\\Entity\\Asset \$entity */
        \$entity = \$model->getEntityBySlugs(\$slug);

        if (!empty(\$entity)) {
            \$published = \$entity->isPublished();

            //make sure the asset is published or deny access if not
            if ((!\$published) && (!\$security->hasEntityAccess('asset:assets:viewown', 'asset:assets:viewother', \$entity->getCreatedBy()))) {
                \$model->trackDownload(\$entity, \$this->request, 401);

                return \$this->accessDenied();
            }

            //make sure URLs match up
            \$url        = \$model->generateUrl(\$entity, false);
            \$requestUri = \$this->request->getRequestUri();
            //remove query
            \$query = \$this->request->getQueryString();

            if (!empty(\$query)) {
                \$requestUri = str_replace(\"?{\$query}\", '', \$url);
            }

            //redirect if they don't match
            if (\$requestUri != \$url) {
                \$model->trackDownload(\$entity, \$this->request, 301);

                return \$this->redirect(\$url, 301);
            }

            if (\$entity->isRemote()) {
                \$model->trackDownload(\$entity, \$this->request, 200);

                // Redirect to remote URL
                \$response = new RedirectResponse(\$entity->getRemotePath());
            } else {
                try {
                    //set the uploadDir
                    \$entity->setUploadDir(\$this->get('mautic.helper.core_parameters')->get('upload_dir'));
                    \$contents = \$entity->getFileContents();
                    \$model->trackDownload(\$entity, \$this->request, 200);
                } catch (\\Exception \$e) {
                    \$model->trackDownload(\$entity, \$this->request, 404);

                    return \$this->notFound();
                }

                \$response = new Response();

                if (\$entity->getDisallow()) {
                    \$response->headers->set('X-Robots-Tag', 'noindex, nofollow, noarchive');
                }

                \$response->headers->set('Content-Type', \$entity->getFileMimeType());

                \$stream = \$this->request->get('stream', 0);
                if (!\$stream) {
                    \$response->headers->set('Content-Disposition', 'attachment;filename=\"'.\$entity->getOriginalFileName());
                }
                \$response->setContent(\$contents);
            }

            return \$response;
        }

        \$model->trackDownload(\$entity, \$this->request, 404);

        return \$this->notFound();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Controller/PublicController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/PublicController.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Controller/PublicController.php");
    }
}
