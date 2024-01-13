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

/* @bundles/ChannelBundle/Form/Type/MessageType.php */
class __TwigTemplate_030b8fc0eaeb93b7fd31eb0ab4ded2cb6a5dcc534f0007c30150642cac76d1c1 extends Template
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

namespace Mautic\\ChannelBundle\\Form\\Type;

use Mautic\\ChannelBundle\\Entity\\Channel;
use Mautic\\ChannelBundle\\Entity\\Message;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\CoreBundle\\Form\\Type\\AbstractFormStandardType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Valid;

/**
 * Class MessageType.
 */
class MessageType extends AbstractFormStandardType
{
    /**
     * @var MessageModel
     */
    protected \$model;

    /**
     * MessageType constructor.
     */
    public function __construct(MessageModel \$messageModel)
    {
        \$this->model = \$messageModel;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // Add standard fields
        \$options = array_merge(\$options, ['model_name' => 'channel.message', 'permission_base' => 'channel:messages']);
        parent::buildForm(\$builder, \$options);

        // Ensure that all channels exist
        /** @var Message \$message */
        \$message         = \$options['data'];
        \$channels        = \$this->model->getChannels();
        \$messageChannels = \$message->getChannels();

        foreach (\$channels as \$channelType => \$channel) {
            if (!isset(\$messageChannels[\$channelType])) {
                \$message->addChannel(
                    (new Channel())
                        ->setChannel(\$channelType)
                        ->setMessage(\$message)
                );
            }
        }

        \$builder->add(
            'channels',
            CollectionType::class,
            [
                'label'         => false,
                'allow_add'     => true,
                'allow_delete'  => false,
                'prototype'     => false,
                'entry_type'    => ChannelType::class,
                'by_reference'  => false,
                'entry_options' => [
                    'channels' => \$channels,
                ],
                'constraints' => [
                    new Valid(),
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'data_class'      => Message::class,
                'category_bundle' => 'messages',
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Form/Type/MessageType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/MessageType.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Form/Type/MessageType.php");
    }
}
