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

/* @bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php */
class __TwigTemplate_17853f76814b1847f223386e998febe400fe68a1c3c09da3b9f95e3287bab3d7 extends Template
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

abstract class AbstractRemoteDataLookup extends AbstractLookup
{
    /**
     * Method to use when communicating with the service.
     *
     * @var string
     */
    protected \$method = 'get';

    /**
     * Get the URL to fetch data from.
     *
     * @return mixed
     */
    abstract protected function getUrl();

    /**
     * @param \$response
     *
     * @return mixed
     */
    abstract protected function parseResponse(\$response);

    /**
     * @return array
     */
    protected function getHeaders()
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getParameters()
    {
        return [];
    }

    /**
     * Fetch data from lookup service.
     */
    protected function lookup()
    {
        \$url = \$this->getUrl();

        try {
            \$response = ('post' == \$this->method) ?
                \$this->client->post(\$url, [
                    \\GuzzleHttp\\RequestOptions::BODY    => \$this->getParameters(),
                    \\GuzzleHttp\\RequestOptions::HEADERS => \$this->getHeaders(),
                    \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
                ]) :
                \$this->client->get(\$url, [
                    \\GuzzleHttp\\RequestOptions::HEADERS => \$this->getHeaders(),
                    \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
                ]);

            \$this->parseResponse(\$response->getBody());
        } catch (\\Exception \$exception) {
            if (\$this->logger) {
                \$this->logger->warning('IP LOOKUP: '.\$exception->getMessage());
            }
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
        return "@bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php");
    }
}
