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

/* @bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php */
class __TwigTemplate_3c86772101c0f823211090e7fe52b46f4dc4a769c736131796560481a59c6fbf extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Membership\\Action;

use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Action\\Remover;
use Mautic\\CampaignBundle\\Membership\\Exception\\ContactAlreadyRemovedFromCampaignException;
use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class RemoverTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var LeadRepository|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$leadRepository;

    /**
     * @var LeadEventLogRepository|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$leadEventLogRepository;

    protected function setUp(): void
    {
        \$this->leadRepository         = \$this->createMock(LeadRepository::class);
        \$this->leadEventLogRepository = \$this->createMock(LeadEventLogRepository::class);
    }

    public function testMemberHasDateExitedSetWithForcedExit()
    {
        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(false);

        \$this->leadEventLogRepository->expects(\$this->once())
            ->method('unscheduleEvents');

        \$this->getRemover()->updateExistingMembership(\$campaignMember, true);

        \$this->assertInstanceOf(\\DateTime::class, \$campaignMember->getDateLastExited());
    }

    public function testMemberHasDateExistedSetToNullWhenRemovedByFilter()
    {
        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(false);

        \$this->leadEventLogRepository->expects(\$this->once())
            ->method('unscheduleEvents');

        \$this->getRemover()->updateExistingMembership(\$campaignMember, false);

        \$this->assertNull(\$campaignMember->getDateLastExited());
    }

    public function testExceptionThrownWhenMemberIsAlreadyRemoved()
    {
        \$this->expectException(ContactAlreadyRemovedFromCampaignException::class);

        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(true);

        \$this->getRemover()->updateExistingMembership(\$campaignMember, false);
    }

    /**
     * @return Remover
     */
    private function getRemover()
    {
        \$translator     = \$this->createMock(TranslatorInterface::class);
        \$dateTimeHelper = \$this->createMock(DateHelper::class);

        return new Remover(\$this->leadRepository, \$this->leadEventLogRepository, \$translator, \$dateTimeHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php");
    }
}
