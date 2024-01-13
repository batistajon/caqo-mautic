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

/* @bundles/CoreBundle/Views/Default/base.html.twig */
class __TwigTemplate_98fefdb4dedbd71c521d1bcc3e25ad1dfa9b759fc4cd25f43207210539e6bf3c extends Template
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
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        echo twig_include($this->env, $context, "MauticCoreBundle:Default:head.html.twig");
        echo "
    <body class=\"header-fixed\">
        <section id=\"app-wrapper\">
            ";
        // line 6
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "

            <aside class=\"app-sidebar sidebar-left\">
                ";
        // line 9
        echo twig_include($this->env, $context, "MauticCoreBundle:LeftPanel:index.html.twig");
        echo "
            </aside>

            <aside class=\"app-sidebar sidebar-right\">
                ";
        // line 13
        echo twig_include($this->env, $context, "MauticCoreBundle:RightPanel:index.html.twig");
        echo "
            </aside>

            <header id=\"app-header\" class=\"navbar\">
                ";
        // line 17
        echo twig_include($this->env, $context, "MauticCoreBundle:Default:navbar.html.twig");
        echo "

                ";
        // line 19
        echo twig_include($this->env, $context, "MauticCoreBundle:Notification:flashes.html.twig");
        echo "
            </header>

            <!-- start: app-footer(need to put on top of #app-content)-->
            <footer id=\"app-footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 text-muted\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.copyright", ["%date%" => twig_date_format_filter($this->env, "now", "Y")], "messages");
        echo "</div>
                        <div class=\"col-xs-6 text-muted text-right small\">v";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\VersionExtension']->getVersion(), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </footer>
            <!--/ end: app-footer -->

            <section id=\"app-content\">
                ";
        // line 34
        echo twig_include($this->env, $context, "MauticCoreBundle:Default:output.html.twig");
        echo "
            </section>

            <script>
                Mautic.onPageLoad('body');
                ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 39) === "dev")) {
            // line 40
            echo "                mQuery( document ).ajaxComplete(function(event, XMLHttpRequest, ajaxOption){
                    if(XMLHttpRequest.responseJSON && typeof XMLHttpRequest.responseJSON.ignore_wdt == 'undefined' && XMLHttpRequest.getResponseHeader('x-debug-token')) {
                        if (mQuery('[class*=\"sf-tool\"]').length) {
                            mQuery('[class*=\"sf-tool\"]').remove();
                        }

                        mQuery.get(mauticBaseUrl + '_wdt/'+XMLHttpRequest.getResponseHeader('x-debug-token'),function(data){
                            mQuery('body').append('<div class=\"sf-toolbar-reload\">'+data+'</div>');
                        });
                    }
                });
                ";
        }
        // line 52
        echo "            </script>
            ";
        // line 53
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
            ";
        // line 54
        echo twig_include($this->env, $context, "MauticCoreBundle:Helper:modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 57
        echo "
        </section>
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/base.html.twig";
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
        return array (  129 => 57,  127 => 54,  123 => 53,  120 => 52,  106 => 40,  104 => 39,  96 => 34,  86 => 27,  82 => 26,  72 => 19,  67 => 17,  60 => 13,  53 => 9,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Default/base.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/base.html.twig");
    }
}
