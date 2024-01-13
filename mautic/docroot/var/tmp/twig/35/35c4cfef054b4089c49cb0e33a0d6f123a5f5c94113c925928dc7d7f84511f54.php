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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig */
class __TwigTemplate_ba8f42b4ca0c01145dbf268450d2965794cf543a41807285b612355736e1af94 extends Template
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
<head>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/") . ($context["theme"] ?? null)) . "/jquery-ui.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/elfinder.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/css/theme.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/2.jquery.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/jquery-ui.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/elfinder.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
    var editorType = '';
    var editor = null;

    ";
        // line 17
        echo "    ";
        if (!twig_in_filter(($context["locale"] ?? null), ["ar", "bg", "ca", "cs", "de", "en", "es", "fr", "hu", "jp", "nl", "pl", "pt_BR", "ru", "sk", "zh_CN"])) {
            // line 18
            echo "    ";
            $context["locale"] = "en";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    jQuery().ready(function() {
        var \$f = jQuery('.elfinder').elfinder({
            url : '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null)]), "html", null, true);
        echo "',
            lang : '";
        // line 23
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "',
            i18nBaseUrl : '";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["prefix"] ?? null) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/")), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 25
        echo ($context["onlyMimes"] ?? null);
        echo ",
            getFileCallback : function(file, fm) {
                let fileUrl = file.url;
                if (file.baseUrl == '' && typeof window.opener.mauticImagesPath !== 'undefined') {
                    fileUrl = window.opener.mauticImagesPath+'/'+file.name;
                }

                const editorParam = new RegExp('(?:[\\?&]|&amp;)editor=([^&]+)', 'i');
                const editorMatch = window.location.search.match(editorParam);
                if (editorMatch && editorMatch.length > 1 && editorMatch[1] == 'ckeditor') {
                    window.opener.CKEDITOR.tools.callFunction((function () {
                        const reParam = new RegExp('(?:[\\?&]|&amp;)CKEditorFuncNum=([^&]+)', 'i');
                        const match = window.location.search.match(reParam);
                        return (match && match.length > 1) ? match[1] : '';
                    })(), fm.convAbsUrl(fileUrl));
                    fm.destroy();
                } else {
                    window.opener.document.fileManagerInsertImageCallback('textarea.editor', fileUrl);
                }

                window.close();
            }
        });

        ";
        // line 49
        if (($context["fullscreen"] ?? null)) {
            // line 50
            echo "        var \$window = jQuery(window);
        \$window.resize(function(){
            var \$win_height = \$window.height();
            if( \$f.height() != \$win_height ){
                \$f.height(\$win_height).resize();
            }
        });
        \$window.resize();
        ";
        }
        // line 59
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig";
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
        return array (  137 => 59,  126 => 50,  124 => 49,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  64 => 11,  60 => 10,  56 => 9,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig");
    }
}
