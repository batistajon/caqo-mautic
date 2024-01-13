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

/* @bundles/CoreBundle/Views/Standard/form.html.php */
class __TwigTemplate_8cc282e93795247b7b4aa60cd242b583b251ca02fae789d463034663df2061c5 extends Template
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

\$view->extend('MauticCoreBundle:FormTheme:form_simple.html.php');

// Parse standard fields
\$standard          = ['category', 'language', 'isPublished', 'publishUp', 'publishDown'];
\$rightColumnFields = [];
foreach (\$standard as \$field) {
    \$rightColumnFields[\$field] = (isset(\$form[\$field])) ? \$view['form']->row(\$form[\$field]) : '';
}

// Put toggles on right side
foreach (\$form as \$field) {
    \$fieldName = \$field->vars['name'];
    if (!isset(\$rightColumnFields[\$fieldName]) && in_array('yesno_button_group', \$field->vars['block_prefixes'])) {
        \$rightColumnFields[\$fieldName] = \$view['form']->row(\$field);
    }
}

\$view['slots']->set('primaryFormContent', \$view['form']->rest(\$form));
\$view['slots']->start('rightFormContent');
foreach (\$rightColumnFields as \$field) {
    echo \$field;
}
\$view['slots']->stop();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Standard/form.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Standard/form.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Standard/form.html.php");
    }
}
