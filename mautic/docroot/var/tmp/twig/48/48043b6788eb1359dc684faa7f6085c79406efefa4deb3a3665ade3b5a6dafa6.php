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

/* @bundles/CoreBundle/Helper/CacheHelper.php */
class __TwigTemplate_47388e2e8f63b0bc209dbdb0a51d94766241272956f2d8c96c1319bdc3b83722 extends Template
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

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CacheHelper
{
    private string \$cacheDir;
    private ?Session \$session;
    private PathsHelper \$pathsHelper;
    private KernelInterface \$kernel;

    public function __construct(string \$cacheDir, ?Session \$session, PathsHelper \$pathsHelper, KernelInterface \$kernel)
    {
        \$this->cacheDir    = \$cacheDir;
        \$this->session     = \$session;
        \$this->pathsHelper = \$pathsHelper;
        \$this->kernel      = \$kernel;
    }

    /**
     * Deletes the cache folder.
     */
    public function nukeCache(): void
    {
        \$this->clearSessionItems();

        \$fs = new Filesystem();
        \$fs->remove(\$this->cacheDir);

        \$this->clearOpcache();
        \$this->clearApcuCache();
    }

    public function refreshConfig(): void
    {
        \$this->clearSessionItems();
        \$this->clearConfigOpcache();
        \$this->clearApcuCache();
    }

    /**
     * Run the bin/console cache:clear command.
     */
    public function clearSymfonyCache(): int
    {
        \$env = \$this->kernel->getEnvironment();

        \$application = new Application(\$this->kernel);
        \$application->setAutoExit(false);

        \$input = new ArrayInput([
            'command' => 'cache:clear',
            '--env'   => \$env,
        ]);

        \$output = new BufferedOutput();

        return \$application->run(\$input, \$output);
    }

    /**
     * Clear cache related session items.
     */
    protected function clearSessionItems(): void
    {
        if (!\$this->session) {
            return;
        }

        // Clear the menu items and icons so they can be rebuilt
        \$this->session->remove('mautic.menu.items');
        \$this->session->remove('mautic.menu.icons');
    }

    private function clearConfigOpcache(): void
    {
        if (!function_exists('opcache_reset') || !function_exists('opcache_invalidate')) {
            return;
        }

        opcache_invalidate(\$this->pathsHelper->getLocalConfigurationFile(), true);
    }

    private function clearOpcache(): void
    {
        if (!function_exists('opcache_reset')) {
            return;
        }

        opcache_reset();
    }

    private function clearApcuCache(): void
    {
        if (!function_exists('apcu_clear_cache')) {
            return;
        }

        apcu_clear_cache();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CacheHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CacheHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/CacheHelper.php");
    }
}
