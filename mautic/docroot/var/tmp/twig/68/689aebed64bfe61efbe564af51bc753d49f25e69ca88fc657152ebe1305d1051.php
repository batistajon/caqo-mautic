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

/* @bundles/CoreBundle/Tests/_support/Helper/Functional.php */
class __TwigTemplate_2a13de366ba1eeb2ace3a91a9c703191bf630ff3caa3c8b6956436853d297fec extends Template
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

namespace Mautic\\CoreBundle\\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in \$I

class Functional extends \\Codeception\\Module
{
    public function getParameterFromContainer(\$service)
    {
        return \$this->getModule('Symfony2')->_getContainer()->getParameter(\$service);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/_support/Helper/Functional.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/_support/Helper/Functional.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/_support/Helper/Functional.php");
    }
}
