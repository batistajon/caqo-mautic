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

/* @bundles/InstallBundle/Views/Install/navbar.html.php */
class __TwigTemplate_398efb726ea13eb6488527bc30d05a82003f6bd4f6e60a26611f0485fe045ede extends Template
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
\$start = 1;
?>
<div id=\"stepNavigation\" class=\"hidden-xs\">
    <ul class=\"horizontal-step\">
        <?php while (\$start < \$count): ?>
        <li<?php echo (\$start == \$step) ? ' class=\"active\"' : ''; ?>>
            <?php \$url = (\$start == \$step || in_array(\$start, \$completedSteps) || in_array(\$start - 1, \$completedSteps)) ? \$view['router']->path('mautic_installer_step', ['index' => \$start]) : '#'; ?>
            <a href=\"<?php echo \$url; ?>\" class=\"steps<?php echo ('#' == \$url) ? ' disabled' : ''; ?>\">
                <span class=\"steps-figure\"><?php echo \$view['translator']->trans('mautic.install.step.'.\$start); ?></span>
            </a>
        </li>
        <?php ++\$start; ?>
        <?php endwhile; ?>
    </ul>
    <div class=\"clearfix\"></div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Views/Install/navbar.html.php";
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
        return new Source("", "@bundles/InstallBundle/Views/Install/navbar.html.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Views/Install/navbar.html.php");
    }
}
