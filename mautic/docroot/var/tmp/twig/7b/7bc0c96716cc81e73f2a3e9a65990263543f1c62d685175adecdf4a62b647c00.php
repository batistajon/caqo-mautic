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

/* @bundles/PointBundle/Views/Trigger/details.html.php */
class __TwigTemplate_537278dca2993ef17ae558c5d9a1ae130ce4dc39a2cdd5ad9826611f40d3eabf extends Template
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
\$view['slots']->set('mauticContent', 'pointTrigger');
\$view['slots']->set('headerTitle', \$entity->getName());

\$view['slots']->set('actions', \$view->render('MauticCoreBundle:Helper:page_actions.html.php', [
    'item'            => \$entity,
    'templateButtons' => [
        'edit'   => \$permissions['point:triggers:edit'],
        'delete' => \$permissions['point:triggers:delete'],
    ],
    'routeBase' => 'pointtrigger',
    'langVar'   => 'point.trigger',
]));
?>

<div class=\"scrollable trigger-details\">
    <?php //@todo - output trigger details/actions?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Views/Trigger/details.html.php";
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
        return new Source("", "@bundles/PointBundle/Views/Trigger/details.html.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Views/Trigger/details.html.php");
    }
}
