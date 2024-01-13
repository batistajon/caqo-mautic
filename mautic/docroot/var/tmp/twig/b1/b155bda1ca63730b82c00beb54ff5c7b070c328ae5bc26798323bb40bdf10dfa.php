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

/* @bundles/WebhookBundle/Event/WebhookRequestEvent.php */
class __TwigTemplate_a31da8bd3d00bee7339a4cd408884a8c944eabb67d4ff6354d5349051109f015 extends Template
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

declare(strict_types=1);

namespace Mautic\\WebhookBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

class WebhookRequestEvent extends Event
{
    /**
     * @var string
     */
    private \$url;

    /**
     * @var array
     */
    private \$headers;

    /**
     * @var array
     */
    private \$payload;

    /**
     * @var Lead
     */
    private \$contact;

    public function __construct(Lead \$contact, string \$url, array \$headers, array \$payload)
    {
        \$this->url     = \$url;
        \$this->headers = \$headers;
        \$this->payload = \$payload;
        \$this->contact = \$contact;
    }

    public function getUrl(): string
    {
        return \$this->url;
    }

    public function setUrl(string \$url): void
    {
        \$this->url = \$url;
    }

    public function getHeaders(): array
    {
        return \$this->headers;
    }

    public function setHeaders(array \$headers): void
    {
        \$this->headers = \$headers;
    }

    public function getPayload(): array
    {
        return \$this->payload;
    }

    public function setPayload(array \$payload): void
    {
        \$this->payload = \$payload;
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Event/WebhookRequestEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookRequestEvent.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Event/WebhookRequestEvent.php");
    }
}
