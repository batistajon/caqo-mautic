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

/* @bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php */
class __TwigTemplate_5157e9ee181d6de30b5c32db49f8b34de097345b083b967086cef844d2c1c70c extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory;

use DeviceDetector\\Cache\\PSR6Bridge;
use DeviceDetector\\DeviceDetector;
use Mautic\\CacheBundle\\Cache\\CacheProvider;

/**
 * Class DeviceDetectorFactory.
 */
final class DeviceDetectorFactory implements DeviceDetectorFactoryInterface
{
    private CacheProvider \$cacheProvider;

    public function __construct(CacheProvider \$cacheProvider)
    {
        \$this->cacheProvider = \$cacheProvider;
    }

    /**
     * @param string \$userAgent
     *
     * @return DeviceDetector
     *
     * @throws \\Exception
     */
    public function create(\$userAgent)
    {
        \$detector = new DeviceDetector((string) \$userAgent);
        \$bridge   = new PSR6Bridge(\$this->cacheProvider->getCacheAdapter());
        \$detector->setCache(\$bridge);

        return \$detector;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php");
    }
}
