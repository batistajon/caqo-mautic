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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php */
class __TwigTemplate_b8c808380ed50769e799d7665695bb28f3f5f9d84ca3b04ae1933d7d71f3734f extends Template
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
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\ScheduledContactFinder;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\NullLogger;

class ScheduledContactFinderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LeadRepository
     */
    private \$leadRepository;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CampaignRepository
     */
    private \$campaignRepository;

    protected function setUp(): void
    {
        \$this->leadRepository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->campaignRepository = \$this->getMockBuilder(CampaignRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testHydratedLeadsFromRepositoryAreFoundAndPushedIntoLogs()
    {
        \$lead1 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead1->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(1);

        \$lead2 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead2->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(2);

        \$log1 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log1->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead1);
        \$log1->expects(\$this->once())
            ->method('setLead');

        \$log2 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log2->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead2);
        \$log2->expects(\$this->once())
            ->method('setLead');

        \$logs = new ArrayCollection(
            [
                1 => \$log1,
                2 => \$log2,
            ]
        );

        \$contacs = new ArrayCollection(
            [
                1 => \$lead1,
                2 => \$lead2,
            ]
        );

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(\$contacs);

        \$this->getContactFinder()->hydrateContacts(\$logs);
    }

    public function testHydratedLeadsFromRepositoryWithMissingLeadResultsLogBeingRemoved()
    {
        \$lead1 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead1->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(1);

        \$lead2 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead2->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(2);

        \$log1 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log1->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead1);
        \$log1->expects(\$this->once())
            ->method('setLead');

        \$log2 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log2->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead2);
        \$log2->expects(\$this->never())
            ->method('setLead');

        \$logs = new ArrayCollection(
            [
                1 => \$log1,
                2 => \$log2,
            ]
        );

        \$contacs = new ArrayCollection(
            [
                1 => \$lead1,
            ]
        );

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(\$contacs);

        \$this->getContactFinder()->hydrateContacts(\$logs);

        \$this->assertCount(1, \$logs);
    }

    public function testNoContactsFoundExceptionIsThrownIfEntitiesAreNotFound()
    {
        \$this->leadRepository->expects(\$this->never())
            ->method('getContactCollection');

        \$this->expectException(NoContactsFoundException::class);

        \$this->getContactFinder()->hydrateContacts(new ArrayCollection());
    }

    /**
     * @return ScheduledContactFinder
     */
    private function getContactFinder()
    {
        return new ScheduledContactFinder(
            \$this->leadRepository,
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
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php");
    }
}
