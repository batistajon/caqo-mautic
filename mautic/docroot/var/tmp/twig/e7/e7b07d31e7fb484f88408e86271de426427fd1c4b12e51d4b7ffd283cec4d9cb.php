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

/* @bundles/CoreBundle/Event/MenuEvent.php */
class __TwigTemplate_3310ec8a91afa1d256717b711cf033c404588adc3b712e46b41f94552f1483b2 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Menu\\MenuHelper;
use Symfony\\Component\\EventDispatcher\\Event;

class MenuEvent extends Event
{
    /**
     * @var array
     */
    protected \$menuItems = ['children' => []];

    /**
     * @var string
     */
    protected \$type;

    /**
     * @var MenuHelper
     */
    protected \$helper;

    /**
     * @param string \$type
     */
    public function __construct(MenuHelper \$menuHelper, \$type = 'main')
    {
        \$this->helper = \$menuHelper;
        \$this->type   = \$type;
    }

    public function setMenuItems(array \$menuItems)
    {
        \$this->menuItems = \$menuItems;
    }

    /**
     * Add items to the menu.
     */
    public function addMenuItems(array \$menuItems)
    {
        \$defaultPriority = isset(\$menuItems['priority']) ? \$menuItems['priority'] : 9999;
        \$items           = isset(\$menuItems['items']) ? \$menuItems['items'] : \$menuItems;

        \$isRoot = isset(\$items['name']) && ('root' == \$items['name'] || \$items['name'] == \$items['name']);
        if (!\$isRoot) {
            \$this->helper->createMenuStructure(\$items, 0, \$defaultPriority, \$this->type);

            \$this->menuItems['children'] = array_merge_recursive(\$this->menuItems['children'], \$items);
        } else {
            //make sure the root does not override the children
            if (isset(\$this->menuItems['children'])) {
                if (isset(\$items['children'])) {
                    \$items['children'] = array_merge_recursive(\$this->menuItems['children'], \$items['children']);
                } else {
                    \$items['children'] = \$this->menuItems['children'];
                }
            }
            \$this->menuItems = \$items;
        }
    }

    /**
     * Return the menu items.
     *
     * @return array
     */
    public function getMenuItems()
    {
        \$this->helper->placeOrphans(\$this->menuItems['children'], true, 1, \$this->type);
        \$this->helper->sortByPriority(\$this->menuItems['children']);
        \$this->helper->resetOrphans(\$this->type);

        return \$this->menuItems;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/MenuEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/MenuEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/MenuEvent.php");
    }
}
