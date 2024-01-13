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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php */
class __TwigTemplate_e3049f6586f40be6f11ba8d7357940b45e5e00c14efb173bae9cde1157851797 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\UpdatedObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;

interface ObjectHelperInterface
{
    /**
     * @param ObjectChangeDAO[] \$objects
     *
     * @return ObjectMapping[]
     */
    public function create(array \$objects): array;

    /**
     * @param ObjectChangeDAO[] \$objects
     *
     * @return UpdatedObjectMappingDAO[]
     */
    public function update(array \$ids, array \$objects): array;

    /**
     * @param int \$start
     * @param int \$limit
     */
    public function findObjectsBetweenDates(\\DateTimeInterface \$from, \\DateTimeInterface \$to, \$start, \$limit): array;

    public function findObjectsByIds(array \$ids): array;

    public function findObjectsByFieldValues(array \$fields): array;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php");
    }
}
