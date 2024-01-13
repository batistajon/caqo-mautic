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

/* @bundles/LeadBundle/Views/Lead/list_rows.html.php */
class __TwigTemplate_6fb85b91815c03a2a0138879afee2f58e4620be70eabca5be7d40235a6a0fd56 extends Template
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
        <?php foreach (\$items as \$item): ?>
            <?php /** @var \\Mautic\\LeadBundle\\Entity\\Lead \$item */ ?>
            <?php \$fields = \$item->getFields(); ?>
            <tr<?php if (!empty(\$highlight)): echo ' class=\"warning\"'; endif; ?>>
                <td>
                    <?php
                    \$hasEditAccess = \$security->hasEntityAccess(
                        \$permissions['lead:leads:editown'],
                        \$permissions['lead:leads:editother'],
                        \$item->getPermissionUser()
                    );

                    \$custom = [];

                    \$custom[] = [
                        'attr'      => [
                            'href'        => \$view['router']->path(
                                'mautic_contact_action',
                                [
                                    'objectAction' => 'view',
                                    'objectId'     => \$item->getId(),
                                ]
                            ),
                            'data-toggle' => 'ajax',
                            'data-method' => 'POST',
                        ],
                        'btnText'   => 'mautic.core.details',
                        'iconClass' => 'fa fa-info-circle',
                    ];

                    if (\$hasEditAccess && !empty(\$currentList)) {
                        //this lead was manually added to a list so give an option to remove them
                        \$custom[] = [
                            'attr' => [
                                'href' => \$view['router']->path('mautic_segment_action', [
                                    'objectAction' => 'removeLead',
                                    'objectId'     => \$currentList['id'],
                                    'leadId'       => \$item->getId(),
                                ]),
                                'data-toggle' => 'ajax',
                                'data-method' => 'POST',
                            ],
                            'btnText'   => 'mautic.lead.lead.remove.fromlist',
                            'iconClass' => 'fa fa-remove',
                        ];
                    }

                    if (!empty(\$fields['core']['email']['value'])) {
                        \$custom[] = [
                            'attr' => [
                                'data-toggle' => 'ajaxmodal',
                                'data-target' => '#MauticSharedModal',
                                'data-header' => \$view['translator']->trans('mautic.lead.email.send_email.header', ['%email%' => \$fields['core']['email']['value']]),
                                'href'        => \$view['router']->path('mautic_contact_action', ['objectId' => \$item->getId(), 'objectAction' => 'email', 'list' => 1]),
                            ],
                            'btnText'   => 'mautic.lead.email.send_email',
                            'iconClass' => 'fa fa-send',
                        ];
                    }

                    echo \$view->render('MauticCoreBundle:Helper:list_actions.html.php', [
                        'item'            => \$item,
                        'templateButtons' => [
                            'edit'   => \$hasEditAccess,
                            'delete' => \$security->hasEntityAccess(\$permissions['lead:leads:deleteown'], \$permissions['lead:leads:deleteother'], \$item->getPermissionUser()),
                        ],
                        'routeBase'     => 'contact',
                        'langVar'       => 'lead.lead',
                        'customButtons' => \$custom,
                    ]);
                    ?>
                </td>
                <?php
                \$columsAliases = array_flip(\$columns);
                foreach (\$columns as \$column=>\$label) {
                    \$template = 'MauticLeadBundle:Lead\\row:'.\$column.'.html.php';
                    if (!\$view->exists(\$template)) {
                        \$template = 'MauticLeadBundle:Lead\\row:default.html.php';
                    }
                    echo \$view->render(
                        \$template,
                        [
                            'item'          => \$item,
                            'fields'        => \$fields,
                            'label'         => \$label,
                            'column'        => \$column,
                            'columns'       => \$columns,
                            'noContactList' => \$noContactList,
                            'class'         => array_search(\$column, \$columsAliases) > 1 ? 'hidden-xs' : '',
                        ]
                    );
                }
                ?>
            </tr>
        <?php endforeach; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/list_rows.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/list_rows.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/list_rows.html.php");
    }
}
