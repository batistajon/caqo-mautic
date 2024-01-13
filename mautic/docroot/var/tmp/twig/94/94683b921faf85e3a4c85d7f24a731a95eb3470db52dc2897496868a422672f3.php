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

/* @bundles/ApiBundle/Serializer/Driver/AnnotationDriver.php */
class __TwigTemplate_d7c7a0cbbc8350fd0d00e602d8f30e71322e2c80297f0db773efeae94df0e125 extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Driver;

use JMS\\Serializer\\Metadata\\ClassMetadata;
use JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver as BaseAnnotationDriver;
use Metadata\\ClassMetadata as BaseClassMetadata;

class AnnotationDriver extends BaseAnnotationDriver
{
    public function loadMetadataForClass(\\ReflectionClass \$class): ?BaseClassMetadata
    {
        // Overriding annotation driver to not generate annotation cache files
        return new ClassMetadata(\$class->getName());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Serializer/Driver/AnnotationDriver.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Driver/AnnotationDriver.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Serializer/Driver/AnnotationDriver.php");
    }
}
