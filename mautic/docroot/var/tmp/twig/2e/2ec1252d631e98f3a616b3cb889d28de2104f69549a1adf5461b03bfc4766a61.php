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

/* @bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php */
class __TwigTemplate_736c9f2370ad44a245e61f7c200a5e50371981e1dd1f75ef7de1404a393037fd extends Template
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

namespace Mautic\\CacheBundle\\Cache\\Adapter;

use Mautic\\CacheBundle\\Exceptions\\InvalidArgumentException;
use Mautic\\CoreBundle\\Helper\\PRedisConnectionHelper;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;

class RedisTagAwareAdapter extends TagAwareAdapter
{
    public function __construct(array \$servers, string \$namespace, int \$lifetime)
    {
        if (!isset(\$servers['dsn'])) {
            throw new InvalidArgumentException('Invalid redis configuration. No server specified.');
        }

        \$options = array_key_exists('options', \$servers) ? \$servers['options'] : [];

        \$client = new \\Predis\\Client(PRedisConnectionHelper::getRedisEndpoints(\$servers['dsn']), \$options);

        parent::__construct(
            new RedisAdapter(\$client, \$namespace, \$lifetime),
            new RedisAdapter(\$client, \$namespace.'.tags.', \$lifetime)
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Cache/Adapter/RedisTagAwareAdapter.php");
    }
}
