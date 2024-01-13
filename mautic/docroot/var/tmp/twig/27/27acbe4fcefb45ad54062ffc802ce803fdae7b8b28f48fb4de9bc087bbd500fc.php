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

/* @bundles/LeadBundle/EventListener/EmailSubscriber.php */
class __TwigTemplate_8f40874c5202e0fbe91c02838153bd6db9b5fef2cacaba749afdb2923bbb6171 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Helper\\BuilderTokenHelperFactory;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailBuilderEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\LeadBundle\\Helper\\TokenHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class EmailSubscriber implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private static \$contactFieldRegex = '{contactfield=(.*?)}';

    /**
     * @var BuilderTokenHelperFactory
     */
    private \$builderTokenHelperFactory;

    public function __construct(BuilderTokenHelperFactory \$builderTokenHelperFactory)
    {
        \$this->builderTokenHelperFactory = \$builderTokenHelperFactory;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::EMAIL_ON_BUILD                     => ['onEmailBuild', 0],
            EmailEvents::EMAIL_ON_SEND                      => ['onEmailGenerate', 0],
            EmailEvents::EMAIL_ON_DISPLAY                   => ['onEmailDisplay', 0],
            EmailEvents::ON_EMAIL_ADDRESS_TOKEN_REPLACEMENT => ['onEmailAddressReplacement', 0],
        ];
    }

    public function onEmailBuild(EmailBuilderEvent \$event)
    {
        \$tokenHelper = \$this->builderTokenHelperFactory->getBuilderTokenHelper('lead.field', 'lead:fields', 'MauticLeadBundle');
        // the permissions are for viewing contact data, not for managing contact fields
        \$tokenHelper->setPermissionSet(['lead:leads:viewown', 'lead:leads:viewother']);

        if (\$event->tokensRequested(self::\$contactFieldRegex)) {
            \$event->addTokensFromHelper(\$tokenHelper, self::\$contactFieldRegex, 'label', 'alias');
        }
    }

    public function onEmailDisplay(EmailSendEvent \$event)
    {
        \$this->onEmailGenerate(\$event);
    }

    public function onEmailGenerate(EmailSendEvent \$event)
    {
        // Combine all possible content to find tokens across them
        \$content = \$event->getSubject();
        \$content .= \$event->getContent();
        \$content .= \$event->getPlainText();
        \$content .= implode(' ', \$event->getTextHeaders());

        \$lead = \$event->getLead();

        \$tokenList = TokenHelper::findLeadTokens(\$content, \$lead);
        if (count(\$tokenList)) {
            \$event->addTokens(\$tokenList);
            unset(\$tokenList);
        }
    }

    public function onEmailAddressReplacement(TokenReplacementEvent \$event): void
    {
        \$event->setContent(TokenHelper::findLeadTokens(\$event->getContent(), \$event->getLead()->getProfileFields(), true));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/EmailSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/EmailSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/EmailSubscriber.php");
    }
}
