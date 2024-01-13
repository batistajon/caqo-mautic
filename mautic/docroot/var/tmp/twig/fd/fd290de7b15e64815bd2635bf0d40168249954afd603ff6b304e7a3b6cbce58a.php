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

/* @bundles/CoreBundle/Templating/Helper/FormHelper.php */
class __TwigTemplate_f6c6a48aac6e652fd201103e9354b6c4d281811e0d514fb4597cd76019a2ab31 extends Template
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

use Symfony\\Component\\Form\\FormView;

/**
 * Class FormHelper.
 */
class FormHelper extends \\Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper
{
    /**
     * Render widget if it exists.
     *
     * @param       \$form
     * @param       \$key
     * @param null  \$template
     * @param array \$variables
     *
     * @return mixed|string
     */
    public function widgetIfExists(\$form, \$key, \$template = null, \$variables = [])
    {
        \$content = (isset(\$form[\$key])) ? \$this->widget(\$form[\$key], \$variables) : '';

        if (\$content && !empty(\$template)) {
            \$content = str_replace('{content}', \$content, \$template);
        }

        return \$content;
    }

    /**
     * Render row if it exists.
     *
     * @param       \$form
     * @param       \$key
     * @param null  \$template
     * @param array \$variables
     *
     * @return mixed|string
     */
    public function rowIfExists(\$form, \$key, \$template = null, \$variables = [])
    {
        \$content = (isset(\$form[\$key])) ? \$this->row(\$form[\$key], \$variables) : '';

        if (\$content && !empty(\$template)) {
            \$content = str_replace('{content}', \$content, \$template);
        }

        return \$content;
    }

    /**
     * Render label if it exists.
     *
     * @param       \$form
     * @param       \$key
     * @param null  \$template
     * @param array \$variables
     *
     * @return mixed|string
     */
    public function labelIfExists(\$form, \$key, \$template = null, \$variables = [])
    {
        \$content = (isset(\$form[\$key])) ? \$this->label(\$form[\$key], null, \$variables) : '';

        if (\$content && !empty(\$template)) {
            \$content = str_replace('{content}', \$content, \$template);
        }

        return \$content;
    }

    /**
     * Checks to see if the form and its children has an error.
     *
     * @return bool
     */
    public function containsErrors(FormView \$form, array \$exluding = [])
    {
        if (count(\$form->vars['errors'])) {
            return true;
        }
        foreach (\$form->children as \$key => \$child) {
            if (in_array(\$key, \$exluding)) {
                continue;
            }

            if (isset(\$child->vars['errors']) && count(\$child->vars['errors'])) {
                return true;
            }

            if (count(\$child->children)) {
                \$hasErrors = \$this->containsErrors(\$child);
                if (\$hasErrors) {
                    return true;
                }
            }
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/FormHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/FormHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/FormHelper.php");
    }
}
