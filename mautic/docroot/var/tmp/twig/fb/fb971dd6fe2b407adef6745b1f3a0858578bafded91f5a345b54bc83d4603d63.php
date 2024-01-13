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

/* @bundles/CoreBundle/Views/Default/navbar.html.twig */
class __TwigTemplate_61d43bd405c064825d56d02c25af61950c3e98df1934a5ca8b919670e7c7c46e extends Template
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
        echo "<div class=\"loading-bar\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 3
        echo "</div>

<div class=\"navbar-nocollapse\">
    <!-- start: left nav -->
    <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"hidden-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Minimize Sidebar\">
            <a href=\"javascript:void(0)\" data-toggle=\"minimize\" class=\"sidebar-minimizer\"><span class=\"arrow fs-14\"></span></a>
        </li>
        <li class=\"visible-xs\">
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"ltr\">
                <i class=\"fa fa-navicon fs-16\"></i>
            </a>
        </li>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MauticCoreBundle:Default:notifications"));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MauticCoreBundle:Default:globalSearch"));
        echo "
    </ul>
    <!--/ end: left nav -->

    <!-- start: right nav -->
    <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 23
        echo twig_include($this->env, $context, "MauticCoreBundle:Menu:profile.html.twig");
        echo "
        <li>
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"rtl\">
                <i class=\"fa fa-cog fs-16\"></i>
            </a>
        </li>
    </ul>
    <div class=\"navbar-toolbar pull-right mt-15 mr-10\">
    ";
        // line 31
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\ButtonExtension']->resetAndRender(twig_constant("Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper::LOCATION_NAVBAR"));
        echo "
    </div>

    <!--/ end: right nav -->
</div>
<!--/ end: navbar nocollapse -->";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/navbar.html.twig";
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
        return array (  81 => 31,  70 => 23,  61 => 17,  57 => 16,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Default/navbar.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/navbar.html.twig");
    }
}
