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

/* @bundles/PageBundle/Event/PageEvent.php */
class __TwigTemplate_e9817988433ba72dd6d5f25e4b9b0ce4515645f24b88d4e5c47ac0759d446149 extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PageBundle\\Entity\\Page;

/**
 * Class PageEvent.
 */
class PageEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Page \$page, \$isNew = false)
    {
        \$this->entity = \$page;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Page entity.
     *
     * @return Page
     */
    public function getPage()
    {
        return \$this->entity;
    }

    /**
     * Sets the Page entity.
     */
    public function setPage(Page \$page)
    {
        \$this->entity = \$page;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/PageEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageEvent.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Event/PageEvent.php");
    }
}
