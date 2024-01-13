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

/* @bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php */
class __TwigTemplate_55b5811b3f0abe9264b2cb01f4fc0c9944dce4ceb6e6739613f4aab730800b9c extends Template
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

namespace Mautic\\CoreBundle\\Loader\\EnvVars;

use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ConfigEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        foreach (\$config->all() as \$key => \$value) {
            if (!empty(\$value) && is_string(\$value) && preg_match('/getenv\\((.*?)\\)/', \$value, \$match)) {
                \$value = (string) getenv(\$match[1]);
            }

            // JSON encode arrays
            \$defaultValue = \$defaultConfig->get(\$key);
            if (is_array(\$value) || is_array(\$defaultValue)) {
                \$jsonValue = \$value ? \$value : \$defaultValue;
                \$value     = json_encode(\$jsonValue);
            }

            // Set the environment variable
            \$envKey = sprintf('MAUTIC_%s', mb_strtoupper(\$key));
            \$envVars->set(\$envKey, \$value);
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
        return "@bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php");
    }
}
