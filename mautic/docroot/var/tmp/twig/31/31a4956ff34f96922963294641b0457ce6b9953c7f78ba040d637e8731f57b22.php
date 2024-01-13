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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/ReleaseParserTest.php */
class __TwigTemplate_9a3aaf50e340c527a4c8c8bc223c04d29685d1ad448edfd9be583673ec22ba60 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Update\\Github;

use GuzzleHttp\\Client;
use GuzzleHttp\\Handler\\MockHandler;
use GuzzleHttp\\Psr7\\Request;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Helper\\Update\\Exception\\LatestVersionSupportedException;
use Mautic\\CoreBundle\\Helper\\Update\\Github\\ReleaseParser;
use PHPUnit\\Framework\\TestCase;

class ReleaseParserTest extends TestCase
{
    /**
     * @var ReleaseParser
     */
    private \$releaseParser;

    protected function setUp(): void
    {
        \$client = new Client(
            [
                'handler' => new MockHandler(
                    [
                        function (Request \$request, array \$options) {
                            \$metadata = file_get_contents(__DIR__.'/json/metadata-2.16.0.json');

                            return new Response(200, [], \$metadata);
                        },
                        function (Request \$request, array \$options) {
                            \$metadata = file_get_contents(__DIR__.'/json/metadata-3.0.1-beta.json');

                            return new Response(200, [], \$metadata);
                        },
                        function (Request \$request, array \$options) {
                            \$metadata = file_get_contents(__DIR__.'/json/metadata-3.0.1-alpha.json');

                            return new Response(200, [], \$metadata);
                        },
                        function (Request \$request, array \$options) {
                            \$metadata = file_get_contents(__DIR__.'/json/metadata-3.0.0.json');

                            return new Response(200, [], \$metadata);
                        },
                        function (Request \$request, array \$options) {
                            \$metadata = file_get_contents(__DIR__.'/json/metadata-2.15.0.json');

                            return new Response(200, [], \$metadata);
                        },
                    ]
                ),
            ]
        );

        \$this->releaseParser = new ReleaseParser(\$client);
    }

    public function testMatchingReleaseReturnedForAlphaStability()
    {
        \$expects       = '3.0.1-beta';
        \$mauticVersion = '3.0.0-alpha';
        \$stability     = 'alpha';

        \$release = \$this->releaseParser->getLatestSupportedRelease(\$this->getReleases(), \$mauticVersion, \$stability);

        \$this->assertSame(\$expects, \$release->getVersion());
    }

    public function testMatchingReleaseReturnedForBetaStability()
    {
        \$expects       = '3.0.1-beta';
        \$mauticVersion = '3.0.0-alpha';
        \$stability     = 'beta';

        \$release = \$this->releaseParser->getLatestSupportedRelease(\$this->getReleases(), \$mauticVersion, \$stability);

        \$this->assertSame(\$expects, \$release->getVersion());
    }

    public function testMatchingReleaseReturnedForStableStability()
    {
        \$expects       = '3.0.0';
        \$mauticVersion = '2.20.0';
        \$stability     = 'stable';

        \$release = \$this->releaseParser->getLatestSupportedRelease(\$this->getReleases(), \$mauticVersion, \$stability);

        \$this->assertSame(\$expects, \$release->getVersion());
    }

    public function testMatchingReleaseReturnedForMinimumMauticVersion()
    {
        \$expects       = '2.15.0';
        \$mauticVersion = '2.1.0';
        \$stability     = 'stable';

        \$release = \$this->releaseParser->getLatestSupportedRelease(\$this->getReleases(), \$mauticVersion, \$stability);

        \$this->assertSame(\$expects, \$release->getVersion());
    }

    public function testLatestVersionSupportedExceptionThrownIfMetadataErrors()
    {
        \$this->expectException(LatestVersionSupportedException::class);

        \$mauticVersion = '2.16.0';
        \$stability     = 'stable';

        \$client = new Client(
            [
                'handler' => new MockHandler(
                    [
                        function (Request \$request, array \$options) {
                            return new Response(500);
                        },
                    ]
                ),
            ]
        );

        (new ReleaseParser(\$client))->getLatestSupportedRelease([['html_url' => 'foo://bar']], \$mauticVersion, \$stability);
    }

    public function testLatestVersionSupportedExceptionThrownIfMetadataNotFound()
    {
        \$this->expectException(LatestVersionSupportedException::class);

        \$mauticVersion = '2.16.0';
        \$stability     = 'stable';

        \$client = new Client(
            [
                'handler' => new MockHandler(
                    [
                        function (Request \$request, array \$options) {
                            return new Response(200, [], json_encode(['foo' => 'bar']));
                        },
                    ]
                ),
            ]
        );

        (new ReleaseParser(\$client))->getLatestSupportedRelease([['html_url' => 'foo://bar']], \$mauticVersion, \$stability);
    }

    private function getReleases(): array
    {
        return json_decode(file_get_contents(__DIR__.'/json/releases.json'), true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/ReleaseParserTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/ReleaseParserTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/ReleaseParserTest.php");
    }
}
