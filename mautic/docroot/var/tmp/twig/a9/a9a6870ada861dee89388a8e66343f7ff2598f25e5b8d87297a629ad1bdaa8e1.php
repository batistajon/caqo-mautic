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

/* @bundles/LeadBundle/Event/ChannelSubscriptionChange.php */
class __TwigTemplate_cd872da663dfafcb6e465bf59df8ae79e427c4e50719ae0334c13dfb85838ce7 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

class ChannelSubscriptionChange extends Event
{
    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var string
     */
    private \$channel;

    /**
     * @var string
     */
    private \$oldStatus;

    /**
     * @var string
     */
    private \$newStatus;

    /**
     * ContactStatusChange constructor.
     *
     * @param \$channel
     * @param \$oldStatus
     * @param \$newStatus
     */
    public function __construct(Lead \$lead, \$channel, \$oldStatus, \$newStatus)
    {
        \$this->lead      = \$lead;
        \$this->channel   = \$channel;
        \$this->oldStatus = \$oldStatus;
        \$this->newStatus = \$newStatus;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @return int
     */
    public function getOldStatus()
    {
        return \$this->oldStatus;
    }

    /**
     * @return string
     */
    public function getOldStatusVerb()
    {
        return \$this->getDncReasonVerb(\$this->oldStatus);
    }

    /**
     * @return int
     */
    public function getNewStatus()
    {
        return \$this->newStatus;
    }

    /**
     * @return string
     */
    public function getNewStatusVerb()
    {
        return \$this->getDncReasonVerb(\$this->newStatus);
    }

    /**
     * @param \$reason
     *
     * @return string
     */
    private function getDncReasonVerb(\$reason)
    {
        // use true matching or else 'foobar' == DoNotContact::IS_CONTACTABLE
        switch (true) {
            case DoNotContact::IS_CONTACTABLE === \$reason:
                return 'contactable';
            case DoNotContact::BOUNCED === \$reason:
                return 'bounced';
            case DoNotContact::MANUAL === \$reason:
                return 'manual';
            default:
                return 'unsubscribed';
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ChannelSubscriptionChange.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ChannelSubscriptionChange.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/ChannelSubscriptionChange.php");
    }
}
