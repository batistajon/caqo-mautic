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

/* @bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php */
class __TwigTemplate_79eac42e6dcba7bc16c85541135086cdb57f6db6666c268c5ca1ae83f9822685 extends Template
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

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\EventListener\\StopSubscriber;

class StopSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|DoNotContact
     */
    private \$doNotContactModel;

    protected function setUp(): void
    {
        \$this->doNotContactModel = \$this->createMock(DoNotContactModel::class);
    }

    public function testLeadAddedToDNC()
    {
        \$lead = new Lead();
        \$lead->setId(1);
        \$event = new ReplyEvent(\$lead, 'stop');

        \$this->doNotContactModel->expects(\$this->once())
        ->method('addDncForContact')
        ->with(1, 'sms', DoNotContact::UNSUBSCRIBED);

        \$this->StopSubscriber()->onReply(\$event);
    }

    /**
     * @return StopSubscriber
     */
    private function StopSubscriber()
    {
        return new StopSubscriber(\$this->doNotContactModel);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php");
    }
}
