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

/* @bundles/LeadBundle/Tests/EventListener/WebhookSubscriberTest.php */
class __TwigTemplate_d6c88c81259e71d2bd15658db4e88befdf3dc3f3d9cd3d468bf1ad620e89bc4d extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ChannelSubscriptionChange;
use Mautic\\LeadBundle\\Event\\CompanyEvent;
use Mautic\\LeadBundle\\Event\\LeadChangeCompanyEvent;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\LeadBundle\\EventListener\\WebhookSubscriber;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class WebhookSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var EventDispatcher|MockObject
     */
    private \$dispatcher;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
    }

    public function testNewContactEventIsFiredWhenIdentified()
    {
        \$mockModel  = \$this->createMock(WebhookModel::class);

        \$mockModel->expects(\$this->once())
            ->method('queueWebhooksByType')
            ->with(
                \$this->callback(
                    function (\$type) {
                        return LeadEvents::LEAD_POST_SAVE.'_new' === \$type;
                    }
                )
            );

        \$webhookSubscriber = new WebhookSubscriber(\$mockModel);

        \$this->dispatcher->addSubscriber(\$webhookSubscriber);

        \$lead = new Lead();
        \$lead->setEmail('hello@hello.com');
        \$lead->setDateIdentified(new \\DateTime());
        \$event = new LeadEvent(\$lead, true);
        \$this->dispatcher->dispatch(LeadEvents::LEAD_POST_SAVE, \$event);
    }

    public function testUpdateContactEventIsFiredWhenUpdatedButWithoutDateIdentified()
    {
        \$mockModel  = \$this->createMock(WebhookModel::class);

        \$mockModel->expects(\$this->once())
            ->method('queueWebhooksByType')
            ->with(
                \$this->callback(
                    function (\$type) {
                        return LeadEvents::LEAD_POST_SAVE.'_update' === \$type;
                    }
                )
            );

        \$webhookSubscriber = new WebhookSubscriber(\$mockModel);

        \$this->dispatcher->addSubscriber(\$webhookSubscriber);

        \$lead = new Lead();
        \$lead->setEmail('hello@hello.com');
        // remove date identified so it'll simulate a simple update
        \$lead->resetChanges();
        \$event = new LeadEvent(\$lead, false);
        \$this->dispatcher->dispatch(LeadEvents::LEAD_POST_SAVE, \$event);
    }

    public function testWebhookIsNotDeliveredIfContactIsAVisitor()
    {
        \$mockModel  = \$this->createMock(WebhookModel::class);

        \$mockModel->expects(\$this->exactly(0))
            ->method('queueWebhooksByType');

        \$webhookSubscriber = new WebhookSubscriber(\$mockModel);

        \$this->dispatcher->addSubscriber(\$webhookSubscriber);

        \$lead  = new Lead();
        \$event = new LeadEvent(\$lead, false);
        \$this->dispatcher->dispatch(LeadEvents::LEAD_POST_SAVE, \$event);
    }

    /**
     * @testdox Test that webhook is queued for channel subscription changes
     */
    public function testChannelChangeIsPickedUpByWebhook()
    {
        \$mockModel = \$this->getMockBuilder(WebhookModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead    = new Lead();
        \$channel = 'email';

        \$mockModel->expects(\$this->exactly(1))
            ->method('queueWebhooksByType')
            ->with(
                LeadEvents::CHANNEL_SUBSCRIPTION_CHANGED,
                [
                    'contact'    => \$lead,
                    'channel'    => \$channel,
                    'old_status' => 'contactable',
                    'new_status' => 'unsubscribed',
                ],

                [
                    'leadDetails',
                    'userList',
                    'publishDetails',
                    'ipAddress',
                    'doNotContactList',
                    'tagList',
                ]
            );

        \$webhookSubscriber = new WebhookSubscriber(\$mockModel);

        \$this->dispatcher->addSubscriber(\$webhookSubscriber);

        \$event = new ChannelSubscriptionChange(\$lead, \$channel, DoNotContact::IS_CONTACTABLE, DoNotContact::UNSUBSCRIBED);
        \$this->dispatcher->dispatch(LeadEvents::CHANNEL_SUBSCRIPTION_CHANGED, \$event);
    }

    /**
     * @testdox Test that webhook is queued for lead company changes
     */
    public function testLeadCompanyChangeIsPickedUpByWebhook()
    {
        \$mockModel = \$this->getMockBuilder(WebhookModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead    = new Lead();
        \$company = new Company();

        \$mockModel->expects(\$this->exactly(1))
            ->method('queueWebhooksByType')
            ->with(
                LeadEvents::LEAD_COMPANY_CHANGE,
                [
                    'added'      => true,
                    'contact'    => \$lead,
                    'company'    => \$company,
                ],
                [
                ]
            );

        \$webhookSubscriber = new WebhookSubscriber(\$mockModel);

        \$this->dispatcher->addSubscriber(\$webhookSubscriber);

        \$event = new LeadChangeCompanyEvent(\$lead, \$company);
        \$this->dispatcher->dispatch(LeadEvents::LEAD_COMPANY_CHANGE, \$event);
    }

    public function testOnCompanySaveAndDelete()
    {
        \$dispatcher = new EventDispatcher();
        \$mockModel  = \$this->createMock(WebhookModel::class);

        \$mockModel->expects(\$this->exactly(2))
            ->method('queueWebhooksByType');

        \$webhookSubscriber = new WebhookSubscriber(\$mockModel);

        \$dispatcher->addSubscriber(\$webhookSubscriber);

        \$company = new Company();
        \$company->setName('company');
        \$event = new CompanyEvent(\$company);
        \$dispatcher->dispatch(LeadEvents::COMPANY_POST_SAVE, \$event);
        \$dispatcher->dispatch(LeadEvents::COMPANY_POST_DELETE, \$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/WebhookSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/WebhookSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/WebhookSubscriberTest.php");
    }
}
