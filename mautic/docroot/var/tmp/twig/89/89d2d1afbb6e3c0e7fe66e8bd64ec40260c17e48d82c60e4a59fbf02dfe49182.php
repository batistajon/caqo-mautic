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

/* @bundles/ChannelBundle/Form/Type/ChannelType.php */
class __TwigTemplate_9f4f246c0fe7f99cc55bcb3a70f8d21b48100bb39fcd00f27f66d60e547573c5 extends Template
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
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class ChannelType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$formModifier = function (FormEvent \$event) use (\$options) {
            \$form = \$event->getForm();

            /** @var Channel \$channel */
            \$data = \$event->getData();
            if (is_array(\$data)) {
                \$channelName = \$data['channel'];
                \$enabled     = \$data['isEnabled'];
            } elseif (\$data instanceof Channel) {
                \$channelName = \$data->getChannel();
                \$enabled     = \$data->isEnabled();
            } else {
                \$channelName = \$data;
                \$enabled     = false;
            }

            if (!\$data || !\$channelName || !isset(\$options['channels'][\$channelName])) {
                return;
            }

            \$channelConfig = \$options['channels'][\$channelName];
            \$form->add(
                'channel',
                HiddenType::class
            );

            \$form->add(
                'isEnabled',
                YesNoButtonGroupType::class,
                [
                    'label' => 'mautic.channel.message.form.enabled',
                    'attr'  => [
                        'onchange' => 'Mautic.toggleChannelFormDisplay(this, \\''.\$channelName.'\\')',
                    ],
                ]
            );

            if (isset(\$channelConfig['lookupFormType'])) {
                \$form->add(
                    'channelId',
                    \$channelConfig['lookupFormType'],
                    [
                        'multiple'    => false,
                        'label'       => 'mautic.channel.message.form.message',
                        'constraints' => (\$enabled) ? [
                             new NotBlank(
                                 [
                                    'message' => 'mautic.core.value.required',
                                 ]
                             ),
                        ] : [],
                    ]
                );
            }

            if (isset(\$channelConfig['propertiesFormType'])) {
                \$propertiesOptions = [
                    'label' => false,
                ];
                if (!\$enabled) {
                    // Disable validation
                    \$propertiesOptions['validation_groups'] = false;
                }

                \$form->add(
                    'properties',
                    \$channelConfig['propertiesFormType'],
                    \$propertiesOptions
                );
            }
        };

        \$builder->addEventListener(FormEvents::PRE_SET_DATA, \$formModifier);
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, \$formModifier);
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['channels'] = \$options['channels'];
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired(['channels']);
        \$resolver->setDefaults(
            [
                'data_class' => Channel::class,
                'label'      => false,
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
        return "@bundles/ChannelBundle/Form/Type/ChannelType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/ChannelType.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Form/Type/ChannelType.php");
    }
}
