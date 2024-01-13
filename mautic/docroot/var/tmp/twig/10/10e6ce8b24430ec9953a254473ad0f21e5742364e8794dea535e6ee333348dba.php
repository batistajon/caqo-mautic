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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php */
class __TwigTemplate_360e4f78db5fdf8cec9c0844b08c7245156fe0bc859bee28d174734036f7c7d8 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Loader\\EnvVars;

use Mautic\\CoreBundle\\Loader\\EnvVars\\MigrationsEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class MigrationEnvVarsTest extends TestCase
{
    /**
     * @var ParameterBag
     */
    protected \$config;

    /**
     * @var ParameterBag
     */
    protected \$defaultConfig;

    /**
     * @var ParameterBag
     */
    protected \$envVars;

    protected function setUp(): void
    {
        \$this->config        = new ParameterBag();
        \$this->defaultConfig = new ParameterBag();
        \$this->envVars       = new ParameterBag();
    }

    public function testTablePrefixIsSetOnMigrations()
    {
        \$this->config->set('db_table_prefix', 'foobar_');
        MigrationsEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertEquals('foobar_migrations', \$this->envVars->get('MAUTIC_MIGRATIONS_TABLE_NAME'));
    }

    public function testTablePrefixEmptyJustIncludesDefaultTableName()
    {
        \$this->config->set('db_table_prefix', '');
        MigrationsEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertEquals('migrations', \$this->envVars->get('MAUTIC_MIGRATIONS_TABLE_NAME'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php");
    }
}
