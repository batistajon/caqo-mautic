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

/* @bundles/LeadBundle/Views/Lead/row/location.html.php */
class __TwigTemplate_27420de359df5f783a570b24f3518c6b059292f16a588cc30d95cd2888be6b62 extends Template
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
<td class=\"<?php echo \$class; ?>\">
    <?php
    \$flag = (!empty(\$fields['core']['country'])) ? \$view['assets']->getCountryFlag(\$fields['core']['country']['value']) : '';
    if (!empty(\$flag)):
        ?>
        <img src=\"<?php echo \$flag; ?>\" style=\"max-height: 24px;\" class=\"mr-sm\" />
    <?php
    endif;
    \$location = [];
    if (!empty(\$fields['core']['city']['value'])):
        \$location[] = \$fields['core']['city']['value'];
    endif;
    if (!empty(\$fields['core']['state']['value'])):
        \$location[] = \$fields['core']['state']['value'];
    elseif (!empty(\$fields['core']['country']['value'])):
        \$location[] = \$fields['core']['country']['value'];
    endif;
    echo \$view->escape(implode(', ', \$location));
    ?>
    <div class=\"clearfix\"></div>
</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/row/location.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/row/location.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/row/location.html.php");
    }
}
