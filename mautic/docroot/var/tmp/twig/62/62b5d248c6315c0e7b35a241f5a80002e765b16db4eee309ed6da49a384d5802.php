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

/* @bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php */
class __TwigTemplate_0fb4b4b9f619fe5ba7c33e8ca8ca460c1d4e356dab4702960aaf58b1bad6d835 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Command;

class ValidateEventCommandTest extends AbstractCampaignCommand
{
    public function testEventsAreExecutedForInactiveEventWithSingleContact()
    {
        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-id' => 1]);

        // Wait 6 seconds then execute the campaign again to send scheduled events
        sleep(6);
        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-id' => 1]);

        // No open email decisions should be recorded yet
        \$byEvent = \$this->getCampaignEventLogs([3]);
        \$this->assertCount(0, \$byEvent[3]);

        // Wait 6 seconds to go beyond the inaction timeframe
        sleep(6);

        // Now they should be inactive
        \$this->runCommand('mautic:campaigns:validate', ['--decision-id' => 3, '--contact-id' => 1]);

        \$byEvent = \$this->getCampaignEventLogs([3, 7, 10]);
        \$this->assertCount(1, \$byEvent[3]); // decision recorded
        \$this->assertCount(1, \$byEvent[7]); // inactive event executed
        \$this->assertCount(0, \$byEvent[10]); // the positive path should be 0
    }

    public function testEventsAreExecutedForInactiveEventWithMultipleContact()
    {
        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // Wait 6 seconds then execute the campaign again to send scheduled events
        sleep(6);
        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // No open email decisions should be recorded yet
        \$byEvent = \$this->getCampaignEventLogs([3]);
        \$this->assertCount(0, \$byEvent[3]);

        // Wait 6 seconds to go beyond the inaction timeframe
        sleep(6);

        // Now they should be inactive
        \$this->runCommand('mautic:campaigns:validate', ['--decision-id' => 3, '--contact-ids' => '1,2,3']);

        \$byEvent = \$this->getCampaignEventLogs([3, 7, 10]);
        \$this->assertCount(3, \$byEvent[3]); // decision recorded
        \$this->assertCount(3, \$byEvent[7]); // inactive event executed
        \$this->assertCount(0, \$byEvent[10]); // the positive path should be 0
    }

    public function testContactsRemovedFromTheCampaignAreNotExecutedForInactiveEvents()
    {
        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // Wait 6 seconds then execute the campaign again to send scheduled events
        sleep(6);
        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // No open email decisions should be recorded yet
        \$byEvent = \$this->getCampaignEventLogs([3]);
        \$this->assertCount(0, \$byEvent[3]);

        // Wait 6 seconds to go beyond the inaction timeframe
        sleep(6);

        // Remove a contact from the campaign
        \$this->db->createQueryBuilder()->update(MAUTIC_TABLE_PREFIX.'campaign_leads')
            ->set('manually_removed', 1)
            ->where('lead_id = 1')
            ->execute();

        // Now they should be inactive
        \$this->runCommand('mautic:campaigns:validate', ['--decision-id' => 3, '--contact-ids' => '1,2,3']);

        // Only two contacts should have been considered inactive because one was marked as manually removed
        \$byEvent = \$this->getCampaignEventLogs([3, 7, 10]);
        \$this->assertCount(2, \$byEvent[3]); // decision recorded
        \$this->assertCount(2, \$byEvent[7]); // inactive event executed
        \$this->assertCount(0, \$byEvent[10]); // the positive path should be 0
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php");
    }
}
