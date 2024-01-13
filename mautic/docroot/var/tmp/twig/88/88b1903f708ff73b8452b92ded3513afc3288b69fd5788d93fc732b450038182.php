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

/* @bundles/CampaignBundle/Form/Type/CampaignListType.php */
class __TwigTemplate_4a03225c4a4937cc20eed3567aed91ba59935129e04effc8a85fbb6b52d1b7fe extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class CampaignListType.
 */
class CampaignListType extends AbstractType
{
    /**
     * @var CampaignModel
     */
    private \$model;

    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    /**
     * @var bool
     */
    private \$canViewOther = false;

    public function __construct(CampaignModel \$campaignModel, TranslatorInterface \$translator, CorePermissions \$security)
    {
        \$this->model        = \$campaignModel;
        \$this->translator   = \$translator;
        \$this->canViewOther = \$security->isGranted('campaign:campaigns:viewother');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'choices'      => function (Options \$options) {
                    \$choices   = [];
                    \$campaigns = \$this->model->getRepository()->getPublishedCampaigns(null, null, true, \$this->canViewOther);
                    foreach (\$campaigns as \$campaign) {
                        \$choices[\$campaign['name']] = \$campaign['id'];
                    }

                    //sort by language
                    ksort(\$choices);

                    if (\$options['include_this']) {
                        \$choices = [\$options['this_translation'] => 'this'] + \$choices;
                    }

                    return \$choices;
                },
                'placeholder'       => false,
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'include_this'      => false,
                'this_translation'  => 'mautic.campaign.form.thiscampaign',
            ]
        );
    }

    public function getParent()
    {
        return ChoiceType::class;
    }

    public function getBlockPrefix()
    {
        return 'campaign_list';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Form/Type/CampaignListType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignListType.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Form/Type/CampaignListType.php");
    }
}
