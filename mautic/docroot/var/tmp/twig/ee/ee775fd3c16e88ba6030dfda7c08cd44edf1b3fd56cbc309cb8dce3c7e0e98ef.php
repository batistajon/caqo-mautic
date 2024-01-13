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

/* @bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php */
class __TwigTemplate_a51eb19a51d441cdccf9041adfb15ccd7e865519de55152c930e7afdc8e3e0ef extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\FeedbackLoopNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop\\Parser;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FeedbackLoop implements ProcessorInterface
{
    /**
     * @var ContactFinder
     */
    private \$contactFinder;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var Message
     */
    private \$message;

    /**
     * @var DoNotContactModel
     */
    private \$doNotContact;

    /**
     * FeedbackLoop constructor.
     */
    public function __construct(
        ContactFinder \$contactFinder,
        TranslatorInterface \$translator,
        LoggerInterface \$logger,
        DoNotContactModel \$doNotContact
    ) {
        \$this->contactFinder = \$contactFinder;
        \$this->translator    = \$translator;
        \$this->logger        = \$logger;
        \$this->doNotContact  = \$doNotContact;
    }

    /**
     * @return bool
     */
    public function process(Message \$message)
    {
        \$this->message = \$message;
        \$this->logger->debug('MONITORED EMAIL: Processing message ID '.\$this->message->id.' for a feedback loop report');

        if (!\$this->isApplicable()) {
            return false;
        }

        try {
            \$parser = new Parser(\$this->message);
            if (!\$contactEmail = \$parser->parse()) {
                // A contact email was not found in the FBL report
                return false;
            }
        } catch (FeedbackLoopNotFound \$exception) {
            return false;
        }

        \$this->logger->debug('MONITORED EMAIL: Found '.\$contactEmail.' in feedback loop report');

        \$searchResult = \$this->contactFinder->find(\$contactEmail);
        if (!\$contacts = \$searchResult->getContacts()) {
            return false;
        }

        \$comments = \$this->translator->trans('mautic.email.bounce.reason.spam');
        foreach (\$contacts as \$contact) {
            \$this->doNotContact->addDncForContact(\$contact->getId(), 'email', DoNotContact::UNSUBSCRIBED, \$comments);
        }

        return true;
    }

    /**
     * @return int
     */
    protected function isApplicable()
    {
        return preg_match('/.*feedback-type: abuse.*/is', \$this->message->fblReport);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php");
    }
}
