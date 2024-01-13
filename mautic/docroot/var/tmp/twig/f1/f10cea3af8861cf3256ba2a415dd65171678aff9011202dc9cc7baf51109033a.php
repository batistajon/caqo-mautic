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

/* @bundles/EmailBundle/Tests/Transport/ElasticemailTransportTest.php */
class __TwigTemplate_3254ea066751888188e3bfcef2d3953d204a56de15050de6b87434b94c3681b3 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Transport;

use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\EmailBundle\\Model\\TransportCallback;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\ElasticemailTransport;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Psr\\Log\\NullLogger;
use Symfony\\Component\\HttpFoundation\\Request;

class ElasticemailTransportTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$translator;
    private \$transportCallback;
    private \$logger;

    protected function setUp(): void
    {
        \$this->translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$this->translator->method('trans')
            ->willReturnCallback(
                function (\$key) {
                    return \$key;
                }
            );

        \$this->transportCallback = \$this->getMockBuilder(TransportCallback::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->logger = new NullLogger();
    }

    public function testUnsubscribedIsProcessed()
    {
        \$status = 'AbuseReport';
        \$this->transportCallback->expects(\$this->never())
            ->method('addFailureByHashId');

        \$this->transportCallback->expects(\$this->once())
            ->method('addFailureByAddress')
            ->with(
                'test@test.com',
                \$status,
                DoNotContact::UNSUBSCRIBED
            );

        \$transport = new ElasticemailTransport(\$this->translator, \$this->logger, \$this->transportCallback);

        \$transport->processCallbackRequest(\$this->getRequestWithPayload(\$status));
    }

    public function testAbuseReportIsProcessed()
    {
        \$status = 'Unsubscribed';
        \$this->transportCallback->expects(\$this->never())
            ->method('addFailureByHashId');

        \$this->transportCallback->expects(\$this->once())
            ->method('addFailureByAddress')
            ->with(
                'test@test.com',
                \$status,
                DoNotContact::UNSUBSCRIBED
            );

        \$transport = new ElasticemailTransport(\$this->translator, \$this->logger, \$this->transportCallback);

        \$transport->processCallbackRequest(\$this->getRequestWithPayload(\$status));
    }

    public function testSpamReportIsProcessed()
    {
        \$status = 'Something';
        \$this->transportCallback->expects(\$this->never())
            ->method('addFailureByHashId');

        \$this->transportCallback->expects(\$this->once())
            ->method('addFailureByAddress')
            ->with(
                'test@test.com',
                \$status,
                DoNotContact::UNSUBSCRIBED
            );

        \$transport = new ElasticemailTransport(\$this->translator, \$this->logger, \$this->transportCallback);

        \$transport->processCallbackRequest(\$this->getRequestWithPayload(\$status, 'Spam'));
    }

    public function testBounceReportIsProcessed()
    {
        \$bounceCategories = ['NotDelivered', 'NoMailbox', 'AccountProblem', 'DNSProblem', 'Unknown'];

        \$this->transportCallback->expects(\$this->never())
            ->method('addFailureByHashId');

        \$this->transportCallback->expects(\$this->exactly(5))
            ->method('addFailureByAddress')
            ->withConsecutive(
                ['test@test.com', 'NotDelivered', DoNotContact::BOUNCED],
                ['test@test.com', 'NoMailbox', DoNotContact::BOUNCED],
                ['test@test.com', 'AccountProblem', DoNotContact::BOUNCED],
                ['test@test.com', 'DNSProblem', DoNotContact::BOUNCED],
                ['test@test.com', 'Unknown', DoNotContact::BOUNCED]
            );

        \$transport = new ElasticemailTransport(\$this->translator, \$this->logger, \$this->transportCallback);

        foreach (\$bounceCategories as \$cat) {
            \$transport->processCallbackRequest(\$this->getRequestWithPayload('Bounce', \$cat));
        }
    }

    public function testErrorReportIsProcessed()
    {
        \$status = 'Error';
        \$this->transportCallback->expects(\$this->never())
            ->method('addFailureByHashId');

        \$this->transportCallback->expects(\$this->once())
            ->method('addFailureByAddress')
            ->with(
                'test@test.com',
                'mautic.email.complaint.reason.unknown',
                DoNotContact::BOUNCED
            );

        \$transport = new ElasticemailTransport(\$this->translator, \$this->logger, \$this->transportCallback);

        \$transport->processCallbackRequest(\$this->getRequestWithPayload(\$status));
    }

    /**
     * @param        \$status
     * @param string \$category
     *
     * @return Request
     */
    private function getRequestWithPayload(\$status, \$category = 'Ignore')
    {
        \$query   = [
            'status'      => \$status,
            'category'    => \$category,
            'account'     => 'account@test.com',
            'transaction' => '486de632-e3b1-40fd-ba29-807b8b13aa22',
            'to'          => 'test@test.com',
            'date'        => '12/22/2017 9:03:39 PM',
            'channel'     => 'testchannel',
            'subject'     => 'test',
        ];

        return new Request(\$query);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Transport/ElasticemailTransportTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Transport/ElasticemailTransportTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Transport/ElasticemailTransportTest.php");
    }
}
