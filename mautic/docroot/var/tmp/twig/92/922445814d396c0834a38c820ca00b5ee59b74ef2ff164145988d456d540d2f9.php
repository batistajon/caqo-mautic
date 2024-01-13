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

/* @bundles/PageBundle/Form/Type/ConfigTrackingPageType.php */
class __TwigTemplate_02c1138aba60c5497e518bac1fd0e132a9bbe325f4b00fec1a4bebeae0daee03 extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * Class ConfigType.
 */
class ConfigTrackingPageType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add('track_by_tracking_url', YesNoButtonGroupType::class, [
            'label' => 'mautic.page.config.form.track.by.tracking.url',
            'data'  => isset(\$options['data']['track_by_tracking_url']) ? (bool) \$options['data']['track_by_tracking_url'] : true,
            'attr'  => [
                'tooltip' => 'mautic.page.config.form.track.by.tracking.url.tooltip',
            ],
        ]);

        \$builder->add(
            'anonymize_ip',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.anonymize_ip',
                'data'  => isset(\$options['data']['anonymize_ip']) ? (bool) \$options['data']['anonymize_ip'] : false,
                'attr'  => [
                    'tooltip' => 'mautic.page.config.form.anonymize_ip.tooltip',
                ],
            ]
        );

        \$builder->add(
            'track_contact_by_ip',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.track_contact_by_ip',
                'data'  => isset(\$options['data']['track_contact_by_ip']) ? (bool) \$options['data']['track_contact_by_ip'] : false,
                'attr'  => [
                    'tooltip'      => 'mautic.page.config.form.track_contact_by_ip.tooltip',
                    'data-show-on' => '{\"config_trackingconfig_anonymize_ip_0\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'do_not_track_404_anonymous',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.do_not_track_404_anonymous',
                'data'  => isset(\$options['data']['do_not_track_404_anonymous']) ? (bool) \$options['data']['do_not_track_404_anonymous'] : false,
                'attr'  => [
                    'tooltip'      => 'mautic.page.config.form.do_not_track_404_anonymous.tooltip',
                ],
            ]
        );

        \$builder->add(
            'facebook_pixel_id',
            TextType::class,
            [
                'label' => 'mautic.page.config.form.facebook.pixel.id',
                'attr'  => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'facebook_pixel_trackingpage_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.tracking.trackingpage.enabled',
                'data'  => isset(\$options['data']['facebook_pixel_trackingpage_enabled']) ? (bool) \$options['data']['facebook_pixel_trackingpage_enabled'] : false,
            ]
        );

        \$builder->add(
            'facebook_pixel_landingpage_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.tracking.landingpage.enabled',
                'data'  => isset(\$options['data']['facebook_pixel_landingpage_enabled']) ? (bool) \$options['data']['facebook_pixel_landingpage_enabled'] : false,
            ]
        );

        \$builder->add(
            'google_analytics_id',
            TextType::class,
            [
                'label' => 'mautic.page.config.form.google.analytics.id',
                'attr'  => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'google_analytics_trackingpage_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.tracking.trackingpage.enabled',
                'data'  => isset(\$options['data']['google_analytics_trackingpage_enabled']) ? (bool) \$options['data']['google_analytics_trackingpage_enabled'] : false,
            ]
        );

        \$builder->add(
            'google_analytics_landingpage_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.tracking.landingpage.enabled',
                'data'  => isset(\$options['data']['google_analytics_landingpage_enabled']) ? (bool) \$options['data']['google_analytics_landingpage_enabled'] : false,
            ]
        );

        \$builder->add(
            'google_analytics_anonymize_ip',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.tracking.anonymize.ip.enabled',
                'data'  => isset(\$options['data']['google_analytics_anonymize_ip']) ? (bool) \$options['data']['google_analytics_anonymize_ip'] : false,
                'attr'  => [
                    'tooltip' => 'mautic.page.config.form.tracking.anonymize.ip.enabled.tooltip',
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'trackingconfig';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Form/Type/ConfigTrackingPageType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/ConfigTrackingPageType.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Form/Type/ConfigTrackingPageType.php");
    }
}
