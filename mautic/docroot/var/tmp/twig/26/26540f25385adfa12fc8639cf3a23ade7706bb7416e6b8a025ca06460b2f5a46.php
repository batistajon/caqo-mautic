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

/* @bundles/EmailBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_4a1544ea1516cfe9349ad176e126717a5de9881b0dc94655db501b3d521918b4 extends Template
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

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var EmailModel
     */
    private \$emailModel;

    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        UserHelper \$userHelper,
        EmailModel \$emailModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->userHelper = \$userHelper;
        \$this->emailModel = \$emailModel;
        \$this->security   = \$security;
        \$this->templating = \$templating;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::GLOBAL_SEARCH      => ['onGlobalSearch', 0],
            CoreEvents::BUILD_COMMAND_LIST => ['onBuildCommandList', 0],
        ];
    }

    public function onGlobalSearch(MauticEvents\\GlobalSearchEvent \$event)
    {
        \$str = \$event->getSearchString();
        if (empty(\$str)) {
            return;
        }

        \$filter      = ['string' => \$str, 'force' => []];
        \$permissions = \$this->security->isGranted(
            ['email:emails:viewown', 'email:emails:viewother'],
            'RETURN_ARRAY'
        );
        if (\$permissions['email:emails:viewown'] || \$permissions['email:emails:viewother']) {
            if (!\$permissions['email:emails:viewother']) {
                \$filter['force'][] = [
                    'column' => 'IDENTITY(e.createdBy)',
                    'expr'   => 'eq',
                    'value'  => \$this->userHelper->getUser()->getId(),
                ];
            }

            \$emails = \$this->emailModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            if (count(\$emails) > 0) {
                \$emailResults = [];

                foreach (\$emails as \$email) {
                    \$emailResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticEmailBundle:SubscribedEvents\\Search:global.html.php',
                        ['email' => \$email]
                    )->getContent();
                }
                if (count(\$emails) > 5) {
                    \$emailResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticEmailBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$emails) - 5),
                        ]
                    )->getContent();
                }
                \$emailResults['count'] = count(\$emails);
                \$event->addResults('mautic.email.emails', \$emailResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted(['email:emails:viewown', 'email:emails:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.email.emails',
                \$this->emailModel->getCommandList()
            );
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
        return "@bundles/EmailBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/SearchSubscriber.php");
    }
}
