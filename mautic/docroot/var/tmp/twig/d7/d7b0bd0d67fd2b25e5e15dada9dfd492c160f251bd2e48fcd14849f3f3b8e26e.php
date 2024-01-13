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

/* @bundles/EmailBundle/Model/TransportCallback.php */
class __TwigTemplate_a650d911b6575715ce4b81475e7efc1a595d5a2f3b1c5a0db2ed69c0eb124baf extends Template
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

namespace Mautic\\EmailBundle\\Model;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Model\\DoNotContact;

class TransportCallback
{
    /**
     * @var DoNotContact
     */
    private \$dncModel;

    /**
     * @var ContactFinder
     */
    private \$finder;

    /**
     * @var StatRepository
     */
    private \$statRepository;

    /**
     * TransportCallback constructor.
     */
    public function __construct(DoNotContact \$dncModel, ContactFinder \$finder, StatRepository \$statRepository)
    {
        \$this->dncModel       = \$dncModel;
        \$this->finder         = \$finder;
        \$this->statRepository = \$statRepository;
    }

    /**
     * @param string \$hashId
     * @param string \$comments
     * @param int    \$dncReason
     */
    public function addFailureByHashId(\$hashId, \$comments, \$dncReason = DNC::BOUNCED)
    {
        \$result = \$this->finder->findByHash(\$hashId);

        if (\$contacts = \$result->getContacts()) {
            \$stat = \$result->getStat();
            \$this->updateStatDetails(\$stat, \$comments, \$dncReason);

            \$email   = \$stat->getEmail();
            \$channel = (\$email) ? ['email' => \$email->getId()] : 'email';
            foreach (\$contacts as \$contact) {
                \$this->dncModel->addDncForContact(\$contact->getId(), \$channel, \$dncReason, \$comments);
            }
        }
    }

    /**
     * @param string   \$address
     * @param string   \$comments
     * @param int      \$dncReason
     * @param int|null \$channelId
     */
    public function addFailureByAddress(\$address, \$comments, \$dncReason = DNC::BOUNCED, \$channelId = null)
    {
        \$result = \$this->finder->findByAddress(\$address);

        if (\$contacts = \$result->getContacts()) {
            foreach (\$contacts as \$contact) {
                \$channel = (\$channelId) ? ['email' => \$channelId] : 'email';
                \$this->dncModel->addDncForContact(\$contact->getId(), \$channel, \$dncReason, \$comments);
            }
        }
    }

    /**
     * @param          \$id
     * @param          \$comments
     * @param int      \$dncReason
     * @param int|null \$channelId
     */
    public function addFailureByContactId(\$id, \$comments, \$dncReason = DNC::BOUNCED, \$channelId = null)
    {
        \$channel = (\$channelId) ? ['email' => \$channelId] : 'email';
        \$this->dncModel->addDncForContact(\$id, \$channel, \$dncReason, \$comments);
    }

    /**
     * @param \$comments
     */
    private function updateStatDetails(Stat \$stat, \$comments, \$dncReason)
    {
        if (DNC::BOUNCED === \$dncReason) {
            \$stat->setIsFailed(true);
        }

        \$openDetails = \$stat->getOpenDetails();
        if (!isset(\$openDetails['bounces'])) {
            \$openDetails['bounces'] = [];
        }
        \$dtHelper                 = new DateTimeHelper();
        \$openDetails['bounces'][] = [
            'datetime' => \$dtHelper->toUtcString(),
            'reason'   => \$comments,
        ];
        \$stat->setOpenDetails(\$openDetails);
        \$this->statRepository->saveEntity(\$stat);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Model/TransportCallback.php";
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
        return new Source("", "@bundles/EmailBundle/Model/TransportCallback.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Model/TransportCallback.php");
    }
}
