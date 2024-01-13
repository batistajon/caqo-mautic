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

/* @bundles/FormBundle/Views/Field/datetime.html.php */
class __TwigTemplate_83b886fa79d7fc6cb18566ef4f392e9b174fab02752d6b03ec88cd9c68532438 extends Template
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
    'MauticFormBundle:Field:text.html.php',
    [
        'field'    => \$field,
        'fields'   => isset(\$fields) ? \$fields : [],
        'inForm'   => (isset(\$inForm)) ? \$inForm : false,
        'type'     => 'datetime-local',
        'id'       => \$id,
        'formId'   => (isset(\$formId)) ? \$formId : 0,
        'formName' => (isset(\$formName)) ? \$formName : '',
    ]
);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Field/datetime.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/datetime.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/datetime.html.php");
    }
}
