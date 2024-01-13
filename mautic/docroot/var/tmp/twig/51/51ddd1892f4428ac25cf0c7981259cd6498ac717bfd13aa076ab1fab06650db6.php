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

/* @bundles/CoreBundle/Menu/MenuBuilder.php */
class __TwigTemplate_a6090f35e767d415bbff536872f3698b2751d12a5edda33b3d04bb3e921bfa9f extends Template
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

namespace Mautic\\CoreBundle\\Menu;

use Knp\\Menu\\FactoryInterface;
use Knp\\Menu\\Loader\\ArrayLoader;
use Knp\\Menu\\Matcher\\MatcherInterface;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MenuEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

/**
 * Class MenuBuilder.
 */
class MenuBuilder
{
    /**
     * @var FactoryInterface
     */
    private \$factory;

    /**
     * @var MatcherInterface
     */
    private \$matcher;

    /**
     * @var \\Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher
     */
    private \$dispatcher;

    /**
     * @var \\Mautic\\CoreBundle\\Menu\\MenuHelper
     */
    private \$menuHelper;

    /**
     * MenuBuilder constructor.
     */
    public function __construct(FactoryInterface \$knpFactory, MatcherInterface \$matcher, EventDispatcherInterface \$dispatcher, MenuHelper \$menuHelper)
    {
        \$this->factory    = \$knpFactory;
        \$this->matcher    = \$matcher;
        \$this->dispatcher = \$dispatcher;
        \$this->menuHelper = \$menuHelper;
    }

    /**
     * @param \$name
     * @param \$arguments
     *
     * @return mixed
     */
    public function __call(\$name, \$arguments)
    {
        \$name = str_replace('Menu', '', \$name);

        return \$this->buildMenu(\$name);
    }

    /**
     * Used by breadcrumbs to determine active link.
     *
     * @param \\Knp\\Menu\\ItemInterface \$menu
     * @param string                  \$forRouteUri
     * @param string                  \$forRouteName
     *
     * @return \\Knp\\Menu\\ItemInterface|null
     */
    public function getCurrentMenuItem(\$menu, \$forRouteUri, \$forRouteName)
    {
        try {
            /** @var \\Knp\\Menu\\ItemInterface \$item */
            foreach (\$menu as \$item) {
                if ('current' == \$forRouteUri && \$this->matcher->isCurrent(\$item)) {
                    //current match
                    return \$item;
                } elseif ('current' != \$forRouteUri && \$item->getUri() == \$forRouteUri) {
                    //route uri match
                    return \$item;
                } elseif (!empty(\$forRouteName) && \$forRouteName == \$item->getExtra('routeName')) {
                    //route name match
                    return \$item;
                }

                if (\$item->getChildren() && \$current_child = \$this->getCurrentMenuItem(\$item, \$forRouteUri, \$forRouteName)) {
                    return \$current_child;
                }
            }
        } catch (\\Exception \$e) {
            //do nothing
        }

        return null;
    }

    /**
     * @param \$name
     *
     * @return mixed
     */
    private function buildMenu(\$name)
    {
        static \$menus = [];

        if (!isset(\$menus[\$name])) {
            \$loader = new ArrayLoader(\$this->factory);

            //dispatch the MENU_BUILD event to retrieve bundle menu items
            \$event = new MenuEvent(\$this->menuHelper, \$name);
            \$this->dispatcher->dispatch(CoreEvents::BUILD_MENU, \$event);

            \$menuItems    = \$event->getMenuItems();

            // KNP Menu explicitly requires a menu name since v3
            if (empty(\$menuItems['name'])) {
                \$menuItems['name'] = \$name;
            }
            \$menus[\$name] = \$loader->load(\$menuItems);
        }

        return \$menus[\$name];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Menu/MenuBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/Menu/MenuBuilder.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Menu/MenuBuilder.php");
    }
}
