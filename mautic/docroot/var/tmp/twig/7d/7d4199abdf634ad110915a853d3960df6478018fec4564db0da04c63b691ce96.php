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

/* @bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php */
class __TwigTemplate_ca9b24c23e41375094f4ffcf2c48dcdb520a6106558faebd690c68fbd6b50527 extends Template
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

class ElFinderEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        \$root = rtrim(\$defaultConfig->get('local_root'), '/') ?: '%kernel.root_dir%/..';

        \$relativeImageFolderPath = trim(\$config->get('image_path'), '/');
        \$absoluteImageFolderPath = \$root.'/'.\$relativeImageFolderPath;
        \$envVars->set('MAUTIC_EL_FINDER_PATH', \$absoluteImageFolderPath);

        \$url = rtrim(\$config->get('site_url'), '/').'/'.\$relativeImageFolderPath;
        \$envVars->set('MAUTIC_EL_FINDER_URL', \$url);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php");
    }
}
