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

/* @bundles/CoreBundle/Views/Helper/recentactivity.html.php */
class __TwigTemplate_f2c2e5c356aa4ff48bf351b851023251684d9800e7c2f135b974539a29253d8f extends Template
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

<div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.core.recent.activity'); ?></div>
    </div>
    <div class=\"panel-body pt-xs\">
        <?php if (isset(\$logs) && \$logs) : ?>
        <ul class=\"media-list media-list-feed\">
            <?php foreach (\$logs as \$log) : ?>
            <li class=\"media\">
                <div class=\"media-object pull-left\">
                <?php if ('create' == \$log['action']) : ?>
                    <span class=\"figure featured bg-success\"><span class=\"fa fa-check\"></span></span>
                <?php else: ?>
                    <span class=\"figure\"></span>
                <?php endif; ?>
                </div>
                <div class=\"media-body\">
                    <?php echo \$view['translator']->trans('mautic.core.'.\$log['action'].'.by.past.tense'); ?>
                    <?php if (!empty(\$log['userId'])) : ?>
                        <a href=\"<?php echo \$view['router']->path('mautic_user_action', ['objectAction' => 'edit', 'objectId' => \$log['userId']]); ?>\" data-toggle=\"ajax\">
                            <?php echo \$log['userName']; ?>
                        </a>
                    <?php else: ?>
                        <?php echo \$log['userName']; ?>
                    <?php endif; ?>
                    <p class=\"fs-12 dark-sm\"><small> <?php echo \$view['date']->toFull(\$log['dateAdded']); ?></small></p>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php echo '<!-- recent activity logs '.PHP_EOL.json_encode(\\Mautic\\CoreBundle\\Helper\\InputHelper::clean(\$logs), JSON_PRETTY_PRINT).PHP_EOL.' -->'; ?>
        <?php endif; ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/recentactivity.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/recentactivity.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/recentactivity.html.php");
    }
}
