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

/* @bundles/LeadBundle/Views/Lead/row/name.html.php */
class __TwigTemplate_e16e9ad17ef234d5048d7f4175ca6c2d1b9f2e6d8f279351931ef78f73705f7d extends Template
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
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

?>
<td>
    <a href=\"<?php echo \$view['router']->path('mautic_contact_action', ['objectAction' => 'view', 'objectId' => \$item->getId()]); ?>\" data-toggle=\"ajax\">
        <?php if (in_array(\$item->getId(), array_keys(\$noContactList)))  : ?>
            <div class=\"pull-right\">
                <?php echo \$view->render('MauticLeadBundle:Lead:dnc_small.html.php', [
                    'dncList'         => \$noContactList[\$item->getId()],
                ]); ?>
            </div>
        <?php endif; ?>
        <?php \$primaryIdentifier = \$view->escape((\$item->isAnonymous() ? \$view['translator']->trans(\$item->getPrimaryIdentifier()) : \$item->getPrimaryIdentifier())); ?>
        <div><?php echo \$primaryIdentifier; ?></div>
        <?php if (!array_key_exists('company', \$columns) && \$primaryIdentifier != \$item->getSecondaryIdentifier() && \$item->getSecondaryIdentifier()): ?>
            <div class=\"small\"><?php echo \$view->escape(\$item->getSecondaryIdentifier()); ?></div>
        <?php endif; ?>
    </a>
</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/row/name.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/row/name.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/row/name.html.php");
    }
}
