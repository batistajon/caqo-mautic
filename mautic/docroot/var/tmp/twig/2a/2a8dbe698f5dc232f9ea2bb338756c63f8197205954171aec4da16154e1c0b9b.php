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

/* @bundles/CoreBundle/Tests/Unit/Release/MetadataTest.php */
class __TwigTemplate_51d6f0b0a6cc9c1a9c86596dd480a5a01376d0f86326c539964cd7f4eebb50cf extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Release;

use Mautic\\CoreBundle\\Release\\Metadata;
use PHPUnit\\Framework\\TestCase;

class MetadataTest extends TestCase
{
    public function testStableRelease(): void
    {
        \$releaseMetadata = [
            'version'                           => '3.2.1',
            'stability'                         => 'stable',
            'minimum_php_version'               => '7.2.21',
            'maximum_php_version'               => '7.3.99',
            'show_php_version_warning_if_under' => '7.3.0',
            'minimum_mautic_version'            => '3.0.0-alpha',
            'announcement_url'                  => '',
        ];

        \$metadata = new Metadata(\$releaseMetadata);

        \$this->assertEquals(\$releaseMetadata['version'], \$metadata->getVersion());
        \$this->assertEquals(3, \$metadata->getMajorVersion());
        \$this->assertEquals(2, \$metadata->getMinorVersion());
        \$this->assertEquals(1, \$metadata->getPatchVersion());
        \$this->assertEquals('', \$metadata->getExtraVersion());
        \$this->assertEquals(\$releaseMetadata['stability'], \$metadata->getStability());
        \$this->assertEquals(\$releaseMetadata['minimum_php_version'], \$metadata->getMinSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['maximum_php_version'], \$metadata->getMaxSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['show_php_version_warning_if_under'], \$metadata->getShowPHPVersionWarningIfUnder());
        \$this->assertEquals(\$releaseMetadata['minimum_mautic_version'], \$metadata->getMinSupportedMauticVersion());
        \$this->assertEquals(\$releaseMetadata['announcement_url'], \$metadata->getAnnouncementUrl());
    }

    public function testStableReleaseWithoutPhpVersionWarning(): void
    {
        \$releaseMetadata = [
            'version'                           => '3.2.1',
            'stability'                         => 'stable',
            'minimum_php_version'               => '7.2.21',
            'maximum_php_version'               => '7.3.99',
            'minimum_mautic_version'            => '3.0.0-alpha',
            'announcement_url'                  => '',
        ];

        \$metadata = new Metadata(\$releaseMetadata);

        \$this->assertEquals(\$releaseMetadata['version'], \$metadata->getVersion());
        \$this->assertEquals(3, \$metadata->getMajorVersion());
        \$this->assertEquals(2, \$metadata->getMinorVersion());
        \$this->assertEquals(1, \$metadata->getPatchVersion());
        \$this->assertEquals('', \$metadata->getExtraVersion());
        \$this->assertEquals(\$releaseMetadata['stability'], \$metadata->getStability());
        \$this->assertEquals(\$releaseMetadata['minimum_php_version'], \$metadata->getMinSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['maximum_php_version'], \$metadata->getMaxSupportedPHPVersion());
        \$this->assertEquals('', \$metadata->getShowPHPVersionWarningIfUnder());
        \$this->assertEquals(\$releaseMetadata['minimum_mautic_version'], \$metadata->getMinSupportedMauticVersion());
        \$this->assertEquals(\$releaseMetadata['announcement_url'], \$metadata->getAnnouncementUrl());
    }

    public function testExtraVersionFound(): void
    {
        \$releaseMetadata = [
            'version'                           => '3.2.1-beta',
            'stability'                         => 'beta',
            'minimum_php_version'               => '7.2.21',
            'maximum_php_version'               => '7.3.99',
            'show_php_version_warning_if_under' => '7.3.0',
            'minimum_mautic_version'            => '3.0.0-alpha',
            'announcement_url'                  => '',
            'minimum_mysql_version'             => '5.7.14',
            'minimum_mariadb_version'           => '10.3.5',
        ];

        \$metadata = new Metadata(\$releaseMetadata);

        \$this->assertEquals(\$releaseMetadata['version'], \$metadata->getVersion());
        \$this->assertEquals(3, \$metadata->getMajorVersion());
        \$this->assertEquals(2, \$metadata->getMinorVersion());
        \$this->assertEquals(1, \$metadata->getPatchVersion());
        \$this->assertEquals('beta', \$metadata->getExtraVersion());
        \$this->assertEquals(\$releaseMetadata['stability'], \$metadata->getStability());
        \$this->assertEquals(\$releaseMetadata['minimum_php_version'], \$metadata->getMinSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['maximum_php_version'], \$metadata->getMaxSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['show_php_version_warning_if_under'], \$metadata->getShowPHPVersionWarningIfUnder());
        \$this->assertEquals(\$releaseMetadata['minimum_mautic_version'], \$metadata->getMinSupportedMauticVersion());
        \$this->assertEquals(\$releaseMetadata['announcement_url'], \$metadata->getAnnouncementUrl());
        \$this->assertEquals(\$releaseMetadata['minimum_mysql_version'], \$metadata->getMinSupportedMySqlVersion());
        \$this->assertEquals(\$releaseMetadata['minimum_mariadb_version'], \$metadata->getMinSupportedMariaDbVersion());
    }

    public function testLongerExtraVersionFound(): void
    {
        \$releaseMetadata = [
            'version'                           => '3.2.1-xxx-yyy',
            'stability'                         => 'xxx',
            'minimum_php_version'               => '7.2.21',
            'maximum_php_version'               => '7.3.99',
            'show_php_version_warning_if_under' => '7.3.0',
            'minimum_mautic_version'            => '3.0.0-alpha',
            'announcement_url'                  => '',
            'minimum_mysql_version'             => '5.7.14',
            'minimum_mariadb_version'           => '10.3.5',
        ];
        \$metadata = new Metadata(\$releaseMetadata);
        \$this->assertEquals(\$releaseMetadata['version'], \$metadata->getVersion());
        \$this->assertEquals(3, \$metadata->getMajorVersion());
        \$this->assertEquals(2, \$metadata->getMinorVersion());
        \$this->assertEquals(1, \$metadata->getPatchVersion());
        \$this->assertEquals('xxx-yyy', \$metadata->getExtraVersion());
        \$this->assertEquals(\$releaseMetadata['stability'], \$metadata->getStability());
        \$this->assertEquals(\$releaseMetadata['minimum_php_version'], \$metadata->getMinSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['maximum_php_version'], \$metadata->getMaxSupportedPHPVersion());
        \$this->assertEquals(\$releaseMetadata['show_php_version_warning_if_under'], \$metadata->getShowPHPVersionWarningIfUnder());
        \$this->assertEquals(\$releaseMetadata['minimum_mautic_version'], \$metadata->getMinSupportedMauticVersion());
        \$this->assertEquals(\$releaseMetadata['announcement_url'], \$metadata->getAnnouncementUrl());
        \$this->assertEquals(\$releaseMetadata['minimum_mysql_version'], \$metadata->getMinSupportedMySqlVersion());
        \$this->assertEquals(\$releaseMetadata['minimum_mariadb_version'], \$metadata->getMinSupportedMariaDbVersion());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Release/MetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Release/MetadataTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Release/MetadataTest.php");
    }
}
