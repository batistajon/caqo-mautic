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

/* @bundles/CampaignBundle/Tests/Model/EventModelTest.php */
class __TwigTemplate_6d58e14c2cc30809d9e40c3f5b735a5eba52a05805648b60883af240b8a781ff extends Template
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

declare(strict_types=1);

namespace Mautic\\CampaignBundle\\Tests\\Model;

use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Model\\EventModel;
use PHPUnit\\Framework\\TestCase;

class EventModelTest extends TestCase
{
    /**
     * @var LeadEventLogRepository
     */
    private \$leadEventLogRepository;

    /**
     * @var EventModel
     */
    private \$eventModel;

    protected function setUp(): void
    {
        \$this->eventModel = \$this->getMockBuilder(EventModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods([
                'getRepository',
                'getLeadEventLogRepository',
                'deleteEntities',
            ])
            ->getMock();

        \$this->leadEventLogRepository = \$this->createMock(LeadEventLogRepository::class);
    }

    public function testThatClonedEventsDoNotAttemptNullingParentInDeleteEvents(): void
    {
        \$this->eventModel->expects(\$this->exactly(0))
            ->method('getRepository')
            ->willReturn(\$this->leadEventLogRepository);

        \$currentEvents = [
            'new1',
            'new2',
            'new3',
        ];

        \$deletedEvents = [
            'new1',
        ];

        \$this->eventModel->deleteEvents(\$currentEvents, \$deletedEvents);
    }

    public function testThatItDeletesEventLogs(): void
    {
        \$idToDelete = 'old1';

        \$this->eventModel->expects(\$this->once())
            ->method('getRepository')
            ->willReturn(\$this->leadEventLogRepository);

        \$this->eventModel->expects(\$this->once())
            ->method('getLeadEventLogRepository')
            ->willReturn(\$this->leadEventLogRepository);

        \$this->leadEventLogRepository->expects(\$this->once())
            ->method('removeEventLogs')
            ->with(\$idToDelete);

        \$this->eventModel->expects(\$this->once())
            ->method('deleteEntities')
            ->with([\$idToDelete]);

        \$currentEvents = [
            'new1',
        ];

        \$deletedEvents = [
            'new1',
            \$idToDelete,
        ];

        \$this->eventModel->deleteEvents(\$currentEvents, \$deletedEvents);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Model/EventModelTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Model/EventModelTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Model/EventModelTest.php");
    }
}
