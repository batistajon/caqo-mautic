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

/* @bundles/FormBundle/Views/Action/generic.html.php */
class __TwigTemplate_db22a0d7437180bc8642e5102eaee2bf77166be7cfb72ce0679f82184e519e5d extends Template
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

<div class=\"mauticform-row panel<?php if (empty(\$action['settings']['allowCampaignForm'])) {
    echo ' action-standalone-only';
} ?>\" id=\"mauticform_action_<?php echo \$id; ?>\">
    <?php
    if (!empty(\$inForm)) {
        echo \$view->render('MauticFormBundle:Builder:actions.html.php', [
            'id'         => \$id,
            'route'      => 'mautic_formaction_action',
            'actionType' => 'action',
            'formId'     => \$formId,
        ]);
    }
    ?>
    <a data-toggle=\"ajaxmodal\" data-target=\"#formComponentModal\" href=\"<?php echo \$view['router']->path('mautic_formaction_action', ['objectAction' => 'edit', 'objectId' => \$id, 'formId' => \$formId]); ?>\"><span class=\"action-label\"><?php echo \$action['name']; ?></span></a>
    <?php if (!empty(\$action['description'])): ?>
    <span class=\"action-descr\"><?php echo \$action['description']; ?></span>
    <?php endif; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Action/generic.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Action/generic.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Action/generic.html.php");
    }
}
