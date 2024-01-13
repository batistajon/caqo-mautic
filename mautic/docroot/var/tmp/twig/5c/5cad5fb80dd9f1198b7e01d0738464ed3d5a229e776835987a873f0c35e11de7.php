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

/* @bundles/DynamicContentBundle/EventListener/BuildJsSubscriber.php */
class __TwigTemplate_45c748a31e59fc126c62cf8f4c393cd6707e8ec1eca40800a19b792a77bcd4ec extends Template
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

namespace Mautic\\DynamicContentBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\BuildJsEvent;
use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class BuildJsSubscriber implements EventSubscriberInterface
{
    /**
     * @var AssetsHelper
     */
    private \$assetsHelper;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    /**
     * @var RouterInterface
     */
    private \$router;

    public function __construct(
        AssetsHelper \$assetsHelper,
        TranslatorInterface \$translator,
        RequestStack \$requestStack,
        RouterInterface \$router
    ) {
        \$this->assetsHelper = \$assetsHelper;
        \$this->translator   = \$translator;
        \$this->requestStack = \$requestStack;
        \$this->router       = \$router;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::BUILD_MAUTIC_JS => ['onBuildJs', 200],
        ];
    }

    /**
     * Adds the MauticJS definition and core
     * JS functions for use in Bundles. This
     * must retain top priority of 1000.
     */
    public function onBuildJs(BuildJsEvent \$event)
    {
        \$dwcUrl = \$this->router->generate('mautic_api_dynamicContent_action', ['objectAlias' => 'slotNamePlaceholder'], UrlGeneratorInterface::ABSOLUTE_URL);

        \$js = <<<JS
        
           // call variable if doesnt exist
            if (typeof MauticDomain == 'undefined') {
                var MauticDomain = '{\$this->requestStack->getCurrentRequest()->getSchemeAndHttpHost()}';
            }            
            if (typeof MauticLang == 'undefined') {
                var MauticLang = {
                     'submittingMessage': \"{\$this->translator->trans('mautic.form.submission.pleasewait')}\"
        };
            }
MauticJS.replaceDynamicContent = function (params) {
    params = params || {};

    var dynamicContentSlots = document.querySelectorAll('.mautic-slot, [data-slot=\"dwc\"]');
    if (dynamicContentSlots.length) {
        MauticJS.iterateCollection(dynamicContentSlots)(function(node, i) {
            var slotName = node.dataset['slotName'];
            if ('undefined' === typeof slotName) {
                slotName = node.dataset['paramSlotName'];
            }
            if ('undefined' === typeof slotName) {
                node.innerHTML = '';
                return;
            }
            var url = '{\$dwcUrl}'.replace('slotNamePlaceholder', slotName);

            MauticJS.makeCORSRequest('GET', url, params, function(response, xhr) {
                if (response.content) {
                    var dwcContent = response.content;
                    node.innerHTML = dwcContent;

                    if (response.id && response.sid) {
                        MauticJS.setTrackedContact(response);
                    }

                    // form load library
                    if (dwcContent.search(\"mauticform_wrapper\") > 0) {
                        // if doesn't exist
                        if (typeof MauticSDK == 'undefined') {
                            MauticJS.insertScript('{\$this->assetsHelper->getUrl('media/js/mautic-form.js', null, null, true)}');
                            
                            // check initialize form library
                            var fileInterval = setInterval(function() {
                                if (typeof MauticSDK != 'undefined') {
                                    MauticSDK.onLoad(); 
                                    clearInterval(fileInterval); // clear interval
                                 }
                             }, 100); // check every 100ms
                        } else {
                            MauticSDK.onLoad();
                         }
                    }

                    var m;
                    var regEx = /<script[^>]+src=\"?([^\"\\s]+)\"?\\s/g;                    
                    
                    while (m = regEx.exec(dwcContent)) {
                        if ((m[1]).search(\"/focus/\") > 0) {
                            MauticJS.insertScript(m[1]);
                        }
                    }

                    if (dwcContent.search(\"fr-gatedvideo\") > 0) {
                        MauticJS.initGatedVideo();
                    }
                }
            });
        });
    }
};

MauticJS.beforeFirstEventDelivery(MauticJS.replaceDynamicContent);
JS;
        \$event->appendJs(\$js, 'Mautic Dynamic Content');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/EventListener/BuildJsSubscriber.php";
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
        return new Source("", "@bundles/DynamicContentBundle/EventListener/BuildJsSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/EventListener/BuildJsSubscriber.php");
    }
}
