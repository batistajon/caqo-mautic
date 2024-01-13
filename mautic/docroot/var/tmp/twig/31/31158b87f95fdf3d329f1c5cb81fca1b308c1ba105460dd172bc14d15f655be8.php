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

/* @bundles/EmailBundle/Tests/Transport/SparkpostTransportMessageTest.php */
class __TwigTemplate_a835db0d600cb098dceeaf1ec4f488f5097787ff1a0dc9c6874eb8c8a8f1c564 extends Template
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
use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;
use Mautic\\EmailBundle\\Swiftmailer\\Sparkpost\\SparkpostFactoryInterface;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\SparkpostTransport;
use Psr\\Log\\LoggerInterface;

class SparkpostTransportMessageTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCcAndBccFields()
    {
        \$translator        = \$this->createMock(Translator::class);
        \$transportCallback = \$this->createMock(TransportCallback::class);
        \$sparkpostFactory  = \$this->createMock(SparkpostFactoryInterface::class);
        \$logger            = \$this->createMock(LoggerInterface::class);

        \$message = new MauticMessage('Test subject', 'First Name: {formfield=first_name}');
        \$message->addFrom('from@xx.xx');

        \$message->addTo('to1@xx.xx');
        \$message->addTo('to2@xx.xx');

        \$message->addCc('cc1@xx.xx');
        \$message->addCc('cc2@xx.xx');

        \$message->addBcc('bcc1@xx.xx');
        \$message->addBcc('bcc2@xx.xx');

        \$message->addMetadata(
            'to1@xx.xx',
            [
                'tokens' => [
                    '{formfield=first_name}' => '1',
                ],
            ]
        );

        \$message->addMetadata(
            'to2@xx.xx',
            [
                'tokens' => [
                    '{formfield=first_name}' => '2',
                ],
            ]
        );

        \$sparkpost = new SparkpostTransport('1234', \$translator, \$transportCallback, \$sparkpostFactory, \$logger);

        \$sparkpostMessage = \$sparkpost->getSparkPostMessage(\$message);

        \$this->assertEquals('from@xx.xx', \$sparkpostMessage['content']['from']);
        \$this->assertEquals('Test subject', \$sparkpostMessage['content']['subject']);
        \$this->assertEquals('First Name: ";
        // line 57
        echo twig_escape_filter($this->env, ["FORMFIELDFIRSTNAME" => ($context["FORMFIELDFIRSTNAME"] ?? null)], "html", null, true);
        echo "', \$sparkpostMessage['content']['html']);

        \$this->assertCount(10, \$sparkpostMessage['recipients']);

        //CC and BCC fields has to be included as normal recipient with same data as TO fields has
        \$recipients = [
            [
                'address' => [
                    'email' => 'to1@xx.xx',
                    'name'  => null,
                ],
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '1',
                ],
            ],
            [
                'address' => [
                    'email' => 'cc1@xx.xx',
                ],
                'header_to'         => 'to1@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '1',
                ],
            ],
            [
                'address' => [
                    'email' => 'cc2@xx.xx',
                ],
                'header_to'         => 'to1@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '1',
                ],
            ],
            [
                'address' => [
                    'email' => 'bcc1@xx.xx',
                ],
                'header_to'         => 'to1@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '1',
                ],
            ],
            [
                'address' => [
                    'email' => 'bcc2@xx.xx',
                ],
                'header_to'         => 'to1@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '1',
                ],
            ],
            [
                'address' => [
                    'email' => 'to2@xx.xx',
                    'name'  => null,
                ],
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '2',
                ],
            ],
            [
                'address' => [
                    'email' => 'cc1@xx.xx',
                ],
                'header_to'         => 'to2@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '2',
                ],
            ],
            [
                'address' => [
                    'email' => 'cc2@xx.xx',
                ],
                'header_to'         => 'to2@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '2',
                ],
            ],
            [
                'address' => [
                    'email' => 'bcc1@xx.xx',
                ],
                'header_to'         => 'to2@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '2',
                ],
            ],
            [
                'address' => [
                    'email' => 'bcc2@xx.xx',
                ],
                'header_to'         => 'to2@xx.xx',
                'substitution_data' => [
                    'FORMFIELDFIRSTNAME' => '2',
                ],
            ],
        ];

        \$this->assertEquals(\$recipients, \$sparkpostMessage['recipients']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Transport/SparkpostTransportMessageTest.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  95 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/EmailBundle/Tests/Transport/SparkpostTransportMessageTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Transport/SparkpostTransportMessageTest.php");
    }
}
