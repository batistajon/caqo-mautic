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

/* @bundles/LeadBundle/Helper/ContactRequestHelper.php */
class __TwigTemplate_9ad1ea4abc405a397b882a38d27b2172f5e7a2472b755d7484ef6bd4d2e1d7ff extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\ClickthroughHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\LeadBundle\\DataObject\\LeadManipulator;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;
use Mautic\\LeadBundle\\Exception\\ContactNotFoundException;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Monolog\\Logger;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class ContactRequestHelper
{
    /**
     * @var LeadModel
     */
    private \$leadModel;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var ContactTracker
     */
    private \$contactTracker;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    /**
     * @var Logger
     */
    private \$logger;

    /**
     * @var Lead
     */
    private \$trackedContact;

    /**
     * @var array
     */
    private \$queryFields = [];

    /**
     * @var array
     */
    private \$publiclyUpdatableFieldValues = [];

    public function __construct(
        LeadModel \$leadModel,
        ContactTracker \$contactTracker,
        CoreParametersHelper \$coreParametersHelper,
        IpLookupHelper \$ipLookupHelper,
        RequestStack \$requestStack,
        Logger \$logger,
        EventDispatcherInterface \$eventDispatcher
    ) {
        \$this->leadModel            = \$leadModel;
        \$this->contactTracker       = \$contactTracker;
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->ipLookupHelper       = \$ipLookupHelper;
        \$this->requestStack         = \$requestStack;
        \$this->logger               = \$logger;
        \$this->eventDispatcher      = \$eventDispatcher;
    }

    /**
     * @return Lead
     */
    public function getContactFromQuery(array \$queryFields = [])
    {
        unset(\$queryFields['page_url']); // This is set now automatically by PageModel
        \$this->queryFields    = \$queryFields;

        try {
            \$foundContact         = \$this->getContactFromUrl();
            \$this->trackedContact = \$foundContact;
            \$this->contactTracker->setTrackedContact(\$this->trackedContact);
        } catch (ContactNotFoundException \$exception) {
        }

        if (!\$this->trackedContact) {
            \$this->trackedContact = \$this->contactTracker->getContact();
        }

        if (!\$this->trackedContact) {
            return null;
        }

        \$this->prepareContactFromRequest();

        return \$this->trackedContact;
    }

    /**
     * @return Lead
     *
     * @throws ContactNotFoundException
     */
    private function getContactFromUrl()
    {
        // Check for a lead requested through clickthrough query parameter
        if (isset(\$this->queryFields['ct'])) {
            \$clickthrough = (is_array(\$this->queryFields['ct'])) ? \$this->queryFields['ct'] : ClickthroughHelper::decodeArrayFromUrl(\$this->queryFields['ct']);
        } elseif (\$clickthrough = \$this->requestStack->getCurrentRequest()->get('ct', [])) {
            \$clickthrough = ClickthroughHelper::decodeArrayFromUrl(\$clickthrough);
        }

        if (!is_array(\$clickthrough)) {
            throw new ContactNotFoundException();
        }

        try {
            return \$this->getContactFromClickthrough(\$clickthrough);
        } catch (ContactNotFoundException \$exception) {
        }

        \$this->setEmailFromClickthroughIdentification(\$clickthrough);

        /* @var Lead \$foundContact */
        if (!empty(\$this->queryFields)) {
            [\$foundContact, \$this->publiclyUpdatableFieldValues] = \$this->leadModel->checkForDuplicateContact(
                \$this->queryFields,
                \$this->trackedContact,
                true,
                true
            );
            if (is_null(\$this->trackedContact) or \$foundContact->getId() !== \$this->trackedContact->getId()) {
                // A contact was found by a publicly updatable field
                if (!\$foundContact->isNew()) {
                    return \$foundContact;
                }
            }
        }

        throw new ContactNotFoundException();
    }

    /**
     * Identify a contact through a clickthrough URL.
     *
     * @return Lead
     *
     * @throws ContactNotFoundException
     */
    private function getContactFromClickthrough(array \$clickthrough)
    {
        \$event = new ContactIdentificationEvent(\$clickthrough);
        \$this->eventDispatcher->dispatch(LeadEvents::ON_CLICKTHROUGH_IDENTIFICATION, \$event);

        if (\$contact = \$event->getIdentifiedContact()) {
            \$this->logger->addDebug(\"LEAD: Contact ID# {\$contact->getId()} tracked through clickthrough query by the \".\$event->getIdentifier().' channel');

            // Merge tracked visitor into the clickthrough contact
            return \$this->mergeWithTrackedContact(\$contact);
        }

        throw new ContactNotFoundException();
    }

    private function setEmailFromClickthroughIdentification(array \$clickthrough)
    {
        if (!\$this->coreParametersHelper->get('track_by_tracking_url') || !empty(\$queryFields['email'])) {
            return;
        }

        if (empty(\$clickthrough['lead']) || !\$foundContact = \$this->leadModel->getEntity(\$clickthrough['lead'])) {
            return;
        }

        // Identify contact from link if email field is set as publicly updateable
        if (\$email = \$foundContact->getEmail()) {
            // Add email to query for checkForDuplicateContact to pick up and merge
            \$this->queryFields['email'] = \$email;
            \$this->logger->addDebug(\"LEAD: Contact ID# {\$clickthrough['lead']} tracked through clickthrough query.\");

            return;
        }
    }

    private function prepareContactFromRequest()
    {
        \$ipAddress          = \$this->ipLookupHelper->getIpAddress();
        \$contactIpAddresses = \$this->trackedContact->getIpAddresses();
        if (!\$contactIpAddresses->contains(\$ipAddress)) {
            \$this->trackedContact->addIpAddress(\$ipAddress);
        }

        if (!empty(\$this->publiclyUpdatableFieldValues)) {
            \$this->leadModel->setFieldValues(
                \$this->trackedContact,
                \$this->publiclyUpdatableFieldValues,
                false,
                true,
                true
            );
        }

        // Assume a web request as this is likely a tracking request from DWC or tracking code
        \$this->trackedContact->setManipulator(
            new LeadManipulator(
                'page',
                'hit',
                null,
                (isset(\$this->queryFields['page_url'])) ? \$this->queryFields['page_url'] : ''
            )
        );

        if (isset(\$this->queryFields['tags'])) {
            \$this->leadModel->modifyTags(\$this->trackedContact, \$this->queryFields['tags']);
        }
    }

    /**
     * @return Lead
     */
    private function mergeWithTrackedContact(Lead \$foundContact)
    {
        if (\$this->trackedContact && \$this->trackedContact->getId() && \$this->trackedContact->isAnonymous()) {
            return \$this->leadModel->mergeLeads(\$this->trackedContact, \$foundContact, false);
        }

        return \$foundContact;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/ContactRequestHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/ContactRequestHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/ContactRequestHelper.php");
    }
}
