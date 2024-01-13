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

/* @bundles/QueueBundle/Event/QueueEvent.php */
class __TwigTemplate_e5b07e18e6975a633065382e60752e0b6764ac0cf9703e531cc5918c041e223c extends Template
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

/**
 * Class QueueEvent.
 */
class QueueEvent extends CommonEvent
{
    /**
     * @var int|null
     */
    private \$messages;

    /**
     * @var array
     */
    private \$payload;

    /**
     * @var string
     */
    private \$protocol;

    /**
     * @var string
     */
    private \$queueName;

    /**
     * @var int|null
     */
    private \$timeout;

    /**
     * QueueEvent constructor.
     *
     * @param string   \$protocol
     * @param string   \$queueName
     * @param int|null \$messages
     * @param int|null \$timeout
     */
    public function __construct(\$protocol, \$queueName, array \$payload = [], \$messages = null, \$timeout = null)
    {
        \$this->messages  = \$messages;
        \$this->payload   = \$payload;
        \$this->protocol  = \$protocol;
        \$this->queueName = \$queueName;
        \$this->timeout   = \$timeout;
    }

    /**
     * @return int|null
     */
    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * @return string|array
     */
    public function getPayload(\$returnArray = false)
    {
        return (\$returnArray) ? \$this->payload : json_encode(\$this->payload);
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return \$this->protocol;
    }

    /**
     * @return string
     */
    public function getQueueName()
    {
        return \$this->queueName;
    }

    /**
     * @return int|null
     */
    public function getTimeout()
    {
        return \$this->timeout;
    }

    /**
     * @param string \$protocol
     *
     * @return bool
     */
    public function checkContext(\$protocol)
    {
        return \$protocol == \$this->protocol;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Event/QueueEvent.php";
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
        return new Source("", "@bundles/QueueBundle/Event/QueueEvent.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Event/QueueEvent.php");
    }
}
