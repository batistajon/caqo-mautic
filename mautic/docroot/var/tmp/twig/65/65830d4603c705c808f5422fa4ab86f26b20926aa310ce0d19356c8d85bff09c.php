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

/* @bundles/FormBundle/Views/Field/button.html.php */
class __TwigTemplate_e299d68ef0e5cd6faac7aaf48ef0ab86d52122c2c81d8b9a1be617bd361492d0 extends Template
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

\$defaultInputClass = 'button';
\$containerType     = 'button-wrapper';
include __DIR__.'/field_helper.php';

\$buttonType = (isset(\$properties['type'])) ? \$properties['type'] : 'submit';

\$html = <<<HTML

            <div \$containerAttr>
                <button type=\"\$buttonType\" name=\"mauticform[{\$field['alias']}]\" \$inputAttr value=\"1\">{\$field['label']}</button>
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
        return "@bundles/FormBundle/Views/Field/button.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/button.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/button.html.php");
    }
}
