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

/* @bundles/AssetBundle/EventListener/BuilderSubscriber.php */
class __TwigTemplate_e5e9aaafbb100c77f6037ceee9ee52da4c1d4cbf6cb2aa75e6b5191444cacc9a extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\Helper\\TokenHelper;
use Mautic\\CoreBundle\\Event\\BuilderEvent;
use Mautic\\CoreBundle\\Helper\\BuilderTokenHelperFactory;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class BuilderSubscriber implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private \$assetToken = '{assetlink=(.*?)}';

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TokenHelper
     */
    private \$tokenHelper;

    /**
     * @var ContactTracker
     */
    private \$contactTracker;

    /**
     * @var BuilderTokenHelperFactory
     */
    private \$builderTokenHelperFactory;

    /**
     * BuilderSubscriber constructor.
     */
    public function __construct(
        CorePermissions \$security,
        TokenHelper \$tokenHelper,
        ContactTracker \$contactTracker,
        BuilderTokenHelperFactory \$builderTokenHelperFactory
    ) {
        \$this->security                  = \$security;
        \$this->tokenHelper               = \$tokenHelper;
        \$this->contactTracker            = \$contactTracker;
        \$this->builderTokenHelperFactory = \$builderTokenHelperFactory;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::EMAIL_ON_BUILD   => ['onBuilderBuild', 0],
            EmailEvents::EMAIL_ON_SEND    => ['onEmailGenerate', 0],
            EmailEvents::EMAIL_ON_DISPLAY => ['onEmailGenerate', 0],
            PageEvents::PAGE_ON_BUILD     => ['onBuilderBuild', 0],
            PageEvents::PAGE_ON_DISPLAY   => ['onPageDisplay', 0],
        ];
    }

    public function onBuilderBuild(BuilderEvent \$event)
    {
        if (\$event->tokensRequested(\$this->assetToken)) {
            \$tokenHelper = \$this->builderTokenHelperFactory->getBuilderTokenHelper('asset');
            \$event->addTokensFromHelper(\$tokenHelper, \$this->assetToken, 'title', 'id', true);
        }
    }

    public function onEmailGenerate(EmailSendEvent \$event)
    {
        \$lead   = \$event->getLead();
        \$leadId = (int) (null !== \$lead ? \$lead['id'] : null);
        \$email  = \$event->getEmail();
        \$tokens = \$this->generateTokensFromContent(\$event, \$leadId, \$event->getSource(), null === \$email ? null : \$email->getId());
        \$event->addTokens(\$tokens);
    }

    public function onPageDisplay(PageDisplayEvent \$event)
    {
        \$page    = \$event->getPage();
        \$lead    = \$this->security->isAnonymous() ? \$this->contactTracker->getContact() : null;
        \$leadId  = \$lead ? \$lead->getId() : null;
        \$tokens  = \$this->generateTokensFromContent(\$event, \$leadId, ['page', \$page->getId()]);
        \$content = \$event->getContent();

        if (!empty(\$tokens)) {
            \$content = str_ireplace(array_keys(\$tokens), \$tokens, \$content);
        }
        \$event->setContent(\$content);
    }

    /**
     * @param PageDisplayEvent|EmailSendEvent \$event
     * @param int                             \$leadId
     * @param array                           \$source
     * @param null                            \$emailId
     *
     * @return array
     */
    private function generateTokensFromContent(\$event, \$leadId, \$source = [], \$emailId = null)
    {
        if (\$event instanceof PageDisplayEvent || (\$event instanceof EmailSendEvent && \$event->shouldAppendClickthrough())) {
            \$clickthrough = [
                'source' => \$source,
                'lead'   => \$leadId ?? false,
                'email'  => \$emailId ?? false,
            ];
        }

        return \$this->tokenHelper->findAssetTokens(\$event->getContent(), array_filter(\$clickthrough ?? []));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/EventListener/BuilderSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/BuilderSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/EventListener/BuilderSubscriber.php");
    }
}
