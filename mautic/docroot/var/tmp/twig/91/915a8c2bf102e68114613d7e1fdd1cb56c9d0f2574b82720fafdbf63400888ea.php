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

/* @bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php */
class __TwigTemplate_0aba224ea957d612850433b89b393d02f03e08a8a8f9e7f0834bec3c7f889be2 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ChannelSubscriptionChange;

/**
 * Class ChannelSubscriptionChangeTest.
 */
class ChannelSubscriptionChangeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Tests that getters returns same values as the contstruct
     */
    public function testGetterReturnConstruct()
    {
        \$lead      = new Lead();
        \$channel   = 'email';
        \$oldStatus = DoNotContact::IS_CONTACTABLE;
        \$newStatus = DoNotContact::UNSUBSCRIBED;

        \$event = new ChannelSubscriptionChange(\$lead, \$channel, \$oldStatus, \$newStatus);

        \$this->assertEquals(\$lead, \$event->getLead());
        \$this->assertEquals(\$channel, \$event->getChannel());
        \$this->assertEquals(\$oldStatus, \$event->getOldStatus());
        \$this->assertEquals(\$newStatus, \$event->getNewStatus());
        \$this->assertEquals('contactable', \$event->getOldStatusVerb());
        \$this->assertEquals('unsubscribed', \$event->getNewStatusVerb());
    }

    /**
     * @testdox Test that the default verb is unsubscribed if not recongized
     */
    public function testGetStatusVerbReturnsUnsubscribedForUnrecognized()
    {
        \$lead      = new Lead();
        \$channel   = 'email';
        \$oldStatus = DoNotContact::IS_CONTACTABLE;

        \$event = new ChannelSubscriptionChange(\$lead, \$channel, \$oldStatus, 'foobar');

        \$this->assertEquals('unsubscribed', \$event->getNewStatusVerb());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php");
    }
}
