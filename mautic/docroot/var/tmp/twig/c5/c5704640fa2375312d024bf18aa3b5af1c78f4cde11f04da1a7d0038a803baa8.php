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

/* @bundles/QueueBundle/QueueEvents.php */
class __TwigTemplate_4336eb7972eb7eeda5f7d1a4ccc82223e6fc6c2c45fd3ce8451bed485eaa541a extends Template
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

namespace Mautic\\QueueBundle;

/**
 * Class MauticQueueEvents
 * Events available for MauticQueueBundle.
 */
final class QueueEvents
{
    const CONSUME_MESSAGE = 'mautic.queue_consume_message';

    const PUBLISH_MESSAGE = 'mautic.queue_publish_message';

    const EMAIL_HIT = 'mautic.queue_email_hit';

    const PAGE_HIT = 'mautic.queue_page_hit';

    const TRANSPORT_WEBHOOK = 'mautic.queue_transport_webhook';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/QueueEvents.php";
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
        return new Source("", "@bundles/QueueBundle/QueueEvents.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/QueueEvents.php");
    }
}
