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

/* @bundles/UserBundle/DataFixtures/ORM/LoadUserData.php */
class __TwigTemplate_7e9f64fab9bfeb1c7b11ec86b4fa87ede70a5027a315a94cbf5e25ffc4447460 extends Template
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
use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getGroups(): array
    {
        return ['group_mautic_install_data'];
    }

    /**
     * @var UserPasswordEncoder
     */
    private \$encoder;

    /**
     * {@inheritdoc}
     */
    public function __construct(UserPasswordEncoder \$encoder)
    {
        \$this->encoder = \$encoder;
    }

    public function load(ObjectManager \$manager)
    {
        \$user = new User();
        \$user->setFirstName('Admin');
        \$user->setLastName('User');
        \$user->setUsername('admin');
        \$user->setEmail('admin@yoursite.com');
        \$encoder = \$this->encoder;
        \$user->setPassword(\$encoder->encodePassword(\$user, 'mautic'));
        \$user->setRole(\$this->getReference('admin-role'));
        \$manager->persist(\$user);
        \$manager->flush();

        \$this->addReference('admin-user', \$user);

        \$user = new User();
        \$user->setFirstName('Sales');
        \$user->setLastName('User');
        \$user->setUsername('sales');
        \$user->setEmail('sales@yoursite.com');
        \$encoder = \$this->encoder;
        \$user->setPassword(\$encoder->encodePassword(\$user, 'mautic'));
        \$user->setRole(\$this->getReference('sales-role'));
        \$manager->persist(\$user);
        \$manager->flush();

        \$this->addReference('sales-user', \$user);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 2;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/DataFixtures/ORM/LoadUserData.php";
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
        return new Source("", "@bundles/UserBundle/DataFixtures/ORM/LoadUserData.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/DataFixtures/ORM/LoadUserData.php");
    }
}
