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

/* @bundles/CoreBundle/IpLookup/TelizeLookup.php */
class __TwigTemplate_a3d475c5827498b0e6a840439a3b5d1a8a2d18c140655dfc02d3da3c539516b8 extends Template
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

class TelizeLookup extends AbstractRemoteDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"https://market.mashape.com/fcambus/telize/\" target=\"_blank\">Telize</a> is a paid lookup service.';
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return \"https://telize-v1.p.mashape.com/geoip/{\$this->ip}\";
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        return [
            'X-Mashape-Key' => \$this->auth,
            'Accept'        => 'application/json',
        ];
    }

    /**
     * Populates properties with obtained data from the service.
     *
     * @param mixed \$response Response from the service
     */
    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                if ('postal_code' == \$key) {
                    \$key = 'zipcode';
                }

                \$this->\$key = \$value;
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
        return "@bundles/CoreBundle/IpLookup/TelizeLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/TelizeLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/TelizeLookup.php");
    }
}
