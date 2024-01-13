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

/* @bundles/FormBundle/Views/Field/radiogrp.html.php */
class __TwigTemplate_c8ca4d450b9c153fbbc6745c48b5fdd2249e8c0e3fbfcc8df9b4c7ce9dae53cf extends Template
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

echo \$view->render(
    'MauticFormBundle:Field:group.html.php',
    [
        'field'         => \$field,
        'fields'        => isset(\$fields) ? \$fields : [],
        'inForm'        => (isset(\$inForm)) ? \$inForm : false,
        'id'            => \$id,
        'formId'        => (isset(\$formId)) ? \$formId : 0,
        'formName'      => (isset(\$formName)) ? \$formName : '',
        'type'          => 'radio',
        'contactFields' => (isset(\$contactFields)) ? \$contactFields : [],
        'companyFields' => (isset(\$companyFields)) ? \$companyFields : [],
    ]
);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Field/radiogrp.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/radiogrp.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/radiogrp.html.php");
    }
}
