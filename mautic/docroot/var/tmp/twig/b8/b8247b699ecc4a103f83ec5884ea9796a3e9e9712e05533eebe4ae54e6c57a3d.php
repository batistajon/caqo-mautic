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

/* @bundles/PluginBundle/Form/Type/FieldsType.php */
class __TwigTemplate_0e4512676f4b43e2ac7debc175292656ca8d479b3ce9712eec829fee9c8d36be extends Template
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

namespace Mautic\\PluginBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class FieldsType extends AbstractType
{
    use FieldsTypeTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$this->buildFormFields(\$builder, \$options, \$options['integration_fields'], \$options['mautic_fields'], '', \$options['limit'], \$options['start']);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$this->configureFieldOptions(\$resolver, 'lead');
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'integration_fields';
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$this->buildFieldView(\$view, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Form/Type/FieldsType.php";
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
        return new Source("", "@bundles/PluginBundle/Form/Type/FieldsType.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Form/Type/FieldsType.php");
    }
}
