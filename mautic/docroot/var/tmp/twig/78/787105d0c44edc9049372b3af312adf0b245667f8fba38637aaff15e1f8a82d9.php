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

/* @bundles/CoreBundle/Views/Default/content.html.php */
class __TwigTemplate_872ba33d4c428a34197c5a765ba7ff531631a55c6c14c2bfdbb7eaf75921c614 extends Template
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
\$request     = \$app->getRequest();
\$contentOnly = \$request->get('contentOnly', false) || \$view['slots']->get('contentOnly', false) || !empty(\$contentOnly);
\$modalView   = \$request->get('modal', false) || \$view['slots']->get('inModal', false) || !empty(\$modalView);

if (!\$request->isXmlHttpRequest() && !\$modalView):
    //load base template
    \$template = (\$contentOnly) ? 'slim' : 'base';
    \$view->extend(\"MauticCoreBundle:Default:\$template.html.php\");
endif;
?>

<?php if (!\$modalView): ?>
<div class=\"content-body\">
    <?php echo \$view->render('MauticCoreBundle:Default:pageheader.html.php'); ?>
\t<?php \$view['slots']->output('_content'); ?>
</div>

<?php \$view['slots']->output('modal'); ?>
<?php echo \$view['security']->getAuthenticationContent(); ?>
<?php else: ?>
<?php \$view['slots']->output('_content'); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/content.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Default/content.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/content.html.php");
    }
}
