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

/* @bundles/PointBundle/Helper/EventHelper.php */
class __TwigTemplate_f88a1e7b7926e755980652a454fd49d39733a5bc5f7af8b7ea1bd1ac78674ec2 extends Template
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

namespace Mautic\\PointBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\Lead;

/**
 * Class EventHelper.
 */
class EventHelper
{
    /**
     * @param Lead  \$lead
     * @param array \$action
     *
     * @return int
     */
    public static function engagePointAction(\$lead, \$action)
    {
        static \$initiated = [];

        \$pointsChange = 0;

        //only initiate once per lead per type
        if (empty(\$initiated[\$lead->getId()][\$action['type']])) {
            if (!empty(\$action['properties']['delta'])) {
                \$pointsChange = \$action['properties']['delta'];
            }
        }

        return \$pointsChange;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Helper/EventHelper.php";
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
        return new Source("", "@bundles/PointBundle/Helper/EventHelper.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Helper/EventHelper.php");
    }
}
