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

/* @bundles/PageBundle/Form/Type/PreferenceCenterListType.php */
class __TwigTemplate_4aaabd969fff05ba1703d3cfc11c28d52ff37aa9983be07d2e3b5f39dae49abf extends Template
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

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class PageListType.
 */
class PreferenceCenterListType extends AbstractType
{
    /**
     * @var PageModel
     */
    private \$model;

    /**
     * @var bool
     */
    private \$canViewOther = false;

    public function __construct(PageModel \$pageModel, CorePermissions \$corePermissions)
    {
        \$this->model        = \$pageModel;
        \$this->canViewOther = \$corePermissions->isGranted('page:pages:viewother');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$model        = \$this->model;
        \$canViewOther = \$this->canViewOther;

        \$resolver->setDefaults(
            [
                'choices' => function (Options \$options) use (\$model, \$canViewOther) {
                    \$choices = [];
                    \$pages = \$model->getRepository()->getPageList('', 0, 0, \$canViewOther, \$options['top_level'], \$options['ignore_ids'], ['isPreferenceCenter']);
                    foreach (\$pages as \$page) {
                        if (\$page['isPreferenceCenter']) {
                            \$choices[\$page['language']][\"{\$page['title']} ({\$page['id']})\"] = \$page['id'];
                        }
                    }

                    // sort by language
                    ksort(\$choices);

                    foreach (\$choices as &\$pages) {
                        ksort(\$pages);
                    }

                    return \$choices;
                },
                'placeholder'       => false,
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'top_level'         => 'variant',
                'ignore_ids'        => [],
                ]
        );

        \$resolver->setDefined(['top_level', 'ignore_ids']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'preference_center_list';
    }

    /**
     * {@inheritdoc}
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
        return "@bundles/PageBundle/Form/Type/PreferenceCenterListType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/PreferenceCenterListType.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Form/Type/PreferenceCenterListType.php");
    }
}
