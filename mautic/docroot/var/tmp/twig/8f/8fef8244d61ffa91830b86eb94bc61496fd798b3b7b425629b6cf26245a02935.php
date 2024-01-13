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

/* @bundles/CoreBundle/Tests/Functional/Controller/FileControllerTest.php */
class __TwigTemplate_30661ae5769b076be3bce1c35188ea5da3e3d209e7d5fbb46b7d3c0fd6296c47 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Response;

class FileControllerTest extends MauticMysqlTestCase
{
    private \$uploadedFilePath;

    public function testImageUploadSuccess(): void
    {
        \$image = \$this->createUploadFile('png-test.png', 'tmp-png-test.png');
        \$this->client->request('POST', 's/file/upload?editor=ckeditor', [], ['upload' => \$image]);
        \$response = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$response->getStatusCode());
        \$responseData = json_decode(\$response->getContent(), true);
        Assert::assertEquals(true, \$responseData['uploaded']);
        Assert::arrayHasKey('url');
        Assert::assertNotEmpty(\$responseData['url']);
        \$uploadedFileName = basename(\$responseData['url']);
        \$uploadedImage    = static::\$container->getParameter('kernel.project_dir').'/media/images/'.\$uploadedFileName;
        Assert::assertTrue(file_exists(\$uploadedImage));
    }

    public function testImageUploadFailure(): void
    {
        \$image = \$this->createUploadFile('test.json', 'tmp-test.json');

        \$this->client->request('POST', 's/file/upload?editor=ckeditor', [], ['upload' => \$image]);
        \$response = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$response->getStatusCode());
        \$responseData = json_decode(\$response->getContent(), true);
        Assert::assertEquals(false, \$responseData['uploaded']);
        Assert::assertEquals('The uploaded image does not have an allowed mime type', \$responseData['error']['message']);
    }

    private function createUploadFile(string \$fileName, string \$tmpFile): UploadedFile
    {
        \$filePath = \$this->getFixurePath();
        copy(\$filePath.\$fileName, \$filePath.\$tmpFile);
        \$this->uploadedFilePath = \$filePath.\$tmpFile;
        \$image                  = new UploadedFile(
            \$filePath.\$tmpFile,
            \$tmpFile,
            'image/png'
        );

        return \$image;
    }

    private function getFixurePath(): string
    {
        return realpath(dirname(__FILE__).'/../../Fixtures/').'/';
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        if (\$this->uploadedFilePath && file_exists(\$this->uploadedFilePath)) {
            unlink(\$this->uploadedFilePath);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Controller/FileControllerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Controller/FileControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Controller/FileControllerTest.php");
    }
}
