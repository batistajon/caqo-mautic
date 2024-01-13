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

/* @bundles/ApiBundle/Views/Client/form.html.php */
class __TwigTemplate_3a4a5e101ff54ad013e1c9087190ff7cd60f7ac180c3179cc182dbe2db501b33 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'client');
\$id = \$form->vars['data']->getId();
if (!empty(\$id)) {
    \$name   = \$form->vars['data']->getName();
    \$header = \$view['translator']->trans('mautic.api.client.header.edit', ['%name%' => \$name]);
} else {
    \$header = \$view['translator']->trans('mautic.api.client.header.new');
}
\$view['slots']->set('headerTitle', \$header);
?>

<div class=\"row\">
    <div class=\"pa-md\">
        <div class=\"col-md-6\">
            <?php echo \$view['form']->form(\$form); ?>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Views/Client/form.html.php";
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
        return new Source("", "@bundles/ApiBundle/Views/Client/form.html.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Views/Client/form.html.php");
    }
}
