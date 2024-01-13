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

/* @bundles/CoreBundle/Views/Menu/extra.html.php */
class __TwigTemplate_c4e9de646c5e780a1dcc59fdb68d7bf5d11fb7070a6eb1c3f282080537642cc2 extends Template
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
    \$childrenAttributes = \$item->getChildrenAttributes();
    if (!isset(\$childrenAttributes['class'])) {
        \$childrenAttributes['class'] = '';
    }
    \$childrenAttributes['class'] .= ' dropdown-menu';

    echo \"<ul{\$view['menu']->parseAttributes(\$childrenAttributes)}>\\n\";

    foreach (\$item->getChildren() as \$child) {
        if (!\$child->isDisplayed()) {
            continue;
        }

        //builds the class attributes based on options
        \$view['menu']->buildClasses(\$child, \$matcher, \$options);

        \$showChildren = (\$child->hasChildren() && \$child->getDisplayChildren());
        \$liAttributes = \$child->getAttributes();
        \$isAncestor   = \$matcher->isAncestor(\$child, \$options['matchingDepth']);
        \$extras       = \$child->getExtras();

        if (!empty(\$extras['divider'])) {
            echo \"<li role=\\\"separator\\\" class=\\\"divider\\\"></li>\\n\";
        } elseif (!empty(\$extras['header'])) {
            echo '<li class=\"dropdown-header\">'.\$view['translator']->trans(\$extras['header']).\"</li>\\n\";
        } else {
            echo \"<li{\$view['menu']->parseAttributes(\$liAttributes)}>\\n\";

            \$url            = \$child->getUri();
            \$linkAttributes = \$child->getLinkAttributes();
            \$url            = (empty(\$url)) ? 'javascript:void(0);' : \$url;
            if (empty(\$linkAttributes['target'])) {
                \$linkAttributes['data-toggle'] = 'ajax';
            }
            echo \"<a href=\\\"\$url\\\"{\$view['menu']->parseAttributes(\$linkAttributes)}>\";
            if (!empty(\$extras['iconClass'])) {
                echo \"<span style=\\\"margin-top: 4px;\\\" class=\\\"icon pull-left fa {\$extras['iconClass']}\\\"></span>\";
            }

            \$labelAttributes = \$child->getLabelAttributes();
            if (!isset(\$labelAttributes['class'])) {
                \$labelAttributes['class'] = '';
            }
            \$labelAttributes['class'] .= ' text';
            echo \"<span{\$view['menu']->parseAttributes(\$labelAttributes)}>{\$view['translator']->trans(\$child->getLabel())}</span>\";

            echo \"</a>\\n\";
            echo \"</li>\\n\";
        }
    }

    echo \"</ul>\\n\";
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Menu/extra.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Menu/extra.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Menu/extra.html.php");
    }
}
