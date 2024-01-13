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

/* @bundles/LeadBundle/Form/Type/LeadCategoryType.php */
class __TwigTemplate_7a3fff6f7815c6860d1f978b828c8ef5679655d4cc8e4b1347b6d91b2a07380d extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class LeadCategoryType extends AbstractType
{
    private \$categoryModel;

    public function __construct(CategoryModel \$categoryModel)
    {
        \$this->categoryModel = \$categoryModel;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'choices'           => function (Options \$options) {
                \$categories = \$this->categoryModel->getLookupResults('global');
                \$choices    = [];

                foreach (\$categories as \$cat) {
                    \$choices[\$cat['title']] = \$cat['id'];
                }

                return \$choices;
            },
            'global_only' => true,
            'required'    => false,
        ]);
    }

    /**
     * @return string|\\Symfony\\Component\\Form\\FormTypeInterface|null
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'leadcategory_choices';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/LeadCategoryType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/LeadCategoryType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/LeadCategoryType.php");
    }
}
