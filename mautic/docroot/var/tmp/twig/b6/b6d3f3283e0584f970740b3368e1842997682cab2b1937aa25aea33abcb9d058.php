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

/* @bundles/FormBundle/Views/Field/pagebreak.html.php */
class __TwigTemplate_6ae0a2d6d4fb224cedf967bfcdd905bfd5872a54b4ab2c957db561c2eab3f901 extends Template
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

\$containerType     = 'pagebreak-wrapper';
\$defaultInputClass = 'pagebreak';

include __DIR__.'/field_helper.php';

\$backButtonAttr = \$nextButtonAttr = \$inputAttr;
\$classPrefix    = 'btn btn-default mautic-pagebreak-';

\$appendAttribute(\$backButtonAttr, 'class', \$classPrefix.'back');
\$appendAttribute(\$nextButtonAttr, 'class', \$classPrefix.'next'.((!empty(\$inForm)) ? ' mr-lg ' : ''));

if (empty(\$inForm)) {
    \$containerAttr .= ' data-mautic-form-pagebreak=\"'.\$fieldPage.'\"';

    // Hidden by default and only visible if JS makes it so
    \$appendAttribute(\$containerAttr, 'style', 'display: none;');
}

if (empty(trim(\$field['properties']['prev_page_label']))) {
    \$appendAttribute(\$backButtonAttr, 'style', 'display: none;');
}

\$html = <<<HTML

            <div \$containerAttr>
                <button type=\"button\" \$backButtonAttr data-mautic-form-pagebreak-button=\"prev\">{\$field['properties']['prev_page_label']}</button>
                <button type=\"button\" \$nextButtonAttr data-mautic-form-pagebreak-button=\"next\">{\$field['properties']['next_page_label']}</button>
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
        return "@bundles/FormBundle/Views/Field/pagebreak.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/pagebreak.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/pagebreak.html.php");
    }
}
