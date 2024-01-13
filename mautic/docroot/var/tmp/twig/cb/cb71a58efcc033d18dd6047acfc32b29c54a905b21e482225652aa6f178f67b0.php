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

/* @bundles/EmailBundle/Tests/EventListener/TrackingSubscriberTest.php */
class __TwigTemplate_89865135348445feb37b56fdab34969689c7f23854c6a4a05aaf279f19defa11 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;
use Mautic\\SmsBundle\\Entity\\Sms;
use Mautic\\SmsBundle\\Entity\\Stat;
use Mautic\\SmsBundle\\Entity\\StatRepository;
use Mautic\\SmsBundle\\EventListener\\TrackingSubscriber;

class TrackingSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|StatRepository
     */
    private \$statRepository;

    protected function setUp(): void
    {
        \$this->statRepository = \$this->createMock(StatRepository::class);
    }

    public function testIdentifyContactByStat()
    {
        \$ct = [
                'lead'    => 2,
                'channel' => [
                    'sms' => 1,
                ],
                'stat'    => 'abc123',
        ];

        \$sms = \$this->createMock(Sms::class);
        \$sms->method('getId')
            ->willReturn(1);

        \$lead = \$this->createMock(Lead::class);
        \$lead->method('getId')
            ->willReturn(2);

        \$stat = new Stat();
        \$stat->setSms(\$sms);
        \$stat->setLead(\$lead);

        \$this->statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['trackingHash' => 'abc123'])
            ->willReturn(\$stat);

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertEquals(\$lead->getId(), \$event->getIdentifiedContact()->getId());
    }

    public function testChannelMismatchDoesNotIdentify()
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'email' => 1,
            ],
            'stat'    => 'abc123',
        ];

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertNull(\$event->getIdentifiedContact());
    }

    public function testChannelIdMismatchDoesNotIdentify()
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'sms' => 2,
            ],
            'stat'    => 'abc123',
        ];

        \$sms = \$this->createMock(Sms::class);
        \$sms->method('getId')
            ->willReturn(1);

        \$lead = \$this->createMock(Lead::class);
        \$lead->method('getId')
            ->willReturn(2);

        \$stat = new Stat();
        \$stat->setSms(\$sms);
        \$stat->setLead(\$lead);

        \$this->statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['trackingHash' => 'abc123'])
            ->willReturn(\$stat);

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertNull(\$event->getIdentifiedContact());
    }

    public function testStatEmptyLeadDoesNotIdentify()
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'sms' => 2,
            ],
            'stat'    => 'abc123',
        ];

        \$sms = \$this->createMock(Sms::class);
        \$sms->method('getId')
            ->willReturn(1);

        \$stat = new Stat();
        \$stat->setSms(\$sms);

        \$this->statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['trackingHash' => 'abc123'])
            ->willReturn(\$stat);

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertNull(\$event->getIdentifiedContact());
    }

    /**
     * @return TrackingSubscriber
     */
    private function getSubscriber()
    {
        return new TrackingSubscriber(\$this->statRepository);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/EventListener/TrackingSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/TrackingSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/EventListener/TrackingSubscriberTest.php");
    }
}
