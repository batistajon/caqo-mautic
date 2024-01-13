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

/* @bundles/LeadBundle/Tests/EventListener/OwnerSubscriberTest.php */
class __TwigTemplate_39a3ed3c9e5cae12b029cdf04dfaf42d198aebbaf943bcfa5c791226a9b855f5 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\EmailBundle\\Event\\EmailBuilderEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;
use Mautic\\EmailBundle\\Tests\\Helper\\Transport\\SmtpTransport;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\EventListener\\OwnerSubscriber;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Monolog\\Logger;

class OwnerSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$contacts = [
        [
            'id'        => 1,
            'email'     => 'contact1@somewhere.com',
            'firstname' => 'Contact',
            'lastname'  => '1',
            'owner_id'  => 3,
        ],
        [
            'id'        => 2,
            'email'     => 'contact2@somewhere.com',
            'firstname' => 'Contact',
            'lastname'  => '2',
            'owner_id'  => 0,
        ],
        [
            'id'        => 3,
            'email'     => 'contact3@somewhere.com',
            'firstname' => 'Contact',
            'lastname'  => '3',
            'owner_id'  => 2,
        ],
        [
            'id'        => 4,
            'email'     => 'contact4@somewhere.com',
            'firstname' => 'Contact',
            'lastname'  => '4',
            'owner_id'  => 1,
        ],
        [
            'id'        => 5,
            'email'     => 'contact5@somewhere.com',
            'firstname' => 'Contact',
            'lastname'  => '5',
            'owner_id'  => null,
        ],
    ];

    public function setUp(): void
    {
        defined('MAUTIC_ENV') or define('MAUTIC_ENV', 'test');
    }

    public function testOnEmailBuild()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());
        \$event      = new EmailBuilderEvent(\$this->getMockTranslator());
        \$subscriber->onEmailBuild(\$event);

        \$tokens = \$event->getTokens();
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);
    }

    public function testOnEmailGenerate()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());

        \$mailer = \$this->getMockMailer(\$this->contacts[0]);
        \$event  = new EmailSendEvent(\$mailer);
        \$subscriber->onEmailGenerate(\$event);

        \$tokens = \$event->getTokens();

        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);

        \$this->assertEquals('owner3@owner.com', \$tokens['{ownerfield=email}']);
        \$this->assertEquals('John', \$tokens['{ownerfield=firstname}']);
        \$this->assertEquals('S&#39;mith', \$tokens['{ownerfield=lastname}']);
    }

    public function testOnEmailGenerateWithFakeOwner()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());

        \$mailer = \$this->getMockMailer(\$this->contacts[1]);
        \$event  = new EmailSendEvent(\$mailer);
        \$subscriber->onEmailGenerate(\$event);

        \$tokens = \$event->getTokens();
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);
    }

    public function testOnEmailGenerateWithNoOwner()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());

        \$mailer = \$this->getMockMailer(\$this->contacts[4]);
        \$event  = new EmailSendEvent(\$mailer);
        \$subscriber->onEmailGenerate(\$event);

        \$tokens = \$event->getTokens();
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);

        \$this->assertEquals('', \$tokens['{ownerfield=email}']);
        \$this->assertEquals('', \$tokens['{ownerfield=firstname}']);
        \$this->assertEquals('', \$tokens['{ownerfield=lastname}']);
    }

    public function testOnEmailDisplay()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());

        \$mailer = \$this->getMockMailer(\$this->contacts[0]);
        \$event  = new EmailSendEvent(\$mailer);
        \$subscriber->onEmailDisplay(\$event);

        \$tokens = \$event->getTokens();
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);
    }

    public function testOnEmailDisplayWithFakeOwner()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());

        \$mailer = \$this->getMockMailer(\$this->contacts[1]);
        \$event  = new EmailSendEvent(\$mailer);
        \$subscriber->onEmailDisplay(\$event);

        \$tokens = \$event->getTokens();
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);
    }

    public function testOnEmailDisplayWithNoOwner()
    {
        \$subscriber = new OwnerSubscriber(\$this->getMockFactory()->getModel('lead'), \$this->getMockTranslator());

        \$mailer = \$this->getMockMailer(\$this->contacts[4]);
        \$event  = new EmailSendEvent(\$mailer);
        \$subscriber->onEmailDisplay(\$event);

        \$tokens = \$event->getTokens();
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=firstname}', \$tokens);
        \$this->assertArrayHasKey('{ownerfield=lastname}', \$tokens);

        \$this->assertEquals('', \$tokens['{ownerfield=email}']);
        \$this->assertEquals('', \$tokens['{ownerfield=firstname}']);
        \$this->assertEquals('', \$tokens['{ownerfield=lastname}']);
    }

    /**
     * @param bool  \$mailIsOwner
     * @param array \$parameterMap
     *
     * @return MauticFactory|\\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockFactory(\$mailIsOwner = true, \$parameterMap = [])
    {
        \$mockLeadRepository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mockLeadRepository->method('getLeadOwner')
            ->will(
                \$this->returnValueMap(
                    [
                        [1, ['id' => 1, 'email' => 'owner1@owner.com', 'first_name' => '', 'last_name' => '', 'signature' => 'owner 1']],
                        [2, ['id' => 2, 'email' => 'owner2@owner.com', 'first_name' => '', 'last_name' => '', 'signature' => 'owner 2']],
                        [3, ['id' => 3, 'email' => 'owner3@owner.com', 'first_name' => 'John', 'last_name' => 'S&#39;mith', 'signature' => 'owner 2']],
                    ]
                )
            );

        \$mockLeadModel = \$this->getMockBuilder(LeadModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mockLeadModel->method('getRepository')
            ->willReturn(\$mockLeadRepository);

        /** @var MauticFactory|\\PHPUnit_Framework_MockObject_MockObject \$mockFactory */
        \$mockFactory = \$this->getMockBuilder(MauticFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$parameterMap = array_merge(
            [
                ['mailer_return_path', false, null],
                ['mailer_spool_type', false, 'memory'],
                ['mailer_is_owner', false, \$mailIsOwner],
            ],
            \$parameterMap
        );

        \$mockFactory->method('getParameter')
            ->will(
                \$this->returnValueMap(\$parameterMap)
            );
        \$mockFactory->method('getModel')
            ->will(
                \$this->returnValueMap(
                    [
                        ['lead', \$mockLeadModel],
                    ]
                )
            );

        \$mockLogger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$mockFactory->method('getLogger')
            ->willReturn(\$mockLogger);

        \$mockMailboxHelper = \$this->getMockBuilder(Mailbox::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$mockMailboxHelper->method('isConfigured')
            ->willReturn(false);

        \$mockFactory->method('getHelper')
            ->will(
                \$this->returnValueMap(
                    [
                        ['mailbox', \$mockMailboxHelper],
                    ]
                )
            );

        return \$mockFactory;
    }

    protected function getMockMailer(array \$lead)
    {
        \$parameterMap = [
            ['mailer_custom_headers', [], ['X-Mautic-Test' => 'test', 'X-Mautic-Test2' => 'test']],
        ];
        /** @var MauticFactory \$mockFactory */
        \$mockFactory = \$this->getMockFactory(true, \$parameterMap);

        \$transport   = new SmtpTransport();
        \$swiftMailer = new \\Swift_Mailer(\$transport);
        \$mailer      = new MailHelper(\$mockFactory, \$swiftMailer, ['nobody@nowhere.com' => 'No Body']);
        \$mailer->setLead(\$lead);

        return \$mailer;
    }

    /**
     * @return Translator|\\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockTranslator()
    {
        /** @var Translator|\\PHPUnit_Framework_MockObject_MockObject \$translator */
        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$translator->expects(\$this->any())
            ->method('hasId')
            ->will(\$this->returnValue(false));

        return \$translator;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/OwnerSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/OwnerSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/OwnerSubscriberTest.php");
    }
}
