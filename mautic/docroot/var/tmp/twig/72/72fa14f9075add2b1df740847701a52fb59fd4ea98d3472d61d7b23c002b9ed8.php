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

/* @bundles/CampaignBundle/Tests/Executioner/Result/ResponsesTest.php */
class __TwigTemplate_c9c402435be857d942183adc63b2bd6d7a00b2f6a67ce236062c2b43c4297dd8 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Result;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Executioner\\Result\\Responses;

class ResponsesTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testExtractingResponsesFromLog()
    {
        \$actionEvent = \$this->createMock(Event::class);
        \$actionEvent->method('getEventType')
            ->willReturn(Event::TYPE_ACTION);
        \$actionEvent->method('getType')
            ->willReturn('actionEvent');
        \$actionEvent->method('getId')
            ->willReturn(1);

        // BC should set response as just test
        \$actionLog = \$this->createMock(LeadEventLog::class);
        \$actionLog->method('getEvent')
            ->willReturn(\$actionEvent);
        \$actionLog->method('getMetadata')
            ->willReturn(['timeline' => 'test']);

        \$action2Event = \$this->createMock(Event::class);
        \$action2Event->method('getEventType')
            ->willReturn(Event::TYPE_ACTION);
        \$action2Event->method('getType')
            ->willReturn('action2Event');
        \$action2Event->method('getId')
            ->willReturn(2);

        // Response should be full array
        \$action2Log = \$this->createMock(LeadEventLog::class);
        \$action2Log->method('getEvent')
            ->willReturn(\$action2Event);
        \$action2Log->method('getMetadata')
            ->willReturn(['timeline' => 'test', 'something' => 'else']);

        // Response should be full array
        \$conditionEvent = \$this->createMock(Event::class);
        \$conditionEvent->method('getEventType')
            ->willReturn(Event::TYPE_CONDITION);
        \$conditionEvent->method('getType')
            ->willReturn('conditionEvent');
        \$conditionEvent->method('getId')
            ->willReturn(3);

        \$conditionLog = \$this->createMock(LeadEventLog::class);
        \$conditionLog->method('getEvent')
            ->willReturn(\$conditionEvent);
        \$conditionLog->method('getMetadata')
            ->willReturn(['something' => 'else']);

        \$logs = new ArrayCollection([\$actionLog, \$action2Log, \$conditionLog]);

        \$responses = new Responses();
        \$responses->setFromLogs(\$logs);

        \$actions = [
            'actionEvent'  => [
                1 => 'test',
            ],
            'action2Event' => [
                2 => [
                    'timeline'  => 'test',
                    'something' => 'else',
                ],
            ],
        ];

        \$conditions = [
            'conditionEvent' => [
                3 => [
                    'something' => 'else',
                ],
            ],
        ];

        \$this->assertEquals(\$actions, \$responses->getActionResponses());
        \$this->assertEquals(\$conditions, \$responses->getConditionResponses());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/Result/ResponsesTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Result/ResponsesTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/Result/ResponsesTest.php");
    }
}
