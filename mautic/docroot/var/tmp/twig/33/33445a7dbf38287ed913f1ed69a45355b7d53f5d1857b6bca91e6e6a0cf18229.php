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

/* @bundles/IntegrationsBundle/Controller/FieldPaginationController.php */
class __TwigTemplate_f95064797b72ae53d076034a64e601cbee2ac910cc5c87e53e85272cbbc2735b extends Template
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

namespace Mautic\\IntegrationsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsObjectFieldMappingType;
use Mautic\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Helper\\FieldFilterHelper;
use Mautic\\IntegrationsBundle\\Helper\\FieldMergerHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class FieldPaginationController extends CommonController
{
    /**
     * @return mixed
     */
    public function paginateAction(string \$integration, string \$object, int \$page, Request \$request)
    {
        // Check ACL
        if (!\$this->get('mautic.security')->isGranted('plugin:plugins:manage')) {
            return \$this->accessDenied();
        }

        // Find the integration
        /** @var ConfigIntegrationsHelper \$integrationsHelper */
        \$integrationsHelper = \$this->get('mautic.integrations.helper.config_integrations');

        try {
            /** @var ConfigFormSyncInterface \$integrationObject */
            \$integrationObject        = \$integrationsHelper->getIntegration(\$integration);
            \$integrationConfiguration = \$integrationObject->getIntegrationConfiguration();
        } catch (IntegrationNotFoundException \$exception) {
            return \$this->notFound();
        }

        \$keyword         = \$request->get('keyword');
        \$featureSettings = \$integrationConfiguration->getFeatureSettings();
        \$currentFields   = \$this->getFields(\$integrationObject, \$featureSettings, \$object);

        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);
        if (\$keyword) {
            \$fieldFilterHelper->filterFieldsByKeyword(\$object, \$keyword, \$page);
        } else {
            \$fieldFilterHelper->filterFieldsByPage(\$object, \$page);
        }

        // Create the form
        \$form = \$this->get('form.factory')->create(
            IntegrationSyncSettingsObjectFieldMappingType::class,
            \$currentFields,
            [
                'integrationFields' => \$fieldFilterHelper->getFilteredFields(),
                'page'              => \$page,
                'keyword'           => \$keyword,
                'totalFieldCount'   => \$fieldFilterHelper->getTotalFieldCount(),
                'object'            => \$object,
                'integrationObject' => \$integrationObject,
                'csrf_protection'   => false,
            ]
        );

        \$html = \$this->render(
            'IntegrationsBundle:Config:field_mapping.html.php',
            [
                'form'        => \$form->createView(),
                'integration' => \$integration,
                'object'      => \$object,
                'page'        => \$page,
            ]
        )->getContent();

        \$prefix   = \"integration_config[featureSettings][sync][fieldMappings][\$object]\";
        \$idPrefix = str_replace(['][', '[', ']'], '_', \$prefix);
        if ('_' == substr(\$idPrefix, -1)) {
            \$idPrefix = substr(\$idPrefix, 0, -1);
        }

        \$formType = 'integration_sync_settings_object_field_mapping';
        \$html     = preg_replace('/'.\$formType.'\\[(.*?)\\]/', \$prefix.'[\$1]', \$html);
        \$html     = str_replace(\$formType, \$idPrefix, \$html);

        return new JsonResponse(
            [
                'success' => 1,
                'html'    => \$html,
            ]
        );
    }

    private function getFields(ConfigFormSyncInterface \$integrationObject, array \$featureSettings, string \$object): array
    {
        \$fields = \$featureSettings['sync']['fieldMappings'] ?? [];

        if (!isset(\$fields[\$object])) {
            \$fields[\$object] = [];
        }

        // Pull those changed from session
        \$session       = \$this->get('session');
        \$sessionFields = \$session->get(sprintf('%s-fields', \$integrationObject->getName()), []);

        if (!isset(\$sessionFields[\$object])) {
            return \$fields[\$object];
        }

        \$fieldMerger = new FieldMergerHelper(\$integrationObject, \$fields);
        \$fieldMerger->mergeSyncFieldMapping(\$object, \$sessionFields[\$object]);

        return \$fieldMerger->getFieldMappings()[\$object];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Controller/FieldPaginationController.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Controller/FieldPaginationController.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Controller/FieldPaginationController.php");
    }
}
