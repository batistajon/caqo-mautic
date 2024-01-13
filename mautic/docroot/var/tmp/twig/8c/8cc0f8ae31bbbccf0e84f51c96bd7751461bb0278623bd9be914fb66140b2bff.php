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

/* @bundles/CacheBundle/Config/config.php */
class __TwigTemplate_4151733110be2c4450cf86aa1c46a4f96029868d64471d51b8db8084f8a4f9a4 extends Template
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

return [
    'routes'   => [
        'main'   => [],
        'public' => [],
        'api'    => [],
    ],
    'menu'     => [],
    'services' => [
        'events'    => [
            'mautic.cache.clear_cache_subscriber' => [
                'class'     => \\Mautic\\CacheBundle\\EventListener\\CacheClearSubscriber::class,
                'tags'      => ['kernel.cache_clearer'],
                'arguments' => [
                    'mautic.cache.provider',
                    'monolog.logger.mautic',
                ],
            ],
        ],
        'forms'     => [],
        'helpers'   => [],
        'menus'     => [],
        'other'     => [
            'mautic.cache.provider'           => [
                'class'     => \\Mautic\\CacheBundle\\Cache\\CacheProvider::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                    'service_container',
                ],
            ],
            'mautic.cache.adapter.filesystem' => [
                'class'     => \\Mautic\\CacheBundle\\Cache\\Adapter\\FilesystemTagAwareAdapter::class,
                'arguments' => [
                    '%mautic.cache_prefix%',
                    '%mautic.cache_lifetime%',
                    '%mautic.tmp_path%',
                ],
                'tag'       => 'mautic.cache.adapter',
            ],
            'mautic.cache.adapter.memcached'  => [
                'class'     => \\Mautic\\CacheBundle\\Cache\\Adapter\\MemcachedTagAwareAdapter::class,
                'arguments' => [
                    '%mautic.cache_adapter_memcached%',
                    '%mautic.cache_prefix%',
                    '%mautic.cache_lifetime%',
                ],
                'tag'       => 'mautic.cache.adapter',
            ],
            'mautic.cache.adapter.redis'      => [
                'class'     => \\Mautic\\CacheBundle\\Cache\\Adapter\\RedisTagAwareAdapter::class,
                'arguments' => [
                    '%mautic.cache_adapter_redis%',
                    '%mautic.cache_prefix%',
                    '%mautic.cache_lifetime%',
                ],
                'tag'       => 'mautic.cache.adapter',
            ],
        ],
        'models'    => [],
        'validator' => [],
    ],

    'parameters' => [
        'cache_adapter'           => 'mautic.cache.adapter.filesystem',
        'cache_prefix'            => '',
        'cache_lifetime'          => 86400,
        'cache_adapter_memcached' => [
            'servers' => ['memcached://localhost'],
            'options' => [
                'compression'          => true,
                'libketama_compatible' => true,
                'serializer'           => 'igbinary',
            ],
        ],
        'cache_adapter_redis'     => [
            'dsn'     => 'redis://localhost',
            'options' => [
                'lazy'           => false,
                'persistent'     => 0,
                'persistent_id'  => null,
                'timeout'        => 30,
                'read_timeout'   => 0,
                'retry_interval' => 0,
            ],
        ],
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Config/config.php";
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
        return new Source("", "@bundles/CacheBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Config/config.php");
    }
}
