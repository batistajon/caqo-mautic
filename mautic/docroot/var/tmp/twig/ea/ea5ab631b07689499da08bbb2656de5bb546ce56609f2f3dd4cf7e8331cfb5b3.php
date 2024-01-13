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

/* @bundles/CacheBundle/Cache/Adapter/MemcachedTagAwareAdapter.php */
class __TwigTemplate_33f41374f094157992e1f143a75b298a347a776d382aabb62e7994237599ae8e extends Template
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
use Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;

class MemcachedTagAwareAdapter extends TagAwareAdapter
{
    public function __construct(array \$servers, string \$namespace, int \$lifetime)
    {
        if (!isset(\$servers['servers'])) {
            throw new InvalidArgumentException('Invalid memcached configuration. No servers specified.');
        }

        \$options = array_key_exists('options', \$servers) ? \$servers['options'] : [];
        \$client  = MemcachedAdapter::createConnection(\$servers['servers'], \$options);

        parent::__construct(
            new MemcachedAdapter(\$client, \$namespace, \$lifetime),
            new MemcachedAdapter(\$client, \$namespace, \$lifetime)
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
        return "@bundles/CacheBundle/Cache/Adapter/MemcachedTagAwareAdapter.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/Adapter/MemcachedTagAwareAdapter.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Cache/Adapter/MemcachedTagAwareAdapter.php");
    }
}
