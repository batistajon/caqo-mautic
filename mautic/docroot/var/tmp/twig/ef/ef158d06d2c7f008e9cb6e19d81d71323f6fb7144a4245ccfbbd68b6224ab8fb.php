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

/* @bundles/StageBundle/Views/SubscribedEvents/Search/global.html.php */
class __TwigTemplate_311f44a3718cde961642537d60db9613814a0a171c1086cc9cc9a75ff94c2f89 extends Template
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

<?php if (!empty(\$showMore)): ?>
    <a href=\"<?php echo \$view['router']->url('mautic_stage_index', ['search' => \$searchString]); ?>\" data-toggle=\"ajax\">
        <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
    </a>
</div>
<?php else: ?>
<?php if (\$canEdit): ?>
<a href=\"<?php echo \$view['router']->url('mautic_stage_action', ['objectAction' => 'edit', 'objectId' => \$item->getId()]); ?>\" data-toggle=\"ajax\">
    <?php echo \$item->getName(); ?>
</a>
<?php else: ?>
<span><?php echo \$item->getName(); ?></span>
<?php endif; ?>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Views/SubscribedEvents/Search/global.html.php";
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
        return new Source("", "@bundles/StageBundle/Views/SubscribedEvents/Search/global.html.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Views/SubscribedEvents/Search/global.html.php");
    }
}
