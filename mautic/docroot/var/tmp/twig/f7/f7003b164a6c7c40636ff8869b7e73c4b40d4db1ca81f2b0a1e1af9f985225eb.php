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

/* @bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php */
class __TwigTemplate_7e47a065cb72582373fbb11ec89d5bd7645c29aba13735129b538faa70848ada extends Template
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

namespace Mautic\\InstallBundle\\Tests\\InstallFixtures\\ORM;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\InstallBundle\\InstallFixtures\\ORM\\GrapesJsData;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Entity\\Plugin;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class GrapeJsDataTest extends MauticMysqlTestCase
{
    use FakeContainerTrait;

    protected \$useCleanupRollback = false;

    private GrapesJsData \$fixture;

    protected ContainerInterface \$tempContainer;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->tempContainer = self::\$container;
        \$this->fixture       = new GrapesJsData();
        \$this->fixture->setContainer(\$this->getContainerFake());
    }

    public function testGetGroups(): void
    {
        Assert::assertSame(['group_install', 'group_mautic_install_data'], GrapesJsData::getGroups());
    }

    public function testGetOrder(): void
    {
        Assert::assertSame(1, \$this->fixture->getOrder());
    }

    public function testLoad(): void
    {
        \$findOneByCriteria = [
            'name'        => 'GrapesJS Builder',
            'description' => 'GrapesJS Builder with MJML support for Mautic',
            'version'     => '1.0.0',
            'author'      => 'Mautic Community',
            'bundle'      => 'GrapesJsBuilderBundle',
        ];
        \$plugin = \$this->em->getRepository(Plugin::class)->findOneBy(\$findOneByCriteria);
        self::assertNull(\$plugin);

        \$this->fixture->load(\$this->em);

        \$plugin = \$this->em->getRepository(Plugin::class)->findOneBy(\$findOneByCriteria);
        self::assertInstanceOf(Plugin::class, \$plugin);

        \$integration = \$this->em->getRepository(Integration::class)->findOneBy(
            [
                'isPublished' => true,
                'name'        => 'GrapesJsBuilder',
                'plugin'      => \$plugin,
            ]
        );
        self::assertInstanceOf(Integration::class, \$integration);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php";
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
        return new Source("", "@bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php");
    }
}
