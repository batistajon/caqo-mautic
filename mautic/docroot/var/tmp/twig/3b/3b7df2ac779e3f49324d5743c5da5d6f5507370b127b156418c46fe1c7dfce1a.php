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

/* @bundles/LeadBundle/Views/Import/upload_form.html.php */
class __TwigTemplate_15eff6506655be29b2565a448510dc6b8e6c08c41661fde59c5ddaabc8809482 extends Template
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

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'routeBase'       => 'import',
            'langVar'         => 'lead.import',
            'templateButtons' => [
                'close' => true,
            ],
            'routeVars' => [
                'close' => [
                    'object' => \$app->getRequest()->get('object', 'contacts'),
                ],
            ],
        ]
    )
);

?>
<div class=\"row\">
    <div class=\"col-sm-offset-3 col-sm-6\">
        <div class=\"ml-lg mr-lg mt-md pa-lg\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.lead.import.start.instructions'); ?></div>
                </div>
                <div class=\"panel-body\">
                    <?php echo \$view['form']->start(\$form); ?>
                    <div class=\"input-group well mt-lg\">
                        <?php echo \$view['form']->widget(\$form['file']); ?>
                        <span class=\"input-group-btn\">
                            <?php echo \$view['form']->widget(\$form['start']); ?>
                        </span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <?php echo \$view['form']->label(\$form['batchlimit']); ?>
                            <?php echo \$view['form']->widget(\$form['batchlimit']); ?>
                            <?php echo \$view['form']->errors(\$form['batchlimit']); ?>
                        </div>

                        <div class=\"col-xs-3\">
                            <?php echo \$view['form']->label(\$form['delimiter']); ?>
                            <?php echo \$view['form']->widget(\$form['delimiter']); ?>
                            <?php echo \$view['form']->errors(\$form['delimiter']); ?>
                        </div>

                        <div class=\"col-xs-3\">
                            <?php echo \$view['form']->label(\$form['enclosure']); ?>
                            <?php echo \$view['form']->widget(\$form['enclosure']); ?>
                            <?php echo \$view['form']->errors(\$form['enclosure']); ?>
                        </div>

                        <div class=\"col-xs-3\">
                            <?php echo \$view['form']->label(\$form['escape']); ?>
                            <?php echo \$view['form']->widget(\$form['escape']); ?>
                            <?php echo \$view['form']->errors(\$form['escape']); ?>
                        </div>
                    </div>
                    <?php echo \$view['form']->end(\$form); ?>
                </div>
            </div>
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
        return "@bundles/LeadBundle/Views/Import/upload_form.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/upload_form.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/upload_form.html.php");
    }
}
