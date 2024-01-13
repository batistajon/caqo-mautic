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

/* @bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactory.php */
class __TwigTemplate_2936a90d889746418134895db167c359c995ce4f46095fb83ade6662495f22c7 extends Template
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

use Http\\Adapter\\Guzzle7\\Client as GuzzleAdapter;
use SparkPost\\SparkPost;

final class SparkpostFactory implements SparkpostFactoryInterface
{
    /**
     * @var GuzzleAdapter
     */
    private \$client;

    public function __construct(GuzzleAdapter \$client)
    {
        \$this->client = \$client;
    }

    /**
     * @param string   \$host
     * @param string   \$apiKey
     * @param int|null \$port
     *
     * @return SparkPost
     */
    public function create(\$host, \$apiKey, \$port = null)
    {
        if ((false === strpos(\$host, '://') && '/' != substr(\$host, 0, 1))) {
            \$host = 'https://'.\$host;
        }

        \$options = [
            'key' => (\$apiKey) ?: 1234, // prevent Exception: You must provide an API key
        ];

        if (\$port) {
            \$options['port'] = \$port;
        }

        \$hostInfo = parse_url(\$host);
        if (\$hostInfo) {
            \$options['protocol'] =  \$hostInfo['scheme'];

            if (empty(\$port)) {
                \$options['port'] = 'https' === \$hostInfo['scheme'] ? 443 : 80;
            }

            \$host = \$hostInfo['host'];
            if (isset(\$hostInfo['path'])) {
                \$path = \$hostInfo['path'];
                if (preg_match('~/api/(v\\d+)\$~i', \$path, \$matches)) {
                    // Remove /api from the path and extract the version in case differnt than the Sparkpost SDK default
                    \$path               = str_replace(\$matches[0], '', \$path);
                    \$options['version'] = \$matches[1];
                }

                // Append whatever is left over to the host (assuming Momentum can be in a subfolder?)
                if ('/' !== \$path) {
                    \$host .= \$path;
                }
            }

            \$options['host'] = \$host;
        }

        // Must always return a SparkPost host or else Symfony will fail to build the container if host is empty
        return new SparkPost(\$this->client, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactory.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactory.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Sparkpost/SparkpostFactory.php");
    }
}
