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

/* @bundles/LeadBundle/Event/ImportInitEvent.php */
class __TwigTemplate_28461de488eede01b32b300fba30d38800e33b485400d3d3d4ae635a264d2536 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

final class ImportInitEvent extends CommonEvent
{
    public string \$routeObjectName;
    public bool \$objectSupported = false;
    public ?string \$objectSingular;
    public ?string \$objectName; // Object name for humans. Will go through translator.
    public ?string \$activeLink;
    public ?string \$indexRoute;
    public array \$indexRouteParams = [];

    public function __construct(string \$routeObjectName)
    {
        \$this->routeObjectName = \$routeObjectName;
    }

    public function setIndexRoute(?string \$indexRoute, array \$routeParams = [])
    {
        \$this->indexRoute       = \$indexRoute;
        \$this->indexRouteParams = \$routeParams;
    }

    /**
     * Check if the import is for said route object and notes if the object exist.
     */
    public function importIsForRouteObject(string \$routeObject): bool
    {
        if (\$this->routeObjectName === \$routeObject) {
            \$this->objectSupported = true;

            return true;
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ImportInitEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ImportInitEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/ImportInitEvent.php");
    }
}
