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

/* @bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php */
class __TwigTemplate_13d2afc2b83f03dac1ecbe5dd4cbf770842fb59e0fa093276429f9b91d5824b8 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Loader;

use Mautic\\CoreBundle\\Loader\\ParameterLoader;
use PHPUnit\\Framework\\TestCase;

class ParameterLoaderTest extends TestCase
{
    public function testParametersAreLoaded(): void
    {
        \$envParameters = json_encode(['default_daterange_filter' => '-1 day']);
        putenv('MAUTIC_CONFIG_PARAMETERS='.\$envParameters);

        \$loader = new ParameterLoader(__DIR__.'/TestRoot');
        \$loader->loadIntoEnvironment();

        \$parameterBag = \$loader->getParameterBag();

        \$this->assertEquals('https://language-packs.mautic.com/', \$parameterBag->get('translations_fetch_url'));
        \$this->assertEquals('https://language-packs.mautic.com/', getenv('MAUTIC_TRANSLATIONS_FETCH_URL'));

        \$this->assertEquals('foobar.com', \$parameterBag->get('mailer_host'));
        \$this->assertEquals('foobar.com', getenv('MAUTIC_MAILER_HOST'));

        \$this->assertEquals('-1 day', \$parameterBag->get('default_daterange_filter'));
        \$this->assertEquals('-1 day', getenv('MAUTIC_DEFAULT_DATERANGE_FILTER'));

        putenv('MAUTIC_CONFIG_PARAMETERS=');
    }

    public function testDefaultParametersAreLoaded(): void
    {
        \$loader = new ParameterLoader(__DIR__.'/TestRoot');
        \$this->assertIsArray(\$loader->getDefaultParameters());
        \$this->assertFalse(\$loader->getDefaultParameters()['api_enabled']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/ParameterLoaderTest.php");
    }
}
