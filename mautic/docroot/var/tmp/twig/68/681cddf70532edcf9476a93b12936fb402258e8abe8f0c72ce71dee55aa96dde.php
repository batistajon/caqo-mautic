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

/* @bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_widget.html.php */
class __TwigTemplate_7c3643ce24bf6e840d342868bb08cdf8c2cfa6c70b1970abb72acd3a154c9956 extends Template
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

/*
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class=\"tab-pane dynamic-content bdr-w-0<?php echo '0' === \$form->vars['name'] ? ' active' : ' fade'; ?>\" id=\"<?php echo \$form->vars['id']; ?>\">
    <div class=\"panel\">
        <?php
        \$tabHtml = '<ul class=\"bg-auto nav nav-tabs pr-md pl-md\" id=\"dynamicContentFilterTabs_'.\$form->vars['name'].'\">';
        \$tabHtml .= '<li><a role=\"tab\" class=\"addNewDynamicContentFilter\" data-index=\"'.\$form->vars['name']
            .'\"><i class=\"fa fa-plus text-success\"></i> '.\$view['translator']->trans('mautic.core.form.new').'</a></li>';
        \$tabHtml .= '<li class=\"active\"><a data-toggle=\"tab\" href=\"#emailform_dynamicContent_'.\$form->vars['name'].'_default\" role=\"tab\">Default</a></li>';
        \$tabContentHtml = '<div class=\"tab-content pa-md\"><div class=\"tab-pane bdr-w-0 active\" id=\"emailform_dynamicContent_'.\$form->vars['name'].'_default\">';

        \$tabContentHtml .= '<div class=\"row hidden\"><div class=\"col-xs-10\">';
        \$tabContentHtml .= \$view['form']->row(\$form['tokenName']);
        \$tabContentHtml .= '</div></div>';

        \$tabContentHtml .= \$view['form']->row(\$form['content']);
        \$tabContentHtml .= '</div>';

        foreach (\$form['filters'] as \$i => \$filter) {
            \$isFirst = 0 === \$i ? ' active' : '';
            \$tabHtml .= '<li><a role=\"tab\" data-toggle=\"tab\" href=\"#'.\$filter->vars['id'].'\">'.\$view['translator']->trans('mautic.core.dynamicContent.tab').' '.(\$i + 1).'</a></li>';

            \$tabContentHtml .= \$view['form']->widget(\$filter);
        }

        \$tabHtml .= '</ul>';
        \$tabContentHtml .= '</div>';

        echo \$tabHtml;
        echo \$tabContentHtml;
        ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_widget.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_widget.html.php");
    }
}
