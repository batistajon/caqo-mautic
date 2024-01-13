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

/* @bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php */
class __TwigTemplate_c68c50d058bbefcb6b138f21dd0b81125125e8df9c0e36f2a0c744fda23191cb extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\PreferenceBuilder;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\ChannelBundle\\PreferenceBuilder\\ChannelPreferences;

class ChannelPreferencesTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testLogsAreOrganizedByPriority()
    {
        \$campaign = new Campaign();
        \$event    = new Event();
        \$event->setCampaign(\$campaign);

        \$channelPreferences = \$this->getChannelPreference('email', \$event);

        \$log1 = new LeadEventLog();
        \$log1->setEvent(\$event);
        \$log1->setCampaign(\$campaign);
        \$log1->setMetadata(['log' => 1]);
        \$channelPreferences->addLog(\$log1, 1);

        \$log2 = new LeadEventLog();
        \$log2->setEvent(\$event);
        \$log2->setCampaign(\$campaign);
        \$log2->setMetadata(['log' => 2]);
        \$channelPreferences->addLog(\$log2, 2);

        \$organized = \$channelPreferences->getLogsByPriority(1);
        \$this->assertEquals(\$organized->first()->getMetadata()['log'], 1);

        \$organized = \$channelPreferences->getLogsByPriority(2);
        \$this->assertEquals(\$organized->first()->getMetadata()['log'], 2);
    }

    /**
     * @param \$channel
     *
     * @return ChannelPreferences
     */
    private function getChannelPreference(\$channel, Event \$event)
    {
        return new ChannelPreferences(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php");
    }
}
