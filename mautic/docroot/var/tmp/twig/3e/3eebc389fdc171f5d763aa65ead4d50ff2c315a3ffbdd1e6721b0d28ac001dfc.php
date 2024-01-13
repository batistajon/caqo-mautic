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

/* @bundles/CoreBundle/Views/Default/head.html.php */
class __TwigTemplate_ed9b3042d581bac75cab914d5b79bd265535ee20f13565b97b98ebc1cc733316 extends Template
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
<head>
    <meta charset=\"UTF-8\" />
    <title><?php if (!empty(\$view['slots']->get('headerTitle', ''))): ?>
        <?php echo strip_tags(str_replace('<', ' <', \$view['slots']->get('headerTitle', ''))); ?> | 
    <?php endif; ?>
\t<?php echo \$view['slots']->get('pageTitle', 'Mautic'); ?>
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"<?php echo \$view['assets']->getUrl('media/images/favicon.ico'); ?>\" />
    <link rel=\"icon\" sizes=\"192x192\" href=\"<?php echo \$view['assets']->getUrl('media/images/favicon.ico'); ?>\">
    <link rel=\"apple-touch-icon\" href=\"<?php echo \$view['assets']->getUrl('media/images/apple-touch-icon.png'); ?>\" />

    <?php echo \$view['assets']->outputSystemStylesheets(); ?>

    <?php echo \$view->render('MauticCoreBundle:Default:script.html.php'); ?>
    <?php \$view['assets']->outputHeadDeclarations(); ?>
</head>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/head.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Default/head.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/head.html.php");
    }
}
