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

/* @bundles/FormBundle/Views/Field/tel.html.php */
class __TwigTemplate_52a6bdc8c34e3b20a5bd2c1ae429d1cb5dd4958d30c17c8d72fbc0478552c8f7 extends Template
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
        'type'     => 'tel',
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
        return "@bundles/FormBundle/Views/Field/tel.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/tel.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/tel.html.php");
    }
}
