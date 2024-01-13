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

/* @bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php */
class __TwigTemplate_7158a7c2e2f05f5f8821dc51a0c0eebcf8c1d362e916268edfd24dbaadf08786 extends Template
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

use Mautic\\IntegrationsBundle\\Event\\InternalObjectCreateEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectFindEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectOwnerEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectRouteEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectUpdateEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Company;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\CompanyObjectHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\Router;

class CompanyObjectSubscriber implements EventSubscriberInterface
{
    /**
     * @var CompanyObjectHelper
     */
    private \$companyObjectHelper;

    /**
     * @var Router
     */
    private \$router;

    public function __construct(
        CompanyObjectHelper \$companyObjectHelper,
        Router \$router
    ) {
        \$this->companyObjectHelper = \$companyObjectHelper;
        \$this->router              = \$router;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS => ['collectInternalObjects', 0],
            IntegrationEvents::INTEGRATION_UPDATE_INTERNAL_OBJECTS  => ['updateCompanies', 0],
            IntegrationEvents::INTEGRATION_CREATE_INTERNAL_OBJECTS  => ['createCompanies', 0],
            IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS    => [
                ['findCompaniesByIds', 0],
                ['findCompaniesByDateRange', 0],
                ['findCompaniesByFieldValues', 0],
            ],
            IntegrationEvents::INTEGRATION_FIND_OWNER_IDS              => ['findOwnerIdsForCompanies', 0],
            IntegrationEvents::INTEGRATION_BUILD_INTERNAL_OBJECT_ROUTE => ['buildCompanyRoute', 0],
        ];
    }

    public function collectInternalObjects(InternalObjectEvent \$event): void
    {
        \$event->addObject(new Company());
    }

    public function updateCompanies(InternalObjectUpdateEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setUpdatedObjectMappings(
            \$this->companyObjectHelper->update(
                \$event->getIdentifiedObjectIds(),
                \$event->getUpdateObjects()
            )
        );
        \$event->stopPropagation();
    }

    public function createCompanies(InternalObjectCreateEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setObjectMappings(\$this->companyObjectHelper->create(\$event->getCreateObjects()));
        \$event->stopPropagation();
    }

    public function findCompaniesByIds(InternalObjectFindEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName() || empty(\$event->getIds())) {
            return;
        }

        \$event->setFoundObjects(\$this->companyObjectHelper->findObjectsByIds(\$event->getIds()));
        \$event->stopPropagation();
    }

    public function findCompaniesByDateRange(InternalObjectFindEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName() || empty(\$event->getDateRange())) {
            return;
        }

        \$event->setFoundObjects(
            \$this->companyObjectHelper->findObjectsBetweenDates(
                \$event->getDateRange()->getFromDate(),
                \$event->getDateRange()->getToDate(),
                \$event->getStart(),
                \$event->getLimit()
            )
        );
        \$event->stopPropagation();
    }

    public function findCompaniesByFieldValues(InternalObjectFindEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName() || empty(\$event->getFieldValues())) {
            return;
        }

        \$event->setFoundObjects(
            \$this->companyObjectHelper->findObjectsByFieldValues(
                \$event->getFieldValues()
            )
        );
        \$event->stopPropagation();
    }

    public function findOwnerIdsForCompanies(InternalObjectOwnerEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setOwners(
            \$this->companyObjectHelper->findOwnerIds(
                \$event->getObjectIds()
            )
        );
        \$event->stopPropagation();
    }

    public function buildCompanyRoute(InternalObjectRouteEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setRoute(
            \$this->router->generate(
                'mautic_company_action',
                [
                    'objectAction' => 'view',
                    'objectId'     => \$event->getId(),
                ]
            )
        );
        \$event->stopPropagation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php");
    }
}
