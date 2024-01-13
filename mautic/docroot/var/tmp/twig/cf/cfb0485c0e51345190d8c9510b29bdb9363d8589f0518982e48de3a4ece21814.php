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

/* @bundles/CampaignBundle/Tests/Service/CampaignTest.php */
class __TwigTemplate_c57318102af804902fd2f92186ffa745e90bfc0b8ee3828421eab16f1a20b3f4 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Service;

use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Service\\Campaign;
use Mautic\\EmailBundle\\Entity\\EmailRepository;

class CampaignTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testHasUnpublishedEmail()
    {
        \$campaignId         = 1;
        \$campaignRepository = \$this->createMock(CampaignRepository::class);
        \$campaignRepository
            ->expects(\$this->once())
            ->method('fetchEmailIdsById')
            ->with(\$campaignId)
            ->willReturn([]);
        \$emailRepository = \$this->createMock(EmailRepository::class);
        \$campaignService = new Campaign(\$campaignRepository, \$emailRepository);

        \$this->assertFalse(\$campaignService->hasUnpublishedEmail(\$campaignId));

        \$emailIds             = [1, 2.3];
        \$hasUnpublishedEmails = true;
        \$campaignRepository   = \$this->createMock(CampaignRepository::class);
        \$campaignRepository
            ->expects(\$this->once())
            ->method('fetchEmailIdsById')
            ->with(\$campaignId)
            ->willReturn(\$emailIds);
        \$emailRepository = \$this->createMock(EmailRepository::class);
        \$emailRepository
            ->expects(\$this->once())
            ->method('isOneUnpublished')
            ->with(\$emailIds)
            ->willReturn(\$hasUnpublishedEmails);
        \$campaignService = new Campaign(\$campaignRepository, \$emailRepository);
        \$this->assertTrue(\$campaignService->hasUnpublishedEmail(\$campaignId));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Service/CampaignTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Service/CampaignTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Service/CampaignTest.php");
    }
}
