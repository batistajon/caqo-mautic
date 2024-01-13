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

/* @bundles/PageBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_6bd8af3f405812dde36155472a5b60afc91ae74e52018aaa5c8b85f9137bb493 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\PageBundle\\Form\\Type\\ConfigTrackingPageType;
use Mautic\\PageBundle\\Form\\Type\\ConfigType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => [
                ['onConfigGenerate', 0],
                ['onConfigGenerateTracking', 0],
            ],
            ConfigEvents::CONFIG_PRE_SAVE => ['onConfigSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event)
    {
        \$event->addForm([
            'bundle'     => 'PageBundle',
            'formAlias'  => 'pageconfig',
            'formType'   => ConfigType::class,
            'formTheme'  => 'MauticPageBundle:FormTheme\\Config',
            // parameters must be defined directly in case there are 2 config forms per bundle.
            // \$event->getParametersFromConfig('MauticPageBundle') would return all params for PageBundle
            // and trackingconfig form would overwrote values in the pageconfig form. See #5559.
            'parameters' => [
                'cat_in_page_url'  => false,
                'google_analytics' => false,
            ],
        ]);
    }

    public function onConfigGenerateTracking(ConfigBuilderEvent \$event)
    {
        \$event->addForm([
            'bundle'     => 'PageBundle',
            'formAlias'  => 'trackingconfig',
            'formType'   => ConfigTrackingPageType::class,
            'formTheme'  => 'MauticPageBundle:FormTheme\\Config',
            // parameters defined this way because of the reason as above.
            'parameters' => [
                'anonymize_ip'                          => false,
                'track_contact_by_ip'                   => false,
                'track_by_tracking_url'                 => false,
                'facebook_pixel_id'                     => null,
                'facebook_pixel_trackingpage_enabled'   => false,
                'facebook_pixel_landingpage_enabled'    => false,
                'google_analytics_id'                   => null,
                'google_analytics_trackingpage_enabled' => false,
                'google_analytics_landingpage_enabled'  => false,
                'google_analytics_anonymize_ip'         => false,
                'do_not_track_404_anonymous'            => false,
            ],
        ]);
    }

    public function onConfigSave(ConfigEvent \$event)
    {
        \$values = \$event->getConfig();

        if (!empty(\$values['pageconfig']['google_analytics'])) {
            \$values['pageconfig']['google_analytics'] = htmlspecialchars(\$values['pageconfig']['google_analytics']);
            \$event->setConfig(\$values);
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
        return "@bundles/PageBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/ConfigSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/EventListener/ConfigSubscriber.php");
    }
}
