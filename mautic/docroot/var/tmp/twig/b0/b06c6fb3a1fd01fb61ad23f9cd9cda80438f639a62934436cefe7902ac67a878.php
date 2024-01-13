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

/* @bundles/CoreBundle/Event/ComponentValidationTrait.php */
class __TwigTemplate_f9e28be3a0f9ff1b22b964f801ce60655b5fb746abe64464ddd32f5a7af74577 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Exception\\BadConfigurationException;

trait ComponentValidationTrait
{
    private function verifyComponent(array \$keys, array \$component, array \$callbacks = [])
    {
        foreach (\$keys as \$k) {
            if (is_array(\$k)) {
                // Check that at least one option exists
                if (empty(array_intersect(\$k, array_keys(\$component)))) {
                    throw new BadConfigurationException(\"At least one of the following keys are required: '\".implode(', ', \$k));
                }
            } elseif (!array_key_exists(\$k, \$component)) {
                throw new BadConfigurationException(\"The key, '\$k' is missing.\");
            }
        }

        if (\$callbacks) {
            foreach (\$callbacks as \$m) {
                if (isset(\$component[\$m]) && !is_callable(\$component[\$m])) {
                    throw new BadConfigurationException(\$component[\$m].' is not callable.');
                }
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/ComponentValidationTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Event/ComponentValidationTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/ComponentValidationTrait.php");
    }
}
