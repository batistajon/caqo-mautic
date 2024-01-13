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

/* @bundles/CoreBundle/Entity/IpAddress.php */
class __TwigTemplate_c78d06b1e9d59613dac22c28a03f7b47cb4d61415eb5ffee96bf2e415241238f extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class IpAddress.
 */
class IpAddress
{
    /**
     * Set by factory of configured IPs to not track.
     *
     * @var array
     */
    private \$doNotTrack = [];

    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$ipAddress;

    /**
     * @var array<string,string>
     */
    private \$ipDetails;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('ip_addresses')
            ->setCustomRepositoryClass('Mautic\\CoreBundle\\Entity\\IpAddressRepository')
            ->addIndex(['ip_address'], 'ip_search');

        \$builder->addId();

        \$builder->createField('ipAddress', 'string')
            ->columnName('ip_address')
            ->length(45)
            ->build();

        \$builder->createField('ipDetails', 'array')
            ->columnName('ip_details')
            ->nullable()
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('ipAddress')
            ->addListProperties(
                [
                    ['ipAddress', 'ip'],
                ]
            )
            ->addProperties(
                [
                    'id',
                    'ipAddress',
                    'ipDetails',
                ]
            )
            ->addGroup('ipAddress', true)
            ->build();
    }

    /**
     * IpAddress constructor.
     *
     * @param string|null \$ipAddress
     */
    public function __construct(\$ipAddress = null)
    {
        \$this->ipAddress = \$ipAddress;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set ipAddress.
     *
     * @param \$ipAddress
     *
     * @return \$this
     */
    public function setIpAddress(\$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;

        return \$this;
    }

    /**
     * Get ipAddress.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * Set ipDetails.
     *
     * @param array<string,string> \$ipDetails
     *
     * @return IpAddress
     */
    public function setIpDetails(\$ipDetails)
    {
        \$this->ipDetails = \$ipDetails;

        return \$this;
    }

    /**
     * Get ipDetails.
     *
     * @return array<string,string>
     */
    public function getIpDetails()
    {
        return \$this->ipDetails;
    }

    /**
     * Set list of IPs to not track.
     */
    public function setDoNotTrackList(array \$ips)
    {
        \$this->doNotTrack = \$ips;
    }

    /**
     * Get list of IPs to not track.
     *
     * @return array
     */
    public function getDoNotTrackList()
    {
        return \$this->doNotTrack;
    }

    /**
     * Determine if this IP is trackable.
     */
    public function isTrackable()
    {
        if (!empty(\$this->doNotTrack)) {
            foreach (\$this->doNotTrack as \$ip) {
                if (false !== strpos(\$ip, '/')) {
                    // has a netmask range
                    // https://gist.github.com/tott/7684443
                    list(\$range, \$netmask) = explode('/', \$ip, 2);
                    \$range_decimal         = ip2long(\$range);
                    \$ip_decimal            = ip2long(\$this->ipAddress);
                    \$wildcard_decimal      = pow(2, (32 - \$netmask)) - 1;
                    \$netmask_decimal       = ~\$wildcard_decimal;

                    if (((\$ip_decimal & \$netmask_decimal) == (\$range_decimal & \$netmask_decimal))) {
                        return false;
                    }

                    continue;
                }

                if (\$ip === \$this->ipAddress) {
                    return false;
                }

                if (preg_match('/'.str_replace('.', '\\\\.', \$ip).'/', \$this->ipAddress)) {
                    return false;
                }
            }
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/IpAddress.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/IpAddress.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/IpAddress.php");
    }
}