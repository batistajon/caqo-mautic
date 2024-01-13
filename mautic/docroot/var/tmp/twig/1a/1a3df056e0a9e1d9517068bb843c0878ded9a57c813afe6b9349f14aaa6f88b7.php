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

/* @bundles/CoreBundle/Views/Update/schema.html.php */
class __TwigTemplate_98ad475b3d27d79085e08e175ddfccb655ce117a54156f6738788054f8349e55 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'update');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.core.update.index'));

if (\$failed) {
    \$message = \$view['translator']->trans('mautic.core.update.error_performing_migration');
    \$class   = 'danger';
} elseif (\$noMigrations) {
    \$message = \$view['translator']->trans('mautic.core.update.schema_uptodate');
    \$class   = 'mautic';
} else {
    \$message = \$view['translator']->trans('mautic.core.update.schema_updated');
    \$class   = 'success';
}
?>

<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
    <div id=\"update-panel\" class=\"panel-body\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"alert alert-<?php echo \$class; ?> mb-sm\">
                <?php echo \$view['translator']->trans(\$message); ?>
            </div>
            <?php if (!\$failed): ?>
                <div class=\"text-center\">
                    <a href=\"<?php echo \$view['router']->path('mautic_dashboard_index'); ?>\" data-toggle=\"ajax\"><?php echo \$view['translator']->trans('mautic.core.go_to_dashboard'); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Update/schema.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Update/schema.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Update/schema.html.php");
    }
}
