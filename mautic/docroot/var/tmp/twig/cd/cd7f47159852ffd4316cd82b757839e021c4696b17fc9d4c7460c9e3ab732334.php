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

/* @bundles/ChannelBundle/Entity/Channel.php */
class __TwigTemplate_00bef38875230cb4022517a80a6d4c77984665652a06c9bd0e97e973859c35bd extends Template
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

namespace Mautic\\ChannelBundle\\Entity;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CommonEntity;

class Channel extends CommonEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$channel;

    /**
     * @var int
     */
    private \$channelId;

    /**
     * @var string
     */
    private \$channelName;

    /**
     * @var Message
     */
    private \$message;

    /**
     * @var array
     */
    private \$properties = [];

    /**
     * @var bool
     */
    private \$isEnabled = false;

    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('message_channels')
                ->addIndex(['channel', 'channel_id'], 'channel_entity_index')
                ->addIndex(['channel', 'is_enabled'], 'channel_enabled_index')
                ->addUniqueConstraint(['message_id', 'channel'], 'channel_index');

        \$builder
            ->addId()
            ->addField('channel', 'string')
            ->addNamedField('channelId', 'integer', 'channel_id', true)
            ->addField('properties', 'json_array')
            ->createField('isEnabled', 'boolean')
                ->columnName('is_enabled')
                ->build();

        \$builder->createManyToOne('message', Message::class, 'channels')
                ->addJoinColumn('message_id', 'id', false, false, 'CASCADE')
                ->inversedBy('channels')
                ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('messageChannel')
            ->addListProperties(
                [
                    'id',
                    'channel',
                    'channelId',
                    'channelName',
                    'isEnabled',
                ]
            )
            ->addProperties(
                [
                    'properties',
                    'message',
                ]
            )
            ->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @param string \$channel
     *
     * @return Channel
     */
    public function setChannel(\$channel)
    {
        \$this->channel = \$channel;

        return \$this;
    }

    /**
     * @return int
     */
    public function getChannelId()
    {
        return \$this->channelId;
    }

    /**
     * @param int \$channelId
     *
     * @return Channel
     */
    public function setChannelId(\$channelId)
    {
        if (empty(\$channelId)) {
            \$channelId = null;
        }

        \$this->channelId = \$channelId;

        return \$this;
    }

    /**
     * @return string
     */
    public function getChannelName()
    {
        return \$this->channelName;
    }

    /**
     * @param string \$channelName
     *
     * @return Channel
     */
    public function setChannelName(\$channelName)
    {
        \$this->channelName = \$channelName;

        return \$this;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * @return Channel
     */
    public function setMessage(Message \$message)
    {
        \$this->message = \$message;

        return \$this;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return \$this->properties;
    }

    /**
     * @return Channel
     */
    public function setProperties(array \$properties)
    {
        \$this->properties = \$properties;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return \$this->isEnabled;
    }

    /**
     * @param bool \$isEnabled
     *
     * @return Channel
     */
    public function setIsEnabled(\$isEnabled)
    {
        \$this->isEnabled = \$isEnabled;

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
        return "@bundles/ChannelBundle/Entity/Channel.php";
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
        return new Source("", "@bundles/ChannelBundle/Entity/Channel.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Entity/Channel.php");
    }
}
