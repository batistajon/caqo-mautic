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

/* @bundles/CoreBundle/IpLookup/IpLookupFormInterface.php */
class __TwigTemplate_596e98374c144d22effd72c439370bdb3a4e10e0ede284875da297b4c3ab4d17 extends Template
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

namespace Mautic\\CoreBundle\\IpLookup;

/**
 * Interface IpLookupFormInterface.
 */
interface IpLookupFormInterface
{
    /**
     * Return name of the form service to append to the Config form UI.
     */
    public function getConfigFormService();

    /**
     * Return array of themes to include in form rendering.
     *
     * @return array
     */
    public function getConfigFormThemes();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/IpLookup/IpLookupFormInterface.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IpLookupFormInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/IpLookupFormInterface.php");
    }
}
