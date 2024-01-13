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

/* @bundles/CoreBundle/Menu/MenuHelper.php */
class __TwigTemplate_73e8cee90ab19c96be3b678fff65868c54092a8fd82e3d3c14c6df2c52445aa2 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * Class MenuHelper.
 */
class MenuHelper
{
    /**
     * @var CorePermissions
     */
    protected \$security;

    /**
     * @var RequestStack
     */
    protected \$requestStack;

    /**
     * Stores items that are assigned to another parent outside it's bundle.
     *
     * @var array
     */
    private \$orphans = [];

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var IntegrationHelper
     */
    protected \$integrationHelper;

    /**
     * MenuHelper constructor.
     */
    public function __construct(CorePermissions \$security, RequestStack \$requestStack, CoreParametersHelper \$coreParametersHelper, IntegrationHelper \$integrationHelper)
    {
        \$this->security              = \$security;
        \$this->coreParametersHelper  = \$coreParametersHelper;
        \$this->requestStack          = \$requestStack;
        \$this->integrationHelper     = \$integrationHelper;
    }

    /**
     * Converts menu config into something KNP menus expects.
     *
     * @param int    \$depth
     * @param int    \$defaultPriority
     * @param string \$type
     */
    public function createMenuStructure(&\$items, \$depth = 0, \$defaultPriority = 9999, \$type = 'main')
    {
        foreach (\$items as \$k => &\$i) {
            if (!is_array(\$i) || empty(\$i)) {
                continue;
            }

            // Remove the item if the checks fail
            if (false === \$this->handleChecks(\$i)) {
                unset(\$items[\$k]);
                continue;
            }

            //Set ID to route name
            if (!isset(\$i['id'])) {
                if (!empty(\$i['route'])) {
                    \$i['id'] = \$i['route'];
                } else {
                    \$i['id'] = 'menu-item-'.uniqid();
                }
            }

            //Set link attributes
            if (!isset(\$i['linkAttributes'])) {
                \$i['linkAttributes'] = [
                    'data-menu-link' => \$i['id'],
                    'id'             => \$i['id'],
                ];
            } elseif (!isset(\$i['linkAttributes']['id'])) {
                \$i['linkAttributes']['id']             = \$i['id'];
                \$i['linkAttributes']['data-menu-link'] = \$i['id'];
            } elseif (!isset(\$i['linkAttributes']['data-menu-link'])) {
                \$i['linkAttributes']['data-menu-link'] = \$i['id'];
            }

            \$i['extras']          = [];
            \$i['extras']['depth'] = \$depth;

            // Note a divider
            if (!empty(\$i['divider'])) {
                \$i['extras']['divider'] = true;
            }

            // Note a header
            if (!empty(\$i['header'])) {
                \$i['extras']['header'] = \$i['header'];
            }

            //Set the icon class for the menu item
            if (!empty(\$i['iconClass'])) {
                \$i['extras']['iconClass'] = \$i['iconClass'];
            }

            //Set the actual route name so that it's available to the menu template
            if (isset(\$i['route'])) {
                \$i['extras']['routeName'] = \$i['route'];
            }

            //Repeat for sub items
            if (isset(\$i['children'])) {
                \$this->createMenuStructure(\$i['children'], \$depth + 1, \$defaultPriority);
            }

            // Determine if this item needs to be listed in a bundle outside it's own
            if (isset(\$i['parent'])) {
                if (!isset(\$this->orphans[\$type])) {
                    \$this->orphans[\$type] = [];
                }

                if (!isset(\$this->orphans[\$type][\$i['parent']])) {
                    \$this->orphans[\$type][\$i['parent']] = [];
                }

                \$this->orphans[\$type][\$i['parent']][\$k] = \$i;

                unset(\$items[\$k]);

            // Don't set a default priority here as it'll assume that of it's parent
            } elseif (!isset(\$i['priority'])) {
                // Ensure a priority for non-orphans
                \$i['priority'] = \$defaultPriority;
            }
        }
    }

    /**
     * Get and reset orphaned menu items.
     *
     * @param string \$type
     *
     * @return mixed
     */
    public function resetOrphans(\$type = 'main')
    {
        \$orphans              = (isset(\$this->orphans[\$type])) ? \$this->orphans[\$type] : [];
        \$this->orphans[\$type] = [];

        return \$orphans;
    }

