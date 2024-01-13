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

/* @bundles/LeadBundle/Tests/EventListener/FormSubscriberTest.php */
class __TwigTemplate_da1d0ecf7c5367a56486e58b7cfa81fe1766908f5e685e946c9ff9977a9b007f extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\FormBundle\\Entity\\Action;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\EventListener\\FormSubscriber;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Symfony\\Component\\HttpFoundation\\Request;

class FormSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var EmailModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$emailModel;

    /**
     * @var LeadModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$leadModel;

    /**
     * @var ContactTracker|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$contactTracker;

    /**
     * @var IpLookupHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$ipLookupHelper;

    protected function setUp(): void
    {
        \$this->emailModel     = \$this->createMock(EmailModel::class);
        \$this->leadModel      = \$this->createMock(LeadModel::class);
        \$this->contactTracker = \$this->createMock(ContactTracker::class);
        \$this->ipLookupHelper = \$this->createMock(IpLookupHelper::class);
    }

    public function testOnFormSubmitActionChangePoints()
    {
        \$this->contactTracker->method('getContact')->willReturn(new Lead());

        \$this->ipLookupHelper->method('getIpAddress')->willReturn(new IpAddress());

        \$formSubscriber = new FormSubscriber(
            \$this->emailModel,
            \$this->leadModel,
            \$this->contactTracker,
            \$this->ipLookupHelper
        );

        \$submission = new Submission();
        \$submission->setForm(new Form());
        \$submission->setLead(new Lead());

        \$request = \$this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$submissionEvent = new SubmissionEvent(\$submission, [], [], \$request);

        \$action = new Action();
        \$action->setType('lead.pointschange');
        \$action->setProperties(['points' => 1, 'operator' => 'plus']);
        \$submissionEvent->setAction(\$action);

        \$formSubscriber->onFormSubmitActionChangePoints(\$submissionEvent);

        \$this->assertEquals(1, \$submissionEvent->getSubmission()->getLead()->getPoints());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/FormSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/FormSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/FormSubscriberTest.php");
    }
}
