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

/* @bundles/CoreBundle/Tests/Unit/Helper/PathsHelperTest.php */
class __TwigTemplate_e6d975a885b716bc7b962a5794e90e57a8e7ed5b853eaf9d67fcb825bafe3a7c extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class PathsHelperTest extends TestCase
{
    private \$cacheDir = __DIR__.'/resource/paths/cache';
    private \$logsDir  = __DIR__.'/resource/paths/logs';
    private \$rootDir  = __DIR__.'/resource/paths/app';

    /**
     * @var MockObject|UserHelper
     */
    private \$userHelper;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var PathsHelper
     */
    private \$helper;

    protected function setUp(): void
    {
        \$this->userHelper           = \$this->createMock(UserHelper::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->coreParametersHelper->method('get')
            ->willReturnCallback(
                function (string \$key) {
                    switch (\$key) {
                        case 'image_path':
                            return 'media/images';
                        case 'tmp_path':
                            return __DIR__.'/resource/paths/tmp';
                        default:
                            return '';
                    }
                }
            );
        \$this->helper = new PathsHelper(
            \$this->userHelper, \$this->coreParametersHelper, \$this->cacheDir, \$this->logsDir, \$this->rootDir
        );
    }

    public function testGetLocalConfigFile()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/app/config/local.php', \$this->helper->getLocalConfigurationFile());
    }

    public function testGetCachePath()
    {
        \$this->assertEquals(\$this->cacheDir, \$this->helper->getCachePath());
    }

    public function testGetRootPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths', \$this->helper->getRootPath());
    }

    public function testGetTemporaryPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/tmp', \$this->helper->getTemporaryPath());
    }

    public function testGetLogsPath()
    {
        \$this->assertEquals(\$this->logsDir, \$this->helper->getLogsPath());
    }

    public function testGetImagesPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/media/images', \$this->helper->getImagePath());
    }

    public function testGetTranslationsPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/translations', \$this->helper->getTranslationsPath());
    }

    public function testGetThemesPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/themes', \$this->helper->getThemesPath());
    }

    public function testGetAssetsPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/media', \$this->helper->getAssetsPath());
    }

    public function testGetCoreBundlesPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/app/bundles', \$this->helper->getCoreBundlesPath());
    }

    public function testGetPluginsPath()
    {
        \$this->assertEquals(__DIR__.'/resource/paths/plugins', \$this->helper->getPluginsPath());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/PathsHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/PathsHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/PathsHelperTest.php");
    }
}
