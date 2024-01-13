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

/* @bundles/UserBundle/Entity/PermissionRepository.php */
class __TwigTemplate_78b8053d2d0a6f4368b3db6aa8b3844e54919b8a1480315d15d4fa62d2352264 extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Doctrine\\ORM\\Query;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * PermissionRepository.
 */
class PermissionRepository extends CommonRepository
{
    /**
     * Delete all permissions for a specific role.
     */
    public function purgeRolePermissions(Role \$role)
    {
        \$query = \$this
            ->createQueryBuilder('p')
            ->delete('MauticUserBundle:Permission', 'p')
            ->where('p.role = :role')
            ->setParameter(':role', \$role)
            ->getQuery();
        \$query->execute();
    }

    /**
     * Retrieves array of permissions for a set role.  If \$forForm, then the array will contain.
     *
     * @param bool \$forForm
     *
     * @return array
     */
    public function getPermissionsByRole(Role \$role, \$forForm = false)
    {
        \$results = \$this
            ->createQueryBuilder('p')
            ->where('p.role = :role')
            ->orderBy('p.bundle')
            ->setParameter(':role', \$role)
            ->getQuery()
            ->useResultCache(false)
            ->getResult(Query::HYDRATE_ARRAY);

        //rearrange the array to meet needs
        \$permissions = [];
        foreach (\$results as \$r) {
            if (\$forForm) {
                \$permissions[\$r['bundle']][\$r['id']] = [
                    'name'    => \$r['name'],
                    'bitwise' => \$r['bitwise'],
                ];
            } else {
                \$permissions[\$r['bundle']][\$r['name']] = \$r['bitwise'];
            }
        }

        return \$permissions;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/PermissionRepository.php";
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
        return new Source("", "@bundles/UserBundle/Entity/PermissionRepository.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Entity/PermissionRepository.php");
    }
}
