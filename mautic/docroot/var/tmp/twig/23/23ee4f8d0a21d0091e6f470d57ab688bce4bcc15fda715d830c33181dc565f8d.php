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

/* @bundles/LeadBundle/Views/Lead/merge.html.php */
class __TwigTemplate_71d19bbb972c811a01a30490c8057e858c936a309472d1404eb50386f0221178 extends Template
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

<?php if ('index' == \$tmpl): ?>
<div class=\"lead-merge-form\">
    <?php echo \$view->render('MauticCoreBundle:Helper:search.html.php', [
        'searchId'    => (empty(\$searchId)) ? null : \$searchId,
        'searchValue' => \$searchValue,
        'action'      => \$currentRoute,
        'searchHelp'  => false,
        'target'      => '.lead-merge-options',
        'tmpl'        => 'update',
    ]); ?>
    <div class=\"lead-merge-options mt-sm\">
<?php endif; ?>

        <?php echo \$view['form']->start(\$form); ?>

        <div class=\"hide\">
            <?php echo \$view['form']->row(\$form['buttons']); ?>
        </div>

        <?php echo \$view['form']->end(\$form); ?>

<?php if ('index' == \$tmpl): ?>
    </div>
</div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/merge.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/merge.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/merge.html.php");
    }
}
