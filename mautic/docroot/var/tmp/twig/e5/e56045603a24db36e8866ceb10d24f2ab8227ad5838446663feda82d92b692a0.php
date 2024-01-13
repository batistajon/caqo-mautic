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

/* @bundles/ConfigBundle/Config/config.php */
class __TwigTemplate_0bdf58a6dc8d826eca81fc4710a26ca5bbd42fcb5df03b270206789511aef760 extends Template
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
            'mautic_config_action' => [
                'path'       => '/config/{objectAction}/{objectId}',
                'controller' => 'MauticConfigBundle:Config:execute',
            ],
            'mautic_sysinfo_index' => [
                'path'       => '/sysinfo',
                'controller' => 'MauticConfigBundle:Sysinfo:index',
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'mautic.config.menu.index' => [
                'route'           => 'mautic_config_action',
                'routeParameters' => ['objectAction' => 'edit'],
                'iconClass'       => 'fa-cogs',
                'id'              => 'mautic_config_index',
                'access'          => 'admin',
            ],
            'mautic.sysinfo.menu.index' => [
                'route'     => 'mautic_sysinfo_index',
                'iconClass' => 'fa-life-ring',
                'id'        => 'mautic_sysinfo_index',
                'access'    => 'admin',
                'checks'    => [
                    'parameters' => [
                        'sysinfo_disabled' => false,
                    ],
                ],
            ],
        ],
    ],

    'services' => [
        'events' => [
            'mautic.config.subscriber' => [
                'class'     => \\Mautic\\ConfigBundle\\EventListener\\ConfigSubscriber::class,
                'arguments' => [
                    'mautic.config.config_change_logger',
                ],
            ],
        ],

        'forms' => [
            'mautic.form.type.config' => [
                'class'     => \\Mautic\\ConfigBundle\\Form\\Type\\ConfigType::class,
                'arguments' => [
                    'mautic.config.form.restriction_helper',
                    'mautic.config.form.escape_transformer',
                ],
            ],
        ],
        'models' => [
            'mautic.config.model.sysinfo' => [
                'class'     => \\Mautic\\ConfigBundle\\Model\\SysinfoModel::class,
                'arguments' => [
                    'mautic.helper.paths',
                    'mautic.helper.core_parameters',
                    'translator',
                    'doctrine.dbal.default_connection',
                    'mautic.install.service',
                    'mautic.install.configurator.step.check',
                ],
            ],
        ],
        'others' => [
            'mautic.config.mapper' => [
                'class'     => \\Mautic\\ConfigBundle\\Mapper\\ConfigMapper::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                ],
            ],
            'mautic.config.form.restriction_helper' => [
                'class'     => \\Mautic\\ConfigBundle\\Form\\Helper\\RestrictionHelper::class,
                'arguments' => [
                    'translator',
                    '%mautic.security.restrictedConfigFields%',
                    '%mautic.security.restrictedConfigFields.displayMode%',
                ],
            ],
            'mautic.config.config_change_logger' => [
                'class'     => \\Mautic\\ConfigBundle\\Service\\ConfigChangeLogger::class,
                'arguments' => [
                    'mautic.helper.ip_lookup',
                    'mautic.core.model.auditlog',
                ],
            ],
            'mautic.config.form.escape_transformer' => [
                'class'     => \\Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer::class,
                'arguments' => [
                    '%mautic.config_allowed_parameters%',
                ],
            ],
        ],
    ],

    'parameters' => [
        'config_allowed_parameters' => [
            'kernel.root_dir',
            'kernel.project_dir',
            'kernel.logs_dir',
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
        return "@bundles/ConfigBundle/Config/config.php";
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
        return new Source("", "@bundles/ConfigBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Config/config.php");
    }
}
