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

/* @bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php */
class __TwigTemplate_705a7d9a2f5203cdd5114283f3ab702e7c5a0a8515f80fb2bc02da3bf86208a5 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\Helper\\ChannelExtractor;

class ChannelExtractorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testChannelIsSet()
    {
        \$event  = new Event();
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
    }

    public function testChannelIsIgnoredIfSet()
    {
        \$event  = new Event();
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->never())
            ->method('getChannel');

        \$log = new LeadEventLog();
        \$log->setChannel('page');
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('page', \$log->getChannel());
    }

    public function testChannelIdIsSet()
    {
        \$event = new Event();
        \$event->setProperties(['email' => 1]);
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$config->expects(\$this->once())
            ->method('getChannelIdField')
            ->willReturn('email');

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
        \$this->assertEquals(1, \$log->getChannelId());
    }

    public function testChannelIdIsIgnoredIfPropertiesAreEmpty()
    {
        \$event = new Event();
        \$event->setProperties(null);
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$config->expects(\$this->once())
            ->method('getChannelIdField')
            ->willReturn('email');

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
        \$this->assertEquals(null, \$log->getChannelId());
    }

    public function testChannelIdIsIgnoredIfChannelIdFieldIsNotSet()
    {
        \$event = new Event();
        \$event->setProperties(['email' => 1]);
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$config->expects(\$this->once())
            ->method('getChannelIdField')
            ->willReturn(null);

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
        \$this->assertEquals(null, \$log->getChannelId());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php");
    }
}
