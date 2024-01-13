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

/* @bundles/EmailBundle/Views/SubscribedEvents/Search/global.html.php */
class __TwigTemplate_f02d736a99e01b33a6ba098397dfe8e6dab980daf4bf1bdc006c6b7ca7b28d4e extends Template
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
<a href=\"<?php echo \$view['router']->path('mautic_email_index', ['search' => \$searchString]); ?>\" data-toggle=\"ajax\">
    <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
</a>
<?php else: ?>
<a href=\"<?php echo \$view['router']->path('mautic_email_action', ['objectAction' => 'view', 'objectId' => \$email->getId()]); ?>\" data-toggle=\"ajax\">
    <?php echo \$email->getName(); ?>
    <span class=\"label label-default pull-right\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.email.readcount'); ?>\" data-placement=\"left\">
        <?php echo \$email->getReadCount(); ?>
    </span>
</a>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/SubscribedEvents/Search/global.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/SubscribedEvents/Search/global.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/SubscribedEvents/Search/global.html.php");
    }
}
