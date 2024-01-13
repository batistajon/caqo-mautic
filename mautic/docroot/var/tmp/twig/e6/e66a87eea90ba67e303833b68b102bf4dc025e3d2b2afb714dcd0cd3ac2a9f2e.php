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

/* @bundles/CoreBundle/Controller/ThemeController.php */
class __TwigTemplate_fa55d6ff60ac4e0f26d4cd8bb817affca4595cc58410ab8a3782bcdacbf16e35 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Form\\Type\\ThemeUploadType;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Helper\\ThemeHelperInterface;
use Mautic\\IntegrationsBundle\\Helper\\BuilderIntegrationsHelper;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Class ThemeController.
 */
class ThemeController extends FormController
{
    /**
     * @return JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function indexAction()
    {
        //set some permissions
        \$permissions = \$this->get('mautic.security')->isGranted([
            'core:themes:view',
            'core:themes:create',
            'core:themes:edit',
            'core:themes:delete',
        ], 'RETURN_ARRAY');

        if (!\$permissions['core:themes:view']) {
            return \$this->accessDenied();
        }

        /** @var ThemeHelperInterface \$themeHelper */
        \$themeHelper = \$this->container->get('mautic.helper.theme');
        /** @var BuilderIntegrationsHelper \$builderIntegrationsHelper */
        \$builderIntegrationsHelper    = \$this->container->get('mautic.integrations.helper.builder_integrations');

        \$dir         = \$this->factory->getSystemPath('themes', true);
        \$action      = \$this->generateUrl('mautic_themes_index');
        \$form        = \$this->get('form.factory')->create(ThemeUploadType::class, [], ['action' => \$action]);

        if ('POST' == \$this->request->getMethod()) {
            if (isset(\$form) && !\$cancelled = \$this->isFormCancelled(\$form)) {
                if (\$this->isFormValid(\$form)) {
                    \$fileData = \$form['file']->getData();

                    if (!\$fileData) {
                        \$form->addError(
                            new FormError(
                                \$this->translator->trans('mautic.core.theme.upload.empty', [], 'validators')
                            )
                        );
                    } else {
                        \$fileName  = InputHelper::filename(\$fileData->getClientOriginalName());
                        \$themeName = basename(\$fileName, '.zip');

                        if (!empty(\$fileData)) {
                            \$extension = pathinfo(\$fileName, PATHINFO_EXTENSION);

                            if ('zip' === \$extension) {
                                try {
                                    \$fileData->move(\$dir, \$fileName);
                                    \$themeHelper->install(\$dir.'/'.\$fileName);
                                    \$this->addFlash('mautic.core.theme.installed', ['%name%' => \$themeName]);
                                } catch (\\Exception \$e) {
                                    \$form->addError(
                                        new FormError(
                                            \$this->translator->trans(\$e->getMessage(), [], 'validators')
                                        )
                                    );
                                }
                            } else {
                                \$form->addError(
                                    new FormError(
                                        \$this->translator->trans('mautic.core.not.allowed.file.extension', ['%extension%' => \$extension], 'validators')
                                    )
                                );
                            }
                        } else {
                            \$form->addError(
                                new FormError(
                                    \$this->translator->trans('mautic.dashboard.upload.filenotfound', [], 'validators')
                                )
                            );
                        }
                    }
                }
            }
        }

