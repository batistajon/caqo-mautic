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

/* @bundles/EmailBundle/Event/EmailOpenEvent.php */
class __TwigTemplate_ad14a950d08ce82c63ebeef27365370c81392e850f8a6ed358ae780e5599fd61 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class EmailOpenEvent.
 */
class EmailOpenEvent extends CommonEvent
{
    /**
     * @var Request
     */
    private \$request;

    /**
     * @var Email
     */
    private \$email;

    /**
     * @var bool
     */
    private \$firstTime;

    /**
     * @param Email \$email
     */
    public function __construct(Stat \$stat, \$request, \$firstTime = false)
    {
        \$this->entity    = \$stat;
        \$this->email     = \$stat->getEmail();
        \$this->request   = \$request;
        \$this->firstTime = \$firstTime;
    }

    /**
     * Returns the Email entity.
     *
     * @return Email
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * Get email request.
     *
     * @return string
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->entity;
    }

    /**
     * Returns if this is first time the email is read.
     *
     * @return bool
     */
    public function isFirstTime()
    {
        return \$this->firstTime;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/EmailOpenEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailOpenEvent.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Event/EmailOpenEvent.php");
    }
}
