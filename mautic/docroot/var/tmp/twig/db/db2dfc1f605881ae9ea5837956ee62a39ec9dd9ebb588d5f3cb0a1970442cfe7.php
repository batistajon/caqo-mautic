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

/* @bundles/FormBundle/Form/Type/FormListType.php */
class __TwigTemplate_4ed48a6a30da8cfa84023dde10938f99581ae79bfbc006af1f40f263d56a9105 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Entity\\FormRepository;
use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class PointActionFormSubmitType.
 */
class FormListType extends AbstractType
{
    private \$viewOther;

    /**
     * @var FormRepository
     */
    private \$repo;

    public function __construct(CorePermissions \$security, FormModel \$model, UserHelper \$userHelper)
    {
        \$this->viewOther = \$security->isGranted('form:forms:viewother');
        \$this->repo      = \$model->getRepository();

        \$this->repo->setCurrentUser(\$userHelper->getUser());
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$viewOther = \$this->viewOther;
        \$repo      = \$this->repo;

        \$resolver->setDefaults([
            'choices' => function (Options \$options) use (\$repo, \$viewOther) {
                static \$choices;

                if (is_array(\$choices)) {
                    return \$choices;
                }

                \$choices = [];

                \$forms = \$repo->getFormList('', 0, 0, \$viewOther, \$options['form_type']);
                foreach (\$forms as \$form) {
                    \$choices[\$form['name']] = \$form['id'];
                }

                //sort by language
                ksort(\$choices);

                return \$choices;
            },
            'expanded'          => false,
            'multiple'          => true,
            'placeholder'       => false,
            'form_type'         => null,
        ]);

        \$resolver->setDefined(['form_type']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'form_list';
    }

    /**
     * @return string|\\Symfony\\Component\\Form\\FormTypeInterface|null
     */
    public function getParent()
    {
        return ChoiceType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/FormListType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormListType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/FormListType.php");
    }
}
