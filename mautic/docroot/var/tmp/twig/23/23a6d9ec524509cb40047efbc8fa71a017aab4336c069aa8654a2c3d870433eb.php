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

/* @bundles/CoreBundle/Templating/Helper/ThemeHelper.php */
class __TwigTemplate_03cff22d106e616d6f76e3dbb69a860a8618734f9002d0b1ca15367af21afeb3 extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Exception\\BadConfigurationException;
use Mautic\\CoreBundle\\Exception\\FileNotFoundException;
use Mautic\\CoreBundle\\Helper\\PathsHelper;

/**
 * Class ThemeHelper.
 */
class ThemeHelper
{
    /**
     * @var string
     */
    private \$theme;

    /**
     * @var string
     */
    private \$themeDir;

    /**
     * @var string
     */
    private \$themePath;

    /**
     * @var mixed
     */
    private \$config;

    /**
     * @param string \$theme
     *
     * @throws BadConfigurationException
     * @throws FileNotFoundException
     */
    public function __construct(PathsHelper \$pathsHelper, \$theme)
    {
        \$this->theme     = \$theme;
        \$this->themeDir  = \$pathsHelper->getSystemPath('themes').'/'.\$this->theme;
        \$this->themePath = \$pathsHelper->getSystemPath('themes_root').'/'.\$this->themeDir;

        // check to make sure the theme exists
        if (!file_exists(\$this->themePath)) {
            throw new FileNotFoundException(\$this->theme.' not found!');
        }

        // get the config
        if (file_exists(\$this->themePath.'/config.json')) {
            \$this->config = json_decode(file_get_contents(\$this->themePath.'/config.json'), true);
        } else {
            throw new BadConfigurationException(\$this->theme.' is missing a required config file');
        }

        if (!isset(\$this->config['name'])) {
            throw new BadConfigurationException(\$this->theme.' does not have a valid config file');
        }
    }

    /**
     * Return  name of the template.
     *
     * @return mixed
     */
    public function getName()
    {
        return \$this->config['name'];
    }

    /**
     * Returns the theme folder name.
     *
     * @return string
     */
    public function getTheme()
    {
        return \$this->theme;
    }

    /**
     * Get the theme's config.
     *
     * @return mixed
     */
    public function getConfig()
    {
        return \$this->config;
    }

    /**
     * Get the theme's slots.
     *
     * @param \$type
     *
     * @return array
     */
    public function getSlots(\$type)
    {
        return (isset(\$this->config['slots'][\$type])) ? \$this->config['slots'][\$type] : [];
    }

    /**
     * Returns path to this theme.
     *
     * @param bool \$relative
     *
     * @return string
     */
    public function getThemePath(\$relative = false)
    {
        return (\$relative) ? \$this->themeDir : \$this->themePath;
    }

    /**
     * Returns template.
     *
     * @param \$code
     *
     * @return bool|string
     */
    public function getErrorPageTemplate(\$code)
    {
        \$errorPage = \$this->getThemePath().\"/error_{\$code}.html.php\";
        if (file_exists(\$errorPage)) {
            return \":{\$this->theme}:error_{\$code}.html.php\";
        } else {
            return false;
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
        return "@bundles/CoreBundle/Templating/Helper/ThemeHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/ThemeHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/ThemeHelper.php");
    }
}
