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

/* @bundles/UserBundle/Views/SubscribedEvents/Search/global_role.html.php */
class __TwigTemplate_e9488d0d8fb8fe51b0fe225d981b88eb89ff33eeb3bd8bd57d42226be9ed6a6a extends Template
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
<a href=\"<?php echo \$view['router']->url('mautic_role_index', ['filter-user' => \$searchString]); ?>\" data-toggle=\"ajax\">
    <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
</a>
<?php else: ?>
<?php if (\$canEdit): ?>
<a href=\"<?php echo \$view['router']->url('mautic_role_action', ['objectAction' => 'edit', 'objectId' => \$role->getId()]); ?>\" data-toggle=\"ajax\">
    <?php echo \$role->getName(true); ?>
</a>
<?php else: ?>
    <?php echo \$role->getName(true); ?>
<?php endif; ?>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/SubscribedEvents/Search/global_role.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/SubscribedEvents/Search/global_role.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/SubscribedEvents/Search/global_role.html.php");
    }
}
