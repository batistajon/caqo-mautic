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

/* @bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php */
class __TwigTemplate_216d6fe2b3bdd0ab9cb75cfc357a78b6cc16ff71ab3c90a8d3e5e76addf3499f extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Provider;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumns;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class GeneratedColumnsProvider implements GeneratedColumnsProviderInterface
{
    /**
     * @var string
     *
     * @see https://dev.mysql.com/doc/refman/5.7/en/innodb-foreign-key-constraints.html#innodb-foreign-key-generated-columns
     */
    const MYSQL_MINIMUM_VERSION = '5.7.14';

    /**
     * @var string
     *
     * @see https://mariadb.com/kb/en/library/generated-columns
     */
    const MARIADB_MINIMUM_VERSION = '10.2.6';

    /**
     * @var VersionProviderInterface
     */
    private \$versionProvider;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var GeneratedColumns
     */
    private \$generatedColumns;

    public function __construct(
        VersionProviderInterface \$versionProvider,
        EventDispatcherInterface \$dispatcher
    ) {
        \$this->versionProvider = \$versionProvider;
        \$this->dispatcher      = \$dispatcher;
    }

    public function getGeneratedColumns(): GeneratedColumns
    {
        if (null !== \$this->generatedColumns) {
            return \$this->generatedColumns;
        }

        if (\$this->generatedColumnsAreSupported()) {
            \$event = new GeneratedColumnsEvent();
            \$this->dispatcher->dispatch(CoreEvents::ON_GENERATED_COLUMNS_BUILD, \$event);
            \$this->generatedColumns = \$event->getGeneratedColumns();
        } else {
            \$this->generatedColumns = new GeneratedColumns();
        }

        return \$this->generatedColumns;
    }

    public function generatedColumnsAreSupported(): bool
    {
        return 1 !== version_compare(\$this->getMinimalSupportedVersion(), \$this->versionProvider->getVersion());
    }

    public function getMinimalSupportedVersion(): string
    {
        if (\$this->versionProvider->isMariaDb()) {
            return self::MARIADB_MINIMUM_VERSION;
        }

        return self::MYSQL_MINIMUM_VERSION;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php");
    }
}
