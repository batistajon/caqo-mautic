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

/* @bundles/InstallBundle/Config/config.php */
class __TwigTemplate_328097f8abafa13725e4dfdcd41a33ebb7d2a539e6c6e33edef67e2fec52b21f extends Template
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
        'public' => [
            'mautic_installer_home' => [
                'path'       => '/installer',
                'controller' => 'MauticInstallBundle:Install:step',
            ],
            'mautic_installer_remove_slash' => [
                'path'       => '/installer/',
                'controller' => 'MauticCoreBundle:Common:removeTrailingSlash',
            ],
            'mautic_installer_step' => [
                'path'       => '/installer/step/{index}',
                'controller' => 'MauticInstallBundle:Install:step',
            ],
            'mautic_installer_final' => [
                'path'       => '/installer/final',
                'controller' => 'MauticInstallBundle:Install:final',
            ],
            'mautic_installer_catchcall' => [
                'path'         => '/installer/{noerror}',
                'controller'   => 'MauticInstallBundle:Install:step',
                'requirements' => [
                    'noerror' => '^(?).+',
                ],
            ],
        ],
    ],

    'services' => [
        'fixtures' => [
            'mautic.install.fixture.lead_field' => [
                'class'     => \\Mautic\\InstallBundle\\InstallFixtures\\ORM\\LeadFieldData::class,
                'tag'       => \\Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => [],
            ],
            'mautic.install.fixture.role' => [
                'class'     => \\Mautic\\InstallBundle\\InstallFixtures\\ORM\\RoleData::class,
                'tag'       => \\Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => [],
            ],
            'mautic.install.fixture.report_data' => [
                'class'     => \\Mautic\\InstallBundle\\InstallFixtures\\ORM\\LoadReportData::class,
                'tag'       => \\Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => [],
            ],
            'mautic.install.fixture.grape_js' => [
                'class'     => \\Mautic\\InstallBundle\\InstallFixtures\\ORM\\GrapesJsData::class,
                'tag'       => \\Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => [],
            ],
        ],
        'forms' => [
            \\Mautic\\InstallBundle\\Configurator\\Form\\CheckStepType::class => [
                'class' => \\Mautic\\InstallBundle\\Configurator\\Form\\CheckStepType::class,
            ],
            \\Mautic\\InstallBundle\\Configurator\\Form\\DoctrineStepType::class => [
                'class' => \\Mautic\\InstallBundle\\Configurator\\Form\\DoctrineStepType::class,
            ],
            \\Mautic\\InstallBundle\\Configurator\\Form\\EmailStepType::class => [
                'class'     => \\Mautic\\InstallBundle\\Configurator\\Form\\EmailStepType::class,
                'arguments' => [
                    'translator',
                    'mautic.email.transport_type',
                ],
            ],
            \\Mautic\\InstallBundle\\Configurator\\Form\\UserStepType::class => [
                'class'     => \\Mautic\\InstallBundle\\Configurator\\Form\\UserStepType::class,
                'arguments' => ['session'],
            ],
        ],
        'other' => [
            'mautic.install.configurator.step.check' => [
                'class'     => \\Mautic\\InstallBundle\\Configurator\\Step\\CheckStep::class,
                'arguments' => [
                    'mautic.configurator',
                    '%kernel.root_dir%',
                    'request_stack',
                    'mautic.cipher.openssl',
                ],
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 0,
                ],
            ],
            'mautic.install.configurator.step.doctrine' => [
                'class'     => \\Mautic\\InstallBundle\\Configurator\\Step\\DoctrineStep::class,
                'arguments' => [
                    'mautic.configurator',
                ],
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 1,
                ],
            ],
            'mautic.install.configurator.step.email' => [
                'class'     => \\Mautic\\InstallBundle\\Configurator\\Step\\EmailStep::class,
                'arguments' => [
                    'session',
                ],
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 3,
                ],
            ],
            'mautic.install.configurator.step.user' => [
                'class'        => \\Mautic\\InstallBundle\\Configurator\\Step\\UserStep::class,
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 2,
                ],
            ],
            'mautic.install.service' => [
                'class'     => 'Mautic\\InstallBundle\\Install\\InstallService',
                'arguments' => [
                    'mautic.configurator',
                    'mautic.helper.cache',
                    'mautic.helper.paths',
                    'doctrine.orm.entity_manager',
                    'translator',
                    'kernel',
                    'validator',
                    'security.password_encoder',
                ],
            ],
            'mautic.install.leadcolumns' => [
                'class'     => \\Mautic\\InstallBundle\\EventListener\\DoctrineEventSubscriber::class,
                'tag'       => 'doctrine.event_subscriber',
                'arguments' => [],
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
        return "@bundles/InstallBundle/Config/config.php";
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
        return new Source("", "@bundles/InstallBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Config/config.php");
    }
}
