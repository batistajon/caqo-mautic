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

/* @bundles/UserBundle/Event/LogoutEvent.php */
class __TwigTemplate_40e2d4a2310888a3bfda235d2d119d565be7d50b14c4bf5bc21897f9def37ac0 extends Template
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

namespace Mautic\\UserBundle\\Event;

use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class LogoutEvent.
 */
class LogoutEvent extends Event
{
    /**
     * @var User
     */
    private \$user;

    /**
     * @var array
     */
    private \$session = [];

    /**
     * @var Request
     */
    private \$request;

    /**
     * LogoutEvent constructor.
     */
    public function __construct(User \$user, Request \$request)
    {
        \$this->user    = \$user;
        \$this->request = \$request;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return \$this->user;
    }

    /**
     * Add value to session after it's been cleared.
     *
     * @param \$key
     * @param \$value
     */
    public function setPostSessionItem(\$key, \$value)
    {
        \$this->session[\$key] = \$value;
    }

    /**
     * Get session items to be added after session has been cleared.
     *
     * @return array
     */
    public function getPostSessionItems()
    {
        return \$this->session;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/LogoutEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/LogoutEvent.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Event/LogoutEvent.php");
    }
}
