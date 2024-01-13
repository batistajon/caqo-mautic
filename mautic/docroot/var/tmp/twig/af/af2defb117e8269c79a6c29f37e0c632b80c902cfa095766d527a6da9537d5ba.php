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

/* @bundles/CategoryBundle/Event/CategoryEvent.php */
class __TwigTemplate_baf4c80b05635230fa85d064d3d9d781c30e837591dfa6c9d99c906f79140e5d extends Template
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

namespace Mautic\\CategoryBundle\\Event;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class CategoryEvent.
 */
class CategoryEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Category &\$category, \$isNew = false)
    {
        \$this->entity = &\$category;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Category entity.
     *
     * @return Category
     */
    public function getCategory()
    {
        return \$this->entity;
    }

    /**
     * Sets the Category entity.
     */
    public function setCategory(Category \$category)
    {
        \$this->entity = \$category;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Event/CategoryEvent.php";
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
        return new Source("", "@bundles/CategoryBundle/Event/CategoryEvent.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Event/CategoryEvent.php");
    }
}
