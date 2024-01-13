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

/* @bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php */
class __TwigTemplate_e4b50de92379e5f58f8b1cbf77b39c717a902bb3085770807a27ab4d91644ff9 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Organizer;

use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;

class MailboxOrganizer
{
    /**
     * @var ParseEmailEvent
     */
    protected \$event;

    /**
     * @var array
     */
    protected \$mailboxes;

    /**
     * @var MailboxContainer[]
     */
    protected \$containers = [];

    /**
     * MailboxOrganizer constructor.
     */
    public function __construct(ParseEmailEvent \$event, array \$mailboxes)
    {
        \$this->event     = \$event;
        \$this->mailboxes = \$mailboxes;
    }

    /**
     * Organize the mailboxes into containers by IMAP connection and criteria.
     */
    public function organize()
    {
        \$criteriaRequested      = \$this->event->getCriteriaRequests();
        \$markAsSeenInstructions = \$this->event->getMarkAsSeenInstructions();

        /**
         * @var string
         * @var ConfigAccessor \$config
         */
        foreach (\$this->mailboxes as \$name => \$config) {
            // Switch mailbox to get information
            if (!\$config->isConfigured()) {
                // Not configured so continue
                continue;
            }

            \$criteria   = isset(\$criteriaRequested[\$name]) ? \$criteriaRequested[\$name] : Mailbox::CRITERIA_UNSEEN;
            \$markAsSeen = isset(\$markAsSeenInstructions[\$name]) ? \$markAsSeenInstructions[\$name] : true;

            \$container = \$this->getContainer(\$config);
            if (!\$markAsSeen) {
                // Keep all the messages fetched from this folder as unseen
                \$container->keepAsUnseen();
            }

            \$container->addCriteria(\$criteria, \$name);
        }
    }

    /**
     * @return MailboxContainer[]
     */
    public function getContainers()
    {
        return \$this->containers;
    }

    /**
     * @return MailboxContainer
     */
    protected function getContainer(ConfigAccessor \$config)
    {
        \$key = \$config->getKey();
        if (!isset(\$this->containers[\$key])) {
            \$this->containers[\$key] = new MailboxContainer(\$config);
        }

        return \$this->containers[\$key];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php");
    }
}
