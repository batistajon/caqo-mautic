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

/* @bundles/EmailBundle/EventListener/TokenSubscriber.php */
class __TwigTemplate_5b32d12279f6fae41483a742a61027cb542e504c1564c2f33e0ed110744c9cf6 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Helper\\PrimaryCompanyHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class TokenSubscriber implements EventSubscriberInterface
{
    use MatchFilterForLeadTrait;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var PrimaryCompanyHelper
     */
    private \$primaryCompanyHelper;

    public function __construct(EventDispatcherInterface \$dispatcher, PrimaryCompanyHelper \$primaryCompanyHelper)
    {
        \$this->dispatcher           = \$dispatcher;
        \$this->primaryCompanyHelper = \$primaryCompanyHelper;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::EMAIL_ON_SEND     => ['decodeTokens', 254],
            EmailEvents::EMAIL_ON_DISPLAY  => ['decodeTokens', 254],
            EmailEvents::TOKEN_REPLACEMENT => ['onTokenReplacement', 254],
        ];
    }

    public function decodeTokens(EmailSendEvent \$event)
    {
        if (\$event->isDynamicContentParsing()) {
            // prevent a loop
            return;
        }

        // Find and replace encoded tokens for trackable URL conversion
        \$content = \$event->getContent();
        \$content = preg_replace('/(%7B)(.*?)(%7D)/i', '{\$2}', \$content, -1, \$count);
        \$event->setContent(\$content);

        if (\$plainText = \$event->getPlainText()) {
            \$plainText = preg_replace('/(%7B)(.*?)(%7D)/i', '{\$2}', \$plainText);
            \$event->setPlainText(\$plainText);
        }

        \$email = \$event->getEmail();
        if (\$dynamicContentAsArray = \$email instanceof Email ? \$email->getDynamicContent() : null) {
            \$lead       = \$event->getLead();
            \$tokens     = \$event->getTokens();
            \$tokenEvent = new TokenReplacementEvent(
                null,
                \$lead,
                [
                    'tokens'         => \$tokens,
                    'lead'           => null,
                    'dynamicContent' => \$dynamicContentAsArray,
                    'idHash'         => \$event->getIdHash(),
                ],
                \$email
            );
            \$this->dispatcher->dispatch(EmailEvents::TOKEN_REPLACEMENT, \$tokenEvent);
            \$event->addTokens(\$tokenEvent->getTokens());
        }
    }

    public function onTokenReplacement(TokenReplacementEvent \$event)
    {
        \$clickthrough = \$event->getClickthrough();

        if (!array_key_exists('dynamicContent', \$clickthrough)) {
            return;
        }

        \$lead      = \$event->getLead();
        \$tokens    = \$clickthrough['tokens'];
        \$tokenData = \$clickthrough['dynamicContent'];

        if (\$lead instanceof Lead) {
            \$lead = \$this->primaryCompanyHelper->getProfileFieldsWithPrimaryCompany(\$lead);
        } else {
            \$lead = \$this->primaryCompanyHelper->mergePrimaryCompanyWithProfileFields(\$lead['id'], \$lead);
        }

        foreach (\$tokenData as \$data) {
            // Default content
            \$filterContent = \$data['content'];

            foreach (\$data['filters'] as \$filter) {
                if (\$this->matchFilterForLead(\$filter['filters'], \$lead)) {
                    \$filterContent = \$filter['content'];
                    break;
                }
            }

            // Replace lead tokens in dynamic content (but no recurrence on dynamic content to avoid infinite loop)
            \$emailSendEvent = new EmailSendEvent(
                null,
                [
                    'content' => \$filterContent,
                    'email'   => \$event->getPassthrough(),
                    'idHash'  => !empty(\$clickthrough['idHash']) ? \$clickthrough['idHash'] : null,
                    'tokens'  => \$tokens,
                    'lead'    => \$lead,
                ],
                true
            );

            \$this->dispatcher->dispatch(EmailEvents::EMAIL_ON_DISPLAY, \$emailSendEvent);
            \$untokenizedContent = \$emailSendEvent->getContent(true);

            \$event->addToken('{dynamiccontent=\"'.\$data['tokenName'].'\"}', \$untokenizedContent);
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
        return "@bundles/EmailBundle/EventListener/TokenSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/TokenSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/TokenSubscriber.php");
    }
}
