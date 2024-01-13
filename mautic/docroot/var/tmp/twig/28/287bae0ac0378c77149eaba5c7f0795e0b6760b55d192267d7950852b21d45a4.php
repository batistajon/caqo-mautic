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

/* @bundles/FormBundle/Views/Result/index.html.php */
class __TwigTemplate_55a90d28f6fe13ee20a02754fff5bd5d30047454d6fe149b977435c3f4946571 extends Template
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

use PhpOffice\\PhpSpreadsheet\\Spreadsheet;

\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'formresult');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.form.result.header.index', [
    '%name%' => \$form->getName(),
]));

\$buttons = [];

\$buttons[] = [
    'attr' => [
        'target'      => '_new',
        'data-toggle' => '',
        'class'       => 'btn btn-default btn-nospin',
        'href'        => \$view['router']->path('mautic_form_export', ['objectId' => \$form->getId(), 'format' => 'html']),
    ],
    'btnText'   => \$view['translator']->trans('mautic.form.result.export.html'),
    'iconClass' => 'fa fa-file-code-o',
    'primary'   => true,
];

\$buttons[] = [
    'attr' => [
        'data-toggle' => '',
        'class'       => 'btn btn-default btn-nospin',
        'href'        => \$view['router']->path('mautic_form_export', ['objectId' => \$form->getId(), 'format' => 'csv']),
    ],
    'btnText'   => \$view['translator']->trans('mautic.form.result.export.csv'),
    'iconClass' => 'fa fa-file-text-o',
    'primary'   => true,
];

if (class_exists(Spreadsheet::class)) {
    \$buttons[] = [
        'attr' => [
            'data-toggle' => '',
            'class'       => 'btn btn-default btn-nospin',
            'href'        => \$view['router']->path('mautic_form_export', ['objectId' => \$form->getId(), 'format' => 'xlsx']),
        ],
        'btnText'   => \$view['translator']->trans('mautic.form.result.export.xlsx'),
        'iconClass' => 'fa fa-file-excel-o',
        'primary'   => true,
    ];
}

\$buttons[] =
    [
        'attr' => [
                'class'       => 'btn btn-default',
                'href'        => \$view['router']->path('mautic_form_action', ['objectAction' => 'view', 'objectId'=> \$form->getId()]),
                'data-toggle' => 'ajax',
            ],
        'iconClass' => 'fa fa-remove',
        'btnText'   => \$view['translator']->trans('mautic.core.form.close'),
    ];

\$view['slots']->set('actions', \$view->render('MauticCoreBundle:Helper:page_actions.html.php', ['customButtons' => \$buttons]));
?>

<div class=\"page-list\">
    <?php \$view['slots']->output('_content'); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Result/index.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Result/index.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Result/index.html.php");
    }
}
