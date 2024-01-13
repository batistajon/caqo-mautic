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

/* @bundles/LeadBundle/Views/Field/properties_textarea.html.php */
class __TwigTemplate_19dd468a5c376303fe47ab199f7db9498c48a5197e623a54d815495449706a75 extends Template
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

\$type     = 'textarea';
\$value    = (isset(\$value)) ? \$value : '';
    \$html = str_replace(['properties_'.\$type.'_template', 'leadfield_properties', 'leadfield[properties]'], ['properties', 'leadfield_properties_template', 'leadfield[properties][allowHtml]'], \$textareaTemplate);
?>

<div class=\"<?php echo \$type; ?>\">
    <?php echo \$html; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Field/properties_textarea.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Field/properties_textarea.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Field/properties_textarea.html.php");
    }
}
