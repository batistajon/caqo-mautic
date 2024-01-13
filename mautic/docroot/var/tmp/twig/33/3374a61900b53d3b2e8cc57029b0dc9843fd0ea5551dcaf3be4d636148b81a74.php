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

/* @bundles/CoreBundle/Views/Default/script.html.twig */
class __TwigTemplate_71e52fc1ac06590d55ed734a41b3730e662401f6f82aca823f9aca86dbc2414c extends Template
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
        $context["mautic_content"] = ((twig_get_attribute($this->env, $this->source, ($context["mauticTemplateVars"] ?? null), "mauticContent", [], "any", true, true, false, 1)) ? (twig_get_attribute($this->env, $this->source, ($context["mauticTemplateVars"] ?? null), "mauticContent", [], "any", false, false, false, 1)) : (""));
        // line 2
        echo "
<script>
    var mauticBasePath    = '";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "getBasePath", [], "method", false, false, false, 4), "html", null, true);
        echo "';
    var mauticBaseUrl     = \"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_base_index");
        echo "\";
    var mauticAjaxUrl     = \"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax");
        echo "\";
    var mauticAjaxCsrf    = '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\SecurityExtension']->getCsrfToken("mautic_ajax_post"), "html", null, true);
        echo "';
    var mauticImagesPath  = '";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getImagesPath(), "html", null, true);
        echo "';
    var mauticAssetPrefix = '";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetPrefix(true), "html", null, true);
        echo "';
    var mauticContent     = '";
        // line 10
        echo twig_escape_filter($this->env, ($context["mautic_content"] ?? null), "html", null, true);
        echo "';
    var mauticEnv         = '";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 11), "html", null, true);
        echo "';
    var mauticLang        = ";
        // line 12
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\TranslatorExtension']->getJsLang();
        echo ";
    var mauticLocale      = '";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "getLocale", [], "method", false, false, false, 13), "html", null, true);
        echo "';
    var mauticEditorFonts = ";
        // line 14
        echo json_encode($this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\ConfigExtension']->get("editor_fonts"));
        echo ";
</script>
";
        // line 16
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputSystemScripts(true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/script.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 16,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Default/script.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/script.html.twig");
    }
}
