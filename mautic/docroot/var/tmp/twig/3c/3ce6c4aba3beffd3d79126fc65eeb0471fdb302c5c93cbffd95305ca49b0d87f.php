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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Adapter/Adapter.php */
class __TwigTemplate_37f50d14b0e04edb274dd039262f9813022932d219e41f58138ba5f3cd04e193 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Adapter;

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO;
use SparkPost\\SparkPost;
use SparkPost\\SparkPostPromise;

/**
 * Class Adapter.
 */
final class Adapter implements AdapterInterface
{
    /**
     * @var SparkPost
     */
    private \$momentumSparkpost;

    /**
     * Adapter constructor.
     */
    public function __construct(SparkPost \$momentumSparkpost)
    {
        \$this->momentumSparkpost   = \$momentumSparkpost;
    }

    /**
     * @return SparkPostPromise
     */
    public function createTransmission(TransmissionDTO \$transmissionDTO)
    {
        \$payload = json_decode(json_encode(\$transmissionDTO), true);

        return \$this->momentumSparkpost->transmissions->post(\$payload);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Adapter/Adapter.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Adapter/Adapter.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Adapter/Adapter.php");
    }
}
