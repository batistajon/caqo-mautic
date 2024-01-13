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

/* @bundles/CoreBundle/IpLookup/ExtremeIpLookup.php */
class __TwigTemplate_65acb0c8858bc885b63ebad59f323af67ffb4fff138dc6c3735ca12446fb3cce extends Template
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

class ExtremeIpLookup extends AbstractRemoteDataLookup
{
    /**
     * Return attribution HTML displayed in the configuration UI.
     *
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"https://extreme-ip-lookup.com/\" target=\"_blank\">extreme-ip-lookup.com</a> is a free lookup service that does not require an api key.';
    }

    /**
     * Get the URL to fetch data from.
     *
     * @return string
     */
    protected function getUrl()
    {
        \$auth = !empty(\$this->auth) ? '?key='.\$this->auth : '';

        return 'https://extreme-ip-lookup.com/json/'.\$this->ip.\$auth;
    }

    /**
     * @param \$response
     */
    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response, true);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                switch (\$key) {
                    case 'region':
                        \$key = 'region';
                        break;
                    case 'country':
                        \$key = 'country';
                        break;
                    case 'city':
                        \$key = 'city';
                        break;
                    case 'businessName':
                        \$key = 'organization';
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
        return "@bundles/CoreBundle/IpLookup/ExtremeIpLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/ExtremeIpLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/ExtremeIpLookup.php");
    }
}
