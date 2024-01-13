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

/* @bundles/LeadBundle/Views/FormTheme/Filter/_leadlist_filters_widget.html.php */
class __TwigTemplate_f43d237dac4c8b0c8befca9273408b1de2212719fea7cca5daeeaf34a06ec774 extends Template
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

foreach (\$form as \$i => \$filter) {
    \$isPrototype = ('__name__' == \$filter->vars['name']);
    \$filterType  = \$filter['field']->vars['value'];
    foreach (\$form->parent->vars['fields'] as \$object => \$objectfields) {
        \$isField    = isset(\$objectfields[\$filter->vars['value']['field']]);
        \$isBehavior = isset(\$form->parent->vars['fields']['behaviors'][\$filter->vars['value']['field']]);
        if (\$isPrototype || \$isField || \$isBehavior) {
            echo \$view['form']->widget(\$filter, ['first' => (0 === \$i)]);
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
        return "@bundles/LeadBundle/Views/FormTheme/Filter/_leadlist_filters_widget.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/FormTheme/Filter/_leadlist_filters_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/FormTheme/Filter/_leadlist_filters_widget.html.php");
    }
}
