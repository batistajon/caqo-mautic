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

/* @bundles/LeadBundle/Views/Import/index.html.php */
class __TwigTemplate_06c6942de39442ece65ec3f4525727e40d7e8e1d2ff2367bdc65f8edf6d8b42b extends Template
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
\$view['slots']->set('mauticContent', \$mauticContent);
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.lead.import.list'));
\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => \$permissions[\$permissionBase.':create'],
            ],
            'routeBase' => 'import',
            'langVar'   => \$translationBase,
            'query'     => [
                    'object' => \$view['request']->getParameter('object'),
            ],
        ]
    )
);

?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php // todo
    // echo \$view->render(
    //     'MauticCoreBundle:Helper:list_toolbar.html.php',
    //     [
    //         'searchValue'   => \$searchValue,
    //         'searchHelp'    => 'mautic.lead.lead.help.searchcommands',
    //         'action'        => \$currentRoute,
    //     ]
    // );
    ?>
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
        return "@bundles/LeadBundle/Views/Import/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/index.html.php");
    }
}
