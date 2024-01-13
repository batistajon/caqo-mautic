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

/* @bundles/ReportBundle/Views/Report/index.html.php */
class __TwigTemplate_d40d1fdabebda08737d6c1b16bd57dedfa730f81d349bd65fd9410adf5206864 extends Template
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
\$view['slots']->set('mauticContent', 'report');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.report.reports'));

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => \$permissions['report:reports:create'],
            ],
            'routeBase' => 'report',
            'langVar'   => 'report.report',
        ]
    )
);
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue' => \$searchValue,
            'searchHelp'  => 'mautic.report.report.help.searchcommands',
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
        return "@bundles/ReportBundle/Views/Report/index.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/Report/index.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/Report/index.html.php");
    }
}
