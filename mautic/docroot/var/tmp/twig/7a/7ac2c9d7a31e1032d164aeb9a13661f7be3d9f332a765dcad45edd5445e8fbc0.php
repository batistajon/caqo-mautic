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

/* @bundles/CoreBundle/EventListener/CommonStatsSubscriber.php */
class __TwigTemplate_fc46079e70b95abab4716c5af66f4e632145a414888f34fd9fd9bb5a4dd8ad84 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Event\\StatsEvent;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

abstract class CommonStatsSubscriber implements EventSubscriberInterface
{
    /**
     * @var CommonRepository[]
     */
    protected \$repositories = [];

    /**
     * @var null
     */
    protected \$selects;

    /**
     * @var array
     */
    protected \$permissions = [];

    /**
     * @var CorePermissions
     */
    protected \$security;

    /**
     * @var EntityManager
     */
    protected \$entityManager;

    public function __construct(
        CorePermissions \$security,
        EntityManager \$entityManager
    ) {
        \$this->security      = \$security;
        \$this->entityManager = \$entityManager;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::LIST_STATS => ['onStatsFetch', 0],
        ];
    }

    public function onStatsFetch(StatsEvent \$event)
    {
        /** @var CommonRepository \$repository */
        foreach (\$this->repositories as \$repository) {
            \$table = \$repository->getTableName();

            if (!\$event->isLookingForTable(\$table, \$repository)) {
                continue;
            }

            \$permissions  = (isset(\$this->permissions[\$table])) ? \$this->permissions[\$table] : [];
            \$allowedJoins = [];

            foreach (\$permissions as \$tableAlias => \$permBase) {
                // It's an admin, don't check any further
                if ('admin' === \$permBase && \$this->security->isAdmin()) {
                    continue;
                }

                // This user can view everything from this entity, don't check any furher
                if (\$this->security->checkPermissionExists(\$permBase.':view') && \$this->security->isGranted(\$permBase.':view')) {
                    continue;
                }

                // This user can view own entities, limit the search
                if (\$this->security->checkPermissionExists(\$permBase.':viewother') && \$this->security->isGranted(\$permBase.':viewother')
                ) {
                    \$userId = \$event->getUser()->getId();
                    \$where  = [
                        'internal' => true,
                        'expr'     => 'formula',
                    ];

                    // In case the table alias is defined as an association such as stat.email
                    \$aliasParts = explode('.', \$tableAlias);
                    \$tableAlias = array_pop(\$aliasParts);

                    if ('lead:leads' === \$permBase) {
                        // Acknowledge owner then created_by
                        \$where['value'] = \"IF (\$tableAlias.owner_id IS NOT NULL, \$tableAlias.owner_id, \$tableAlias.created_by) = \$userId\";
                    } else {
                        \$where['value'] = \"\$tableAlias.created_by = \$userId\";
                    }
                    \$event->addWhere(\$where);

                    \$allowedJoins[] = \$tableAlias;
                    continue;
                }

                throw new AccessDeniedException(sprintf('You do not have the view permission to load data from the %s table', \$tableAlias));
            }

            \$select = (isset(\$this->selects[\$table])) ? \$this->selects[\$table] : null;
            \$event->setSelect(\$select)->setRepository(\$repository, \$allowedJoins);
        }
    }

    /**
     * Restrict stats based on contact permissions.
     *
     * @return \$this
     */
    protected function addContactRestrictedRepositories(array \$repoNames)
    {
        return \$this->addRestrictedRepostories(\$repoNames, ['lead' => 'lead:leads']);
    }

    protected function addRestrictedRepostories(array \$repoNames, array \$permissions)
    {
        foreach (\$repoNames as \$repoName) {
            \$repo                      = \$this->entityManager->getRepository(\$repoName);
            \$this->repositories[]      = \$repo;
            \$table                     = \$repo->getTableName();
            \$this->permissions[\$table] = \$permissions;
        }

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/CommonStatsSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/CommonStatsSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/CommonStatsSubscriber.php");
    }
}
