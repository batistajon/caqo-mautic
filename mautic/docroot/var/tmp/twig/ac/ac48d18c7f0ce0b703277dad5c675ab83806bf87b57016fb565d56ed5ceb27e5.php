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

/* @bundles/LeadBundle/Event/ListPreProcessListEvent.php */
class __TwigTemplate_87863cab191abf0d7d631290bd598f63a62023e30869397da5e91f2a151fa4a5 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class ListPreProcessListEvent.
 */
class ListPreProcessListEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$list;

    protected \$result;

    /**
     * @param bool \$isNew
     */
    public function __construct(array \$list, \$isNew = false)
    {
        \$this->list  = \$list;
        \$this->isNew = \$isNew;
    }

    /**
     * Returns the List entity.
     *
     * @return array
     */
    public function getList()
    {
        return \$this->list;
    }

    /**
     * Sets the lead list entity.
     */
    public function setList(array \$list)
    {
        \$this->list = \$list;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return \$this->result;
    }

    /**
     * @param \$result
     *
     * @return \$this
     */
    public function setResult(\$result)
    {
        \$this->result = \$result;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ListPreProcessListEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListPreProcessListEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/ListPreProcessListEvent.php");
    }
}
