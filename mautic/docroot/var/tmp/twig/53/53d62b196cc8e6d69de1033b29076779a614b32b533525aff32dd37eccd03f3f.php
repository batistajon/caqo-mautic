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

/* @bundles/FormBundle/Views/Field/email.html.php */
class __TwigTemplate_f2cc31794b3dc23171879f2a3d017c551af51d96d1472711bbbe6ef629bf0604 extends Template
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
        'type'     => 'email',
        'id'       => \$id,
        'deleted'  => (!empty(\$deleted)) ? true : false,
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
        return "@bundles/FormBundle/Views/Field/email.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/email.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/email.html.php");
    }
}
