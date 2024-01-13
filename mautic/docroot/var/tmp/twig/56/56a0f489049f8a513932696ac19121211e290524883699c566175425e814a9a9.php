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

/* @bundles/CategoryBundle/Config/config.php */
class __TwigTemplate_5d38a2bb8695b7873ff4c1fc07288da2542d3600a7213850c7fb7194b428ebfb extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_category_batch_contact_set' => [
                'path'       => '/categories/batch/contact/set',
                'controller' => 'MauticCategoryBundle:BatchContact:exec',
            ],
            'mautic_category_batch_contact_view' => [
                'path'       => '/categories/batch/contact/view',
                'controller' => 'MauticCategoryBundle:BatchContact:index',
            ],
            'mautic_category_index' => [
                'path'       => '/categories/{bundle}/{page}',
                'controller' => 'MauticCategoryBundle:Category:index',
                'defaults'   => [
                    'bundle' => 'category',
                ],
            ],
            'mautic_category_action' => [
                'path'       => '/categories/{bundle}/{objectAction}/{objectId}',
                'controller' => 'MauticCategoryBundle:Category:executeCategory',
                'defaults'   => [
                    'bundle' => 'category',
                ],
            ],
        ],
        'api' => [
            'mautic_api_categoriesstandard' => [
                'standard_entity' => true,
                'name'            => 'categories',
                'path'            => '/categories',
                'controller'      => 'MauticCategoryBundle:Api\\CategoryApi',
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'mautic.category.menu.index' => [
                'route'     => 'mautic_category_index',
                'access'    => 'category:categories:view',
                'iconClass' => 'fa-folder',
                'id'        => 'mautic_category_index',
            ],
        ],
    ],

    'services' => [
        'events' => [
            'mautic.category.subscriber' => [
                'class'     => \\Mautic\\CategoryBundle\\EventListener\\CategorySubscriber::class,
                'arguments' => [
                    'mautic.helper.bundle',
                    'mautic.helper.ip_lookup',
                    'mautic.core.model.auditlog',
                ],
            ],
            'mautic.category.button.subscriber' => [
                'class'     => \\Mautic\\CategoryBundle\\EventListener\\ButtonSubscriber::class,
                'arguments' => [
                    'router',
                    'translator',
                ],
            ],
        ],
        'forms' => [
            'mautic.form.type.category' => [
                'class'     => 'Mautic\\CategoryBundle\\Form\\Type\\CategoryListType',
                'arguments' => [
                    'doctrine.orm.entity_manager',
                    'translator',
                    'mautic.category.model.category',
                    'router',
                ],
            ],
            'mautic.form.type.category_form' => [
                'class'     => \\Mautic\\CategoryBundle\\Form\\Type\\CategoryType::class,
                'arguments' => [
                    'session',
                ],
            ],
            'mautic.form.type.category_bundles_form' => [
                'class'     => 'Mautic\\CategoryBundle\\Form\\Type\\CategoryBundlesType',
                'arguments' => [
                    'event_dispatcher',
                ],
            ],
        ],
        'models' => [
            'mautic.category.model.category' => [
                'class'     => 'Mautic\\CategoryBundle\\Model\\CategoryModel',
                'arguments' => [
                    'request_stack',
                ],
            ],
            'mautic.category.model.contact.action' => [
                'class'     => \\Mautic\\CategoryBundle\\Model\\ContactActionModel::class,
                'arguments' => [
                    'mautic.lead.model.lead',
                ],
            ],
        ],
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Config/config.php";
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
        return new Source("", "@bundles/CategoryBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Config/config.php");
    }
}
