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

/* @bundles/PageBundle/Event/PageHitEvent.php */
class __TwigTemplate_c5ccdf4b6b49d92d64081037dba6084e5cf07d61411ca39563af760d209d52dc extends Template
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
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\Page;

class PageHitEvent extends CommonEvent
{
    protected \$request;

    protected \$code;

    /**
     * @var Page
     */
    protected \$page;

    /**
     * @var array
     */
    protected \$clickthroughData = [];

    /**
     * @var bool
     */
    protected \$unique;

    /**
     * PageHitEvent constructor.
     *
     * @param       \$request
     * @param       \$code
     * @param array \$clickthrough
     * @param bool  \$isUnique
     */
    public function __construct(Hit \$hit, \$request, \$code, \$clickthrough = [], \$isUnique = false)
    {
        \$this->entity           = \$hit;
        \$this->page             = \$hit->getPage();
        \$this->request          = \$request;
        \$this->code             = \$code;
        \$this->clickthroughData = \$clickthrough;
        \$this->unique           = \$isUnique;
    }

    /**
     * Returns the Page entity.
     *
     * @return Page
     */
    public function getPage()
    {
        return \$this->page;
    }

    /**
     * Get page request.
     *
     * @return string
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * Get HTML code.
     *
     * @return mixed
     */
    public function getCode()
    {
        return \$this->code;
    }

    /**
     * @return Hit
     */
    public function getHit()
    {
        return \$this->entity;
    }

    /**
     * @return mixed
     */
    public function getClickthroughData()
    {
        return \$this->clickthroughData;
    }

    /**
     * Returns if this page hit is unique.
     *
     * @return bool
     */
    public function isUnique()
    {
        return \$this->unique;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/PageHitEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageHitEvent.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Event/PageHitEvent.php");
    }
}
