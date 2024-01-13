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

/* @bundles/ChannelBundle/EventListener/MessageSubscriber.php */
class __TwigTemplate_d318b58a412a92a786c864fc38fcde7baae4452271699c4d9e47a0cf91dddc83 extends Template
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

namespace Mautic\\ChannelBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\MessageEvent;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class MessageSubscriber implements EventSubscriberInterface
{
    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    public function __construct(
        AuditLogModel \$auditLogModel
    ) {
        \$this->auditLogModel = \$auditLogModel;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            ChannelEvents::MESSAGE_POST_SAVE   => ['onPostSave', 0],
            ChannelEvents::MESSAGE_POST_DELETE => ['onDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onPostSave(MessageEvent \$event)
    {
        \$entity = \$event->getMessage();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'   => 'channel',
                'object'   => 'message',
                'objectId' => \$entity->getId(),
                'action'   => (\$event->isNew()) ? 'create' : 'update',
                'details'  => \$details,
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onDelete(MessageEvent \$event)
    {
        \$entity = \$event->getMessage();
        \$log    = [
            'bundle'   => 'channel',
            'object'   => 'message',
            'objectId' => \$entity->deletedId,
            'action'   => 'delete',
            'details'  => ['name' => \$entity->getName()],
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/EventListener/MessageSubscriber.php";
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
        return new Source("", "@bundles/ChannelBundle/EventListener/MessageSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/EventListener/MessageSubscriber.php");
    }
}
