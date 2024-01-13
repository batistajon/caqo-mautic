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

/* @bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php */
class __TwigTemplate_ec6dee2714ce3716ef68971ca02a8e2b6233aae529d010e206cdf0be4e54d547 extends Template
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

use Mautic\\CoreBundle\\Release\\ThisRelease;
use PHPUnit\\Framework\\TestCase;

class ThisReleaseTest extends TestCase
{
    public function testMetadataParsed()
    {
        \$metadata = ThisRelease::getMetadata();

        \$this->assertNotEmpty(\$metadata->getVersion(), 'A full version is required');
        \$this->assertNotEmpty(\$metadata->getStability(), 'A stability is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedPHPVersion(), 'A minimum PHP version is required');
        \$this->assertNotEmpty(\$metadata->getMaxSupportedPHPVersion(), 'A maximum PHP version is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedMauticVersion(), 'A minimum Mautic version this version can upgrade from is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedMySqlVersion(), 'A minimum MySQL version this version needs is required');
        \$this->assertNotEmpty(\$metadata->getMinSupportedMariaDbVersion(), 'A minimum MariaDB version this version needs is required');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Release/ThisReleaseTest.php");
    }
}
