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

/* @bundles/CoreBundle/Views/GlobalSearch/globalsearch.html.php */
class __TwigTemplate_f017e26dc64bc9a650e11874dd6bd1df26838925be3e964c69ef97c4cb940d60 extends Template
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

<li class=\"dropdown dropdown-custom\" id=\"globalSearchDropdown\">
    <div class=\"dropdown-menu\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    <h6 class=\"fw-sb\"><?php echo \$view['translator']->trans('mautic.core.search.results'); ?></h6>
                </div>
            </div>
            <div class=\"pt-0 pb-xs pl-0 pr-0\">
                <div class=\"scroll-content slimscroll\" style=\"height:250px;\" id=\"globalSearchResults\">
                    <?php echo \$view->render('MauticCoreBundle:GlobalSearch:results.html.php', [
                        'results' => \$results,
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <div class=\"search-container\" id=\"globalSearchContainer\">
        <a href=\"javascript: void(0);\" class=\"search-button\">
            <i class=\"fa fa-search fs-16\"></i>
        </a>
        <input type=\"search\" value=\"<?php echo \$view->escape(\$searchString); ?>\" class=\"form-control search\" id=\"globalSearchInput\" name=\"global_search\" placeholder=\"<?php echo \$view['translator']->trans('mautic.core.search.everything.placeholder'); ?>\" value=\"\" autocomplete=\"false\" data-toggle=\"livesearch\" data-target=\"#globalSearchResults\" data-action=\"<?php echo \$view['router']->path('mautic_core_ajax', ['action' => 'globalSearch']); ?>\" data-overlay=\"true\" data-overlay-text=\"<?php echo \$view['translator']->trans('mautic.core.search.livesearch'); ?>\" />
    </div>
</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/GlobalSearch/globalsearch.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/GlobalSearch/globalsearch.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/GlobalSearch/globalsearch.html.php");
    }
}
