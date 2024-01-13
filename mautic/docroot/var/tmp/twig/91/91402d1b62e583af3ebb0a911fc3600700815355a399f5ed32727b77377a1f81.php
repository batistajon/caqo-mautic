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

/* @bundles/LeadBundle/Tests/EventListener/CampaignSubscriberTest.php */
class __TwigTemplate_c42e0ee1360055937eced9539403a6760b7c127b4ae34cfabaf73b48c2564fc6 extends Template
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

use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\EventListener\\CampaignSubscriber;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Model\\ListModel;

class CampaignSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /** @var array */
    private \$configFrom = [
        'id'          => 111,
        'companyname' => 'Mautic',
        'companemail' => 'mautic@mautic.com',
    ];

    private \$configTo = [
        'id'          => '112',
        'companyname' => 'Mautic2',
        'companemail' => 'mautic@mauticsecond.com',
    ];

    public function testOnCampaignTriggerActiononUpdateCompany()
    {
        \$mockIpLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$mockLeadModel      = \$this->createMock(LeadModel::class);
        \$mockLeadFieldModel = \$this->createMock(FieldModel::class);
        \$mockListModel      = \$this->createMock(ListModel::class);
        \$mockCompanyModel   = \$this->createMock(CompanyModel::class);
        \$mockCampaignModel  = \$this->createMock(CampaignModel::class);
        \$companyEntityFrom  = \$this->createMock(Company::class);

        \$companyEntityFrom->method('getId')
            ->willReturn(\$this->configFrom['id']);
        \$companyEntityFrom->method('getName')
            ->willReturn(\$this->configFrom['companyname']);

        \$companyEntityTo = \$this->createMock(Company::class);
        \$companyEntityTo->method('getId')
            ->willReturn(\$this->configTo['id']);
        \$companyEntityTo->method('getName')
            ->willReturn(\$this->configTo['companyname']);
        \$companyEntityTo->method('getProfileFields')
            ->willReturn(\$this->configTo);

        \$mockCompanyModel->expects(\$this->once())->method('getEntity')->willReturn(\$companyEntityFrom);

        \$mockCompanyLeadRepo  = \$this->createMock(CompanyLeadRepository::class);
        \$mockCompanyLeadRepo->expects(\$this->once())->method('getCompaniesByLeadId')->willReturn(null);

        \$mockCompanyModel->expects(\$this->once())
            ->method('getCompanyLeadRepository')
            ->willReturn(\$mockCompanyLeadRepo);

        \$mockCompanyModel->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([\$companyEntityTo]);

        \$mockCompanyModel->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$mockCoreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$mockCoreParametersHelper->method('get')
            ->with('default_timezone')
            ->willReturn('UTC');

        \$subscriber = new CampaignSubscriber(
            \$mockIpLookupHelper,
            \$mockLeadModel,
            \$mockLeadFieldModel,
            \$mockListModel,
            \$mockCompanyModel,
            \$mockCampaignModel,
            \$mockCoreParametersHelper
        );

        /** @var LeadModel \$leadModel */
        \$lead = new Lead();
        \$lead->setId(99);
        \$lead->setPrimaryCompany(\$this->configFrom);

        \$mockLeadModel->expects(\$this->once())->method('setPrimaryCompany')->willReturnCallback(
            function () use (\$lead) {
                \$lead->setPrimaryCompany(\$this->configTo);
            }
        );

        \$args = [
            'lead'  => \$lead,
            'event' => [
                'type'       => 'lead.updatecompany',
                'properties' => \$this->configTo,
            ],
            'eventDetails'    => [],
            'systemTriggered' => true,
            'eventSettings'   => [],
        ];

        \$event = new CampaignExecutionEvent(\$args, true);
        \$subscriber->onCampaignTriggerActionUpdateCompany(\$event);
        \$this->assertTrue(\$event->getResult());

        \$primaryCompany = \$lead->getPrimaryCompany();
        \$this->assertSame(\$this->configTo['companyname'], \$primaryCompany['companyname']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/CampaignSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/CampaignSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/CampaignSubscriberTest.php");
    }
}
