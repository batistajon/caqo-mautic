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

/* @bundles/CoreBundle/Tests/Functional/IpLookupFactoryCest.php */
class __TwigTemplate_9b9b0d7af48b0734c024e5dfeadbce60f6b91eb0fa57f42a011fe4ea2e1ce348 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional;

use Mautic\\CoreBundle\\Factory\\IpLookupFactory;

class IpLookupFactoryCest
{
    public function ensureGettingServiceFromFactoryProvidesInstance(FunctionalTester \$I)
    {
        \$ipServices = \$I->getParameterFromContainer('mautic.ip_lookup_services');
        \$ipFactory  = new IpLookupFactory(\$ipServices);

        foreach (\$ipServices as \$service => \$details) {
            \$instance = \$ipFactory->getService(\$service);

            \$I->assertInstanceOf(
                \$details['class'],
                \$instance,
                sprintf('Expected %s for service %s but received %s instead', \$details['class'], \$service, get_class(\$instance))
            );
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/IpLookupFactoryCest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/IpLookupFactoryCest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/IpLookupFactoryCest.php");
    }
}
