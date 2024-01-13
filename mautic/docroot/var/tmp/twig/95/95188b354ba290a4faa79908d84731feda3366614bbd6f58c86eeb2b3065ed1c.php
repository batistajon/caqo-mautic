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

/* @bundles/PageBundle/Event/PageDisplayEvent.php */
class __TwigTemplate_ae3d828f8622f54544a3d1b9b7a8696cbd2ee6f9308702b29c12d01f009aff5d extends Template
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

use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class PageDisplayEvent.
 */
class PageDisplayEvent extends Event
{
    /**
     * @var string
     */
    private \$content;

    /**
     * @var Page
     */
    private \$page;

    /**
     * @var array
     */
    private \$params;

    /**
     * PageDisplayEvent constructor.
     *
     * @param \$content
     */
    public function __construct(\$content, Page \$page, array \$params = [])
    {
        \$this->page    = \$page;
        \$this->content = \$content;
        \$this->params  = \$params;
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
     * Get page content.
     *
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * Set page content.
     *
     * @param string \$content
     */
    public function setContent(\$content)
    {
        \$this->content = \$content;
    }

    /**
     * Get params.
     *
     * @return array
     */
    public function getParams()
    {
        return \$this->params;
    }

    /**
     * Set params.
     *
     * @param array \$params
     */
    public function setParams(\$params)
    {
        \$this->params = \$params;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/PageDisplayEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageDisplayEvent.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Event/PageDisplayEvent.php");
    }
}
