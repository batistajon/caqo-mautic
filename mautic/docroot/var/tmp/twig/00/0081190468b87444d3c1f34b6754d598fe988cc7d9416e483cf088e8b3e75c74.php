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

/* @bundles/UserBundle/Event/AuthenticationContentEvent.php */
class __TwigTemplate_74db6998574086f55c2911d6b801852ba293748f63e53e60afa02b73283b4c30 extends Template
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

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AuthenticationContentEvent.
 */
class AuthenticationContentEvent extends Event
{
    /**
     * @var Request
     */
    protected \$request;

    /**
     * @var array
     */
    protected \$content = [];

    /**
     * @var bool
     */
    protected \$postLogout = false;

    /**
     * AuthenticationContentEvent constructor.
     */
    public function __construct(Request \$request)
    {
        \$this->request    = \$request;
        \$this->postLogout = \$request->getSession()->get('post_logout', false);
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return bool
     */
    public function isLogout()
    {
        return \$this->postLogout;
    }

    /**
     * @param \$content
     */
    public function addContent(\$content)
    {
        \$this->content[] = \$content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return implode(\"\\n\\n\", \$this->content);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/AuthenticationContentEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/AuthenticationContentEvent.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Event/AuthenticationContentEvent.php");
    }
}
