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

/* @bundles/AssetBundle/Controller/AjaxController.php */
class __TwigTemplate_de61763951ee2018e25668169b9ef864bcbe58ba3b610db4e925481f162907ab extends Template
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

namespace Mautic\\AssetBundle\\Controller;

use Gaufrette\\Filesystem;
use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Event\\RemoteAssetBrowseEvent;
use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function categoryListAction(Request \$request)
    {
        \$filter    = InputHelper::clean(\$request->query->get('filter'));
        \$results   = \$this->getModel('asset')->getLookupResults('category', \$filter, 10);
        \$dataArray = [];
        foreach (\$results as \$r) {
            \$dataArray[] = [
                'label' => \$r['title'].\" ({\$r['id']})\",
                'value' => \$r['id'],
            ];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     *
     * @throws \\Exception
     */
    protected function fetchRemoteFilesAction(Request \$request)
    {
        \$provider   = InputHelper::string(\$request->request->get('provider'));
        \$path       = InputHelper::string(\$request->request->get('path', ''));
        \$dispatcher = \$this->dispatcher;
        \$name       = AssetEvents::ASSET_ON_REMOTE_BROWSE;

        if (!\$dispatcher->hasListeners(\$name)) {
            return \$this->sendJsonResponse(['success' => 0]);
        }

        /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$integrationHelper */
        \$integrationHelper = \$this->factory->getHelper('integration');

        /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$integration */
        \$integration = \$integrationHelper->getIntegrationObject(\$provider);

        \$event = new RemoteAssetBrowseEvent(\$integration);

        \$dispatcher->dispatch(\$name, \$event);

        if (!\$adapter = \$event->getAdapter()) {
            return \$this->sendJsonResponse(['success' => 0]);
        }

        \$connector = new Filesystem(\$adapter);

        \$output = \$this->renderView(
            'MauticAssetBundle:Remote:list.html.php',
            [
                'connector'   => \$connector,
                'integration' => \$integration,
                'items'       => \$connector->listKeys(\$path),
            ]
        );

        return \$this->sendJsonResponse(['success' => 1, 'output' => \$output]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Controller/AjaxController.php");
    }
}
