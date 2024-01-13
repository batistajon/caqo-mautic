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

/* @bundles/CoreBundle/Views/Helper/graph_dateselect.html.php */
class __TwigTemplate_2b4d3d13b9e7a550c41f50a4cf38dc865aec76bde98e85b1bd45c661c9a4e84d extends Template
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
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (!isset(\$class)) {
    \$class = '';
}
?>

<?php echo \$view['form']->start(\$dateRangeForm, ['attr' => ['class' => 'form-filter '.\$class, 'style' => 'max-width: 380px']]); ?>
    <div class=\"input-group\">
        <span class=\"input-group-addon\">
            <?php echo \$view['form']->label(\$dateRangeForm['date_from']); ?>
        </span>
        <?php echo \$view['form']->widget(\$dateRangeForm['date_from']); ?>
        <span class=\"input-group-addon\" style=\"border-left: 0;border-right: 0;\">
            <?php echo \$view['form']->label(\$dateRangeForm['date_to']); ?>
        </span>
        <?php echo \$view['form']->widget(\$dateRangeForm['date_to']); ?>
        <span class=\"input-group-btn\">
            <?php echo \$view['form']->row(\$dateRangeForm['apply']); ?>
        </span>
    </div>
<?php echo \$view['form']->end(\$dateRangeForm); ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/graph_dateselect.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/graph_dateselect.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/graph_dateselect.html.php");
    }
}
