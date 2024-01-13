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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php */
class __TwigTemplate_d98b64d44be3507c727f235b814e3d0d274c2b41d81809f289d2f943e6c77221 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper;

use Doctrine\\DBAL\\Connection;

class UserHelper
{
    /**
     * @var Connection
     */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    public function getAdminUsers(): array
    {
        \$qb      = \$this->connection->createQueryBuilder();
        \$results = \$qb->select('u.id')
            ->from(MAUTIC_TABLE_PREFIX.'users', 'u')
            ->join('u', MAUTIC_TABLE_PREFIX.'roles', 'r', 'r.id = u.role_id')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('r.is_published', 1),
                    \$qb->expr()->eq('r.is_admin', 1),
                    \$qb->expr()->eq('u.is_published', 1)
                )
            )
            ->execute()->fetchAll();

        \$admins = [];
        foreach (\$results as \$result) {
            \$admins[] = (int) \$result['id'];
        }

        return \$admins;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php");
    }
}
