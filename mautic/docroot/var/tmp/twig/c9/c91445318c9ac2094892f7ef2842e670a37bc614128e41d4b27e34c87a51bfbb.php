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

/* @bundles/CoreBundle/IpLookup/GeoipsLookup.php */
class __TwigTemplate_14308a0cb5c17206a12b48d4e93330b6a4cd51a27cb81cf16a2c1f8dde4a3cb4 extends Template
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

class GeoipsLookup extends AbstractRemoteDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"http://www.geoips.com/\" target=\"_blank\">GeoIPs</a> offers tiered subscriptions for lookups.';
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return \"http://api.geoips.com/ip/{\$this->ip}/key/{\$this->auth}/output/json\";
    }

    /**
     * @param \$response
     */
    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data && !empty(\$data->response->location)) {
            foreach (\$data->response->location as \$key => \$value) {
                switch (\$key) {
                    case 'city_name':
                        \$key = 'city';
                        break;
                    case 'region_name':
                        \$key = 'region';
                        break;
                    case 'country_name':
                        \$key = 'country';
                        break;
                    case 'owner':
                        \$key = 'isp';
                        break;
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
        return "@bundles/CoreBundle/IpLookup/GeoipsLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/GeoipsLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/GeoipsLookup.php");
    }
}
