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

/* @bundles/NotificationBundle/Event/NotificationSendEvent.php */
class __TwigTemplate_c6b012d549addea1094094f3929d8325cef80d23d48f55021b103273afee2fda extends Template
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

namespace Mautic\\NotificationBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;

class NotificationSendEvent extends CommonEvent
{
    /**
     * @var string
     */
    protected \$message;

    protected \$heading;

    /**
     * @var Lead
     */
    protected \$lead;

    /**
     * @param string \$message
     */
    public function __construct(\$message, \$heading, Lead \$lead)
    {
        \$this->message = \$message;
        \$this->heading = \$heading;
        \$this->lead    = \$lead;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * @param string \$message
     */
    public function setMessage(\$message)
    {
        \$this->message = \$message;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return \$this->heading;
    }

    /**
     * @param mixed \$heading
     *
     * @return NotificationSendEvent
     */
    public function setHeading(\$heading)
    {
        \$this->heading = \$heading;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Event/NotificationSendEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/NotificationSendEvent.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Event/NotificationSendEvent.php");
    }
}
