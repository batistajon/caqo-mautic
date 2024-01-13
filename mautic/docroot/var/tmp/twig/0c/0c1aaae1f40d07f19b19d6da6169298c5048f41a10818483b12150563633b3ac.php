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

/* @bundles/PageBundle/Views/SubscribedEvents/Calendar/modal.html.php */
class __TwigTemplate_f9adc9ab1e83096478b2abf9fb612c07c4f35306ba17666b8ec344d2e6c6f45a extends Template
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
?>
<?php echo \$view['form']->start(\$form); ?>
<?php echo \$view['form']->errors(\$form); ?>
<?php echo \$view['form']->row(\$form['publishUp']); ?>
<?php echo \$view['form']->row(\$form['publishDown']); ?>
<?php echo \$view['form']->end(\$form); ?>

<br />
<div class=\"text-center\">
\t<a href=\"<?php echo \$view['router']->path('mautic_page_action',
        ['objectAction' => 'edit', 'objectId' => \$entity->getId()]); ?>\"
\t    data-toggle=\"ajax\">
\t    <?php echo \$view['translator']->trans('mautic.page.menu.edit'); ?>
\t</a>
\t|
\t<a href=\"<?php echo \$view['router']->path('mautic_page_action',
        ['objectAction' => 'view', 'objectId' => \$entity->getId()]); ?>\"
\t    data-toggle=\"ajax\">
\t    <?php echo \$view['translator']->trans('mautic.core.details'); ?>
\t</a>
\t|
\t<a href=\"<?php echo \$model->generateUrl(\$entity); ?>\" target=\"_blank\">
\t    <?php echo \$view['translator']->trans('mautic.page.menu.view'); ?>
\t</a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/SubscribedEvents/Calendar/modal.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/SubscribedEvents/Calendar/modal.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/SubscribedEvents/Calendar/modal.html.php");
    }
}
