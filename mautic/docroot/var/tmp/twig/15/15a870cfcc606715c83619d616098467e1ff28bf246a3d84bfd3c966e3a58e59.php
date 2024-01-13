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

/* @bundles/CoreBundle/IpLookup/MaxmindDownloadLookup.php */
class __TwigTemplate_5050582abb4689408815710c19f7e97d584e125dcc64264b2c29373bc87fce5d extends Template
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

use GeoIp2\\Database\\Reader;

class MaxmindDownloadLookup extends AbstractLocalDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return 'Free lookup that leverages GeoLite2 data created by MaxMind, available from <a href=\"https://maxmind.com\" target=\"_blank\">maxmind.com</a>. Databases must be downloaded and periodically updated.';
    }

    /**
     * @return string
     */
    public function getLocalDataStoreFilepath()
    {
        return \$this->getDataDir().'/GeoLite2-City.mmdb';
    }

    /**
     * @return string
     */
    public function getRemoteDateStoreDownloadUrl()
    {
        if (!empty(\$this->getLicenceKey())) {
            \$data                = [];
            \$data['license_key'] = \$this->getLicenceKey();
            \$data['edition_id']  = 'GeoLite2-City';
            \$data['suffix']      = 'tar.gz';
            \$queryString         = http_build_query(\$data);

            return 'https://download.maxmind.com/app/geoip_download?'.\$queryString;
        } else {
            \$this->logger->warn('MaxMind license key is required.');
        }
    }

    /**
     * @return string
     */
    private function getLicenceKey()
    {
        \$auth = explode(':', \$this->auth, 2);
        if (array_key_exists(1, \$auth)) {
            return \$auth[1];
        }

        return '';
    }

    /**
     * Extract the IP from the local database.
     */
    protected function lookup()
    {
        try {
            \$reader = new Reader(\$this->getLocalDataStoreFilepath());
            \$record = \$reader->city(\$this->ip);

            if (isset(\$record->subdivisions[0])) {
                if (count(\$record->subdivisions) > 1) {
                    // Use the first listed as the country and second as state
                    // UK -> England -> Winchester
                    \$this->country = \$record->subdivisions[0]->name;
                    \$this->region  = \$record->subdivisions[1]->name;
                } else {
                    \$this->region = \$record->subdivisions[0]->name;
                }
            }

            \$this->city      = \$record->city->name;
            \$this->country   = \$record->country->name;
            \$this->latitude  = \$record->location->latitude;
            \$this->longitude = \$record->location->longitude;
            \$this->timezone  = \$record->location->timeZone;
            \$this->zipcode   = \$record->location->postalCode;
        } catch (\\Exception \$exception) {
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
        return "@bundles/CoreBundle/IpLookup/MaxmindDownloadLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/MaxmindDownloadLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/MaxmindDownloadLookup.php");
    }
}
