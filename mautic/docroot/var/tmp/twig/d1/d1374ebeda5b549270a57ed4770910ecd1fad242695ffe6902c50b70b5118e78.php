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

/* @bundles/FormBundle/Views/Field/group.html.php */
class __TwigTemplate_ece84d3b26b751bb2934aaff2b3858bcdce6b26b66c9f4fdf600407de445bed5 extends Template
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

use Mautic\\CoreBundle\\Helper\\InputHelper;

\$containerType     = \"{\$type}grp\";
\$defaultInputClass = \"{\$containerType}-{\$type}\";
\$ignoreId          = true;
\$ignoreName        = ('checkbox' == \$type);

include __DIR__.'/field_helper.php';

\$optionLabelAttr = (isset(\$properties['labelAttributes'])) ? \$properties['labelAttributes'] : '';
\$wrapDiv         = true;

\$defaultOptionLabelClass = 'mauticform-'.\$containerType.'-label';
if (false === stripos(\$optionLabelAttr, 'class')) {
    \$optionLabelAttr .= ' class=\"'.\$defaultOptionLabelClass.'\"';
} else {
    \$optionLabelAttr = str_ireplace('class=\"', 'class=\"'.\$defaultOptionLabelClass.' ', \$optionLabelAttr);
    \$wrapDiv         = false;
}

\$count   = 0;
\$firstId = 'mauticform_'.\$containerType.'_'.\$type.'_'.\$field['alias'].'_'.InputHelper::alphanum(InputHelper::transliterate(\$firstListValue)).'1';

\$label = (!\$field['showLabel']) ? '' : <<<HTML

                <label \$labelAttr for=\"\$firstId\">{\$field['label']}</label>
HTML;

\$help = (empty(\$field['helpMessage'])) ? '' : <<<HTML

                <span class=\"mauticform-helpmessage\">{\$field['helpMessage']}</span>
HTML;

\$options = [];
\$counter = 0;
foreach (\$list as \$listValue => \$listLabel):

\$id               = \$field['alias'].'_'.InputHelper::alphanum(InputHelper::transliterate(\$listValue)).\$counter;
\$checked          = (\$field['defaultValue'] === \$listValue) ? 'checked=\"checked\"' : '';
\$checkboxBrackets = ('checkbox' == \$type) ? '[]' : '';

\$option = <<<HTML
                    <input {\$inputAttr}{\$checked} name=\"mauticform[{\$field['alias']}]{\$checkboxBrackets}\" id=\"mauticform_{\$containerType}_{\$type}_{\$id}\" type=\"{\$type}\" value=\"{\$view->escape(\$listValue)}\" />
                    <label id=\"mauticform_{\$containerType}_label_{\$id}\" for=\"mauticform_{\$containerType}_{\$type}_{\$id}\" {\$optionLabelAttr}>\$listLabel</label>
HTML;

if (\$wrapDiv):
\$option = <<<HTML

                <div class=\"mauticform-{\$containerType}-row\">\$option
                </div>
HTML;
endif;

\$options[] = \$option;
++\$counter;
endforeach;

\$optionHtml = implode('', \$options);

\$html = <<<HTML

            <div \$containerAttr>{\$label}{\$help}{\$optionHtml}
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
        return "@bundles/FormBundle/Views/Field/group.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/group.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Field/group.html.php");
    }
}
