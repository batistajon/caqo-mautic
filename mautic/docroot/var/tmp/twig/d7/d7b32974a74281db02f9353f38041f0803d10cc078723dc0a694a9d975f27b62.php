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

/* @bundles/LeadBundle/Views/Lead/grid_card.html.php */
class __TwigTemplate_f20f36e044712c6a85fb6aecf815350620b32b1a8f6018744af041020f864437 extends Template
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
\$fields = \$contact->getFields();
\$color  = \$contact->getColor();
if (empty(\$color)) {
    \$color = 'a0acb8';
}

\$img = \$view['lead_avatar']->getAvatar(\$contact);
?>
<div class=\"shuffle shuffle-item grid col-sm-6 col-lg-4 contact-cards\">
    <div data-color=\"#<?php echo \$color; ?>\" class=\"panel<?php if (!empty(\$highlight)) {
    echo ' highlight';
} ?> card ovf-h\" style=\"border-top: 3px solid #<?php echo \$color; ?>;\">
        <div class=\"box-layout\">
            <div class=\"col-xs-4 va-m\">
                <div class=\"panel-body\">
            <span class=\"img-wrapper img-rounded\">
                <img class=\"img\" src=\"<?php echo \$img; ?>\" />
            </span>
                </div>
            </div>
            <div class=\"col-xs-8 va-t\">
                <div class=\"panel-body\">
                    <?php if (in_array(\$contact->getId(), array_keys(\$noContactList)))  : ?>
                        <div class=\"pull-right label label-danger\"><i class=\"fa fa-ban\"> </i></div>
                    <?php endif; ?>
                    <h4 class=\"fw-sb mb-xs ellipsis\">
                        <a href=\"<?php echo \$view['router']->path('mautic_contact_action',
                            ['objectAction' => 'view', 'objectId' => \$contact->getId()]); ?>\"
                           data-toggle=\"ajax\">
                            <span><?php echo \$contact->getPrimaryIdentifier(); ?></span>
                        </a>
                    </h4>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"fa fa-fw fa-building mr-xs\"></i><?php echo (!empty(\$fields['core']['company'])) ? \$fields['core']['company']['value'] : ''; ?>
                    </div>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"fa fa-fw fa-map-marker mr-xs\"></i><?php
                        \$location = [];
                        if (!empty(\$fields['core']['city']['value'])):
                            \$location[] = \$fields['core']['city']['value'];
                        endif;
                        if (!empty(\$fields['core']['state']['value'])):
                            \$location[] = \$fields['core']['state']['value'];
                        elseif (!empty(\$fields['core']['country']['value'])):
                            \$location[] = \$fields['core']['country']['value'];
                        endif;
                        echo implode(', ', \$location);
                        ?>
                    </div>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"fa fa-fw fa-globe mr-xs\"></i><?php echo (!empty(\$fields['core']['country'])) ? \$fields['core']['country']['value'] : ''; ?>
                    </div>
                    <?php \$flag = (!empty(\$fields['core']['country'])) ? \$view['assets']->getCountryFlag(\$fields['core']['country']['value']) : ''; ?>

                    <?php if (!empty(\$flag)): ?>
                        <div style=\"position: absolute; right: 30px; bottom: 30px\">
                            <img src=\"<?php echo \$flag; ?>\" style=\"max-height: 24px;\" class=\"ml-sm\" />
                        </div>
                    <?php endif; ?>

                    <?php echo \$view['content']->getCustomContent('lead.grid', \$mauticTemplateVars); ?>

                </div>
            </div>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/grid_card.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/grid_card.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/grid_card.html.php");
    }
}
