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

/* @bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php */
class __TwigTemplate_65b2ff2037c9fb2683bebe00ec921901401919bdcabea82ce1e5ea24b639023f extends Template
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

namespace Mautic\\ChannelBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

class MessageQueueBatchProcessEvent extends Event
{
    private \$messages = [];

    private \$channel;

    private \$channelId;

    /**
     * MessageQueueBatchProcessEvent constructor.
     *
     * @param \$channel
     * @param \$channelId
     */
    public function __construct(array \$messages, \$channel, \$channelId)
    {
        \$this->messages  = \$messages;
        \$this->channel   = \$channel;
        \$this->channelId = \$channelId;
    }

    /**
     * @param \$channel
     *
     * @return bool
     */
    public function checkContext(\$channel)
    {
        return \$channel === \$this->channel;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return \$this->channelId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php");
    }
}
