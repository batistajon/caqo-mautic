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

/* @bundles/IntegrationsBundle/Migration/Engine.php */
class __TwigTemplate_0e899027732ddebf38bfa6479d5c8486a6c201b203a7d06ac9331674f677a533 extends Template
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

namespace Mautic\\IntegrationsBundle\\Migration;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\ORM\\EntityManager;
use Mautic\\IntegrationsBundle\\Exception\\PathNotFoundException;

class Engine
{
    /**
     * @var EntityManager
     */
    private \$entityManager;

    /**
     * @var string
     */
    private \$tablePrefix;

    /**
     * @var string
     */
    private \$migrationsPath;

    /**
     * @var string
     */
    private \$bundleName;

    public function __construct(EntityManager \$entityManager, string \$tablePrefix, string \$pluginPath, string \$bundleName)
    {
        \$this->entityManager  = \$entityManager;
        \$this->tablePrefix    = \$tablePrefix;
        \$this->migrationsPath = \$pluginPath.'/Migrations/';
        \$this->bundleName     = \$bundleName;
    }

    /**
     * Run available migrations.
     */
    public function up(): void
    {
        try {
            \$migrationClasses = \$this->getMigrationClasses();
        } catch (PathNotFoundException \$e) {
            return;
        }

        if (!\$migrationClasses) {
            return;
        }

        \$this->entityManager->beginTransaction();

        try {
            foreach (\$migrationClasses as \$migrationClass) {
                /** @var AbstractMigration \$migration */
                \$migration = new \$migrationClass(\$this->entityManager, \$this->tablePrefix);

                if (\$migration->shouldExecute()) {
                    \$migration->execute();
                }
            }

            \$this->entityManager->commit();
        } catch (DBALException \$e) {
            \$this->entityManager->rollback();

            throw \$e;
        }
    }

    /**
     * Get migration classes to proceed.
     *
     * @return string[]
     */
    private function getMigrationClasses(): array
    {
        \$migrationFileNames = \$this->getMigrationFileNames();
        \$migrationClasses   = [];

        foreach (\$migrationFileNames as \$fileName) {
            require_once \$this->migrationsPath.\$fileName;
            \$className          = preg_replace('/\\\\.[^.\\\\s]{3,4}\$/', '', \$fileName);
            \$className          = 'MauticPlugin\\\\'.\$this->bundleName.\"\\Migrations\\\\\${className}\";
            \$migrationClasses[] = \$className;
        }

        return \$migrationClasses;
    }

    /**
     * Get migration file names.
     *
     * @return string[]
     */
    private function getMigrationFileNames(): array
    {
        \$fileNames = @scandir(\$this->migrationsPath);

        if (false === \$fileNames) {
            throw new PathNotFoundException(sprintf(\"'%s' directory not found\", \$this->migrationsPath));
        }

        return array_diff(\$fileNames, ['.', '..']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Migration/Engine.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Migration/Engine.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Migration/Engine.php");
    }
}
