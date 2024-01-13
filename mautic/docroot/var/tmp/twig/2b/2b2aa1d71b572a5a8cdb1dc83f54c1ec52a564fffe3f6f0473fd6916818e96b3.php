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

/* @bundles/WebhookBundle/Entity/Log.php */
class __TwigTemplate_b807fa47281a579569a54adcee5dd7d0691d08dadf6ef26e0d79299ae1c50c4b extends Template
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
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class Log.
 */
class Log
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
     * @var string
     */
    private \$statusCode;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    /**
     * @var float
     */
    private \$runtime;

    /**
     * @var string
     */
    private \$note;

    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('webhook_logs')
            ->setCustomRepositoryClass(LogRepository::class)
            ->addId();

        \$builder->createManyToOne('webhook', 'Webhook')
            ->inversedBy('logs')
            ->addJoinColumn('webhook_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('statusCode', Type::STRING)
            ->columnName('status_code')
            ->length(50)
            ->build();

        \$builder->addNullableField('dateAdded', Type::DATETIME, 'date_added');
        \$builder->addNullableField('note', Type::STRING);
        \$builder->addNullableField('runtime', Type::FLOAT);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->webhook;
    }

    /**
     * @return Log
     */
    public function setWebhook(Webhook \$webhook)
    {
        \$this->webhook = \$webhook;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    /**
     * @param mixed \$statusCode
     *
     * @return Log
     */
    public function setStatusCode(\$statusCode)
    {
        \$this->statusCode = \$statusCode;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @return Log
     */
    public function setDateAdded(\\DateTime \$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return \$this->note;
    }

    /**
     * Strips tags and keeps first 191 characters so it would fit in the varchar 191 limit.
     *
     * @param string \$note
     *
     * @return Log
     */
    public function setNote(\$note)
    {
        \$this->note = substr(strip_tags(iconv('UTF-8', 'UTF-8//IGNORE', \$note)), 0, 190);

        return \$this;
    }

    /**
     * @return float
     */
    public function getRuntime()
    {
        return \$this->runtime;
    }

    /**
     * @param float \$runtime
     *
     * @return Log
     */
    public function setRuntime(\$runtime)
    {
        \$this->runtime = round(\$runtime, 2);

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
        return "@bundles/WebhookBundle/Entity/Log.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/Log.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Entity/Log.php");
    }
}
