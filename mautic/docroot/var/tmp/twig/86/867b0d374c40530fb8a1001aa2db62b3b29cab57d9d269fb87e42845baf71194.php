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

/* @bundles/IntegrationsBundle/Views/Config/field_mapping.html.php */
class __TwigTemplate_22c9b9e3f1bde6ef620ef0fdb743dc79a07275c4e3751786c1ea9787e6bda124 extends Template
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
        echo "<?php declare(strict_types=1);

/*
 * @copyright   2018 Mautic Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://www.mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

?>
<?php echo \$view['form']->row(\$form['filter-totalFieldCount']); ?>
<?php foreach (\$form as \$fieldName => \$fieldForm): ?>
<?php if (isset(\$fieldForm['mappedField'])): ?>
    <div class=\"row\">
        <div class=\"col-sm-12\"><?php echo \$view['form']->label(\$fieldForm); ?></div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6<?php if (\$view['form']->containsErrors(\$fieldForm['mappedField'])) {
    echo ' has-error';
} ?>\">
            <?php echo \$view['form']->widget(\$fieldForm['mappedField']); ?>
        </div>
        <div class=\"col-sm-6\"><?php echo \$view['form']->widget(\$fieldForm['syncDirection']); ?></div>
    </div>
    <hr />
<?php endif; ?>
<?php endforeach; ?>
<?php echo \$view->render(
    'MauticCoreBundle:Helper:pagination.html.php',
    [
        'totalItems'  => \$form['filter-totalFieldCount']->vars['data'],
        'page'        => \$page,
        'limit'       => 15,
        'fixedLimit'  => true,
        'sessionVar'  => \$integration.'-'.\$object,
        'target'      => '#IntegrationEditModal',
        'jsCallback'  => 'Mautic.getPaginatedIntegrationFields',
        'jsArguments' => [
            [
                'object'      => \$object,
                'integration' => \$integration,
                'keyword'     => \$form['filter-keyword']->vars['data'],
            ],
        ],
    ]
); ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Views/Config/field_mapping.html.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Views/Config/field_mapping.html.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Views/Config/field_mapping.html.php");
    }
}
