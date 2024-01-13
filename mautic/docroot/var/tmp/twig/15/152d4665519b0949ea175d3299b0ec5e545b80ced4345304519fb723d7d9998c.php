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

/* @bundles/PointBundle/Views/Point/form.html.php */
class __TwigTemplate_561030cdffe56ba466a268e281a3852add4a5360be584c2866dce09a137945bd extends Template
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
\$view['slots']->set('mauticContent', 'point');

\$header = (\$entity->getId()) ?
    \$view['translator']->trans('mautic.point.menu.edit',
        ['%name%' => \$view['translator']->trans(\$entity->getName())]) :
    \$view['translator']->trans('mautic.point.menu.new');
\$view['slots']->set('headerTitle', \$header);

echo \$view['form']->start(\$form);
?>
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 bg-auto height-auto bdr-r\">
    \t<div class=\"row\">
    \t\t<div class=\"col-md-6\">
\t\t        <div class=\"pa-md\">
\t\t\t\t    <?php
                    echo \$view['form']->row(\$form['name']);
                    echo \$view['form']->row(\$form['description']);
                    ?>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"pa-md\">
                    <?php echo \$view['form']->row(\$form['delta']); ?>
\t\t\t\t\t<?php echo \$view['form']->row(\$form['type']); ?>
\t\t\t\t\t<div id=\"pointActionProperties\">
                        <?php
                        if (isset(\$form['properties'])):
                            echo \$view['form']->row(\$form['properties']);
                        endif;
                        ?>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
 \t<div class=\"col-md-3 bg-white height-auto\">
\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t<?php
                echo \$view['form']->row(\$form['category']);
                echo \$view['form']->row(\$form['isPublished']);
                echo \$view['form']->row(\$form['repeatable']);
                echo \$view['form']->row(\$form['publishUp']);
                echo \$view['form']->row(\$form['publishDown']);
            ?>
\t\t</div>
\t</div>
</div>
<?php echo \$view['form']->end(\$form); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Views/Point/form.html.php";
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
        return new Source("", "@bundles/PointBundle/Views/Point/form.html.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Views/Point/form.html.php");
    }
}
