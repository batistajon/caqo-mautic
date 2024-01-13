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

/* @bundles/EmailBundle/Swiftmailer/Guzzle/ClientFactory.php */
class __TwigTemplate_060e437a11587a41ccb77cbaf94715cd212d8616be9ce077b9b89e8f8549e6f6 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Guzzle;

use GuzzleHttp\\ClientInterface;
use Http\\Adapter\\Guzzle7\\Client;

/**
 * Class ClientFactory.
 */
final class ClientFactory implements ClientFactoryInterface
{
    /**
     * @return Client
     */
    public function create(ClientInterface \$client = null)
    {
        return new Client(\$client);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Guzzle/ClientFactory.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Guzzle/ClientFactory.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Guzzle/ClientFactory.php");
    }
}
