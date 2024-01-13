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

/* @bundles/FormBundle/Views/Field/select.html.php */
class __TwigTemplate_5c379e69cdcc6639aabbfb46f08c63d874a90b86dc44f8f97dae2954fef364c5 extends Template
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

\$defaultInputFormClass = ' not-chosen';
\$defaultInputClass     = 'selectbox';
\$containerType         = 'select';

include __DIR__.'/field_helper.php';

if (!empty(\$properties['multiple'])) {
    \$inputAttr .= ' multiple=\"multiple\"';
}

\$label = (!\$field['showLabel']) ? '' : <<<HTML

                <label \$labelAttr>{\$field['label']}</label>
HTML;

\$help = (empty(\$field['helpMessage'])) ? '' : <<<HTML

                <span class=\"mauticform-helpmessage\">{\$field['helpMessage']}</span>
HTML;

\$emptyOption = '';
if ((!empty(\$properties['placeholder']) || empty(\$field['defaultValue']) && empty(\$properties['multiple']))):
    \$placeholder = \$properties['placeholder'] ?? '';
    \$emptyOption = <<<HTML
                    <option value=\"\">{\$placeholder}</option>
HTML;
endif;

\$optionBuilder = function (array \$list, \$emptyOptionHtml = '') use (&\$optionBuilder, \$field, \$view) {
    \$html = \$emptyOptionHtml;
    foreach (\$list as \$listValue => \$listLabel):
        if (is_array(\$listLabel)) {
            // This is an option group
            \$html .= <<<HTML

                    <optgroup label=\"\$listValue\">
                    {\$optionBuilder(\$listLabel)}
                    </optgroup>

HTML;

            continue;
        }

    \$selected  = (\$listValue === \$field['defaultValue']) ? ' selected=\"selected\"' : '';
    \$html .= <<<HTML
                    <option value=\"{\$view->escape(\$listValue)}\"{\$selected}>{\$view->escape(\$listLabel)}</option>
HTML;
    endforeach;

    return \$html;
};

\$optionsHtml = \$optionBuilder(\$list, \$emptyOption);
\$html        = <<<HTML

            <div \$containerAttr>{\$label}{\$help}
                <select \$inputAttr>\$optionsHtml
                </select>
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
        return "@bundles/FormBundle/Views/Field/select.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/select.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/select.html.php");
    }
}
