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

/* @bundles/PluginBundle/Model/PluginModel.php */
class __TwigTemplate_77e16d5c82e26c9a7a1870e708e67df382fc13ff58bad8e0ca3ae6d4cb5c4b73 extends Template
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

namespace Mautic\\PluginBundle\\Model;

use Doctrine\\DBAL\\Schema\\Schema;
use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\LeadBundle\\Model\\FieldModel;

/**
 * Class PluginModel.
 */
class PluginModel extends FormModel
{
    /**
     * @var FieldModel
     */
    protected \$leadFieldModel;

    /**
     * @var CoreParametersHelper
     */
    protected \$coreParametersHelper;

    /**
     * @var BundleHelper
     */
    private \$bundleHelper;

    public function __construct(FieldModel \$leadFieldModel, CoreParametersHelper \$coreParametersHelper, BundleHelper \$bundleHelper)
    {
        \$this->leadFieldModel       = \$leadFieldModel;
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->bundleHelper         = \$bundleHelper;
    }

    /**
     * {@inheritdoc}
     *
     * @return \\Mautic\\PluginBundle\\Entity\\PluginRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository('MauticPluginBundle:Plugin');
    }

    public function getIntegrationEntityRepository()
    {
        return \$this->em->getRepository('MauticPluginBundle:IntegrationEntity');
    }

    /**
     * {@inheritdoc}
     */
    public function getPermissionBase()
    {
        return 'plugin:plugins';
    }

    /**
     * Get lead fields used in selects/matching.
     */
    public function getLeadFields()
    {
        return \$this->leadFieldModel->getFieldList();
    }

    /**
     * Get Company fields.
     */
    public function getCompanyFields()
    {
        return \$this->leadFieldModel->getFieldList(true, true, ['isPublished' => true, 'object' => 'company']);
    }

    public function saveFeatureSettings(\$entity)
    {
        \$this->em->persist(\$entity);
        \$this->em->flush();
    }

    /**
     * Loads config.php arrays for all plugins.
     *
     * @return array
     */
    public function getAllPluginsConfig()
    {
        return \$this->bundleHelper->getPluginBundles();
    }

    /**
     * Loads all installed Plugin entities from database.
     *
     * @return array
     */
    public function getInstalledPlugins()
    {
        return \$this->getEntities(
            [
                'index' => 'bundle',
            ]
        );
    }

    /**
     * Returns metadata for all plugins.
     *
     * @return array
     */
    public function getPluginsMetadata()
    {
        \$allMetadata     = \$this->em->getMetadataFactory()->getAllMetadata();
        \$pluginsMetadata = [];

        foreach (\$allMetadata as \$meta) {
            \$namespace = \$meta->namespace;

            if (false !== strpos(\$namespace, 'MauticPlugin')) {
                \$bundleName = preg_replace('/\\\\\\Entity\$/', '', \$namespace);
                if (!isset(\$pluginsMetadata[\$bundleName])) {
                    \$pluginsMetadata[\$bundleName] = [];
                }
                \$pluginsMetadata[\$bundleName][\$meta->getName()] = \$meta;
            }
        }

        return \$pluginsMetadata;
    }

    /**
     * Returns all tables of installed plugins.
     *
     * @return array
     */
    public function getInstalledPluginTables(array \$pluginsMetadata)
    {
        \$currentSchema          = \$this->em->getConnection()->getSchemaManager()->createSchema();
        \$installedPluginsTables = [];

        foreach (\$pluginsMetadata as \$bundleName => \$pluginMetadata) {
            foreach (\$pluginMetadata as \$meta) {
                \$table = \$meta->getTableName();

                if (!isset(\$installedPluginsTables[\$bundleName])) {
                    \$installedPluginsTables[\$bundleName] = [];
                }

                if (\$currentSchema->hasTable(\$table)) {
                    \$installedPluginsTables[\$bundleName][] = \$currentSchema->getTable(\$table);
                }
            }
        }

        return \$installedPluginsTables;
    }

    /**
     * Generates new Schema objects for all installed plugins.
     *
     * @return array
     */
    public function createPluginSchemas(array \$installedPluginsTables)
    {
        \$installedPluginsSchemas = [];
        foreach (\$installedPluginsTables as \$bundleName => \$tables) {
            \$installedPluginsSchemas[\$bundleName] = new Schema(\$tables);
        }

        return \$installedPluginsSchemas;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Model/PluginModel.php";
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
        return new Source("", "@bundles/PluginBundle/Model/PluginModel.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Model/PluginModel.php");
    }
}
