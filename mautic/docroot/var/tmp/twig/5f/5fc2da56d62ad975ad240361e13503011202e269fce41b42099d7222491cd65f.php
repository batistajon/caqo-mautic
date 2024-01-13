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

/* @bundles/LeadBundle/Views/Note/form.html.php */
class __TwigTemplate_9d99135bee8d71d73ddb90b38c8d7b1350a4c2bf0aae5137bdef05562dfb4543 extends Template
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
\$view['slots']->set('mauticContent', 'leadnote');
\$userId = \$form->vars['data']->getId();
if (!empty(\$userId)) {
    \$header = \$view['translator']->trans('mautic.lead.note.header.edit');
} else {
    \$header = \$view['translator']->trans('mautic.lead.note.header.new');
}
?>
<?php echo \$view['form']->start(\$form); ?>
<?php echo \$view['form']->row(\$form['text']); ?>

<div class=\"row\">
    <div class=\"col-xs-6\">
        <?php echo \$view['form']->widget(\$form['type']); ?>
    </div>
    <div class=\"col-xs-6\">
        <?php echo \$view['form']->widget(\$form['dateTime']); ?>
    </div>
</div>

<?php echo \$view['form']->row(\$form['buttons']); ?>
<?php echo \$view['form']->end(\$form); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Note/form.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Note/form.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Note/form.html.php");
    }
}
