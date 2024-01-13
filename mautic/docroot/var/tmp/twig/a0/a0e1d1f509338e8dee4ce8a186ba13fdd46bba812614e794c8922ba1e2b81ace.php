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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilder.php */
class __TwigTemplate_bfe73c72c52861a6c813ba3a779d0ab3e6545a1edd24f9836e2b170aac58ee51 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO as ReportFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO as RequestObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Helper\\FieldHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\ContactObjectHelper;
use Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer\\ValueNormalizer;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Router;

class FieldBuilder
{
    /**
     * @var ValueNormalizer
     */
    private \$valueNormalizer;

    /**
     * @var Router
     */
    private \$router;

    /**
     * @var FieldHelper
     */
    private \$fieldHelper;

    /**
     * @var ContactObjectHelper
     */
    private \$contactObjectHelper;

    /**
     * @var array
     */
    private \$mauticObject;

    /**
     * @var RequestObjectDAO
     */
    private \$requestObject;

    public function __construct(Router \$router, FieldHelper \$fieldHelper, ContactObjectHelper \$contactObjectHelper)
    {
        \$this->valueNormalizer = new ValueNormalizer();

        \$this->router              = \$router;
        \$this->fieldHelper         = \$fieldHelper;
        \$this->contactObjectHelper = \$contactObjectHelper;
    }

    /**
     * @return ReportFieldDAO
     *
     * @throws FieldNotFoundException
     */
    public function buildObjectField(
        string \$field,
        array \$mauticObject,
        RequestObjectDAO \$requestObject,
        string \$integration,
        string \$defaultState = ReportFieldDAO::FIELD_CHANGED
    ) {
        \$this->mauticObject  = \$mauticObject;
        \$this->requestObject = \$requestObject;

        // Special handling of the ID field
        if ('mautic_internal_id' === \$field) {
            return \$this->addContactIdField(\$field);
        }

        // Special handling of the owner ID field
        if ('owner_id' === \$field) {
            return \$this->createOwnerIdReportFieldDAO(\$field, (int) \$mauticObject['owner_id']);
        }

        // Special handling of DNC fields
        if (0 === strpos(\$field, 'mautic_internal_dnc_')) {
            return \$this->addDoNotContactField(\$field);
        }

        // Special handling of timeline URL
        if ('mautic_internal_contact_timeline' === \$field) {
            return \$this->addContactTimelineField(\$integration, \$field);
        }

        return \$this->addCustomField(\$field, \$defaultState);
    }

    /**
     * @return ReportFieldDAO
     */
    private function addContactIdField(string \$field)
    {
        \$normalizedValue = new NormalizedValueDAO(
            NormalizedValueDAO::INT_TYPE,
            \$this->mauticObject['id']
        );

        return new ReportFieldDAO(\$field, \$normalizedValue);
    }

    /**
     * @return ReportFieldDAO
     */
    private function createOwnerIdReportFieldDAO(string \$field, int \$ownerId)
    {
        return new ReportFieldDAO(
            \$field,
            new NormalizedValueDAO(
                NormalizedValueDAO::INT_TYPE,
                \$ownerId
            )
        );
    }

    /**
     * @return ReportFieldDAO
     */
    private function addDoNotContactField(string \$field)
    {
        \$channel = str_replace('mautic_internal_dnc_', '', \$field);

        \$normalizedValue = new NormalizedValueDAO(
            NormalizedValueDAO::INT_TYPE,
            \$this->contactObjectHelper->getDoNotContactStatus((int) \$this->mauticObject['id'], \$channel)
        );

        return new ReportFieldDAO(\$field, \$normalizedValue);
    }

    /**
     * @return ReportFieldDAO
     */
    private function addContactTimelineField(string \$integration, string \$field)
    {
        \$normalizedValue = new NormalizedValueDAO(
            NormalizedValueDAO::URL_TYPE,
            \$this->router->generate(
                'mautic_plugin_timeline_view',
                [
                    'integration' => \$integration,
                    'leadId'      => \$this->mauticObject['id'],
                ],
                UrlGeneratorInterface::ABSOLUTE_URL
            )
        );

        return new ReportFieldDAO(\$field, \$normalizedValue);
    }

    /**
     * @return ReportFieldDAO
     *
     * @throws FieldNotFoundException
     */
    private function addCustomField(string \$field, string \$defaultState)
    {
        // The rest should be Mautic custom fields and if not, just ignore
        \$mauticFields = \$this->fieldHelper->getFieldList(\$this->requestObject->getObject());
        if (!isset(\$mauticFields[\$field])) {
            // Field must have been deleted or something so let's skip
            throw new FieldNotFoundException(\$field, \$this->requestObject->getObject());
        }

        \$requiredFields  = \$this->requestObject->getRequiredFields();
        \$fieldType       = \$this->fieldHelper->getNormalizedFieldType(\$mauticFields[\$field]['type']);
        \$normalizedValue = \$this->valueNormalizer->normalizeForMautic(\$fieldType, \$this->mauticObject[\$field]);

        return new ReportFieldDAO(
            \$field,
            \$normalizedValue,
            in_array(\$field, \$requiredFields) ? ReportFieldDAO::FIELD_REQUIRED : \$defaultState
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilder.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilder.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilder.php");
    }
}
