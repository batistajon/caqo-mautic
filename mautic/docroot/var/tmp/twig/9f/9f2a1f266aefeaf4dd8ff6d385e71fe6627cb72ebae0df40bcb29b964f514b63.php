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

/* @bundles/StageBundle/Event/StageEvent.php */
class __TwigTemplate_bab4a31d0de313d385318e6249aba8c131d93c6f04fb93a20d6024d011e71510 extends Template
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

namespace Mautic\\StageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\StageBundle\\Entity\\Stage;

/**
 * Class StageEvent.
 */
class StageEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Stage &\$stage, \$isNew = false)
    {
        \$this->entity = &\$stage;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Stage entity.
     *
     * @return Stage
     */
    public function getStage()
    {
        return \$this->entity;
    }

    /**
     * Sets the Stage entity.
     */
    public function setStage(Stage \$stage)
    {
        \$this->entity = \$stage;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Event/StageEvent.php";
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
        return new Source("", "@bundles/StageBundle/Event/StageEvent.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Event/StageEvent.php");
    }
}
