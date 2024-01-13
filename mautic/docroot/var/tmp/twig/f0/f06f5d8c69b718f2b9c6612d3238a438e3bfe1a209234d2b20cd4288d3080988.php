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

/* @bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactoryInterface.php */
class __TwigTemplate_5e7dfd7a8d848f50d5bea7ab11a8630c5bd2a0c699af3a7757f25386f7c380f5 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Sparkpost;

/**
 * Interface SparkpostFactoryInterface.
 */
interface SparkpostFactoryInterface
{
    /**
     * @param      \$host
     * @param      \$apiKey
     * @param null \$port
     *
     * @return mixed
     */
    public function create(\$host, \$apiKey, \$port = null);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactoryInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactoryInterface.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactoryInterface.php");
    }
}
