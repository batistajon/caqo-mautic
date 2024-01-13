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

/* @bundles/UserBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_f302f0727c51a218ddc46a564d58157a991affcd5ee0821ca21241c14ce6a0fa extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\UserBundle\\Model\\RoleModel;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var UserModel
     */
    private \$userModel;

    /**
     * @var RoleModel
     */
    private \$userRoleModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        UserModel \$userModel,
        RoleModel \$roleModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->userModel     = \$userModel;
        \$this->userRoleModel = \$roleModel;
        \$this->security      = \$security;
        \$this->templating    = \$templating;
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

        if (\$this->security->isGranted('user:users:view')) {
            \$users = \$this->userModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);

            if (count(\$users) > 0) {
                \$userResults = [];
                \$canEdit     = \$this->security->isGranted('user:users:edit');
                foreach (\$users as \$user) {
                    \$userResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticUserBundle:SubscribedEvents\\Search:global_user.html.php',
                        [
                            'user'    => \$user,
                            'canEdit' => \$canEdit,
                        ]
                    )->getContent();
                }
                if (count(\$users) > 5) {
                    \$userResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticUserBundle:SubscribedEvents\\Search:global_user.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$users) - 5),
                        ]
                    )->getContent();
                }
                \$userResults['count'] = count(\$users);
                \$event->addResults('mautic.user.users', \$userResults);
            }
        }

        if (\$this->security->isGranted('user:roles:view')) {
            \$roles = \$this->userRoleModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            if (count(\$roles)) {
                \$roleResults = [];
                \$canEdit     = \$this->security->isGranted('user:roles:edit');

                foreach (\$roles as \$role) {
                    \$roleResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticUserBundle:SubscribedEvents\\Search:global_role.html.php',
                        [
                            'role'    => \$role,
                            'canEdit' => \$canEdit,
                        ]
                    )->getContent();
                }
                if (count(\$roles) > 5) {
                    \$roleResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticUserBundle:SubscribedEvents\\Search:global_role.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$roles) - 5),
                        ]
                    )->getContent();
                }
                \$roleResults['count'] = count(\$roles);
                \$event->addResults('mautic.user.roles', \$roleResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted('user:users:view')) {
            \$event->addCommands(
                'mautic.user.users',
                \$this->userModel->getCommandList()
            );
        }
        if (\$this->security->isGranted('user:roles:view')) {
            \$event->addCommands(
                'mautic.user.roles',
                \$this->userRoleModel->getCommandList()
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
        return "@bundles/UserBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/EventListener/SearchSubscriber.php");
    }
}