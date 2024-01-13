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

/* @bundles/CoreBundle/Form/Type/SortableValueLabelListType.php */
class __TwigTemplate_d2de9ca80a9236909821ab2cfec96baa103eaa8e4b973bfdc7b46ddda7044fc7 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * Class SortableValueLabelListType.
 */
class SortableValueLabelListType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'label',
            TextType::class,
            [
                'label'          => 'mautic.core.label',
                'error_bubbling' => true,
                'attr'           => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'value',
            TextType::class,
            [
                'label'          => 'mautic.core.value',
                'error_bubbling' => true,
                'attr'           => ['class' => 'form-control'],
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        parent::buildView(\$view, \$form, \$options);

        \$view->vars['preaddonAttr']  = (isset(\$options['attr']['preaddon_attr'])) ? \$options['attr']['preaddon_attr'] : [];
        \$view->vars['postaddonAttr'] = (isset(\$options['attr']['postaddon_attr'])) ? \$options['attr']['postaddon_attr'] : [];
        \$view->vars['preaddon']      = (isset(\$options['attr']['preaddon'])) ? \$options['attr']['preaddon'] : [];
        \$view->vars['postaddon']     = (isset(\$options['attr']['postaddon'])) ? \$options['attr']['postaddon'] : [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/SortableValueLabelListType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SortableValueLabelListType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/SortableValueLabelListType.php");
    }
}
