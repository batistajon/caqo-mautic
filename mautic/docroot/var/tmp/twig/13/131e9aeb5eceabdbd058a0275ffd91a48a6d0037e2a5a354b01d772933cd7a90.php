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

/* @bundles/CoreBundle/Views/Helper/usage.html.php */
class __TwigTemplate_c328d75503fd5b57a7f0a948a1446dad773294f19ae58d780a5a5c81e6225f5b extends Template
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
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php if (!empty(\$stats)): ?>
    <table class=\"table table-bordered table-striped mb-0\">
        <tbody>
        <tr>
            <th colspan=\"2\" class=\"bg-primary segment-title\">
                <?php echo \$title; ?>
            </th>
        </tr>
        <?php foreach (\$stats as \$stat) : ?>
            <?php if (!\$countIds = count(\$stat['ids'])): ?>
                <?php continue; ?>
            <?php endif; ?>
            <tr>
                <td>
                    <?php echo \$view['translator']->trans(\$stat['label']); ?>
                </td>
                <td width=\"5%\">
                                    <span class=\"mt-xs label label-primary has-click-event clickable-stat\"><a
                                            href=\"<?php echo \$view['router']->path(
                                                \$stat['route'],
                                                [
                                                    'search' => \$view['translator']->trans(
                                                            'mautic.core.searchcommand.ids'
                                                        ).':'.implode(',', \$stat['ids']),
                                                ]
                                            ); ?>\">
                                              <?php echo \$countIds; ?>
                                            </a></span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/usage.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/usage.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/usage.html.php");
    }
}
