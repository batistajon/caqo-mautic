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

/* @bundles/PluginBundle/Views/Integration/info.html.php */
class __TwigTemplate_6f99410887a2398a31f734dd3131f286cdb976e13fc9325a71c7795408055155 extends Template
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
?>

<div class=\"row\">
    <div class=\"col-xs-4\">
        <img class=\"img img-responsive\" style=\"margin: auto;\" src=\"<?php echo \$view['assets']->getUrl(\$icon); ?>\" />
    </div>

    <div class=\"col-xs-8\">
        <h3>
            <?php echo \$bundle->getPrimaryDescription(); ?>
        </h3>
    </div>
</div>

<?php if (\$bundle->hasSecondaryDescription()) : ?>
<div class=\"row mt-lg\">
    <div class=\"col-xs-12\">
        <?php echo \$bundle->getSecondaryDescription(); ?>
    </div>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/Integration/info.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/Integration/info.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/Integration/info.html.php");
    }
}
