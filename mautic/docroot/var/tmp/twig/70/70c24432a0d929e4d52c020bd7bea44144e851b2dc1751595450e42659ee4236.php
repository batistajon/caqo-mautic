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

/* @bundles/CoreBundle/Tests/Unit/Helper/LanguageHelperTest.php */
class __TwigTemplate_0904ba172eccd76ebd0516150587e2213ee9f27f4cd706147385282bc0dce5ee extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use GuzzleHttp\\Client;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Monolog\\Logger;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LanguageHelperTest extends TestCase
{
    /**
     * @var PathsHelper&MockObject
     */
    private \$pathsHelper;

    /**
     * @var Logger&MockObject
     */
    private \$logger;

    /**
     * @var CoreParametersHelper&MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var Client&MockObject
     */
    private \$client;

    /**
     * @var TranslatorInterface&MockObject
     */
    private \$translator;

    private string \$translationsPath;
    private string \$tmpPath;

    protected function setUp(): void
    {
        \$this->logger               = \$this->createMock(Logger::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->client               = \$this->createMock(Client::class);
        \$this->translator           = \$this->createMock(TranslatorInterface::class);

        \$this->translationsPath = __DIR__.'/resource/language';
        \$this->tmpPath          = \$this->translationsPath.'/tmp';

        \$this->pathsHelper = \$this->createMock(PathsHelper::class);
        \$this->pathsHelper->method('getSystemPath')
            ->willReturnCallback(
                function (\$path) {
                    switch (\$path) {
                        case 'translations_root':
                            return \$this->translationsPath;
                        case 'cache':
                        case 'tmp':
                            return \$this->tmpPath;
                    }
                }
            );
    }

    public function testLanguageIsInstalled(): void
    {
        \$filesystem = new Filesystem();

        // copy the zip to the tmp folder so the helper does not delete the test zip
        \$filesystem->copy(\$this->translationsPath.'/es.zip', \$this->tmpPath.'/es.zip');

        \$helper = \$this->getHelper();
        \$error  = \$helper->extractLanguagePackage('es');

        \$this->assertFalse(\$error['error']);
        \$this->assertFileExists(\$this->translationsPath.'/translations/es');

        // Cleanup the test
        \$filesystem->remove(\$this->translationsPath.'/translations/es');
    }

    public function testLanguageListIsFetchedAndWritten(): void
    {
        \$langFile = \$this->tmpPath.'/../languageList.txt';
        \$this->coreParametersHelper->method('get')
            ->withConsecutive(['language_list_file'], ['translations_list_url'])
            ->willReturnOnConsecutiveCalls(
                '',
                'https://languages.test'
            );

        \$languages = ['languages' => [['name' => 'Spanish', 'locale' => 'es']]];
        \$response  = new Response(200, [], json_encode(\$languages));

        \$this->client->expects(\$this->once())
            ->method('get')
            ->with('https://languages.test', [
                \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
            ])
            ->willReturn(\$response);

        \$this->getHelper()->fetchLanguages();

        \$this->assertFileExists(\$langFile);

        \$written = json_decode(file_get_contents(\$langFile), true);
        \$this->assertEquals(\$languages['languages'][0], \$written['languages']['es']);

        @unlink(\$langFile);
    }

    public function testLanguageIsFetched(): void
    {
        \$languages = ['languages' => ['es' => []]];
        \$langFile  = \$this->tmpPath.'/../languageList.txt';
        file_put_contents(\$langFile, json_encode(\$languages));

        \$this->coreParametersHelper->method('get')
            ->with('translations_fetch_url')
            ->willReturn('https://languages.test/');

        \$response = new Response(200, [], file_get_contents(\$this->translationsPath.'/es.zip'));

        \$this->client->expects(\$this->once())
            ->method('get')
            ->with('https://languages.test/es.zip')
            ->willReturn(\$response);

        \$error = \$this->getHelper()->fetchPackage('es');
        @unlink(\$langFile);
        \$this->assertFalse(\$error['error']);

        \$this->assertFileExists(\$this->tmpPath.'/es.zip');
        @unlink(\$this->tmpPath.'/es.zip');
    }

    public function testSupportedLanguagesAreReturned(): void
    {
        \$helper = \$this->getHelper();
        \$this->assertEquals(['en_US' => 'English - United States'], \$helper->getSupportedLanguages());
    }

    private function getHelper(): LanguageHelper
    {
        return new LanguageHelper(\$this->pathsHelper, \$this->logger, \$this->coreParametersHelper, \$this->client, \$this->translator);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/LanguageHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/LanguageHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/LanguageHelperTest.php");
    }
}
