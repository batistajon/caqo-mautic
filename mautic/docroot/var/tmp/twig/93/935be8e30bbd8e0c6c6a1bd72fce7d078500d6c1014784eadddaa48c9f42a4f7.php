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

/* @bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php */
class __TwigTemplate_ecd35351025e387b57063b08653604f8c25ef4ff24e12cad3b8f7df370def41b extends Template
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

namespace Mautic\\IntegrationsBundle\\Bundle;

use Doctrine\\DBAL\\Schema\\Schema;
use Exception;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\IntegrationsBundle\\Migration\\Engine;
use Mautic\\PluginBundle\\Bundle\\PluginBundleBase;
use Mautic\\PluginBundle\\Entity\\Plugin;

/**
 * Base Bundle class which should be extended by addon bundles.
 */
abstract class AbstractPluginBundle extends PluginBundleBase
{
    /**
     * @param array|null \$metadata
     *
     * @throws Exception
     */
    public static function onPluginUpdate(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, ?Schema \$installedSchema = null): void
    {
        \$entityManager = \$factory->getEntityManager();
        \$tablePrefix   = (string) \$factory->getParameter('mautic.db_table_prefix');

        \$migrationEngine = new Engine(
            \$entityManager,
            \$tablePrefix,
            __DIR__.'/../../../../plugins/'.\$plugin->getBundle(),
            \$plugin->getBundle()
        );

        if (method_exists(__CLASS__, 'installAllTablesIfMissing')) {
            static::installAllTablesIfMissing(
                \$entityManager->getConnection()->getSchemaManager()->createSchema(),
                \$tablePrefix,
                \$factory,
                \$metadata
            );
        }

        \$migrationEngine->up();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php");
    }
}
