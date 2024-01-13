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

/* @bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php */
class __TwigTemplate_b1d093e5cd87675d99ab9e4a67bdfb2b4c97565938396ab62e87bbba917977bd extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Language;

use Mautic\\CoreBundle\\Helper\\Language\\Installer;
use Symfony\\Component\\Filesystem\\Filesystem;

class InstallerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testInstaller()
    {
        \$translationsDirectory = __DIR__.'/../resource/language';

        \$installer = new Installer(\$translationsDirectory.'/translations');

        \$zipper  = new \\ZipArchive();
        \$zipper->open(\$translationsDirectory.'/es.zip');
        \$zipper->extractTo(\$translationsDirectory.'/tmp');

        \$this->assertFileExists(\$translationsDirectory.'/tmp/es');

        \$installer->install(\$translationsDirectory.'/tmp', 'es');

        // did the installer create the language folder?
        \$languagePath = \$translationsDirectory.'/translations/es';
        \$this->assertFileExists(\$languagePath);

        // did it copy the config?
        \$this->assertFileExists(\$languagePath.'/config.json');

        // did it ignore the php config?
        \$this->assertFileDoesNotExist(\$languagePath.'/config.php');

        // did it ignore the extra files?
        \$this->assertFileDoesNotExist(\$languagePath.'/random.txt');
        \$this->assertFileDoesNotExist(\$languagePath.'/RandomFolder');

        // did it create the bundles?
        \$this->assertFileExists(\$languagePath.'/CoreBundle');
        \$this->assertFileExists(\$languagePath.'/CampaignBundle');

        // did it copy the INI files?
        \$this->assertFileExists(\$languagePath.'/CoreBundle/messages.ini');
        \$this->assertFileExists(\$languagePath.'/CoreBundle/flashes.ini');
        \$this->assertFileExists(\$languagePath.'/CampaignBundle/messages.ini');
        \$this->assertFileExists(\$languagePath.'/CampaignBundle/flashes.ini');

        // did it ignore the bundle's extra files?
        \$this->assertFileDoesNotExist(\$languagePath.'/CoreBundle/random.txt');

        // did the installer cleanup appropriately
        \$this->assertFileExists(\$translationsDirectory.'/tmp/es');
        \$installer->cleanup();
        \$this->assertFileDoesNotExist(\$translationsDirectory.'/tmp/es');

        // cleanup the test
        (new Filesystem())->remove(\$languagePath);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php");
    }
}
