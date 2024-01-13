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

/* @bundles/CoreBundle/Controller/FormThemeTrait.php */
class __TwigTemplate_b7d8c50205b410748929801044eda88ed0efa51c698328f5c525e30f6d3d1082 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormInterface;

trait FormThemeTrait
{
    /**
     * Sets a specific theme for the form.
     *
     * @param FormInterface<FormInterface> \$form
     * @param string                       \$template
     * @param mixed                        \$themes
     *
     * @return \\Symfony\\Component\\Form\\FormView
     */
    protected function setFormTheme(FormInterface \$form, \$template, \$themes = null)
    {
        \$formView = \$form->createView();

        \$templating = \$this->container->get('mautic.helper.templating')->getTemplating();
        if (\$templating instanceof DelegatingEngine) {
            \$templating = \$templating->getEngine(\$template);
        }

        // Extract form theme from options if applicable
        \$fieldThemes = [];
        \$findThemes  = function (\$form, \$formView) use (\$templating, &\$findThemes, &\$fieldThemes) {
            /** @var Form \$field */
            foreach (\$form as \$name => \$field) {
                \$fieldView = \$formView[\$name];
                if (\$theme = \$field->getConfig()->getOption('default_theme')) {
                    \$fieldThemes[] = \$theme;
                    \$templating->get('form')->setTheme(\$fieldView, \$theme);
                }

                if (\$field->count()) {
                    \$findThemes(\$field, \$fieldView);
                }
            }
        };

        \$findThemes(\$form, \$formView);

        \$themes   = (array) \$themes;
        \$themes[] = 'MauticCoreBundle:FormTheme\\Custom';
        \$themes   = array_values(array_unique(array_merge(\$themes, \$fieldThemes)));

        \$templating->get('form')->setTheme(\$formView, \$themes);

        return \$formView;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/FormThemeTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/FormThemeTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/FormThemeTrait.php");
    }
}
