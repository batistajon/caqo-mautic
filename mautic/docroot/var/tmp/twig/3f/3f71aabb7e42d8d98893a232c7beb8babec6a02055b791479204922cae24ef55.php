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

/* @bundles/ApiBundle/Security/Permissions/ApiPermissions.php */
class __TwigTemplate_ad85f7aefbb547f1874a3ff8937d108b92095c180926867a925f91c322532d72 extends Template
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

namespace Mautic\\ApiBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\UserBundle\\Form\\Type\\PermissionListType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * Class ApiPermissions.
 */
class ApiPermissions extends AbstractPermissions
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\$params)
    {
        parent::__construct(\$params);

        \$this->permissions = [
            'access' => [
                'full' => 1024,
            ],
        ];
        \$this->addStandardPermissions('clients', false);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'api';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$builder->add(
            'api:access',
            PermissionListType::class,
            [
                'choices' => [
                    'mautic.api.permissions.granted' => 'full',
                ],
                'label'             => 'mautic.api.permissions.apiaccess',
                'data'              => (!empty(\$data['access']) ? \$data['access'] : []),
                'bundle'            => 'api',
                'level'             => 'access',
            ]
        );

        \$this->addStandardFormFields('api', 'clients', \$builder, \$data, false);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue(\$name, \$perm)
    {
        //ensure api is enabled system wide
        if (empty(\$this->params['api_enabled'])) {
            return 0;
        }

        return parent::getValue(\$name, \$perm);
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return !empty(\$this->params['api_enabled']);
    }

    /**
     * {@inheritdoc}
     */
    protected function getSynonym(\$name, \$level)
    {
        if ('access' == \$name && 'granted' == \$level) {
            return [\$name, 'full'];
        }

        return parent::getSynonym(\$name, \$level);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Security/Permissions/ApiPermissions.php";
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
        return new Source("", "@bundles/ApiBundle/Security/Permissions/ApiPermissions.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Security/Permissions/ApiPermissions.php");
    }
}
