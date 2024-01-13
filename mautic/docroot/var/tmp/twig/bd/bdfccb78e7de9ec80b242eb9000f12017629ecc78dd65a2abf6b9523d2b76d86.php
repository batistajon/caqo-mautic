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

/* @bundles/CoreBundle/Test/EventListener/MaintenanceSubscriberTest.php */
class __TwigTemplate_60537f3d2fe0a464901fe090d0c0747f5cf7b99bc6fae3b6f59f37f1d373e27e extends Template
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

namespace Mautic\\CoreBundle\\Test\\EventListener;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MaintenanceEvent;
use Mautic\\CoreBundle\\EventListener\\MaintenanceSubscriber;
use Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class MaintenanceSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MaintenanceSubscriber
     */
    private \$subscriber;

    protected function setUp(): void
    {
        \$connection          = \$this->createMock(Connection::class);
        \$userTokenRepository = \$this->createMock(UserTokenRepositoryInterface::class);
        \$translator          = \$this->createMock(TranslatorInterface::class);
        \$this->subscriber    = new MaintenanceSubscriber(\$connection, \$userTokenRepository, \$translator);
    }

    public function testGetSubscribedEvents(): void
    {
        \$this->assertEquals(
            [CoreEvents::MAINTENANCE_CLEANUP_DATA => ['onDataCleanup', -50]],
            \$this->subscriber->getSubscribedEvents()
        );
    }

    public function testOnDataCleanup(): void
    {
        \$dateTime         = new \\DateTimeImmutable();
        \$format           = 'Y-m-d H:i:s';
        \$rowCount         = 2;
        \$translatedString = 'nonsense';

        \$dateTimeMock = \$this->createMock(\\DateTime::class);
        \$dateTimeMock
            ->expects(\$this->exactly(2))
            ->method('format')
            ->with(\$format)
            ->willReturn(\$dateTime->format(\$format));

        \$event = \$this->createMock(MaintenanceEvent::class);
        \$event
            ->expects(\$this->exactly(2))
            ->method('getDate')
            ->willReturn(\$dateTimeMock);
        \$event
            ->expects(\$this->exactly(3))
            ->method('isDryRun')
            ->willReturn(false);
        \$event
            ->expects(\$this->exactly(3))
            ->method('setStat');

        \$expressionBuilder = \$this->createMock(ExpressionBuilder::class);
        \$expressionBuilder
            ->expects(\$this->exactly(2))
            ->method('lte')
            ->with('date_added', ':date');

        \$qb = \$this->createMock(QueryBuilder::class);
        \$qb
            ->expects(\$this->exactly(2))
            ->method('setParameter')
            ->willReturn(\$qb);
        \$qb
            ->expects(\$this->exactly(2))
            ->method('delete')
            ->willReturn(\$qb);
        \$qb
            ->expects(\$this->exactly(2))
            ->method('expr')
            ->willReturn(\$expressionBuilder);
        \$qb
            ->expects(\$this->exactly(2))
            ->method('where')
            ->willReturn(\$qb);
        \$qb
            ->expects(\$this->exactly(2))
            ->method('execute')
            ->willReturn(\$rowCount);

        \$connection = \$this->createMock(Connection::class);
        \$connection
            ->expects(\$this->exactly(2))
            ->method('createQueryBuilder')
            ->willReturn(\$qb);

        \$translator          = \$this->createMock(TranslatorInterface::class);
        \$userTokenRepository = \$this->createMock(UserTokenRepositoryInterface::class);
        \$subscriber          = new MaintenanceSubscriber(\$connection, \$userTokenRepository, \$translator);

        \$translator
            ->expects(\$this->exactly(3))
            ->method('trans')
            ->willReturn(\$translatedString);

        \$this->assertNull(\$subscriber->onDataCleanup(\$event));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/EventListener/MaintenanceSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Test/EventListener/MaintenanceSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/EventListener/MaintenanceSubscriberTest.php");
    }
}
