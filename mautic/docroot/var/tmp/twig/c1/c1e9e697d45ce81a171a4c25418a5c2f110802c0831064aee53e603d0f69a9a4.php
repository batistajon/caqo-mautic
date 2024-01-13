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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/SyncDateHelperTest.php */
class __TwigTemplate_c7c85d924926e0365d9389a5209e75d99aa8384428b93f949a69e2f9eeca5270 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\Helper;

use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use PHPUnit\\Framework\\TestCase;

class SyncDateHelperTest extends TestCase
{
    /**
     * @var SyncDateHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$syncDateHelper;

    protected function setUp(): void
    {
        \$this->syncDateHelper = \$this->getMockBuilder(SyncDateHelper::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getLastSyncDateForObject'])
            ->getMock();
    }

    public function testSpecifiedFromDateTimeIsReturned(): void
    {
        \$syncFromDateTime = new \\DateTimeImmutable('2018-10-08 00:00:00');

        \$this->syncDateHelper->setSyncDateTimes(\$syncFromDateTime);

        \$this->assertEquals(\$syncFromDateTime, \$this->syncDateHelper->getSyncFromDateTime('Test', 'Object'));
    }

    public function testLastSyncDateForIntegrationSyncObjectIsReturned(): void
    {
        \$objectLastSyncDate = new \\DateTimeImmutable('2018-10-08 00:00:00');

        \$this->syncDateHelper->method('getLastSyncDateForObject')
            ->willReturn(\$objectLastSyncDate);

        \$this->assertEquals(\$objectLastSyncDate, \$this->syncDateHelper->getSyncFromDateTime('Test', 'Object'));
    }

    public function testSyncToDateTimeIsReturnedIfSpecified(): void
    {
        \$syncToDateTime = new \\DateTimeImmutable('2018-10-08 00:00:00');

        \$this->syncDateHelper->setSyncDateTimes(null, \$syncToDateTime);

        \$this->assertEquals(\$syncToDateTime, \$this->syncDateHelper->getSyncToDateTime());
    }

    public function testSyncDateTimeIsReturnedForSyncToDateTimeIfNotSpecified(): void
    {
        \$this->syncDateHelper->setSyncDateTimes();

        \$this->assertInstanceOf(\\DateTimeImmutable::class, \$this->syncDateHelper->getSyncToDateTime());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/SyncDateHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/SyncDateHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/SyncDateHelperTest.php");
    }
}
