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

/* @bundles/LeadBundle/Views/Company/form_standalone.html.php */
class __TwigTemplate_64c9567267494cf392adbe81feeb2f61de471ad96aa4f6c9d38a164fb6baba76 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'company');

\$header = (\$entity->getId())
    ?
    \$view['translator']->trans(
        'mautic.company.menu.edit',
        ['%name%' => \$view->escape(\$entity->getName())]
    )
    :
    \$view['translator']->trans('mautic.company.menu.new');
\$view['slots']->set('headerTitle', \$header);

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'item'      => \$entity,
            'routeBase' => 'company',
            'langVar'   => 'lead.company',
        ]
    )
);
echo \$view['form']->start(\$form);
?>
    <div class=\"box-layout\">
        <div class=\"col-md-3 bg-white height-auto\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                <ul class=\"list-group list-group-tabs\">
                    <?php \$step = 1; ?>
                    <?php foreach (\$groups as \$g): ?>
                        <?php if (!empty(\$fields[\$g])): ?>
                            <li class=\"list-group-item<?php if (1 === \$step) {
    echo ' active';
} ?>\">
                                <a href=\"#company-<?php echo \$g; ?>\" class=\"steps\" data-toggle=\"tab\">
                                    <?php echo \$view['translator']->trans('mautic.lead.field.group.'.\$g); ?>
                                </a>
                            </li>
                            <?php ++\$step; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <hr/>
                <div>
                    <?php echo \$view['form']->row(\$form['score']); ?>
                </div>
                <hr/>
                <div>
                    <?php echo \$view['form']->row(\$form['owner']); ?>
                </div>
            </div>
        </div>
        <div class=\"col-md-9 bg-auto height-auto bdr-l\">
            <div class=\"tab-content\">
                <?php echo \$view->render(
                    'MauticLeadBundle:Company:form_fields.html.php',
                    ['form' => \$form, 'groups' => \$groups, 'fields' => \$fields]
                ); ?>
            </div>
        </div>
    </div>

<?php echo \$view['form']->end(\$form); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Company/form_standalone.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Company/form_standalone.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Company/form_standalone.html.php");
    }
}
