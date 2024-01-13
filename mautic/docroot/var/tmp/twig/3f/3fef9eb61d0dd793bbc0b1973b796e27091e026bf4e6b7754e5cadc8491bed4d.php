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

/* @bundles/ReportBundle/Views/Report/details_data_graphs.html.php */
class __TwigTemplate_55e8d483f7cead481c57c1a33a8585fc79366bb1bb290793725e0707fb70f563 extends Template
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

<?php if (!empty(\$graphOrder) && !empty(\$graphs)): ?>
    <div class=\"mt-lg pa-md\" style=\"clear: both\">
        <div class=\"row equal\">
            <?php
            \$rowCount = 0;
            foreach (\$graphOrder as \$key):
                \$details = \$graphs[\$key];
                if (!isset(\$details['data'])) {
                    continue;
                }
                if (\$rowCount >= 12):
                    echo '</div><div class=\"row equal\">';
                    \$rowCount = 0;
                endif;
                echo \$view->render('MauticReportBundle:Graph:'.ucfirst(\$details['type']).'.html.php', ['graph' => \$details['data'], 'options' => \$details['options'], 'report' => \$report]);
                \$rowCount += ('line' == \$details['type']) ? 12 : 4;
            endforeach;
            ?>
        </div>
    </div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/Report/details_data_graphs.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/Report/details_data_graphs.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/Report/details_data_graphs.html.php");
    }
}
