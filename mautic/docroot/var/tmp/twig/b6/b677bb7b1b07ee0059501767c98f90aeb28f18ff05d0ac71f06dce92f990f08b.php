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

/* @bundles/CoreBundle/Views/Helper/noresults.html.php */
class __TwigTemplate_ebaf97a1b81079065c662ff36a337e18370dc100d290a08c444bd2347e3f5cc9 extends Template
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
        echo "<div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\" style=\"white-space: normal;\">
    <?php if (!isset(\$header)) {
    \$header = 'mautic.core.noresults.header';
} ?>
    <h4><?php echo \$view['translator']->trans(\$header); ?></h4>
    <?php if (!isset(\$message)) {
    \$message = 'mautic.core.noresults';
} ?>
    <p><?php echo \$view['translator']->trans(\$message); ?></p>
</div>

<?php if (isset(\$tip)): ?>
    <div class=\"well well col-md-6 col-md-offset-3\">
        <div class=\"row\">
            <div class=\"mautibot-image col-xs-3 text-center\">
                <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"<?php echo \$view['mautibot']->getImage('wave'); ?>\" />
            </div>
            <div class=\"col-xs-9\">
                <h4><i class=\"fa fa-quote-left\"></i> <?php echo \$view['translator']->trans('mautic.core.noresults.tip'); ?> <i class=\"fa fa-quote-right\"></i></h4>
                <p class=\"mt-md\"><?php echo \$view['translator']->trans(\$tip); ?></p>
            </div>
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
        return "@bundles/CoreBundle/Views/Helper/noresults.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/noresults.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/noresults.html.php");
    }
}
