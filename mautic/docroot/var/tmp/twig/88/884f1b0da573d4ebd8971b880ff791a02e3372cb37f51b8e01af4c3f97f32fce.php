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

/* @bundles/PluginBundle/Views/Auth/auth.html.php */
class __TwigTemplate_316faa9ab67cc882df6a92732dd4a204fe29a6af7283f48baf469a4a99f72c52 extends Template
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
        echo "<?php

\$view->extend('MauticCoreBundle:Default:slim.html.php');
\$js = <<<JS
Mautic.handleIntegrationCallback(\"\$integration\", \"\$csrfToken\", \"\$code\", \"\$callbackUrl\", \"\$clientIdKey\", \"\$clientSecretKey\");
JS;
\$view['assets']->addScriptDeclaration(\$js, 'bodyClose');
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/Auth/auth.html.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/PluginBundle/Views/Auth/auth.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/Auth/auth.html.php");
    }
}
