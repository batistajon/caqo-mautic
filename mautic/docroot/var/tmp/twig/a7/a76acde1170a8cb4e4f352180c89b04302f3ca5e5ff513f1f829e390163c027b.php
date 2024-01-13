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

/* @bundles/CoreBundle/Event/CustomContentEvent.php */
class __TwigTemplate_56edaba00124f08ba7673f870c8aad1fdb10d4addaa504f03f41bda6cc2e8b73 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

class CustomContentEvent extends Event
{
    /**
     * @var string
     */
    protected \$viewName;

    /**
     * @var string|null
     */
    protected \$context;

    /**
     * @var array
     */
    protected \$vars;

    /**
     * @var array
     */
    protected \$content = [];

    /**
     * @var array
     */
    protected \$templates = [];

    /**
     * @param string      \$viewName
     * @param string|null \$context
     */
    public function __construct(\$viewName, \$context = null, array \$vars = [])
    {
        \$this->viewName = \$viewName;
        \$this->context  = \$context;
        \$this->vars     = \$vars;
    }

    /**
     * Check if the context is applicable.
     *
     * @param string      \$viewName
     * @param string|null \$context
     *
     * @return bool
     */
    public function checkContext(\$viewName, \$context)
    {
        return \$viewName === \$this->viewName && \$context === \$this->context;
    }

    /**
     * @param string \$content
     */
    public function addContent(\$content)
    {
        \$this->content[] = \$content;
    }

    /**
     * @param string \$template
     */
    public function addTemplate(\$template, array \$vars = [])
    {
        \$this->templates[] = [
            'template' => \$template,
            'vars'     => \$vars,
        ];
    }

    /**
     * @return mixed
     */
    public function getViewName()
    {
        return \$this->viewName;
    }

    /**
     * @return string|null
     */
    public function getContext()
    {
        return \$this->context;
    }

    /**
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @return array
     */
    public function getTemplates()
    {
        return \$this->templates;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/CustomContentEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomContentEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/CustomContentEvent.php");
    }
}
