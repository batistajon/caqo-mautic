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

/* @bundles/LeadBundle/Views/Company/index.html.php */
class __TwigTemplate_47c137899d71e7f49d412e18758c56f66c13a92a76d358ab573cd1603d7c45c2 extends Template
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
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.companies.menu.root'));

\$pageButtons = [];
if (\$permissions['lead:leads:create']) {
    \$pageButtons[] = [
        'attr' => [
            'href' => \$view['router']->path('mautic_import_action', ['object' => 'companies', 'objectAction' => 'new']),
        ],
        'iconClass' => 'fa fa-upload',
        'btnText'   => 'mautic.lead.lead.import',
    ];

    \$pageButtons[] = [
        'attr' => [
            'href' => \$view['router']->path('mautic_import_index', ['object' => 'companies']),
        ],
        'iconClass' => 'fa fa-history',
        'btnText'   => 'mautic.lead.lead.import.index',
    ];
}

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => \$permissions['lead:leads:create'],
            ],
            'routeBase'     => 'company',
            'customButtons' => \$pageButtons,
        ]
    )
);
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue' => \$searchValue,
            'searchHelp'  => 'mautic.core.help.searchcommands',
            'action'      => \$currentRoute,
        ]
    ); ?>
    <div class=\"page-list\">
        <?php \$view['slots']->output('_content'); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Company/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Company/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Company/index.html.php");
    }
}
