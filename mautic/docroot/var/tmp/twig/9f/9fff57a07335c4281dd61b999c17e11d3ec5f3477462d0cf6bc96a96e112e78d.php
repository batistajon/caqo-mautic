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

/* @bundles/CoreBundle/Templating/TemplateReference.php */
class __TwigTemplate_510280229dd1a4c4615e6429e00f662940ba99d4c06999d4b48e302e99f3d119 extends Template
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

namespace Mautic\\CoreBundle\\Templating;

use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\ThemeHelperInterface;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference as BaseTemplateReference;

class TemplateReference extends BaseTemplateReference
{
    /**
     * @var string
     */
    protected \$themeOverride;

    /**
     * @var ThemeHelperInterface
     */
    protected \$themeHelper;

    /**
     * @var PathsHelper
     */
    protected \$pathsHelper;

    public function setThemeHelper(ThemeHelperInterface \$themeHelper)
    {
        \$this->themeHelper = \$themeHelper;
    }

    public function setPathsHelper(PathsHelper \$pathsHelper)
    {
        \$this->pathsHelper = \$pathsHelper;
    }

    /**
     * Set a template specific theme override.
     *
     * @param string \$theme
     */
    public function setThemeOverride(\$theme)
    {
        \$this->themeOverride = \$theme;
    }

    public function getPath()
    {
        \$controller = str_replace('\\\\', '/', \$this->get('controller'));

        if (!empty(\$this->themeOverride)) {
            try {
                \$theme    = \$this->themeHelper->getTheme(\$this->themeOverride);
                \$themeDir = \$theme->getThemePath();
            } catch (\\Exception \$e) {
            }
        } else {
            \$theme    = \$this->themeHelper->getTheme();
            \$themeDir = \$theme->getThemePath();
        }

        \$fileName = \$this->get('name').'.'.\$this->get('format').'.'.\$this->get('engine');
        \$path     = (empty(\$controller) ? '' : \$controller.'/').\$fileName;

        if (!empty(\$this->parameters['bundle'])) {
            \$bundleRoot = \$this->pathsHelper->getSystemPath('bundles', true);
            \$pluginRoot = \$this->pathsHelper->getSystemPath('plugins', true);

            // Check for a system-wide override
            \$themePath      = \$this->pathsHelper->getSystemPath('themes', true);
            \$systemTemplate = \$themePath.'/system/'.\$this->parameters['bundle'].'/'.\$path;

            if (file_exists(\$systemTemplate)) {
                \$template = \$systemTemplate;
            } else {
                //check for an override and load it if there is
                if (!empty(\$themeDir) && file_exists(\$themeDir.'/html/'.\$this->parameters['bundle'].'/'.\$path)) {
                    // Theme override
                    \$template = \$themeDir.'/html/'.\$this->parameters['bundle'].'/'.\$path;
                } else {
                    // We prefer /*Bundle/Views/something.html.php
                    preg_match('/Mautic(.*?)Bundle/', \$this->parameters['bundle'], \$match);

                    if (
                        (!empty(\$match[1]) && file_exists(\$bundleRoot.'/'.\$match[1].'Bundle/Views/'.\$path)) ||
                        file_exists(\$pluginRoot.'/'.\$this->parameters['bundle'].'/Views/'.\$path) || // Check plugin dir directly
                        file_exists(\$bundleRoot.'/'.\$this->parameters['bundle'].'/Views/'.\$path) // Bundles dir directly
                    ) {
                        // Mautic core template
                        \$template = '@'.\$this->get('bundle').'/Views/'.\$path;
                    }
                }
            }
        } else {
            \$themes = \$this->themeHelper->getInstalledThemes();
            if (isset(\$themes[\$controller])) {
                //this is a file in a specific Mautic theme folder
                \$theme = \$this->themeHelper->getTheme(\$controller);

                \$template = \$theme->getThemePath().'/html/'.\$fileName;
            }
        }

        if (empty(\$template)) {
            // Try the parent
            return parent::getPath();
        }

        return \$template;
    }

    public function getLogicalName()
    {
        \$logicalName = parent::getLogicalName();

        if (!empty(\$this->themeOverride)) {
            \$logicalName = \$this->themeOverride.'|'.\$logicalName;
        }

        return \$logicalName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/TemplateReference.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/TemplateReference.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/TemplateReference.php");
    }
}
