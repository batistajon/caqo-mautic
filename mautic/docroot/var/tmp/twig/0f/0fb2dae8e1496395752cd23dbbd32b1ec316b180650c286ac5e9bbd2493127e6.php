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

/* @bundles/IntegrationsBundle/EventListener/EmailSubscriber.php */
class __TwigTemplate_136f4516126e664e9d2fe6a30bf8c83e8cd7036322f62b4fef13858a2dff210f extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\EventListener;

use Doctrine\\ORM\\EntityNotFoundException;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailBuilderEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\IntegrationsBundle\\DTO\\IntegrationObjectToken as Token;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository;
use Mautic\\IntegrationsBundle\\Event\\MappedIntegrationObjectTokenEvent;
use Mautic\\IntegrationsBundle\\Helper\\TokenParser;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * This class subscribes to events related to building and providing
 * tokens for emails, particularly the IntegrationObjectToken.
 *
 * Class EmailSubscriber
 */
class EmailSubscriber implements EventSubscriberInterface
{
    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    /**
     * @var EventDispatcherInterface
     */
    protected \$eventDispatcher;

    /**
     * @var TokenParser
     */
    protected \$tokenParser;

    /**
     * @var ObjectMappingRepository
     */
    protected \$objectMappingRepository;

    /**
     * @var IntegrationHelper
     */
    protected \$integrationHelper;

    public function __construct(
        TranslatorInterface \$translator,
        EventDispatcherInterface \$eventDispatcher,
        TokenParser \$tokenParser,
        ObjectMappingRepository \$objectMappingRepository,
        IntegrationHelper \$integrationHelper
    ) {
        \$this->translator              = \$translator;
        \$this->eventDispatcher         = \$eventDispatcher;
        \$this->tokenParser             = \$tokenParser;
        \$this->objectMappingRepository = \$objectMappingRepository;
        \$this->integrationHelper       = \$integrationHelper;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::EMAIL_ON_BUILD   => ['onEmailBuild', 0],
            EmailEvents::EMAIL_ON_SEND    => ['decodeTokens', 0],
            EmailEvents::EMAIL_ON_DISPLAY => ['decodeTokens', 0],
        ];
    }

    public function onEmailBuild(EmailBuilderEvent \$event): void
    {
        \$tokens = [];

        \$mappedObjectTokens = new MappedIntegrationObjectTokenEvent();
        \$this->eventDispatcher->dispatch(
            IntegrationEvents::INTEGRATION_OBJECT_TOKEN_EVENT,
            \$mappedObjectTokens
        );

        foreach (\$mappedObjectTokens->getTokens() as \$integration => \$t) {
            foreach (\$t as \$integrationObject => \$objectData) {
                \$token = \$this->tokenParser->buildTokenWithDefaultOptions(
                    \$integrationObject,
                    \$integration,
                    \$objectData['default'],
                    \$objectData['link_text'],
                    \$objectData['base_url']
                );

                \$tokens[\$token] = \$objectData['token_title'];
            }
        }

        if (\$event->tokensRequested(array_keys(\$tokens))) {
            \$event->addTokens(
                \$event->filterTokens(\$tokens)
            );
        }
    }

    public function decodeTokens(EmailSendEvent \$event): void
    {
        \$tokens = \$this->tokenParser->findTokens(\$event->getContent());

        if (0 === \$tokens->count()) {
            return;
        }

        \$tokens->map(function (Token \$token) use (\$event): void {
            try {
                \$integrationObject = \$this->objectMappingRepository->getIntegrationObject(
                    \$token->getIntegration(),
                    'lead',
                    \$event->getLead()['id'],
                    \$token->getObjectName()
                );

                \$url = \$token->getBaseURL().'/'.\$integrationObject['integration_object_id'];
                \$link = \"<a href=\\\"{\$url}\\\" >\".\$token->getLinkText().'</a>';
                \$event->addToken(\$token->getToken(), \$link);
            } catch (EntityNotFoundException \$e) {
                return;
            }
        });
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/EventListener/EmailSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/EmailSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/EventListener/EmailSubscriber.php");
    }
}
