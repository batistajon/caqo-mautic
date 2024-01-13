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

/* @bundles/EmailBundle/Event/QueueEmailEvent.php */
class __TwigTemplate_239c6bc8a13f19af2f59363e11b4ec472559e153b1e42db66137c37d446ee894 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class QueueEmailEvent.
 */
class QueueEmailEvent extends Event
{
    /**
     * @var \\Swift_Message
     */
    private \$message;

    /**
     * @var bool
     */
    private \$retry = false;

    public function __construct(\\Swift_Message \$message)
    {
        \$this->message = \$message;
    }

    /**
     * @return \\Swift_Message
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Sets whether the sending of the message should be tried again.
     */
    public function tryAgain()
    {
        \$this->retry = true;
    }

    /**
     * @return bool
     */
    public function shouldTryAgain()
    {
        return \$this->retry;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/QueueEmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/QueueEmailEvent.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Event/QueueEmailEvent.php");
    }
}
