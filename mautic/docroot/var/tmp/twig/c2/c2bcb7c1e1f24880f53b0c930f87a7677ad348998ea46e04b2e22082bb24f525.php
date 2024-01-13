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

/* @bundles/CoreBundle/Views/Helper/table.html.php */
class __TwigTemplate_b75ba427b297d1801cf906e340cf1261db775f501f30be5b423ffa1dbfc5b2a9 extends Template
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
if (!isset(\$class)) {
    \$class = 'table';
}
if (!isset(\$shortenLinkText)) {
    \$shortenLinkText = 30;
}
?>

<table class=\"<?php echo \$class; ?>\">
    <?php if (!empty(\$headItems)) : ?>
        <thead>
            <tr>
            <?php foreach (\$headItems as \$headItem) : ?>
                <th><?php echo \$view['translator']->trans(\$headItem); ?></th>
            <?php endforeach; ?>
            </tr>
        </thead>
    <?php endif; ?>
    <?php if (!empty(\$bodyItems)) : ?>
        <tbody>
            <?php foreach (\$bodyItems as \$row) : ?>
                <tr>
                    <?php if (is_array(\$row)) : ?>
                        <?php foreach (\$row as \$item) : ?>
                            <td>
                                <?php if (isset(\$item['type']) && 'link' == \$item['type']) : ?>
                                    <a href=\"<?php echo \$item['link']; ?>\"
                                        title=\"<?php echo \$item['value']; ?>\"
                                        <?php if (!empty(\$item['external'])) : ?>
                                        target=\"_blank\"
                                        <?php else : ?>
                                        data-toggle=\"ajax\"
                                        <?php endif; ?>
                                        >
                                        <?php \$item = str_replace(['http://', 'https://'], '', \$item); ?>
                                        <?php echo \$view['assets']->shortenText(\$item['value'], \$shortenLinkText); ?>
                                    </a>
                                <?php elseif (isset(\$item['value'])): ?>
                                    <?php echo \$item['value']; ?>
                                <?php elseif (is_string(\$item)): ?>
                                    <?php echo \$item; ?>
                                <?php endif; ?>
                            </td>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php endif; ?>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/table.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/table.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/table.html.php");
    }
}
