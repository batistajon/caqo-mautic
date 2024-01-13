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

/* JMSSerializerBundle:Collector:panel.html.twig */
class __TwigTemplate_48f91b39f5c35be8c619c4dc5b0a278679d92b05d7963f5de6504d1401451ff0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "JMSSerializerBundle:Collector:panel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        ob_start(function () { return ''; });
        // line 6
        echo twig_include($this->env, $context, "@JMSSerializer/icon.svg");
        echo "
        <span class=\"sf-toolbar-label\">S:</span>
        <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [1], "method", false, false, false, 8)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">D:</span>
        <span class=\"sf-toolbar-value\">";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [2], "method", false, false, false, 10)), "html", null, true);
        echo "</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "<div class=\"sf-toolbar-info-piece\">
            <b>Serializations</b>
            <span class=\"sf-toolbar-status\">";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [1], "method", false, false, false, 16)), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Deserializations</b>
            <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [2], "method", false, false, false, 20)), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Listeners</b>
            <span class=\"sf-toolbar-status\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getNumListeners", ["called"], "method", false, false, false, 24), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Handlers</b>
            <span class=\"sf-toolbar-status\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getNumHandlers", ["called"], "method", false, false, false, 28), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Metadata</b>
            <span class=\"sf-toolbar-status ";
        // line 32
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 32)) > 0)) ? ("sf-toolbar-status-none") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 32)), "html", null, true);
        echo "</span>
        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "JMSSerializerBundle:Collector:panel.html.twig", 36)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? null)]));
    }

    // line 39
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "<style>
        ";
        // line 41
        echo twig_include($this->env, $context, "@JMSSerializer/Collector/style/jms.css.twig");
        echo "
    </style>
    <style>
        .margin-left {
            margin-left: 10px;
        }

        .margin-top {
            margin-top: 10px;
        }

        .margin-bottom {
            margin-bottom: 10px;
        }
    </style>
    <script type=\"text/javascript\">
        ";
        // line 57
        echo twig_include($this->env, $context, "@JMSSerializer/Collector/script/jms.js.twig");
        echo "
    </script>
    ";
        // line 59
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 62
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    ";
        $context["total"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [1], "method", false, false, false, 64)) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [2], "method", false, false, false, 64)));
        // line 65
        echo "    <span class=\"label ";
        echo (((($context["total"] ?? null) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 67
        echo twig_include($this->env, $context, "@JMSSerializer/icon.svg");
        echo "
        </span>
        <strong>JMS Serializer</strong>

        <span class=\"count\">
            <span>";
        // line 72
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
        </span>

    </span>";
    }

    // line 78
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "<h2>JMS Serializer</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [1], "method", false, false, false, 83)), "html", null, true);
        echo "</span>
            <span class=\"label\">Serializations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 87
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "runs", [2], "method", false, false, false, 87)), "html", null, true);
        echo "</span>
            <span class=\"label\">Deserializations</span>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "triggeredEvents", [], "any", false, false, false, 92), "count", [], "any", false, false, false, 92), "html", null, true);
        echo "</span>
            <span class=\"label\">Triggered event listeners</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 96
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "triggeredEvents", [], "any", false, false, false, 96), "duration", [], "any", false, false, false, 96), 2), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Triggered event listeners (time)</span>
        </div>
    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-events\">
                Events
                <span class=\"badge\">
                    ";
        // line 106
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "triggeredListeners", [], "any", false, false, false, 106)), "html", null, true);
        echo "
                    (";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getNumListeners", ["called"], "method", false, false, false, 107), "html", null, true);
        echo " listeners)
                </span>


            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event listeners</p>

                <div id=\"jms-events\">";
        // line 117
        $this->loadTemplate("@JMSSerializer/Collector/events.html.twig", "JMSSerializerBundle:Collector:panel.html.twig", 117)->display($context);
        // line 118
        echo "</div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-handlers\">
                Handlers
                <span class=\"badge\">
                    ";
        // line 126
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "triggeredHandlers", [], "any", false, false, false, 126)), "html", null, true);
        echo "
                    (";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getNumHandlers", ["called"], "method", false, false, false, 127), "html", null, true);
        echo " types)
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event handlers</p>

                <div id=\"jms-handlers\">";
        // line 135
        $this->loadTemplate("@JMSSerializer/Collector/handlers.html.twig", "JMSSerializerBundle:Collector:panel.html.twig", 135)->display($context);
        // line 136
        echo "</div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Metadata
                <span class=\"badge ";
        // line 143
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 143)) > 0)) ? ("status-info") : (""));
        echo "\">";
        // line 144
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 144)), "html", null, true);
        // line 145
        echo "</span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Loaded metadata</p>

                <div id=\"jms-metadata\">";
        // line 152
        $this->loadTemplate("@JMSSerializer/Collector/metadata.html.twig", "JMSSerializerBundle:Collector:panel.html.twig", 152)->display($context);
        // line 153
        echo "</div>
            </div>
        </div>
    </div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "JMSSerializerBundle:Collector:panel.html.twig";
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
        return array (  291 => 153,  289 => 152,  281 => 145,  279 => 144,  276 => 143,  267 => 136,  265 => 135,  255 => 127,  251 => 126,  241 => 118,  239 => 117,  227 => 107,  223 => 106,  210 => 96,  203 => 92,  195 => 87,  188 => 83,  182 => 79,  178 => 78,  170 => 72,  162 => 67,  156 => 65,  153 => 64,  149 => 62,  145 => 59,  140 => 57,  121 => 41,  118 => 40,  114 => 39,  110 => 36,  103 => 32,  96 => 28,  89 => 24,  82 => 20,  75 => 16,  71 => 14,  69 => 13,  65 => 10,  60 => 8,  55 => 6,  53 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "JMSSerializerBundle:Collector:panel.html.twig", "/var/www/html/mautic/vendor/jms/serializer-bundle/Resources/views/Collector/panel.html.twig");
    }
}
