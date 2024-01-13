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

/* @bundles/LeadBundle/Views/Company/form_embedded.html.php */
class __TwigTemplate_4d6937487dcfd7fb3d3d6304b8a4fe7ae2e0a5d7c37c9de8360a7b84f86f57d2 extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php echo \$view['form']->start(\$form); ?>
    <div class=\"box-layout\">
        <ul class=\"nav nav-tabs pr-md pl-md mt-10\">
            <?php \$step = 1; ?>
            <?php foreach (\$groups as \$g): ?>
                <?php if (!empty(\$fields[\$g])): ?>
                    <li class=\"<?php if (1 === \$step) {
    echo 'active';
} ?>\">
                        <a href=\"#company-<?php echo \$g; ?>\" class=\"steps\" data-toggle=\"tab\">
                            <?php echo \$view['translator']->trans('mautic.lead.field.group.'.\$g); ?>
                        </a>
                    </li>
                    <?php ++\$step; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class=\"tab-content pa-md\">
        <?php echo \$view->render(
            'MauticLeadBundle:Company:form_fields.html.php',
            ['form' => \$form, 'groups' => \$groups, 'fields' => \$fields, 'embedded' => true]
        ); ?>
    </div>
    </div>

<?php echo \$view['form']->end(\$form); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Company/form_embedded.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Company/form_embedded.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Company/form_embedded.html.php");
    }
}
