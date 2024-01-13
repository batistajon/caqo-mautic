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

/* @bundles/CoreBundle/Templating/Helper/SecurityHelper.php */
class __TwigTemplate_e5ad403f199b02263d8d51ce3177dba95177fe6bff85189966f02eca41e6fe3f extends Template
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

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\UserBundle\\Event\\AuthenticationContentEvent;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * Class SecurityHelper.
 */
class SecurityHelper extends Helper
{
    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    /**
     * @var Dispatcher
     */
    private \$dispatcher;

    /**
     * @var CsrfTokenManagerInterface
     */
    private \$tokenManager;

    /**
     * SecurityHelper constructor.
     */
    public function __construct(
        CorePermissions \$security,
        RequestStack \$requestStack,
        EventDispatcherInterface \$dispatcher,
        CsrfTokenManagerInterface \$tokenManager
    ) {
        \$this->security     = \$security;
        \$this->requestStack = \$requestStack;
        \$this->dispatcher   = \$dispatcher;
        \$this->tokenManager = \$tokenManager;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'security';
    }

    /**
     * Helper function to check if the logged in user has access to an entity.
     *
     * @param \$ownPermission
     * @param \$otherPermission
     * @param \$ownerId
     *
     * @return bool
     */
    public function hasEntityAccess(\$ownPermission, \$otherPermission, \$ownerId)
    {
        return \$this->security->hasEntityAccess(\$ownPermission, \$otherPermission, \$ownerId);
    }

    /**
     * @param \$permission
     *
     * @return mixed
     */
    public function isGranted(\$permission)
    {
        return \$this->security->isGranted(\$permission);
    }

    /**
     * Get content from listeners.
     */
    public function getAuthenticationContent()
    {
        \$request = \$this->requestStack->getCurrentRequest();
        \$content = '';
        if (\$this->dispatcher->hasListeners(UserEvents::USER_AUTHENTICATION_CONTENT)) {
            \$event = new AuthenticationContentEvent(\$request);
            \$this->dispatcher->dispatch(UserEvents::USER_AUTHENTICATION_CONTENT, \$event);
            \$content = \$event->getContent();

            // Remove post_logout session after content has been generated
            \$request->getSession()->remove('post_logout');
        }

        return \$content;
    }

    /**
     * Returns CSRF token string for an intention.
     *
     * @param string \$intention
     *
     * @return string
     */
    public function getCsrfToken(\$intention)
    {
        return \$this->tokenManager->getToken(\$intention)->getValue();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/SecurityHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/SecurityHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/SecurityHelper.php");
    }
}
