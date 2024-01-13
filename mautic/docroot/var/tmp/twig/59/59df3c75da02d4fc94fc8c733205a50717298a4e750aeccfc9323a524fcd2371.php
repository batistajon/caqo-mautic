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

/* @bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php */
class __TwigTemplate_5108d9b659f83b26b93b5002c0c1d3562c6d1e64df3483d51ac51d3f23c297bd extends Template
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

namespace Mautic\\SmsBundle\\Tests\\EventListener;

use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\EventListener\\TrackingSubscriber;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;

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
                    'email' => 1,
                ],
                'stat'    => 'abc123',
        ];

        \$email = \$this->createMock(Email::class);
        \$email->method('getId')
            ->willReturn(1);

        \$lead = \$this->createMock(Lead::class);
        \$lead->method('getId')
            ->willReturn(2);

        \$stat = new Stat();
        \$stat->setEmail(\$email);
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
                'sms' => 1,
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
                'email' => 2,
            ],
            'stat'    => 'abc123',
        ];

        \$email = \$this->createMock(Email::class);
        \$email->method('getId')
            ->willReturn(1);

        \$lead = \$this->createMock(Lead::class);
        \$lead->method('getId')
            ->willReturn(2);

        \$stat = new Stat();
        \$stat->setEmail(\$email);
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
                'email' => 2,
            ],
            'stat'    => 'abc123',
        ];

        \$email = \$this->createMock(Email::class);
        \$email->method('getId')
            ->willReturn(1);

        \$stat = new Stat();
        \$stat->setEmail(\$email);

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
        return "@bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php");
    }
}
