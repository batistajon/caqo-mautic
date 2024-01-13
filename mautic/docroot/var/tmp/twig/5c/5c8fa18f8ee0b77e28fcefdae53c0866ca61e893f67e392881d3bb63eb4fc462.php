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

/* @bundles/CacheBundle/EventListener/CacheClearSubscriber.php */
class __TwigTemplate_8a8682894d9312416a41a4aa23db1d5bb906235b90657043d8139a3c0bc67fe4 extends Template
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

namespace Mautic\\CacheBundle\\EventListener;

use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\HttpKernel\\CacheClearer\\CacheClearerInterface;

class CacheClearSubscriber implements CacheClearerInterface
{
    /**
     * @var CacheProvider
     */
    private \$cacheProvider;
    /**
     * @var LoggerInterface
     */
    private \$logger;

    public function __construct(AdapterInterface \$cacheProvider, LoggerInterface \$logger)
    {
        \$this->cacheProvider = \$cacheProvider;
        \$this->logger        = \$logger;
    }

    /**
     * @param string \$cacheDir
     *
     * @throws \\Exception
     */
    public function clear(\$cacheDir): void
    {
        try {
            \$reflect = new \\ReflectionClass(\$this->cacheProvider->getCacheAdapter());
            \$adapter = \$reflect->getShortName();
        } catch (\\ReflectionException \$e) {
            \$adapter = 'unknown';
        }

        try {
            if (!\$this->cacheProvider->clear()) {
                \$this->logger->emergency('Failed to clear Mautic cache.', ['adapter' => \$adapter]);
                throw new \\Exception('Failed to clear '.\$adapter);
            }
        } catch (\\PDOException \$e) {
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
        return "@bundles/CacheBundle/EventListener/CacheClearSubscriber.php";
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
        return new Source("", "@bundles/CacheBundle/EventListener/CacheClearSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/EventListener/CacheClearSubscriber.php");
    }
}
