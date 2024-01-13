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

/* @bundles/CoreBundle/Views/Translation/row.html.php */
class __TwigTemplate_ffab60fec81a57ef3f88d903e8559a4c8b15c309996166166ed2bf53cc4ccc9e extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
\$isCurrent = (\$translation->getId() === \$activeEntity->getId());
?>
<li class=\"list-group-item bg-auto bg-<?php echo (\$isCurrent) ? 'dark' : 'light'; ?>-xs\">
    <div class=\"box-layout\">
        <div class=\"col-md-1 va-m\">
            <h3>
                <?php echo \$view->render(
                    'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                    [
                        'item'  => \$translation,
                        'model' => \$model,
                        'size'  => '',
                        'query' => 'size=',
                    ]
                ); ?>
            </h3>
        </div>
        <div class=\"col-md-7 va-m\">
            <h5 class=\"fw-sb text-primary\">
                <a href=\"<?php echo \$view['router']->path(\$actionRoute, ['objectAction' => 'view', 'objectId' => \$translation->getId()]); ?>\" data-toggle=\"ajax\">
                    <span><?php echo \$translation->\$nameGetter(); ?></span>
                </a>
                <?php if (\$isCurrent) : ?>
                    <span class=\"label label-success\"><?php echo \$view['translator']->trans('mautic.core.current'); ?></span>
                <?php endif; ?>
                <?php if (\$translations['parent']->getId() === \$translation->getId()) : ?>
                    <span class=\"label label-warning\"><?php echo \$view['translator']->trans('mautic.core.parent'); ?></span>
                <?php endif; ?>
            </h5>
            <?php if (method_exists(\$translation, 'getAlias')): ?>
                <span class=\"text-white dark-sm\"><?php echo \$translation->getAlias(); ?></span>
            <?php endif; ?>
        </div>
        <div class=\"col-md-4 va-m text-right\">
            <em class=\"text-white dark-sm\"><?php echo \$translation->getLanguage(); ?></em>
        </div>
    </div>
</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Translation/row.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Translation/row.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Translation/row.html.php");
    }
}
