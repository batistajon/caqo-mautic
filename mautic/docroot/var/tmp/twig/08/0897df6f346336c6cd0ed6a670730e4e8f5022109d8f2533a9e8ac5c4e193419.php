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

/* @bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php */
class __TwigTemplate_0bd427a01b8a90617f6d7f7c6ba8b19e283c9424e68ac3b8d1f8f29b930c7d41 extends Template
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

namespace Mautic\\ApiBundle\\Tests\\Helper;

use Mautic\\ApiBundle\\Helper\\BatchIdToEntityHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class BatchIdToEntityHelperTest extends TestCase
{
    public function testIdsAreExtractedFromIdKeyArray()
    {
        \$parameters = ['ids' => [1, 2, 3]];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());

        \$parameters = ['ids' => [1 => 1, 2 => 2, 3 => 3]];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testIdsAreExtractedFromIdKeyCSVString()
    {
        \$parameters = ['ids' => '1,2,3'];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testIdIsExtractedFromIdKeyWithNumericValue(): void
    {
        \$parameters = ['ids' => '12'];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([12], \$helper->getIds());
    }

    public function testErrorSetForIdKeyThatsNotRecognized()
    {
        \$parameters = ['ids' => 'foo'];

        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([], \$helper->getIds());
        \$this->assertTrue(\$helper->hasErrors());
        \$this->assertEquals(['mautic.api.call.id_missing'], \$helper->getErrors());
    }

    public function testIdsAreExtractedFromSimpleArray()
    {
        \$parameters = [1, 2, 3];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());

        \$parameters = [1 => 1, 2 => 2, 3 => 3];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testIdsAreExtractedFromAssociativeArray()
    {
        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['id' => 2, 'foo' => 'bar'],
            ['id' => 3, 'foo' => 'bar'],
        ];
        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());

        \$parameters = [
            1 => ['id' => 1, 'foo' => 'bar'],
            2 => ['id' => 2, 'foo' => 'bar'],
            3 => ['id' => 3, 'foo' => 'bar'],
        ];
        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testErrorsSetForAssociativeArrayWhenIdKeyIsNotFound()
    {
        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['foo' => 'bar'],
            ['id'  => 3, 'foo' => 'bar'],
        ];
        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 3], \$helper->getIds());

        \$this->assertTrue(\$helper->hasErrors());
        \$this->assertEquals([1 => 'mautic.api.call.id_missing'], \$helper->getErrors());
    }

    public function testOriginalKeyOrderingForIdKeyArray()
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->once())
            ->method('getId')
            ->willReturn(2);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->once())
            ->method('getId')
            ->willReturn(4);
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters      = ['ids' => [1, 2, 3, 4]];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));

        \$parameters      = ['ids' => [1 => 1, 2 => 2, 3 => 3, 4 => 4]];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 4], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForIdKeyCSVString()
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->never())
            ->method('getId');
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->never())
            ->method('getId');
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->never())
            ->method('getId');
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters      = ['ids' => '1,2,3,4'];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForSimpleArray()
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->once())
            ->method('getId')
            ->willReturn(2);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->once())
            ->method('getId')
            ->willReturn(4);
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters      = [1, 2, 3, 4];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));

        \$parameters      = [1 => 1, 2 => 2, 3 => 3, 4 => 4];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 4], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForAssociativeArray()
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->once())
            ->method('getId')
            ->willReturn(2);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->once())
            ->method('getId')
            ->willReturn(4);
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['id' => 2, 'foo' => 'bar'],
            ['id' => 3, 'foo' => 'bar'],
            ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));

        \$parameters = [
            1 => ['id' => 1, 'foo' => 'bar'],
            2 => ['id' => 2, 'foo' => 'bar'],
            3 => ['id' => 3, 'foo' => 'bar'],
            4 => ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 4], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForFullAssociativeArray()
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2
            ->method('getId')
            ->willReturn(2);
        \$entityMock3 = \$this->createMock(Lead::class);
        \$entityMock3
            ->method('getId')
            ->willReturn(3);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4
            ->method('getId')
            ->willReturn(4);
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1, \$entityMock3];

        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['id' => 2, 'foo' => 'bar'],
            ['id' => 3, 'foo' => 'bar'],
            ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2, 3], array_keys(\$orderedEntities));
        foreach (\$parameters as \$key => \$contact) {
            Assert::assertEquals(\$orderedEntities[\$key]->getId(), \$entities[\$key]->getId());
        }

        \$parameters = [
            1 => ['id' => 1, 'foo' => 'bar'],
            2 => ['id' => 2, 'foo' => 'bar'],
            3 => ['id' => 3, 'foo' => 'bar'],
            4 => ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 3, 4], array_keys(\$orderedEntities));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php");
    }
}
