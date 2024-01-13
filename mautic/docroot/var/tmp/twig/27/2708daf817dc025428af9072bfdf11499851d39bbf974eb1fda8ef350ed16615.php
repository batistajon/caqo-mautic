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

/* @bundles/CoreBundle/Templating/TemplateNameParser.php */
class __TwigTemplate_db407528143d9f95b075eccd298210763e2b8e863fc95cbda829e47317f88fa4 extends Template
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

use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser as BaseTemplateNameParser;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * Class TemplateNameParser.
 */
class TemplateNameParser extends BaseTemplateNameParser
{
    /**
     * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
     */
    protected \$container;

    /**
     * {@inheritdoc}
     */
    public function __construct(KernelInterface \$kernel)
    {
        parent::__construct(\$kernel);

        \$this->container = \$kernel->getContainer();
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\InvalidArgumentException
     * @throws \\RuntimeException
     */
    public function parse(\$name)
    {
        if (\$name instanceof TemplateReferenceInterface) {
            return \$name;
        } elseif (isset(\$this->cache[\$name])) {
            return \$this->cache[\$name];
        }

        // normalize name
        \$name = str_replace(':/', ':', preg_replace('#/{2,}#', '/', strtr(\$name, '\\\\', '/')));

        if (false !== strpos(\$name, '..')) {
            throw new \\RuntimeException(sprintf('Template name \"%s\" contains invalid characters.', \$name));
        }

        if (!preg_match('/^([^:]*):([^:]*):(.+)\\.([^\\.]+)\\.([^\\.]+)\$/', \$name, \$matches)) {
            \$templateReference = parent::parse(\$name);

            if (\$templateReference->get('engine')) {
                return \$templateReference;
            }

            throw new \\InvalidArgumentException(sprintf('Template name \"%s\" is not valid (format is \"bundle:section:template.format.engine\").', \$name));
        }

        //check for template specific theme override
        \$bundle = \$matches[1];
        preg_match('/^(.*?)\\|(.*?)\$/', \$matches[1], \$templateOverride);
        if (!empty(\$templateOverride[1])) {
            \$themeOverride = \$templateOverride[1];
            \$bundle        = \$templateOverride[2];
        }

        \$template = new TemplateReference(\$bundle, \$matches[2], \$matches[3], \$matches[4], \$matches[5]);

        if (!empty(\$themeOverride)) {
            \$template->setThemeOverride(\$themeOverride);
        }

        \$template->setThemeHelper(\$this->container->get('mautic.helper.theme'));
        \$template->setPathsHelper(\$this->container->get('mautic.helper.paths'));

        if (\$template->get('bundle')) {
            try {
                \$this->kernel->getBundle(\$template->get('bundle'));
            } catch (\\Exception \$e) {
                throw new \\InvalidArgumentException(sprintf('Template name \"%s\" is not valid.', \$name), 0, \$e);
            }
        }

        return \$this->cache[\$name] = \$template;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/TemplateNameParser.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/TemplateNameParser.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/TemplateNameParser.php");
    }
}
