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

/* @bundles/EmailBundle/Tests/MonitoredEmail/MailboxTest.php */
class __TwigTemplate_20b06d221f21bfbad37313b51c1757db0ef58bb0d55688c4808d090ce95c1597 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;

class MailboxTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructWithDefaultConfig()
    {
        \$expected = [
            'host'            => '',
            'port'            => '',
            'password'        => '',
            'user'            => '',
            'encryption'      => '',
            'use_attachments' => false,
        ];

        \$parametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$pathsHelper = \$this->getMockBuilder(PathsHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mailbox = new \\Mautic\\EmailBundle\\MonitoredEmail\\Mailbox(\$parametersHelper, \$pathsHelper);

        \$this->assertEquals(\$expected, \$mailbox->getMailboxSettings());
    }

    public function testSettingsForMonitoredEmailWithoutOverride()
    {
        \$config = [
            'general' => [
                'address'         => 'foo@bar.com',
                'host'            => 'imap.bar.com',
                'port'            => '993',
                'encryption'      => '/ssl',
                'user'            => 'foo@bar.com',
                'password'        => 'topsecret',
                'use_attachments' => true,
            ],
            'EmailBundle_bounces' => [
                'address'           => null,
                'host'              => null,
                'port'              => '993',
                'encryption'        => '/ssl',
                'user'              => null,
                'password'          => null,
                'override_settings' => 0,
                'folder'            => 'Bounces',
            ],
        ];

        \$parametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$parametersHelper->expects(\$this->once())
            ->method('get')
            ->will(\$this->returnValue(\$config));

        \$pathsHelper = \$this->getMockBuilder(PathsHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$pathsHelper->expects(\$this->once())
            ->method('getSystemPath')
            ->will(\$this->returnValue(__DIR__.'/../../../../cache/'));

        \$mailbox = new \\Mautic\\EmailBundle\\MonitoredEmail\\Mailbox(\$parametersHelper, \$pathsHelper);

        \$settings = \$mailbox->getMailboxSettings('EmailBundle', 'bounces');

        \$this->assertArrayHasKey('folder', \$settings);
        \$this->assertEquals('Bounces', \$settings['folder']);
        \$this->assertEquals('foo@bar.com', \$settings['address']);
    }

    public function testSettingsForMonitoredEmailWithOverride()
    {
        \$config = [
            'general' => [
                'address'         => 'foo@bar.com',
                'host'            => 'imap.bar.com',
                'port'            => '993',
                'encryption'      => '/ssl',
                'user'            => 'foo@bar.com',
                'password'        => 'topsecret',
                'use_attachments' => true,
            ],
            'EmailBundle_bounces' => [
                'address'           => 'bar@foo.com',
                'host'              => 'imap.foo.com',
                'port'              => '993',
                'encryption'        => '/ssl',
                'user'              => 'bar@foo.com',
                'password'          => 'topsecret',
                'override_settings' => true,
                'folder'            => 'INBOX',
            ],
        ];

        \$parametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$parametersHelper->expects(\$this->once())
            ->method('get')
            ->will(\$this->returnValue(\$config));

        \$pathsHelper = \$this->getMockBuilder(PathsHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$pathsHelper->expects(\$this->once())
            ->method('getSystemPath')
            ->will(\$this->returnValue(__DIR__.'/../../../../cache/'));

        \$mailbox = new \\Mautic\\EmailBundle\\MonitoredEmail\\Mailbox(\$parametersHelper, \$pathsHelper);

        \$settings = \$mailbox->getMailboxSettings('EmailBundle', 'bounces');

        \$this->assertArrayHasKey('folder', \$settings);
        \$this->assertEquals('INBOX', \$settings['folder']);
        \$this->assertEquals('bar@foo.com', \$settings['address']);
    }

    public function testUseAttachments()
    {
        // Test undefined \$this->settings['use_attachments']
        // will not invoke undefined index error or mkdir error
        \$config = [
            'general' => [
                'address'         => 'foo@bar.com',
                'host'            => 'imap.bar.com',
                'port'            => '993',
                'encryption'      => '/ssl',
                'user'            => 'foo@bar.com',
                'password'        => 'topsecret',
            ],
        ];

        \$parametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$parametersHelper->expects(\$this->once())
            ->method('get')
            ->will(\$this->returnValue(\$config));

        \$pathsHelper = \$this->getMockBuilder(PathsHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        new \\Mautic\\EmailBundle\\MonitoredEmail\\Mailbox(\$parametersHelper, \$pathsHelper);

        // Test \$this->settings['use_attachments'] == true
        // dir creation is not failing
        \$config = [
            'general' => [
                'address'         => 'foo@bar.com',
                'host'            => 'imap.bar.com',
                'port'            => '993',
                'encryption'      => '/ssl',
                'user'            => 'foo@bar.com',
                'password'        => 'topsecret',
                'use_attachments' => true,
            ],
        ];

        \$parametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$parametersHelper->expects(\$this->once())
            ->method('get')
            ->will(\$this->returnValue(\$config));

        \$pathsHelper = \$this->getMockBuilder(PathsHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$pathsHelper->expects(\$this->once())
            ->method('getSystemPath')
            ->with('tmp', true)
            ->will(\$this->returnValue(__DIR__.'/../../../../cache/tmp'));

        new \\Mautic\\EmailBundle\\MonitoredEmail\\Mailbox(\$parametersHelper, \$pathsHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/MailboxTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/MailboxTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/MailboxTest.php");
    }
}
