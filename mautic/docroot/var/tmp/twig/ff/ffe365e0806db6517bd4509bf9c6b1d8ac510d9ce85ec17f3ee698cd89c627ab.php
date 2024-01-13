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

/* @bundles/FormBundle/Views/Field/freetext.html.php */
class __TwigTemplate_e603e6628cce6ddfb9bbe39203bb6bfed3f7840b64443ba1df6cd66a3f6785bd extends Template
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

\$defaultInputClass = \$containerType = 'freetext';
include __DIR__.'/field_helper.php';

\$label = (!\$field['showLabel']) ? '' :
    <<<HTML
    
                <h3 \$labelAttr>
                    {\$field['label']}
                </h3>
HTML;

\$html = <<<HTML

            <div \$containerAttr>{\$label}
                <div \$inputAttr>
                    {\$properties['text']}
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
        return "@bundles/FormBundle/Views/Field/freetext.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/freetext.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/freetext.html.php");
    }
}
