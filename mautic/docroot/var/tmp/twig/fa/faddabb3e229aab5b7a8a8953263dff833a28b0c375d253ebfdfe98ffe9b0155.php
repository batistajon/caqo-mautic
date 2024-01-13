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

/* @bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php */
class __TwigTemplate_f62272528f41b03809525974d79604e27ad5a56f4c77af762cb79f1163fc9c18 extends Template
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

use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;

class FilesystemTagAwareAdapter extends TagAwareAdapter
{
    public function __construct(?string \$prefix, int \$lifetime = 0, string \$directory = null)
    {
        \$prefix = 'app_cache_'.\$prefix;

        parent::__construct(
            new \\Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter(\$prefix, \$lifetime, \$directory),
            new \\Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter(\$prefix.'_tags')
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
        return "@bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Cache/Adapter/FilesystemTagAwareAdapter.php");
    }
}
