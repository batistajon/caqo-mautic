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

/* @bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php */
class __TwigTemplate_77a7810e19411660b56342013e7a5a365214036abebc8319b324861b9971a4e7 extends Template
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

namespace Mautic\\AssetBundle\\Tests\\Controller\\Api;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class AssetApiControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testCreateNewRemoteAsset()
    {
        \$payload = [
            'file'            => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf',
            'storageLocation' => 'remote',
            'title'           => 'title',
        ];
        \$this->client->request('POST', 'api/assets/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$this->assertEquals(\$payload['title'], \$response['asset']['title']);
        \$this->assertEquals(\$payload['storageLocation'], \$response['asset']['storageLocation']);
        \$this->assertStringContainsString('application/pdf', \$response['asset']['mime']);
        \$this->assertStringContainsString('pdf', \$response['asset']['extension']);
        \$this->assertNotNull(\$response['asset']['size']);
    }

    public function testCreateNewLocalAsset()
    {
        \$assetsPath = \$this->client->getKernel()->getContainer()->getParameter('mautic.upload_dir');
        file_put_contents(\$assetsPath.'/file.txt', 'test');

        \$payload = [
            'file'            => 'file.txt',
            'storageLocation' => 'local',
            'title'           => 'title',
        ];
        \$this->client->request('POST', 'api/assets/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$this->assertEquals(\$payload['title'], \$response['asset']['title']);
        \$this->assertEquals(\$payload['storageLocation'], \$response['asset']['storageLocation']);
        \$this->assertStringContainsString('text/plain', \$response['asset']['mime']);
        \$this->assertNotNull(\$response['asset']['size']);
        \$this->assertStringContainsString('txt', \$response['asset']['extension']);
        unlink(\$assetsPath.'/file.txt');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php");
    }
}
