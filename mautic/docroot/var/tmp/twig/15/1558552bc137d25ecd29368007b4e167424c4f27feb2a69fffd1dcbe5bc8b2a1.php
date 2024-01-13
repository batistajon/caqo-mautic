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

/* @bundles/UserBundle/Views/FormTheme/Role/choice_row.html.php */
class __TwigTemplate_b695d2e943c68f89e98dd44141b9a978d4632ca6844ed20e1e5e7ef38085fb5c extends Template
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
\$attr = \$form->vars['attr'];
?>

<div class=\"row\">
    <div class=\"form-group col-xs-12\">
        <?php echo \$view['form']->label(\$form, \$label); ?>
        <div class=\"choice-wrapper\">
            <?php foreach (\$form->children as \$child): ?>
                <div class=\"checkbox\">
                    <label>
                        <?php
                        \$attr['data-permission'] = \$form->vars['name'].':'.\$child->vars['value'];
                        echo \$view['form']->widget(\$child, ['attr' => \$attr]);
                        echo \$view['translator']->trans(\$child->vars['label']);
                        ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/FormTheme/Role/choice_row.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/FormTheme/Role/choice_row.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/FormTheme/Role/choice_row.html.php");
    }
}
