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

/* @bundles/SmsBundle/Event/ReplyEvent.php */
class __TwigTemplate_9c7dc3fdcaaf2bed66257dcc8aa3650411e97b54e7f476205f2f7197ce63f0c5 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Response;

class ReplyEvent extends Event
{
    /**
     * @var Lead
     */
    private \$contact;

    /**
     * @var string
     */
    private \$message;

    /**
     * @var Response|null
     */
    private \$response;

    /**
     * ReplyEvent constructor.
     *
     * @param string \$message
     */
    public function __construct(Lead \$contact, \$message)
    {
        \$this->contact = \$contact;
        \$this->message = \$message;
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return \$this->contact;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    public function setResponse(Response \$response)
    {
        \$this->response = \$response;
    }

    /**
     * @return Response|null
     */
    public function getResponse()
    {
        return \$this->response;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Event/ReplyEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/ReplyEvent.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Event/ReplyEvent.php");
    }
}
