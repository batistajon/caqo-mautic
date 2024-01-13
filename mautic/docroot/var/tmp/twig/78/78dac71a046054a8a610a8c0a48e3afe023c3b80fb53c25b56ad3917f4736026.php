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

/* @bundles/CampaignBundle/Tests/Membership/MembershipManagerTest.php */
class __TwigTemplate_a9f7db0e7b1e7a3fe93c7a602b3bf2e63773e224ebb9d90de341ead1b3301139 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Membership;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Action\\Adder;
use Mautic\\CampaignBundle\\Membership\\Action\\Remover;
use Mautic\\CampaignBundle\\Membership\\EventDispatcher;
use Mautic\\CampaignBundle\\Membership\\MembershipManager;
use Mautic\\LeadBundle\\Entity\\Lead;
use Psr\\Log\\NullLogger;

class MembershipManagerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var Adder|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$adder;

    /**
     * @var Remover|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$remover;

    /**
     * @var EventDispatcher|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$eventDispatcher;

    /**
     * @var LeadRepository|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$leadRepository;

    /**
     * @var NullLogger|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$logger;

    protected function setUp(): void
    {
        \$this->adder           = \$this->createMock(Adder::class);
        \$this->remover         = \$this->createMock(Remover::class);
        \$this->eventDispatcher = \$this->createMock(EventDispatcher::class);
        \$this->leadRepository  = \$this->createMock(LeadRepository::class);
        \$this->logger          = new NullLogger();
    }

    public function testMembershipCreatedIfNotFound()
    {
        \$contact  = new Lead();
        \$campaign = new Campaign();

        \$this->leadRepository->expects(\$this->once())
            ->method('findOneBy')
            ->willReturn(null);

        \$this->adder->expects(\$this->once())
            ->method('createNewMembership');

        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatchMembershipChange');

        \$this->getManager()->addContact(\$contact, \$campaign);
    }

    public function testMembershipUpdatedIfFound()
    {
        \$contact        = new Lead();
        \$campaign       = new Campaign();
        \$campaignMember = new CampaignMember();
        \$campaignMember->setLead(\$contact);
        \$campaignMember->setCampaign(\$campaign);

        \$this->leadRepository->expects(\$this->once())
            ->method('findOneBy')
            ->willReturn(\$campaignMember);

        \$this->adder->expects(\$this->once())
            ->method('updateExistingMembership');

        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatchMembershipChange');

        \$this->getManager()->addContact(\$contact, \$campaign);
    }

    public function testMembershipIsUpdatedWhenRemoved()
    {
        \$contact        = new Lead();
        \$campaign       = new Campaign();
        \$campaignMember = new CampaignMember();
        \$campaignMember->setLead(\$contact);
        \$campaignMember->setCampaign(\$campaign);

        \$this->leadRepository->expects(\$this->once())
            ->method('findOneBy')
            ->willReturn(\$campaignMember);

        \$this->remover->expects(\$this->once())
            ->method('updateExistingMembership');

        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatchMembershipChange');

        \$this->getManager()->removeContact(\$contact, \$campaign);
    }

    public function testContactsAreAddedOrUpdated()
    {
        \$contact = \$this->createMock(Lead::class);
        \$contact->method('getId')
            ->willReturn(1);
        \$contact2 = \$this->createMock(Lead::class);
        \$contact2->method('getId')
            ->willReturn(2);

        \$campaign       = new Campaign();
        \$campaignMember = new CampaignMember();
        \$campaignMember->setLead(\$contact2);
        \$campaignMember->setCampaign(\$campaign);

        // One is found and one is not
        \$this->leadRepository->expects(\$this->once())
            ->method('getCampaignMembers')
            ->willReturn([\$contact2->getId() => \$campaignMember]);

        \$this->adder->expects(\$this->once())
            ->method('updateExistingMembership')
            ->with(\$campaignMember, true);

        \$this->adder->expects(\$this->once())
            ->method('createNewMembership')
            ->with(\$contact, \$campaign, true);

        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatchBatchMembershipChange')
            ->with([\$contact->getId() => \$contact, \$contact2->getId() => \$contact2], \$campaign, Adder::NAME);

        \$this->getManager()->addContacts(new ArrayCollection([1 => \$contact, 2 => \$contact2]), \$campaign);
    }

    public function testContactsAreRemoved()
    {
        \$contact = \$this->createMock(Lead::class);
        \$contact->method('getId')
            ->willReturn(1);
        \$contact2 = \$this->createMock(Lead::class);
        \$contact2->method('getId')
            ->willReturn(2);

        \$campaign       = new Campaign();
        \$campaignMember = new CampaignMember();
        \$campaignMember->setLead(\$contact2);
        \$campaignMember->setCampaign(\$campaign);

        // One is found and one is not
        \$this->leadRepository->expects(\$this->once())
            ->method('getCampaignMembers')
            ->willReturn([\$contact2->getId() => \$campaignMember]);

        \$this->remover->expects(\$this->once())
            ->method('updateExistingMembership')
            ->with(\$campaignMember, false);

        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatchBatchMembershipChange')
            ->with([\$contact2->getId() => \$contact2], \$campaign, Remover::NAME);

        \$this->getManager()->removeContacts(new ArrayCollection([1 => \$contact, 2 => \$contact2]), \$campaign);
    }

    private function getManager()
    {
        return new MembershipManager(\$this->adder, \$this->remover, \$this->eventDispatcher, \$this->leadRepository, \$this->logger);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Membership/MembershipManagerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/MembershipManagerTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Membership/MembershipManagerTest.php");
    }
}
