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

/* @bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php */
class __TwigTemplate_4651b45b299736c375acf9ee9e37eb953dfe9c1061a5463e03150c4fc48a0831 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;

class LeadTimelineEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Every event in the timeline should have a unique eventId so test that one is generated if the subscriber forgets
     *
     * @covers \\Mautic\\LeadBundle\\Event\\LeadTimelineEvent::addEvent()
     * @covers \\Mautic\\LeadBundle\\Event\\LeadTimelineEvent::getEvents()
     * @covers \\Mautic\\LeadBundle\\Event\\LeadTimelineEvent::generateEventId()
     */
    public function testEventIdIsGeneratedIfNotSetBySubscriber()
    {
        \$payload = [
            [
                'event'      => 'foo',
                'eventLabel' => 'Foo',
                'eventType'  => 'foo',
                'timestamp'  => new \\DateTime(),
                'extra'      => [
                    'something' => 'something',
                ],
                'icon'      => 'fa-tachometer',
                'contactId' => 1,
            ],
            [
                'event'      => 'bar',
                'eventLabel' => 'Bar',
                'eventType'  => 'bar',
                'timestamp'  => new \\DateTime(),
                'extra'      => [
                    'something' => 'something else',
                ],
                'icon'      => 'fa-tachometer',
                'contactId' => 2,
            ],
            [
                'event'      => 'foobar',
                'eventId'    => 'foobar123',
                'eventLabel' => 'Foo Bar',
                'eventType'  => 'foobar',
                'timestamp'  => new \\DateTime(),
                'extra'      => [
                    'something' => 'something else',
                ],
                'icon'      => 'fa-tachometer',
                'contactId' => 2,
            ],
        ];

        \$event = new LeadTimelineEvent();

        foreach (\$payload as \$data) {
            \$event->addEvent(\$data);
        }

        \$events = \$event->getEvents();

        \$id1 = hash('crc32', json_encode(\$payload[0]), false);
        \$this->assertTrue(isset(\$events[0]['eventId']));
        \$this->assertEquals('foo'.\$id1, \$events[0]['eventId']);

        \$id2 = hash('crc32', json_encode(\$payload[1]), false);
        \$this->assertTrue(isset(\$events[1]['eventId']));
        \$this->assertEquals('bar'.\$id2, \$events[1]['eventId']);

        \$this->assertTrue(isset(\$events[2]['eventId']));
        \$this->assertEquals('foobar123', \$events[2]['eventId']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php");
    }
}
