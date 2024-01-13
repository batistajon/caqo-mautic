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

/* @bundles/ChannelBundle/Tests/Model/FrequencyActionModelTest.php */
class __TwigTemplate_7de67832342719d1c698ac045d0b6f5614eaad04fcda66b2cff671225f558e52 extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Model;

use Doctrine\\Common\\Collections\\AbstractLazyCollection;
use Mautic\\ChannelBundle\\Model\\FrequencyActionModel;
use Mautic\\LeadBundle\\Entity\\FrequencyRule;
use Mautic\\LeadBundle\\Entity\\FrequencyRuleRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class FrequencyActionModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|Lead
     */
    private \$contactMock5;

    /**
     * @var MockObject|LeadModel
     */
    private \$contactModelMock;

    /**
     * @var MockObject|FrequencyRuleRepository
     */
    private \$frequencyRepoMock;

    /**
     * @var MockObject|FrequencyRule
     */
    private \$frequencyRuleEmailMock;

    /**
     * @var MockObject|FrequencyRule
     */
    private \$frequencyRuleSmsMock;

    /**
     * @var FrequencyActionModel
     */
    private \$actionModel;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->contactMock5           = \$this->createMock(Lead::class);
        \$this->contactModelMock       = \$this->createMock(LeadModel::class);
        \$this->frequencyRepoMock      = \$this->createMock(FrequencyRuleRepository::class);
        \$this->frequencyRuleEmailMock = \$this->createMock(FrequencyRule::class);
        \$this->frequencyRuleSmsMock   = \$this->createMock(FrequencyRule::class);
        \$collectionMock               = \$this->createMock(AbstractLazyCollection::class);
        \$this->actionModel            = new FrequencyActionModel(
            \$this->contactModelMock,
            \$this->frequencyRepoMock
        );

        \$collectionMock->method('toArray')
            ->willReturn([
                'email' => \$this->frequencyRuleEmailMock,
                'sms'   => \$this->frequencyRuleSmsMock,
            ]);

        \$this->contactMock5->method('getFrequencyRules')->willReturn(\$collectionMock);
    }

    public function testUpdateWhenEntityAccess(): void
    {
        \$contacts = [5];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('canEditContact')
            ->with(\$this->contactMock5)
            ->willReturn(false);

        \$this->contactModelMock->expects(\$this->never())
            ->method('getPreferenceChannels');

        \$this->actionModel->update(\$contacts, [], '');
    }

    public function testUpdate(): void
    {
        \$contacts = [5];
        \$params   = [
            'subscribed_channels'            => ['email', 'sms'],
            'frequency_number_email'         => '2',
            'frequency_time_email'           => 'WEEK',
            'preferred_channel'              => 'email',
            'contact_pause_start_date_email' => '2018-05-13',
            'contact_pause_end_date_email'   => '2018-05-26',
            'frequency_number_sms'           => '',
            'frequency_time_sms'             => '',
            'contact_pause_start_date_sms'   => '',
            'contact_pause_end_date_sms'     => '',
        ];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('canEditContact')
            ->with(\$this->contactMock5)
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('getPreferenceChannels')
            ->willReturn([
                'Email'        => 'email',
                'Text Message' => 'sms',
            ]);

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setChannel')
            ->with('email');

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setLead')
            ->with(\$this->contactMock5);

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setDateAdded');

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setFrequencyNumber')
            ->with('2');

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setFrequencyTime')
            ->with('WEEK');

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setPauseFromDate')
            ->with(new \\DateTime('2018-05-13T00:00:00.000000+0000'));

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setPauseToDate')
            ->with(new \\DateTime('2018-05-26T00:00:00.000000+0000'));

        \$this->frequencyRuleEmailMock->expects(\$this->once())
            ->method('setPreferredChannel')
            ->with(true);

        \$this->contactMock5->expects(\$this->exactly(2))
            ->method('addFrequencyRule')
            ->withConsecutive(
                [\$this->frequencyRuleEmailMock],
                [\$this->frequencyRuleEmailMock]
            );

        \$this->frequencyRepoMock->expects(\$this->exactly(2))
            ->method('saveEntity')
            ->withConsecutive(
                [\$this->frequencyRuleEmailMock],
                [\$this->frequencyRuleSmsMock]
            );

        \$this->frequencyRuleSmsMock->expects(\$this->once())
            ->method('setChannel')
            ->with('sms');

        \$this->frequencyRuleSmsMock->expects(\$this->once())
            ->method('setLead')
            ->with(\$this->contactMock5);

        \$this->frequencyRuleSmsMock->expects(\$this->once())
            ->method('setDateAdded');

        \$this->frequencyRuleSmsMock->expects(\$this->once())
            ->method('setFrequencyNumber')
            ->with(null);

        \$this->frequencyRuleSmsMock->expects(\$this->once())
            ->method('setFrequencyTime')
            ->with(null);

        \$this->frequencyRuleSmsMock->expects(\$this->never())
            ->method('setPauseFromDate');

        \$this->frequencyRuleSmsMock->expects(\$this->never())
            ->method('setPauseToDate');

        \$this->frequencyRuleSmsMock->expects(\$this->once())
            ->method('setPreferredChannel')
            ->with(false);

        \$this->actionModel->update(\$contacts, \$params, 'email');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Tests/Model/FrequencyActionModelTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Model/FrequencyActionModelTest.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Tests/Model/FrequencyActionModelTest.php");
    }
}
