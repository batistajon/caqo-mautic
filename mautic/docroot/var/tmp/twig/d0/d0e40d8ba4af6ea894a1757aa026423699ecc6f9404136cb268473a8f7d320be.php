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

/* @bundles/ConfigBundle/Mapper/ConfigMapper.php */
class __TwigTemplate_502a7374258652b4032bbcdf674f9338651fd50e164b900b25e351f848539404 extends Template
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

namespace Mautic\\ConfigBundle\\Mapper;

use Mautic\\ConfigBundle\\Exception\\BadFormConfigException;
use Mautic\\ConfigBundle\\Mapper\\Helper\\ConfigHelper;
use Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class ConfigMapper
{
    /**
     * @var CoreParametersHelper
     */
    private \$parametersHelper;

    /**
     * @var array
     */
    private \$restrictedParameters;

    public function __construct(CoreParametersHelper \$parametersHelper, array \$restrictedParameters = [])
    {
        \$this->parametersHelper     = \$parametersHelper;
        \$this->restrictedParameters = RestrictionHelper::prepareRestrictions(\$restrictedParameters);
    }

    /**
     * @return array
     *
     * @throws BadFormConfigException
     */
    public function bindFormConfigsWithRealValues(array \$forms)
    {
        foreach (\$forms as \$bundle => \$config) {
            if (!isset(\$config['parameters'])) {
                throw new BadFormConfigException();
            }

            \$forms[\$bundle]['parameters'] = \$this->mergeWithLocalParameters(\$forms[\$bundle]['parameters']);
        }

        return \$forms;
    }

    /**
     * Merges default parameters from each subscribed bundle with the local (real) params.
     *
     * @return array
     */
    private function mergeWithLocalParameters(array \$formParameters)
    {
        \$formParameters = RestrictionHelper::applyRestrictions(\$formParameters, \$this->restrictedParameters);

        // All config values are stored at root level of the config
        foreach (\$formParameters as \$formKey => \$defaultValue) {
            \$configValue = \$this->parametersHelper->get(\$formKey);

            if (null === \$configValue) {
                // Nothing has been locally configured so keep default
                continue;
            }

            // Form field is a collection of parameters
            if (is_array(\$configValue)) {
                // Apply nested restrictions to nested config values
                \$configValue = RestrictionHelper::applyRestrictions(\$configValue, \$this->restrictedParameters, \$formKey);

                // Bind configured values with defaults
                \$formParameters[\$formKey] = ConfigHelper::bindNestedConfigValues(\$configValue, \$defaultValue);

                continue;
            }

            // Form field
            \$formParameters[\$formKey] = \$configValue;
        }

        return \$formParameters;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Mapper/ConfigMapper.php";
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
        return new Source("", "@bundles/ConfigBundle/Mapper/ConfigMapper.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Mapper/ConfigMapper.php");
    }
}
