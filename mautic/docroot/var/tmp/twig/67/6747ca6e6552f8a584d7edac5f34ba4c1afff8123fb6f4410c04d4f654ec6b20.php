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

/* @bundles/EmailBundle/Entity/EmailReply.php */
class __TwigTemplate_653ade5f9b598a9206f7abe1daa6ecfe3b8985a70902b4c240e8f4e15dd4ef56 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Ramsey\\Uuid\\Uuid;

class EmailReply
{
    /**
     * @var string
     */
    private \$id;

    /**
     * @var Stat
     */
    private \$stat;

    /**
     * @var \\DateTime
     */
    private \$dateReplied;

    /**
     * @var string
     */
    private \$messageId;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('email_stat_replies')
            ->setCustomRepositoryClass(EmailReplyRepository::class)
            ->addIndex(['stat_id', 'message_id'], 'email_replies')
            ->addIndex(['date_replied'], 'date_email_replied');

        \$builder->addUuid();

        \$builder->createManyToOne('stat', Stat::class)
            ->inversedBy('replies')
            ->addJoinColumn('stat_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('dateReplied', 'datetime')
            ->columnName('date_replied')
            ->build();

        \$builder->createField('messageId', 'string')
            ->columnName('message_id')
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('emailReply')
            ->addProperties(
                [
                    'uuid',
                    'dateReplied',
                    'messageId',
                ]
            )
            ->build();
    }

    /**
     * @param string \$messageId
     */
    public function __construct(Stat \$stat, \$messageId, \\DateTime \$dateReplied = null)
    {
        \$this->id          = Uuid::uuid4()->toString();
        \$this->stat        = \$stat;
        \$this->messageId   = \$messageId;
        \$this->dateReplied = (null === \$dateReplied) ? new \\DateTime() : \$dateReplied;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->stat;
    }

    /**
     * @return \\DateTime
     */
    public function getDateReplied()
    {
        return \$this->dateReplied;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return \$this->messageId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Entity/EmailReply.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/EmailReply.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Entity/EmailReply.php");
    }
}
