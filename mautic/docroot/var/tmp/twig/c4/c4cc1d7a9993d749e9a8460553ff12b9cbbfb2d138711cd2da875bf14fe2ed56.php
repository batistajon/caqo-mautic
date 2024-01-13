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

/* @bundles/CoreBundle/Views/GlobalSearch/results.html.php */
class __TwigTemplate_9aaedc70a3c1c667c6f0286fd4299b9232f479d5a23eca05ea7c1bbb79119f38 extends Template
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

<div class=\"panel-group\" id=\"globalSearchPanel\">
<?php foreach (\$results as \$header => \$result): ?>
<?php if (isset(\$result['count'])) {
    \$count = \$result['count'];
    unset(\$result['count']);
} ?>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <?php echo \$header; ?>
                <?php if (!empty(\$count)): ?>
                <span class=\"badge pull-right gs-count-badge\"><?php echo \$count; ?></span>
                <?php endif; ?>
            </h4>
        </div>
        <div class=\"panel-body np\">
            <ul class=\"list-group\">
                <?php foreach (\$result as \$r): ?>
                <li class=\"list-group-item\">
                    <?php echo \$r; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endforeach; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/GlobalSearch/results.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/GlobalSearch/results.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/GlobalSearch/results.html.php");
    }
}
