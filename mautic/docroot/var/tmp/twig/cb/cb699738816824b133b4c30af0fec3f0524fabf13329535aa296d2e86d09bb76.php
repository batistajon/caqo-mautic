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

/* @bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php */
class __TwigTemplate_7c7ffed53655e46791548d277ed11621bd888b7bfe2703b4f9bad1c69587c477 extends Template
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

namespace Mautic\\InstallBundle\\InstallFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class GrapesJsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface, FixtureGroupInterface
{
    /**
     * @var ContainerInterface
     */
    private \$container;

    public static function getGroups(): array
    {
        return ['group_install', 'group_mautic_install_data'];
    }

    public function setContainer(ContainerInterface \$container = null): void
    {
        \$this->container = \$container;
    }

    public function load(ObjectManager \$manager): void
    {
        \$projectDir               = \$this->container->get('kernel')->getProjectDir();
        \$grapeJsBuilderConfigPath = \$projectDir.'/plugins/GrapesJsBuilderBundle/Config/config.php';

        if (!file_exists(\$grapeJsBuilderConfigPath)) {
            return;
        }

        \$parameters = include \$grapeJsBuilderConfigPath;

        if (!is_array(\$parameters)) {
            return;
        }

        \$plugin = new Plugin();
        \$plugin->setName(\$parameters['name']);
        \$plugin->setDescription(\$parameters['description']);
        \$plugin->setVersion(\$parameters['version']);
        \$plugin->setAuthor(\$parameters['author']);
        \$plugin->setBundle('GrapesJsBuilderBundle');
        \$manager->persist(\$plugin);

        \$integration = new Integration();
        \$integration->setIsPublished(true);
        \$integration->setName('GrapesJsBuilder');
        \$integration->setPlugin(\$plugin);
        \$manager->persist(\$integration);

        \$manager->flush();
    }

    public function getOrder(): int
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
        return "@bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php";
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
        return new Source("", "@bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php");
    }
}
