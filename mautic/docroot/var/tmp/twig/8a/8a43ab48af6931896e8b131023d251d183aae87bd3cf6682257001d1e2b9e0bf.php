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

/* @bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php */
class __TwigTemplate_81d33c3cca4ae80fa80072b612222ff55a8300b657ce714203f9b20bb12eeefa extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Functional\\Entity;

use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class LeadEventLogRepositoryTest extends MauticMysqlTestCase
{
    public function testThatRemoveEventLogsMethodRemovesLogs(): void
    {
        \$eventId    = random_int(200, 2000);
        \$connection = \$this->em->getConnection();

        /** @var LeadEventLogRepository \$leadEventLogRepository */
        \$leadEventLogRepository = \$this->em->getRepository('MauticCampaignBundle:LeadEventLog');

        \$insertStatement = \$connection->prepare('INSERT INTO `'.MAUTIC_TABLE_PREFIX.'campaign_lead_event_log` (`event_id`, `lead_id`, `rotation`, `is_scheduled`, `system_triggered`) VALUES (?, ?, ?, ?, ?);');

        \$connection->query('SET FOREIGN_KEY_CHECKS=0;');
        foreach (\$this->getLeadCampaignEventData(\$eventId) as \$row) {
            \$insertStatement->execute(\$row);
        }
        \$connection->query('SET FOREIGN_KEY_CHECKS=1;');

        Assert::assertCount(3, \$leadEventLogRepository->findAll());

        \$leadEventLogRepository->removeEventLogs(\$eventId);

        Assert::assertCount(0, \$leadEventLogRepository->findAll());
    }

    private function getLeadCampaignEventData(int \$eventId): array
    {
        return [
            [\$eventId, 100, 200, 1, 1],
            [\$eventId, 101, 201, 1, 1],
            [\$eventId, 102, 202, 1, 1],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php");
    }
}
