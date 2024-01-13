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

/* @bundles/EmailBundle/Tests/Transport/MandrillTransportTest.php */
class __TwigTemplate_13e4c34294fd605d6bcfc387e79e380dc33855964b20ca008c9e8246b811137f extends Template
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
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\MandrillTransport;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Symfony\\Component\\HttpFoundation\\Request;

class MandrillTransportTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWebhookPayloadIsProcessed()
    {
        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$translator->method('trans')
            ->willReturnCallback(
                function (\$key) {
                    return \$key;
                }
            );

        \$transportCallback = \$this->getMockBuilder(TransportCallback::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$transportCallback->expects(\$this->exactly(4))
            ->method('addFailureByHashId')
            ->withConsecutive(
                [\$this->equalTo('1'), \"smtp;550 5.1.1 The email account that you tried to reach does not exist. Please try double-checking the recipient's email address for typos or unnecessary spaces.\", DoNotContact::BOUNCED],
                [\$this->equalTo('2'), 'unsubscribed', DoNotContact::UNSUBSCRIBED],
                [\$this->equalTo('3'), 'unsubscribed', DoNotContact::UNSUBSCRIBED],
                [\$this->equalTo('4'), 'reject', DoNotContact::BOUNCED]
            );

        \$transportCallback->expects(\$this->once())
            ->method('addFailureByAddress')
            ->with(
                'bounce@mandrill.test',
                'reject',
                DoNotContact::BOUNCED
            );

        \$mandrill = new MandrillTransport(\$translator, \$transportCallback);

        \$mandrill->processCallbackRequest(\$this->getRequestWithPayload());
    }

    /**
     * @return Request
     */
    private function getRequestWithPayload()
    {
        \$json = <<<JSON
    [
       {
          \"event\":\"hard_bounce\",
          \"msg\":{
             \"ts\":1365109999,
             \"subject\":\"This an example webhook message\",
             \"email\":\"example.webhook@mandrillapp.com\",
             \"sender\":\"example.sender@mandrillapp.com\",
             \"tags\":[
                \"webhook-example\"
             ],
             \"state\":\"bounced\",
             \"metadata\":{
                \"hashId\":1
             },
             \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa\",
             \"_version\":\"exampleaaaaaaaaaaaaaaa\",
             \"bounce_description\":\"bad_mailbox\",
             \"bgtools_code\":10,
             \"diag\":\"smtp;550 5.1.1 The email account that you tried to reach does not exist. Please try double-checking the recipient's email address for typos or unnecessary spaces.\"
          },
          \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa\",
          \"ts\":1513974230
       },
       {
          \"event\":\"spam\",
          \"msg\":{
             \"ts\":1365109999,
             \"subject\":\"This an example webhook message\",
             \"email\":\"example.webhook@mandrillapp.com\",
             \"sender\":\"example.sender@mandrillapp.com\",
             \"tags\":[
                \"webhook-example\"
             ],
             \"opens\":[
                {
                   \"ts\":1365111111
                }
             ],
             \"clicks\":[
                {
                   \"ts\":1365111111,
                   \"url\":\"http:\\/\\/mandrill.com\"
                }
             ],
             \"state\":\"sent\",
             \"metadata\":{
                \"hashId\":2
             },
             \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa1\",
             \"_version\":\"exampleaaaaaaaaaaaaaaa\"
          },
          \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa1\",
          \"ts\":1513974230
       },
       {
          \"event\":\"unsub\",
          \"msg\":{
             \"ts\":1365109999,
             \"subject\":\"This an example webhook message\",
             \"email\":\"example.webhook@mandrillapp.com\",
             \"sender\":\"example.sender@mandrillapp.com\",
             \"tags\":[
                \"webhook-example\"
             ],
             \"opens\":[
                {
                   \"ts\":1365111111
                }
             ],
             \"clicks\":[
                {
                   \"ts\":1365111111,
                   \"url\":\"http:\\/\\/mandrill.com\"
                }
             ],
             \"state\":\"sent\",
             \"metadata\":{
                \"hashId\":3
             },
             \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa2\",
             \"_version\":\"exampleaaaaaaaaaaaaaaa\"
          },
          \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa2\",
          \"ts\":1513974230
       },
       {
          \"event\":\"reject\",
          \"msg\":{
             \"ts\":1365109999,
             \"subject\":\"This an example webhook message\",
             \"email\":\"example.webhook@mandrillapp.com\",
             \"sender\":\"example.sender@mandrillapp.com\",
             \"tags\":[
                \"webhook-example\"
             ],
             \"opens\":[
    
             ],
             \"clicks\":[
    
             ],
             \"state\":\"rejected\",
             \"metadata\":{
                \"hashId\":4
             },
             \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa3\",
             \"_version\":\"exampleaaaaaaaaaaaaaaa\"
          },
          \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa3\",
          \"ts\":1513974230
       },
       {
          \"event\":\"reject\",
          \"msg\":{
             \"ts\":1365109999,
             \"subject\":\"This an example webhook message\",
             \"email\":\"bounce@mandrill.test\",
             \"sender\":\"example.sender@mandrillapp.com\",
             \"tags\":[
                \"webhook-example\"
             ],
             \"opens\":[
    
             ],
             \"clicks\":[
    
             ],
             \"state\":\"rejected\",
             \"metadata\":{
                \"custom\":1
             },
             \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa3\",
             \"_version\":\"exampleaaaaaaaaaaaaaaa\"
          },
          \"_id\":\"exampleaaaaaaaaaaaaaaaaaaaaaaaaa3\",
          \"ts\":1513974230
       }
    ]
JSON;

        return new Request([], ['mandrill_events' => \$json]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Transport/MandrillTransportTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Transport/MandrillTransportTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Transport/MandrillTransportTest.php");
    }
}
