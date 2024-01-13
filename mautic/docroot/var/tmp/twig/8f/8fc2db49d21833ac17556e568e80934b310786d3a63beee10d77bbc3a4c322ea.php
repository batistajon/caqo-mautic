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

/* @bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php */
class __TwigTemplate_e2568c372e47822984268898755d75f788e507325eb87efbd665fc549305f149 extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Mautic\\CoreBundle\\IpLookup\\AbstractLocalDataLookup;
use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Translation\\TranslatorInterface;

class IpLookupDownloadDataStoreButtonType extends AbstractType
{
    /**
     * @var DateHelper
     */
    private \$dateHelper;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * IpLookupDownloadDataStoreButtonType constructor.
     */
    public function __construct(DateHelper \$dateHelper, TranslatorInterface \$translator)
    {
        \$this->dateHelper = \$dateHelper;
        \$this->translator = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$localDataExists = file_exists(\$options['ip_lookup_service']->getLocalDataStoreFilepath());

        \$builder->add(
            'fetch_button',
            ButtonType::class,
            [
                'label' => (\$localDataExists) ? 'mautic.core.ip_lookup.update_data' : 'mautic.core.ip_lookup.fetch_data',
                'attr'  => [
                    'class'   => 'btn btn-'.(\$localDataExists ? 'success' : 'danger'),
                    'onclick' => 'Mautic.downloadIpLookupDataStore()',
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(['ip_lookup_service' => null]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null !== \$options['ip_lookup_service'] && \$options['ip_lookup_service'] instanceof AbstractLocalDataLookup) {
            \$localFilePath   = \$options['ip_lookup_service']->getLocalDataStoreFilepath();
            \$localDataExists = file_exists(\$localFilePath);
            if (\$localDataExists && \$lastModifiedTimestamp = filemtime(\$localFilePath)) {
                \$lastModified                            = \$this->dateHelper->toText(\$lastModifiedTimestamp, 'UTC', 'U');
                \$view->vars['ipDataStoreLastDownloaded'] = \$this->translator->trans(
                    'mautic.core.ip_lookup.last_updated',
                    ['%date%' => \$lastModified]
                );
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'iplookup_download_data_store_button';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php");
    }
}
