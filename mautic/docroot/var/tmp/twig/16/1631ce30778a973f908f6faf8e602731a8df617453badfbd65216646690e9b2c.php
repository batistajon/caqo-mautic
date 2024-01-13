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

/* @bundles/CoreBundle/Form/Type/PropertiesTrait.php */
class __TwigTemplate_b6eada9291606d73694936a2e1aa2f077681bb3e21f362705371b344789c6154 extends Template
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

use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;

trait PropertiesTrait
{
    /**
     * @param FormBuilderInterface|Form \$builder
     */
    protected function addPropertiesType(\$builder, array \$options, array &\$masks)
    {
        \$properties = null;
        if (!empty(\$options['data'])) {
            if (is_array(\$options['data'])) {
                \$properties = (!empty(\$options['data']['properties'])) ? \$options['data']['properties'] : null;

                // Merge the parent data over so the child forms could use them
                if (is_array(\$properties)) {
                    \$properties = array_merge(\$options['data'], \$properties);
                }
            } elseif (is_object(\$options['data']) && method_exists(\$options['data'], 'getProperties')) {
                \$properties = \$options['data']->getProperties();
            }
        }

        \$formTypeOptions = [
            'label' => false,
            'data'  => \$properties,
        ];
        if (isset(\$options['settings']['formTypeCleanMasks'])) {
            \$masks['properties'] = \$options['settings']['formTypeCleanMasks'];
        }
        if (!empty(\$options['settings']['formTypeOptions'])) {
            \$formTypeOptions = array_merge(\$formTypeOptions, \$options['settings']['formTypeOptions']);
        }

        \$builder->add('properties', \$options['settings']['formType'], \$formTypeOptions);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/PropertiesTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/PropertiesTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/PropertiesTrait.php");
    }
}
