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

/* @bundles/CoreBundle/Views/Menu/profile.html.twig */
class __TwigTemplate_9f8ddbd80d23643fd999377fb6d15a37c30aee80003985f9cff394bc18121c51 extends Template
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
        $context["inline"] = $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\MenuExtension']->menuRender("profile");
        // line 2
        echo "<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"img-wrapper img-rounded\" style=\"width:32px;\"><img src=\"";
        // line 4
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\GravatarExtension']->getImage(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, false, false, 4), "getEmail", [], "method", false, false, false, 4));
        echo "\"></span>
        <span class=\"text fw-sb ml-xs hidden-xs\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, false, false, 5), "getName", [], "method", false, false, false, 5), "html", null, true);
        echo "</span>
        <span class=\"caret ml-xs\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_account");
        echo "\" data-toggle=\"ajax\">
                <i class=\"fa fa-user fs-14\"></i><span>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.settings", [], "messages");
        echo "</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_logout");
        echo "\">
                <i class=\"fa fa-sign-out fs-14\"></i><span>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.logout", [], "messages");
        echo "</span>
            </a>
        </li>

        ";
        // line 20
        if (($context["inline"] ?? null)) {
            // line 21
            echo "        <li role=\"separator\" class=\"divider\"></li>
        ";
            // line 22
            echo twig_escape_filter($this->env, ($context["inline"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 24
        echo "    </ul>
</li>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Menu/profile.html.twig";
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
        return array (  87 => 24,  82 => 22,  79 => 21,  77 => 20,  70 => 16,  66 => 15,  59 => 11,  55 => 10,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Menu/profile.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Menu/profile.html.twig");
    }
}
