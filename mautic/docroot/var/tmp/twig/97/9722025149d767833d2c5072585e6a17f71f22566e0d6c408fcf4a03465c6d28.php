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

/* @bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php */
class __TwigTemplate_efe4c6fa41746073cfbbc46582143c6885730964c790bdd4e86e2a08a1165d55 extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Controller;

use Mautic\\ConfigBundle\\Model\\SysinfoModel;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class SysinfoControllerTest extends MauticMysqlTestCase
{
    public function testDbInfoIsShown(): void
    {
        /** @var SysinfoModel */
        \$sysinfoModel = self::\$container->get('mautic.config.model.sysinfo');
        \$dbInfo       = \$sysinfoModel->getDbInfo();

        // Request sysinfo page
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/sysinfo');
        Assert::assertTrue(\$this->client->getResponse()->isOk());

        \$dbVersion       = \$crawler->filterXPath(\"//td[@id='dbinfo-version']\")->text();
        \$dbDriver        = \$crawler->filterXPath(\"//td[@id='dbinfo-driver']\")->text();
        \$dbPlatform      = \$crawler->filterXPath(\"//td[@id='dbinfo-platform']\")->text();
        \$recommendations = \$crawler->filter('#recommendations');

        Assert::assertSame(\$dbInfo['version'], \$dbVersion);
        Assert::assertSame(\$dbInfo['driver'], \$dbDriver);
        Assert::assertSame(\$dbInfo['platform'], \$dbPlatform);
        Assert::assertGreaterThan(0, \$recommendations->count());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php");
    }
}
