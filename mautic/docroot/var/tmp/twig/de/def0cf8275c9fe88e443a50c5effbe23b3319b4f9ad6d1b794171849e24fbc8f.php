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

/* @bundles/CoreBundle/Test/EnvLoader.php */
class __TwigTemplate_5972810fb3d8889537438a1e093faaa2e9567dc69c4698bfbebb1596fea05c94 extends Template
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

namespace Mautic\\CoreBundle\\Test;

use Symfony\\Component\\Dotenv\\Dotenv;

final class EnvLoader
{
    /**
     * Loads the env variables from .env.dist or .env file for PHPUNIT tests.
     */
    public static function load(): void
    {
        \$root    = __DIR__.'/../../../../';
        \$envFile = file_exists(\$root.'.env') ? \$root.'.env' : \$root.'.env.dist';
        \$dotenv  = new Dotenv();
        \$dotenv->load(\$envFile);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/EnvLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Test/EnvLoader.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/EnvLoader.php");
    }
}
