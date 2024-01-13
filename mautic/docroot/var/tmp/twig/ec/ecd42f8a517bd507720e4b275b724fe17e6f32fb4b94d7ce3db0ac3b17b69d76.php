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

/* @bundles/NotificationBundle/Controller/PopupController.php */
class __TwigTemplate_a0e01504ae051700a56ee126212f1bd94dca824931b9b453f698317b82440ddc extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;

class PopupController extends CommonController
{
    public function indexAction()
    {
        /** @var \\Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper \$assetsHelper */
        \$assetsHelper = \$this->container->get('templating.helper.assets');
        \$assetsHelper->addStylesheet('/app/bundles/NotificationBundle/Assets/css/popup/popup.css');

        \$response = \$this->render(
            'MauticNotificationBundle:Popup:index.html.php',
            [
                'siteUrl' => \$this->coreParametersHelper->get('site_url'),
            ]
        );

        \$content = \$response->getContent();

        \$event = new PageDisplayEvent(\$content, new Page());
        \$this->dispatcher->dispatch(PageEvents::PAGE_ON_DISPLAY, \$event);
        \$content = \$event->getContent();

        return \$response->setContent(\$content);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Controller/PopupController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/PopupController.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Controller/PopupController.php");
    }
}
