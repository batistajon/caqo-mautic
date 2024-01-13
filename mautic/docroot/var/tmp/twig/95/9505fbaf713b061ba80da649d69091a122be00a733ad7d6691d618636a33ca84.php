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

/* @bundles/PointBundle/Event/PointActionEvent.php */
class __TwigTemplate_cce9bc2a142d804eb66fb08444b9d6bf41e8fb9d5531ab60c50e7d284332dcdf extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\Point;

class PointActionEvent extends CommonEvent
{
    /**
     * @var Point
     */
    protected \$point;

    /**
     * @var Lead
     */
    protected \$lead;

    public function __construct(Point \$point, Lead \$lead)
    {
        \$this->point = \$point;
        \$this->lead  = \$lead;
    }

    /**
     * @return Point
     */
    public function getPoint()
    {
        return \$this->point;
    }

    public function setPoint(Point \$point)
    {
        \$this->point = \$point;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/PointActionEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/PointActionEvent.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Event/PointActionEvent.php");
    }
}
