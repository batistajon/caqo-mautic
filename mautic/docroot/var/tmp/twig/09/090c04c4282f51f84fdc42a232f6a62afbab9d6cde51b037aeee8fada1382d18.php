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

/* @bundles/CoreBundle/Views/Default/slim.html.twig */
class __TwigTemplate_861d2c3b0c1830693c6f8d3f6c06391635be65c0e85a76a70abefb7f6532e6a1 extends Template
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
        $this->loadTemplate("MauticCoreBundle:Default:head.html.twig", "@bundles/CoreBundle/Views/Default/slim.html.twig", 3)->display($context);
        // line 4
        echo "    <body>
        ";
        // line 5
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "
        <section id=\"app-content\" class=\"container content-only\">
            ";
        // line 7
        echo twig_include($this->env, $context, "MauticCoreBundle:Notification:flashes.html.twig", ["alertType" => "standard"]);
        // line 9
        echo "
            ";
        // line 10
        echo twig_include($this->env, $context, "MauticCoreBundle:Default:output.html.twig");
        echo "
        </section>
        ";
        // line 12
        echo twig_include($this->env, $context, "MauticCoreBundle:Helper:modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 15
        echo "
        ";
        // line 16
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
        <script>
            Mautic.onPageLoad('body');
        </script>
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/slim.html.twig";
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
        return array (  66 => 16,  63 => 15,  61 => 12,  56 => 10,  53 => 9,  51 => 7,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Default/slim.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/slim.html.twig");
    }
}
