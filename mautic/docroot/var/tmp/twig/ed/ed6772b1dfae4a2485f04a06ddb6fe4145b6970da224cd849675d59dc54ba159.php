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

/* @bundles/CoreBundle/Views/Default/head.html.twig */
class __TwigTemplate_d4e4c78d6a530b5ba9f430e6b87becc3bfa94ab93ee142e91d04c76206e54c48 extends Template
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
        echo "<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 3
        echo twig_escape_filter($this->env, twig_striptags(($context["headerTitle"] ?? null)), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_striptags(((array_key_exists("pageTitle", $context)) ? (_twig_default_filter(($context["pageTitle"] ?? null), "Mautic")) : ("Mautic"))), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/apple-touch-icon.png"), "html", null, true);
        echo "\" />

    ";
        // line 9
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputSystemStylesheets();
        echo "

    ";
        // line 11
        $this->loadTemplate("MauticCoreBundle:Default:script.html.twig", "@bundles/CoreBundle/Views/Default/head.html.twig", 11)->display($context);
        // line 12
        echo "
    ";
        // line 13
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
</head>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/head.html.twig";
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
        return array (  71 => 13,  68 => 12,  66 => 11,  61 => 9,  56 => 7,  52 => 6,  48 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Default/head.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/head.html.twig");
    }
}
