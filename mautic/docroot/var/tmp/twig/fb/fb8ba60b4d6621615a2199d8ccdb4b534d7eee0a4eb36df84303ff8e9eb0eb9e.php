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

/* @bundles/CoreBundle/Views/RightPanel/index.html.twig */
class __TwigTemplate_017838879f4bf6e03ef738ce0f35ca90fff8331c97511b68679a93baa9ec5fb2 extends Template
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
        echo "<div class=\"offcanvas-container\" data-toggle=\"offcanvas\" data-options='{\"openerClass\":\"offcanvas-opener\", \"closerClass\":\"offcanvas-closer\"}'>
    <!-- START Wrapper -->
    <div class=\"offcanvas-wrapper\">
       <div class=\"offcanvas-main\" id=\"OffCanvasMain\">
            <!-- start: sidebar header -->
            <div class=\"sidebar-header box-layout\"  id=\"OffCanvasMainHeader\">
                <div class=\"col-xs-12 pt-lg text-center\">
                    <h4>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.settings", [], "messages");
        echo "</h4>
                </div>

                <!-- start: loading bar -->
                <div class=\"canvas-loading-bar\">
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 14
        echo "                </div>
                <!--/ end: loading bar -->
            </div>
            <!--/ end: sidebar header -->

            <!-- start: sidebar content -->
            <div class=\"sidebar-content\">
                <!-- scroll-content -->
                <div class=\"scroll-content slimscroll\" id=\"OffCanvasMainContent\">
                    <nav class=\"nav-sidebar\">
                        ";
        // line 24
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\MenuExtension']->menuRender("admin");
        echo "
                    </nav>
                </div>
            </div>
            <!--/ end: sidebar content -->
        </div>
    </div>
    <!--/ END Wrapper -->
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/RightPanel/index.html.twig";
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
        return array (  68 => 24,  56 => 14,  54 => 13,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/RightPanel/index.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/RightPanel/index.html.twig");
    }
}
