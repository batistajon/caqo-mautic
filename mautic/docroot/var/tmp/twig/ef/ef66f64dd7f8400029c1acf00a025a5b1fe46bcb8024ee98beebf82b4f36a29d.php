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

/* @bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php */
class __TwigTemplate_b47c154092260e624d4285bd35d166e8e9c0f6719505a9acd10418d89e97bf74 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Event;

use Mautic\\IntegrationsBundle\\Event\\ConfigSaveEvent;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\TestCase;

class ConfigSaveEventTest extends TestCase
{
    public function testGetters()
    {
        \$name        = 'name';
        \$integration = \$this->createMock(Integration::class);
        \$event       = new ConfigSaveEvent(\$integration);

        \$integration->expects(self::once())
            ->method('getName')
            ->willReturn(\$name);

        self::assertSame(\$integration, \$event->getIntegrationConfiguration());
        self::assertSame(\$name, \$event->getIntegration());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php");
    }
}
