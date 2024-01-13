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

/* @bundles/CoreBundle/Views/Helper/page_actions.html.php */
class __TwigTemplate_296a6de286e6ce715b402196901d79fa5faa1d34290e6cc5706b9c51eacc823f extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper;

if (!isset(\$item)) {
    \$item = null;
}

if (!isset(\$tooltip)) {
    \$tooltip = null;
}

\$view['buttons']->reset(\$app->getRequest(), ButtonHelper::LOCATION_PAGE_ACTIONS, ButtonHelper::TYPE_BUTTON_DROPDOWN, \$item);
include 'action_button_helper.php';

foreach (\$templateButtons as \$action => \$enabled) {
    if (!\$enabled) {
        continue;
    }

    \$path     = false;
    \$primary  = false;
    \$priority = 0;

    switch (\$action) {
        case 'clone':
        case 'abtest':
            \$actionQuery = [
                'objectId' => ('abtest' == \$action && method_exists(\$item, 'getVariantParent') && \$item->getVariantParent())
                    ? \$item->getVariantParent()->getId() : \$item->getId(),
            ];
            \$icon = ('clone' == \$action) ? 'copy' : 'sitemap';
            \$path = \$view['router']->path(\$actionRoute, array_merge(['objectAction' => \$action], \$actionQuery, \$query));
            break;
        case 'close':
            \$closeParameters = isset(\$routeVars['close']) ? \$routeVars['close'] : [];
            \$icon            = 'remove';
            \$path            = \$view['router']->path(\$indexRoute, \$closeParameters);
            \$primary         = true;
            \$priority        = 200;
            break;
        case 'new':
        case 'edit':
            \$actionQuery = ('edit' == \$action) ? ['objectId' => \$item->getId()] : [];
            \$icon        = ('edit' == \$action) ? 'pencil-square-o' : 'plus';
            \$path        = \$view['router']->path(\$actionRoute, array_merge(['objectAction' => \$action], \$actionQuery, \$query));
            \$primary     = true;
            break;
        case 'delete':
            \$view['buttons']->addButton(
                [
                    'confirm' => [
                        'message' => \$view['translator']->trans(
                            'mautic.'.\$langVar.'.form.confirmdelete',
                            ['%name%' => \$item->\$nameGetter().' ('.\$item->getId().')']
                        ),
                        'confirmAction' => \$view['router']->path(
                            \$actionRoute,
                            array_merge(['objectAction' => 'delete', 'objectId' => \$item->getId()], \$query)
                        ),
                        'template' => 'delete',
                        'btnClass' => false,
                    ],
                    'priority' => -1,
                ]
            );
            break;
    }

    if (\$path) {
        \$mergeAttr = (!in_array(\$action, ['edit', 'new'])) ? [] : \$editAttr;
        \$view['buttons']->addButton(
            [
                'attr' => array_merge(
                    [
                        'class'       => 'btn btn-default',
                        'href'        => \$path,
                        'data-toggle' => 'ajax',
                    ],
                    \$mergeAttr
                ),
                'iconClass' => 'fa fa-'.\$icon,
                'btnText'   => \$view['translator']->trans('mautic.core.form.'.\$action),
                'priority'  => \$priority,
                'primary'   => \$primary,
                'tooltip'   => \$tooltip,
            ]
        );
    }
}

echo '<div class=\"std-toolbar btn-group\">';

\$dropdownOpenHtml = '<button type=\"button\" class=\"btn btn-default btn-nospin dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-caret-down\"></i></button>'
    .\"\\n\";
\$dropdownOpenHtml .= '<ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">'.\"\\n\";
echo \$view['buttons']->renderButtons(\$dropdownOpenHtml, '</ul>');

echo '</div>';

echo \$extraHtml;
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/page_actions.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/page_actions.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/page_actions.html.php");
    }
}
