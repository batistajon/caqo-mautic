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

/* @bundles/StageBundle/Helper/EventHelper.php */
class __TwigTemplate_898bfdfef00e6dad3b4a882fc708b8d5057010db276e2858bc6960f2e1b0e826 extends Template
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

namespace Mautic\\StageBundle\\Helper;

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
    public static function engageStageAction(\$lead, \$action)
    {
        static \$initiated = [];

        return 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Helper/EventHelper.php";
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
        return new Source("", "@bundles/StageBundle/Helper/EventHelper.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Helper/EventHelper.php");
    }
}