    /**
     * Give orphaned menu items a home.
     *
     * @param bool \$appendOrphans
     * @param int  \$depth
     */
    public function placeOrphans(array &\$menuItems, \$appendOrphans = false, \$depth = 1, \$type = 'main')
    {
        foreach (\$menuItems as \$key => &\$items) {
            if (isset(\$this->orphans[\$type]) && isset(\$this->orphans[\$type][\$key])) {
                \$priority = (isset(\$items['priority'])) ? \$items['priority'] : 9999;
                foreach (\$this->orphans[\$type][\$key] as &\$orphan) {
                    if (!isset(\$orphan['extras'])) {
                        \$orphan['extras'] = [];
                    }
                    \$orphan['extras']['depth'] = \$depth;
                    if (!isset(\$orphan['priority'])) {
                        \$orphan['priority'] = \$priority;
                    }
                }

                \$items['children'] =
                    (!isset(\$items['children']))
                    ?
                    \$this->orphans[\$type][\$key]
                    :
                    array_merge(\$items['children'], \$this->orphans[\$type][\$key]);
                unset(\$this->orphans[\$type][\$key]);
            } elseif (isset(\$items['children'])) {
                foreach (\$items['children'] as \$subItems) {
                    \$this->placeOrphans(\$subItems, false, \$depth + 1, \$type);
                }
            }
        }

        // Append orphans that couldn't find a home
        if (\$appendOrphans && !empty(\$this->orphans[\$type])) {
            \$menuItems            = array_merge(\$menuItems, \$this->orphans[\$type]);
            \$this->orphans[\$type] = [];
        }
    }

    /**
     * Sort menu items by priority.
     *
     * @param \$menuItems
     * @param \$defaultPriority
     */
    public function sortByPriority(&\$menuItems, \$defaultPriority = 9999)
    {
        foreach (\$menuItems as &\$items) {
            \$parentPriority = (isset(\$items['priority'])) ? \$items['priority'] : \$defaultPriority;
            if (isset(\$items['children'])) {
                \$this->sortByPriority(\$items['children'], \$parentPriority);
            }
        }

        uasort(
            \$menuItems,
            function (\$a, \$b) use (\$defaultPriority) {
                \$ap = (isset(\$a['priority']) ? (int) \$a['priority'] : \$defaultPriority);
                \$bp = (isset(\$b['priority']) ? (int) \$b['priority'] : \$defaultPriority);

                if (\$ap == \$bp) {
                    return 0;
                }

                return (\$ap > \$bp) ? -1 : 1;
            }
        );
    }

    /**
     * @param \$name
     *
     * @return mixed
     */
    protected function getParameter(\$name)
    {
        return \$this->coreParametersHelper->get(\$name, false);
    }

    /**
     * @param string \$integrationName
     *
     * @return bool
     */
    protected function handleIntegrationChecks(\$integrationName, array \$config)
    {
        \$integration = \$this->integrationHelper->getIntegrationObject(\$integrationName);

        if (!\$integration) {
            return false;
        }

        \$settings = \$integration->getIntegrationSettings();

        \$passChecks = true;

        foreach (\$config as \$key => \$value) {
            switch (\$key) {
                case 'enabled':
                    \$passChecks = \$settings->getIsPublished() == \$value;
                    break;
                case 'features':
                    \$supportedFeatures = \$settings->getSupportedFeatures();

                    foreach (\$value as \$featureName) {
                        if (!in_array(\$featureName, \$supportedFeatures)) {
                            \$passChecks = false;
                            break;
                        }
                    }
                    break;
            }
        }

        return \$passChecks;
    }

    /**
     * @param string \$name
     * @param mixed  \$value
     *
     * @return bool
     */
    protected function handleParametersChecks(\$name, \$value)
    {
        return \$this->getParameter(\$name) == \$value;
    }

    /**
     * @param string \$name
     * @param mixed  \$value
     *
     * @return bool
     */
    protected function handleRequestChecks(\$name, \$value)
    {
        return \$this->requestStack->getCurrentRequest()->get(\$name) == \$value;
    }

    /**
     * @param \$accessLevel
     *
     * @return bool
     */
    protected function handleAccessCheck(\$accessLevel)
    {
        switch (\$accessLevel) {
            case 'admin':
                return \$this->security->isAdmin();
            default:
                return \$this->security->isGranted(\$accessLevel, 'MATCH_ONE');
        }
    }

    /**
     * Handle access check and other checks for menu items.
     *
     * @return bool Returns false if the item fails the access check or any other checks
     */
    protected function handleChecks(array \$menuItem)
    {
        if (isset(\$menuItem['access']) && false === \$this->handleAccessCheck(\$menuItem['access'])) {
            return false;
        }

        if (isset(\$menuItem['checks']) && is_array(\$menuItem['checks'])) {
            foreach (\$menuItem['checks'] as \$checkGroup => \$checkConfig) {
                \$checkMethod = 'handle'.ucfirst(\$checkGroup).'Checks';

                if (!method_exists(\$this, \$checkMethod)) {
                    continue;
                }

                foreach (\$checkConfig as \$name => \$value) {
                    if (false === \$this->\$checkMethod(\$name, \$value)) {
                        return false;
                    }
                }
            }
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Menu/MenuHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Menu/MenuHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Menu/MenuHelper.php");
    }
}
