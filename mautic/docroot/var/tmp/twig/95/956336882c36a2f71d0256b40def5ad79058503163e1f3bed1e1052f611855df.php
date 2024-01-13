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

/* @bundles/FormBundle/Views/Field/hidden.html.php */
class __TwigTemplate_17139fb909bac7e2b3bd487acb792a81f2894b6fafea8fd6adab64a54a129191 extends Template
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

\$defaultInputClass = \$containerType = 'hidden';

include __DIR__.'/field_helper.php';

if (!empty(\$inForm)):
\$html = <<<HTML
<div \$containerAttr>
    <label class=\"text-muted\">{\$field['label']}</label>
</div>
HTML;

else:
\$html = <<<HTML

                <input \$inputAttr type=\"hidden\" />
HTML;
endif;

echo \$html;
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Field/hidden.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/hidden.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/hidden.html.php");
    }
}
