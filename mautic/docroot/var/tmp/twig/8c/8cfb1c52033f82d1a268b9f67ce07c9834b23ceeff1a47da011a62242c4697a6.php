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

/* @bundles/CampaignBundle/Tests/Event/PendingEventTest.php */
class __TwigTemplate_49389e899e320ef1fada22e7d3a08c6f10ac3bc1db3c5c8d97d2ee4fd372cddc extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Event;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class PendingEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testFailAndPassRemainingWithError(): void
    {
        \$event    = new Event();
        \$contact  = new Lead();
        \$logA     = new LeadEventLog();
        \$logB     = new LeadEventLog();
        \$interval = new \\DateInterval('PT10M');

        \$logA->setLead(\$contact); // Will fail.
        \$logB->setLead(\$contact); // Will pass with error.

        \$pendingEvent = new PendingEvent(new ActionAccessor([]), \$event, new ArrayCollection([\$logA, \$logB]));

        \$pendingEvent->fail(\$logA, 'reason A', \$interval);
        \$pendingEvent->passRemainingWithError('Error B');

        \$failedLogs  = \$pendingEvent->getFailures();
        \$successLogs = \$pendingEvent->getSuccessful();

        Assert::assertCount(1, \$failedLogs);
        Assert::assertCount(1, \$successLogs);
        Assert::AssertSame(\$logA, \$failedLogs->current());
        Assert::AssertSame(\$logB, \$successLogs->current());
        Assert::AssertSame(\$interval, \$logA->getRescheduleInterval());
        Assert::AssertSame(['failed' => 1, 'reason' => 'reason A'], \$logA->getMetadata());
        Assert::AssertSame(['failed' => 1, 'reason' => 'Error B'], \$logB->getMetadata());
        Assert::AssertNull(\$logB->getRescheduleInterval());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Event/PendingEventTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Event/PendingEventTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Event/PendingEventTest.php");
    }
}
