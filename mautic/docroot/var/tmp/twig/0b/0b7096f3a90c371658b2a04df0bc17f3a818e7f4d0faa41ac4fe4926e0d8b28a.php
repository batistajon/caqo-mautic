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

/* @bundles/UserBundle/Event/RoleEvent.php */
class __TwigTemplate_9c29d697b7a3a349ff03bae09e8f55f0ba86d65153c25f6619ed780d8c9398d2 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\UserBundle\\Entity\\Role;

/**
 * Class RoleEvent.
 */
class RoleEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Role &\$role, \$isNew = false)
    {
        \$this->entity = &\$role;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Role entity.
     *
     * @return Role
     */
    public function getRole()
    {
        return \$this->entity;
    }

    /**
     * Sets the Role entity.
     */
    public function setRole(Role \$role)
    {
        \$this->entity = \$role;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/RoleEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/RoleEvent.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Event/RoleEvent.php");
    }
}
