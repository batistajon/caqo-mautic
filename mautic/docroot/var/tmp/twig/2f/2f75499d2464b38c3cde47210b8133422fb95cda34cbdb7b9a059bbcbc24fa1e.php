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

/* @bundles/FormBundle/Views/Field/text.html.php */
class __TwigTemplate_ea71bfc709a15f875ec06c29432313242497643708c2f29cf4e8063ad6fbc983 extends Template
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

\$containerType     = (isset(\$type)) ? \$type : 'text';
\$defaultInputClass = (isset(\$inputClass)) ? \$inputClass : 'input';

include __DIR__.'/field_helper.php';

\$label = (!\$field['showLabel']) ? '' : <<<HTML

                <label \$labelAttr>{\$field['label']}</label>
HTML;

\$help = (empty(\$field['helpMessage'])) ? '' : <<<HTML

                <span class=\"mauticform-helpmessage\">{\$field['helpMessage']}</span>
HTML;

if ('textarea' == \$containerType):
\$textInput = <<<HTML

                <textarea \$inputAttr>{\$field['defaultValue']}</textarea>
HTML;

else:
\$textInput = <<<HTML

                <input {\$inputAttr} type=\"\$containerType\" />
HTML;
endif;

\$html = <<<HTML

            <div \$containerAttr>{\$label}{\$help}{\$textInput}
                <span class=\"mauticform-errormsg\" style=\"display: none;\">\$validationMessage</span>
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
        return "@bundles/FormBundle/Views/Field/text.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/text.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/text.html.php");
    }
}
