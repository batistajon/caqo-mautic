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

/* @bundles/UserBundle/Views/User/index.html.php */
class __TwigTemplate_03a8cbdf872eeb347d38ce538fb60a7f71abb51f09392a3c52a05410b8ab50b1 extends Template
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
\$view['slots']->set('mauticContent', 'user');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.user.users'));

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => \$permissions['create'],
            ],
            'routeBase' => 'user',
            'langVar'   => 'user.user',
        ]
    )
);
?>

<?php echo \$view->render(
    'MauticCoreBundle:Helper:list_toolbar.html.php',
    [
        'searchValue' => \$searchValue,
        'searchHelp'  => 'mautic.user.user.help.searchcommands',
        'action'      => \$currentRoute,
    ]
); ?>

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
        return "@bundles/UserBundle/Views/User/index.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/User/index.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/User/index.html.php");
    }
}
