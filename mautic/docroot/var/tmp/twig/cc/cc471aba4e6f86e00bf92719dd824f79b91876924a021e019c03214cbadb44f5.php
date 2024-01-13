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

/* @bundles/NotificationBundle/Helper/NotificationHelper.php */
class __TwigTemplate_a9911ffe1dcc2685fb5ad7b1a098fd048e38936f5a3eaa5d39204a6e3328734d extends Template
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

namespace Mautic\\NotificationBundle\\Helper;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class NotificationHelper
{
    /**
     * @var EntityManager
     */
    protected \$em;

    /**
     * @var IntegrationHelper
     */
    protected \$integrationHelper;

    /**
     * @var CoreParametersHelper
     */
    protected \$coreParametersHelper;

    /**
     * @var AssetsHelper
     */
    protected \$assetsHelper;

    /**
     * @var Router
     */
    protected \$router;

    /**
     * @var RequestStack
     */
    protected \$requestStack;

    /**
     * @var \\Mautic\\LeadBundle\\Model\\DoNotContact
     */
    private \$doNotContact;

    /**
     * NotificationHelper constructor.
     */
    public function __construct(EntityManager \$em, AssetsHelper \$assetsHelper, CoreParametersHelper \$coreParametersHelper, IntegrationHelper \$integrationHelper, Router \$router, RequestStack \$requestStack, \\Mautic\\LeadBundle\\Model\\DoNotContact \$doNotContact)
    {
        \$this->em                   = \$em;
        \$this->assetsHelper         = \$assetsHelper;
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->integrationHelper    = \$integrationHelper;
        \$this->router               = \$router;
        \$this->requestStack         = \$requestStack;
        \$this->doNotContact         = \$doNotContact;
    }

    /**
     * @param string \$notification
     *
     * @return bool
     */
    public function unsubscribe(\$notification)
    {
        /** @var \\Mautic\\LeadBundle\\Entity\\LeadRepository \$repo */
        \$repo = \$this->em->getRepository('MauticLeadBundle:Lead');

        \$lead = \$repo->getLeadByEmail(\$notification);

        return \$this->doNotContact->addDncForContact(\$lead->getId(), 'notification', DoNotContact::UNSUBSCRIBED);
    }

    public function getHeaderScript()
    {
        if (\$this->hasScript()) {
            return 'MauticJS.insertScript(\\'https://cdn.onesignal.com/sdks/OneSignalSDK.js\\');
                    var OneSignal = OneSignal || [];';
        }
    }

    public function getScript()
    {
        if (\$this->hasScript()) {
            \$integration = \$this->integrationHelper->getIntegrationObject('OneSignal');

            if (!\$integration || false === \$integration->getIntegrationSettings()->getIsPublished()) {
                return;
            }

            \$settings        = \$integration->getIntegrationSettings();
            \$keys            = \$integration->getDecryptedApiKeys();
            \$supported       = \$settings->getSupportedFeatures();
            \$featureSettings = \$settings->getFeatureSettings();

            \$appId                      = \$keys['app_id'];
            \$safariWebId                = \$keys['safari_web_id'];
            \$welcomenotificationEnabled = in_array('welcome_notification_enabled', \$supported);
            \$notificationSubdomainName  = \$featureSettings['subdomain_name'];
            \$leadAssociationUrl         = \$this->router->generate(
                'mautic_subscribe_notification',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            \$welcomenotificationText = '';

            if (!\$welcomenotificationEnabled) {
                \$welcomenotificationText = 'welcomeNotification: { \"disable\": true },';
            }

            \$server        = \$this->requestStack->getCurrentRequest()->server;
            \$https         = ('https' == parse_url(\$server->get('HTTP_REFERER'), PHP_URL_SCHEME)) ? true : false;
            \$subdomainName = '';

            if (!\$https && \$notificationSubdomainName) {
                \$subdomainName = 'subdomainName: \"'.\$notificationSubdomainName.'\",
                httpPermissionRequest: {
                    enable: true,
                    useCustomModal: true
                },';
            }

            \$oneSignalInit = <<<JS
var scrpt = document.createElement('link');
scrpt.rel ='manifest';
scrpt.href ='/manifest.json';
var head = document.getElementsByTagName('head')[0];
head.appendChild(scrpt);

OneSignal.push([\"init\", {
    appId: \"{\$appId}\",
    safari_web_id: \"{\$safariWebId}\",
    autoRegister: true,
    {\$welcomenotificationText}
    {\$subdomainName}
    notifyButton: {
        enable: false // Set to false to hide
    }
}]);

var postUserIdToMautic = function(userId) {
    var data = [];
    data['osid'] = userId;
    MauticJS.makeCORSRequest('GET', '{\$leadAssociationUrl}', data);
};

OneSignal.push(function() {
    OneSignal.getUserId(function(userId) {
        if (! userId) {
            OneSignal.on('subscriptionChange', function(isSubscribed) {
                if (isSubscribed) {
                    OneSignal.getUserId(function(newUserId) {
                        postUserIdToMautic(newUserId);
                    });
                }
            });
        } else {
            postUserIdToMautic(userId);
        }
    });
    // Just to be sure we've grabbed the ID
    window.onbeforeunload = function() {
        OneSignal.getUserId(function(userId) {
            if (userId) {
                postUserIdToMautic(userId);
            }
        });
    };
});
JS;

            if (!\$https && \$notificationSubdomainName) {
                \$oneSignalInit .= <<<'JS'
OneSignal.push(function() {
    OneSignal.on('notificationPermissionChange', function(permissionChange) {
        if(currentPermission == 'granted'){
        setTimeout(function(){
            OneSignal.registerForPushNotifications({httpPermissionRequest: true});
        }, 100);
        }
    });
});
JS;
            }

            return \$oneSignalInit;
        }
    }

    private function hasScript()
    {
        \$landingPage = true;
        \$server      = \$this->requestStack->getCurrentRequest()->server;
        \$cookies     = \$this->requestStack->getCurrentRequest()->cookies;
        // already exist
        if (\$cookies->get('mtc_osid')) {
            return false;
        }

        if (false === strpos(\$server->get('HTTP_REFERER'), \$this->coreParametersHelper->get('site_url'))) {
            \$landingPage = false;
        }

        \$integration = \$this->integrationHelper->getIntegrationObject('OneSignal');

        if (!\$integration || false === \$integration->getIntegrationSettings()->getIsPublished()) {
            return false;
        }

        \$supportedFeatures = \$integration->getIntegrationSettings()->getSupportedFeatures();

        // disable on Landing pages
        if (true === \$landingPage && !in_array('landing_page_enabled', \$supportedFeatures)) {
            return false;
        }

        // disable on Landing pages
        if (false === \$landingPage && !in_array('tracking_page_enabled', \$supportedFeatures)) {
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Helper/NotificationHelper.php";
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
        return new Source("", "@bundles/NotificationBundle/Helper/NotificationHelper.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Helper/NotificationHelper.php");
    }
}
