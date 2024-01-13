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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php */
class __TwigTemplate_5b4835cd38e36fe5769aef2dad8109fbeb2eed7f55313547ef261207b44af84e extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\Provider;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver\\Statement;
use Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProvider;

class VersionProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$connection;
    private \$statement;
    private \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->connection           = \$this->createMock(Connection::class);
        \$this->statement            = \$this->createMock(Statement::class);
        \$this->provider             = new VersionProvider(\$this->connection);
    }

    public function testGetVersionForMySql()
    {
        \$this->connection->expects(\$this->once())
            ->method('executeQuery')
            ->with('SELECT VERSION()')
            ->willReturn(\$this->statement);

        \$this->statement->expects(\$this->once())
            ->method('fetchColumn')
            ->willReturn('5.7.23-23-log');

        \$version = \$this->provider->getVersion();

        \$this->assertSame('5.7.23-23-log', \$version);
        \$this->assertFalse(\$this->provider->isMariaDb());
        \$this->assertTrue(\$this->provider->isMySql());
    }

    public function testGetVersionForMariaDb()
    {
        \$this->connection->expects(\$this->once())
            ->method('executeQuery')
            ->with('SELECT VERSION()')
            ->willReturn(\$this->statement);

        \$this->statement->expects(\$this->once())
            ->method('fetchColumn')
            ->willReturn('10.3.9-MariaDB');

        \$version = \$this->provider->getVersion();

        \$this->assertSame('10.3.9-MariaDB', \$version);
        \$this->assertTrue(\$this->provider->isMariaDb());
        \$this->assertFalse(\$this->provider->isMySql());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php");
    }
}
