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

/* @bundles/AssetBundle/Form/Type/AssetListType.php */
class __TwigTemplate_e685b412b95ca0be44a9e49a1828d62a7e122d67505fb563f1912b6851ee2282 extends Template
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

namespace Mautic\\AssetBundle\\Form\\Type;

use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class AssetListType extends AbstractType
{
    /**
     * @var CorePermissions
     */
    private \$corePermissions;

    /**
     * @var AssetModel
     */
    private \$assetModel;

    /**
     * @var UserHelper
     */
    private \$userHelper;

    public function __construct(
        CorePermissions \$corePermissions,
        AssetModel \$assetModel,
        UserHelper \$userHelper
    ) {
        \$this->corePermissions = \$corePermissions;
        \$this->assetModel      = \$assetModel;
        \$this->userHelper      = \$userHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'choices'           => \$this->getAssetChoices(),
            'placeholder'       => false,
            'expanded'          => false,
            'multiple'          => true,
            'required'          => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'asset_list';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return array
     */
    private function getAssetChoices()
    {
        \$choices   = [];
        \$viewOther = \$this->corePermissions->isGranted('asset:assets:viewother');
        \$repo      = \$this->assetModel->getRepository();
        \$repo->setCurrentUser(\$this->userHelper->getUser());
        \$assets = \$repo->getAssetList('', 0, 0, \$viewOther);

        foreach (\$assets as \$asset) {
            \$choices[\$asset['language']][\$asset['title']] = \$asset['id'];
        }

        //sort by language
        ksort(\$choices);

        return \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Form/Type/AssetListType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/AssetListType.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Form/Type/AssetListType.php");
    }
}
