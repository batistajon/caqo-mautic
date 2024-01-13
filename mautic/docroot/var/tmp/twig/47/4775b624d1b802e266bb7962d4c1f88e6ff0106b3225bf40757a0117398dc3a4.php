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

/* @bundles/WebhookBundle/Entity/WebhookQueue.php */
class __TwigTemplate_3b4c8545b59865a6e5be14eb13274ba0780ceec1e5df4470ab73b99fd50eac05 extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Doctrine\\DBAL\\Types\\Type;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class WebhookQueue.
 */
class WebhookQueue
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Webhook
     */
    private \$webhook;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    /**
     * @var string
     */
    private \$payload;

    /**
     * @var Event
     **/
    private \$event;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('webhook_queue')
            ->setCustomRepositoryClass(WebhookQueueRepository::class);
        \$builder->addId();
        \$builder->createManyToOne('webhook', 'Webhook')
            ->addJoinColumn('webhook_id', 'id', false, false, 'CASCADE')
            ->build();
        \$builder->addNullableField('dateAdded', Type::DATETIME, 'date_added');
        \$builder->addField('payload', Type::TEXT);
        \$builder->createManyToOne('event', 'Event')
            ->inversedBy('queues')
            ->addJoinColumn('event_id', 'id', false, false, 'CASCADE')
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return mixed
     */
    public function getWebhook()
    {
        return \$this->webhook;
    }

    /**
     * @param mixed \$webhook
     */
    public function setWebhook(\$webhook)
    {
        \$this->webhook = \$webhook;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param mixed \$dateAdded
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return \$this->payload;
    }

    /**
     * @param mixed \$payload
     */
    public function setPayload(\$payload)
    {
        \$this->payload = \$payload;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return \$this->event;
    }

    /**
     * @param mixed \$event
     */
    public function setEvent(\$event)
    {
        \$this->event = \$event;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Entity/WebhookQueue.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookQueue.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Entity/WebhookQueue.php");
    }
}
