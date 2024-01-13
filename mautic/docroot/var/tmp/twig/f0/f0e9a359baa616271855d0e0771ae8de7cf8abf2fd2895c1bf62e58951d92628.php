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

/* @bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php */
class __TwigTemplate_ce427ed7190f9b20b4347ad1a1f31e313fa6a3d203e805243dd5b35ace92abf7 extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;

class MailboxContainer
{
    /**
     * @var ConfigAccessor
     */
    protected \$config;

    /**
     * @var array
     */
    protected \$criteria = [];

    /**
     * @var bool
     */
    protected \$markAsSeen = true;

    /**
     * @var array
     */
    protected \$messages = [];

    /**
     * MailboxAccessor constructor.
     */
    public function __construct(ConfigAccessor \$config)
    {
        \$this->config = \$config;
    }

    /**
     * @param \$criteria
     * @param \$mailbox
     */
    public function addCriteria(\$criteria, \$mailbox)
    {
        if (!isset(\$this->criteria[\$criteria])) {
            \$this->criteria[\$criteria] = [];
        }

        \$this->criteria[\$criteria][] = \$mailbox;
    }

    /**
     * Keep the messages in this mailbox as unseen.
     */
    public function keepAsUnseen()
    {
        \$this->markAsSeen = false;
    }

    /**
     * @return bool
     */
    public function shouldMarkAsSeen()
    {
        return \$this->markAsSeen;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return \$this->config->getPath();
    }

    /**
     * @return array
     */
    public function getCriteria()
    {
        return \$this->criteria;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php");
    }
}
