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

/* @bundles/CoreBundle/Views/Menu/main.html.php */
class __TwigTemplate_a5dac48042e32a3c5bc65c2e4f4b3d3b8d05a6e53f6aad7bef4903d6ddd5ab64 extends Template
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

if (\$item->hasChildren() && 0 !== \$options['depth'] && \$item->getDisplayChildren()) {
    /* Top menu level start */
    if (\$item->isRoot()) {
        echo '<ul class=\"nav mt-10\" data-toggle=\"menu\">'.\"\\n\";
    } else {
        echo \"<ul{\$view['menu']->parseAttributes(\$item->getChildrenAttributes())}>\\n\";
    }

    /* Submenu levels  start*/
    foreach (\$item->getChildren() as \$child) {
        if (!\$child->isDisplayed()) {
            continue;
        }

        //builds the class attributes based on options
        \$view['menu']->buildClasses(\$child, \$matcher, \$options);

        \$showChildren = (\$child->hasChildren() && \$child->getDisplayChildren());
        \$liAttributes = \$child->getAttributes();
        \$isAncestor   = \$matcher->isAncestor(\$child, \$options['matchingDepth']);

        \$liAttributes['class'] = (isset(\$liAttributes['class'])) ? \$liAttributes['class'].' nav-group' : 'nav-group';

        /* Menu item start */
        echo \"<li{\$view['menu']->parseAttributes(\$liAttributes)}>\\n\";

        \$linkAttributes = \$child->getLinkAttributes();
        \$extras         = \$child->getExtras();

        /* Menu link start */
        if (\$showChildren) {
            //Main item
            echo '<a href=\"javascript:void(0);\" data-target=\"#'.\$linkAttributes['id'].'_child\" data-toggle=\"submenu\" data-parent=\".nav\" '.\$view['menu']->parseAttributes(\$linkAttributes).\">\\n\";
            echo '<span class=\"arrow pull-right text-right\"></span>'.\"\\n\";
        } else {
            //Submenu item
            \$url = \$child->getUri();
            \$url = (empty(\$url)) ? 'javascript:void(0);' : \$url;
            if (empty(\$linkAttributes['target'])) {
                \$linkAttributes['data-toggle'] = 'ajax';
            }
            echo \"<a href=\\\"\$url\\\"{\$view['menu']->parseAttributes(\$linkAttributes)}>\";
        }

        if (!empty(\$extras['iconClass'])) {
            echo \"<span class=\\\"icon pull-left fa {\$extras['iconClass']}\\\"></span>\";
        }

        \$labelAttributes = \$child->getLabelAttributes();
        if (!isset(\$labelAttributes['class'])) {
            \$labelAttributes['class'] = 'nav-item-name';
        }
        \$labelPull = empty(\$extras['depth']) ? ' pull-left' : '';
        \$labelAttributes['class'] .= ' text'.\$labelPull;

        echo \"<span{\$view['menu']->parseAttributes(\$labelAttributes)}>{\$view['translator']->trans(\$child->getLabel())}</span>\";

        echo \"</a>\\n\";
        /* Menu link end */

        /* Submenu items start */
        if (\$showChildren) {
            \$options['depth']         = (\$options['depth']) ? \$options['depth']-- : null;
            \$options['matchingDepth'] = (\$options['matchingDepth']) ? \$options['matchingDepth']-- : null;

            \$levelClass = \$isAncestor ? 'nav-submenu collapse in' : 'nav-submenu collapse';

            //set the class
            \$child->setChildrenAttribute('class', \$levelClass);
            \$child->setChildrenAttribute('id', \$linkAttributes['id'].'_child');
            echo \$view->render('MauticCoreBundle:Menu:main.html.php', [
                'item'    => \$child,
                'options' => \$options,
                'matcher' => \$matcher,
            ]);
        }
        /* Submenu items end */

        /* Menu item end */
        echo \"</li>\\n\";
    }
    /* Submenu items end */

    /* Top menu level end*/
    echo \"</ul>\\n\";
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Menu/main.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Menu/main.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Menu/main.html.php");
    }
}
