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

/* @bundles/DashboardBundle/Views/Dashboard/recentactivity.html.php */
class __TwigTemplate_79eead19aba06bbee341fb3ba799eb3da1d4164ce5138651fa14266cd458ba29 extends Template
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
?>

<?php if (isset(\$logs) && \$logs) : ?>
<div class=\"pt-md pr-md pb-md pl-md\">
    <ul class=\"media-list media-list-feed\">
        <?php foreach (\$logs as \$log) : ?>
        <?php // If the data are loaded from cache array:?>
        <?php if (is_array(\$log['dateAdded']) && isset(\$log['dateAdded']['date'])) {
    \$log['dateAdded'] = new \\DateTime(\$log['dateAdded']['date'], (new \\DateTimeZone(\$log['dateAdded']['timezone'])));
} ?>
        <li class=\"media\">
            <div class=\"media-object pull-left\">
                <span class=\"figure featured <?php echo ('create' == \$log['action']) ? 'bg-success' : ''; ?>\">
                    <span class=\"fa <?php echo isset(\$icons[\$log['bundle']]) ? \$icons[\$log['bundle']] : ''; ?>\"></span>
                </span>
            </div>
            <div class=\"media-body\">
                <?php if (isset(\$log['userId']) && \$log['userId']) : ?>
                    <a href=\"<?php echo \$view['router']->path('mautic_user_action', ['objectAction' => 'edit', 'objectId' => \$log['userId']]); ?>\" data-toggle=\"ajax\">
                        <?php echo \$log['userName']; ?>
                    </a>
                <?php elseif (\$log['userName']) : ?>
                    <?php echo \$log['userName']; ?>
                <?php else: ?>
                    <?php echo \$view['translator']->trans('mautic.core.system'); ?>
                <?php endif; ?>
                <?php echo \$view['translator']->trans('mautic.dashboard.'.\$log['action'].'.past.tense'); ?>

                <?php if (!empty(\$log['route'])): ?>
                <a href=\"<?php echo \$log['route']; ?>\" data-toggle=\"ajax\">
                    <?php echo \$log['objectName']; ?>
                </a>
                <?php elseif (!empty(\$log['objectName'])): ?>
                    <?php echo \$log['objectName']; ?>
                <?php endif; ?>
                <?php echo \$log['object']; ?>
                <p class=\"fs-12 dark-sm\"><small> <?php echo \$view['date']->toFull(\$log['dateAdded']); ?></small></p>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Views/Dashboard/recentactivity.html.php";
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
        return new Source("", "@bundles/DashboardBundle/Views/Dashboard/recentactivity.html.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Views/Dashboard/recentactivity.html.php");
    }
}
