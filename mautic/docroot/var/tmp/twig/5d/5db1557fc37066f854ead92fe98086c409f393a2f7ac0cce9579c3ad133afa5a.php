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

/* @bundles/FormBundle/Views/SubscribedEvents/Search/global.html.php */
class __TwigTemplate_400d0d9ce462d24190e19b7d02b49eea01f8b3e23d6275b88e1a3f7db71cf2f4 extends Template
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
<a href=\"<?php echo \$view['router']->url('mautic_form_index', ['search' => \$searchString]); ?>\" data-toggle=\"ajax\">
    <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
</a>
<?php else: ?>
    <a href=\"<?php echo \$view['router']->url('mautic_form_action', ['objectAction' => 'view', 'objectId' => \$form->getId()]); ?>\" data-toggle=\"ajax\">
    <?php echo \$form->getName(); ?>
    <span class=\"label label-default pull-right\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.form.form.resultcount'); ?>\" data-placement=\"left\">
        <?php echo \$form->getResultCount(); ?>
    </span>
</a>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/SubscribedEvents/Search/global.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/SubscribedEvents/Search/global.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/SubscribedEvents/Search/global.html.php");
    }
}
