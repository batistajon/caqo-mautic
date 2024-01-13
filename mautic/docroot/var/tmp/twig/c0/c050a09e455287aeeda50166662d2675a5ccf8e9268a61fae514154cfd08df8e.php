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

/* @bundles/CoreBundle/Doctrine/TranslationMigrationTrait.php */
class __TwigTemplate_09acc70a63269b7e8f924d467ed8ca85d383937b75eb78d7d6fb1af93d5b353e extends Template
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

namespace Mautic\\CoreBundle\\Doctrine;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * Class TranslationMigrationTrait.
 */
trait TranslationMigrationTrait
{
    /**
     * Add translation parent/child relationship columns.
     */
    protected function addTranslationSchema(Schema \$schema, \$tableName, \$languageColumnName = 'lang')
    {
        \$fkName    = \$this->generatePropertyName(\$tableName, 'fk', ['translation_parent_id']);
        \$idxName   = \$this->generatePropertyName(\$tableName, 'idx', ['translation_parent_id']);
        \$tableName = \"{\$this->prefix}\$tableName\";
        \$table     = \$schema->getTable(\$tableName);

        if (!\$table->hasColumn('translation_parent_id')) {
            \$this->addSql(\"ALTER TABLE \$tableName ADD translation_parent_id INT DEFAULT NULL\");
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD CONSTRAINT \".\$fkName
                .\" FOREIGN KEY (translation_parent_id) REFERENCES \$tableName (id) ON DELETE CASCADE\"
            );
            \$this->addSql(\"CREATE INDEX \$idxName ON \$tableName (translation_parent_id)\");
        } else {
            // Drop and recreate the parent FK to ensure DELETE CASCADE
            if (\$table->hasForeignKey(\$fkName)) {
                \$this->addSql(\"ALTER TABLE \$tableName DROP FOREIGN KEY \$fkName\");
            }
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD CONSTRAINT \".\$fkName
                .\" FOREIGN KEY (translation_parent_id) REFERENCES \$tableName (id) ON DELETE CASCADE\"
            );

            if (!\$table->hasIndex(\$idxName)) {
                \$this->addSql(\"CREATE INDEX \$idxName ON \$tableName (translation_parent_id)\");
            }
        }

        if (\$languageColumnName && !\$table->hasColumn(\$languageColumnName)) {
            \$this->addSql(\"ALTER TABLE \$tableName ADD COLUMN `lang` varchar(191) NULL\");
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
        return "@bundles/CoreBundle/Doctrine/TranslationMigrationTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/TranslationMigrationTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/TranslationMigrationTrait.php");
    }
}
