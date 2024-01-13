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

/* @bundles/CoreBundle/IpLookup/IpinfodbLookup.php */
class __TwigTemplate_93d5e970df3aa974f21366a5b9b1761776a615ac4498facc12494a6cabb68e18 extends Template
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

class IpinfodbLookup extends AbstractRemoteDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"http://www.ipinfodb.com/\" target=\"_blank\">iPInfoDB</a> offers a free service (2 lookups per second) that leverages data from IP2Location. API key required.';
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return \"http://api.ipinfodb.com/v3/ip-city/?key={\$this->auth}&format=json&ip={\$this->ip}\";
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
                    case 'cityName':
                        \$key = 'city';
                        break;
                    case 'regionName':
                        \$key = 'region';
                        break;
                    case 'countryName':
                        \$key = 'country';
                        break;
                    case 'zipCode':
                        \$key = 'zipcode';
                        break;
                    case 'timeZone':
                        \$key = 'timezone';
                        break;
                }

                \$this->\$key = ucfirst(\$value);
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
        return "@bundles/CoreBundle/IpLookup/IpinfodbLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IpinfodbLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/IpinfodbLookup.php");
    }
}
