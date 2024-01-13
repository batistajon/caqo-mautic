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

/* @bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php */
class __TwigTemplate_09cea3ce888fcf38bfc15e9729e0926364793950c204f1f2546240705a01c78f extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\LeadBundle\\EventListener\\ConfigSubscriber;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class ConfigSubscriberTest extends TestCase
{
    private ConfigSubscriber \$configSubscriber;

    /**
     * @var ConfigBuilderEvent&MockObject
     */
    private \$configBuilderEvent;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->configSubscriber   = new ConfigSubscriber();
        \$this->configBuilderEvent = \$this->createMock(ConfigBuilderEvent::class);
    }

    public function testSubscribedEvents(): void
    {
        \$subscribedEvents = ConfigSubscriber::getSubscribedEvents();
        \$this->assertArrayHasKey(ConfigEvents::CONFIG_ON_GENERATE, \$subscribedEvents);
    }

    public function testThatWeAreAddingFormsToTheConfig(): void
    {
        \$leadConfig = [
            'bundle'     => 'LeadBundle',
            'formAlias'  => 'leadconfig',
            'formType'   => 'Mautic\\\\LeadBundle\\\\Form\\\\Type\\\\ConfigType',
            'formTheme'  => 'MauticLeadBundle:FormTheme\\\\Config',
            'parameters' => null,
        ];

        \$segmentConfig = [
            'bundle'     => 'LeadBundle',
            'formAlias'  => 'segment_config',
            'formType'   => 'Mautic\\\\LeadBundle\\\\Form\\\\Type\\\\SegmentConfigType',
            'formTheme'  => 'MauticLeadBundle:FormTheme\\\\Config',
            'parameters' => null,
        ];

        \$this->configBuilderEvent
            ->expects(\$this->exactly(2))
            ->method('addForm')
            ->withConsecutive([\$leadConfig], [\$segmentConfig]);

        \$this->configSubscriber->onConfigGenerate(\$this->configBuilderEvent);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php");
    }
}
