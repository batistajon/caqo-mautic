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

/* @bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php */
class __TwigTemplate_35aac99704ed7ec0766dadb19213055d0d5709ab09f3af886fa0e911b7764710 extends Template
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

namespace Mautic\\UserBundle\\DataFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Model\\RoleModel;

class LoadRoleData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getGroups(): array
    {
        return ['group_mautic_install_data'];
    }

    /**
     * @var RoleModel
     */
    private \$roleModel;

    /**
     * {@inheritdoc}
     */
    public function __construct(RoleModel \$roleModel)
    {
        \$this->roleModel = \$roleModel;
    }

    public function load(ObjectManager \$manager)
    {
        if (!\$this->hasReference('admin-role')) {
            \$role = new Role();
            \$role->setName('Administrators');
            \$role->setDescription('Has access to everything.');
            \$role->setIsAdmin(1);
            \$manager->persist(\$role);
            \$manager->flush();

            \$this->addReference('admin-role', \$role);
        }

        \$role = new Role();
        \$role->setName('Sales Team');
        \$role->setDescription('Has access to sales');
        \$role->setIsAdmin(0);

        \$permissions = [
            'user:profile' => ['editname'],
            'lead:leads'   => ['full'],
        ];
        \$this->roleModel->setRolePermissions(\$role, \$permissions);

        \$manager->persist(\$role);
        \$manager->flush();

        \$this->addReference('sales-role', \$role);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php";
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
        return new Source("", "@bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php");
    }
}
