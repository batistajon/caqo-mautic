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

/* @bundles/CoreBundle/Helper/RandomHelper/RandomHelperInterface.php */
class __TwigTemplate_3ff77b2023648b862763aadd86b171041e8a074852201c0831d7dca416438f02 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\RandomHelper;

/**
 * Interface RandomHelperIdentifier.
 */
interface RandomHelperInterface
{
    /**
     * Generate random string.
     *
     * @param int    \$length
     * @param string \$charlist
     *
     * @return string
     */
    public function generate(\$length = 10, \$charlist = '0-9a-z');
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/RandomHelper/RandomHelperInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/RandomHelper/RandomHelperInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/RandomHelper/RandomHelperInterface.php");
    }
}
