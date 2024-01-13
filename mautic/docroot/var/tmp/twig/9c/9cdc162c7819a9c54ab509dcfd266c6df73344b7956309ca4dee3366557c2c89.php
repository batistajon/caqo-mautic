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

/* @bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php */
class __TwigTemplate_12f5ad31b4dff44892112b3510a4eb48031aad927917670c206e26a012aec87a extends Template
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

class IP2LocationAPILookup extends AbstractRemoteDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"http://IP2Location.com/\" target=\"_blank\">IP2Location </a> web service WS9 Package only.';
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return \"api.ip2location.com/?ip={\$this->ip}&key={\$this->auth}&package=WS9&format=json\";
    }

    /**
     * @param \$response
     */
    protected function parseResponse(\$response)
    {
        try {
            \$record = json_decode(\$response);
            if (isset(\$record->country_name)) {
                \$this->country   = \$record->country_name;
                \$this->region    = \$record->region_name;
                \$this->city      = \$record->city_name;
                \$this->latitude  = \$record->latitude;
                \$this->longitude = \$record->longitude;
                //\$this->timezone  = \$record->location->timeZone;
                \$this->zipcode = \$record->zip_code;
            }
        } catch (\\Exception \$exception) {
            if (\$this->logger) {
                \$this->logger->warn('IP LOOKUP: '.\$exception->getMessage());
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
        return "@bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php");
    }
}
