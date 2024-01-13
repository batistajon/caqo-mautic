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

/* @bundles/CampaignBundle/Tests/CampaignTestAbstract.php */
class __TwigTemplate_223a0bfe2dd420bb52a54616ad614d50472930890256f920ec91b21383b46955 extends Template
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

namespace Mautic\\CampaignBundle\\Tests;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CampaignBundle\\EventCollector\\EventCollector;
use Mautic\\CampaignBundle\\Membership\\MembershipBuilder;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Entity\\FormRepository;
use Mautic\\FormBundle\\Model\\FormModel;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;

class CampaignTestAbstract extends \\PHPUnit\\Framework\\TestCase
{
    protected static \$mockId   = 232;
    protected static \$mockName = 'Mock name';

    /**
     * @return CampaignModel
     */
    protected function initCampaignModel()
    {
        \$entityManager = \$this
            ->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$security = \$this->getMockBuilder(CorePermissions::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$security->expects(\$this->any())
            ->method('isGranted')
            ->will(\$this->returnValue(true));

        \$userHelper = \$this->getMockBuilder(UserHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$formRepository = \$this->getMockBuilder(FormRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$formRepository->expects(\$this->any())
            ->method('getFormList')
            ->will(\$this->returnValue([['id' => self::\$mockId, 'name' => self::\$mockName]]));

        \$leadListModel = \$this->getMockBuilder(ListModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$leadListModel->expects(\$this->any())
            ->method('getUserLists')
            ->will(\$this->returnValue([['id' => self::\$mockId, 'name' => self::\$mockName]]));

        \$formModel = \$this->getMockBuilder(FormModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$formModel->expects(\$this->any())
            ->method('getRepository')
            ->will(\$this->returnValue(\$formRepository));

        \$eventCollector    = \$this->createMock(EventCollector::class);
        \$membershipBuilder = \$this->createMock(MembershipBuilder::class);

        \$contactTracker = \$this->createMock(ContactTracker::class);

        \$campaignModel = new CampaignModel(\$leadListModel, \$formModel, \$eventCollector, \$membershipBuilder, \$contactTracker);

        \$leadListModel->setEntityManager(\$entityManager);
        \$formModel->setEntityManager(\$entityManager);
        \$campaignModel->setEntityManager(\$entityManager);
        \$campaignModel->setSecurity(\$security);
        \$campaignModel->setUserHelper(\$userHelper);

        return \$campaignModel;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/CampaignTestAbstract.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/CampaignTestAbstract.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/CampaignTestAbstract.php");
    }
}