        return \$this->delegateView([
            'viewParameters' => [
                'items'         => \$themeHelper->getInstalledThemes('all', true, true),
                'builders'      => \$builderIntegrationsHelper->getBuilderNames(),
                'defaultThemes' => \$themeHelper->getDefaultThemes(),
                'form'          => \$form->createView(),
                'permissions'   => \$permissions,
                'security'      => \$this->get('mautic.security'),
            ],
            'contentTemplate' => 'MauticCoreBundle:Theme:list.html.php',
            'passthroughVars' => [
                'activeLink'    => '#mautic_themes_index',
                'mauticContent' => 'theme',
                'route'         => \$this->generateUrl('mautic_themes_index'),
            ],
        ]);
    }

    /**
     * Download a theme.
     *
     * @param string \$themeName
     *
     * @return JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse|Response
     */
    public function downloadAction(\$themeName)
    {
        /** @var ThemeHelperInterface \$themeHelper */
        \$themeHelper = \$this->container->get('mautic.helper.theme');
        \$flashes     = [];
        \$error       = false;

        if (!\$this->get('mautic.security')->isGranted('core:themes:view')) {
            return \$this->accessDenied();
        }

        if (!\$themeHelper->exists(\$themeName)) {
            \$flashes[] = [
                'type'    => 'error',
                'msg'     => 'mautic.core.theme.error.notfound',
                'msgVars' => ['%theme%' => \$themeName],
            ];
            \$error = true;
        }

        try {
            \$zipPath = \$themeHelper->zip(\$themeName);
        } catch (\\Exception \$e) {
            \$flashes[] = [
                'type' => 'error',
                'msg'  => \$e->getMessage(),
            ];
            \$error = true;
        }

        if (!\$error && !\$zipPath) {
            \$flashes[] = [
                'type' => 'error',
                'msg'  => 'mautic.core.permission.issue',
            ];
            \$error = true;
        }

        if (\$error) {
            return \$this->postActionRedirect(
                array_merge(\$this->getIndexPostActionVars(), [
                    'flashes' => \$flashes,
                ])
            );
        }

        \$response = new Response();
        \$response->headers->set('Content-Type', 'application/octet-stream');
        \$response->headers->set('Content-Length', (string) filesize(\$zipPath));

        \$stream = \$this->request->get('stream', 0);

        if (!\$stream) {
            \$response->headers->set('Content-Disposition', 'attachment;filename=\"'.\$themeName.'.zip\"');
        }

        \$response->setContent(file_get_contents(\$zipPath));

        return \$response;
    }

    /**
     * Deletes the theme.
     *
     * @param string \$themeName
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteAction(\$themeName)
    {
        \$flashes = [];

        if ('POST' == \$this->request->getMethod()) {
            \$flashes = \$this->deleteTheme(\$themeName);
        }

        return \$this->postActionRedirect(
            array_merge(\$this->getIndexPostActionVars(), [
                'flashes' => \$flashes,
            ])
        );
    }

    /**
     * Deletes a group of themes.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function batchDeleteAction()
    {
        \$flashes = [];

        if ('POST' == \$this->request->getMethod()) {
            \$themeNames = json_decode(\$this->request->query->get('ids', '{}'));

            foreach (\$themeNames as \$themeName) {
                \$flashes = \$this->deleteTheme(\$themeName);
            }
        }

        return \$this->postActionRedirect(
            array_merge(\$this->getIndexPostActionVars(), [
                'flashes' => \$flashes,
            ])
        );
    }

    /**
     * Deletes a theme.
     *
     * @return array
     */
    public function deleteTheme(\$themeName)
    {
        \$flashes     = [];
        \$themeHelper = \$this->container->get('mautic.helper.theme');

        if (!\$themeHelper->exists(\$themeName)) {
            \$flashes[] = [
                'type'    => 'error',
                'msg'     => 'mautic.core.theme.error.notfound',
                'msgVars' => ['%theme%' => \$themeName],
            ];
        } elseif (!\$this->get('mautic.security')->isGranted('core:themes:delete')) {
            return \$this->accessDenied();
        } elseif (in_array(\$themeName, \$themeHelper->getDefaultThemes())) {
            \$flashes[] = [
                'type'    => 'error',
                'msg'     => 'mautic.core.theme.cannot.be.removed',
                'msgVars' => ['%theme%' => \$themeName],
            ];
        } else {
            try {
                \$theme = \$themeHelper->getTheme(\$themeName);
                \$themeHelper->delete(\$themeName);
            } catch (\\Exception \$e) {
                \$flashes[] = [
                    'type'    => 'error',
                    'msg'     => 'mautic.core.error.delete.error',
                    'msgVars' => ['%error%' => \$e->getMessage()],
                ];
            }

            \$flashes[] = [
                'type'    => 'notice',
                'msg'     => 'mautic.core.notice.deleted',
                'msgVars' => [
                    '%name%' => \$theme->getName(),
                    '%id%'   => \$themeName,
                ],
            ];
        }

        return \$flashes;
    }

    /**
     * A helper method to keep the code DRY.
     *
     * @return array
     */
    public function getIndexPostActionVars()
    {
        return [
            'returnUrl'       => \$this->generateUrl('mautic_themes_index'),
            'contentTemplate' => 'MauticCoreBundle:theme:index',
            'passthroughVars' => [
                'activeLink'    => 'mautic_themes_index',
                'mauticContent' => 'theme',
            ],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/ThemeController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/ThemeController.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/ThemeController.php");
    }
}
