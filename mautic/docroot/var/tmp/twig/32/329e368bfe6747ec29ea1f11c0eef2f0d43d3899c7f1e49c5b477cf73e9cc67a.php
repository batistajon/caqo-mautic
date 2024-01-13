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

/* @bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php */
class __TwigTemplate_b4fa0147a4d386c48d194d84d2f84f0f37aaaa591503eaad7cbfe7cc7c74b14f extends Template
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

namespace Mautic\\IntegrationsBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomTemplateEvent;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class UIContactIntegrationsTabSubscriber implements EventSubscriberInterface
{
    /**
     * @var ObjectMappingRepository
     */
    private \$objectMappingRepository;

    public function __construct(ObjectMappingRepository \$objectMappingRepository)
    {
        \$this->objectMappingRepository = \$objectMappingRepository;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_TEMPLATE => ['onTemplateRender', 0],
        ];
    }

    public function onTemplateRender(CustomTemplateEvent \$event): void
    {
        if ('MauticLeadBundle:Lead:lead.html.php' === \$event->getTemplate()) {
            \$vars         = \$event->getVars();
            \$integrations = \$vars['integrations'];

            /** @var Lead \$contact */
            \$contact = \$vars['lead'];

            \$objectMappings = \$this->objectMappingRepository->getIntegrationMappingsForInternalObject(
                Contact::NAME,
                (int) \$contact->getId()
            );

            foreach (\$objectMappings as \$objectMapping) {
                \$integrations[] = [
                    'integration'           => \$objectMapping->getIntegration(),
                    'integration_entity'    => \$objectMapping->getIntegrationObjectName(),
                    'integration_entity_id' => \$objectMapping->getIntegrationObjectId(),
                    'date_added'            => \$objectMapping->getDateCreated(),
                    'last_sync_date'        => \$objectMapping->getLastSyncDate(),
                ];
            }

            \$vars['integrations'] = \$integrations;

            \$event->setVars(\$vars);
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
        return "@bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php");
    }
}
