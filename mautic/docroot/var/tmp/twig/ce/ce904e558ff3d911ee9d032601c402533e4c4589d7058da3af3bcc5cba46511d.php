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

/* @bundles/FormBundle/Views/Field/captcha.html.php */
class __TwigTemplate_19d01fbd6124cf0e12c414e529df779886b2c19fc679c0b51df70835992e2933 extends Template
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

\$required = true;
\$type     = 'text';
if (empty(\$field['properties']['captcha'])) {
    \$required = false;
    if (empty(\$inForm)) {
        // Use as a honeypot
        \$field['containerAttributes'] .= ' style=\"display: none;\"';
    } else {
        // Hide the input
        \$type = 'hidden';
    }
}

echo \$view->render(
    'MauticFormBundle:Field:text.html.php',
    [
        'field'    => \$field,
        'fields'   => isset(\$fields) ? \$fields : [],
        'inForm'   => (isset(\$inForm)) ? \$inForm : false,
        'type'     => \$type,
        'id'       => \$id,
        'required' => \$required,
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
        return "@bundles/FormBundle/Views/Field/captcha.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/captcha.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/captcha.html.php");
    }
}
