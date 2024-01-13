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

/* @bundles/PageBundle/Views/SubscribedEvents/PageToken/langbar.html.php */
class __TwigTemplate_7824c1fc16909ebcb71c916d4bf1d3122a4705a30f484be3354fa76cfe65ced4 extends Template
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
\$count = count(\$pages);
?>

<div class=\"page-lang-bar\">
    <?php foreach (\$pages as \$page): ?>
    <?php \$active = (\$app->getRequest()->getRequestUri() == \$page['url']); ?>
    <span>
        <?php if (!\$active): ?>
        <a href=\"<?php echo \$page['url']; ?>\">
            <?php endif; ?>
        <?php echo \$page['lang']; ?>
        <?php if (!\$active): ?>
        </a>
        <?php endif; ?>
    </span>
    <?php --\$count; ?>
    <?php endforeach; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/SubscribedEvents/PageToken/langbar.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/SubscribedEvents/PageToken/langbar.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/SubscribedEvents/PageToken/langbar.html.php");
    }
}
