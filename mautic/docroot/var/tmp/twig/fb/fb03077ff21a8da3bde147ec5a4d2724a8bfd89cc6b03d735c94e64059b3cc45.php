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

/* @bundles/MarketplaceBundle/Controller/AjaxController.php */
class __TwigTemplate_951123a505c1d9858e58fd046be97bf67f1e5bd2219edcd804a06e22c9cc9a23 extends Template
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

declare(strict_types=1);

namespace Mautic\\MarketplaceBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    private ComposerHelper \$composer;
    private CacheHelper \$cacheHelper;
    private LoggerInterface \$logger;

    public function __construct(ComposerHelper \$composer, CacheHelper \$cacheHelper, LoggerInterface \$logger)
    {
        \$this->composer    = \$composer;
        \$this->cacheHelper = \$cacheHelper;
        \$this->logger      = \$logger;
    }

    public function installPackageAction(Request \$request): JsonResponse
    {
        \$data   = json_decode(\$request->getContent(), true);

        if (empty(\$data['vendor']) || empty(\$data['package'])) {
            return \$this->sendJsonResponse([
                'error' => \$this->translator->trans('marketplace.package.request.details.missing'),
            ], 400);
        }

        \$packageName = \$data['vendor'].'/'.\$data['package'];

        if (\$this->composer->isInstalled(\$packageName)) {
            return \$this->sendJsonResponse([
                'error' => \$this->translator->trans('marketplace.package.install.already.installed'),
            ], 400);
        }

        try {
            \$installResult = \$this->composer->install(\$packageName);

            if (0 !== \$installResult->exitCode) {
                \$this->installError(new \\Exception(\$installResult->output));
            }
        } catch (\\Exception \$e) {
            return \$this->installError(\$e);
        }

        // Note: do not do anything except returning a response after clearing the cache to prevent errors
        \$clearCacheResult = \$this->clearCacheOrReturnError();

        if (null !== \$clearCacheResult) {
            return \$clearCacheResult;
        }

        return new JsonResponse(['success' => true]);
    }

    public function removePackageAction(Request \$request): JsonResponse
    {
        \$data   = json_decode(\$request->getContent(), true);

        if (empty(\$data['vendor']) || empty(\$data['package'])) {
            return \$this->sendJsonResponse([
                'error' => \$this->translator->trans('marketplace.package.request.details.missing'),
            ], 400);
        }

        \$packageName = \$data['vendor'].'/'.\$data['package'];

        if (!\$this->composer->isInstalled(\$packageName)) {
            return \$this->sendJsonResponse([
                'error' => \$this->translator->trans('marketplace.package.remove.not.installed'),
            ], 400);
        }

        try {
            \$removeResult = \$this->composer->remove(\$packageName);

            if (0 !== \$removeResult->exitCode) {
                return \$this->removeError(new \\Exception(\$removeResult->output));
            }
        } catch (\\Exception \$e) {
            return \$this->removeError(\$e);
        }

        // Note: do not do anything except returning a response after clearing the cache to prevent errors
        \$clearCacheResult = \$this->clearCacheOrReturnError();

        if (null !== \$clearCacheResult) {
            return \$clearCacheResult;
        }

        return new JsonResponse(['success' => true]);
    }

    private function clearCacheOrReturnError(): ?JsonResponse
    {
        try {
            \$exitCode = \$this->cacheHelper->clearSymfonyCache();

            if (0 !== \$exitCode) {
                \$this->logger->error('Could not clear Mautic\\'s cache. Please try again.');

                return \$this->sendJsonResponse([
                    'error' => \$this->translator->trans('marketplace.package.cache.clear.failed'),
                ], 500);
            }
        } catch (\\Exception \$e) {
            \$this->logger->error('Could not clear Mautic\\'s cache. Details: '.\$e->getMessage());

            return \$this->sendJsonResponse([
                'error' => \$this->translator->trans('marketplace.package.cache.clear.failed'),
            ], 500);
        }

        return null;
    }

    private function installError(\\Exception \$e): JsonResponse
    {
        \$this->logger->error('Installation of plugin through Composer has failed: '.\$e->getMessage());

        return \$this->sendJsonResponse([
            'error' => \$this->translator->trans('marketplace.package.install.failed'),
        ], 500);
    }

    private function removeError(\\Exception \$e): JsonResponse
    {
        \$this->logger->error('Error while removing package through Composer: '.\$e->getMessage());

        return \$this->sendJsonResponse([
            'error' => \$this->translator->trans('marketplace.package.remove.failed'),
        ], 500);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Controller/AjaxController.php");
    }
}
