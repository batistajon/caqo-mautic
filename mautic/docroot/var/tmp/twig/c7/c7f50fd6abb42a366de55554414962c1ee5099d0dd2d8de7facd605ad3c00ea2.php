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

/* @bundles/CoreBundle/Views/FormTheme/form.html.php */
class __TwigTemplate_4acf8e72779a0895d935932b8ac5eda6afa09ab945abd3344c94502353bfbf6f extends Template
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
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!isset(\$entity)) {
    \$entity = \$form->vars['data'];
}

\$extendTemplate = (!empty(\$useSlim)) ? 'slim' : 'content';
\$view->extend('MauticCoreBundle:Default:'.\$extendTemplate.'.html.php');
if (isset(\$mauticContent)) {
    \$view['slots']->set('mauticContent', \$mauticContent);
}

if (!isset(\$headerTitle)) {
    if (\$entity->getId()) {
        \$headerTitle = \$view['translator']->hasId(\$translationBase.'.header.edit')
            ?
            \$view['translator']->trans(\$translationBase.'.header.edit', ['%name%' => \$entity->getName()])
            :
            \$view['translator']->trans('mautic.core.header.edit', ['%name%' => \$entity->getName()]);
    } else {
        \$headerTitle = \$view['translator']->hasId(\$translationBase.'.header.new')
            ?
            \$view['translator']->trans(\$translationBase.'.header.new')
            :
            \$view['translator']->trans('mautic.core.header.new');
    }
}
\$view['slots']->set('headerTitle', \$headerTitle);

\$attr = \$form->vars['attr'];
if (\$view['slots']->has('formAttr')) {
    \$attr = array_merge(\$attr, \$view['slots']->get('formAttr'));
}

echo \$view['form']->start(\$form, ['attr' => \$attr]);
\$view['slots']->output('mainFormContent');
echo \$view['form']->end(\$form);
\$view['slots']->output('postFormContent');
?>


";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/form.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/form.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/form.html.php");
    }
}
