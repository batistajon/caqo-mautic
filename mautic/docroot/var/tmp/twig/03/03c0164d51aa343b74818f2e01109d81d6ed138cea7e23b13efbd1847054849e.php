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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/BestEvidenceTest.php */
class __TwigTemplate_d5dfd5fafb3e63e70998990882052e7549ff9eccef4fb0f17ddad585cca66fc3 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncJudge\\Modes;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\BestEvidence;
use PHPUnit\\Framework\\TestCase;

class BestEvidenceTest extends TestCase
{
    public function testLeftWinnerWithCertainChangeDateTime(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:01:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$winner = BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);

        \$this->assertEquals(\$leftChangeRequest, \$winner);
    }

    public function testRightWinnerWithCertainChangeDateTime(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setCertainChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:01:00'));

        \$winner = BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);

        \$this->assertEquals(\$rightChangeRequest, \$winner);
    }

    public function testLeftWinnerWithPossibleChangeDateTime(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:01:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$winner = BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);

        \$this->assertEquals(\$leftChangeRequest, \$winner);
    }

    public function testRightWinnerWithPossibleChangeDateTime(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:01:00'));

        \$winner = BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);

        \$this->assertEquals(\$rightChangeRequest, \$winner);
    }

    public function testUnresolvedConflictExceptionThrownIfEqual(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$this->expectException(ConflictUnresolvedException::class);
        BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
    }

    public function testUnresolvedConflictExceptionThrownWhenLeftPossibleChangeDateTimeIsNull(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$rightChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$this->expectException(ConflictUnresolvedException::class);
        BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
    }

    public function testUnresolvedConflictExceptionThrownWhenRightPossibleChangeDateTimeIsNull(): void
    {
        \$leftChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );
        \$leftChangeRequest->setPossibleChangeDateTime(new \\DateTimeImmutable('2018-10-08 00:00:00'));

        \$rightChangeRequest = new InformationChangeRequestDAO(
            'Test',
            'Object',
            1,
            'field',
            new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'test')
        );

        \$this->expectException(ConflictUnresolvedException::class);
        BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/BestEvidenceTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/BestEvidenceTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncJudge/Modes/BestEvidenceTest.php");
    }
}
