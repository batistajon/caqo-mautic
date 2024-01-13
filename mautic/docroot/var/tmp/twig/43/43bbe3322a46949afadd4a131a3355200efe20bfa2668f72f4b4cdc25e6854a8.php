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

/* @bundles/ChannelBundle/Event/MessageEvent.php */
class __TwigTemplate_5afd0794ee4379cf22ef80ebf537696936212c133c46167a15ad9e420722c1f4 extends Template
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

use Mautic\\ChannelBundle\\Entity\\Message;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class MessageEvent extends CommonEvent
{
    /**
     * MessageEvent constructor.
     *
     * @param bool \$isNew
     */
    public function __construct(Message \$message, \$isNew = false)
    {
        \$this->entity = \$message;
        \$this->isNew  = \$isNew;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return \$this->entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/MessageEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageEvent.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Event/MessageEvent.php");
    }
}
