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

/* @bundles/ApiBundle/Event/ClientEvent.php */
class __TwigTemplate_f3210a8a303485b82f75b1517302d54777cd7212e938e2a9bf41ad75e3298686 extends Template
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

namespace Mautic\\ApiBundle\\Event;

use Mautic\\ApiBundle\\Entity\\oAuth2\\Client;
use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class ClientEvent.
 */
class ClientEvent extends CommonEvent
{
    private string \$apiMode;

    public function __construct(Client \$client, \$isNew = false)
    {
        \$this->apiMode = 'oauth2';
        \$this->entity  = \$client;
        \$this->isNew   = \$isNew;
    }

    /**
     * Returns the Client entity.
     *
     * @return Client
     */
    public function getClient()
    {
        return \$this->entity;
    }

    /**
     * Returns the api mode.
     *
     * @return string
     */
    public function getApiMode()
    {
        return \$this->apiMode;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Event/ClientEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ClientEvent.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Event/ClientEvent.php");
    }
}
