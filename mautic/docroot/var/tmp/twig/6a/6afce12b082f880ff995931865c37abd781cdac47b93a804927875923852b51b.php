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

/* @bundles/CoreBundle/Controller/Api/ThemeApiController.php */
class __TwigTemplate_2ac0c4fd801a419cdb701f641ac56d4fa262bb6f061b3e5993e31993200ba811 extends Template
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

namespace Mautic\\CoreBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\BinaryFileResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class ThemeApiController.
 */
class ThemeApiController extends CommonApiController
{
    /**
     * @var Mautic\\CoreBundle\\Helper\\ThemeHelper
     */
    protected \$themeHelper;

    public function initialize(FilterControllerEvent \$event)
    {
        \$this->themeHelper = \$this->container->get('mautic.helper.theme');

        parent::initialize(\$event);
    }

    /**
     * Accepts the zip file and installs the theme from it.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function newAction(Request \$request)
    {
        if (!\$this->security->isGranted('core:themes:create')) {
            return \$this->accessDenied();
        }

        \$response  = ['success' => false];
        \$themeZip  = \$request->files->get('file');
        \$extension = \$themeZip->getClientOriginalExtension();

        if (!\$themeZip) {
            return \$this->returnError(
                \$this->translator->trans('mautic.core.theme.upload.empty', [], 'validators'),
                Response::HTTP_BAD_REQUEST
            );
        } elseif ('zip' !== \$extension) {
            return \$this->returnError(
                \$this->translator->trans('mautic.core.not.allowed.file.extension', ['%extension%' => \$extension], 'validators'),
                Response::HTTP_BAD_REQUEST
            );
        } else {
            \$fileName  = InputHelper::filename(\$themeZip->getClientOriginalName());
            \$themeName = basename(\$fileName, '.zip');
            \$dir       = \$this->get('mautic.helper.paths')->getSystemPath('themes', true);

            if (!empty(\$themeZip)) {
                try {
                    \$themeZip->move(\$dir, \$fileName);
                    \$response['success'] = \$this->themeHelper->install(\$dir.'/'.\$fileName);
                } catch (\\Exception \$e) {
                    return \$this->returnError(
                        \$this->translator->trans(\$e->getMessage(), [], 'validators')
                    );
                }
            } else {
                return \$this->returnError(
                    \$this->translator->trans('mautic.dashboard.upload.filenotfound', [], 'validators')
                );
            }
        }

        \$view = \$this->view(\$response);

        return \$this->handleView(\$view);
    }

    /**
     * Get zip file of a theme.
     *
     * @param string \$theme dir name
     *
     * @return BinaryFileResponse
     */
    public function getAction(\$theme)
    {
        if (!\$this->security->isGranted('core:themes:view')) {
            return \$this->accessDenied();
        }

        try {
            \$themeZip = \$this->themeHelper->zip(\$theme);
        } catch (\\Exception \$e) {
            return \$this->returnError(\$e->getMessage());
        }

        if (!\$themeZip) {
            return \$this->returnError(
                \$this->translator->trans(
                    'mautic.core.dir.not.accesssible',
                    ['%dir%' => \$theme]
                )
            );
        }

        \$response = new BinaryFileResponse(\$themeZip);
        \$response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

        return \$response;
    }

    /**
     * List the folders (themes) in the /themes directory.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function listAction()
    {
        if (!\$this->security->isGranted('core:themes:view')) {
            return \$this->accessDenied();
        }

        try {
            \$themes = \$this->themeHelper->getInstalledThemes('all', true, false, false);
        } catch (\\Exception \$e) {
            return \$this->returnError(\$e->getMessage());
        }

        \$view = \$this->view(['themes' => \$themes]);

        return \$this->handleView(\$view);
    }

    /**
     * Delete a theme.
     *
     * @param string \$theme
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function deleteAction(\$theme)
    {
        if (!\$this->security->isGranted('core:themes:delete')) {
            return \$this->accessDenied();
        }

        try {
            \$this->themeHelper->delete(\$theme);
            \$response = ['success' => true];
        } catch (\\Exception \$e) {
            return \$this->returnError(\$e->getMessage());
        }

        \$view = \$this->view(\$response);

        return \$this->handleView(\$view);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/Api/ThemeApiController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/Api/ThemeApiController.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/Api/ThemeApiController.php");
    }
}
