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

/* @bundles/CoreBundle/Views/Notification/notification.html.twig */
class __TwigTemplate_b18b2b3150bb503985326d2da297f446ce3f5301cd86ac00c25ae830a0cb219e extends Template
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
        echo "<div class=\"media pt-sm pb-sm pr-md pl-md nm bdr-b notification\" id=\"notification";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <span class=\"pull-left mt-xs\" style=\"width:36px\">
        ";
        // line 3
        if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "iconClass", [], "any", false, false, false, 3)) && is_string($__internal_compile_1 = "img:") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 4
            echo "        <span class=\"img-wrapper img-rounded\">
            <img class=\"media-object\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "iconClass", [], "any", false, false, false, 5), 4), "html", null, true);
            echo "\" />
        </span>
        ";
        } else {
            // line 8
            echo "        ";
            $context["tooltip"] = ((twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "type", [], "any", false, false, false, 8)) ? (" data-toggle=\"tooltip\" title=\"{% trans %}mautic.notifications.type.{{ n.type }}{% endtrans %}") : (""));
            // line 9
            echo "        <i class=\"fa fa-2x ";
            ((twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "iconClass", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "iconClass", [], "any", false, false, false, 9), "html", null, true))) : (print ("fa-star")));
            echo "\"";
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? null), "html", null, true);
            echo "></i>
        ";
        }
        // line 11
        echo "    </span>
    <a href=\"javascript:void(0);\" class=\"btn btn-default btn-xs btn-nospin pull-right do-not-close\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.notifications.clear", [], "messages");
        echo "\" onclick=\"Mautic.clearNotification(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        echo ");\"><i class=\"fa fa-times do-not-close\"></i></a>
    ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "isRead", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <span class=\"pull-right is-unread text-danger\"><i class=\"fa fa-asterisk\"></i></span>
    ";
        }
        // line 16
        echo "    <div class=\"media-body\">
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "header", [], "any", false, false, false, 17)) {
            // line 18
            echo "            <div class=\"media-heading fw-sb mb-0 text-primary\">";
            echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\FormatterExtension']->_(twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "header", [], "any", false, false, false, 18));
            echo "</div>
        ";
        }
        // line 20
        echo "        <div>";
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\FormatterExtension']->_(twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "message", [], "any", false, false, false, 20), "html");
        echo "</div>
        <div class=\"clearfix mt-xs\">
            <span class=\"fa fa-clock-o text-success pull-left mr-xs notification-timer-icon\"></span>
            <span class=\"fs-10 text-muted pull-left\">";
        // line 23
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, ($context["n"] ?? null), "dateAdded", [], "any", false, false, false, 23));
        echo "</span>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Notification/notification.html.twig";
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
        return array (  98 => 23,  91 => 20,  85 => 18,  83 => 17,  80 => 16,  76 => 14,  74 => 13,  68 => 12,  65 => 11,  57 => 9,  54 => 8,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Notification/notification.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Notification/notification.html.twig");
    }
}
