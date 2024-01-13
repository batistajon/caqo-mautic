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

/* @bundles/PluginBundle/Controller/AjaxController.php */
class __TwigTemplate_f98ffb7b7880ee16a9b4e6186b4690801be6a366524e68c25ab3426cc310fcc4 extends Template
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

namespace Mautic\\PluginBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\PluginBundle\\Form\\Type\\CompanyFieldsType;
use Mautic\\PluginBundle\\Form\\Type\\FieldsType;
use Mautic\\PluginBundle\\Form\\Type\\IntegrationCampaignsType;
use Mautic\\PluginBundle\\Form\\Type\\IntegrationConfigType;
use Mautic\\PluginBundle\\Model\\PluginModel;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function setIntegrationFilterAction(Request \$request)
    {
        \$session      = \$this->get('session');
        \$pluginFilter = (int) \$this->request->get('plugin');
        \$session->set('mautic.integrations.filter', \$pluginFilter);

        return \$this->sendJsonResponse(['success' => 1]);
    }

    /**
     * Get the HTML for list of fields.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function getIntegrationFieldsAction(Request \$request)
    {
        \$integration = \$request->query->get('integration');
        \$settings    = \$request->query->get('settings');
        \$page        = \$request->query->get('page');

        \$dataArray = ['success' => 0];

        if (!empty(\$integration) && !empty(\$settings)) {
            /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$helper */
            \$helper = \$this->get('mautic.helper.integration');
            /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$integrationObject */
            \$integrationObject = \$helper->getIntegrationObject(\$integration);

            if (\$integrationObject) {
                if (!\$object = \$request->attributes->get('object')) {
                    \$object = (isset(\$settings['object'])) ? \$settings['object'] : 'lead';
                }

                \$isLead            = ('lead' === \$object);
                \$integrationFields = (\$isLead)
                    ? \$integrationObject->getFormLeadFields(\$settings)
                    : \$integrationObject->getFormCompanyFields(
                        \$settings
                    );

                if (!empty(\$integrationFields)) {
                    \$session = \$this->get('session');
                    \$session->set('mautic.plugin.'.\$integration.'.'.\$object.'.page', \$page);

                    /** @var PluginModel \$pluginModel */
                    \$pluginModel = \$this->getModel('plugin');

                    // Get a list of custom form fields
                    \$mauticFields       = (\$isLead) ? \$pluginModel->getLeadFields() : \$pluginModel->getCompanyFields();
                    \$featureSettings    = \$integrationObject->getIntegrationSettings()->getFeatureSettings();
                    \$enableDataPriority = \$integrationObject->getDataPriority();
                    \$formType           = \$isLead ? FieldsType::class : CompanyFieldsType::class;
                    \$form               = \$this->createForm(
                        \$formType,
                        isset(\$featureSettings[\$object.'Fields']) ? \$featureSettings[\$object.'Fields'] : [],
                        [
                            'mautic_fields'        => \$mauticFields,
                            'data'                 => \$featureSettings,
                            'integration_fields'   => \$integrationFields,
                            'csrf_protection'      => false,
                            'integration_object'   => \$integrationObject,
                            'enable_data_priority' => \$enableDataPriority,
                            'integration'          => \$integration,
                            'page'                 => \$page,
                            'limit'                => \$this->get('mautic.helper.core_parameters')->get('default_pagelimit'),
                        ]
                    );

                    \$html = \$this->render(
                        'MauticCoreBundle:Helper:blank_form.html.php',
                        [
                            'form' => \$this->setFormTheme(
                                \$form,
                                'MauticCoreBundle:Helper:blank_form.html.php',
                                'MauticPluginBundle:FormTheme\\Integration'
                            ),
                            'function' => 'row',
                        ]
                    )->getContent();

                    if (!isset(\$settings['prefix'])) {
                        \$prefix = 'integration_details[featureSettings]['.\$object.'Fields]';
                    } else {
                        \$prefix = \$settings['prefix'];
                    }

                    \$idPrefix = str_replace(['][', '[', ']'], '_', \$prefix);
                    if ('_' == substr(\$idPrefix, -1)) {
                        \$idPrefix = substr(\$idPrefix, 0, -1);
                    }
                    \$html                 = preg_replace('/'.\$form->getName().'\\[(.*?)\\]/', \$prefix.'[\$1]', \$html);
                    \$html                 = str_replace(\$form->getName(), \$idPrefix, \$html);
                    \$dataArray['success'] = 1;
                    \$dataArray['html']    = \$html;
                }
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Get the HTML for integration properties.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function getIntegrationConfigAction(Request \$request)
    {
        \$integration = \$request->query->get('integration');
        \$settings    = \$request->query->get('settings');
        \$dataArray   = ['success' => 0];

        if (!empty(\$integration) && !empty(\$settings)) {
            /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$helper */
            \$helper = \$this->factory->getHelper('integration');
            /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$object */
            \$object = \$helper->getIntegrationObject(\$integration);

            if (\$object) {
                \$data           = \$statusData           = [];
                \$objectSettings = \$object->getIntegrationSettings();
                \$defaults       = \$objectSettings->getFeatureSettings();
                if (method_exists(\$object, 'getCampaigns')) {
                    \$campaigns = \$object->getCampaigns();
                    if (isset(\$campaigns['records']) && !empty(\$campaigns['records'])) {
                        foreach (\$campaigns['records'] as \$campaign) {
                            \$data[\$campaign['Id']] = \$campaign['Name'];
                        }
                    }
                }
                \$form = \$this->createForm(IntegrationConfigType::class, \$defaults, [
                    'integration'     => \$object,
                    'csrf_protection' => false,
                    'campaigns'       => \$data,
                ]);

                \$form = \$this->setFormTheme(\$form, 'MauticCoreBundle:Helper:blank_form.html.php', 'MauticPluginBundle:FormTheme\\Integration');

                \$html = \$this->render('MauticCoreBundle:Helper:blank_form.html.php', [
                    'form'      => \$form,
                    'function'  => 'widget',
                    'variables' => [
                        'integration' => \$object,
                    ],
                ])->getContent();

                \$prefix   = str_replace('[integration]', '[config]', \$settings['name']);
                \$idPrefix = str_replace(['][', '[', ']'], '_', \$prefix);
                if ('_' == substr(\$idPrefix, -1)) {
                    \$idPrefix = substr(\$idPrefix, 0, -1);
                }

                \$html = preg_replace('/integration_config\\[(.*?)\\]/', \$prefix.'[\$1]', \$html);
                \$html = str_replace('integration_config', \$idPrefix, \$html);

                \$dataArray['success'] = 1;
                \$dataArray['html']    = \$html;
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    protected function getIntegrationCampaignStatusAction(Request \$request)
    {
        \$integration = \$request->query->get('integration');
        \$campaign    = \$request->query->get('campaign');
        \$settings    = \$request->query->get('settings');
        \$dataArray   = ['success' => 0];
        \$statusData  = [];
        if (!empty(\$integration) && !empty(\$campaign)) {
            /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$helper */
            \$helper = \$this->factory->getHelper('integration');
            /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$object */
            \$object = \$helper->getIntegrationObject(\$integration);

            if (\$object) {
                if (method_exists(\$object, 'getCampaignMemberStatus')) {
                    \$campaignMemberStatus = \$object->getCampaignMemberStatus(\$campaign);
                    if (isset(\$campaignMemberStatus['records']) && !empty(\$campaignMemberStatus['records'])) {
                        foreach (\$campaignMemberStatus['records'] as \$status) {
                            \$statusData[\$status['Label']] = \$status['Label'];
                        }
                    }
                }
                \$form = \$this->createForm(IntegrationCampaignsType::class, \$statusData, [
                    'csrf_protection'       => false,
                    'campaignContactStatus' => \$statusData,
                ]);

                \$form = \$this->setFormTheme(\$form, 'MauticCoreBundle:Helper:blank_form.html.php', 'MauticPluginBundle:FormTheme\\Integration');

                \$html = \$this->render('MauticCoreBundle:Helper:blank_form.html.php', [
                    'form'      => \$form,
                    'function'  => 'widget',
                    'variables' => [
                        'integration' => \$object,
                    ],
                ])->getContent();

                \$prefix = str_replace('[integration]', '[campaign_member_status][campaign_member_status]', \$settings['name']);

                \$idPrefix = str_replace(['][', '[', ']'], '_', \$prefix);

                if ('_' == substr(\$idPrefix, -1)) {
                    \$idPrefix = substr(\$idPrefix, 0, -1);
                }

                \$html = preg_replace('/integration_campaign_status_campaign_member_status\\[(.*?)\\]/', \$prefix.'[\$1]', \$html);
                \$html = str_replace('integration_campaign_status_campaign_member_status', \$idPrefix, \$html);
                \$html = str_replace('integration_campaign_status[campaign_member_status]', \$prefix, \$html);

                \$dataArray['success'] = 1;
                \$dataArray['html']    = \$html;
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function getIntegrationCampaignsAction(Request \$request)
    {
        \$integration = \$request->query->get('integration');
        \$dataArray   = ['success' => 0];

        if (!empty(\$integration)) {
            /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$helper */
            \$helper = \$this->factory->getHelper('integration');
            /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$object */
            \$object = \$helper->getIntegrationObject(\$integration);
            \$data   = [];
            if (\$object) {
                \$campaigns = \$object->getCampaigns();
                if (isset(\$campaigns['records']) && !empty(\$campaigns['records'])) {
                    foreach (\$campaigns['records'] as \$campaign) {
                        \$data[\$campaign['Id']] = \$campaign['Name'];
                    }
                }
                \$form = \$this->createForm('integration_campaigns', \$data, [
                    'integration'     => \$integration,
                    'campaigns'       => \$data,
                    'csrf_protection' => false,
                ]);

                \$form = \$this->setFormTheme(\$form, 'MauticCoreBundle:Helper:blank_form.html.php', 'MauticPluginBundle:FormTheme\\Integration');

                \$html = \$this->render('MauticCoreBundle:Helper:blank_form.html.php', [
                    'form'      => \$form,
                    'function'  => 'row',
                    'variables' => [
                        'campaigns'   => \$data,
                        'integration' => \$object,
                    ],
                ])->getContent();

                \$dataArray['success'] = 1;
                \$dataArray['html']    = \$html;
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    protected function matchFieldsAction(Request \$request)
    {
        \$integration       = \$request->request->get('integration');
        \$integration_field = \$request->request->get('integrationField');
        \$mautic_field      = \$request->request->get('mauticField');
        \$update_mautic     = \$request->request->get('updateMautic');
        \$object            = \$request->request->get('object');

        \$helper             = \$this->factory->getHelper('integration');
        \$integration_object = \$helper->getIntegrationObject(\$integration);
        \$entity             = \$integration_object->getIntegrationSettings();
        \$featureSettings    = \$entity->getFeatureSettings();
        \$doNotMatchField    = ('-1' === \$mautic_field || '' === \$mautic_field);
        if ('lead' == \$object) {
            \$fields       = 'leadFields';
            \$updateFields = 'update_mautic';
        } else {
            \$fields       = 'companyFields';
            \$updateFields = 'update_mautic_company';
        }
        \$newFeatureSettings = [];
        if (\$doNotMatchField) {
            if (isset(\$featureSettings[\$updateFields]) && array_key_exists(\$integration_field, \$featureSettings[\$updateFields])) {
                unset(\$featureSettings[\$updateFields][\$integration_field]);
            }
            if (isset(\$featureSettings[\$fields]) && array_key_exists(\$integration_field, \$featureSettings[\$fields])) {
                unset(\$featureSettings[\$fields][\$integration_field]);
            }
            \$dataArray = ['success' => 0];
        } else {
            \$newFeatureSettings[\$integration_field] = \$update_mautic;
            if (isset(\$featureSettings[\$updateFields])) {
                \$featureSettings[\$updateFields] = array_merge(\$featureSettings[\$updateFields], \$newFeatureSettings);
            } else {
                \$featureSettings[\$updateFields] = \$newFeatureSettings;
            }
            \$newFeatureSettings[\$integration_field] = \$mautic_field;
            if (isset(\$featureSettings[\$fields])) {
                \$featureSettings[\$fields] = array_merge(\$featureSettings[\$fields], \$newFeatureSettings);
            } else {
                \$featureSettings[\$fields] = \$newFeatureSettings;
            }

            \$dataArray = ['success' => 1];
        }
        \$entity->setFeatureSettings(\$featureSettings);

        \$this->getModel('plugin')->saveFeatureSettings(\$entity);

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/PluginBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Controller/AjaxController.php");
    }
}
