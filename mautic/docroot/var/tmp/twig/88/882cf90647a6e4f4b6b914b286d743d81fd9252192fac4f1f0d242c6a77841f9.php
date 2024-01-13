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

/* @bundles/WebhookBundle/Event/WebhookEvent.php */
class __TwigTemplate_cd61986324d8195f6a3220fbbaed6e3532add67b6b03b6e990cd40bfd69b143a extends Template
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

namespace Mautic\\WebhookBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\WebhookBundle\\Entity\\Webhook;

/**
 * Class WebhookEvent.
 */
class WebhookEvent extends CommonEvent
{
    /**
     * @var Webhook
     */
    protected \$entity;

    /**
     * @var bool
     */
    protected \$isNew = false;

    /**
     * @var string
     */
    private \$reason = '';

    /**
     * @param bool \$isNew
     */
    public function __construct(Webhook \$webhook, \$isNew = false, \$reason = '')
    {
        \$this->entity = \$webhook;
        \$this->isNew  = \$isNew;
        \$this->reason = \$reason;
    }

    /**
     * Returns the Webhook entity.
     *
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->entity;
    }

    /**
     * Sets the Webhook entity.
     */
    public function setWebhook(Webhook \$webhook)
    {
        \$this->entity = \$webhook;
    }

    /**
     * @param \$reason
     */
    public function setReason(\$reason)
    {
        \$this->reason = \$reason;
    }

    public function getReason(): string
    {
        return \$this->reason;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Event/WebhookEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookEvent.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Event/WebhookEvent.php");
    }
}
