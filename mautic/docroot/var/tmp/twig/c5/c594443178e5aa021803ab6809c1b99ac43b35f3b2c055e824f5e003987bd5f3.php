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

/* @bundles/CoreBundle/Doctrine/VariantMigrationTrait.php */
class __TwigTemplate_9f64887d2989fedfe51b11b7a5fe48f7ca63a66378974dc102d0045a542c7e6e extends Template
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
 * Class VariantMigrationTrait.
 */
trait VariantMigrationTrait
{
    /**
     * Add variant parent/child relationship schema.
     *
     * @param \$tableName
     */
    protected function addVariantSchema(Schema \$schema, \$tableName)
    {
        \$fkName    = \$this->generatePropertyName(\$tableName, 'fk', ['variant_parent_id']);
        \$idxName   = \$this->generatePropertyName(\$tableName, 'idx', ['variant_parent_id']);
        \$tableName = \"{\$this->prefix}\$tableName\";
        \$table     = \$schema->getTable(\$tableName);

        if (!\$table->hasColumn('variant_parent_id')) {
            \$this->addSql(\"ALTER TABLE \$tableName ADD variant_parent_id INT DEFAULT NULL\");
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD CONSTRAINT \".\$fkName
                .\" FOREIGN KEY (variant_parent_id) REFERENCES \$tableName (id) ON DELETE CASCADE\"
            );
            \$this->addSql(\"CREATE INDEX \$idxName ON \$tableName (variant_parent_id)\");
        } else {
            // Drop and recreate the parent FK to ensure DELETE CASCADE
            if (\$table->hasForeignKey(\$fkName)) {
                \$this->addSql(\"ALTER TABLE \$tableName DROP FOREIGN KEY \$fkName\");
            }
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD CONSTRAINT \".\$fkName
                .\" FOREIGN KEY (variant_parent_id) REFERENCES \$tableName (id) ON DELETE CASCADE\"
            );

            if (!\$table->hasIndex(\$idxName)) {
                \$this->addSql(\"CREATE INDEX \$idxName ON \$tableName (variant_parent_id)\");
            }
        }

        if (!\$table->hasColumn('variant_settings')) {
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD variant_settings LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', ADD variant_start_date DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime)'\"
            );
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
        return "@bundles/CoreBundle/Doctrine/VariantMigrationTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/VariantMigrationTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/VariantMigrationTrait.php");
    }
}
