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

/* @bundles/FormBundle/Helper/PropertiesAccessor.php */
class __TwigTemplate_a9a50aa31ac18f1bf456f491341588aa9870573d7b9dcb8f449a272906a6e435 extends Template
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

declare(strict_types=1);

namespace Mautic\\FormBundle\\Helper;

use Mautic\\FormBundle\\Model\\FormModel;

class PropertiesAccessor
{
    /**
     * @var FormModel
     */
    private \$formModel;

    public function __construct(FormModel \$formModel)
    {
        \$this->formModel = \$formModel;
    }

    /**
     * @param mixed[] \$field
     *
     * @return mixed[]
     */
    public function getProperties(array \$field)
    {
        if ('country' === \$field['type'] || (!empty(\$field['leadField']) && !empty(\$field['properties']['syncList']))) {
            return \$this->formModel->getContactFieldPropertiesList(\$field['leadField']);
        } elseif (!empty(\$field['properties'])) {
            return \$this->getOptionsListFromProperties(\$field['properties']);
        }

        return [];
    }

    /**
     * @param string|mixed[] \$options
     *
     * @return string[]
     */
    public function getChoices(\$options)
    {
        \$choices = [];

        if (is_array(\$options) && !isset(\$options[0]['value'])) {
            return array_flip(\$options);
        }

        if (!is_array(\$options)) {
            \$options = explode('|', \$options);
        }

        foreach (\$options as \$option) {
            if (is_array(\$option)) {
                if (isset(\$option['label']) && isset(\$option['alias'])) {
                    \$choices[\$option['label']] = \$option['alias'];
                } elseif (isset(\$option['label']) && isset(\$option['value'])) {
                    \$choices[\$option['label']] = \$option['value'];
                } else {
                    foreach (\$option as \$opt) {
                        \$choices[\$opt] = \$opt;
                    }
                }
            } else {
                \$choices[\$option] = \$option;
            }
        }

        return \$choices;
    }

    /**
     * @param array<string,mixed> \$properties
     *
     * @return mixed[]
     */
    private function getOptionsListFromProperties(array \$properties)
    {
        if (!empty(\$properties['list']['list'])) {
            return \$properties['list']['list'];
        } elseif (!empty(\$properties['optionlist']['list'])) {
            return \$properties['optionlist']['list'];
        }

        return [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Helper/PropertiesAccessor.php";
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
        return new Source("", "@bundles/FormBundle/Helper/PropertiesAccessor.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Helper/PropertiesAccessor.php");
    }
}
