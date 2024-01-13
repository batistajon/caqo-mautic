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

/* @bundles/InstallBundle/Tests/Install/InstallSchemaTest.php */
class __TwigTemplate_dd952b18d8e0e0cd84e86de29d8570cdc7e2b6e9617bbefa50b3ed0f558c71d6 extends Template
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

namespace Mautic\\InstallBundle\\Tests\\Install;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\DBAL\\Schema\\Table;
use Mautic\\InstallBundle\\Helper\\SchemaHelper;
use PHPUnit\\Framework\\Assert;

class InstallSchemaTest extends \\PHPUnit\\Framework\\TestCase
{
    private Connection \$connection;

    /**
     * @var array<string, mixed>
     */
    private array \$dbParams;

    private string \$indexTableName;

    public function setUp(): void
    {
        parent::setUp();

        \$this->dbParams = [
            'driver'        => getenv('DB_DRIVER') ?: 'pdo_mysql',
            'host'          => getenv('DB_HOST'),
            'port'          => getenv('DB_PORT'),
            'dbname'        => getenv('DB_NAME'), // Doctrine needs 'dbname', not 'name'
            'user'          => getenv('DB_USER'),
            'password'      => getenv('DB_PASSWD'),
            'table_prefix'  => MAUTIC_TABLE_PREFIX,
            'backup_prefix' => 'bak_',
        ];

        \$this->connection = DriverManager::getConnection(\$this->dbParams);

        \$this->indexTableName = 'table_with_index';

        \$t = new Table(\$this->indexTableName);
        \$t->addColumn('a_column', 'text');

        // Create an index that has options, e.g. length of the index
        \$indexOptions = [
            'lengths' => [
                0 => 128,
            ],
        ];
        \$t->addIndex(['a_column'], 'index_with_options', [], \$indexOptions);
        \$this->connection->getSchemaManager()->createTable(\$t);
    }

    public function tearDown(): void
    {
        parent::tearDown();

        if (\$this->connection->getSchemaManager()->tablesExist([\$this->indexTableName])) {
            \$this->connection->getSchemaManager()->dropTable(\$this->indexTableName);
        }
        if (\$this->connection->getSchemaManager()->tablesExist([\$this->dbParams['backup_prefix'].\$this->indexTableName])) {
            \$this->connection->getSchemaManager()->dropTable(\$this->dbParams['backup_prefix'].\$this->indexTableName);
        }
    }

    public function testBackupIndexesWithConfigOptions(): void
    {
        \$schemaHelper = new SchemaHelper(\$this->dbParams);

        // Make the backupExistingSchema method public so we can test that functionality without mocking all the SchemaHelper's functionality.
        \$controllerReflection = new \\ReflectionClass(SchemaHelper::class);
        \$method               = \$controllerReflection->getMethod('backupExistingSchema');
        \$method->setAccessible(true);

        // Set the platform property, as that one is only set in the installSchema method, which we want to avoid.
        \$property = \$controllerReflection->getProperty('platform');
        \$property->setAccessible(true);
        \$property->setValue(\$schemaHelper, DriverManager::getConnection(\$this->dbParams)->getSchemaManager()->getDatabasePlatform());

        \$tables       = [\$this->indexTableName];
        \$mauticTables = [\$this->indexTableName => \$this->dbParams['backup_prefix'].\$this->indexTableName];

        \$sql = \$method->invokeArgs(\$schemaHelper, [\$tables, \$mauticTables, \$this->dbParams['backup_prefix']]);

        \$exceptions = [];
        if (!empty(\$sql)) {
            foreach (\$sql as \$q) {
                try {
                    \$this->connection->query(\$q);
                } catch (\\Exception \$exception) {
                    \$exceptions[] = \$exception->getMessage();
                }
            }
        }
        \$this->connection->close();

        Assert::assertSame([], \$exceptions);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Tests/Install/InstallSchemaTest.php";
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
        return new Source("", "@bundles/InstallBundle/Tests/Install/InstallSchemaTest.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Tests/Install/InstallSchemaTest.php");
    }
}
