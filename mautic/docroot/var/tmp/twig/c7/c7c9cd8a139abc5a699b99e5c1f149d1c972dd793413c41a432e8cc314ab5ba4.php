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

/* @bundles/CoreBundle/Templating/Helper/MenuHelper.php */
class __TwigTemplate_7320a74c212fddcdef76f6a1f3db4347990a1f83961c1d56df09d8f7310580a5 extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Knp\\Menu\\ItemInterface;
use Knp\\Menu\\Matcher\\MatcherInterface;
use Knp\\Menu\\Twig\\Helper as KnpHelper;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * Class MenuHelper.
 */
class MenuHelper extends Helper
{
    /**
     * @var KnpHelper
     */
    protected \$helper;

    /**
     * MenuHelper constructor.
     */
    public function __construct(KnpHelper \$helper)
    {
        \$this->helper = \$helper;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'menu';
    }

    /**
     * Parses attributes for the menu view.
     *
     * @param \$attributes
     * @param \$overrides
     *
     * @return string
     */
    public function parseAttributes(\$attributes, \$overrides = [])
    {
        if (!is_array(\$attributes)) {
            \$attributes = [];
        }

        \$attributes = array_merge(\$attributes, \$overrides);

        \$string = '';
        foreach (\$attributes as \$name => \$value) {
            \$name  = trim(\$name);
            \$value = trim(\$value);
            if (\$name == \$value) {
                \$string .= \" \$name\";
            } else {
                \$string .= \" \$name=\\\"\$value\\\"\";
            }
        }

        return \$string;
    }

    /**
     * Concats the appropriate classes for menu links.
     *
     * @param array \$options
     */
    public function buildClasses(ItemInterface &\$item, MatcherInterface &\$matcher, \$options)
    {
        \$isAncestor = \$matcher->isAncestor(\$item, \$options['matchingDepth']);
        \$isCurrent  = \$matcher->isCurrent(\$item);

        \$class   = \$item->getAttribute('class');
        \$classes = (\$class) ? \" {\$class}\" : '';
        \$classes .= (\$isCurrent) ? \" {\$options['currentClass']}\" : '';
        \$classes .= (\$isAncestor) ? \" {\$options['ancestorClass']}\" : '';
        \$classes .= (\$isAncestor && \$this->invisibleChildSelected(\$item, \$matcher)) ? \" {\$options['currentClass']}\" : '';
        \$classes .= (\$item->actsLikeFirst()) ? \" {\$options['firstClass']}\" : '';
        \$classes .= (\$item->actsLikeLast()) ? \" {\$options['lastClass']}\" : '';
        \$item->setAttribute('class', trim(\$classes));
    }

    /**
     * @param ItemInterface \$menu
     *
     * @return bool
     */
    public function invisibleChildSelected(\$menu, MatcherInterface \$matcher)
    {
        /** @var ItemInterface \$item */
        foreach (\$menu as \$item) {
            if (\$matcher->isCurrent(\$item)) {
                return (\$item->isDisplayed()) ? false : true;
            }
        }

        return false;
    }

    /**
     * Retrieves an item following a path in the tree.
     *
     * @param \\Knp\\Menu\\ItemInterface|string \$menu
     *
     * @return \\Knp\\Menu\\ItemInterface
     */
    public function get(\$menu, array \$path = [], array \$options = [])
    {
        return \$this->helper->get(\$menu, \$path, \$options);
    }

    /**
     * Renders a menu with the specified renderer.
     *
     * @param \\Knp\\Menu\\ItemInterface|string|array \$menu
     * @param string                               \$renderer
     *
     * @return string
     */
    public function render(\$menu, array \$options = [], \$renderer = null)
    {
        if (null === \$renderer) {
            \$renderer = \$menu;
        }
        \$options['menu'] = \$menu;

        return \$this->helper->render(\$menu, \$options, \$renderer);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/MenuHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/MenuHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/MenuHelper.php");
    }
}
