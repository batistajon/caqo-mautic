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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Organizer/MailboxContainerTest.php */
class __TwigTemplate_fd222fec7403041582a4a8ee1b46469e18e61142357a338f377b20c7beb74b70 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Organizer;

use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;
use Mautic\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxContainer;

class MailboxContainerTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$config = [
        'imap_path' => 'path',
        'user'      => 'user',
        'host'      => 'host',
        'folder'    => 'folder',
    ];

    /**
     * @testdox Container's path should be config's path for services that don't have access
     *          to the config but need to set the path
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getPath()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxContainer::getPath()
     */
    public function testPathMatches()
    {
        \$configAccessor   = new ConfigAccessor(\$this->config);
        \$mailboxContainer = new MailboxContainer(\$configAccessor);

        \$this->assertEquals(\$configAccessor->getPath(), \$mailboxContainer->getPath());
    }

    /**
     * @testdox Criteria should be returned correctly
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxContainer::addCriteria()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxContainer::getCriteria()
     */
    public function testCriteriaIsSetAsExpected()
    {
        \$configAccessor   = new ConfigAccessor(\$this->config);
        \$mailboxContainer = new MailboxContainer(\$configAccessor);

        \$criteria = [
            Mailbox::CRITERIA_ALL => [
                'mailbox1',
                'mailbox2',
            ],
            Mailbox::CRITERIA_UNANSWERED => [
                'mailbox2',
            ],
        ];

        \$mailboxContainer->addCriteria(Mailbox::CRITERIA_ALL, 'mailbox1');
        \$mailboxContainer->addCriteria(Mailbox::CRITERIA_ALL, 'mailbox2');
        \$mailboxContainer->addCriteria(Mailbox::CRITERIA_UNANSWERED, 'mailbox2');

        \$this->assertEquals(\$criteria, \$mailboxContainer->getCriteria());
    }

    /**
     * @testdox Keep as unseen flag should be correctly returned when set
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxContainer::keepAsUnseen()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxContainer::shouldMarkAsSeen()
     */
    public function testUnseenFlagIsReturnedAsExpected()
    {
        \$configAccessor   = new ConfigAccessor(\$this->config);
        \$mailboxContainer = new MailboxContainer(\$configAccessor);

        \$mailboxContainer->keepAsUnseen();

        \$this->assertFalse(\$mailboxContainer->shouldMarkAsSeen());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Organizer/MailboxContainerTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Organizer/MailboxContainerTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Organizer/MailboxContainerTest.php");
    }
}
