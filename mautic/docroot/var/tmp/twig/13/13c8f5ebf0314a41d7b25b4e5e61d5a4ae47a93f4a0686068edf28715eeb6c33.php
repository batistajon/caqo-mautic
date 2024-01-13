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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-all/html/form.html.twig */
class __TwigTemplate_f209f03d8866eca6be3077c8a8a26dd64333e047851781bd09da6318665ce037 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((":" . ($context["template"] ?? null)) . ":base.html.twig"), "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-all/html/form.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (array_key_exists("message", $context)) {
            // line 5
            echo "        <div class=\"well text-center\">
            <p>";
            // line 6
            echo ($context["message"] ?? null);
            echo "</p>
        </div>
    ";
        }
        // line 9
        echo "
    <div class=\"form-container\">
        ";
        // line 11
        if (array_key_exists("header", $context)) {
            // line 12
            echo "        <h4>";
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "</h4>
        ";
        }
        // line 14
        echo "        ";
        echo ($context["content"] ?? null);
        echo "
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-all/html/form.html.twig";
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
        return array (  73 => 14,  67 => 12,  65 => 11,  61 => 9,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-all/html/form.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-all/html/form.html.twig");
    }
}
