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

/* @bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php */
class __TwigTemplate_4560cbde74cfb686a30567bc9e8ed45fc7d499e19460445c0bc2e85088428ad4 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\DoNotContactAddEvent;
use Mautic\\LeadBundle\\Event\\DoNotContactRemoveEvent;
use Mautic\\LeadBundle\\EventListener\\DoNotContactSubscriber;
use Mautic\\LeadBundle\\Model\\DoNotContact;

class DoNotContactSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$doNotContactSubscriber;

    private \$doNotContact;

    protected function setUp(): void
    {
        \$this->doNotContact               = \$this->createMock(DoNotContact::class);
        \$this->doNotContactSubscriber     = new DoNotContactSubscriber(\$this->doNotContact);
    }

    public function testGetSubscribedEvents()
    {
        \$this->assertEquals(
            [
                DoNotContactAddEvent::ADD_DONOT_CONTACT       => ['addDncForLead', 0],
                DoNotContactRemoveEvent::REMOVE_DONOT_CONTACT => ['removeDncForLead', 0],
            ],
            \$this->doNotContactSubscriber->getSubscribedEvents()
        );
    }

    public function testAddDncForLeadForNewContacts()
    {
        \$lead              = new Lead();
        \$doNotContactEvent = new DoNotContactAddEvent(\$lead, 'email');

        \$this->doNotContact->expects(\$this->once())->method('createDncRecord');
        \$this->doNotContact->expects(\$this->never())->method('addDncForContact');

        \$this->doNotContactSubscriber->addDncForLead(\$doNotContactEvent);
    }

    public function testAddDncForLeadForExistedContacts()
    {
        \$lead = new Lead();
        \$lead->setId(1);
        \$doNotContactEvent = new DoNotContactAddEvent(\$lead, 'email');

        \$this->doNotContact->expects(\$this->never())->method('createDncRecord');
        \$this->doNotContact->expects(\$this->once())->method('addDncForContact');

        \$this->doNotContactSubscriber->addDncForLead(\$doNotContactEvent);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php");
    }
}
