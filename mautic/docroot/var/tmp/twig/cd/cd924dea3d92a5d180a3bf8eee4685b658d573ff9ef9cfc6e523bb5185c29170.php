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

/* @bundles/CoreBundle/Test/MauticSqliteTestCase.php */
class __TwigTemplate_242588249ce957ce164893af274eed13a75121001cdfc2a753c82c1942bce0a2 extends Template
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

namespace Mautic\\CoreBundle\\Test;

use Doctrine\\ORM\\Events;
use Mautic\\CoreBundle\\Test\\DoctrineExtensions\\TablePrefix;
use Mautic\\InstallBundle\\Helper\\SchemaHelper;
use Mautic\\InstallBundle\\InstallFixtures\\ORM\\LeadFieldData;
use Mautic\\InstallBundle\\InstallFixtures\\ORM\\RoleData;
use Mautic\\UserBundle\\DataFixtures\\ORM\\LoadRoleData;
use Mautic\\UserBundle\\DataFixtures\\ORM\\LoadUserData;

abstract class MauticSqliteTestCase extends AbstractMauticTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        if (file_exists(\$this->getOriginalDatabasePath())) {
            \$this->createDatabaseFromFile();
        } else {
            \$this->createDatabase();
            \$this->applyMigrations();
            \$this->installDatabaseFixtures([LeadFieldData::class, RoleData::class, LoadRoleData::class, LoadUserData::class]);
            \$this->backupOrginalDatabase();
        }
    }

    private function createDatabase()
    {
        // fix problem with prefixes in sqlite
        \$tablePrefix = new TablePrefix('prefix_');
        \$this->em->getEventManager()->addEventListener(Events::loadClassMetadata, \$tablePrefix);

        \$dbParams = array_merge(self::\$container->get('doctrine')->getConnection()->getParams(), [
            'table_prefix'  => null,
            'backup_tables' => 0,
        ]);

        // create schema
        \$schemaHelper = new SchemaHelper(\$dbParams);
        \$schemaHelper->setEntityManager(\$this->em);

        \$schemaHelper->createDatabase();
        \$schemaHelper->installSchema();

        \$this->em->getConnection()->close();
    }

    private function createDatabaseFromFile()
    {
        copy(\$this->getOriginalDatabasePath(), \$this->getDatabasePath());
    }

    private function backupOrginalDatabase()
    {
        copy(\$this->getDatabasePath(), \$this->getOriginalDatabasePath());
    }

    private function getOriginalDatabasePath()
    {
        return \$this->getDatabasePath().'.original';
    }

    private function getDatabasePath()
    {
        return self::\$container->get('doctrine')->getConnection()->getParams()['path'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/MauticSqliteTestCase.php";
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
        return new Source("", "@bundles/CoreBundle/Test/MauticSqliteTestCase.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/MauticSqliteTestCase.php");
    }
}
