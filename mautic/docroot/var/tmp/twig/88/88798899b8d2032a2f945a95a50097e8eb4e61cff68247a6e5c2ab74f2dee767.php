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

/* @bundles/CoreBundle/Model/AjaxLookupModelInterface.php */
class __TwigTemplate_c87316191a426bf392854f058896f58af9d634d5a99807f43ad4bbcfb2b7fbc9 extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Interface AjaxLookupModelInterface.
 *
 * Defines methods required by AjaxLookupControllerTrait to find matching records
 */
interface AjaxLookupModelInterface
{
    /**
     * @param        \$type
     * @param string \$filter
     * @param int    \$limit
     * @param int    \$start
     *
     * @return mixed
     */
    public function getLookupResults(\$type, \$filter = '', \$limit = 10, \$start = 0);

    /**
     * @return CommonRepository
     */
    public function getRepository();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Model/AjaxLookupModelInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Model/AjaxLookupModelInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Model/AjaxLookupModelInterface.php");
    }
}
