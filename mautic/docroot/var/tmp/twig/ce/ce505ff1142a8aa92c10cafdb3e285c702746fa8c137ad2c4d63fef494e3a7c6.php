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

/* @bundles/PluginBundle/Bundle/PluginBundleBase.php */
class __TwigTemplate_5d88e780ab52b6a83a6cf9f99f64e5b7a9acf6aa62ef3aba218b274ce595d668 extends Template
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

namespace Mautic\\PluginBundle\\Bundle;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\ORM\\Tools\\SchemaTool;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Base Bundle class which should be extended by addon bundles.
 */
abstract class PluginBundleBase extends Bundle
{
    /**
     * @param null \$metadata
     * @param null \$installedSchema
     *
     * @throws \\Exception
     *
     * @deprecated To be removed in 5.0. Listen to PluginEvents::ON_PLUGIN_INSTALL instead
     */
    public static function onPluginInstall(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, \$installedSchema = null)
    {
        if (null !== \$metadata) {
            self::installPluginSchema(\$metadata, \$factory, \$installedSchema);
        }
    }

    /**
     * Install plugin schema based on Doctrine metadata.
     *
     * @param null \$installedSchema
     *
     * @throws \\Exception
     */
    public static function installPluginSchema(array \$metadata, MauticFactory \$factory, \$installedSchema = null)
    {
        if (null !== \$installedSchema) {
            // Schema exists so bail
            return;
        }

        \$db             = \$factory->getDatabase();
        \$schemaTool     = new SchemaTool(\$factory->getEntityManager());
        \$installQueries = \$schemaTool->getCreateSchemaSql(\$metadata);

        \$db->beginTransaction();
        try {
            foreach (\$installQueries as \$q) {
                \$db->query(\$q);
            }

            \$db->commit();
        } catch (\\Exception \$e) {
            \$db->rollback();

            throw \$e;
        }
    }

    /**
     * Called by PluginController::reloadAction when the addon version does not match what's installed.
     *
     * @param null   \$metadata
     * @param Schema \$installedSchema
     *
     * @throws \\Exception
     *
     * @deprecated To be removed in 5.0. Listen to PluginEvents::ON_PLUGIN_UPDATE instead
     */
    public static function onPluginUpdate(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, Schema \$installedSchema = null)
    {
        // Not recommended although availalbe for simple schema changes - see updatePluginSchema docblock
        //self::updatePluginSchema(\$metadata, \$installedSchema, \$factory);
    }

    /**
     * Update plugin schema based on Doctrine metadata.
     *
     * WARNING - this is not recommended as Doctrine does not guarantee results. There is a risk
     * that Doctrine will generate an incorrect query leading to lost data. If using this method,
     * be sure to thoroughly test the queries Doctrine generates
     *
     * @throws \\Doctrine\\DBAL\\ConnectionException
     * @throws \\Exception
     */
    public static function updatePluginSchema(array \$metadata, Schema \$installedSchema, MauticFactory \$factory)
    {
        \$db         = \$factory->getDatabase();
        \$schemaTool = new SchemaTool(\$factory->getEntityManager());
        \$toSchema   = \$schemaTool->getSchemaFromMetadata(\$metadata);
        \$queries    = \$installedSchema->getMigrateToSql(\$toSchema, \$db->getDatabasePlatform());

        \$db->beginTransaction();
        try {
            foreach (\$queries as \$q) {
                \$db->query(\$q);
            }

            \$db->commit();
        } catch (\\Exception \$e) {
            \$db->rollback();

            throw \$e;
        }
    }

    /**
     * Not used yet :-).
     *
     * @param null \$metadata
     */
    public static function onPluginUninstall(Plugin \$plugin, MauticFactory \$factory, \$metadata = null)
    {
    }

    /**
     * Drops plugin's tables based on Doctrine metadata.
     *
     * @throws \\Doctrine\\DBAL\\ConnectionException
     * @throws \\Exception
     */
    public static function dropPluginSchema(array \$metadata, MauticFactory \$factory)
    {
        \$db          = \$factory->getDatabase();
        \$schemaTool  = new SchemaTool(\$factory->getEntityManager());
        \$dropQueries = \$schemaTool->getDropSchemaSQL(\$metadata);

        \$db->beginTransaction();
        try {
            foreach (\$dropQueries as \$q) {
                \$db->query(\$q);
            }

            \$db->commit();
        } catch (\\Exception \$e) {
            \$db->rollback();

            throw \$e;
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
        return "@bundles/PluginBundle/Bundle/PluginBundleBase.php";
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
        return new Source("", "@bundles/PluginBundle/Bundle/PluginBundleBase.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Bundle/PluginBundleBase.php");
    }
}
