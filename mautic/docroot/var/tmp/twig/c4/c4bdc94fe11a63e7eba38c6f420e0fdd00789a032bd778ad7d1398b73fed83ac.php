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

/* @bundles/FormBundle/Views/form.html.php */
class __TwigTemplate_e48dce01ef9766ab7f6b8146781d63ea649434dded02234353d9fb41801c2f7b extends Template
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
<html>
    <head>
        <title><?php echo \$name; ?></title>

        <?php echo \$metaRobots; ?>

        <?php echo \$view['analytics']->getCode(); ?>

        <?php if (isset(\$stylesheets) && is_array(\$stylesheets)) : ?>
        <?php foreach (\$stylesheets as \$css): ?>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"<?php echo \$css; ?>\" />
        <?php endforeach; ?>
        <?php endif; ?>

    </head>
    <body>
        <?php echo \$content; ?>
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/form.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/form.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/form.html.php");
    }
}
