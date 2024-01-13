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

/* @bundles/FormBundle/Views/Field/checkboxgrp.html.php */
class __TwigTemplate_76aec9d49772bc8fdc67fcff260d6e47cc6f91362aea0cdefd0270c0bd6d1fd6 extends Template
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

if (isset(\$field['defaultValue']) && '' !== \$field['defaultValue']) {
    \$hiddenDefault = \$view->render(
        'MauticFormBundle:Field:hidden.html.php',
        [
            'field'         => \$field,
            'fields'        => isset(\$fields) ? \$fields : [],
            'inForm'        => (isset(\$inForm)) ? \$inForm : false,
            'id'            => \$id,
            'formId'        => (isset(\$formId)) ? \$formId : 0,
            'type'          => 'checkbox',
            'formName'      => (isset(\$formName)) ? \$formName : '',
            'contactFields' => (isset(\$contactFields)) ? \$contactFields : [],
            'companyFields' => (isset(\$companyFields)) ? \$companyFields : [],
        ]
    );

    echo str_replace('<input', '<input value=\"'.\$field['defaultValue'].'\"', \$hiddenDefault);
}

echo \$view->render(
    'MauticFormBundle:Field:group.html.php',
    [
        'field'         => \$field,
        'inForm'        => (isset(\$inForm)) ? \$inForm : false,
        'id'            => \$id,
        'formId'        => (isset(\$formId)) ? \$formId : 0,
        'type'          => 'checkbox',
        'formName'      => (isset(\$formName)) ? \$formName : '',
        'contactFields' => (isset(\$contactFields)) ? \$contactFields : [],
        'companyFields' => (isset(\$companyFields)) ? \$companyFields : [],
        'fields'        => isset(\$fields) ? \$fields : null,
    ]
);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Field/checkboxgrp.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/checkboxgrp.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/checkboxgrp.html.php");
    }
}
