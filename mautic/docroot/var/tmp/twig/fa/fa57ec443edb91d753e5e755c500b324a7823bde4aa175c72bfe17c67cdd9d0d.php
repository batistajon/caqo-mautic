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

/* @bundles/CoreBundle/IpLookup/IpstackLookup.php */
class __TwigTemplate_bf5484b0a6d4a4e20c18cb65091c3428c3ec0d671e380683db36d39113bccea1 extends Template
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

class IpstackLookup extends AbstractRemoteDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"https://ipstack.com/\" target=\"_blank\">ipstack.com</a> is a free lookup service that leverages GeoLite2 data created by MaxMind.';
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        if (empty(\$this->auth)) {
            \$this->logger->warning('FreeGeoIP has become IPStack and now requires an API key.');
        }

        return 'http://api.ipstack.com/'.\$this->ip.'?access_key='.\$this->auth.'&output=json&legacy=1';
    }

    /**
     * @param \$response
     */
    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                switch (\$key) {
                    case 'region_name':
                        \$key = 'region';
                        break;
                    case 'country_name':
                        \$key = 'country';
                        break;
                    case 'zip':
                        \$key = 'zipcode';
                        break;
                    case 'time_zone':
                        \$key = 'timezone';
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
        return "@bundles/CoreBundle/IpLookup/IpstackLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IpstackLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/IpstackLookup.php");
    }
}
