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

/* @bundles/FormBundle/Views/Field/freehtml.html.php */
class __TwigTemplate_38c1dd0640394e317991202cc7e8c3710ffed834351e0a4a7df4980b5cbb99b6 extends Template
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

\$defaultInputClass = \$containerType = 'freehtml';
include __DIR__.'/field_helper.php';

if (\$inBuilder) {
    \$htmlContent = \$view['content']->showScriptTags(\$properties['text']);
} else {
    \$htmlContent = \$properties['text'];
}

\$label = (!\$field['showLabel']) ? '' :
    <<<HTML

                <h3 \$labelAttr>
                    {\$field['label']}
                </h3>
HTML;

\$html = <<<HTML

            <div \$containerAttr>{\$label}
                <div \$inputAttr>
                    {\$htmlContent}
                </div>
            </div>

HTML;

echo \$html;
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Field/freehtml.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/freehtml.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/freehtml.html.php");
    }
}
