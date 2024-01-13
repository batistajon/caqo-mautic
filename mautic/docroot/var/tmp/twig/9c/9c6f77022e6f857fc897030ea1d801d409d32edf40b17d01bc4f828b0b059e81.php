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

/* @bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php */
class __TwigTemplate_51c0c9b8f8e027b667981055e681a69bd06b70e6c09769e28e37d03f0f568554 extends Template
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

namespace Mautic\\PluginBundle\\Integration;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Form\\Type\\RoleListType;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

/**
 * Used by SSO auth plugins that use OAuth2, etc means of logins.
 */
abstract class AbstractSsoServiceIntegration extends AbstractIntegration
{
    /**
     * Called after the user is authenticated with the 3rd party service to obtain the users
     * details.
     *
     * @param \$response mixed Typically the response from request to authenticating service
     *
     * @return mixed
     */
    abstract public function getUser(\$response);

    /**
     * Get the user role for new users.
     *
     * @return bool|\\Doctrine\\Common\\Proxy\\Proxy|object|null
     *
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function getUserRole()
    {
        \$featureSettings = \$this->settings->getFeatureSettings();

        \$role = (isset(\$featureSettings['new_user_role'])) ? \$featureSettings['new_user_role'] : false;

        if (\$role) {
            return \$this->em->getReference(Role::class, \$role);
        }

        throw new AuthenticationException('mautic.integration.sso.error.no_role');
    }

    /**
     * Returns if a new user should be created if authenticated and not found locally.
     *
     * @return bool
     */
    public function shouldAutoCreateNewUser()
    {
        \$featureSettings = \$this->settings->getFeatureSettings();

        return (isset(\$featureSettings['auto_create_user'])) ? (bool) \$featureSettings['auto_create_user'] : false;
    }

    /**
     * Set the callback URL to sso_login.
     */
    public function getAuthCallbackUrl()
    {
        return \$this->router->generate('mautic_sso_login_check',
            ['integration' => \$this->getName()],
            true //absolute
        );
    }

    /**
     * @param array \$settings
     * @param array \$parameters
     *
     * @return bool|string
     */
    public function ssoAuthCallback(\$settings = [], \$parameters = [])
    {
        \$response = \$this->authCallback(\$settings, \$parameters);

        // Get user data
        return \$this->getUser(\$response);
    }

    /**
     * Don't save the keys as they are only used to validate user login.
     *
     * @param      \$data
     * @param null \$tokenOverride
     *
     * @return array
     */
    public function extractAuthKeys(\$data, \$tokenOverride = null)
    {
        // Prepare the keys for extraction such as renaming, setting expiry, etc
        \$data = \$this->prepareResponseForExtraction(\$data);

        //parse the response
        \$authTokenKey = (\$tokenOverride) ? \$tokenOverride : \$this->getAuthTokenKey();
        if (is_array(\$data) && isset(\$data[\$authTokenKey])) {
            return \$data;
        }

        \$error = \$this->getErrorsFromResponse(\$data);
        if (empty(\$error)) {
            \$error = \$this->translator->trans('mautic.integration.error.genericerror', [], 'flashes');
        }

        throw new AuthenticationException(\$error);
    }

    /**
     * @return array
     */
    public function getSupportedFeatures()
    {
        return [
            'sso_service',
        ];
    }

    /**
     * Get form settings; authorization is not needed since it is done when a user logs in.
     *
     * @return array
     */
    public function getFormSettings()
    {
        return [
            'requires_callback'      => true,
            'requires_authorization' => false,
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param Form|\\Symfony\\Component\\Form\\FormBuilder \$builder
     * @param array                                    \$data
     * @param string                                   \$formArea
     */
    public function appendToForm(&\$builder, \$data, \$formArea)
    {
        if ('features' == \$formArea) {
            \$builder->add('auto_create_user',
                YesNoButtonGroupType::class,
                [
                    'label' => 'mautic.integration.sso.auto_create_user',
                    'data'  => (isset(\$data['auto_create_user'])) ? (bool) \$data['auto_create_user'] : false,
                    'attr'  => [
                        'tooltip' => 'mautic.integration.sso.auto_create_user.tooltip',
                    ],
                ]
            );

            \$builder->add(
                'new_user_role',
                RoleListType::class,
                [
                    'label'      => 'mautic.integration.sso.new_user_role',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.integration.sso.new_user_role.tooltip',
                    ],
                ]
            );
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php");
    }
}
