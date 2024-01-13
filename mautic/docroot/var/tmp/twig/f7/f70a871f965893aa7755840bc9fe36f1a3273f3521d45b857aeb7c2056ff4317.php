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

/* @bundles/CoreBundle/Cache/MiddlewareCacheWarmer.php */
class __TwigTemplate_54a3d99238f292f95e99c03e720685ed28e7cc17f1b45af9ef9482700479fd9d extends Template
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

namespace Mautic\\CoreBundle\\Cache;

use ReflectionClass;
use ReflectionException;
use SplPriorityQueue;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;

class MiddlewareCacheWarmer implements CacheWarmerInterface
{
    /**
     * @var string
     */
    private \$env;

    /**
     * @var string
     */
    private \$cacheFile;

    /**
     * @var SplPriorityQueue|ReflectionClass[]
     */
    private \$specs;

    public function __construct(string \$env)
    {
        \$this->env       = \$env;
        \$this->specs     = new SplPriorityQueue();
    }

    public function warmUp(\$cacheDirectory)
    {
        \$this->cacheFile = sprintf('%s/middlewares.cache.php', \$cacheDirectory);
        \$this->createCacheFile(\$cacheDirectory);
    }

    public function isOptional()
    {
        return false;
    }

    private function createCacheFile(\$cacheDirectory): void
    {
        \$middlewarsDir = __DIR__.'/../../../middlewares';

        \$this->loadFromDirectory(\$middlewarsDir);

        \$envDir = \$middlewarsDir.'/'.ucfirst(\$this->env);

        if (file_exists(\$envDir)) {
            \$this->loadFromDirectory(\$envDir, \$this->env);
        }

        if (file_exists(\$this->cacheFile)) {
            unlink(\$this->cacheFile);
        }

        if (false === file_exists(\$cacheDirectory)) {
            mkdir(\$cacheDirectory, 0777, true);
        }

        \$data  = [];
        \$this->specs->setExtractFlags(SplPriorityQueue::EXTR_DATA);

        /** @var ReflectionClass \$middleware */
        foreach (\$this->specs as \$middleware) {
            \$data[] = \$middleware->getName();
        }

        \$content = sprintf('<?php return %s;', var_export(\$data, true));

        file_put_contents(\$this->cacheFile, \$content);
    }

    private function loadFromDirectory(string \$directory, ?string \$env = null): void
    {
        \$glob = glob(\$directory.'/*Middleware.php');

        if (!empty(\$glob)) {
            \$this->addMiddlewares(\$glob, \$env);
        }
    }

    private function addMiddlewares(array \$middlewares, ?string \$env = null)
    {
        \$prefix = 'Mautic\\\\Middleware\\\\';

        if (\$env) {
            \$prefix .= ucfirst(\$env).'\\\\';
        }

        foreach (\$middlewares as \$middleware) {
            \$this->push(\$prefix.basename(substr(\$middleware, 0, -4)));
        }
    }

    private function push(string \$middlewareClass): void
    {
        try {
            \$reflection = new ReflectionClass(\$middlewareClass);
            \$priority   = \$reflection->getConstant('PRIORITY');

            \$this->specs->insert(\$reflection, \$priority);
        } catch (ReflectionException \$e) {
            /* If there's an error getting the kernel class, it's
             * an invalid middleware. If it's invalid, don't push
             * it to the stack
             */
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Cache/MiddlewareCacheWarmer.php";
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
        return new Source("", "@bundles/CoreBundle/Cache/MiddlewareCacheWarmer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Cache/MiddlewareCacheWarmer.php");
    }
}
