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

/* @bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php */
class __TwigTemplate_d4d9df26a934acf0e6271f7c4353d70cae519f6bb624e25319a64d2450ef6ce1 extends Template
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
use Mautic\\LeadBundle\\EventListener\\PointSubscriber;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Mautic\\PointBundle\\Event\\TriggerExecutedEvent;
use PHPUnit\\Framework\\MockObject\\MockObject;

class PointSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var LeadModel|MockObject
     */
    private \$leadModel;

    /**
     * @var PointSubscriber
     */
    private \$subscriber;

    protected function setUp(): void
    {
        \$this->leadModel  = \$this->createMock(LeadModel::class);
        \$this->subscriber = new PointSubscriber(\$this->leadModel);
    }

    public function testOnPointTriggerExecutedIfNotChangeTagsTyoe()
    {
        \$triggerEvent = new TriggerEvent();
        \$contact      = new Lead();
        \$triggerEvent->setType('unknown.type');

        \$this->leadModel->expects(\$this->never())
            ->method('modifyTags');

        \$this->subscriber->onTriggerExecute(new TriggerExecutedEvent(\$triggerEvent, \$contact));
    }

    public function testOnPointTriggerExecutedForChangeTagsTyoe()
    {
        \$triggerEvent = new TriggerEvent();
        \$contact      = new Lead();
        \$triggerEvent->setType('lead.changetags');
        \$triggerEvent->setProperties([
            'add_tags'    => ['tagA'],
            'remove_tags' => null,
        ]);

        \$this->leadModel->expects(\$this->once())
            ->method('modifyTags')
            ->with(\$contact, ['tagA'], []);

        \$this->subscriber->onTriggerExecute(new TriggerExecutedEvent(\$triggerEvent, \$contact));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php");
    }
}
