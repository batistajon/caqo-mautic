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

/* @bundles/CoreBundle/Views/Translation/index.html.php */
class __TwigTemplate_c75e34b75f1697515d815cd2cd9dcdef727d959aee5a1752c8a8d9e0613e33c7 extends Template
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
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (!isset(\$nameGetter)) {
    \$nameGetter = 'getName';
}

if (count(\$translations['children']) || (\$translations['parent'] && \$translations['parent']->getId() !== \$activeEntity->getId())): ?>
<!-- start: related translations list -->
<ul class=\"list-group\">
    <?php
    if (\$translations['parent']) :
        echo \$view->render('MauticCoreBundle:Translation:row.html.php',
            [
                'translation'  => \$translations['parent'],
                'translations' => \$translations,
                'actionRoute'  => \$actionRoute,
                'activeEntity' => \$activeEntity,
                'model'        => \$model,
                'nameGetter'   => \$nameGetter,
            ]
        );
    endif;
    if (count(\$translations['children'])) :
        foreach (\$translations['children'] as \$translation) :
            echo \$view->render('MauticCoreBundle:Translation:row.html.php',
                [
                    'translation'  => \$translation,
                    'translations' => \$translations,
                    'actionRoute'  => \$actionRoute,
                    'activeEntity' => \$activeEntity,
                    'model'        => \$model,
                    'nameGetter'   => \$nameGetter,
                ]
            );
    endforeach;
    endif;
    ?>
</ul>
<!--/ end: related translations list -->
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Translation/index.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Translation/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Translation/index.html.php");
    }
}
