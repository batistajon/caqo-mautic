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

/* @bundles/DashboardBundle/Views/Dashboard/upcomingemails.html.php */
class __TwigTemplate_31c83efd0f3bf9bb65a03d24d88aacde6026541816353410c8d3256e9aa45ce6 extends Template
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

<?php if (\$upcomingEmails) : ?>
    <ul class=\"list-group mb-0\">
        <?php foreach (\$upcomingEmails as \$email): ?>
            <li class=\"list-group-item bg-auto bg-light-xs\">
                <div class=\"box-layout\">
                    <div class=\"col-md-1 va-m\">
                        <h3><span class=\"fa <?php echo isset(\$icons['email']) ? \$icons['email'] : ''; ?> fw-sb text-success\"></span></h3>
                    </div>
                    <div class=\"col-md-4 va-m\">
                        <h5 class=\"fw-sb text-primary\">
                            <a href=\"<?php echo \$view['router']->path('mautic_campaign_action', ['objectAction' => 'view', 'objectId' => \$email['campaign_id']]); ?>\" data-toggle=\"ajax\">
                                <?php echo \$email['campaign_name']; ?>
                            </a>
                        </h5>
                        <span class=\"text-white dark-sm\"><?php echo \$email['event_name']; ?></span>
                    </div>
                    <div class=\"col-md-4 va-m text-right\">
                        <a class=\"btn btn-sm btn-success\"  href=\"<?php echo \$view['router']->path('mautic_contact_action', ['objectAction' => 'view', 'objectId' => \$email['lead_id']]); ?>\" data-toggle=\"ajax\">
                            <span class=\"fa <?php echo isset(\$icons['lead']) ? \$icons['lead'] : ''; ?>\"></span>
                            <?php echo \$email['lead_name']; ?>
                        </a>
                    </div>
                    <div class=\"col-md-3 va-m text-right\">
                        <?php echo \$view['date']->toFull(\$email['trigger_date']); ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
        <div class=\"alert alert-warning\" role=\"alert\">
            <?php echo \$view['translator']->trans('mautic.note.no.upcoming.emails'); ?>
        </div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Views/Dashboard/upcomingemails.html.php";
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
        return new Source("", "@bundles/DashboardBundle/Views/Dashboard/upcomingemails.html.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Views/Dashboard/upcomingemails.html.php");
    }
}
