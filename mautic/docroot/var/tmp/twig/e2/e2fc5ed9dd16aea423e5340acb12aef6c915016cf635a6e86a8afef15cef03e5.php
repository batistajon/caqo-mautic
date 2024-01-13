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

/* @bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_content_row.html.php */
class __TwigTemplate_3c3aab298bafab0e92aaf7be18850ff53a460855dd330609cb41763e34209021 extends Template
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

<div class=\"row form-group\">
    <div class=\"col-xs-10\">
        <?php echo \$view['form']->label(\$form); ?>
    </div>
    <div class=\"col-xs-2\">
        <?php if ('emailform_dynamicContent_0_content' !== \$id) : ?>
            <a class=\"remove-item btn btn-default text-danger\"><i class=\"fa fa-trash-o\"></i></a>
        <?php endif; ?>
    </div>
</div>
<div class=\"row form-group\">
    <div class=\"col-xs-12\">
        <?php echo \$view['form']->widget(\$form); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_content_row.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_content_row.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_content_row.html.php");
    }
}
