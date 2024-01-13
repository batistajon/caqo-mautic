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

/* @bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php */
class __TwigTemplate_2c53708795b30ff53ddd179024d7fa2e4a662aae42e7c7f53168ee0c5709edd8 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Membership;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\CampaignBundle\\Membership\\Action\\Adder;
use Mautic\\CampaignBundle\\Membership\\EventDispatcher;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class EventDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$eventDispatcher;

    protected function setUp(): void
    {
        \$this->eventDispatcher = \$this->createMock(EventDispatcherInterface::class);
    }

    public function testLeadChangeEventDispatched()
    {
        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(CampaignEvents::CAMPAIGN_ON_LEADCHANGE, \$this->isInstanceOf(CampaignLeadChangeEvent::class));

        \$this->getDispatcher()->dispatchMembershipChange(new Lead(), new Campaign(), Adder::NAME);
    }

    public function testBatchChangeEventDispatched()
    {
        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE, \$this->isInstanceOf(CampaignLeadChangeEvent::class));

        \$this->getDispatcher()->dispatchBatchMembershipChange([new Lead()], new Campaign(), Adder::NAME);
    }

    private function getDispatcher()
    {
        return new EventDispatcher(\$this->eventDispatcher);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php");
    }
}
