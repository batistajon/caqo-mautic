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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php */
class __TwigTemplate_381bea53d7f67e587709b76902d8f746e579f2c4cf8169df72ddc087c48cc7d8 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\ContactFinder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadRepository as CampaignLeadRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\InactiveContactFinder;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\NullLogger;

class InactiveContactFinderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LeadRepository
     */
    private \$leadRepository;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CampaignLeadRepository
     */
    private \$campaignLeadRepository;

    protected function setUp(): void
    {
        \$this->leadRepository         = \$this->createMock(LeadRepository::class);
        \$this->campaignLeadRepository = \$this->createMock(CampaignLeadRepository::class);
    }

    public function testNoContactsFoundExceptionIsThrown()
    {
        \$this->campaignLeadRepository->expects(\$this->once())
            ->method('getInactiveContacts')
            ->willReturn([]);

        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->getContactFinder()->getContacts(1, new Event(), \$limiter);
    }

    public function testNoContactsFoundExceptionIsThrownIfEntitiesAreNotFound()
    {
        \$contactMemberDates = [
            1 => new \\DateTime(),
        ];

        \$this->campaignLeadRepository->expects(\$this->once())
            ->method('getInactiveContacts')
            ->willReturn(\$contactMemberDates);

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn([]);

        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->getContactFinder()->getContacts(1, new Event(), \$limiter);
    }

    public function testContactsAreFoundAndStoredInCampaignMemberDatesAdded()
    {
        \$contactMemberDates = [
            1 => new \\DateTime(),
        ];

        \$this->campaignLeadRepository->expects(\$this->once())
            ->method('getInactiveContacts')
            ->willReturn(\$contactMemberDates);

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([new Lead()]));

        \$contactFinder = \$this->getContactFinder();

        \$limiter  = new ContactLimiter(0, 0, 0, 0);
        \$contacts = \$contactFinder->getContacts(1, new Event(), \$limiter);
        \$this->assertCount(1, \$contacts);

        \$this->assertEquals(\$contactMemberDates, \$contactFinder->getDatesAdded());
    }

    /**
     * @return InactiveContactFinder
     */
    private function getContactFinder()
    {
        return new InactiveContactFinder(
            \$this->leadRepository,
            \$this->campaignLeadRepository,
            new NullLogger()
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php");
    }
}
