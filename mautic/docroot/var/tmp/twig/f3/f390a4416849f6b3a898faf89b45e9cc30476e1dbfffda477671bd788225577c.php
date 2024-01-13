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

/* @bundles/CoreBundle/Event/CustomTemplateEvent.php */
class __TwigTemplate_583a7c3abbf841c48cab36153001dd7d2dd9a89f10cc7b19fe9dd87b6cc6a580 extends Template
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

use Symfony\\Component\\HttpFoundation\\Request;

class CustomTemplateEvent extends AbstractCustomRequestEvent
{
    /**
     * @var string|null
     */
    protected \$template;

    /**
     * @var array
     */
    protected \$vars;

    /**
     * @param Request     \$request
     * @param string|null \$template
     */
    public function __construct(Request \$request = null, \$template = null, array \$vars = [])
    {
        parent::__construct(\$request);

        if (empty(\$template)) {
            throw new \\InvalidArgumentException('\$template is required');
        }

        \$this->template = \$template;
        \$this->vars     = \$vars;
    }

    /**
     * @return string|null
     */
    public function getTemplate()
    {
        return \$this->template;
    }

    /**
     * @param string|null \$template
     *
     * @return CustomTemplateEvent
     */
    public function setTemplate(\$template)
    {
        \$this->template = \$template;

        \$this->stopPropagation();

        return \$this;
    }

    /**
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @param arrat \$vars
     *
     * @return CustomTemplateEvent
     */
    public function setVars(\$vars)
    {
        \$this->vars = \$vars;

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
        return "@bundles/CoreBundle/Event/CustomTemplateEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomTemplateEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/CustomTemplateEvent.php");
    }
}
