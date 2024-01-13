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

/* @bundles/CampaignBundle/Tests/Command/ExecuteEventCommandTest.php */
class __TwigTemplate_581d8cfc656eb8037ec9af2e685fa6d2949275178bdaa4609e62275f63125e48 extends Template
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

class ExecuteEventCommandTest extends AbstractCampaignCommand
{
    public function testEventsAreExecutedForInactiveEventWithSingleContact()
    {
        putenv('CAMPAIGN_EXECUTIONER_SCHEDULER_ACKNOWLEDGE_SECONDS=1');

        \$this->runCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // There should be two events scheduled
        \$byEvent = \$this->getCampaignEventLogs([2]);
        \$this->assertCount(3, \$byEvent[2]);

        \$logIds = [];
        foreach (\$byEvent[2] as \$log) {
            if (0 === (int) \$log['is_scheduled']) {
                \$this->fail('Event is not scheduled for lead ID '.\$log['lead_id']);
            }

            \$logIds[] = \$log['id'];
        }

        \$this->runCommand('mautic:campaigns:execute', ['--scheduled-log-ids' => implode(',', \$logIds)]);

        // There should still be trhee events scheduled
        \$byEvent = \$this->getCampaignEventLogs([2]);
        \$this->assertCount(3, \$byEvent[2]);

        foreach (\$byEvent[2] as \$log) {
            if (0 === (int) \$log['is_scheduled']) {
                \$this->fail('Event is not scheduled for lead ID '.\$log['lead_id']);
            }
        }

        // Pop off the last so we can test that only the two given are executed
        \$lastId = array_pop(\$logIds);

        // Wait 6 seconds to go past scheduled time
        sleep(6);

        \$this->runCommand('mautic:campaigns:execute', ['--scheduled-log-ids' => implode(',', \$logIds)]);

        // The events should have executed
        \$byEvent = \$this->getCampaignEventLogs([2]);
        \$this->assertCount(3, \$byEvent[2]);

        foreach (\$byEvent[2] as \$log) {
            // Lasta
            if (\$log['id'] === \$lastId) {
                if (0 === (int) \$log['is_scheduled']) {
                    \$this->fail('Event is not scheduled when it should be for lead ID '.\$log['lead_id']);
                }

                continue;
            }

            if (1 === (int) \$log['is_scheduled']) {
                \$this->fail('Event is still scheduled for lead ID '.\$log['lead_id']);
            }
        }

        putenv('CAMPAIGN_EXECUTIONER_SCHEDULER_ACKNOWLEDGE_SECONDS=0');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Command/ExecuteEventCommandTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Command/ExecuteEventCommandTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Command/ExecuteEventCommandTest.php");
    }
}
