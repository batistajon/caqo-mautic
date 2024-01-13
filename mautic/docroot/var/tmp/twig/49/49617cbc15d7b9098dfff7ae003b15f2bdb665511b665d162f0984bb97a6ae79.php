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

/* @bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php */
class __TwigTemplate_366eee8c98800a9e9fdf99d11dfd1275d68e0bf6e5918c4452f6dd3506fbe97c extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\AbstractQuery;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\QueryBuilder;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

final class ObjectMappingRepositoryTest extends TestCase
{
    /**
     * @var MockObject|EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var MockObject|ClassMetadata
     */
    private \$classMetadata;

    /**
     * @var MockObject|AbstractQuery
     */
    private \$query;

    /**
     * @var MockObject|QueryBuilder
     */
    private \$queryBuilder;

    /**
     * @var ObjectMappingRepository
     */
    private \$repository;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->entityManager = \$this->createMock(EntityManagerInterface::class);
        \$this->classMetadata = \$this->createMock(ClassMetadata::class);
        \$this->queryBuilder  = new QueryBuilder(\$this->entityManager);
        \$this->repository    = new ObjectMappingRepository(\$this->entityManager, \$this->classMetadata);

        // This is terrible, but the Query class is final and AbstractQuery doesn't have some methods used.
        \$this->query = \$this->getMockBuilder(AbstractQuery::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['setParameters', 'getSingleResult', 'getSQL', '_doExecute'])
            ->addMethods(['setFirstResult', 'setMaxResults'])
            ->getMock();

        \$this->entityManager->expects(\$this->once())
            ->method('createQueryBuilder')
            ->willReturn(\$this->queryBuilder);

        \$this->query->expects(\$this->once())
            ->method('setFirstResult')
            ->willReturnSelf();

        \$this->query->expects(\$this->once())
            ->method('setMaxResults')
            ->willReturnSelf();
    }

    public function testDeleteEntitiesForObject(): void
    {
        \$this->entityManager->expects(\$this->once())
            ->method('createQuery')
            ->with('DELETE Mautic\\IntegrationsBundle\\Entity\\ObjectMapping m WHERE m.internalObjectName = :internalObject AND m.internalObjectId = :internalObjectId')
            ->willReturn(\$this->query);

        \$this->query->expects(\$this->once())
            ->method('setParameters')
            ->with(\$this->callback(function (ArrayCollection \$collection) {
                /** @var Parameter \$parameter */
                \$parameter = \$collection[0];
                \$this->assertSame('internalObject', \$parameter->getName());
                \$this->assertSame('company', \$parameter->getValue());

                /** @var Parameter \$parameter */
                \$parameter = \$collection[1];
                \$this->assertSame('internalObjectId', \$parameter->getName());
                \$this->assertSame(123, \$parameter->getValue());

                return true;
            }))
            ->willReturnSelf();

        // Stopping early to avoid Mocking hell. We have what we needed.
        \$this->query->expects(\$this->once())
            ->method('_doExecute')
            ->willReturn(0);

        \$this->repository->deleteEntitiesForObject(123, 'company');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php");
    }
}
