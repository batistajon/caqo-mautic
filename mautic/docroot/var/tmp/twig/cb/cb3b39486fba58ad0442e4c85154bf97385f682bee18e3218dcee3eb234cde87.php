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

/* @bundles/ChannelBundle/Entity/Message.php */
class __TwigTemplate_26922252d789bc2fd147e83eb85b301458ccf12aabee1f8b7ca735a421f88748 extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata as ValidationClassMetadata;

/**
 * Class Message.
 */
class Message extends FormEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string
     */
    private \$description;

    /**
     * @var \\DateTime
     */
    private \$publishUp;

    /**
     * @var \\DateTime
     */
    private \$publishDown;

    /**
     * @var Category
     */
    private \$category;

    /**
     * @var ArrayCollection
     */
    private \$channels;

    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('messages')
                ->setCustomRepositoryClass(MessageRepository::class)
                ->addIndex(['date_added'], 'date_message_added');

        \$builder
            ->addIdColumns()
            ->addPublishDates()
            ->addCategory();
        \$builder->createOneToMany('channels', Channel::class)
                ->setIndexBy('channel')
                ->orphanRemoval()
                ->mappedBy('message')
                ->cascadeMerge()
                ->cascadePersist()
                ->cascadeDetach()
                ->build();
    }

    public static function loadValidatorMetadata(ValidationClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('name', new NotBlank([
            'message' => 'mautic.core.name.required',
        ]));
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('message')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'description',
                ]
            )
            ->addProperties(
                [
                    'publishUp',
                    'publishDown',
                    'channels',
                    'category',
                ]
            )
            ->build();
    }

    /**
     * Message constructor.
     */
    public function __construct()
    {
        \$this->channels = new ArrayCollection();
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
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string \$name
     *
     * @return Message
     */
    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param string \$description
     *
     * @return Message
     */
    public function setDescription(\$description)
    {
        \$this->description = \$description;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getPublishUp()
    {
        return \$this->publishUp;
    }

    /**
     * @param \\DateTime \$publishUp
     *
     * @return Message
     */
    public function setPublishUp(\$publishUp)
    {
        \$this->publishUp = \$publishUp;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getPublishDown()
    {
        return \$this->publishDown;
    }

    /**
     * @param \\DateTime \$publishDown
     *
     * @return Message
     */
    public function setPublishDown(\$publishDown)
    {
        \$this->publishDown = \$publishDown;

        return \$this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @param Category \$category
     *
     * @return Message
     */
    public function setCategory(\$category)
    {
        \$this->category = \$category;

        return \$this;
    }

    /**
     * @return Channel[]
     */
    public function getChannels()
    {
        return \$this->channels;
    }

    /**
     * @param ArrayCollection \$channels
     *
     * @return Message
     */
    public function setChannels(\$channels)
    {
        \$this->channels = \$channels;

        return \$this;
    }

    public function addChannel(Channel \$channel)
    {
        if (!\$this->channels->contains(\$channel)) {
            \$channel->setMessage(\$this);
            \$this->isChanged('channels', \$channel);

            \$this->channels[\$channel->getChannel()] = \$channel;
        }
    }

    public function removeChannel(Channel \$channel)
    {
        if (\$channel->getId()) {
            \$this->isChanged('channels', \$channel->getId());
        }
        \$this->channels->removeElement(\$channel);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Entity/Message.php";
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
        return new Source("", "@bundles/ChannelBundle/Entity/Message.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Entity/Message.php");
    }
}
