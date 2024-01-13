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

/* @bundles/ChannelBundle/Event/MessageQueueProcessEvent.php */
class __TwigTemplate_8a4b5b44810ccf13f65dcade27028a24710bd18ec680dd5c299c342b4d4154f0 extends Template
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

use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class MessageQueueProcessEvent extends CommonEvent
{
    /**
     * MessageQueueEvent constructor.
     */
    public function __construct(MessageQueue \$entity)
    {
        \$this->entity = \$entity;
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue()
    {
        return \$this->entity;
    }

    /**
     * @param \$channel
     *
     * @return bool
     */
    public function checkContext(\$channel)
    {
        return \$channel === \$this->entity->getChannel();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/MessageQueueProcessEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueProcessEvent.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Event/MessageQueueProcessEvent.php");
    }
}
