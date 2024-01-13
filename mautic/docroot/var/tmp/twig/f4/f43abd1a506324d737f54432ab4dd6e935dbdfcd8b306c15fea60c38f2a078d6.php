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

/* @bundles/PointBundle/Views/SubscribedEvents/Search/global_trigger.html.php */
class __TwigTemplate_6a379f3976324b87a5a5ef0f7d0d7c11dad758c2768ffa94ba677ff197246dba extends Template
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
    <a href=\"<?php echo \$view['router']->url('mautic_pointtrigger_index', ['search' => \$searchString]); ?>\" data-toggle=\"ajax\">
        <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
    </a>
</div>
<?php else: ?>
<?php if (\$canEdit): ?>
<a href=\"<?php echo \$view['router']->url('mautic_pointtrigger_index', ['objectAction' => 'edit', 'objectId' => \$item->getId()]); ?>\" data-toggle=\"ajax\">
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
        return "@bundles/PointBundle/Views/SubscribedEvents/Search/global_trigger.html.php";
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
        return new Source("", "@bundles/PointBundle/Views/SubscribedEvents/Search/global_trigger.html.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Views/SubscribedEvents/Search/global_trigger.html.php");
    }
}
