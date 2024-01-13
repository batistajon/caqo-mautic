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

/* @bundles/NotificationBundle/Form/Type/NotificationConfigType.php */
class __TwigTemplate_8abe995f08906a610bd253fa8b81c78d1a36ea89639c6ce07205a3539f92373f extends Template
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

declare(strict_types=1);

namespace Mautic\\NotificationBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\EmailBundle\\Validator\\MultipleEmailsValid;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class NotificationConfigType extends AbstractType
{
    /**
     * @param FormBuilderInterface<int,FormBuilderInterface> \$builder
     * @param array<string,mixed>                            \$options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'campaign_send_notification_to_author',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.notification.form.config.send_notification_to_author',
                'attr'  => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.notification.form.config.send_notification_to_author.tooltip',
                    'onchange' => 'Mautic.resetEmailsToNotification(this)',
                ],
                'required' => true,
            ]
        );
        \$builder->add(
            'campaign_notification_email_addresses',
            TextType::class,
            [
                'label'      => 'mautic.notification.form.config.notification_email_addresses',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control notification_email_addresses',
                    'tooltip'      => 'mautic.notification.form.config.notification_email_addresses.tooltip',
                    'data-show-on' => '{\"config_notification_config_campaign_send_notification_to_author_0\":\"checked\"}',
                ],
                'constraints' => [
                    new NotBlank(['groups' => ['campaign_email_list']]),
                    new MultipleEmailsValid(),
                ],
            ]
        );

        \$builder->add(
            'webhook_send_notification_to_author',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.notification.form.config.send_notification_to_author',
                'attr'  => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.notification.form.config.send_notification_to_author.tooltip',
                    'onchange' => 'Mautic.resetEmailsToNotification(this)',
                ],
                'required' => true,
            ]
        );
        \$builder->add(
            'webhook_notification_email_addresses',
            TextType::class,
            [
                'label'      => 'mautic.notification.form.config.notification_email_addresses',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control notification_email_addresses',
                    'tooltip'      => 'mautic.notification.form.config.notification_email_addresses.tooltip',
                    'data-show-on' => '{\"config_notification_config_webhook_send_notification_to_author_0\":\"checked\"}',
                ],
                'constraints' => [
                    new MultipleEmailsValid(),
                    new NotBlank(['groups' => ['webhook_email_list']]),
                ],
            ]
        );
    }

    /**
     * @return void
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'validation_groups' => function (FormInterface \$form) {
                \$data = \$form->getData();
                \$groups = ['Default'];
                if (!\$data['webhook_send_notification_to_author']) {
                    \$groups[] = 'webhook_email_list';
                }
                if (!\$data['campaign_send_notification_to_author']) {
                    \$groups[] = 'campaign_email_list';
                }

                return \$groups;
            },
        ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'notification_config';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Form/Type/NotificationConfigType.php";
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
        return new Source("", "@bundles/NotificationBundle/Form/Type/NotificationConfigType.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Form/Type/NotificationConfigType.php");
    }
}
