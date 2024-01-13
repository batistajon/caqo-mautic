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

/* @bundles/PluginBundle/Views/Auth/postauth.html.php */
class __TwigTemplate_7999da96c46cd5dfd21d247db4cf45c10e474133df0a1e454dddfbae0c88d07e extends Template
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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
\$view->extend('MauticCoreBundle:Default:slim.html.php');
\$view['slots']->set('mauticContent', 'social');

\$data = json_encode(\$data);
\$js   = <<<JS
function postFormHandler() {
    var opener = window.opener;
    if (opener && typeof opener.postAuthCallback == 'function') {
        opener.postAuthCallback({\$data});
    } else {
        Mautic.refreshIntegrationForm();
    }
    window.close()
}
JS;

if (!empty(\$message) && 'success' === \$alert):
    \$js .= <<<'JS'
    
(function() {
   postFormHandler();
})();
JS;
endif;
?>
<script>
    <?php echo \$js; ?>
</script>

<?php if (!empty(\$message)): ?>
    <div class=\"alert alert-<?php echo \$alert; ?>\">
        <?php echo \$message; ?>
    </div>
<?php endif; ?>
<div class=\"row\">
    <div class=\"col-sm-12 text-center\">
        <a class=\"btn btn-lg btn-primary\" href=\"javascript:void(0);\" onclick=\"postFormHandler();\">
            <?php echo \$view['translator']->trans('mautic.integration.closewindow'); ?>
        </a>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/Auth/postauth.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/Auth/postauth.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/Auth/postauth.html.php");
    }
}
