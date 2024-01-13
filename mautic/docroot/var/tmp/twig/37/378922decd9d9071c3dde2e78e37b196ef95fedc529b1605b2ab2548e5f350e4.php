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

/* @bundles/LeadBundle/Event/PointsChangeEvent.php */
class __TwigTemplate_f630de446ad302c2fd207ce9271030387baff23521a29730fc4305ec1d2413d7 extends Template
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
use Mautic\\LeadBundle\\Entity\\Lead;

/**
 * Class PointsChangeEvent.
 */
class PointsChangeEvent extends CommonEvent
{
    protected \$old;
    protected \$new;

    public function __construct(Lead &\$lead, \$old, \$new)
    {
        \$this->entity = &\$lead;
        \$this->old    = (int) \$old;
        \$this->new    = (int) \$new;
    }

    /**
     * Returns the Lead entity.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->entity;
    }

    /**
     * Returns the new points.
     *
     * @return int
     */
    public function getNewPoints()
    {
        return \$this->new;
    }

    /**
     * Returns the old points.
     *
     * @return int
     */
    public function getOldPoints()
    {
        return \$this->old;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/PointsChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/PointsChangeEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/PointsChangeEvent.php");
    }
}
