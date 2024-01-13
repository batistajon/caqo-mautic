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

/* @bundles/UserBundle/Event/LoginEvent.php */
class __TwigTemplate_50c7b8e11d8d37dbad8a22598ee779eff7b022a0de4851c29587d118217cb004 extends Template
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

/**
 * Class LoginEvent.
 */
class LoginEvent extends Event
{
    /**
     * @var User
     */
    private \$user;

    public function __construct(User \$user)
    {
        \$this->user = \$user;
    }

    /**
     * @return \\Mautic\\UserBundle\\Entity\\User|null
     */
    public function getUser()
    {
        return \$this->user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/LoginEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/LoginEvent.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Event/LoginEvent.php");
    }
}
