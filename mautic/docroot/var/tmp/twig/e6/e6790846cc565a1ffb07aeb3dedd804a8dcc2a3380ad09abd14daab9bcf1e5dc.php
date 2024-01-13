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

/* @bundles/QueueBundle/Event/QueueConsumerEvent.php */
class __TwigTemplate_9d02a696e2788f393cbde459c013ea3466f85a2d2951908ac4f4d748ab319191 extends Template
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

namespace Mautic\\QueueBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\QueueBundle\\Queue\\QueueConsumerResults;

/**
 * Class QueueConsumerEvent.
 */
class QueueConsumerEvent extends CommonEvent
{
    /**
     * @var array
     */
    private \$payload;

    /**
     * @var string
     */
    private \$result;

    public function __construct(\$payload = [])
    {
        \$this->payload = \$payload;
        \$this->result  = QueueConsumerResults::DO_NOT_ACKNOWLEDGE;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return \$this->payload;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return \$this->result;
    }

    /**
     * @param string \$result
     */
    public function setResult(\$result)
    {
        \$this->result = \$result;
    }

    /**
     * Checks if the event is for specific transport.
     *
     * @param string \$transport
     *
     * @return bool
     */
    public function checkTransport(\$transport)
    {
        return isset(\$this->payload['transport']) && \$this->payload['transport'] === \$transport;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Event/QueueConsumerEvent.php";
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
        return new Source("", "@bundles/QueueBundle/Event/QueueConsumerEvent.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Event/QueueConsumerEvent.php");
    }
}
