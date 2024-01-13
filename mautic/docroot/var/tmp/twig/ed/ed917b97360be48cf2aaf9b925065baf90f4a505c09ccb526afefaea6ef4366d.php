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

/* @bundles/NotificationBundle/Form/Type/MobileNotificationListType.php */
class __TwigTemplate_e7809e29172c4575297e2c7d912c7c6851f3142b9b36c6c26a358a7c5e1cade6 extends Template
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

namespace Mautic\\NotificationBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class MobileNotificationListType.
 */
class MobileNotificationListType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'modal_route'         => 'mautic_mobile_notification_action',
                'modal_header'        => 'mautic.notification.mobile.header.new',
                'model'               => 'notification',
                'model_lookup_method' => 'getLookupResults',
                'lookup_arguments'    => function (Options \$options) {
                    return [
                        'type'    => 'mobile_notification',
                        'filter'  => '\$data',
                        'limit'   => 0,
                        'start'   => 0,
                        'options' => [
                            'notification_type' => \$options['notification_type'],
                        ],
                    ];
                },
                'ajax_lookup_action' => function (Options \$options) {
                    \$query = [
                        'notification_type' => \$options['notification_type'],
                    ];

                    return 'notification:getLookupChoiceList&'.http_build_query(\$query);
                },
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'notification_type' => 'template',
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'mobilenotification_list';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityLookupType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Form/Type/MobileNotificationListType.php";
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
        return new Source("", "@bundles/NotificationBundle/Form/Type/MobileNotificationListType.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Form/Type/MobileNotificationListType.php");
    }
}
