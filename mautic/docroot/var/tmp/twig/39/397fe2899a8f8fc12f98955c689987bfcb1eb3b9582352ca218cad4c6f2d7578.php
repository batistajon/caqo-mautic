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

/* @bundles/CoreBundle/Views/Default/script.html.php */
class __TwigTemplate_830cd18e491c98db75f635107c8515055f9842bbd79fd65cfd5c59c1deab42df extends Template
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

\$mauticContent = \$view['slots']->get(
    'mauticContent',
    isset(\$mauticTemplateVars['mauticContent']) ? \$mauticTemplateVars['mauticContent'] : ''
);
?>

<script>
    var mauticBasePath    = '<?php echo \$app->getRequest()->getBasePath(); ?>';
    var mauticBaseUrl     = '<?php echo \$view['router']->path('mautic_base_index'); ?>';
    var mauticAjaxUrl     = '<?php echo \$view['router']->path('mautic_core_ajax'); ?>';
    var mauticAjaxCsrf    = '<?php echo \$view['security']->getCsrfToken('mautic_ajax_post'); ?>';
    var mauticImagesPath  = '<?php echo \$view['assets']->getImagesPath(); ?>';
    var mauticAssetPrefix = '<?php echo \$view['assets']->getAssetPrefix(true); ?>';
    var mauticContent     = '<?php echo \$mauticContent; ?>';
    var mauticEnv         = '<?php echo \$app->getEnvironment(); ?>';
    var mauticLang        = <?php echo \$view['translator']->getJsLang(); ?>;
    var mauticLocale      = '<?php echo \$app->getRequest()->getLocale(); ?>';
    var mauticEditorFonts = <?php echo json_encode(\$view['config']->get('editor_fonts')); ?>;
</script>
<?php \$view['assets']->outputSystemScripts(true); ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/script.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Default/script.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/script.html.php");
    }
}
