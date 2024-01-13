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

/* @bundles/QueueBundle/Tests/Event/QueueConsumerEventTest.php */
class __TwigTemplate_70231bae7eb8babcfc3bc2e05f396ee42c1e2f6ad86710111f3449475f7c5a41 extends Template
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

namespace Mautic\\QueueBundle\\Tests\\Event;

use Mautic\\QueueBundle\\Event\\QueueConsumerEvent;

class QueueConsumerEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCheckTransportIfNoTransport()
    {
        \$queueConsumerEvent = new QueueConsumerEvent();
        \$this->assertEquals(false, \$queueConsumerEvent->checkTransport('transportName'));
    }

    public function testCheckTransportIfWrongTransport()
    {
        \$queueConsumerEvent = new QueueConsumerEvent(['transport' => 'wrongTransportName']);
        \$this->assertEquals(false, \$queueConsumerEvent->checkTransport('transportName'));
    }

    public function testCheckTransportIfCorrectTransport()
    {
        \$queueConsumerEvent = new QueueConsumerEvent(['transport' => 'transportName']);
        \$this->assertEquals(true, \$queueConsumerEvent->checkTransport('transportName'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Tests/Event/QueueConsumerEventTest.php";
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
        return new Source("", "@bundles/QueueBundle/Tests/Event/QueueConsumerEventTest.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Tests/Event/QueueConsumerEventTest.php");
    }
}
