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

/* @bundles/CalendarBundle/Views/Default/index.html.php */
class __TwigTemplate_5b1d690b035ca32d1ab5d075a889db2fa9b55f42479bf89f8de29c6f6a3b3322 extends Template
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
\$view['slots']->set('mauticContent', 'calendar');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.calendar.menu.index'));
?>

<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
\t<div class=\"panel-body\">
\t\t<div id=\"calendar\"></div>
\t</div>
</div>

<?php echo \$view->render('MauticCoreBundle:Helper:modal.html.php', [
    'id'            => 'CalendarEditModal',
    'footerButtons' => true,
]);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/Views/Default/index.html.php";
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
        return new Source("", "@bundles/CalendarBundle/Views/Default/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Views/Default/index.html.php");
    }
}
