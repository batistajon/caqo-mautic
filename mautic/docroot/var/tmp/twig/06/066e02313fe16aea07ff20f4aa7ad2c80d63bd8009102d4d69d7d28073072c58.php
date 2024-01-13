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

/* @bundles/UserBundle/Security/Authentication/LogoutHandler.php */
class __TwigTemplate_d459b5c7e381227531616c51fd7bdd700e85d81f7f0906d39dafd4e59bebc366 extends Template
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

namespace Mautic\\UserBundle\\Security\\Authentication;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\UserBundle\\Event\\LogoutEvent;
use Mautic\\UserBundle\\Model\\UserModel;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface;

class LogoutHandler implements LogoutHandlerInterface
{
    /**
     * @var UserModel
     */
    protected \$userModel;

    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    /**
     * @var \\Mautic\\UserBundle\\Entity\\User|null
     */
    protected \$user;

    /**
     * LogoutHandler constructor.
     */
    public function __construct(UserModel \$userModel, EventDispatcherInterface \$dispatcher, UserHelper \$userHelper)
    {
        \$this->userModel  = \$userModel;
        \$this->dispatcher = \$dispatcher;
        \$this->user       = \$userHelper->getUser();
    }

    /**
     * {@inheritdoc}
     *
     * @return Response never null
     */
    public function logout(Request \$request, Response \$response, TokenInterface \$token)
    {
        if (\$this->dispatcher->hasListeners(UserEvents::USER_LOGOUT)) {
            \$event = new LogoutEvent(\$this->user, \$request);
            \$this->dispatcher->dispatch(UserEvents::USER_LOGOUT, \$event);
        }

        // Clear session
        \$session = \$request->getSession();
        \$session->clear();

        if (isset(\$event)) {
            \$sessionItems = \$event->getPostSessionItems();
            foreach (\$sessionItems as \$key => \$value) {
                \$session->set(\$key, \$value);
            }
        }
        // Note that a logout occurred
        \$session->set('post_logout', true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/Authentication/LogoutHandler.php";
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
        return new Source("", "@bundles/UserBundle/Security/Authentication/LogoutHandler.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Security/Authentication/LogoutHandler.php");
    }
}
